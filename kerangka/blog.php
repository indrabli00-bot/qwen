<?php
require __DIR__ . '/inc/functions.php';
$page_title = 'Blog & Tips Septic Tank dan WC';
$page_desc  = 'Artikel dan tips seputar septic tank, WC mampet, dan perawatan saluran pembuangan untuk rumah dan usaha di Medan.';
$page_path  = '/blog';
$articles   = all_articles();
include __DIR__ . '/inc/header.php';
?>
<main class="page">
  <div class="container">
    <div class="section-title">
      <h1>Blog &amp; Tips</h1>
      <p>Panduan praktis seputar septic tank, WC mampet, dan perawatan saluran pembuangan.</p>
    </div>
    <?php if (!$articles): ?>
      <p>Belum ada artikel.</p>
    <?php else: ?>
    <div class="article-grid">
      <?php foreach ($articles as $a): ?>
      <article class="article-card">
        <h2><a href="/blog/<?= e($a['slug']) ?>"><?= e($a['title']) ?></a></h2>
        <p class="meta"><?= e(tgl($a['date'] ?? '')) ?></p>
        <p><?= e($a['description'] ?? '') ?></p>
        <a class="readmore" href="/blog/<?= e($a['slug']) ?>">Baca selengkapnya →</a>
      </article>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>
  </div>
</main>
<?php include __DIR__ . '/inc/footer.php'; ?>
