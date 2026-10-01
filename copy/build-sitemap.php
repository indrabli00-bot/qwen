<?php
/**
 * build-sitemap.php — generator sitemap.xml (pasal 7 blueprint)
 *
 * Cara pakai (dari shell, di folder root situs):
 *     php build-sitemap.php
 * Hasil: menimpa /workspace/copy/sitemap.xml dengan daftar URL final bersih.
 * Sumber data artikel: artikel/articles-data.php (registry tunggal).
 *
 * Jalankan ulang setiap kali menambah artikel baru.
 */

$root = __DIR__;
$base = 'https://medansedotwc.my.id';
$articles = require $root . '/artikel/articles-data.php';

// Halaman statis: path => [lastmod, changefreq, priority]
$static_pages = array(
    '/'                 => array('2026-10-01', 'monthly', '1.0'),
    '/blog'             => array('2026-10-01', 'weekly',  '0.9'),
    '/tentang'          => array('2026-10-01', 'yearly',  '0.7'),
    '/kontak'           => array('2026-10-01', 'monthly', '0.8'),
    '/kebijakan-privasi'=> array('2026-10-01', 'yearly',  '0.4'),
    '/disclaimer'       => array('2026-10-01', 'yearly',  '0.4'),
);

$out  = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
$out .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

foreach ($static_pages as $path => $d) {
    $out .= "  <url><loc>{$base}{$path}</loc><lastmod>{$d[0]}</lastmod><changefreq>{$d[1]}</changefreq><priority>{$d[2]}</priority></url>\n";
}

// Artikel, urut tanggal naik
usort($articles, function ($a, $b) { return strcmp($a['tanggal'], $b['tanggal']); });
foreach ($articles as $art) {
    $loc = $base . '/blog/' . $art['slug'];
    $out .= "  <url><loc>{$loc}</loc><lastmod>{$art['tanggal']}</lastmod><changefreq>yearly</changefreq><priority>0.7</priority></url>\n";
}

$out .= "</urlset>\n";

file_put_contents($root . '/sitemap.xml', $out);
echo "sitemap.xml ditulis: " . (count($static_pages) + count($articles)) . " URL (" . count($articles) . " artikel).\n";
