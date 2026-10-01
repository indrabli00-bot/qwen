<?php
/**
 * artikel/_render.php — komponen bersama untuk SEMUA halaman artikel.
 * File ini TIDAK diakses lewat URL (folder /artikel/ diblokir di .htaccess,
 * kecuali file .php yang dipanggil rewrite — jadi hanya dipakai via require).
 *
 * Fungsi tersedia:
 *   art_breadcrumb($judul)          -> navigasi breadcrumb + JSON-LD BreadcrumbList
 *   art_related_html($slug, $all)   -> 3 artikel terkait dari registry
 *   art_faq_jsonld($faq)            -> JSON-LD FAQPage dari array ['q'=>..,'a'=>..]
 *   art_cta()                       -> blok CTA soft-selling standar
 *   art_meta_tanggal($iso)          -> tanggal format Indonesia
 */

if (!defined('ART_BASE')) { define('ART_BASE', 'https://medansedotwc.my.id'); }

function art_meta_tanggal($iso) {
    static $bulan = array(1=>'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
    $p = explode('-', $iso);
    if (count($p) !== 3) return $iso;
    return intval($p[2]) . ' ' . $bulan[intval($p[1])] . ' ' . $p[0];
}

function art_breadcrumb($judul) {
    $j = htmlspecialchars($judul, ENT_QUOTES);
    ?>
<nav class="breadcrumb" aria-label="Breadcrumb" style="max-width:780px;margin:0 auto 26px;font-size:.85rem;color:#5a6a7a">
    <a href="/" style="color:#00a8cc;text-decoration:none">Beranda</a> ›
    <a href="/blog" style="color:#00a8cc;text-decoration:none">Blog</a> ›
    <span><?php echo $j; ?></span>
</nav>
    <?php
}

function art_related_html($slug_now, $all) {
    // Ambil 3 artikel lain yang terdekat posisinya di registry (variasi kategori sederhana)
    $idx = null;
    foreach ($all as $i => $a) { if ($a['slug'] === $slug_now) { $idx = $i; break; } }
    if ($idx === null || count($all) < 2) return '';

    $related = array();
    foreach ($all as $a) {
        if ($a['slug'] !== $slug_now && $a['kategori'] === $all[$idx]['kategori']) $related[] = $a;
    }
    foreach ($all as $a) {
        if (count($related) >= 3) break;
        if ($a['slug'] !== $slug_now && !in_array($a, $related)) $related[] = $a;
    }
    $related = array_slice($related, 0, 3);
    ?>
<div style="max-width:780px;margin:40px auto 0">
    <h2 style="font-size:1.2rem;color:#0a1628;border-left:5px solid #f5a623;padding-left:12px;margin-bottom:18px">Artikel Terkait</h2>
    <div class="article-grid" style="grid-template-columns:repeat(auto-fill,minmax(220px,1fr));gap:16px">
        <?php foreach ($related as $r): ?>
        <div class="article-card" style="padding:18px">
            <span class="cat"><?php echo htmlspecialchars($r['kategori']); ?></span>
            <h2 style="font-size:1rem"><a href="/blog/<?php echo htmlspecialchars($r['slug']); ?>"><?php echo htmlspecialchars($r['judul']); ?></a></h2>
        </div>
        <?php endforeach; ?>
    </div>
</div>
    <?php
}

function art_faq_jsonld(array $faq) {
    $main = array();
    foreach ($faq as $f) {
        $main[] = array(
            '@type' => 'Question',
            'name'  => $f['q'],
            'acceptedAnswer' => array('@type' => 'Answer', 'text' => $f['a']),
        );
    }
    return json_encode(array(
        '@context'   => 'https://schema.org',
        '@type'      => 'FAQPage',
        'mainEntity' => $main,
    ), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
}

/**
 * JSON-LD gabungan Article + FAQPage + BreadcrumbList untuk satu artikel.
 * Dipanggil SETIAP file artikel SEBELUM require header.php (header mencetak <head>).
 */
function art_schema_article(array $faq, array $art) {
    $url = ART_BASE . '/blog/' . $art['slug'];
    return json_encode(array(
        '@context' => 'https://schema.org',
        '@graph'   => array(
            array(
                '@type'            => 'Article',
                'headline'         => $art['judul'],
                'description'      => $art['meta_desc'],
                'datePublished'    => $art['tanggal'],
                'dateModified'     => '2026-10-01',
                'inLanguage'       => 'id-ID',
                'author'           => array('@type' => 'Organization', 'name' => 'Sedot WC Medan', 'url' => ART_BASE . '/tentang'),
                'publisher'        => array('@type' => 'Organization', 'name' => 'Sedot WC Medan',
                                             'logo' => array('@type' => 'ImageObject', 'url' => ART_BASE . '/assets/logo.png')),
                'mainEntityOfPage' => $url,
            ),
            array(
                '@type'      => 'FAQPage',
                'mainEntity' => array_map(function ($f) {
                    return array('@type' => 'Question', 'name' => $f['q'],
                                 'acceptedAnswer' => array('@type' => 'Answer', 'text' => $f['a']));
                }, $faq),
            ),
            array(
                '@type'            => 'BreadcrumbList',
                'itemListElement'  => array(
                    array('@type' => 'ListItem', 'position' => 1, 'name' => 'Beranda', 'item' => ART_BASE . '/'),
                    array('@type' => 'ListItem', 'position' => 2, 'name' => 'Blog', 'item' => ART_BASE . '/blog'),
                    array('@type' => 'ListItem', 'position' => 3, 'name' => $art['judul'], 'item' => $url),
                ),
            ),
        ),
    ), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
}

function art_cta() {
    global $nomor_wa_link, $nomor_wa_display;
    ?>
<div class="article-cta">
    <h2>WC Bermasalah dan Tidak Selesai Juga?</h2>
    <p>Setelah mencoba langkah di atas, kalau aliran tetap lambat atau muncul bau, kemungkinan perlu penanganan langsung di lokasi. Kirim foto dan ceritanya lewat WhatsApp — diagnosis awal gratis, survey area Medan Sunggal sekitarnya GRATIS.</p>
    <div class="btn-row">
        <a href="https://wa.me/<?php echo $nomor_wa_link; ?>?text=Halo%20Sedot%20WC%20Medan%2C%20saya%20membaca%20artikel%20di%20website%20dan%20butuh%20bantuan" class="cta-btn" target="_blank" rel="noopener">💬 WhatsApp <?php echo $nomor_wa_display; ?></a>
        <a href="/#services" class="cta-btn yellow">Lihat Daftar Layanan</a>
    </div>
</div>
    <?php
}
