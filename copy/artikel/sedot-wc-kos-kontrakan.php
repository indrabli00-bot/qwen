<?php
/**
 * Artikel: 
 * URL bersih: /blog/sedot-wc-kos-kontrakan   (via .htaccess aturan 3)
 */
$articles_all = require __DIR__ . '/articles-data.php';
$this_article = null;
foreach ($articles_all as $a) { if ($a['slug'] === 'sedot-wc-kos-kontrakan') { $this_article = $a; break; } }

$page_title     = $this_article['judul'] . ' | Sedot WC Medan';
$meta_desc      = $this_article['meta_desc'];
$canonical_path = '/blog/' . $this_article['slug'];

$faq = array(
    array('q' => 'Pemilik menolak bertanggung jawab, harus bagaimana?',
          'a' => 'Rujuk perjanjian sewa tertulis; jika tidak ada, mediasi RT/kelurahan. Dokumentasi laporan cepat + foto sangat menentukan posisi tawar penghuni.'),
    array('q' => 'Berapa interval sedot untuk kos 12 kamar?',
          'a' => 'Tangki standar 1.500–2.000 L: rata-rata 6–9 bulan. Pantau volume terangkat kunjungan pertama, lalu kalibrasi jadwal dari angka nyata itu.'),
    array('q' => 'Anak kos sering membuang popok/sanitasi — bagaimana menegurnya?',
          'a' => 'Sediakan tempat sampah bertutup + kantong kecil di tiap kamar mandi; ubah larangan menjadi fasilitas. Teguran lisan tanpa alternatif jarang berhasil.'),
    array('q' => 'Bisa minta invoice atas nama pemilik untuk klaim biaya perusahaan kos?',
          'a' => 'Ya, sebutkan saat penjadwalan; kwitansi/rincian resmi diterbitkan sesuai nama penanggung jawab pembayaran.'),
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
                <p><strong>Saat WC kos mampet, aturan praktisnya begini: kerusakan akibat pemakaian sehari-hari adalah tanggung jawab pemilik properti, sedangkan kerusakan akibat kelalaian penghuni (membuang sampah padat ke kloset) dapat dibebankan kepada yang bersangkutan.</strong> Karena itu langkah pertama penghuni bukan mencari tukang, melainkan melapor cepat dan terdokumentasi ke pemilik/keluarga pengelola — sebelum keadaan bertambah parah dan biayanya membesar.</p>
                <p>Kamar mandi bersama puluhan pengguna punya pola kerusakan khas: tisu menumpuk, hair catch shower jarang dibersihkan, dan tangki yang dihitung untuk 6 orang dipakai 15 orang. Panduan ini berlaku untuk anak kos, ibu kos, dan pemilik kontrakan di Medan — siapa menghubungi siapa, apa yang wajib disiapkan, dan bagaimana membagi biaya secara adil tanpa drama.</p>
                <p><h2>Untuk Penghuni: Protokol Laporan Cepat</h2></p>
                <p>Langkah Anda saat menemukan mampet: (1) berhenti menggunakan kamar mandi tersebut, tempel kertas "JANGAN DIPAKAI"; (2) foto/video gejala — air setinggi apa, ada genangan di mana; (3) kirim ke grup penghuni + pemilik dengan kalimat jelas: "Kloset kamar 4 lambat sejak semalam, wastafel normal"; (4) jangan coba-coba menuang bahan kimia sendiri — biaya perbaikan akibat soda api bisa berbalik tagihan ke Anda.</p>
                <p>Laporkan secepatnya bahkan untuk gejala ringan. Di bangunan multi-penghuni, "nanti juga lancar" berubah jadi luapan koridor dalam 48 jam. Penghuni yang melapor cepat hampir selalu dipandang positif; yang menutupi sampai meluber, sebaliknya.</p>
                <p><h2>Untuk Ibu Kos: Diagnosis Mandiri 10 Menit</h2></p>
                <p>Sebelum menelepon jasa, tentukan jenis masalah: satu kloset lambat saja = sumbatan lokal, coba plunger (sediakan satu plunger berkualitas di gudang — investasi wajib kos). Semua titik lambat + bau di got belakang = tangki/resapan, jadwalkan sedot. Wastafel/shower lambat = rambut dan sabun, bersihkan trap. Catat tanggal sedot terakhir di buku khusus; kalau sudah lewat interval, panggilan darurat Anda sebenarnya jadwal rutin yang tertunda.</p>
<div class="info-box">
                    <strong>Aturan pembagian biaya yang adil</strong>
                    Tangki &gt; interval jadwal → biaya pemilik (pemeliharaan). Sumbatan oleh benda asing terbukti (mainan, pembalut, hp) → penghuni terkait. Kerusakan karena bangunan (kemiringan pipa, tangki bocor) → pemilik. Tulis kesepakatannya di kontrak sewa sejak awal — klausul "rusak karena pemakaian vs kelalaian" mencegah 90% pertengkaran.
                </div>
                <p><h2>Untuk Pemilik: Desain Anti-Drama</h2></p>
                <p>Kos >10 kamar sebaiknya tidak berbagi satu tangki kecil. Opsi teknis: tangki modular 3.000 liter, dua compartment paralel per blok kamar mandi, atau kontrak sedot terjadwal 6 bulanan dengan harga paket — biaya predictable, reputasi terjaga, penyewa betah. Tambah satu kebiasaan murah: tempel instruksi "buang tisu di tempat sampah" di setiap pintu kamar mandi; efektivitasnya melawan kebiasaan lebih tinggi dari brosur manapun.</p>
                <p>Inspeksi triwulan 5 menit: buka bak kontrol, lihat warna dan ketinggian, cek bau halaman. Sepuluh menit per kuartal mencegah kejadian "kos bau", faktor nomor satu calon penyewa kabur sebelum deal.</p>
                <p><h2>Skema Biaya yang Adil dan Transparan</h2></p>
                <p>Untuk pekerjaan darurat, minta rincian tertulis via WhatsApp sebelum teknisi berangkat: lingkup (sedot vs dongkrak), estimasi rit, dan akses gang. Penghuni boleh patungan operasional ringan (misal biaya material pembersih), tetapi komponen modal (truk sedot, penggantian pipa) tetap domain pemilik — kecuali kelalaian terbukti. Semua pihak tenang ketika garisnya jelas.</p>
                <p>Dan untuk keluhan berulang di kos lama: kadang akar masalahnya kemiringan pipa atau tangki under-capacity warisan pembangunan. Sekali biaya audit menyeluruh bisa menghapus langganan sedot darurat tahunan — hitung sebagai investasi kenyamanan penyewa, bukan pengeluaran hangus.</p>

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
