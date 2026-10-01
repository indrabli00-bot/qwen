<?php
/**
 * Artikel: 
 * URL bersih: /blog/kesalahan-sehari-hari-septic-tank   (via .htaccess aturan 3)
 */
$articles_all = require __DIR__ . '/articles-data.php';
$this_article = null;
foreach ($articles_all as $a) { if ($a['slug'] === 'kesalahan-sehari-hari-septic-tank') { $this_article = $a; break; } }

$page_title     = $this_article['judul'] . ' | Sedot WC Medan';
$meta_desc      = $this_article['meta_desc'];
$canonical_path = '/blog/' . $this_article['slug'];

$faq = array(
    array('q' => 'Pengharum cair gantung di bak mandi aman?',
          'a' => 'Umumnya aman dalam jumlah wajar; kandungan utamanya surfaktan dan pewangi encer. Yang merusak adalah varian "pembersih kuat otomatis" berkadar disinfektan tinggi.'),
    array('q' => 'Apa pengganti soda api untuk WC berkerak?',
          'a' => 'Asam sitrat/air jeruk nipis pekat + sikat pegangan panjang. Kerak mineral memang sulit, tapi tidak sepadan risikonya dibanding caustic yang membakar pipa dan kulit.'),
    array('q' => 'Greywater (cucian) boleh digabung ke septik?',
          'a' => 'Sebaiknya tidak untuk mesin cuci. Mandi/wastafel volume kecil masih tolerable. Pisahkan jalur greywater ke resapan tersendiri bila renovasi memungkinkan.'),
    array('q' => 'Bagaimana tahu bakteri tangki saya "mati"?',
          'a' => 'Tandanya: sedot terlalu sering padahal pemakaian normal, bau sulfida ekstrem, dan lumpur terangkat tampak segar tak terurai (serat terlihat utuh). Pemulihan: hentikan input kimia, tambahkan starter enzim, patuhi jadwal.'),
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
                <p><strong>Septic tank cepat penuh bukan karena nasib buruk, melainkan tujuh kebiasaan harian: membuang tisu basah, menuang minyak goreng, mengecat/menyimpan bahan kimia di kloset, memakai pembasmi kuman berlebihan, menyambungkan mesin cuci ke tangki, menunda sedot bertahun-tahun, dan membangun resapan seadanya.</strong> Enam dari tujuh kebiasaan itu gratis dihentikan hari ini; satu sisanya (resapan) diperbaiki sebelum musim hujan berikutnya.</p>
                <p>Artikel ini membedah mekanisme kerusakan tiap kebiasaan — kenapa bakteri pengurai mati, kenapa lemak menutup baffles, kenapa "sedikit saja" menumpuk jadi satu ritase. Setelah paham mekanismenya, mengubah kebiasaan terasa jauh lebih mudah daripada sekadar menghafal daftar larangan.</p>
                <p><h2>#1–2: Tisu Basah dan Minyak Goreng</h2></p>
                <p>Tisu basah dirancang tidak hancur di air — itulah fitur jualnya — dan ia masuk daftar panjang penyebab sumbatan sifon di seluruh dunia. Satu helai per hari = ratusan helai per tahun mengendap utuh di tangki. Ganti dengan tisu toilet cepat-urai dan tempat sampah bertutup di samping kloset; biaya Rp20 ribu sebulan menyelamatkan jutaan rupiah pekerjaan darurat.</p>
                <p>Minyak goreng bekas membentuk lapisan mengapung yang menebal setiap dituang. Kerak itu menutupi permukaan tangki, memerangkap gas, menyumbat baffles outlet, dan membungkus padatan sehingga tidak terurai. Tuang sisa minyak ke wadah, bekukan di freezer, buang ke sampah organik — atau kumpulkan untuk bank minyak jelantah yang kini banyak beroperasi di Medan.</p>
                <p><h2>#3–4: Bahan Kimia dan Pembasmi Kuman</h2></p>
                <p>Soda api, thinner, cat sisa, pestisida rumah tangga, hingga antibiotik limbahan manusia semuanya menyerang populasi bakteri anaerob yang menjadi "mesin" tangki. Tangki sehat bergantung koloni mikroba; membunuhnya berarti menghentikan penyusutan lumpur — volume naik lebih cepat, bau meningkat, dan sedot datang lebih dini. Simpan bahan B3 kecil di botol tertutup dan buang lewat layanan sampah berbahaya kelurahan, bukan lewat kloset.</p>
                <p>Deterjen antibakterial berlebihan untuk cucian harian memberi efek serupa secara diam-diam. Cukup takaran label, dan pilih formula ramah septic bila mesin cuci Anda tersambung ke tangki.</p>
                <p><h2>#5–6: Mesin Cuci dan Penundaan Sedot</h2></p>
                <p>Satu siklus mesin cuci = 60–100 liter air mendadak masuk tangki, membawa serat deterjen dan lemak sabun. Beban hidraulik kilat itu mendorong endapan keluar menuju resapan — awal mula biomat yang mematikan daya serap. Solusi murah: perpanjang jalur drainase mesin cuci lewat bak penampung kecil, atau jadwalkan cucian di jam rumah sepi, dan idealnya pisahkan saluran greywater dari tangki septik.</p>
                <p>Penundaan sedot punya efek bola salju: lumpur memadat, mengikat pasir, dan suatu hari tidak bisa lagi diisap selang — harus dipecah manual. Volume yang "dihemat" hari ini kembali sebagai biaya tenaga ekstra ditambah potensi resapan rusak. Jadwalkan berdasarkan angka kapasitas, bukan berdasarkan kapan bau mulai tak tertahankan.</p>
<div class="info-box">
                    <strong>Daftar cek mingguan 2 menit</strong>
                    1) Tempat sampah kecil tersedia di dekat kloset? 2) Ada wadah minyak jelantah di dapur? 3) Lantai sekitar kloset kering dari rembes? 4) Drain jarang dipakai dialiri air? 5) Kalender punya pengingat tanggal sedot terakhir? Lima centang hijau = tangki Anda awet lebih lama dari tetangga.
                </div>
                <p><h2>#7: Resapan Seadanya</h2></p>
                <p>Resapan dangkal 1×1 meter dengan isian bata sisa adalah resep genangan musiman. Luas resapan harus sebanding volume tangki dan daya serap tanah lempung setempat. Kalau halaman sering becek di area resapan meski tangki baru disedot, masalahnya struktural — konsultasikan pembuatan sumur resapan dalam atau bidang resapan berpori sebelum November tiba.</p>
                <p>Merawat septic tank pada dasarnya adalah merawat bakteri dan menjaga air bersih tidak masuk ke jalur kotor. Dua prinsip itu menutup tujuh kebiasaan perusak di atas. Dan ketika jadwal sedot tiba, gunakan penyedia yang mencatat volume terangkat — data itu adalah rapor kesehatan tangki Anda dari tahun ke tahun.</p>

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
