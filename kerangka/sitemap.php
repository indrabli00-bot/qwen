<?php
require __DIR__ . '/inc/functions.php';
header('Content-Type: application/xml; charset=UTF-8');
$base = rtrim(cfg('base_url'), '/');
$urls = [
    ['/', null], ['/blog', null], ['/tentang', null], ['/kontak', null], ['/kebijakan-privasi', null],
];
foreach (all_articles() as $a) { $urls[] = ['/blog/' . $a['slug'], $a['date'] ?? null]; }
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
foreach ($urls as $u) {
    echo "  <url><loc>" . e($base . $u[0]) . "</loc>";
    if ($u[1]) { echo "<lastmod>" . e(date('Y-m-d', strtotime($u[1]))) . "</lastmod>"; }
    echo "</url>\n";
}
echo '</urlset>';
