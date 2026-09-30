<?php
require __DIR__ . '/inc/functions.php';
$page_title = 'Kebijakan Privasi';
$page_desc  = 'Kebijakan privasi Sedot WC Medan: data yang kami kumpulkan, penggunaan cookie, dan periklanan pihak ketiga seperti Google AdSense.';
$page_path  = '/kebijakan-privasi';
include __DIR__ . '/inc/header.php';
?>
<main class="page">
  <div class="container narrow">
    <h1>Kebijakan Privasi</h1>
    <p class="meta">Terakhir diperbarui: <?= e(cfg('updated_privacy')) ?></p>
    <p>Kebijakan ini menjelaskan bagaimana <?= e(cfg('site_name')) ?> (<?= e(cfg('base_url')) ?>) mengumpulkan, menggunakan, dan melindungi informasi pengunjung situs ini.</p>

    <h2>Informasi yang Kami Kumpulkan</h2>
    <p>Saat Anda mengunjungi situs, server kami dapat mencatat data teknis standar seperti alamat IP, jenis browser, halaman yang dibuka, dan waktu kunjungan. Data ini dipakai untuk menjaga keamanan dan memperbaiki situs.</p>
    <p>Jika Anda mengisi formulir permintaan layanan, nama, nomor telepon, jenis layanan, dan pesan Anda akan diteruskan melalui WhatsApp ke nomor kami agar dapat kami tindak lanjuti. Situs ini tidak menyimpan isi formulir tersebut di server.</p>

    <h2>Penggunaan Data</h2>
    <p>Informasi yang Anda berikan kami gunakan hanya untuk menanggapi permintaan layanan, memberikan estimasi biaya, dan menghubungi Anda terkait pekerjaan. Kami tidak menjual data pribadi Anda kepada pihak lain.</p>

    <h2>Cookie</h2>
    <p>Cookie adalah berkas kecil yang disimpan di perangkat Anda. Situs ini dan mitra pihak ketiga dapat menggunakan cookie untuk mengingat preferensi, menganalisis kunjungan, dan menampilkan iklan. Anda dapat menonaktifkan atau menghapus cookie melalui pengaturan browser, meskipun sebagian fitur situs mungkin tidak berfungsi optimal.</p>

    <h2>Iklan Pihak Ketiga (Google AdSense)</h2>
    <p>Kami dapat menggunakan Google AdSense untuk menampilkan iklan. Google dan mitranya, sebagai vendor pihak ketiga, menggunakan cookie untuk menayangkan iklan berdasarkan kunjungan Anda ke situs ini dan situs lain di internet. Penggunaan cookie iklan memungkinkan Google dan mitranya menayangkan iklan yang relevan bagi Anda.</p>
    <p>Anda dapat memilih untuk tidak menerima iklan yang dipersonalisasi melalui <a href="https://adssettings.google.com" target="_blank" rel="noopener">Pengaturan Iklan Google</a>. Informasi lebih lanjut tentang bagaimana Google menggunakan data dari situs mitra tersedia di <a href="https://policies.google.com/technologies/partner-sites" target="_blank" rel="noopener">kebijakan Google</a>.</p>

    <h2>Tautan ke Situs Lain</h2>
    <p>Situs ini dapat memuat tautan ke situs lain, seperti WhatsApp dan Google Maps. Kami tidak bertanggung jawab atas praktik privasi situs tersebut, dan kami menyarankan Anda membaca kebijakan privasi masing-masing.</p>

    <h2>Keamanan</h2>
    <p>Kami berupaya menjaga keamanan informasi, termasuk menyediakan situs melalui koneksi HTTPS. Namun tidak ada metode transmisi data di internet yang sepenuhnya bebas risiko.</p>

    <h2>Perubahan Kebijakan</h2>
    <p>Kebijakan ini dapat diperbarui sewaktu-waktu. Perubahan akan ditampilkan di halaman ini beserta tanggal pembaruan terbaru.</p>

    <h2>Hubungi Kami</h2>
    <p>Pertanyaan tentang kebijakan ini dapat disampaikan melalui <a href="mailto:<?= e(cfg('email')) ?>"><?= e(cfg('email')) ?></a> atau WhatsApp <a href="tel:<?= e(cfg('phone_intl')) ?>"><?= e(cfg('phone')) ?></a>.</p>
  </div>
</main>
<?php include __DIR__ . '/inc/footer.php'; ?>
