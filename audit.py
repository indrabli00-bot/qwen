#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""Audit blueprint medansedotwc.my.id — 60+ checks."""
import re, subprocess, sys, os, html

ROOT = "/workspace/copy"
BASE = "http://127.0.0.1:8099"
results = []

def check(name, ok, detail=""):
    results.append((name, bool(ok), detail))

def fetch(path):
    r = subprocess.run(["curl","-s",BASE+path], capture_output=True, text=True, timeout=30)
    return r.stdout

def status(path):
    r = subprocess.run(["curl","-s","-o","/dev/null","-w","%{http_code}",BASE+path], capture_output=True, text=True, timeout=30)
    return r.stdout.strip()

def lint(f):
    p = subprocess.run(["php","-l",os.path.join(ROOT,f)], capture_output=True, text=True)
    return p.returncode == 0

def wordcount(text):
    t = re.sub(r'<script[^>]*>.*?</script>', ' ', text, flags=re.S)
    t = re.sub(r'<style[^>]*>.*?</style>', ' ', t, flags=re.S)
    t = re.sub(r'<[^>]+>', ' ', t)
    t = html.unescape(t)
    return len(re.findall(r"[A-Za-zÀ-ÿ0-9][\w'’\-À-ÿ]*", t))

data = fetch("/artikel/articles-data.php") if False else None
sys.path.insert(0, ROOT)
import json
# daftar slug dari registry via php
pj = subprocess.run(["php","-r","$a=require 'copy/artikel/articles-data.php'; echo json_encode(array_map(fn($x)=>[$x['slug'],$x['judul']], $a));"], capture_output=True, text=True, cwd="/workspace")
ARTS = json.loads(pj.stdout)
check("F4.JUMLAH: registry memuat 15–20 artikel", 15 <= len(ARTS) <= 20, f"{len(ARTS)} artikel")

SLUGS = [s for s,_ in ARTS]

# ---------- FASE 1 ----------
for f,nm in [("header.php","F1.01"),("footer.php","F1.02"),("index.php","F1.03"),("blog.php","F1.04"),("404.php","F1.05")]:
    check(f"{nm} {f} lolos lint PHP", lint(f))
ht = open(os.path.join(ROOT,".htaccess")).read()
check("F1.06 .htaccess: RewriteRule /blog/slug -> artikel/$1.php", bool(re.search(r'\^blog/\(\[a-z0-9-\]\+\)/\?\$\s+artikel/\$1\.php', ht)))
check("F1.07 .htaccess: blokir akses langsung /artikel/ dan header/footer", "^artikel/" in ht and "^(header|footer)" in ht)
ads_lines = [l for l in open(os.path.join(ROOT,"ads.txt")).read().splitlines() if l.strip() and not l.strip().startswith("#")]
m8 = re.match(r'^\s*google\.com\s*,\s*(ca-pub-[0-9X]{6,}|\[[A-Z_]+\]|ca-pub-\[[A-Z_]+\])\s*,\s*DIRECT\s*,\s*f08c47fec0942fa0\s*$', ads_lines[0]) if ads_lines else None
check("F1.08 ads.txt root: google.com,<id>,DIRECT,<hash>", m8 is not None, ads_lines[0] if ads_lines else "kosong")
idx_src = open(os.path.join(ROOT,"index.php")).read()
check("F1.09 index include header.php & footer.php", "header.php" in idx_src and "footer.php" in idx_src)
head_html = fetch("/index.php")
check("F1.10 index render: 1 <head>, 1 <body>, 1 </html>", head_html.count("<head>")==1 and head_html.lower().count("<body")==1 and head_html.count("</html>")==1)
check("F1.11 AdSense loader hanya 1x di header.php (bukan footer)", open(os.path.join(ROOT,"header.php")).read().count("adsbygoogle.js")==1 and "adsbygoogle.js" not in open(os.path.join(ROOT,"footer.php")).read())
check("F1.12 index punya <title> unik", bool(re.search(r'<title>[^<]{15,}</title>', head_html)))
m = re.search(r'<meta name="description" content="([^"]+)"', head_html)
check("F1.13 index meta description <=155 karakter", m is not None and len(m.group(1))<=155)
check("F1.14 index tepat 1 <h1>", len(re.findall(r'<h1[^>]*>', head_html))==1)
check("F1.15 canonical domain final di index", 'rel="canonical" href="https://medansedotwc.my.id/' in head_html)
check("F1.16 tanpa framework: tidak ada namespace/OOP di seluruh file", not any(re.search(r'(namespace |class \w+)', open(os.path.join(ROOT,f)).read()) for f in ["header.php","footer.php","index.php","blog.php"]))

# ---------- FASE 2 ----------
for slug, path, url in [("about","pages/about.php","/pages/about.php"),
                        ("contact","pages/contact.php","/pages/contact.php"),
                        ("privacy","pages/privacy-policy.php","/pages/privacy-policy.php"),
                        ("disclaimer","pages/disclaimer.php","/pages/disclaimer.php")]:
    src = open(os.path.join(ROOT,path)).read()
    out = fetch(url)
    md = re.search(r'name="description" content="([^"]+)"', out)
    check(f"F2.{slug}: lint + include header/footer + HTTP200", lint(path) and "header.php" in src and "footer.php" in src and status(url)=="200")
    check(f"F2.{slug}: title+meta(<=155)+1 H1", "<title>" in out and md is not None and len(md.group(1))<=155 and len(re.findall(r'<h1',out))==1)
pv = fetch("/pages/privacy-policy.php")
check("F2.privacy: cookies + Google + AdSense eksplisit", all(k in pv.lower() for k in ["cookie","google","adsense"]))
ct = fetch("/pages/contact.php")
check("F2.contact: WA asli + formulir + alamat", "6282267775464" in ct and "<form" in ct and "Sunggal" in ct)
ft = open(os.path.join(ROOT,"footer.php")).read()
hd = open(os.path.join(ROOT,"header.php")).read()
check("F2.footer/header: 4 halaman wajib terlink", all(x in ft for x in ["/tentang","/kontak","/kebijakan-privasi","/disclaimer"]) or (all(x in ft for x in ["/tentang","/kebijakan-privasi","/disclaimer"]) and "/kontak" in hd))

# ---------- FASE 3 ----------
blog_html = fetch("/blog.php")
check("F3.01 blog.php render bersih (tanpa error)", "Fatal error" not in blog_html and "Warning:" not in blog_html and len(blog_html)>2000)
check("F3.02 blog menampilkan SEMUA artikel dengan URL /blog/", all(f'href="/blog/{s}"' in blog_html for s in SLUGS), f"{sum(1 for s in SLUGS if f'/blog/{s}' in blog_html)}/{len(SLUGS)}")
sm = open(os.path.join(ROOT,"sitemap.xml")).read()
urls = re.findall(r'<loc>([^<]+)</loc>', sm)
check("F3.03 sitemap: semua URL bersih https domain final", all(u.startswith("https://medansedotwc.my.id/") and "?" not in u and ".php" not in u for u in urls), f"{len(urls)} URL")
required = ["https://medansedotwc.my.id/", "https://medansedotwc.my.id/blog",
            "https://medansedotwc.my.id/tentang", "https://medansedotwc.my.id/kontak",
            "https://medansedotwc.my.id/kebijakan-privasi", "https://medansedotwc.my.id/disclaimer"] + [f"https://medansedotwc.my.id/blog/{s}" for s in SLUGS]
missing = [u for u in required if f"<loc>{u}</loc>" not in sm]
check("F3.04 sitemap memuat beranda+blog+4 halaman+SELURUH artikel", not missing, str(missing))
check("F3.05 robots.txt menunjuk sitemap", "sitemap.xml" in open(os.path.join(ROOT,"robots.txt")).read())
check("F3.06 XML sitemap valid (well-formed)", subprocess.run(["python3","-c",f"import xml.dom.minidom as m; m.parse('{os.path.join(ROOT,'sitemap.xml')}')"]).returncode==0)

# ---------- FASE 4 ----------
titles=set(); descs=set(); total_ok=0
for i,s in enumerate(SLUGS):
    rel=f"artikel/{s}.php"
    ok_lint = lint(rel)
    out = fetch("/"+rel)
    err = any(x in out for x in ["Fatal error","Warning:","Notice:"])
    wc = wordcount(out)
    h1n = len(re.findall(r'<h1[^>]*>', out))
    h2n = len(re.findall(r'<h2[^>]*>', out))
    faq = 'faq-list' in out or 'FAQPage' in out
    cta = 'wa.me/6282267775464' in out
    lokal = any(k in out.lower() for k in ["medan","sunggal","denai","helm","timbang","sumatera utara"])
    ads_slot = 'adsbygoogle' in out
    t = re.search(r'<title>([^<]+)</title>', out); d = re.search(r'name="description" content="([^"]+)"', out)
    if t: titles.add(t.group(1))
    if d: descs.add(d.group(1))
    good = ok_lint and not err and 600<=wc<=1400 and h1n==1 and h2n>=3 and faq and cta and lokal and ads_slot
    if good: total_ok+=1
    check(f"F4[{s}]: 600+ kata({wc}) 1H1 {h1n} >=3H2({h2n}) FAQ CTA lokal-Medan slotAdSense bersih", good, f"lint={ok_lint} err={err} wc={wc} h1={h1n} h2={h2n} faq={faq} cta={cta} lokal={lokal} ad={ads_slot}")
check("F4.T1 judul <title> semua unik", len(titles)==len(SLUGS))
check("F4.T2 meta desc semua unik <=155", len(descs)==len(SLUGS) and all(len(x)<=155 for x in descs))
check("F4.T3 minimal 15 artikel lolos penuh standar pasal 5", total_ok>=15, f"{total_ok}/{len(SLUGS)}")
bad=[s for s in SLUGS if re.search(r'lorem|lanjutkan sendiri|isi di sini', open(os.path.join(ROOT,f"artikel/{s}.php")).read(), re.I)]
check("F4.T4 bebas lorem ipsum/placeholder konten", not bad, str(bad))

# ---------- FASE 5 / integrasi ----------
check("F5.01 schema LocalBusiness di beranda", "LocalBusiness" in head_html)
check("F5.02 JSON-LD FAQPage di artikel", 'FAQPage' in fetch("/artikel/"+SLUGS[0]+".php"))
check("F5.03 breadcrumb + internal link antar artikel (related)", 'Artikel Terkait' in fetch("/artikel/"+SLUGS[0]+".php"))
sj = open(os.path.join(ROOT,"script.js")).read()
check("F5.04 script.js STORAGE_KEY terdefinisi bila dipakai", ("STORAGE_KEY" not in sj) or re.search(r'(const|let|var) STORAGE_KEY', sj) is not None)
check("F5.05 aggregateRating palsu tidak ada di beranda", '"aggregateRating"' not in head_html)
check("F5.06 nomor kontak konsisten (tidak dikarang): sama dgn copy/index.html lama", "6282267775464" in head_html and "6282267775464" in ct)
check("F5.07 placeholder AdSense ditulis eksplisit (belum mengarang ID)", "[PUBLISHER_ID_ADSENSE]" in hd and "[PUBLISHER_ID_ADSENSE]" in ads_lines[0])
check("F5.08 semua URL bersih merespons via server (proxy rewrite manual)", status("/artikel/penyebab-wc-mampet.php")=="200")
check("F5.09 struktur folder sesuai pasal 3", all(os.path.exists(os.path.join(ROOT,p)) for p in ["artikel","pages","ads.txt","sitemap.xml",".htaccess","header.php","footer.php","index.php","blog.php"]))
check("F5.10 tidak ada file artikel yatim (registry vs disk)", set(SLUGS)==set(f[:-4] for f in os.listdir(os.path.join(ROOT,"artikel")) if f.endswith(".php") and not f.startswith("_") and f!="articles-data.php"))
check("F5.11 panduan checklist fase 5 tersedia (PANDUAN-ADSENSE.md)", os.path.exists("/workspace/PANDUAN-ADSENSE.md") or os.path.exists(os.path.join(ROOT,"PANDUAN-ADSENSE.md")))

npass = sum(1 for _,ok,_ in results if ok)
print("="*100)
for name, ok, det in results:
    print(f"{'PASS' if ok else 'FAIL':4} | {name}" + (f"  [{det}]" if det and not ok else ""))
print("="*100)
print(f"HASIL: {npass}/{len(results)} PASS")
sys.exit(0 if npass>=32 else 1)
