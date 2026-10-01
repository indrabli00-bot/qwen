<?php
/**
 * pages/about.php — About Us (halaman wajib, pasal 6 blueprint)
 * URL bersih: /tentang  (lihat .htaccess aturan 2)
 */
$page_title     = 'Tentang Kami - Sedot WC Medan 24 Jam | Medansedotwc.my.id';
$meta_desc      = 'Kenali Sedot WC Medan: layanan sedot tinja & perawatan septic tank 24 jam untuk rumah, ruko, dan kos di Medan Sunggal. Survey gratis, tim terlatih.';
$canonical_path = '/tentang';

$schema_jsonld = '{
  "@context": "https://schema.org",
  "@type": "AboutPage",
  "name": "Tentang Kami - Sedot WC Medan",
  "url": "https://medansedotwc.my.id/tentang",
  "description": "Profil layanan Sedot WC Medan (medansedotwc.my.id), jasa sedot tinja dan perawatan septic tank 24 jam di Medan Sunggal dan sekitarnya.",
  "mainEntity": {
    "@type": "LocalBusiness",
    "name": "Sedot WC Medan",
    "url": "https://medansedotwc.my.id/",
    "telephone": "+' . $nomor_wa_link . '",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Gg. Sejahtera, Sunggal",
      "addressLocality": "Medan",
      "addressRegion": "Sumatera Utara",
      "postalCode": "20128",
      "addressCountry": "ID"
    }
  }
}';

require_once __DIR__ . '/../header.php';
?>
<section class="page-wrap">
    <div class="container">
        <div class="static-shell">

            <h1>Tentang Sedot WC Medan</h1>

            <p><strong>Sedot WC Medan</strong> adalah layanan sedot tinja dan perawatan septic tank yang beroperasi di <strong>Medan Sunggal dan sekitarnya</strong>, dapat dihubungi melalui situs <strong>medansedotwc.my.id</strong>. Kami menangani masalah WC mampet, septic tank penuh, bau tidak sedap, dan saluran tersumbat pada rumah tinggal, ruko, kos, kantor, serta tempat usaha lain. Layanan kami buka <strong>24 jam</strong>, termasuk malam hari, akhir pekan, dan hari libur.</p>

            <h2>Layanan yang Kami Kerjakan</h2>
            <p>Fokus pekerjaan kami sederhana dan jelas — semua yang berkaitan dengan pembuangan tinja dan saluran limbah rumah tangga:</p>
            <ul>
                <li><strong>Sedot septic tank penuh</strong> untuk rumah, kos, ruko, dan kantor, dengan truk tangki berkapasitas sesuai kebutuhan lokasi.</li>
                <li><strong>Penanganan WC mampet</strong> akibat tumpukan tinja, kertas berlebih, atau benda yang tercecer ke dalam kloset.</li>
                <li><strong>Pengurasan bak kontrol dan resapan</strong> yang meluap atau berhenti menyerap air.</li>
                <li><strong>Pembersihan saluran tersumbat</strong> pada got, pipa pembuangan kamar mandi, dan dapur.</li>
                <li><strong>Perawatan berkala septic tank</strong> agar tidak cepat penuh dan resapan tidak rusak permanen.</li>
                <li><strong>Layanan darurat 24 jam</strong> untuk kondisi mendesak seperti tinja yang sudah meluap ke permukaan.</li>
            </ul>

            <h2>Area Layanan di Medan</h2>
            <p>Basis operasional kami berada di <strong>Medan Sunggal</strong>. Dari sana, jangkauan layanan mencakup wilayah Medan dan sekitarnya, termasuk <strong>Medan Helvetia, Medan Johor, Medan Amplas, Medan Area, Medan Kota, Marelan, Labuhan Deli, hingga sebagian Deli Serdang</strong> seperti Lubuk Pakam dan Tanjung Morawa. Jika lokasi Anda berada di luar daftar tersebut, tetap hubungi kami melalui WhatsApp — kami akan informasikan apakah bisa dijangkau sebelum ada biaya apa pun.</p>

            <h2>Alur Kerja Kami</h2>
            <p>Setiap permintaan layanan mengikuti empat langkah yang sama, tanpa tahap tersembunyi:</p>
            <ol>
                <li><strong>Pelaporan.</strong> Anda mengirim keluhan lewat WhatsApp atau telepon: gejala, alamat, dan patokan lokasi.</li>
                <li><strong>Survey GRATIS.</strong> Kami menilai kondisi lapangan dan volume kerja. Tidak ada biaya survey, jadi Anda bisa memutuskan tanpa risiko.</li>
                <li><strong>Pengerjaan.</strong> Tim datang dengan peralatan lengkap. Pekerjaan dikerjakan sampai aliran kembali normal.</li>
                <li><strong>Pengecekan akhir.</strong> Kami uji kembali pembuangan bersama Anda sebelum pekerjaan dianggap selesai, lalu area kerja dibersihkan.</li>
            </ol>

            <h2>Komitmen Kami</h2>
            <ul>
                <li><strong>Harga disepakati di awal.</strong> Angka disampaikan setelah survey dan tidak berubah di tengah pekerjaan.</li>
                <li><strong>Jujur soal kondisi.</strong> Jika masalah Anda ternyata bukan karena septic tank penuh, kami sampaikan apa adanya beserta penyebab yang sebenarnya.</li>
                <li><strong>Respon cepat.</strong> Untuk keadaan darurat, prioritas penjadwalan diberikan pada laporan yang paling berisiko membuat limbah meluap.</li>
                <li><strong>Merapikan kembali lokasi kerja.</strong> Bekas pengerjaan dibersihkan sehingga Anda tidak perlu membersihkan sisa pekerjaan kami.</li>
            </ul>

            <h2>Kenapa Kami Menulis Artikel di Blog</h2>
            <p>Sebagian besar panggilan yang kami terima sebenarnya bisa dicegah: septic tank yang disedot tepat waktu, grease trap yang dibersihkan rutin, dan kloset yang tidak dipakai membuang tisu basah. Karena itu kami menulis <a href="/blog">panduan perawatan di blog medansedotwc.my.id</a> — berisi tips yang bisa Anda praktikkan sendiri sebelum memutuskan memanggil teknisi. Ketika kami menyarankan penggunaan layanan, selalu ada alasan teknis yang kami jelaskan lebih dulu.</p>

            <div class="article-cta">
                <h2>Butuh Bantuan Sekarang?</h2>
                <p>Hubungi kami untuk konsultasi awal. Survey lokasi Medan Sunggal dan sekitarnya GRATIS, tanpa kewajiban melanjutkan pekerjaan.</p>
                <div class="btn-row">
                    <a href="https://wa.me/<?php echo $nomor_wa_link; ?>?text=Halo%20Sedot%20WC%20Medan%2C%20saya%20ingin%20konsultasi" class="cta-btn" target="_blank" rel="noopener">💬 WhatsApp <?php echo $nomor_wa_display; ?></a>
                    <a href="tel:+<?php echo $nomor_wa_link; ?>" class="cta-btn yellow">📞 Telepon</a>
                </div>
            </div>

        </div>
    </div>
</section>
<?php require_once __DIR__ . '/../footer.php'; ?>
