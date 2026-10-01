# PANDUAN CHECKLIST FASE 5 — Persetujuan AdSense & Pasca-Publish

Situs: **medansedotwc.my.id** (kode final di folder `copy/`)
Kondisi saat ini: SEMUA placeholder `[PUBLISHER_ID_ADSENSE]` sengaja dibiarkan —
**jangan mengarang ID**. Ganti dengan ID asli dari dashboard AdSense Anda.

---

## A. Penggantian Placeholder (wajib, 2 file)

| # | Lokasi | Yang diganti | Sumber nilai asli |
|---|--------|--------------|-------------------|
| A1 | `header.php` baris loader | `client=ca-pub-[PUBLISHER_ID_ADSENSE]` | Dashboard AdSense → Settings → Publisher ID (`ca-pub-XXXXXXXXXXXXXXXX`, 16 digit) |
| A2 | `ads.txt` (root) | `google.com, [PUBLISHER_ID_ADSENSE], DIRECT, f08c47fec0942fa0` | ID yang sama. Hash `f08c47fec0942fa0` adalah hash resmi Google untuk AdSense langsung — jangan diubah. Jika memakai perantara/reseller, tambah barisnya sesuai surat mereka. |

Setelah diganti, cek cepat:
```bash
curl -s https://medansedotwc.my.id/ads.txt      # harus 4 field, tanpa kurung siku
grep -c "PUBLISHER_ID" header.php ads.txt        # hasil akhir harus 0
```

## B. Sebelum Submit Aplikasi AdSense

1. **Upload seluruh isi `copy/` ke hosting** (cPanel/FileZilla/git). Pastikan `.htaccess` ikut ter-upload (dotfile sering tersembunyi).
2. Verifikasi rewrite bekerja: `https://medansedotwc.my.id/blog/penyebab-wc-mampet` → HTTP 200, bukan 404. Kalau 404, aktifkan `mod_rewrite` + `AllowOverride All`, atau minta support hosting.
3. **SSL aktif** (HTTPS hijau di semua halaman; paksa via aturan .htaccess yang sudah ada).
4. **Domain final, bukan redirect**: canonical, sitemap, dan semua link internal sudah menunjuk `medansedotwc.my.id` (bukan subdomain sementara).
5. Halaman wajib bisa diakses bersih: `/tentang`, `/kontak`, `/kebijakan-privasi`, `/disclaimer` (via rewrite) dan fisik `/pages/*.php`.
6. Sitemap terdaftar: robots.txt menunjuk `sitemap.xml`; submit di Google Search Console → Sitemaps.
7. **Konten minimum**: 15 artikel live ≥600 kata (sudah terpenuhi — audit terakhir 65/66 PASS). Tunggu minimal 2–4 minggu trafik/indexing sebelum apply jika situs baru sekali.
8. Hapus/pindahkan `build-sitemap.php` dari server publik ATAU blokir via .htaccess bila tidak dipakai ulang (opsional, kebersihan).

## C. Saat Apply & Setelah Disetujui

1. Apply di adsense.google.com → masukkan URL lengkap `https://medansedotwc.my.id`.
2. Tempel snippet verifikasi (tag `<meta>` atau file HTML) yang diberikan — tambahkan di `header.php` tepat setelah `<head>`, JANGAN duplikat loader.
3. Jika ditolak "belum cukup konten/kualitas": tunggu 2–4 minggu, tambah artikel (registry `articles-data.php` = sumber tunggal), perbaiki ejaan, ajukan ulang. Penolakan berulang dalam <1 minggu bisa menunda review lebih lama.
4. Setelah disetujui: biarkan auto-ads ON minimal 1–2 minggu pertama; pantau halaman berisiko (FAQ ringkas, tabel harga) lalu matikan unit per-slot bila mengganggu.
5. **Jangan pernah**: klik iklan sendiri, meminta orang lain mengklik, menempatkan iklan >4 unit per halaman, atau mengarahkan teks "iklan saya" — penyebab suspensi paling umum.

## D. Pemeliharaan Berkala

- Artikel baru: buat `artikel/<slug>.php` (salin pola file yang ada) → daftarkan di `articles-data.php` → jalankan `php build-sitemap.php` → submit ulang sitemap di GSC.
- Audit otomatis: `python3 audit.py` di root workspace (target: ≥32 PASS; kondisi sekarang 65/66 — satu-satunya FAIL adalah ID AdSense asli yang memang menunggu akun Anda).
- Cek Core Web Vitals di PageSpeed Insights tiap kuartal; target LCP < 2,5 s.
