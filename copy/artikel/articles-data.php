<?php
/**
 * artikel/articles-data.php — SATU-SATUNYA daftar artikel (registry).
 *
 * Dipakai oleh: blog.php, sitemap.xml (generator), dan setiap file artikel
 * (untuk breadcrumb & artikel terkait).
 *
 * CARA MENAMBAH ARTIKEL BARU:
 *   1. Buat file /artikel/<slug>.php (salin pola dari artikel yang sudah ada).
 *   2. Tambahkan satu entri di array di bawah ini.
 * Tidak perlu menyentuh blog.php maupun sitemap.
 *
 * Field wajib: slug, judul, meta_desc (<=155 karakter), tanggal, kategori, excerpt.
 */

$articles = array(

    array(
        'slug'      => 'penyebab-wc-mampet',
        'judul'     => '5 Penyebab Utama WC Mampet dan Cara Mengatasinya',
        'meta_desc' => 'WC mampet biasanya dipicu lima hal: tisu berlebih, benda jatuh, septic tank penuh, pipa salah kemiringan, dan resapan jenuh. Ini cara mengatasinya.',
        'tanggal'   => '2026-09-15',
        'kategori'  => 'Troubleshooting',
        'excerpt'   => 'Air kloset naik dan tidak mau turun hampir selalu punya penyebab fisik. Kenali lima pemicu paling sering di rumah-rumah Medan beserta langkah pertolongan pertama.',
    ),

    array(
        'slug'      => 'cara-merawat-septic-tank',
        'judul'     => 'Tips Merawat Septic Tank agar Tidak Cepat Penuh',
        'meta_desc' => 'Septic tank awet dan tidak cepat penuh jika Volumenya tepat, pemakaiannya dijaga, dan disedot rutin. Panduan perawatan lengkap untuk rumah di Medan.',
        'tanggal'   => '2026-09-18',
        'kategori'  => 'Perawatan',
        'excerpt'   => 'Umur septic tank ditentukan tiga hal: kapasitas tangki, apa yang masuk ke dalamnya, dan seberapa rutin lumpur keraknya dibuang. Ini rinciannya.',
    ),

    array(
        'slug'      => 'bedanya-wc-penuh-dan-saluran-tersumbat',
        'judul'     => 'Cara Membedakan WC Penuh dan Saluran Tersumbat',
        'meta_desc' => 'WC penuh dan saluran tersumbat gejalanya mirip tapi penanganannya beda. Ini ciri khas masing-masing plus tes sederhana untuk memastikan.',
        'tanggal'   => '2026-09-21',
        'kategori'  => 'Troubleshooting',
        'excerpt'   => 'Salah diagnosis berarti membayar pekerjaan yang tidak menyelesaikan masalah. Empat gejala berikut membedakan tangki penuh dari sumbatan di pipa.',
    ),

    array(
        'slug'      => 'frekuensi-sedot-wc',
        'judul'     => 'Berapa Sering WC Harus Disedot? Panduan per Jenis Bangunan',
        'meta_desc' => 'Frekuensi ideal sedot WC bergantung jumlah penghuni dan volume tangki. Panduan jadwal untuk rumah, kos, ruko, kantor, dan masjid di Medan.',
        'tanggal'   => '2026-09-24',
        'kategori'  => 'Perawatan',
        'excerpt'   => 'Angka "dua tahun sekali" yang sering beredar bukan aturan baku. Jadwal yang benar dihitung dari volume tangki dibagi beban pemakaian harian.',
    ),

    array(
        'slug'      => 'harga-sedot-wc-medan',
        'judul'     => 'Harga Jasa Sedot WC di Medan dan Apa yang Memengaruhinya',
        'meta_desc' => 'Biaya sedot WC di Medan dipengaruhi volume lumpur, akses gang, jarak truk, dan panjang selang. Ini penjelasan komponen biayanya secara jujur.',
        'tanggal'   => '2026-09-27',
        'kategori'  => 'Biaya',
        'excerpt'   => 'Kenapa dua rumah dengan masalah sama bisa menerima penawaran berbeda? Jawabannya ada pada empat faktor teknis yang jarang dijelaskan di brosur.',
    ),

    array(
        'slug'      => 'septic-tank-baru-kapasitas-tepat',
        'judul'     => 'Ukuran Septic Tank yang Tepat untuk Rumah Anda',
        'meta_desc' => 'Panduan memilih volume septic tank sesuai jumlah penghuni, dari rumah kecil sampai kos dan ruko. Termasuk jarak aman ke sumur dan resapan.',
        'tanggal'   => '2026-09-30',
        'kategori'  => 'Konstruksi',
        'excerpt'   => 'Tangki terlalu kecil membuat Anda menyedot dua kali lebih sering; terlalu besar membuang biaya di awal. Ini rumus praktisnya beserta jarak aman antar-bak.',
    ),

    array(
        'slug'      => 'bahaya-septic-tank-penuh',
        'judul'     => 'Bahaya Septic Tank Penuh yang Sering Diabaikan Pemilik Rumah',
        'meta_desc' => 'Septic tank penuh bukan cuma bau: risiko gas metana, cacing, E. coli di halaman, hingga sumur tercemar. Ini tanda dan cara mencegahnya.',
        'tanggal'   => '2026-10-02',
        'kategori'  => 'Keselamatan',
        'excerpt'   => 'Limbah yang meluap pelan-pelan mencemari tanah dan air tanpa terasa. Berikut risiko kesehatan dan struktural yang muncul bila pengurasan ditunda terus.',
    ),

    array(
        'slug'      => 'cara-menghilangkan-bau-dari-wc',
        'judul'     => 'Cara Menghilangkan Bau dari WC dan Kamar Mandi',
        'meta_desc' => 'Bau dari kloset biasanya berasal dari seal yang bocor, bak kontrol jenuh, atau ventilasi tangki tersumbat. Ini urutan pengecekan yang benar.',
        'tanggal'   => '2026-10-05',
        'kategori'  => 'Troubleshooting',
        'excerpt'   => 'Mengganti pewangi ruangan tidak akan menyelesaikan bau sulfida. Cari sumbernya dulu lewat enam titik pemeriksaan yang bisa dilakukan sendiri.',
    ),

    array(
        'slug'      => 'alat-sederhana-wc-mampet',
        'judul'     => 'Alat Sederhana untuk Mengatasi WC Mampet di Rumah',
        'meta_desc' => 'Plunger, kawat spiral, soda kue-cuka, sampai pompa tangan: mana yang efektif untuk WC mampet dan mana yang justru berisiko merusak pipa.',
        'tanggal'   => '2026-10-08',
        'kategori'  => 'DIY',
        'excerpt'   => 'Pertolongan pertama sebelum memanggil teknisi. Kami urutkan dari yang paling aman, lengkap dengan batasan kapan sebaiknya berhenti mencoba.',
    ),

    array(
        'slug'      => 'kesalahan-sehari-hari-septic-tank',
        'judul'     => '7 Kesalahan Sehari-hari yang Membuat Septic Tank Cepat Penuh',
        'meta_desc' => 'Tisu basah, minyak goreng, cat, pembasmi kuman, dan mesin cuci yang terlalu sering menyala diam-diam memperpendek umur septic tank Anda.',
        'tanggal'   => '2026-10-11',
        'kategori'  => 'Perawatan',
        'excerpt'   => 'Bakteri pengurai di dalam tangki mati oleh hal-hal yang kita kira membantu. Tujuh kebiasaan ini paling sering jadi penyebab tangki penuh lebih cepat.',
    ),

    array(
        'slug'      => 'resapan-air-macet-penanganan',
        'judul'     => 'Resapan Air Macet? Ini Penyebab dan Cara Menanganinya',
        'meta_desc' => 'Resapan yang berhenti menyerap air bikin genangan dan bau. Kenali penyebabnya: lapisan lumpur, tanah liat, akar pohon, atau resapan terlalu kecil.',
        'tanggal'   => '2026-10-14',
        'kategori'  => 'Drainase',
        'excerpt'   => 'Air yang menggenang berjam-jam setelah mandi menandakan daya serap sudah turun drastis. Ini tiga tingkat penanganan, dari termurah sampai menyeluruh.',
    ),

    array(
        'slug'      => 'sedot-wc-kos-kontrakan',
        'judul'     => 'Panduan Penghuni Kos dan Kontrakan Saat WC Mampet',
        'meta_desc' => 'WC kos mampet dan bingung siapa yang bayar? Ini hak-kewajiban penghuni dan pemilik, plus cara melapor cepat agar aktivitas kos tidak terhenti.',
        'tanggal'   => '2026-10-17',
        'kategori'  => 'Panduan',
        'excerpt'   => 'Kamar mandi tunggal dipakai puluhan orang punya pola kerusakan berbeda. Panduan praktis untuk anak kos, ibu kos, dan pemilik kontrakan di Medan.',
    ),

    array(
        'slug'      => 'sedot-wc-usaha-restoran',
        'judul'     => 'Sedot WC untuk Restoran, Kafe, dan Usaha Makanan di Medan',
        'meta_desc' => 'Grease trap restoran cepat penuh karena lemak. Ini jadwal perawatan, tanda bahaya, dan cara menghindari penutupan usaha karena limbah meluap.',
        'tanggal'   => '2026-10-20',
        'kategori'  => 'Usaha',
        'excerpt'   => 'Lemak minyak adalah penyebab utama saluran tempat usaha macet. Panduan khusus untuk dapur komersial, ruko makan, dan kafe agar tidak tutup mendadak.',
    ),

    array(
        'slug'      => 'prosedur-teknisi-sedot-wc',
        'judul'     => 'Begini Prosedur Kerja Teknisi Sedot WC dari Awal Sampai Akhir',
        'meta_desc' => 'Ini urutan kerja sedot WC yang benar: survey, buka tutup, sedot lumpur, bilas, uji aliran, dan bersihkan lokasi. Agar Anda tahu yang dikerjakan.',
        'tanggal'   => '2026-10-23',
        'kategori'  => 'Layanan',
        'excerpt'   => 'Banyak pemilik rumah tidak tahu apa yang sebenarnya terjadi di belakang mereka. Enam tahap ini yang harus Anda minta dipenuhi teknisi mana pun.',
    ),

    array(
        'slug'      => 'pilihan-material-septic-tank',
        'judul'     => 'Septic Tank Beton, BFR, atau Fiberglass: Mana yang Paling Awet?',
        'meta_desc' => 'Perbandingan septic tank pasangan bata/beton, fiberglass, dan BFR plastik: harga, ketahanan rembes, umur pakai, dan kecepatan pemasangan.',
        'tanggal'   => '2026-10-26',
        'kategori'  => 'Konstruksi',
        'excerpt'   => 'Tiga jenis tangki yang beredar di Medan punya kelemahan berbeda. Tabel perbandingannya membantu Anda memilih sesuai kondisi tanah dan anggaran.',
    ),

    array(
        'slug'      => 'gejala-septic-tank-masih-baik',
        'judul'     => 'Ciri Septic Tank Masih Sehat dan Kapan Harus Curiga',
        'meta_desc' => 'Septic tank sehat punya tanda jelas: air turun normal, tidak ada bau, halaman kering, dan bak kontrol jernih. Ini daftar cek mandiri tiap bulan.',
        'tanggal'   => '2026-10-29',
        'kategori'  => 'Perawatan',
        'excerpt'   => 'Tidak semua WC lambat berarti tangki penuh. Delapan indikator ini membedakan sistem yang masih sehat dari sistem yang butuh tindakan segera.',
    ),

    array(
        'slug'      => 'musim-hujan-dan-septic-tank',
        'judul'     => 'Kenapa Masalah WC Sering Muncul saat Musim Hujan di Medan',
        'meta_desc' => 'Hujan menaikkan muka air tanah sehingga resapan berhenti menyerap. Ini alasan musiman itu dan langkah antisipasi untuk rumah di Medan.',
        'tanggal'   => '2026-09-12',
        'kategori'  => 'Drainase',
        'excerpt'   => 'Pola tahunan: keluhan melonjak saat curah hujan tinggi. Tanah yang sudah jenuh air tidak memberi ruang lagi bagi limbah cair untuk meresap.',
    ),

);

return $articles;
