<?php
/**
 * pages/disclaimer.php — Disclaimer (halaman wajib, pasal 6 blueprint)
 * Membatasi tanggung jawab: sifat informasi artikel & batasan layanan.
 * URL bersih: /disclaimer
 */
$page_title     = 'Disclaimer & Penyangkalan | Medansedotwc.my.id - Sedot WC Medan';
$meta_desc      = 'Disclaimer medansedotwc.my.id: artikel bersifat informasi umum bukan pengganti teknisi resmi, batasan hasil layanan, dan tanggung jawab pihak ketiga.';
$canonical_path = '/disclaimer';

require_once __DIR__ . '/../header.php';
?>
<section class="page-wrap">
    <div class="container">
        <div class="static-shell">

            <h1>Disclaimer</h1>
            <p><em>Terakhir diperbarui: 1 Oktober 2026</em></p>

            <p>Seluruh isi yang Anda baca di <strong>medansedotwc.my.id</strong> disediakan "sebagaimana adanya" untuk keperluan informasi umum. Halaman ini menjelaskan batas dari apa yang bisa kami jamin.</p>

            <h2>1. Artikel Bersifat Informasi Umum</h2>
            <p>Tulisan di <a href="/blog">blog</a> kami bertujuan membantu pembaca memahami gejala, penyebab, dan perawatan mandiri pada kloset serta septic tank. Namun perlu ditegaskan:</p>
            <ul>
                <li>Artikel <strong>bukan pengganti pemeriksaan langsung oleh teknisi</strong>. Kondisi lapangan tiap bangunan berbeda — umur pipa, kedalaman resapan, daya serap tanah, dan kapasitas tangki tidak bisa dinilai lewat foto atau cerita.</li>
                <li>Tips yang aman untuk satu kondisi bisa memperburuk kondisi lain. Contoh: menuang bahan kimia keras ke saluran yang sudah berkarat justru mempercepat kebocoran.</li>
                <li>Kami tidak bertanggung jawab atas kerugian yang timbul bila pembaca mengambil tindakan hanya berdasarkan bacaan di situs ini tanpa melakukan pengecekan sendiri di lokasi.</li>
            </ul>

            <h2>2. Tidak Ada Jaminan Hasil Tertentu</h2>
            <p>Dalam penanganan saluran tersumbat, ada kasus yang tidak dapat diselesaikan pada kunjungan pertama, misalnya pipa yang sudah kolaps, resapan yang jenuh total, atau bangunan yang berdiri di atas tanah dengan drainase buruk. Untuk situasi seperti ini:</p>
            <ul>
                <li>Kami menyampaikan temuan apa adanya, termasuk bila perbaikan menyeluruh memerlukan pekerjaan tambahan di luar jasa sedot WC.</li>
                <li>Harga yang disepakati setelah survey berlaku untuk lingkup pekerjaan yang dibahas saat itu; penambahan lingkup akan dibicarakan sebelum dikerjakan.</li>
                <li>Kami tidak menjamin septic tank tidak akan penuh kembali pada jangka waktu tertentu, karena kecepatan pengisian ditentukan oleh pemakaian penghuni, volume tangki, dan kondisi resapan.</li>
            </ul>

            <h2>3. Harga dan Estimasi</h2>
            <p>Informasi biaya yang ditampilkan bersifat indikatif dan dapat berubah mengikuti jarak tempuh, akses lokasi, panjang selang yang dibutuhkan, serta volume lumpur. Angka final selalu disampaikan setelah survey dan disetujui Anda sebelum pekerjaan dimulai. Kami tidak memungut biaya survey di area Medan Sunggal dan sekitarnya.</p>

            <h2>4. Tautan dan Konten Pihak Ketiga</h2>
            <ul>
                <li>Situs ini memuat tautan keluar ke layanan pihak ketiga seperti WhatsApp, Google Maps, dan Google Search.</li>
                <li>Situs ini menampilkan iklan yang dilayani melalui <strong>Google AdSense</strong>. Iklan, penawar iklan, serta cookie yang mereka tanam berada di luar kendali kami. Penjelasan lengkapnya ada di <a href="/kebijakan-privasi">Kebijakan Privasi</a>.</li>
                <li>Kami tidak endorse dan tidak bertanggung jawab atas produk, jasa, atau klaim yang diiklankan pihak ketiga di halaman kami.</li>
            </ul>

            <h2>5. Keterbatasan Tanggung Jawab</h2>
            <p>Sepanjang diizinkan hukum yang berlaku, tanggung jawab kami atas kerugian yang terkait penggunaan situs ini dibatasi pada nilai transaksi jasa terakhir antara Anda dan kami. Kami tidak menanggung kerugian tidak langsung seperti kehilangan penghasilan, kerusakan properti milik penyewa, atau biaya akomodasi sementara, kecuali kerugian itu terbukti disebabkan kelalaian langsung dalam pengerjaan yang kami lakukan.</p>

            <h2>6. Perubahan Isi Situs</h2>
            <p>Kami berhak memperbarui, memperbaiki, atau menghapus konten kapan pun tanpa pemberitahuan lebih dulu. Artikel yang sudah terbit bisa diubah bila ditemukan penjelasan yang kurang tepat.</p>

            <h2>7. Catatan Keselamatan</h2>
            <p>Septic tank menghasilkan gas metana dan hidrogen sulfida yang berbahaya bila terhirup dalam ruang tertutup. Jangan pernah masuk ke dalam bak septic tank atau membuka tutupnya tanpa ventilasi memadai. Pekerjaan yang melibatkan pembukaan tangki sebaiknya dilakukan tenaga yang dilengkapi peralatan keselamatan.</p>

            <h2>8. Hubungi Kami</h2>
            <p>Bila menemukan informasi yang keliru di situs ini, atau ingin menanyakan isi disclaimer ini, hubungi <a href="https://wa.me/<?php echo $nomor_wa_link; ?>" target="_blank" rel="noopener"><?php echo $nomor_wa_display; ?></a> atau gunakan halaman <a href="/kontak">Kontak</a>.</p>

        </div>
    </div>
</section>
<?php require_once __DIR__ . '/../footer.php'; ?>
