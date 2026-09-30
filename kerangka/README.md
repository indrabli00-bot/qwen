# Kerangka PHP - medansedotwc.my.id

Paket ini adalah TAMBAHAN di atas situs yang sudah ada (bukan pengganti penuh).
Folder `assets/`, `style.css`, video, dan gambar TIDAK disertakan, jadi biarkan di server.

## Cara pasang (cPanel > File Manager > public_html)
1. Cadangkan dulu: index.html, script.js, dan .htaccess (jika ada).
2. Upload zip ini ke public_html lalu Extract (timpa file yang sama).
3. Hapus/ganti nama index.html menjadi index.html.bak (agar index.php yang dipakai).
   Cek juga: PHP aktif di MultiPHP Manager (PHP 7.4 atau lebih baru).
4. Jika sebelumnya sudah ada .htaccess di server, JANGAN timpa mentah-mentah:
   gabungkan isinya. Pertahankan blok "# php -- BEGIN cPanel-generated handler" bila ada.
5. Buka: / , /blog , /blog/tanda-septic-tank-penuh , /tentang , /kontak ,
   /kebijakan-privasi , /sitemap.xml , /robots.txt
6. Search Console: tambahkan properti, kirim https://medansedotwc.my.id/sitemap.xml

## Tambah artikel
Salin content/artikel/_template.md menjadi content/artikel/judul-artikel.md
(nama file = alamat URL, huruf kecil dan tanda hubung). Otomatis muncul di /blog dan sitemap.
File berawalan _ dianggap draf dan tidak tampil.

## Setelah daftar AdSense
- Isi 'adsense_client' di inc/config.php (mis. ca-pub-1234567890123456). Kode terpasang otomatis di semua halaman.
- Isi ads.txt sesuai baris dari AdSense.

## Ide 12 judul artikel berikutnya
1. Biaya dan faktor yang mempengaruhi harga sedot WC
2. Ukuran septic tank yang tepat untuk rumah tinggal
3. Perbedaan septic tank konvensional dan biofil
4. Cara merawat septic tank agar awet
5. Kenapa WC bau meski sudah dibersihkan
6. Saluran pembuangan kos-kosan: perawatan dan jadwal sedot
7. Bahan yang tidak boleh masuk septic tank
8. Cara mengetahui lokasi septic tank di rumah
9. Persiapan sebelum petugas sedot WC datang
10. Pencegahan air balik saat hujan deras
11. Septic tank untuk restoran dan usaha: hal yang perlu diperhatikan
12. Tanda pipa pembuangan bermasalah selain WC mampet
