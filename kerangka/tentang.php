<?php
require __DIR__ . '/inc/functions.php';
$page_title = 'Tentang Kami';
$page_desc  = 'Kenal lebih dekat dengan Sedot WC Medan, jasa sedot WC dan septic tank 24 jam untuk Medan Sunggal dan sekitarnya.';
$page_path  = '/tentang';
include __DIR__ . '/inc/header.php';
?>
<main class="page">
  <div class="container narrow">
    <h1>Tentang Sedot WC Medan</h1>
    <p>Sedot WC Medan adalah penyedia jasa penyedotan WC dan septic tank untuk rumah tinggal, kos-kosan, ruko, restoran, kantor, dan lokasi proyek di Medan Sunggal dan sekitarnya. Kami melayani panggilan setiap hari, termasuk malam hari dan hari libur.</p>
    <h2>Layanan Kami</h2>
    <ul>
      <li>Sedot septic tank penuh</li>
      <li>Mengatasi WC dan saluran air yang mampet</li>
      <li>Layanan untuk rumah tinggal dan tempat usaha</li>
      <li>Layanan darurat 24 jam</li>
      <li>Perawatan berkala</li>
      <li>Pembuangan limbah di tempat yang semestinya</li>
    </ul>
    <h2>Cara Kami Bekerja</h2>
    <p>Setiap pekerjaan diawali survey lokasi gratis dan estimasi biaya yang dijelaskan di awal. Setelah Anda setuju, tim kami mengerjakan penyedotan dengan rapi hingga WC dan saluran kembali normal.</p>
    <h2>Tentang Blog Ini</h2>
    <p>Di <a href="/blog">blog</a> kami menulis panduan praktis tentang septic tank dan saluran pembuangan agar Anda bisa mengenali masalah lebih awal dan merawat instalasi dengan benar.</p>
    <h2>Hubungi Kami</h2>
    <p>Alamat: <?= e(cfg('address')) ?><br>
       Telepon/WhatsApp: <a href="tel:<?= e(cfg('phone_intl')) ?>"><?= e(cfg('phone')) ?></a></p>
  </div>
</main>
<?php include __DIR__ . '/inc/footer.php'; ?>
