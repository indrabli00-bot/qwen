<?php
/**
 * Artikel: 5 Penyebab Utama WC Mampet dan Cara Mengatasinya
 * URL bersih: /blog/penyebab-wc-mampet   (via .htaccess aturan 3)
 */
$articles_all = require __DIR__ . '/articles-data.php';
$this_article = null;
foreach ($articles_all as $a) { if ($a['slug'] === 'penyebab-wc-mampet') { $this_article = $a; break; } }

$page_title     = $this_article['judul'] . ' | Sedot WC Medan';
$meta_desc      = $this_article['meta_desc'];
$canonical_path = '/blog/' . $this_article['slug'];

$faq = array(
    array('q' => 'Apakah WC mampet selalu berarti septic tank penuh?',
          'a' => 'Tidak. Sumbatan bisa terjadi di kloset, pipa pembuangan, atau bak kontrol sebelum tangki. Cek dulu apakah air turun lambat di semua titik atau hanya satu; kalau hanya satu, kemungkinan besar sumbatan lokal.'),
    array('q' => 'Bolehkah menuang soda api untuk WC yang mampet?',
          'a' => 'Sebaiknya tidak. Soda api menghasilkan panas tinggi yang dapat meretakkan keramik kloset dan menyambungkan pipa PVC yang melunak, serta membunuh bakteri pengurai di tangki. Untuk sumbatan kertas, plunger jauh lebih aman.'),
    array('q' => 'Berapa lama waktu pengerjaan sedot WC untuk rumah biasa?',
          'a' => 'Untuk rumah dengan akses normal, proses penyedotan biasanya selesai dalam 30–60 menit. Waktu bertambah bila selang harus ditarik panjang karena truk tidak bisa masuk gang.'),
    array('q' => 'Kenapa WC sering mampet padahal baru disedot?',
          'a' => 'Penyebab tersering adalah resapan yang sudah jenuh, bukan tangki. Tangki boleh kosong, tapi kalau air tidak punya tempat meresap, aliran dari kloset tetap terhambat.'),
    array('q' => 'Kapan harus berhenti mencoba sendiri dan memanggil teknisi?',
          'a' => 'Setelah dua percobaan mandiri gagal, atau saat mulai muncul genangan di floor drain, bau menyengat, atau air naik ke lantai kamar mandi. Menunda justru membuat pekerjaan lebih berat dan lebih mahal.'),
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
                <p><strong>WC mampet hampir selalu disebabkan oleh satu dari lima hal: tumpukan tisu dan kertas, benda keras yang jatuh ke kloset, septic tank yang sudah penuh, kemiringan pipa pembuangan yang salah, atau resapan yang jenuh air.</strong> Kelima penyebab itu gejalanya mirip — air turun lambat, lalu berhenti — tetapi penanganannya berbeda total. Menyedot tangki ketika masalahnya ada di sumbatan kloset hanya membuang uang; sebaliknya, mendongkrak pipa ketika tangki sudah penuh membuat limbah meluap ke halaman.</p>

                <p>Artikel ini mengurutkan kelima penyebab dari yang paling sering ditemukan di rumah-rumah Medan, memberi ciri khas masing-masing, dan menjelaskan apa yang bisa Anda lakukan sendiri sebelum memutuskan memakai jasa sedot WC. Di bagian akhir ada daftar cek cepat agar Anda tidak salah diagnosis.</p>

                <h2>1. Tumpukan Tisu, Kertas, dan Pembalut</h2>
                <p>Ini penyebab nomor satu dan paling murah untuk dicegah. Kloset dirancang untuk menampung air dan tinja — bukan serat kertas dalam jumlah banyak, apalagi tisu basah yang tidak terurai sama sekali. Di banyak rumah, kebiasaan membuang tisu langsung ke kloset terasa praktis sampai suatu hari air berhenti turun.</p>
                <p>Ciri khasnya: aliran sempat lancar lalu makin lama makin lambat selama beberapa hari, tanpa bau menyengat dari got luar. Penanganan pertama: gunakan <em>plunger</em> (karet penghisap) dengan gerakan tekan-tarik mantap 15–20 kali sambil menutup permukaan air agar dorongan tekanan maksimal. Bila berhasil, taruh tempat sampah kecil di samping kloset dan berhenti membuang kertas ke sana.</p>
                <p>Hati-hati dengan "obat WC cair" berkadar kuat: ia bisa melunakkan sambungan pipa tua dan mematikan bakteri pengurai di septic tank. Untuk sumbatan kertas, tenaga mekanis jauh lebih aman daripada bahan kimia.</p>

                <h2>2. Benda Keras yang Tercecer ke Kloset</h2>
                <p>Sikat, botol shampo, mainan anak, gawai, hingga cincin sering tersangkut di leher angsa (sifon) kloset. Bedanya dengan sumbatan kertas: benda keras tidak akan hancur didorong berapa kali pun.</p>
                <p>Tandanya khas — air masih bisa surut sedikit, tetapi setiap kali disiram, permukaan naik tajam lalu turun sangat pelan. Kadang terdengar bunyi "gluk" karena udara terperangkap.</p>
                <p>Langkah yang realistis: coba ambil dengan kawat fleksibel yang ujungnya ditekuk membentuk kait, atau suntikkan udara lewat pompa tangan khusus saluran. Jangan mendorong benda makin dalam dengan tongkat lurus; kalau tersangkut di sifon, kloset harus diangkat dan dibalik untuk mengeluarkan bendanya — pekerjaan yang sebaiknya diserahkan pada teknisi.</p>

                <h2>3. Septic Tank Sudah Penuh</h2>
                <p>Septic tank bekerja dengan memisahkan tiga lapisan: endapan lumpur di dasar, air jernih di tengah, dan kerak lemak di permukaan. Lumpur tidak pernah hilang — ia hanya menunggu dikeluarkan. Ketika volume lumpur sudah mendekati outlet, aliran dari kloset kehilangan daya dorong.</p>
                <p>Tanda tangki penuh berbeda dari sumbatan lokal:</p>
                <ul>
                    <li>Air turun lambat di <strong>semua</strong> titik pembuangan rumah, bukan hanya satu kloset.</li>
                    <li>Bau sulfida (telur busuk) tercium dari kloset maupun dari tutup bak kontrol di halaman.</li>
                    <li>Tanaman di atas area resapan tumbuh jauh lebih subur atau tanah di sekitarnya terasa lembek.</li>
                    <li>Belum pernah disedot dalam 2–3 tahun terakhir.</li>
                </ul>
                <p>Ini satu-satunya penyebab dari lima daftar yang tidak bisa diselesaikan dengan alat rumahan. Solusinya penyedotan oleh truk tangki. Kalau Anda ragu mana yang penuh — tangki atau resapan — baca uraian lengkap pada <a href="/blog/bedanya-wc-penuh-dan-saluran-tersumbat">cara membedakan WC penuh dan saluran tersumbat</a>.</p>

                <h2>4. Kemiringan Pipa Pembuangan yang Kurang</h2>
                <p>Pipa pembuangan tinja bekerja dengan gravitasi. Standar pemasangan yang aman adalah kemiringan sekitar 1–2 persen (turun 1–2 cm tiap meter). Rumah lama dan bangunan yang direnovasi tanpa menghitung ulang jalur pipa sering punya kemiringan kurang, bahkan mendatar.</p>
                <p>Gejalanya datang perlahan dan berulang: setelah dilancarkan, beberapa bulan kemudian mampet lagi di titik yang sama, tanpa ada benda asing dan tanpa tangki penuh. Air mengalir terlalu pelan sehingga partikel padat mengendap di dasar pipa dan menumpuk seperti karang.</p>
                <p>Perbaikan permanen berarti membongkar jalur pipa dan memasang ulang dengan kemiringan benar — biaya yang lebih besar daripada menyedot tangki, tetapi sekali selesaikan untuk bertahun-tahun. Karena itu penting memastikan penyebabnya sebelum membayar pekerjaan apa pun.</p>

                <h2>5. Resapan Jenuh atau Bak Kontrol Meluap</h2>
                <p>Di Medan, sebagian besar rumah memakai sistem tangki septik + resapan (sumur resapan/biocell). Resapan punya umur kerja. Lapisan lumpur halus yang ikut terbawa lama-lama menutup pori-pori tanah di sekitarnya, dan resapan berhenti menyerap.</p>
                <p>Tanda resapan jenuh: air meluber dari bak kontrol, genangan di halaman yang tidak kunjung kering walau tidak hujan, dan bau yang paling kuat justru di area resapan, bukan di dalam rumah. Musim hujan memperparah situasinya — muka air tanah yang naik membuat daya serap berkurang drastis. Pembahasan lengkap ada di artikel <a href="/blog/resapan-air-macet-penanganan">resapan air macet: penyebab dan penanganannya</a>.</p>
                <p>Penanganan sementara: kurangi debit air yang masuk (jangan mencuci banyak sekaligus, jangan buang air cucian ke kloset). Penanganan tuntas: menyedot lumpur yang lolos ke bak kontrol dan, kalau resapan sudah mati total, membuat resapan baru.</p>

                <h2>Daftar Cek Cepat Sebelum Memanggil Teknisi</h2>
                <table>
                    <tr><th>Yang Anda amati</th><th>Kemungkinan penyebab</th><th>Bisa sendiri?</th></tr>
                    <tr><td>Satu kloset saja lambat, lainnya normal</td><td>Kertas / benda di sifon</td><td>Ya, plunger atau kait kawat</td></tr>
                    <tr><td>Semua pembuangan lambat + bau</td><td>Tangki penuh</td><td>Tidak, perlu sedot</td></tr>
                    <tr><td>Mampet berulang di titik sama</td><td>Kemiringan pipa kurang</td><td>Tidak, perlu bongkar jalur</td></tr>
                    <tr><td>Genangan di halaman dekat bak kontrol</td><td>Resapan jenuh</td><td>Tidak, perlu sedot/resapan baru</td></tr>
                    <tr><td>Ada bunyi gluk dan air naik tajam</td><td>Benda keras tersangkut</td><td>Tergantung posisi; umumnya teknisi</td></tr>
                </table>

                <div class="info-box warn">
                    <strong>Jangan lakukan ini</strong>
                    Jangan menuang soda api atau asam pekat ke kloset yang mampet total — cairan tidak akan lewat sumbatan dan berisiko memercik kembali saat Anda bekerja di atasnya. Jangan juga memasukkan tangan ke bak kontrol; gas metana di dalamnya berbahaya dan limbahnya mengandung patogen.
                </div>

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
