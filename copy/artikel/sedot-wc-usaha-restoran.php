<?php
/**
 * Artikel: 
 * URL bersih: /blog/sedot-wc-usaha-restoran   (via .htaccess aturan 3)
 */
$articles_all = require __DIR__ . '/articles-data.php';
$this_article = null;
foreach ($articles_all as $a) { if ($a['slug'] === 'sedot-wc-usaha-restoran') { $this_article = $a; break; } }

$page_title     = $this_article['judul'] . ' | Sedot WC Medan';
$meta_desc      = $this_article['meta_desc'];
$canonical_path = '/blog/' . $this_article['slug'];

$faq = array(
    array('q' => 'Interceptor wajib untuk izin usaha?',
          'a' => 'Untuk IMB/PBG dan dokumen lingkungan tertentu, instalasi pengolahan limbah domestik (termasuk perangkap lemak) diperiksa. Kota/kabupaten punya perda berbeda; konsultasikan dengan dinas terkait setempat sebelum renovasi dapur.'),
    array('q' => 'Berapa biaya kuras interceptor sendiri?',
          'a' => 'Nol rupiah selain kantong plastik dan sarung tangan — 15 menit tiap minggu. Biaya sesungguhnya muncul kalau Anda skip: sedot darurat + jetting pipa bisa 5–10 kali lipat.'),
    array('q' => 'Enzyme pemecah lemak boleh dipakai?',
          'a' => 'Boleh sebagai pelengkap, bukan pengganti skimming manual. Enzim butuh waktu tinggal (retention time) panjang; di dapur yang airnya mengalir terus, sebagian besar enzim lewat begitu saja.'),
    array('q' => 'Sudah pakai grease trap besar, masih perlu sedot WC berkala?',
          'a' => 'Ya. Grease trap melindungi jalur, tapi lumpur padat tetap menumpuk di tangki septik. Dua-duanya dijadwalkan terpisah.'),
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
                <p><strong>Restoran di Medan punya dua masalah limbah yang tidak dimiliki rumah tangga: lemak dapur yang membeku di pipa dan volume sampah organik yang membebani tangki.</strong> Kombinasi keduanya membuat septic tank restoran penuh 2–4 kali lebih cepat daripada rumah dengan luas sama. Solusinya bukan sekadar sedot lebih sering, tapi memasang interceptor grease (perangkap lemak) dan menjadwalkan penyedotan berdasarkan pengukuran, bukan tebakan.</p>
                <p>Satu insiden luber di jam makan siang bisa menghentikan operasional dan mencoreng reputasi. Artikel ini membahas desain alur limbah restoran kecil sampai menengah, ukuran interceptor yang wajar, dan SOP kebersihan dapur yang menjaga sistem tetap awet antar-kunjungan teknisi.</p>
                <p><h2>Kenapa Lemak Adalah Musuh Utama</h2></p>
                <p>Lemak cair saat wajan panas, lalu membeku di pipa yang lebih dingin membentuk kerak yang lama-kelamaan menyempit sampai tersumbat total (fatberg). Kalau sumbatan terjadi sebelum tangki, air cucian piring menggenang di floor drain dapur — bau, kumuh, dan rawan disoal dinas kesehatan. Interceptor grease bertugas menahan lemak SEBELUM masuk tangki; tanpa itu, seluruh lemak berakhir sebagai scum tebal yang menyedot kapasitas penguraian Anda.</p>
<div class="info-box">
                    <strong>Aturan ukuran interceptor</strong>
                    Dapur dengan kurang dari 3 meja cuci: 60–90 L. Dapur wok tinggi / 100+ kursi: 120–250 L atau dua unit paralel. Yang menentukan bukan luas restoran, tapi jumlah liter air bilas per jam puncak. Interceptor terlalu kecil = sama saja tidak pasang.
                </div>
                <p><h2>Jadwal Sedot Realistis untuk Restoran</h2></p>
                <p>Rumah tangga: 3–5 tahun. Restoran 50 kursi dengan interceptor terawat: 12–18 bulan. Tanpa interceptor: bisa tiap 4–6 bulan dan pipa ikut menjerit. Cara kalibrasi paling jujur: catat volume terangkat pada penyedotan pertama, bandingkan dengan kapasitas tangki, hitung kecepatan pengisian harian dari angka itu. Dari data nyata tersebut jadwal tahunan Anda berhenti jadi tebakan dan mulai jadi anggaran.</p>
                <p><h2>SOP Harian yang Menyelamatkan Tangki</h2></p>
                <p>Tiga kebiasaan murah dengan dampak besar: (1) scrape dulu, baru wash — sisa makanan dibuang ke tempat organik sebelum piring masuk air; (2) jangan buang minyak jelantah ke saluran mana pun, tampung dan serahkan ke pengumpul; (3) kuras interceptor tiap minggu (bukan tiap bulan) — lemak yang dibiarkan 30 hari mulai terurai anaerob dan menghasilkan bau sulfida yang menyerupai got, keluhan klasik pelanggan depan. Training satu kalimat untuk kru: "yang tidak larut, tidak masuk saluran."</p>
                <p><h2>Kapan Panggil Teknisi Sebelum Masuk Jam Buka</h2></p>
                <p>Gejala pra-bencana: bilas wastafel dapur melambat 2–3 hari berturut-turut, suara glubuk dari floor drain, atau bau meningkat saat blower hood mati malam hari. Jangan tunggu luber. Booking pagi buta atau setelah tutup adalah slot favorit kami untuk klien F&B karena pekerjaan jetting berisik dan becek — diselesaikan diam-diam, restoran buka normal, pelanggan tidak pernah tahu ada truk tangki di gang belakang.</p>

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
