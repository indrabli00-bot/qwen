<?php
require __DIR__ . '/inc/functions.php';
$slug = $_GET['slug'] ?? '';
if (!preg_match('/^[a-z0-9-]+$/', $slug) || $slug[0] === '_') { render_404(); }
$file = __DIR__ . '/content/artikel/' . $slug . '.md';
if (!is_file($file)) { render_404(); }
$a = parse_article($file);
if (!$a || empty($a['title'])) { render_404(); }

$page_title = $a['title'];
$page_desc  = $a['description'] ?? '';
$page_path  = '/blog/' . $slug;
$page_type  = 'article';
$date_iso   = !empty($a['date']) ? date('c', strtotime($a['date'])) : '';
$page_schema = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Article',
    'headline' => $a['title'],
    'description' => $page_desc,
    'datePublished' => $date_iso,
    'dateModified' => $date_iso,
    'mainEntityOfPage' => cfg('base_url') . $page_path,
    'author' => ['@type' => 'Organization', 'name' => cfg('site_name')],
    'publisher' => ['@type' => 'Organization', 'name' => cfg('site_name'),
        'logo' => ['@type' => 'ImageObject', 'url' => cfg('base_url') . '/assets/logo.png']],
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG);
include __DIR__ . '/inc/header.php';
?>
<main class="page">
  <div class="container narrow">
    <nav class="breadcrumb" aria-label="Breadcrumb"><a href="/">Beranda</a> › <a href="/blog">Blog</a> › <?= e($a['title']) ?></nav>
    <article class="article">
      <h1><?= e($a['title']) ?></h1>
      <p class="meta">Diterbitkan <?= e(tgl($a['date'] ?? '')) ?> • <?= e(cfg('site_name')) ?></p>
      <?= md_to_html($a['body']) ?>
      <div class="cta-box">
        <strong>Butuh bantuan sedot WC atau septic tank?</strong>
        <p>Survey gratis, layanan 24 jam untuk wilayah Medan Sunggal dan sekitarnya.</p>
        <a class="cta-btn yellow" href="tel:<?= e(cfg('phone_intl')) ?>">📞 <?= e(cfg('phone')) ?></a>
        <a class="cta-btn" href="https://wa.me/<?= e(cfg('wa')) ?>" target="_blank" rel="noopener">💬 Chat WhatsApp</a>
      </div>
    </article>
  </div>
</main>
<?php include __DIR__ . '/inc/footer.php'; ?>
