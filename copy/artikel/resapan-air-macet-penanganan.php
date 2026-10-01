<?php
/**
 * Artikel: 
 * URL bersih: /blog/resapan-air-macet-penanganan   (via .htaccess aturan 3)
 */
$articles_all = require __DIR__ . '/articles-data.php';
$this_article = null;
foreach ($articles_all as $a) { if ($a['slug'] === 'resapan-air-macet-penanganan') { $this_article = $a; break; } }

$page_title     = $this_article['judul'] . ' | Sedot WC Medan';
$meta_desc      = $this_article['meta_desc'];
$canonical_path = '/blog/' . $this_article['slug'];

$faq = array(
    array('q' => 'Berapa lama resapan pulih setelah diistirahatkan?',
          'a' => 'Biasanya 1–3 minggu untuk saturasi ringan. Kalau setelah 3 minggu tes ember tetap stagnan, lanjut tingkat 2 (ganti media) — menunggu lebih lama tidak memperbaiki kompaksi.'),
    array('q' => 'Tanah timbunan baru cocok untuk resapan?',
          'a' => 'Timbunan padat justru musuh infiltrasi. Beri waktu settle 6 bulan atau buat sumur dalam menembus lapisan asli; jangan memaksakan bidang resapan dangkal di tanah urug.'),
    array('q' => 'Bolehkah resapan digabung dengan septic tank jadi satu unit?',
          'a' => 'Ada model combined (tangki + kompartemen resapan) untuk lahan sempit, tapi perawatannya lebih ketat dan umurnya lebih pendek. Konsultasikan desain dengan kondisi tanah setempat sebelum memilih.'),
    array('q' => 'Paving di atas resapan menghalangi pemulihan?',
          'a' => 'Tidak selalu — paving berpori atau celah sambungan masih memberi ventilasi. Yang fatal adalah cor plester rapat tanpa celah: tanah tidak bisa menguap dan biomat tidak menyusut. Bobok sebagian bila perlu.'),
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
                <p><strong>Resapan macet ditandai air yang menggenang lebih dari beberapa jam setelah pemakaian berat, dan penyebabnya berlapis: sumbatan biomat di dinding tanah, tanah liat asli yang porositasnya rendah, akar pohon menyumbat pori, atau dimensi resapan yang sejak awal kurang luas.</strong> Kabar baiknya, tiga tingkat penanganan tersedia dari yang termurah (istirahatkan dan sanggah) sampai menyeluruh (sumur resapan baru) — dan urutan memilihnya ditentukan umur serta pola genangan.</p>
                <p>Di Medan, resapan sering luput dari perhatian sampai musim hujan membuktikan kelemahannya. Padahal resapan adalah "paruh kedua" sistem septik: tangki mengurai, resapan menampung limpahan cairan. Ketika resapan mati, gejala yang terasa di dalam rumah malah mirip tangki penuh — sehingga diagnosis ganda wajib dilakukan sebelum membeli jasa apa pun.</p>
                <p><h2>Pastikan Dulu: Resapan atau Tangki?</h2></p>
                <p>Tangki penuh: aliran dari kloset lambat, bau di area bak kontrol, genangan dekat jalur inlet. Resapan jenuh: kloset kadang normal, tapi area resapan (biasaan ditutup paving/rumput) selalu becek, bau muncul di sisi keluar, dan kondisi memburuk setelah hujan. Banyak rumah mengalami keduanya sekaligus — maka urutannya selalu: kosongkan tangki dulu, beri masa uji 1–2 minggu, baru nilai daya serap resapan tanpa gangguan beban berlebih.</p>
                <p>Tes cepat: siram 2 ember air ke tutup inspeksi resapan (bukan kloset). Amati permukaan air di dalam sumur resapan — kalau turun kurang dari 15–20 menit per sentimeter, daya serap masih layak; kalau nyaris stagnan berjam-jam, biomat sudah menebal.</p>
                <p><h2>Tingkat 1: Istirahatkan dan Sanggah</h2></p>
                <p>Untuk resapan yang baru menurun, kurangi beban 1–2 minggu: alihkan air cucian ke jalur lain, jangan siram berlebihan, dan biarkan pori tanah "bernafas" — biomat adalah lapisan mikroba yang menebal saat kejenuhan dan menyusut perlahan saat diberi waktu kering. Kombinasikan dengan penyedotan tangki agar inlet resapan tidak menerima cairan bermuatan lumpur halus.</p>
<div class="info-box">
                    <strong>Jangan lakukan</strong>
                    Menuang soda api/pelarut ke sumur resapan "untuk menembus". Ia membunuh biomat DAN bakteri tangki, merusak struktur tanah liat sekitarnya, dan polutan masuk ke air tanah. Tidak ada bahan kimia yang mengembalikan daya serap yang hilang oleh kompaksi.
                </div>
                <p><h2>Tingkat 2: Bongkar Isian, Ganti Media</h2></p>
                <p>Kalau istirahat tidak menolong, isian lama (bata, kerikil, ijuk) sudah tersaturasi lemak dan lumpur halus. Buka sumur/bidang resapan, keluarkan isian, kerik bagian dinding tanah dengan sekop untuk mengangkat lapisan licin biomat, isi ulang dengan batu belah bersih + ijuk + cocoper sebagai filter bertingkat. Pekerjaan satu-dua hari ini sering memulihkan daya serap 60–80% tanpa konstruksi baru.</p>
                <p>Untuk bidang resapan datar di bawah paving, alternatifnya membuat sumur resapan vertikal baru berdampingan dengan pipa penghubung — cara legal-modern yang hemat lahan kampung: diameter 0,8–1 m, kedalaman 2–3 m, dinding berpori dengan geotekstil.</p>
                <p><h2>Tingkat 3: Resapan Baru dan Aturan Jarak</h2></p>
                <p>Kalau tanah murni lempung padat atau muka air tinggi, resapan konvensional memang tidak akan pernah pulih permanen. Jalannya: sumur resapan dalam menembus lapisan porous, atau — pilihan terbaik untuk kawasan padat — mengalirkan efluen ke parit infiltrasi panjang yang dibagi-bagi bebannya. Jaga jarak minimal 5 m dari sumur air bersih dan 1,5 m dari pondasi; dokumen IPL/PDAM setempat mengatur angka detail untuk kota Anda.</p>
                <p>Perencanaan resapan baru sebaiknya dikerjakan bersamaan dengan sedot terjadwal: satu crew memahami kondisi volume tangki Anda, jarak jalur, dan kualitas tanah dari laporan lapangan — data yang sama dipakai untuk menentukan tipe resapan yang realistis, bukan spekulatif.</p>
                <p><h2>Rutinitas Pencegahan Musiman</h2></p>
                <p>Sebelum November: kosongkan tangki sesuai jadwal, potong akar dekat jalur resapan, bersihkan tutup sumur dari tanah penutup. Selama puncak hujan: alihkan air atap agar tidak membanjiri area resapan. Setelah musim: lakukan tes 2 ember di atas. Tiga ritual kecil ini membedakan rumah yang bertahan lintas musim hujan dan rumah yang tiap tahun memanggil truk.</p>

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
