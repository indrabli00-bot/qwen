<?php
/**
 * Artikel: 
 * URL bersih: /blog/musim-hujan-dan-septic-tank   (via .htaccess aturan 3)
 */
$articles_all = require __DIR__ . '/articles-data.php';
$this_article = null;
foreach ($articles_all as $a) { if ($a['slug'] === 'musim-hujan-dan-septic-tank') { $this_article = $a; break; } }

$page_title     = $this_article['judul'] . ' | Sedot WC Medan';
$meta_desc      = $this_article['meta_desc'];
$canonical_path = '/blog/' . $this_article['slug'];

$faq = array(
    array('q' => 'Wajar tagihan sedot naik saat musim hujan?',
          'a' => 'Permintaan memang melonjak, tapi operator kredibel mengumumkan tarif tetap sejak awal. Minta rincian sejak booking; perubahan harga sesaat di lapangan adalah red flag.'),
    array('q' => 'Resapan jenuh setiap musim hujan, solusi jangka panjangnya?',
          'a' => 'Perluas bidang resapan sesuai perhitungan debit, atau pasang sumur injeksi air hujan terpisah agar limpasan tidak membebani sistem septik. Rehabilitasi media (buang lapisan biomat teratas, isi kerikil baru) adalah opsi tengah yang hemat.'),
    array('q' => 'Bolehkah pompa celup dipakai untuk mempercepat surut?',
          'a' => 'Untuk menguras genangan halaman, ya. Untuk menyedot isi tangki, tidak — Anda hanya memindahkan scum dan merusak keseimbangan bakteri. Serahkan isi tangki pada vakum profesional.'),
    array('q' => 'Kapan musim terbaik merehabilitasi resapan?',
          'a' => 'Juli–September: tanah kering, akses alat mudah, dan Anda selesai sebelum ujian hujan berikutnya datang.'),
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
                <p><strong>Musim hujan memperburuk masalah septic tank melalui dua mekanisme: muka air tanah naik sehingga daya serap resapan runtuh, dan limpasan air hujan yang masuk ke bak kontrol lewat tutup bocor membanjiri sistem dengan volume berlebih.</strong> Karena itu keluhan sedot WC di Medan memuncak November–Januari: tangki yang di kemarau terasa aman, di musim hujan mendadak penuh dan berbau.</p>
                <p>Kabar baiknya, separuh dari banjir musiman ini bisa dicegah dengan pekerjaan kecil menjelang hujan: membenahi drainase halaman, merapatkan tutup, dan memajukan jadwal sedot satu tingkat. Panduan ini disusun mengikuti pola iklim Sumatera Utara — hujan puncak akhir tahun, transisi kering Maret–Mei sebagai jendela perawatan terbaik.</p>
                <p><h2>Kenapa Sistem Terasa Lebih Penuh Saat Hujan</h2></p>
                <p>Tangki tidak bertambah isi karena langit; yang berubah adalah hilirnya. Resapan dikelilingi pori tanah yang sudah jenuh air hujan sehingga output tangki nyaris berhenti mengalir keluar. Level naik, bilasan melambat, dan gas mencari jalan lain lewat kloset. Ditambah lagi talang yang bocor atau halaman miring ke arah bak kontrol mengirim puluhan liter per hujan deras langsung ke sistem yang seharusnya hanya menerima limbah domestik.</p>
                <p><h2>Pekerjaan Persiapan Oktober (Sebelum Puncak)</h2></p>
                <p>Empat tindakan, semuanya di bawah setengah hari kerja: rapatkan tutup bak kontrol dengan seal semen/packing; arahkan ulang drainase halaman supaya keluar ke got kota, bukan ke area resapan; bersihkan ujung ventilasi atap dari sarang laba-laba dan daun; dan jika siklus sedot Anda jatuh di Desember–Januari, majukan ke Oktober–November supaya kunjungan terjadi dalam kondisi kering — lebih bersih, lebih murah, tanpa antrean puncak.</p>
<div class="info-box warn">
                    <strong>Jangan lakukan ini saat genangan</strong>
                    Menyiram kloset berulang untuk \"memancing\" surut hanya menambah volume ke sistem yang sedang jenuh. Membuka paksa tutup di halaman tergenang juga berbahaya: gas metana plus percikan adalah kombinasi buruk, dan Anda mengotori air limpasan yang mengalir ke selokan warga.
                </div>
                <p><h2>Setelah Hujan: Evaluasi Lima Menit</h2></p>
                <p>Beberapa hari setelah hujan panjang berhenti, lakukan jalan kaki inspeksi: apakah tanah di sekitar resapan masih lunak berbau setelah 3–4 hari cerah? Apakah level bak kontrol turun ke garis normal? Dua-duanya ya — sistem Anda lulus ujian musim ini. Salah satunya menetap — itu sinyal resapan perlu perlakuan (pengeringan paksa, kuras, atau rehabilitasi media), dan waktunya sekarang, bukan hujan berikutnya.</p>

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
