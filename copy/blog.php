<?php
/**
 * blog.php — Daftar semua artikel (pasal 3 & 5 blueprint)
 * URL bersih: /blog   (lihat .htaccess aturan 3)
 * Sumber data: artikel/articles-data.php (registry tunggal).
 */
$page_title     = 'Blog Artikel Sedot WC & Septic Tank Medan | Medansedotwc.my.id';
$meta_desc      = 'Kumpulan artikel sedot WC dan perawatan septic tank untuk rumah di Medan: penyebab WC mampet, jadwal sedot, bau, resapan macet, dan biaya.';
$canonical_path = '/blog';

// Muat registry artikel (header.php juga memuatnya; dimuat ulang agar aman bila file ini diakses langsung)
$articles_data = require __DIR__ . '/artikel/articles-data.php';

// Urutkan dari yang terbaru
usort($articles_data, function ($a, $b) {
    return strcmp($b['tanggal'], $a['tanggal']);
});

$tanggal_hari_ini = '2026-10-01';

// JSON-LD Blog + ItemList
$item_list = array();
foreach ($articles_data as $i => $art) {
    $item_list[] = array(
        '@type'                => 'ListItem',
        'position'             => $i + 1,
        'url'                  => 'https://medansedotwc.my.id/blog/' . $art['slug'],
        'name'                 => $art['judul'],
    );
}
$schema_jsonld = json_encode(array(
    '@context'   => 'https://schema.org',
    '@type'      => 'CollectionPage',
    'name'       => 'Blog Sedot WC Medan',
    'url'        => 'https://medansedotwc.my.id/blog',
    'description'=> 'Artikel panduan perawatan kloset, septic tank, dan saluran limbah rumah tangga di Medan.',
    'mainEntity' => array(
        '@type'            => 'ItemList',
        'numberOfItems'    => count($articles_data),
        'itemListElement'  => $item_list,
    ),
), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

require_once __DIR__ . '/header.php';

/** Format tanggal Indonesia: "2026-09-15" -> "15 September 2026" */
function format_tanggal_id($iso) {
    static $bulan = array(1=>'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
    $p = explode('-', $iso);
    if (count($p) !== 3) return $iso;
    return intval($p[2]) . ' ' . $bulan[intval($p[1])] . ' ' . $p[0];
}
?>
<section class="page-wrap">
    <div class="container">

        <h1 style="text-align:center;font-size:clamp(1.7rem,4vw,2.3rem);color:#0a1628;margin-bottom:14px">Blog &amp; Artikel Sedot WC Medan</h1>
        <p class="blog-intro">Panduan praktis soal kloset mampet, septic tank penuh, bau kamar mandi, dan perawatan saluran limbah rumah tangga — ditulis untuk kondisi rumah dan gang di Medan. Semua artikel gratis dibaca, tanpa perlu memanggil teknisi lebih dulu.</p>

        <?php if (empty($articles_data)): ?>
            <p style="text-align:center;color:#5a6a7a">Belum ada artikel yang terbit. Silakan cek kembali nanti atau <a href="/kontak">hubungi kami</a> untuk bertanya langsung.</p>
        <?php else: ?>

        <div class="article-grid">
            <?php foreach ($articles_data as $art):
                // Tandai artikel yang dianggap "baru" (terbit <= 30 hari terakhir)
                $umur_hari = floor((strtotime($tanggal_hari_ini) - strtotime($art['tanggal'])) / 86400);
                $badge_baru = ($umur_hari >= 0 && $umur_hari <= 30);
            ?>
            <article class="article-card">
                <span class="cat"><?php echo htmlspecialchars($art['kategori']); ?><?php echo $badge_baru ? ' • Baru' : ''; ?></span>
                <h2><a href="/blog/<?php echo htmlspecialchars($art['slug']); ?>"><?php echo htmlspecialchars($art['judul']); ?></a></h2>
                <p><?php echo htmlspecialchars($art['excerpt']); ?></p>
                <span style="font-size:.8rem;color:#8a9aa8;margin-bottom:12px"><?php echo format_tanggal_id($art['tanggal']); ?></span>
                <a class="read-more" href="/blog/<?php echo htmlspecialchars($art['slug']); ?>">Baca selengkapnya →</a>
            </article>
            <?php endforeach; ?>
        </div>

        <div class="article-cta" style="max-width:780px">
            <h2>Masalahnya Tidak Juga Selesai?</h2>
            <p>Kirim foto lokasi dan gejalanya lewat WhatsApp. Kami bantu diagnosis awal, dan kalau perlu, survey GRATIS ke Medan Sunggal dan sekitarnya.</p>
            <div class="btn-row">
                <a href="https://wa.me/<?php echo $nomor_wa_link; ?>?text=Halo%20Sedot%20WC%20Medan%2C%20saya%20sudah%20baca%20artikel%20di%20blog%20dan%20ingin%20tanya" class="cta-btn" target="_blank" rel="noopener">💬 WhatsApp <?php echo $nomor_wa_display; ?></a>
                <a href="/" class="cta-btn yellow">Lihat Layanan Kami</a>
            </div>
        </div>

        <?php endif; ?>
    </div>
</section>
<?php require_once __DIR__ . '/footer.php'; ?>
