<?php
/**
 * Artikel: 
 * URL bersih: /blog/cara-menghilangkan-bau-dari-wc   (via .htaccess aturan 3)
 */
$articles_all = require __DIR__ . '/articles-data.php';
$this_article = null;
foreach ($articles_all as $a) { if ($a['slug'] === 'cara-menghilangkan-bau-dari-wc') { $this_article = $a; break; } }

$page_title     = $this_article['judul'] . ' | Sedot WC Medan';
$meta_desc      = $this_article['meta_desc'];
$canonical_path = '/blog/' . $this_article['slug'];

$faq = array(
    array('q' => 'Kenapa bau muncul hanya pagi hari?',
          'a' => 'Malam tanpa pemakaian memberi waktu gas terakumulasi di rongka pipa; siraman pertama pagi menyodorkannya ke ruang. Sering tanda seal kloset bocor atau ventilasi kurang tarik.'),
    array('q' => 'Kapur barus dan kopi efektif?',
          'a' => 'Menyamarkan sementara, tidak menetralkan sulfida. Jangan jadikan solusi utama — bau yang tertutup adalah bau yang terus diproduksi.'),
    array('q' => 'Bau dari shower jarang dipakai, normal?',
          'a' => 'Tidak, tapi mudah: water seal-nya kering. Alirkan air 1 liter tiap dua minggu untuk semua drain yang jarang dipakai agar lengkung pipa tetap berisi penutup gas.'),
    array('q' => 'Berapa lama bau hilang setelah tangki disedot?',
          'a' => 'Bau sumbernya langsung turun drastis begitu lumpur diangkat. Sisa bau di tanah/area yang sempat tergenang butuh 1–2 minggu ventilasi alami atau penyemprotan disinfektan lokasi.'),
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
                <p><strong>Bau menyengat dari WC hampir selalu berasal dari tiga sumber: seal kloset yang bocor, bak kontrol yang jenuh lumpur, atau pipa ventilasi tangki yang tersumbat.</strong> Pewangi ruangan dan karbol hanya menimbun bau dengan wewangian selama beberapa jam — sumber gas sulfida tetap mengeluarkan pasokannya. Cara yang benar adalah urutan pengecekan enam titik dari yang termurah sampai yang butuh teknisi; sebagian besar kasus selesai di dua titik pertama.</p>
                <p>Bau juga bukan satu jenis: ada yang anyir seperti got, ada yang manis kimia, ada yang telur busuk tajam. Masing-masing menunjuk sumber berbeda. Artikel ini mengajarkan mencocokkan karakter bau dengan titik asalnya, plus langkah cepat meredakannya malam ini sebelum perbaikan tuntas dilakukan besok.</p>
                <p><h2>Kenali Dulu Jenis Baunya</h2></p>
                <p>Bau telur busuk (sulfida) khas dari tangki/resapan — gas hasil penguraian anaerob. Bau anyir got biasanya air trap kering: lengkung pipa di bawah wastafel atau shower yang kehilangan genangan airnya sehingga gas bebas naik. Bau pesing amoniak menandakan rembesan urine di nat keramik atau lantai area basah yang tidak dibersihkan sampai kedalaman nat. Dan bau manis samar dekat tutup tangki bisa berarti kebocoran lidah penutup beton yang retak.</p>
<div class="info-box">
                    <strong>Tes cepat air trap</strong>
                    Tuang 1 liter air ke setiap floor drain dan saluran shower yang jarang dipakai. Kalau bau berkurang dalam semalam, masalahnya hanya water seal yang mengering — rutinitas sebulan sekali menyelesaikan selamanya. Ini penyebab paling sering di kamar mandi kedua rumah yang jarang digunakan.
                </div>
                <p><h2>Titik #1: Seal dan Dudukan Kloset</h2></p>
                <p>Cium permukaan lantai di pangkal kloset saat disiram. Bau keluar dari celah itu = segel/wax ring atau sambungan klep pembuangan di belakang kloset bocor. Gas dari jalur pembuangan menyelinap lewat rongga kecil di bawah keramik. Perbaikannya murah: lepas kloset, ganti segel baru, rapatkan sambungan, pasang kembali. Bisa dikerjakan sendiri kalau Anda nyaman membongkar keramik, atau menitipkan pada teknisi sedot WC sekalian kunjungan rutin.</p>
                <p>Varian Medan klasik: kloset duduk dipasang di atas lantai yang sering dipel basah. Air pel masuk ke celah dudukan, membasahi lapisan kotoran tahunan di bawahnya, dan menghasilkan bau lembap campur got yang dikira "dari tangki" padahal tidak pernah sampai ke luar rumah.</p>
                <p><h2>Titik #2–4: Bak Kontrol, Ventilasi, Tangki</h2></p>
                <p>Buka bak kontrol: permukaan air tinggi dan endapan gelap berbau tajam berarti sistem sudah penuh sampai hilir — penyedotan diperlukan, bukan deodoran. Lalu lihat pipa ventilasi atap: ujung terbuka tanpa tutung kawat mudah dihuni sarang laba-laba dan daun, membuat gas balik arah mencari jalan keluar lain — biasanya lewat kloset. Cek terakhir: tutup tangki. Retak rambut di beton penutup cukup lebar melepas gas tiap tekanan internal naik.</p>
                <p>Kalau bau menguat setelah hujan deras, curigai resapan jenuh: air hujan tidak punya tempat menyerap dan mendorong gas naik lewat jalur septik. Pola musiman ini dibahas terpisah di artikel musim hujan dan septic tank.</p>
                <p><h2>Titik #5–6: Got Luar dan Halaman</h2></p>
                <p>Talangnya sering di luar rumah: selokan lingkungan mampet membuat bau got "bermigrasi" ke halaman dan kamar mandi lewat celah-celah. Amati apakah bau juga muncul di depan rumah, bukan hanya dalam. Kalau ya, perbaiki aliran got lingkungan lebih dulu — kerja bakti satu meter selokan mengalahkan seluruh produk pengharup di rak supermarket.</p>
                <p>Genangan air limbah halus di taman (sering tak terlihat karena merembes) menghasilkan bau tanah basah busuk persisten. Tes sederhana: tancapkan kayu kecil di area yang dicurigai; bila keluar cairan keruh berbau, jalur rembesan sudah mendekati permukaan dan tangki perlu diperiksa volumenya minggu itu.</p>
                <p><h2>Urutan Bertindak Malam Ini</h2></p>
                <p>Satu: tuang air ke semua drain kering. Dua: bersihkan nat dan lantai sekitar pangkal kloset sampai kedalaman nat dengan sikat. Tiga: cium bak kontrol (pakai masker, jangan condongkan wajah). Empat: cek ujung ventilasi atap. Bila empat langkah tidak mengubah apa pun, kemungkinan besar sumbernya volume tangki atau resapan — dua hal yang memang ranah alat sedot, bukan alat bersih-bersih. Kirim video bau-ke mana-paling-terasa lewat WhatsApp, kami bantu arahkan diagnosis awalnya gratis.</p>

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
