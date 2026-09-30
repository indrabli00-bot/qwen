<?php
require __DIR__ . '/inc/functions.php';
$page_title = 'Kontak';
$page_desc  = 'Hubungi Sedot WC Medan 24 jam via telepon atau WhatsApp. Survey gratis untuk wilayah Medan Sunggal dan sekitarnya.';
$page_path  = '/kontak';
include __DIR__ . '/inc/header.php';
$q = rawurlencode(cfg('address'));
?>
<main class="page">
  <div class="container narrow">
    <h1>Kontak</h1>
    <p>Kami siap melayani setiap hari, 24 jam. Hubungi kami untuk survey gratis dan estimasi biaya.</p>
    <ul>
      <li><strong>Telepon / WhatsApp:</strong> <a href="tel:<?= e(cfg('phone_intl')) ?>"><?= e(cfg('phone')) ?></a></li>
      <li><strong>WhatsApp:</strong> <a href="https://wa.me/<?= e(cfg('wa')) ?>" target="_blank" rel="noopener">Chat sekarang</a></li>
      <li><strong>Email:</strong> <a href="mailto:<?= e(cfg('email')) ?>"><?= e(cfg('email')) ?></a></li>
      <li><strong>Alamat:</strong> <?= e(cfg('address')) ?></li>
      <li><strong>Jam operasional:</strong> Buka 24 jam setiap hari</li>
    </ul>
    <p>Untuk permintaan lewat formulir, gunakan <a href="/#kontak">formulir di beranda</a>.</p>
    <div class="map-wrap">
      <iframe src="https://maps.google.com/maps?q=<?= $q ?>&t=&z=15&ie=UTF8&iwloc=&output=embed" loading="lazy" title="Lokasi Sedot WC Medan" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</main>
<?php include __DIR__ . '/inc/footer.php'; ?>
