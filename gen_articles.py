#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
Generator artikel medansedotwc.my.id — membuat file /artikel/<slug>.php
dengan pola identik dengan 2 artikel yang sudah ada (penyebab-wc-mampet.php,
cara-merawat-septic-tank.php): header PHP -> $faq -> _render.php -> schema ->
header.php -> breadcrumb/article-shell/h1/meta/body/FAQ/CTA/related -> footer.
"""
import os, re

ROOT = "/workspace/copy/artikel"

HEAD_TMPL = '''<?php
/**
 * Artikel: {JUDUL}
 * URL bersih: /blog/{SLUG}   (via .htaccess aturan 3)
 */
$articles_all = require __DIR__ . '/articles-data.php';
$this_article = null;
foreach ($articles_all as $a) {{ if ($a['slug'] === '{SLUG}') {{ $this_article = $a; break; }} }}

$page_title     = $this_article['judul'] . ' | Sedot WC Medan';
$meta_desc      = $this_article['meta_desc'];
$canonical_path = '/blog/' . $this_article['slug'];

$faq = array(
{FAQ_PHP}
);

require_once __DIR__ . '/_render.php';
$schema_jsonld = art_schema_article($faq, $this_article);

require_once __DIR__ . '/../header.php';
?>
<section class="page-wrap">
    <div class="container">
        <?php art_breadcrumb($this_article['judul']); ?>
        <article class="article-shell">
            <h1><?php echo htmlspecialchars($this_article['judul']); ?></h1>
            <div class="article-meta">
                <span>Diterbitkan: <?php echo art_meta_tanggal($this_article['tanggal']); ?></span>
                <span>Kategori: <?php echo htmlspecialchars($this_article['kategori']); ?></span>
                <span>Estimasi baca: {MINIT} menit</span>
            </div>

            <div class="article-body">
{BODY}
                <h2>Pertanyaan yang Sering Diajukan</h2>
                <div class="faq-list">
                    <?php foreach ($faq as $f): ?>
                    <details class="faq-item">
                        <summary><?php echo htmlspecialchars($f['q']); ?></summary>
                        <div class="faq-answer"><?php echo htmlspecialchars($f['a']); ?></div>
                    </details>
                    <?php endforeach; ?>
                </div>

                <?php art_cta(); ?>
                <?php art_related_html($this_article['slug'], $articles_all); ?>
            </div>
        </article>
    </div>
</section>
<?php require_once __DIR__ . '/../footer.php'; ?>
'''

def esc(s):
    return s.replace("\\", "\\\\").replace("'", "\\'")

def faq_php(faq):
    lines = []
    for q, a in faq:
        lines.append("    array('q' => '%s',\n          'a' => '%s')," % (esc(q), esc(a)))
    return "\n".join(lines)

def build(slug, menit, paras, faq):
    body_lines = []
    for p in paras:
        # blok khusus dimulai dengan marker @@ (html mentah, mis. tabel/info-box)
        if p.startswith("@@"):
            body_lines.append(p[2:].strip())
        else:
            body_lines.append("                <p>%s</p>" % p)
    body = "\n".join(body_lines) + "\n"
    html = HEAD_TMPL.format(JUDUL="", SLUG=slug, MINIT=menit,
                            FAQ_PHP=faq_php(faq), BODY=body)
    path = os.path.join(ROOT, slug + ".php")
    with open(path, "w", encoding="utf-8") as f:
        f.write(html)
    words = sum(len(re.findall(r"[A-Za-zÀ-ÿ0-9]+", p)) for p in paras if not p.startswith("@@"))
    print("%-42s %6d kata (badan) -> ditulis" % (slug, words))
