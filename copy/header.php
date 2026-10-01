<?php
/* ============================================================
   header.php — include SATU KALI di setiap halaman
   Berisi: <head> lengkap, meta SEO dinamis, kode AdSense (1x),
           topbar + menu navigasi, lalu membuka <body>.
   Cara pakai (di awal file halaman):
     $page_title       = "Judul Halaman | Sedot WC Medan";
     $meta_desc        = "Deskripsi maks 155 karakter...";
     $canonical_path   = "/blog/nama-slug";      // default "/"
     $schema_jsonld    = '...';                  // opsional, JSON-LD khusus halaman
     require_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';
   Catatan: root relatif — jika situs dipasang di subfolder,
   ganti '/' menjadi '/subfolder/' pada $base_url.
   ============================================================ */

// ---------- Konfigurasi kontak (data nyata dari copy/index.html) ----------
$nomor_wa_display = '0822-6777-5464';                 // [NOMOR_WA]
$nomor_wa_link    = '6282267775464';
$alamat_medan     = 'Gg. Sejahtera, Sunggal, Kec. Medan Sunggal, Kota Medan, Sumatera Utara 20128'; // [ALAMAT_MEDAN]
$base_url         = 'https://medansedotwc.my.id';

// ---------- Nilai default (bisa dioverride halaman sebelum include) ----------
$page_title     = isset($page_title)     ? $page_title     : 'Sedot WC Medan 24 Jam | Survey Gratis, Cepat & Bersih';
$meta_desc      = isset($meta_desc)      ? $meta_desc      : 'Jasa sedot WC Medan Sunggal terpercaya 24 jam. Atasi WC mampet, penuh, bau & saluran tersumbat. Survey GRATIS, tenaga profesional.';
$canonical_path = isset($canonical_path) ? $canonical_path : '/';
$schema_jsonld  = isset($schema_jsonld)  ? $schema_jsonld  : '';
$is_root_page   = ($canonical_path === '/');

// ---------- Helper artikel: daftar pustaka tunggal (dipakai blog.php, sitemap generator, artikel) ----------
// Untuk menambah artikel baru: buat file /artikel/<slug>.php lalu tambahkan entri di sini.
$articles_file = __DIR__ . '/artikel/articles-data.php';
$articles_list = is_file($articles_file) ? require $articles_file : array();
?>
<!DOCTYPE html>
<html lang="id" dir="ltr">
<head>
    <!-- ===== Basic Meta ===== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="theme-color" content="#0a1628">
    <meta name="color-scheme" content="light">
    <meta name="format-detection" content="telephone=yes">

    <!-- ===== SEO Primary (dinamis per halaman) ===== -->
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($meta_desc); ?>">
    <meta name="keywords" content="sedot wc medan, sedot wc sunggal, sedot wc 24 jam, wc mampet medan, septic tank penuh, saluran tersumbat, jasa sedot wc, sedot wc murah medan, sedot wc terdekat">
    <meta name="author" content="Sedot WC Medan">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="googlebot" content="index, follow">
    <link rel="canonical" href="<?php echo $base_url . $canonical_path; ?>">

    <!-- ===== Geo / Local SEO ===== -->
    <meta name="geo.region" content="ID-SU">
    <meta name="geo.placename" content="Medan Sunggal, Sumatera Utara">
    <meta name="geo.position" content="3.6069;98.6465">
    <meta name="ICBM" content="3.6069, 98.6465">
    <meta name="coverage" content="Medan, Sunggal, Deli Serdang, Sumatera Utara">
    <meta name="distribution" content="local">
    <meta name="target" content="Medan, Sunggal, Medan Johor, Medan Amplas, Medan Area">

    <!-- ===== Open Graph (Facebook, WhatsApp, LinkedIn) ===== -->
    <meta property="og:type" content="<?php echo $is_root_page ? 'business.business' : 'article'; ?>">
    <meta property="og:locale" content="id_ID">
    <meta property="og:site_name" content="Sedot WC Medan">
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($meta_desc); ?>">
    <meta property="og:url" content="<?php echo $base_url . $canonical_path; ?>">
    <meta property="og:image" content="<?php echo $base_url; ?>/assets/hero-truck.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Truk Sedot WC Medan - Layanan 24 Jam">
    <meta property="business:contact_data:street_address" content="Gg. Sejahtera, Sunggal">
    <meta property="business:contact_data:locality" content="Medan">
    <meta property="business:contact_data:region" content="Sumatera Utara">
    <meta property="business:contact_data:postal_code" content="20128">
    <meta property="business:contact_data:country_name" content="Indonesia">
    <meta property="business:contact_data:phone_number" content="+<?php echo $nomor_wa_link; ?>">

    <!-- ===== Twitter Card ===== -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($meta_desc); ?>">
    <meta name="twitter:image" content="<?php echo $base_url; ?>/assets/hero-truck.jpg">

    <!-- ===== Favicon Lengkap ===== -->
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/apple-touch-icon.png">
    <link rel="shortcut icon" href="/assets/favicon.ico">
    <link rel="manifest" href="/assets/site.webmanifest">

    <!-- ===== Performance: Preconnect & DNS Prefetch ===== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="dns-prefetch" href="https://wa.me">
    <link rel="dns-prefetch" href="https://maps.google.com">
    <link rel="dns-prefetch" href="https://www.google.com">
    <link rel="preconnect" href="https://pagead2.googlesyndication.com" crossorigin>
    <link rel="dns-prefetch" href="https://pagead2.googlesyndication.com">

    <!-- ===== Preload Critical Assets ===== -->
    <link rel="preload" href="/assets/hero-truck.jpg" as="image" fetchpriority="high">
    <link rel="preload" href="/assets/logo.png" as="image" fetchpriority="high">
    <link rel="preload" href="/style.css" as="style">
    <link rel="preload" href="/script.js" as="script">

    <!-- ===== Stylesheet ===== -->
    <link rel="stylesheet" href="/style.css">
    <!-- article-style.css hanya menambah komponen halaman dalam (blog/artikel/halaman statis); beranda tidak terpengaruh -->
    <link rel="stylesheet" href="/article-style.css">

    <!-- ===== Critical CSS Inline (Above-the-Fold) ===== -->
    <style>
        /* Critical CSS untuk rendering cepat sebelum style.css dimuat */
        body{margin:0;font-family:'Segoe UI',Roboto,Helvetica,Arial,sans-serif;color:#1a1a1a;background:#fff;line-height:1.6;overflow-x:hidden}
        .topbar{background:#0a1628;color:rgba(255,255,255,0.85);font-size:.85rem;padding:7px 0;text-align:center}
        .topbar strong{color:#f5a623}
        header.site-header{background:linear-gradient(135deg,#0a1628 0%,#0f2a52 100%);color:#fff;padding:18px 0;position:sticky;top:0;z-index:1000;box-shadow:0 4px 20px rgba(0,0,0,.25)}
        .container{width:92%;max-width:1200px;margin:0 auto}
        nav{display:flex;justify-content:space-between;align-items:center}
        .logo{font-size:1.3rem;font-weight:900;color:#fff;text-decoration:none;display:flex;align-items:center;gap:12px}
        .logo img{height:48px;width:48px;border-radius:50%;background:#fff;padding:2px;object-fit:cover}
        .cta-btn{background:#00a8cc;color:#fff;padding:14px 28px;border-radius:10px;font-weight:700;text-decoration:none;display:inline-block;border:none;cursor:pointer;font-size:1rem;transition:transform .2s,box-shadow .2s}
        .cta-btn:hover{transform:translateY(-2px);box-shadow:0 8px 25px rgba(0,168,204,.35)}
        .cta-btn.yellow{background:#f5a623;color:#0a1628}
        @media(max-width:900px){.nav-links{display:none}}
    </style>

    <?php if (!empty($schema_jsonld)): ?>
    <!-- ===== Schema.org Structured Data khusus halaman ini ===== -->
    <script type="application/ld+json">
    <?php echo $schema_jsonld; ?>
    </script>
    <?php endif; ?>

    <?php if ($is_root_page): ?>
    <!-- ===== Schema.org LocalBusiness (hanya beranda) ===== -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "@id": "https://medansedotwc.my.id/#business",
      "name": "Sedot WC Medan",
      "alternateName": "Sedot WC Medan Sunggal",
      "description": "Jasa sedot WC profesional 24 jam di Medan Sunggal dan sekitarnya. Melayani WC mampet, septic tank penuh, bau tidak sedap, dan saluran tersumbat.",
      "url": "https://medansedotwc.my.id/",
      "telephone": "+<?php echo $nomor_wa_link; ?>",
      "email": "info@medansedotwc.my.id",
      "priceRange": "Rp",
      "image": "https://medansedotwc.my.id/assets/hero-truck.jpg",
      "logo": "https://medansedotwc.my.id/assets/logo.png",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Gg. Sejahtera, Sunggal",
        "addressLocality": "Medan",
        "addressRegion": "Sumatera Utara",
        "postalCode": "20128",
        "addressCountry": "ID"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 3.6069,
        "longitude": 98.6465
      },
      "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
        "opens": "00:00",
        "closes": "23:59"
      },
      "areaServed": [
        {"@type": "City", "name": "Medan"},
        {"@type": "City", "name": "Sunggal"},
        {"@type": "City", "name": "Deli Serdang"}
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Layanan Sedot WC",
        "itemListElement": [
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Sedot Septic Tank Penuh"}},
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Atasi WC Mampet"}},
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Atasi Saluran Tersumbat"}},
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Layanan Darurat 24 Jam"}},
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Survey Gratis"}}
        ]
      },
      "sameAs": [
        "https://wa.me/<?php echo $nomor_wa_link; ?>"
      ]
    }
    </script>
    <?php endif; ?>

    <!-- ============================================================
         GOOGLE ADSENSE — ditempel SATU KALI di sini (pasal 7 blueprint).
         Ganti [PUBLISHER_ID_ADSENSE] dengan ID asli format ca-pub-XXXXXXXX.
         ============================================================ -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=[PUBLISHER_ID_ADSENSE]" crossorigin="anonymous"></script>
    <!-- Meta consent untuk CMP Google UMP (opsional, direkomendasikan AdSense) -->
    <meta name="google-adsense-account" content="[PUBLISHER_ID_ADSENSE]">
</head>
<body>

<!-- Top Bar -->
<div class="topbar">📍 Melayani Medan Sunggal &amp; sekitarnya &nbsp;•&nbsp; <strong>Buka 24 Jam</strong> &nbsp;•&nbsp; Survey Gratis</div>

<!-- Header -->
<header class="site-header">
    <div class="container">
        <nav>
            <a href="/" class="logo">
                <img src="/assets/logo.png" alt="Logo Sedot WC Medan">
                Sedot WC Medan
            </a>
            <ul class="nav-links" id="navLinks">
                <li><a href="/#services">Layanan</a></li>
                <li><a href="/blog">Blog</a></li>
                <li><a href="/tentang">Tentang</a></li>
                <li><a href="/kontak">Kontak</a></li>
                <li><a href="tel:+<?php echo $nomor_wa_link; ?>" class="cta-btn">📞 Hubungi Sekarang</a></li>
            </ul>
            <button class="mobile-menu" onclick="toggleMenu()" aria-label="Menu">☰</button>
        </nav>
    </div>
</header>
