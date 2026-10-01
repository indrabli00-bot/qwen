<?php
/**
 * Artikel: 
 * URL bersih: /blog/prosedur-teknisi-sedot-wc   (via .htaccess aturan 3)
 */
$articles_all = require __DIR__ . '/articles-data.php';
$this_article = null;
foreach ($articles_all as $a) { if ($a['slug'] === 'prosedur-teknisi-sedot-wc') { $this_article = $a; break; } }

$page_title     = $this_article['judul'] . ' | Sedot WC Medan';
$meta_desc      = $this_article['meta_desc'];
$canonical_path = '/blog/' . $this_article['slug'];

$faq = array(
    array('q' => 'Berapa lama rata-rata pengerjaan rumah tangga?',
          'a' => '45–90 menit termasuk proteksi dan pembersihan, tergantung jarak selang dan kadar lumpur. Tangki yang jarang disedot (lebih dari 5 tahun) bisa lebih lama karena endapan memadat.'),
    array('q' => 'Apakah harus mengosongkan kamar mandi?',
          'a' => 'Tidak. Cukup hindari pemakaian kloset selama proses agar level air stabil. Pengerjaan tetap aman dengan penghuni di rumah.'),
    array('q' => 'Kapan waktu terbaik menjadwalkan?',
          'a' => 'Pagi hari untuk area perumahan padat; setelah tutup untuk ruko/restoran. Hindari jam hujan lebat bila bak kontrol berada di halaman terbuka.'),
    array('q' => 'Kenapa bau masih ada setelah disedot?',
          'a' => 'Biasanya karena resapan jenuh, bukan tangki. Setelah hisap, cek surutnya air bilas; kalau lambat, pembahasan berlanjut ke sisi hilir (resapan/drainase).'),
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
                <p><strong>Prosedur standar teknisi sedot WC profesional terdiri dari tujuh langkah: survei singkat, proteksi area, pembukaan akses, penyedotan bertahap, pemecahan gumpalan, verifikasi volume, dan penutupan rapi.</strong> Mengetahui urutan ini membantu Anda menilai kualitas layanan sebelum dan sesudah kerja — teknisi yang melompati langkah proteksi atau tidak memberi bukti volume biasanya tim yang sama yang akan meninggalkan bau besok pagi.</p>
                <p>Banyak pemilik rumah ragu memanggil jasa karena pengalaman buruk: selang bocor, lantai kotor, biaya mendadak membengkak. Semua itu gejala prosedur yang tidak jalan. Artikel ini membuka isi SOP kami apa adanya, plus tiga pertanyaan yang sebaiknya Anda ajukan saat booking.</p>
                <p><h2>Langkah 1–3: Survei, Proteksi, Akses</h2></p>
                <p>Survei 3–5 menit: lokasi bak kontrol, jarak truk ke tangki, akses listrik, dan riwayat terakhir disedot. Proteksi: alas karpet di jalur bawa alat, semprot disinfektan ringan di area tutup, sarung tangan dan sepatu bot bersih. Pembukaan akses: tutup beton diangkat dengan alat ungkit khusus — bukan linggis liar yang memecahkan lidah tutup. Kalau tutup lama sudah retak, teknisi jujur akan mencatat dan menyarankan penggantian, bukan pura-pura tidak lihat.</p>
                <p><h2>Langkah 4–5: Penyedotan dan Pemecahan Gumpalan</h2></p>
                <p>Selang hisap berdiameter besar (umumnya 4 inci) dimasukkan ke chamber pertama. Pompa vakum menarik lapisan scum atas lebih dulu, lalu lumpur tengah, lalu endapan dasar. Gumpalan padat yang menyumbat selang dipecah dengan water jet tekanan balik dari dalam tangki — bukan dengan mendorong kayu. Prinsip kerjanya: material keluar dalam bentuk slurri homogen; kalau masih banyak benda utuh berarti hisapan belum tuntas.</p>
<div class="info-box warn">
                    <strong>Tanda merah di lapangan</strong>
                    Selang menetes di atas jalan tanpa wadah penampung tetesan, teknisi menolak menunjukkan volume terangkat, atau tiba-tiba ada \"biaya tambahan bahan kimia\" setelah pekerjaan selesai. Tinggalkan dan cari operator lain — SOP yang benar selalu bisa dijelaskan dengan tenang.
                </div>
                <p><h2>Langkah 6–7: Verifikasi dan Penutupan</h2></p>
                <p>Verifikasi: volume terangkat dilaporkan (mis. 1.800 L dari tangki 2.000 L), bilasan akhir dites — air baru yang diguyurkan harus surut cepat tanpa gelekan balik. Penutupan: tutup dipasang rapat (kunci anti-geser bila tersedia), area dibilas, karpet jalur digulung, dan foto dokumentasi dikirim ke kontak WA bila diminta. Nota digital dikirim hari yang sama; kwitansi resmi atas nama perusahaan tersedia untuk klien kantor/badan usaha.</p>
                <p><h2>Tiga Pertanyaan Saat Booking</h2></p>
                <p>(1) Berapa estimasi durasi dan apakah harga sudah termasuk jetting selang? (2) Apakah volume terangkat dilaporkan tertulis? (3) Bagaimana penanganan bila ditemukan retak pada tutup atau pipa? Jawaban yang lugas dan spesifik menandakan operator yang bekerja dengan SOP; jawaban ngawur adalah filter gratis Anda sebelum mobil tangki berangkat.</p>

                <?php art_ad_slot(); ?>
                <h2>Apa yang Anda Lihat dari Luar Saat Crew Bekerja</h2>
                <p>Mengetahui apa yang terjadi di luar pintu membantu Anda memastikan pekerjaan berjalan benar. Urutan visualnya: truk parkir sedekat mungkin dengan akses bak kontrol, selang hisap tebal ditarik menuju titik bukaan; crew membuka tutup tangki secukupnya (bukan seluruhnya) dan memasukkan selang sampai menyentuh lapisan lumpur, bukan air jernih di atasnya — inilah sebabnya durasi sedot bervariasi menurut ketebalan endapan. Selama proses, volume yang terangkat terlihat di indikator tabung pada unit tertentu. Setelah selesai, area dibilas, tutup dipasang rapat kembali, dan jalur pembilasan dites dengan satu-dua siraman penuh. Kalau ada langkah yang terasa dilewati — misalnya selang hanya berputar di lapisan atas selama lima menit lalu dicabut — tanyakan langsung ketinggian lumpur akhir yang tercatat.</p>

                <h2>SOP Tiga Poin untuk Klien: Yang Perlu Anda Siapkan</h2>
                <p>Pekerjaan yang lancar di sisi kami dimulai dari tiga persiapan kecil di sisi Anda. (1) Akses: pastikan jalur menuju bak kontrol bebas kendaraan parkedir, pot besar, atau gembok halaman — selang standar sepanjang 30–50 meter kehilangan daya tarik kalau harus berbelok melewati dua properti tetangga. (2) Informasi umur dan riwayat: kapan terakhir disedot dan gejala apa yang muncul minggu ini; dua data ini menentukan panjang selang, ukuran unit, dan durasi yang kami janjikan. (3) Satu titik koordinasi: tunjuk satu orang yang tahu letak tutup sumur dan bisa membuka akses saat crew tiba, terutama untuk ruko, kantor, dan kos. Persiapan lima menit ini memangkas rata-rata 20–40 menit waktu kerja lapangan, dan pada gang sempit Medan perbedaan itulah yang menentukan pekerjaan selesai sebelum siang atau lewat tengah hari.</p>

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
