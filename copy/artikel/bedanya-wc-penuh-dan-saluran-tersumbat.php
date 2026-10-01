<?php
/**
 * Artikel: 
 * URL bersih: /blog/bedanya-wc-penuh-dan-saluran-tersumbat   (via .htaccess aturan 3)
 */
$articles_all = require __DIR__ . '/articles-data.php';
$this_article = null;
foreach ($articles_all as $a) { if ($a['slug'] === 'bedanya-wc-penuh-dan-saluran-tersumbat') { $this_article = $a; break; } }

$page_title     = $this_article['judul'] . ' | Sedot WC Medan';
$meta_desc      = $this_article['meta_desc'];
$canonical_path = '/blog/' . $this_article['slug'];

$faq = array(
    array('q' => 'Apakah septic tank penuh selalu bikin semua pembuangan lambat?',
          'a' => 'Umumnya ya, karena seluruh sistem berbagi hilir yang sama. Tapi kalau rumah punya beberapa tangki terpisah per blok kamar mandi, gejalanya bisa terbatas pada satu zona.'),
    array('q' => 'Bisa tidak tangki penuh tapi kloset masih normal?',
          'a' => 'Bisa, pada tahap awal: lumpur baru mendekati outlet sehingga kloset masih mau menyiram tapi butuh dua–tiga siraman, atau muncul genangan di resapan sementara aliran dalam rumah terasa biasa.'),
    array('q' => 'Berapa biaya tes awal ke lokasi?',
          'a' => 'Untuk area Medan Sunggal dan sekitarnya survey GRATIS — cukup kirim foto bak kontrol dan ceritakan gejalanya lewat WhatsApp sebelum teknisi berangkat.'),
    array('q' => 'Obat WC cair bisa membedakan penyebabnya?',
          'a' => 'Tidak. Obat cair hanya bereaksi pada organik lunak di titik sumbatan; ia tidak menyentuh lumpur di tangki dan tidak memperbaiki kemiringan pipa. Jangan jadikan tes diagnostik.'),
    array('q' => 'Apakah dua masalah bisa terjadi bersamaan?',
          'a' => 'Sangat bisa, dan ini kasus tersering di bangunan tua: tangki penuh plus resapan jenuh. Karena itu pemeriksaan setelah sedot tetap perlu menilai daya serap resapan sebelum menyimpulkan pekerjaan selesai.'),
    array('q' => 'Bunyi gluk dari kloset tanda apa?',
          'a' => 'Udara terperangkap karena aliran terhalang di hilir — bisa sumbatan pipa atau outlet tangki terendam lumpur. Kombinasikan dengan hasil tes empat titik untuk memastikan arahnya.'),
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
                <p><strong>Septic tank penuh dan saluran tersumbat sama-sama membuat air kloset turun pelan, tetapi cara membedakannya sederhana: lihat apakah gejala muncul di SATU pembuangan atau di SEMUA pembuangan sekaligus.</strong> Kalau hanya satu titik yang bermasalah sementara wastafel, shower, dan kloset lain normal, hampir pasti ada sumbatan lokal di jalur titik itu. Sebaliknya, kalau semua pembuangan di rumah ikut lambat — bahkan memunculkan gelembung dari floor drain saat kloset disiram — masalahnya ada di hilir: tangki yang sudah tidak punya ruang lagi.</p>
                <p>Kesalahan diagnosis di dua kondisi ini mahal akibatnya. Menyedot tangki yang sebenarnya masih kosong berarti membayar truk tanpa menyelesaikan apa pun; mendongkrak pipa yang mampet karena tangki penuh hanya memindahkan masalah beberapa hari. Artikel ini memberi empat pembeda praktis plus satu tes lima menit yang bisa Anda lakukan sendiri sebelum memanggil jasa sedot WC di Medan.</p>
                <p><h2>Gejala yang Terasa Sama, Sebabnya Berbeda</h2></p>
                <p>Kloset yang dialiri septic tank penuh dan kloset yang jalurnya tersumbat kertas sama-sama menunjukkan air naik lalu surut perlahan. Otak kita cenderung menyimpulkan "WC penuh" untuk keduanya, padahal mekanismenya bertolak belakang. Pada tangki penuh, daya dorong gravitasi hilang karena outlet tangki terendam lumpur — seluruh sistem kehilangan ruang kosong. Pada sumbatan lokal, aliran terhambat di satu titik sementara sisa sistem masih bekerja normal.</p>
                <p>Ciri waktu munculnya juga berbeda. Sumbatan pipa biasanya mendadak: pagi lancar, sore mampet total, sering setelah kejadian spesifik (mainan anak hilang di kamar mandi, tisu dibuang banyak sekali). Tangki penuh kumat pelan-pelan selama mingguan: makin hari makin lambat, kadang sempat membaik setelah tidak dipakai lama karena air sempat meresap sedikit.</p>
                <p><h2>Pemeriksaan Bak Kontrol dan Ventilasi</h2></p>
                <p>Buka tutup bak kontrol pertama setelah kloset (biasanya kotak kecil di got depan rumah atau samping bangunan). Normal: air mengalir lewat dan hanya ada sedimen tipis di dasar. Kalau permukaannya setinggi lubang masuk, warnanya gelap pekat, dan baunya tajam seperti telur busuk, endapan sudah menumpuk sampai ke hilir — indikasi kuat tangki perlu disedot.</p>
                <p>Periksa juga ventilasi tangki (pipa udara kecil di atap atau dekat bak). Tangki penuh sering memicu bau sulfida keluar dari ventilasi yang meluap oleh gas, atau justru bunyi "gluk-gluk" dari kloset karena udara terperangkap. Bau got yang tercium terus-menerus di halaman, bukan hanya saat disiram, adalah tanda klasik yang jarang bohong.</p>
                <p><h2>Tes Empat Titik dalam Lima Menit</h2></p>
                <p>Lakukan berurutan sambil memperhatikan: (1) siram kloset — catat kecepatan surut; (2) buka keran wastafel kamar mandi penuh lalu lepas sumbatnya — amati apakah surutnya ikut melambat saat kloset baru disiram; (3) siram floor drain dengan ember; (4) ulangi penyiraman kloset sambil melihat permukaan air di floor drain.</p>
<div class="info-box">
                    <strong>Rumus bacanya</strong>
                    Satu titik lambat = curigai sumbatan lokal (kertas, benda, lemak). Semua titik lambat + floor drain berbuih/meluap = curigai tangki penuh atau resapan jenuh. Kloset saja yang lambat tapi membaik lalu kambuh di titik yang sama terus = kemiringan pipa bermasalah.
                </div>
                <p>Kalau hasil tes mengarah ke sumbatan lokal, coba plunger atau kawat spiral dulu (bahas lengkap di artikel alat sederhana). Kalau arahnya ke tangki, tidak ada jalan lain selain penyedotan — bahan kimia apa pun hanya mengulur waktu dan berisiko membunuh bakteri pengurai.</p>
                <p>Satu jebakan yang perlu Anda waspadai: dua masalah bisa terjadi bersamaan. Tangki yang sudah lama penuh sering diikuti resapan yang ikut jenuh, sehingga setelah disedot pun aliran belum normal-normal saja. Karena itu teknisi yang jujur akan memeriksa bak kontrol lebih dulu, lalu menilai apakah resapan masih sanggup menyerap — bukan langsung menyimpulkan satu sebab dari satu gejala.</p>
                <p><h2>Kapan Harus Panggil Teknisi</h2></p>
                <p>Hubungi jasa sedot WC bila: genangan muncul di sekitar bak kontrol atau tutup tangki, limbah sempat meluber ke selokan, bau tak hilang setelah tangki terakhir disedot kurang dari setahun, atau rumah memakai septic tank lama tanpa pernah diaudit volumenya. Untuk kasus sumbatan, teknisi perlu turun kalau dua percobaan mandiri gagal atau ada indikasi benda keras di sifon.</p>
                <p>Saat menelepon, sebutkan hasil tes Anda: titik mana saja yang lambat, sejak kapan, dan apakah bak kontrol meluap. Informasi sesederhana itu membuat teknisi datang membawa peralatan yang tepat — truk sedot untuk tangki, atau mesin spiral untuk pipa — sehingga kunjungan pertama langsung menyelesaikan masalah.</p>

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
