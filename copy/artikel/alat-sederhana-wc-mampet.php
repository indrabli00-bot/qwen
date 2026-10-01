<?php
/**
 * Artikel: 
 * URL bersih: /blog/alat-sederhana-wc-mampet   (via .htaccess aturan 3)
 */
$articles_all = require __DIR__ . '/articles-data.php';
$this_article = null;
foreach ($articles_all as $a) { if ($a['slug'] === 'alat-sederhana-wc-mampet') { $this_article = $a; break; } }

$page_title     = $this_article['judul'] . ' | Sedot WC Medan';
$meta_desc      = $this_article['meta_desc'];
$canonical_path = '/blog/' . $this_article['slug'];

$faq = array(
    array('q' => 'Plunger tidak boleh dipakai untuk apa?',
          'a' => 'Untuk sumbatan benda keras jauh di sifon dan untuk kloset yang terhubung langsung ke tangki penuh — tekanan balik hanya memindahkan gas bau ke ruang. Pastikan dulu gejalanya sumbatan lokal.'),
    array('q' => 'Enzim/penggura cair bagus tidak?',
          'a' => 'Aman untuk pemeliharaan dan lendir organik tipis, tapi lambat (berjam-jam sampai harian) dan tidak menembus sumbatan padat. Jangan bandingkan hasilnya dengan tenaga mekanis.'),
    array('q' => 'Beli spiral listrik rumahan?',
          'a' => 'Untuk satu rumah, spiral manual 3 m cukup. Mesin listrik bayar dirinya hanya kalau Anda melayani banyak titik — sisanya risiko merusak pipa yang belum tentu salah tempat.'),
    array('q' => 'WC mampet total, air tidak surut sedikit pun — masih bisa DIY?',
          'a' => 'Selama belum luber, coba kait kawat untuk kemungkinan benda asing dan plunger 20 tarikan. Tidak berhasil? Hentikan. Sumbat total menandakan jalur penuh — menunggu lebih lama membuat crew bekerja di genangan dan menambah durasi kerja.'),
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
                <p><strong>Empat alat rumahan yang efektif mengatasi WC mampet: plunger karet, kawat spiral (drain snake), campuran soda kue–cuka, dan pompa tangan pressurizer — masing-masing punya medan tugas berbeda.</strong> Plunger untuk sumbatan lunak dekat kloset, spiral untuk benda yang tersangkut di sifon, soda kue–cuka untuk lendir ringan di pipa, pompa pressur untuk dorongan air keras. Salah alat sama dengan memperpanjang mampet dan kadang merusak pipa.</p>
                <p>Panduan ini mengurutkan dari yang paling aman, menjelaskan teknik pakai yang benar (mayoritas kegagalan terjadi karena teknik, bukan alatnya), dan memberi batas tegas kapan berhenti mencoba sendiri. Prinsip besarnya: dua percobaan gagal = panggil bantuan profesional, sebelum biaya mandiri berubah jadi biaya bongkar.</p>
                <p><h2>Plunger: Teknik yang Benar</h2></p>
                <p>Pilih plunger mangkuk (cup) dengan bibir flange untuk kloset, bukan plunger wastafel datar. Isi mangkuk kloset secukupnya agar bibir karet terendam — udara lebih mudah dimampatkan daripada air, dan itulah penyebab "cokek-cokek tanpa hasil". Tekan perlahan untuk membuang udara, lalu tarik-tekan mantap 15–20 kali tanpa memecah segel karet di permukaan. Akhiri dengan tarikan kuat: sumbatan kertas sering lepas justru saat tekanan negatif.</p>
                <p>Jangan menyiram di tengah proses — air tambahan menaikkan ketinggian rawan luber. Setelah berhasil, alirkan air bersih satu ember penuh untuk memastikan jalur benar-benar lapang, bukan sekadar bolongan kecil di tengah sumbatan.</p>
                <p><h2>Kawat Spiral dan Kait Darurat</h2></p>
                <p>Spiral pendek 1,5–3 meter dijual murah di toko bangunan. Masukkan perlahan sambil diputar sampai terasa hambatan, lalu tarik-naikkan berulang untuk menggigit sumbatan. Untuk benda licin (botol, mainan), gantungkan kait dari hanger kawat yang ujungnya ditekuk seperti mata pancing. Aturan besi: jangan mendorong. Mendorong benda keras ke sifon mengubah pekerjaan 15 menit menjadi bongkar-kloset.</p>
<div class="info-box warn">
                    <strong>Dua hal yang dilarang</strong>
                    1) Soda api/caustic: panas eksotermiknya meretakkan keramik, melunakkan sambungan PVC, dan membunuh bakteri tangki. 2) Mesin pressure washer tanpa nozzle khusus saluran: menyemburkan air balik ke wajah operator dan mendorong sumbatan makin dalam. Keduanya penyebab nomor satu kerusakan "korban DIY".
                </div>
                <p><h2>Soda Kue–Cuka dan Air Panas (Sumur)</h2></p>
                <p>Untuk lendir organik ringan dan bau: tuang setengah gelas soda kue, disusul setengah gelas cuka, tutup kloset 20 menit agar reaksi bekerja ke bawah, lalu siram satu panci air panas — bukan mendidih, suhu rebusan bisa meregangkan sambungan dan meretakkan porselen. Efektif untuk perawatan bulanan dan sumbatan tipis; tidak akan menembus gumpalan tisu padat apalagi benda asing.</p>
                <p>Versi perawatannya: tuang satu ember air panas setiap kali habis mandi sebagai pembilas lemak sabun di pipa shower. Kebiasaan lima detik ini menekan kebutuhan dongkrak pipa tahunan di banyak rumah.</p>
                <p><h2>Pompa Tangan Pressurizer</h2></p>
                <p>Alat presur manual (tipe toilet blow gun / hand pump saluran) memberi dorongan air terkonsentrasi yang lebih kuat dari siraman biasa. Isi, pompa sampai tekanan menengah, arahkan nozzle ke lubang kloset, tekan pemicu singkat. Cocok untuk sumbatan lunak yang lolos dari plunger. Batasi 3–4 tembakan; jika tidak bergerak juga, jalurnya pasti tersumbat keras atau terletak jauh di hilir — wilayah kerja mesin spiral listrik teknisi.</p>
                <p>Peringatan khusus bangunan tua: pipa rabat-era 70-an kadang memakai sambungan semen-asbes getas. Tekanan tinggi bisa membuka sambungan yang masih utuh. Kalau rumah Anda berusia di atas 30 tahun dan belum pernah diganti pipanya, mulai dari plunger saja dan biarkan tekanan jadi urusan teknisi.</p>
                <p><h2>Kapan Berhenti dan Menelepon</h2></p>
                <p>Tanda Anda harus berhenti: air naik sampai ambang luber saat percobaan, bau sulfida ikut muncul, floor drain lain mulai berbuih, atau dua siklus alat gagal total. Keempatnya menandakan masalah di luar jangkauan alat rumahan — umumnya di bak kontrol, tangki, atau kemiringan pipa. Menelepon jasa sedot WC pada titik ini justru menghemat: pekerjaan lokal selesai satu kunjungan sebelum berubah jadi proyek resapan.</p>

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
