<?php
require_once __DIR__ . '/functions.php';
$page_title = $page_title ?? cfg('site_name');
$page_desc  = $page_desc  ?? '';
$page_path  = $page_path  ?? '/';
$page_type  = $page_type  ?? 'website';
$page_schema= $page_schema?? '';
$noindex    = $noindex    ?? false;
$full_title = ($page_title === cfg('site_name')) ? $page_title : $page_title . ' | ' . cfg('site_name');
$canonical  = rtrim(cfg('base_url'), '/') . $page_path;
?><!DOCTYPE html>
<html lang="id" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="theme-color" content="#0a1628">
    <title><?= e($full_title) ?></title>
    <meta name="description" content="<?= e($page_desc) ?>">
    <meta name="robots" content="<?= $noindex ? 'noindex, follow' : 'index, follow, max-image-preview:large' ?>">
    <link rel="canonical" href="<?= e($canonical) ?>">
    <meta property="og:type" content="<?= e($page_type) ?>">
    <meta property="og:locale" content="id_ID">
    <meta property="og:site_name" content="<?= e(cfg('site_name')) ?>">
    <meta property="og:title" content="<?= e($full_title) ?>">
    <meta property="og:description" content="<?= e($page_desc) ?>">
    <meta property="og:url" content="<?= e($canonical) ?>">
    <meta property="og:image" content="<?= e(cfg('base_url')) ?>/assets/logo.png">
    <link rel="manifest" href="/assets/site.webmanifest">
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="/blog.css">
<?php if ($page_schema): ?>
    <script type="application/ld+json"><?= $page_schema ?></script>
<?php endif; ?>
<?php include __DIR__ . '/adsense.php'; ?>
</head>
<body>
<div class="topbar">📍 Melayani Medan Sunggal &amp; sekitarnya &nbsp;•&nbsp; <strong>Buka 24 Jam</strong> &nbsp;•&nbsp; Survey Gratis</div>
<header>
    <div class="container">
        <nav>
            <a href="/" class="logo">
                <img src="/assets/logo.png" alt="Logo Sedot WC Medan">
                Sedot WC Medan
            </a>
            <ul class="nav-links" id="navLinks">
                <li><a href="/#layanan">Layanan</a></li>
                <li><a href="/#kenapa-kami">Kenapa Kami</a></li>
                <li><a href="/blog">Blog</a></li>
                <li><a href="/tentang">Tentang</a></li>
                <li><a href="/kontak">Kontak</a></li>
                <li><a href="tel:<?= e(cfg('phone_intl')) ?>" class="cta-btn">📞 Hubungi Sekarang</a></li>
            </ul>
            <button class="mobile-menu" onclick="toggleMenu()" aria-label="Menu">☰</button>
        </nav>
    </div>
</header>
