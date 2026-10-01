<?php
/**
 * Artikel: 
 * URL bersih: /blog/frekuensi-sedot-wc   (via .htaccess aturan 3)
 */
$articles_all = require __DIR__ . '/articles-data.php';
$this_article = null;
foreach ($articles_all as $a) { if ($a['slug'] === 'frekuensi-sedot-wc') { $this_article = $a; break; } }

$page_title     = $this_article['judul'] . ' | Sedot WC Medan';
$meta_desc      = $this_article['meta_desc'];
$canonical_path = '/blog/' . $this_article['slug'];

$faq = array(
    array('q' => 'Bagaimana mengetahui volume septic tank saya?',
          'a' => 'Dari gambar rencana saat membangun, atau diukur langsung: dimensi rongka dalam (panjang × lebar × tinggi efektif). Teknisi sedot rutin mencatat ini gratis saat membuka tutup tangki.'),
    array('q' => 'Bolehkah menunda sedot kalau belum mampet?',
          'a' => 'Menunda boleh sampai batas perhitungan ruang hidup, tapi melewati 1,5× interval membuat lumpur memadat dan residu makin sulit diangkat. Lebih baik disedot sedikit lebih awal daripada terlambat.'),
    array('q' => 'Benarkah enzim/pengurai bikin sedot lebih jarang?',
          'a' => 'Enzim membantu menjaga populasi bakteri, bukan menghilangkan lumpur anorganik. Ia menekan bau dan memperlambat kerak, tapi tidak mengubah jadwal sedot secara signifikan.'),
    array('q' => 'Tangki saya bocor ke sumur, apakah frekuensi sedot menolong?',
          'a' => 'Sedot rutin mengurangi tekanan meluap, tapi rembesan permanen berarti dinding retak atau jarak terlalu dekat. Perbaikan struktur tidak bisa digantikan jadwal sedot — konsultasikan survey lokasi.'),
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
                <p><strong>Frekuensi sedot WC yang benar dihitung dari volume septic tank dibagi laju penumpukan lumpur — bukan dari patokan "dua tahun sekali" yang beredar umum.</strong> Rumah tiga penghuni dengan tangki 1.500 liter realistis disedot setiap 2–3 tahun. Kos 15 kamar dengan tangki yang sama bisa penuh dalam hitungan bulan. Angka rata-rata nasional menyesatkan karena tidak memperhitungkan kapasitas tangki, jumlah pemakai, dan kebiasaan buang di tiap bangunan.</p>
                <p>Artikel ini memberi panduan jadwal per jenis bangunan di Medan — rumah tinggal, kos-kontrakan, ruko, kantor, masjid — beserta cara menghitung ulang jadwal versi rumah Anda sendiri, plus faktor-faktor yang membuat tangki lebih cepat penuh dari perkiraan.</p>
                <p><h2>Rumus Sederhana Penentu Jadwal</h2></p>
                <p>Taksiran kasar yang dipakai lapangan: tiap orang menghasilkan ±4–6 liter endapan lumpur per bulan di tangki. Ambil volume tangki dikurangi ruang mati (±30% paling bawah untuk lumpur lama dan paling atas untuk lapisan lemak), sisanya adalah "ruang hidup". Contoh: tangki 1.200 liter ÷ 3 penghuni × 5 liter/bulan ≈ ruang hidup habis dalam 60–70 bulan. Praktisnya, jadwalkan sedot tiap 3 tahun, dimajukan kalau ada sinyal lain.</p>
                <p>Rumus ini bukan ramalan presisi — ia alat ukur kewarasan. Kalau hitungan Anda bilang 4 tahun tapi di tahun kedua bak kontrol sudah meluap, berarti ada variabel yang belum masuk: kebocoran resapan, sampah non-organik, atau tangki sebenarnya lebih kecil dari yang Anda kira.</p>
                <p>Contoh kalibrasi nyata: sebuah rumah di Medan Johor dengan 4 penghuni dan tangki 1.500 liter rutin disedot tiap 2 tahun; laporan teknisi mencatat volume terangkat 700–900 liter per kunjungan — konsisten dengan hitungan ruang hidup. Rumah lain dengan penghuni sama tapi rajin membuang lemak gorengan ke kloset butuh ritase hampir dua kali lipat pada interval yang sama. Angka liter terangkat itulah bukti paling jujur atas jadwal Anda.</p>
                <p><h2>Jadwal per Jenis Bangunan</h2></p>
                <p><strong>Rumah tinggal 2–4 orang:</strong> 2–3 tahun sekali. Naikkan frekuensi kalau penghuni tetap lebih dari empat atau sering ada tamu menginap berhari-hari.<br><strong>Rumah 5+ orang / tiga generasi:</strong> 1,5–2 tahun. Beban harian naik linear dengan jumlah pemakai.<br><strong>Kos &amp; kontrakan:</strong> 6–12 bulan untuk tangki standar, tergantung jumlah kamar. Kos 10+ kamar idealnya punya tangki terpisah atau kontrak sedot terjadwal.<br><strong>Ruko &amp; toko:</strong> 1–2 tahun; tambah ketat kalau ada dapur/pantry di dalam.<br><strong>Kantor &amp; sekolah:</strong> 1–2 tahun dengan catatan toilet perempuan lebih ramai — pantau bak kontrol tiap kuartal.<br><strong>Masjid &amp; tempat ibadah:</strong> 6–12 bulan; volume melonjak tajam tiap Jumat dan musim pengajian.</p>
<div class="info-box warn">
                    <strong>Beda jadwal, beda pekerjaan</strong>
                    Sedot rutin (lumpur masih basah, volume terkendali) selesai 30–60 menit. Menunggu sampai meluap berarti lumpur memadat, kadang bercampur material bangunan dari resapan — durasi dan biaya bisa dua kali lipat. Jadwal rutin selalu lebih murah daripada penanganan darurat.
                </div>
                <p><h2>Faktor yang Mempercepat Penuh</h2></p>
                <p>Tisu basah dan pembalut tidak hancur dan langsung memakan volume. Lemak minyak goreng membentuk kerak di permukaan dan menyumbat baffles. Air berlebih dari mesin cuci modern menambah beban hidraulik — tangki dirancang untuk siraman kloset, bukan puluhan liter per siklus cucian. Bakteri pengurai yang mati oleh soda api, karbol pekat, atau antibiotik limbahan membuat lumpur tidak menyusut sebagaimana mestinya.</p>
                <p>Bangunan tua di Medan sering punya tangki berukuran minimal zaman orang tuanya membangun — 800–1.000 liter untuk keluarga yang kini tumbuh dua kali lipat. Kalau Anda tidak tahu kapasitas tangki, teknisi bisa mengukur dari dimensi tutup dan kedalaman saat sedot pertama; catat hasilnya sebagai dasar jadwal berikutnya.</p>
                <p>Kebiasaan musim Lebaran juga menggeser jadwal. Beban tamu menginap selama sepekan bisa menyamai pemakaian satu bulan penuh. Kalau rumah Anda biasa menampung banyak keluarga saat hari besar, majukan jadwal sedot satu-dua bulan sebelum Ramadan ketimbang sesudahnya — harga kunjungan terjadwal selalu lebih ramah daripada panggilan darurat malam takbiran.</p>
                <p><h2>Cara Memasang Jadwal agar Tidak Ketinggalan</h2></p>
                <p>Setel pengingat kalender sesuai tanggal sedot terakhir ditambah interval versi rumah Anda — jangan menunggu gejala. Tanda "sudah waktunya" yang paling andal justru belum munculnya masalah: bak kontrol masih bersih, halaman kering, air turun normal. Ketika tiga hal itu berubah, artinya Anda sudah telat satu putaran.</p>
                <p>Untuk usaha dan properti sewaan, buat kontrak perawatan berkala dengan penyedia jasa sedot WC langganan: harga per kunjungan biasanya lebih baik, dan jadwal berjalan otomatis meski pengelola berganti. Simpan struk laporan volume terangkat — angka liter lumpur per periode adalah data terbaik untuk menghitung ritme tangki Anda sendiri.</p>

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
