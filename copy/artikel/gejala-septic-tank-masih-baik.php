<?php
/**
 * Artikel: 
 * URL bersih: /blog/gejala-septic-tank-masih-baik   (via .htaccess aturan 3)
 */
$articles_all = require __DIR__ . '/articles-data.php';
$this_article = null;
foreach ($articles_all as $a) { if ($a['slug'] === 'gejala-septic-tank-masih-baik') { $this_article = $a; break; } }

$page_title     = $this_article['judul'] . ' | Sedot WC Medan';
$meta_desc      = $this_article['meta_desc'];
$canonical_path = '/blog/' . $this_article['slug'];

$faq = array(
    array('q' => 'Haruskah mengecek tangki saat musim kemarau juga?',
          'a' => 'Ya. Kemarau justru saat resapan paling mudah diuji laju serapnya; temuan jelek di kemarau adalah bom waktu saat hujan datang.'),
    array('q' => 'Air bilas kadang lambat, kadang normal — bahaya?',
          'a' => 'Pola intermiten biasanya awal penyumbatan parsial di sifon/jalur, atau level tangki sudah mendekati ambang. Cek dua siklus berikutnya; kalau menetap, jadwalkan kunjungan.'),
    array('q' => 'Muncul bau setelah hujan deras, padahal tangki baru disedot bulan lalu?',
          'a' => 'Kemungkinan besar resapan jenuh air hujan, bukan tangki. Aliran permukaan halaman perlu ditata ulang agar tidak mencuci area resapan.'),
    array('q' => 'Anak suka main dekat bak kontrol, aman?',
          'a' => 'Tidak. Tutup lama sering tidak terkunci dan beban anak cukup untuk membuka celah berbahaya. Ajarkan zona terlarang dan pertimbangkan tutup dengan kunci anak.'),
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
                <span>Estimasi baca: 4 menit</span>
            </div>

            <div class="article-body">
                <p><strong>Septic tank yang sehat ditandai empat hal sederhana: air bilas surut cepat tanpa gelembung balik, tidak ada bau di sekitar bak kontrol dan halaman, permukaan air di chamber hanya sampai batas pipa outlet, dan tidak ada genangan abnormal di area resapan setelah pemakaian berat.</strong> Selama empat tanda itu terpenuhi, jadwal sedot normal tetap berjalan dan Anda tidak perlu memanggil siapa pun.</p>
                <p>Membaca "kepribadian" tangki sendiri adalah keterampilan berbiaya rendah bernilai tinggi: sekali paham, Anda bisa membedakan antara kewaspadaan berlebihan dan masalah nyata yang butuh teknisi. Artikel ini menyusun checklist dua menit yang bisa dilakukan siapa saja, plus frekuensi pemeriksaan yang wajar.</p>
                <p><h2>Checklist Dua Menit Tiap Tiga Bulan</h2></p>
                <p>Satu: siram kloset dua kali berturut-turut — surut harus konsisten, tanpa naiknya air di shower terdekat. Dua: intip bak kontrol (pakai sarung tangan, jangan condongkan wajah) — level cairan idealnya setinggi pipa outlet, bukan menutupi tutup. Tiga: cium radius dua meter dari bak kontrol dan jalur resapan. Empat: injak-injak lembut tanah di area resapan setelah 100+ liter air dipakai (mencuci dan mandi) — harus padat-normal, bukan seperti spons basah berbau.</p>
                <p><h2>Tanda Normal yang Sering Disalahartikan</h2></p>
                <p>Bau samar beberapa jam setelah disedot: normal, sisa paparan udara terbuka. Geledek pelan di pipa saat disiram: umumnya udara venting biasa. Rumput di atas resapan sedikit lebih hijau: bisa jadi nutrisi dari rembesan halus — pantau, belum tentu gagal. Yang TIDAK normal: gelembung balik di kloset, genangan persisten, dan bau sulfida permanen di dekat tutup.</p>
<div class="info-box">
                    <strong>Catatan kecil yang berguna besar</strong>
                    Buat log satu baris per kuartal di HP: tanggal, hasil 4 poin checklist, dan volume terangkat pada sedot terakhir. Setelah dua siklus, Anda punya kurva pengisian nyata milik rumah sendiri — dasar kuat untuk menegosiasikan jadwal preventif, bukan reaktif.
                </div>
                <p><h2>Ambang Batas: Kapan Checklist Berubah Jadi Telepon</h2></p>
                <p>Jika dua dari empat tanda merah muncul bersamaan, atau satu tanda menetap lebih dari seminggu, hentikan diagnosis mandiri. Itu wilayah alat: volume sludge perlu diukur dengan spit-and-sample atau sensor, dan resapan perlu uji laju serap. Memanggil teknisi pada tahap ini adalah panggilan preventif (murah, bersih, cepat) — menunggu luber mengubahnya jadi pekerjaan darurat yang lebih mahal dan jauh lebih kotor.</p>

                <?php art_ad_slot(); ?>
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
