<?php
function cfg($key) {
    static $c = null;
    if ($c === null) { $c = require __DIR__ . '/config.php'; }
    return $c[$key] ?? '';
}

function e($s) { return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }

function md_inline($s) {
    $s = e($s);
    $s = preg_replace('/\*\*(.+?)\*\*/s', '<strong>$1</strong>', $s);
    $s = preg_replace('/(?<!\*)\*(?!\*)(.+?)(?<!\*)\*(?!\*)/s', '<em>$1</em>', $s);
    $s = preg_replace_callback('/\[([^\]]+)\]\(([^)\s]+)\)/', function ($m) {
        $u = $m[2];
        if (!preg_match('~^(https?://|/|#|mailto:|tel:)~i', $u)) { return $m[0]; }
        $ext = preg_match('~^https?://~i', $u) && stripos($u, 'medansedotwc.my.id') === false;
        return '<a href="' . $u . '"' . ($ext ? ' target="_blank" rel="noopener"' : '') . '>' . $m[1] . '</a>';
    }, $s);
    return $s;
}

// Markdown mini: ## / ### judul, paragraf, daftar - dan 1., **tebal**, *miring*, [teks](url)
function md_to_html($md) {
    $lines = preg_split('/\R/', trim($md));
    $html = ''; $para = []; $list = null;
    $flushP = function () use (&$html, &$para) {
        if ($para) { $html .= '<p>' . md_inline(implode(' ', $para)) . "</p>\n"; $para = []; }
    };
    $flushL = function () use (&$html, &$list) {
        if ($list) {
            $items = '';
            foreach ($list['i'] as $i) { $items .= '<li>' . md_inline($i) . '</li>'; }
            $html .= '<' . $list['t'] . '>' . $items . '</' . $list['t'] . ">\n";
            $list = null;
        }
    };
    foreach ($lines as $ln) {
        $t = rtrim($ln);
        if ($t === '') { $flushP(); $flushL(); continue; }
        if (preg_match('/^(#{2,3})\s+(.+)$/', $t, $m)) {
            $flushP(); $flushL(); $n = strlen($m[1]);
            $html .= "<h$n>" . md_inline($m[2]) . "</h$n>\n"; continue;
        }
        if (preg_match('/^[-*]\s+(.+)$/', $t, $m)) {
            $flushP();
            if (!$list || $list['t'] !== 'ul') { $flushL(); $list = ['t' => 'ul', 'i' => []]; }
            $list['i'][] = $m[1]; continue;
        }
        if (preg_match('/^\d+[.)]\s+(.+)$/', $t, $m)) {
            $flushP();
            if (!$list || $list['t'] !== 'ol') { $flushL(); $list = ['t' => 'ol', 'i' => []]; }
            $list['i'][] = $m[1]; continue;
        }
        $flushL(); $para[] = trim($t);
    }
    $flushP(); $flushL();
    return $html;
}

function parse_article($file) {
    $raw = file_get_contents($file);
    if (!preg_match('/^---\R(.*?)\R---\R(.*)$/s', $raw, $m)) { return null; }
    $meta = [];
    foreach (preg_split('/\R/', $m[1]) as $l) {
        if (strpos($l, ':') !== false) { list($k, $v) = explode(':', $l, 2); $meta[trim($k)] = trim($v); }
    }
    $meta['slug'] = basename($file, '.md');
    $meta['body'] = $m[2];
    return $meta;
}

function all_articles() {
    $out = [];
    foreach (glob(__DIR__ . '/../content/artikel/*.md') as $f) {
        if (strpos(basename($f), '_') === 0) { continue; }   // file berawalan _ = draf/template
        $a = parse_article($f);
        if ($a && !empty($a['title'])) { $out[] = $a; }
    }
    usort($out, function ($a, $b) { return strcmp($b['date'] ?? '', $a['date'] ?? ''); });
    return $out;
}

function tgl($d) {
    $bln = ['','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];
    $t = strtotime($d); if (!$t) { return ''; }
    return date('j', $t) . ' ' . $bln[(int)date('n', $t)] . ' ' . date('Y', $t);
}

function render_404() {
    http_response_code(404);
    $page_title = 'Halaman Tidak Ditemukan';
    $page_desc  = 'Halaman yang Anda cari tidak ditemukan.';
    $page_path  = '/404';
    $noindex    = true;
    include __DIR__ . '/header.php';
    echo '<main class="page"><div class="container narrow"><h1>404 - Halaman tidak ditemukan</h1>'
       . '<p>Maaf, halaman yang Anda cari tidak tersedia. Silakan kembali ke <a href="/">beranda</a> atau lihat <a href="/blog">artikel kami</a>.</p></div></main>';
    include __DIR__ . '/footer.php';
    exit;
}
