<?php
/**
 * Artikel: 
 * URL bersih: /blog/harga-sedot-wc-medan   (via .htaccess aturan 3)
 */
$articles_all = require __DIR__ . '/articles-data.php';
$this_article = null;
foreach ($articles_all as $a) { if ($a['slug'] === 'harga-sedot-wc-medan') { $this_article = $a; break; } }

$page_title     = $this_article['judul'] . ' | Sedot WC Medan';
$meta_desc      = $this_article['meta_desc'];
$canonical_path = '/blog/' . $this_article['slug'];

$faq = array(
    array('q' => 'Ada biaya minimum walau lumpur sedikit?',
          'a' => 'Ya, berupa biaya mobilisasi crew + truk yang berlaku sebagai nilai minimum kunjungan. Rinciannya disampaikan saat penawaran, bukan biaya kejutan di lapangan.'),
    array('q' => 'Apakah sedot WC bisa pakai BPJS/dinas?',
          'a' => 'Tidak — ini layanan swasta komersial. Untuk fasilitas umum/kecamatan, kami melayani lewat penunjukan resmi instansi; hubungi kami untuk penawaran korporat.'),
    array('q' => 'Kenapa tetangga saya bayar lebih murah?',
          'a' => 'Kemungkinan volume terangkatnya lebih kecil, aksesnya lebih mudah, atau ia pelanggan terjadwal dengan harga paket. Bandingkan lingkup pekerjaannya, bukan hanya nominalnya.'),
    array('q' => 'Bayarnya bagaimana?',
          'a' => 'Pembayaran setelah pekerjaan selesai dan Anda verifikasi hasilnya. Detail metode tersedia saat penjadwalan.'),
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
                <p><strong>Biaya sedot WC di Medan ditentukan empat hal teknis: volume lumpur yang diangkat, akses lokasi bagi truk, jarak tempuh dari pool, dan panjang selang tambahan yang diperlukan.</strong> Dua rumah dengan keluhan identik bisa menerima penawaran berbeda jauh kalau yang satu di jalan besar dan yang satunya di gang padat Sunggal yang mengharuskan seling 30 meter. Mengetahui komponen biayanya membuat Anda bisa menilai penawaran secara adil — termasuk penawaran kami sendiri.</p>
                <p>Kami tidak mencantumkan angka tunggal di halaman ini karena harga jujur harus mengikuti kondisi lapangan; yang kami janjikan adalah formula terbuka: Anda tahu persis apa yang Anda bayar sebelum truk bergerak. Blueprint layanan kami menetapkan survey GRATIS untuk area Medan Sunggal dan sekitarnya, jadi tidak ada biaya untuk memastikan angkanya.</p>
                <p><h2>Komponen Biaya #1: Volume Lumpur</h2></p>
                <p>Pekerjaan dihitung per ritase — satu rit ≈ satu muatan truk tinja (umumnya 3–5 m³ tergantung unit). Tangki rumah kecil yang rutin disedot biasanya hanya butuh sebagian rit; kos dan ruko bisa menuntut 2–3 rit. Karena itu pelanggan sedot terjadwal hampir selalu membayar lebih ringan per kunjungan dibanding pelanggan darurat yang lumpurnya sudah memadat penuh.</p>
                <p>Lumpur basah vs memadat juga berpengaruh. Endapan yang dibiarkan bertahun-tahun kehilangan kadar air dan mengikat pasir/semen dari dinding rongka — butuh tenaga manual ekstra untuk menghancurkan gumpalan sebelum bisa disedot. Ini alasan ekonomi paling kuat untuk tidak menunda jadwal.</p>
                <p>Perhatikan pula apa yang TIDAK termasuk lingkup penawaran murah: pengangkutan limbah sampai instalasi pengolahan resmi berbiaya sendiri bagi penyedia jasa, sehingga operator yang menjual harga di bawah ongkos kelola biasanya membuang muatan diam-diam. Selain merugikan lingkungan, pelanggan ikut menanggung risiko karena pekerjaan setengah hati jarang menyelesaikan bau sampai tuntas.</p>
                <p><h2>Komponen Biaya #2–4: Akses, Jarak, Selang</h2></p>
                <p><strong>Akses gang:</strong> kalau truk tidak bisa berhenti dekat tangki, crew memasang selang hisap panjang. Tiap 10–15 meter tambahan menaikkan durasi dan risiko — inilah sumber "tambatan gang sempit" yang sering mengejutkan pelanggan.<br><strong>Jarak:</strong> lokasi di luar radius layanan reguler menambah ongkos mobilisasi; di Medan umumnya pengaruhnya kecil, tapi tetap disebut di awal, bukan di akhir.<br><strong>Pekerjaan tambahan:</strong> pembongkaran tutup tangki beton yang tertimbun paving, pembersihan sumur resapan, atau normalisasi pipa yang kolaps — masing-masing item terpisah dan dinegosiasikan sebelum mulai.</p>
<div class="info-box">
                    <strong>Ciri penawaran sehat</strong>
                    Harga dirinci sebelum kerja, ada estimasi rit, ada pilihan opsi (sedot saja vs sedot + bersihkan resapan), dan teknisi menjelaskan kenapa angka itu muncul. Ciri penawaran tidak sehat: angka super murah di brosur lalu "kok jadi segini" di lokasi. Semua perbedaan biaya harus bisa dijelaskan dari empat komponen di muka.
                </div>
                <p><h2>Ilustrasi Tiga Skenario Umum</h2></p>
                <p>Skenario A — rumah 3 kamar di pinggir jalan besar, tangki rutin, lumpur basah: satu kunjungan singkat, satu crew, tanpa selang panjang. Skenario B — rumah di dalam gang Padri/Pulai Bravo, truk parkir 25 meter dari bak: durasi bertambah, selang tambahan, kemungkinan satu crew bantu tarik. Skenario C — kos 12 kamar yang baru sadar setelah meluber ke koridor: volume besar, padatan tinggi, kemungkinan dua rit dan pembersihan bak kontrol.</p>
                <p>Ketiga skenario itu adalah alasan pertanyaan "berapa harga sedot WC?" tidak punya jawaban satu angka. Yang bisa kami jamin: formula komponen yang sama untuk semua pelanggan, dan rincian tertulis lewat WhatsApp setelah Anda mengirim foto lokasi + keterangan titik tangki.</p>
                <p>Untuk pelanggan berulang, paket perawatan memberi kepastian dua arah: harga per kunjungan terkunci dan jadwal tercatat, sehingga pemilik kos atau manajer gedung tidak perlu menegosiasi ulang setiap kali tangki penuh. Bandingkan seperti ini — biaya kejutan darurat yang tidak pernah Anda rencanakan versus anggaran kecil yang bisa Anda masukkan ke pos pemeliharaan bulanan.</p>
                <p><h2>Cara Mendapat Angka Pasti Hari Ini</h2></p>
                <p>Kirim lewat WhatsApp: (1) foto area sekitar bak/tutup tangki, (2) alamat lengkap dan patokan mudah, (3) kapan terakhir disedot kalau ingat, (4) gejala sekarang. Dalam satu alur chat Anda akan menerima estimasi rentang + opsi jadwal. Untuk area Medan Sunggal dan sekitarnya, survey langsung tetap GRATIS tanpa kewajiban lanjut.</p>
                <p>Transparansi harga adalah bagian dari desain layanan kami. Angka final tidak akan berubah dari kesepakatan kecuali ditemukan kondisi tersembunyi (misalnya tutup tangki dicor permanen) — dan perubahan itu pun harus disetujui Anda sebelum pekerjaan berlanjut.</p>

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
