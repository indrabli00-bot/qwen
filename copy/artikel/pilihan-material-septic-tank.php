<?php
/**
 * Artikel: 
 * URL bersih: /blog/pilihan-material-septic-tank   (via .htaccess aturan 3)
 */
$articles_all = require __DIR__ . '/articles-data.php';
$this_article = null;
foreach ($articles_all as $a) { if ($a['slug'] === 'pilihan-material-septic-tank') { $this_article = $a; break; } }

$page_title     = $this_article['judul'] . ' | Sedot WC Medan';
$meta_desc      = $this_article['meta_desc'];
$canonical_path = '/blog/' . $this_article['slug'];

$faq = array(
    array('q' => 'Umur pakai tiap material?',
          'a' => 'Beton cor bermutu: 20–30 tahun. Pracetak: 15–25 tahun. Fiberglass berkualitas: 10–20 tahun (sambungan dan ballast menentukan). Semua bisa jauh lebih pendek jika instalasi asal-asalan.'),
    array('q' => 'Bagaimana mengecek material tangki lama saya?',
          'a' => 'Buka bak kontrol: permukaan kasar berpori berarti beton; serat anyaman mengilap berarti fiberglass; nat antar-lempeng berarti panel pracetak. Foto dinding dalamnya, kirim ke teknisi untuk konfirmasi.'),
    array('q' => 'Boleh ganti fiberglass di atas pondasi beton lama?',
          'a' => 'Boleh, dengan syarat dasar lubang rata dan diberi lantai kerja baru sesuai spesifikasi ballast pabrikan. Jangan menempatkan badan ringan langsung di atas rongga bekas.'),
    array('q' => 'Mana yang tahan pergerakan tanah gambut?',
          'a' => 'Unit monolitik (fiberglass/beton cetak pabrik) lebih toleran terhadap pergerakan tanah daripada struktur bersambungan banyak. Untuk lahan gambut, perkuat dengan angkur dan backfill pasir seragam.'),
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
                <span>Estimasi baca: 5 menit</span>
            </div>

            <div class="article-body">
                <p><strong>Tiga material septic tank yang umum di Medan — beton cast-in-place, panel beton pracetak, dan fiberglass/HDPE — masing-masing unggul di kondisi berbeda: tanah keras kering cocok beton, lahan sempit basah cocok pracetak, akses sempit dan muka air tinggi cocok fiberglass.</strong> Tidak ada material "terbaik secara mutlak"; yang ada adalah pasangan material-kondisi-lahan yang tepat untuk rumah Anda.</p>
                <p>Pilihan material menentukan umur pakai, risiko rembesan, dan biaya gali. Kesalahan mahal yang sering terjadi: memilih fiberglass karena murah, padahal pemasangannya tanpa ballast di lahan bermuka air tinggi sehingga tangki "mengambang" dan jalur pipa patah. Artikel ini membandingkan ketiganya secara teknis dengan bahasa yang bisa Anda pakai saat berbicara dengan kontraktor.</p>
                <p><h2>Beton Cor di Tempat: Kuat tapi Sensitif</h2></p>
                <p>Kelebihan: rigid, umur 20+ tahun, mudah diperbesar volumenya, material tersedia di toko bangunan mana pun di Medan. Kekurangan: sangat bergantung pada mutu adukan dan perawatan curing; campuran asal-asalan retak rambut dalam 2–3 musim, dan retak berarti rembes serta mencemari air tanah. Waktu pasang paling lama (7–14 hari termasuk curing). Cocok untuk rumah baru dengan lahan lega dan pengawas proyek yang paham.</p>
                <p><h2>Panel Pracetak: Jalan Tengah Populer</h2></p>
                <p>Dibawa per panel, dirakit di lubang dengan sambungan mortir/adhesive waterproof. Pasang 2–4 hari, kekuatan konsisten karena dicetak pabrik. Kelemahan ada di titik sambungan: kualitas kedap ditentukan kerapatan nat antar-panel — minta uji rendam (isi penuh, tandai level, biarkan 24 jam) sebelum urug kembali. Ini tes 5 menit yang menyelamatkan Anda dari galian ulang setahun kemudian.</p>
                <p><h2>Fiberglass/HDPE: Cepat, Ringan, Butuh Ballast</h2></p>
                <p>Satu unit bulat/elips, hanya perlu crane manual/tali dan galiannya paling kecil — juara untuk gang sempit Sunggal/Denai yang mobil barang tidak bisa masuk. Kedap sempurna terhadap gas dan air. Tapi bobot ringan menjadi kutukan di lahan berair: wajib dipasang di atas lantai kerja beton dengan angkur ballast bila muka air tanah tinggi, dan diurug pasir (bukan puing tajam). Riwayat kegagalan fiberglass hampir selalu soal pemasangan, bukan produknya.</p>
<div class="info-box">
                    <strong>Ringkas biaya relatif (unit setara 1.500–2.000 L, terpasang)</strong>
                    Beton cor: material murah, tenaga dan waktu mahal. Pracetak: seimbang. Fiberglass: unit Rp1,5–3 juta tergantung merek, gali murah, ballast menambah sedikit. Angka kasar berubah tiap musim — minta penawaran tertulis terperinci dari dua vendor untuk pembanding.
                </div>
                <p><h2>Indikator Kualitas yang Sering Dilupakan: Baffle</h2></p>
                <p>Apapun materialnya, pastikan ada inlet-outlet baffle (sekat T) yang mencegah scum keluar ke resapan. Tangki mahal tanpa baffle kalah dari tangki murah dengan baffle rapi. Dan beri ventilasi minimal diameter 75 mm di chamber kedua — gas metana yang terperangkap adalah penyebab tutup melenting dan bau di sekitar bak kontrol yang sering dikira "tangki bocor".</p>

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
