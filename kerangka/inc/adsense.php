<?php
// Kode AdSense dipasang sekali di sini. Kosongkan 'adsense_client' di config.php untuk menonaktifkan.
$__client = cfg('adsense_client');
if ($__client): ?>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=<?= e($__client) ?>" crossorigin="anonymous"></script>
<?php endif; ?>
