<?php
/**
 * Artikel: 
 * URL bersih: /blog/septic-tank-baru-kapasitas-tepat   (via .htaccess aturan 3)
 */
$articles_all = require __DIR__ . '/articles-data.php';
$this_article = null;
foreach ($articles_all as $a) { if ($a['slug'] === 'septic-tank-baru-kapasitas-tepat') { $this_article = $a; break; } }

$page_title     = $this_article['judul'] . ' | Sedot WC Medan';
$meta_desc      = $this_article['meta_desc'];
$canonical_path = '/blog/' . $this_article['slug'];

$faq = array(
    array('q' => 'Berapa volume ideal untuk rumah 3 kamar mandi?',
          'a' => 'Kamar mandi tidak menggandakan timbulan; gunakan jumlah penghuni. Rumah 4 orang dengan 3 kamar mandi tetap cukup 1.500–2.000 liter, asalkan mesin cuci tidak dibuang ke tangki.'),
    array('q' => 'Bolehkah tangki dipasang sendiri tanpa teknisi?',
          'a' => 'Secara fisik bisa, tapi kesalahan kemiringan dan baffle jarang terlihat sampai bertahun kemudian. Minimal minta satu kali pengecekan alignment inlet-outlet sebelum ditimbun.'),
    array('q' => 'Ciri resapan yang didesain buruk?',
          'a' => 'Genangan persisten di area resapan, bau saat hujan, dan kloset yang lambat hanya di musim hujan. Tiga-tiganya berarti daya serap tidak seimbang dengan volume tangki.'),
    array('q' => 'Lebih awet beton atau fiberglass?',
          'a' => 'Masing-masing punya mode gagal: beton retak/rembes, fiberglass lapuk/rusak mekanis. Kualitas kerja dan akses sedot rutin lebih menentukan umur daripada materialnya.'),
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
                <p><strong>Kapasitas septic tank yang tepat dihitung dari jumlah penghuni tetap, bukan dari ukuran lahan atau kebiasaan tetangga.</strong> Patokan lapangan yang aman: rumah ≤4 orang minimal 1.200–1.500 liter; 5–6 orang 2.000 liter; kos/ruko dengan lalu-lintas tinggi sebaiknya 3.000 liter ke atas atau tangki modular. Tangki terlalu kecil membuat Anda menyedot dua kali lebih sering; terlalu besar membuang uang di awal tanpa manfaat penguraian tambahan.</p>
                <p>Selain volume, ada tiga keputusan teknis yang menentukan umur sistem: jarak aman ke sumur, konfigurasi dua atau tiga compartment, dan kualitas resapan. Bagian berikut membahas ketiganya dengan konteks tanah Medan yang dominan lempung dan berair tinggi.</p>
                <p><h2>Rumus Volume per Penghuni</h2></p>
                <p>Prinsipnya tangki harus menahan limbah cair minimal 24–48 jam supaya bakteri sempat bekerja dan padatan sempat mengendap. Taksiran timbulan rumah tangga 100–150 liter/orang/hari. Rumah 4 orang ≈ 500 liter/hari → butuh ruang cairan hidup ±1.000–1.200 liter di atas volume lumpur tahunan. Itulah asal angka 1.500 liter sebagai ukuran rumahan "aman" di lapangan.</p>
                <p>Jangan lupa sisakan ruang lumpur 3–5 tahun. Tangki 1.200 liter yang dipakai 5 orang tanpa desain longgar biasanya penuh di tahun pertama-dua — pemilik mengira "baru bangun kok sudah mampet", padahal memang salah ukuran sejak blueprint.</p>
                <p><h2>Jarak Aman: Sumur, Pondasi, Resapan</h2></p>
                <p>Aturan minimum yang diterima umum: dinding tangki ≥10 meter dari sumur gali, ≥1,5 meter dari pondasi bangunan, dan resapan infiltrasi ≥5 meter dari sumur. Di kampung-kampung Medan yang padat, syarat 10 meter sering mustahil — solusinya tangki sistem tertutup kedap (fiberglass/BFR berkualitas) plus resapan buatan di sisi lain lahan, bukan memaksakan pasangan bata berpori.</p>
                <p>Perhatikan juga kemiringan jalur pipa dari kloset ke tangki: 1–2 cm per meter. Terlalu landai, padatan berhenti di tengah jalan; terlalu curam, air meninggalkan lumpur di pipa. Kemiringan yang salah adalah penyebab nomor dua "WC mampet berulang" pada bangunan baru — sayangnya sering dituduh ke tangki.</p>
                <p>Satu detail yang membedakan pekerjaan rapi dan asal jadi: jarak antar-bak. Tangki, bak kontrol, dan resapan idealnya berada dalam satu garis lurus dengan sumuran inspeksi di tiap belokan. Tikungan tajam tanpa manhole adalah tempat sumbatan lahir — dan ketika terjadi, tidak ada akses untuk mendongkrak pipa tanpa membongkar lantai.</p>
                <p><h2>Dua Compartment atau Tiga?</h2></p>
                <p>Tangki dua sekat memisahkan pengendapan dan penguraian; tiga sekat menambahkan ruang penjernih sebelum resapan. Untuk rumah biasa, dua compartment dengan baffle/T-outlet yang benar sudah memenuhi fungsi. Yang berbahaya bukan jumlah sekatnya, melainkan absennya sekat sama sekali — model "kolam tunggal" warisan zaman dulu membuat lumpur bebas mengalir ke resapan dan mematikan daya serap dalam hitungan bulan.</p>
<div class="info-box">
                    <strong>Checklist sebelum cor/build</strong>
                    1) Volume sesuai penghuni + cadangan lumpur 3 tahun. 2) Tutup inspeksi di kedua compartment (bukan hanya satu lobang kecil). 3) Inlet-outlet pakai T-baffle, bukan pipa lurus. 4) Ventilasi pipa udara ke atas. 5) Lokasi bisa dijangkau selang truk sedot — ini yang paling sering dilupakan!
                </div>
                <p><h2>Sesuaikan dengan Kondisi Tanah Medan</h2></p>
                <p>Tanah lempung Sunggal–Helvetia menyerap lambat; resapan wajib dibuat cukup luas atau memakai sumur resapan dalam dengan isian batu belah. Lahan rawa/Marelan dengan muka air tinggi membuat tangki kosong mudah "mengambang" saat hujan besar — beton harus diberi angkur atau pilih tangki fiberglass yang diisi air saat pemasangan agar stabil.</p>
                <p>Di lahan sempit, tangki modular yang ditanam di bawah carport sah-sah saja asalkan ada akses tutup ke permukaan untuk sedot rutin. Kesalahan mahal: tangki dibangun lalu ditimbun bangunan permanen tanpa akses — ketika penuh, pemilik membongkar lantai. Rencanakan lubang manhole di posisi yang kelak tetap bisa dibuka.</p>
                <p>Terakhir, pikirkan ketinggian lahan. Di kawasan yang kerap tergenang, bibir tutup tangki harus di atas muka banjir musiman agar luapan got tidak masuk ke rongka septik. Detail 10 sentimeter saat membangun inilah yang menentukan apakah tangki Anda aman atau berubah menjadi kolam pencampur air got setiap Desember.</p>
                <p><h2>Hitung Sekali, Hemat Bertahun-tahun</h2></p>
                <p>Sebelum membangun atau merenovasi, kirim denah + jumlah penghuni ke kami lewat WhatsApp; kami bantu cek kewarasan volume dan posisi akses sedot — konsultasi awal gratis, tanpa kewajiban proyek. Yang sudah terlanjur punya tangki "warisan" tanpa data, kunjungan sedot pertama adalah momen audit paling murah: ukur volume aktual, catat, lalu kunci jadwal sedot dari angka nyata itu.</p>

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
