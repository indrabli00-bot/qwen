<?php
/**
 * pages/contact.php — Contact Us (halaman wajib, pasal 6 blueprint)
 * URL bersih: /kontak  (lihat .htaccess aturan 2)
 * Data kontak = nyata dari copy/index.html milik pemilik situs.
 * Formulir menyusun pesan WhatsApp otomatis — tanpa database & tanpa PHP mail server.
 */
$page_title     = 'Kontak Sedot WC Medan 24 Jam - WA & Telepon | Medansedotwc.my.id';
$meta_desc      = 'Hubungi Sedot WC Medan via WhatsApp 0822-6777-5464 atau telepon. Layanan sedot tinja & septic tank 24 jam di Medan Sunggal. Survey GRATIS.';
$canonical_path = '/kontak';

$schema_jsonld = '{
  "@context": "https://schema.org",
  "@type": "ContactPage",
  "name": "Kontak Sedot WC Medan",
  "url": "https://medansedotwc.my.id/kontak",
  "description": "Kontak layanan sedot WC Medan 24 jam: WhatsApp, telepon, alamat, dan formulir permintaan survey.",
  "mainEntity": {
    "@type": "LocalBusiness",
    "name": "Sedot WC Medan",
    "telephone": "+' . $nomor_wa_link . '",
    "priceRange": "Rp",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Gg. Sejahtera, Sunggal",
      "addressLocality": "Medan",
      "addressRegion": "Sumatera Utara",
      "postalCode": "20128",
      "addressCountry": "ID"
    },
    "openingHoursSpecification": {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
      "opens": "00:00",
      "closes": "23:59"
    }
  }
}';

require_once __DIR__ . '/../header.php';
?>
<section class="page-wrap">
    <div class="container">
        <div class="static-shell">

            <h1>Kontak Sedot WC Medan</h1>

            <p>Cara tercepat mendapatkan bantuan adalah <strong>WhatsApp</strong>. Kirim foto atau video lokasi, sebutkan gejala yang muncul, dan alamat lengkap. Kami balas pada jam kerja dan tetap membuka layanan darurat <strong>24 jam</strong>.</p>

            <h2>Data Kontak Resmi</h2>
            <table style="width:100%;border-collapse:collapse;margin:18px 0">
                <tr>
                    <th style="background:#0a1628;color:#fff;padding:10px 12px;text-align:left;border:1px solid #dbe4ec;width:32%">WhatsApp (utama)</th>
                    <td style="padding:10px 12px;border:1px solid #dbe4ec"><a href="https://wa.me/<?php echo $nomor_wa_link; ?>" target="_blank" rel="noopener"><?php echo $nomor_wa_display; ?></a></td>
                </tr>
                <tr>
                    <th style="background:#0a1628;color:#fff;padding:10px 12px;text-align:left;border:1px solid #dbe4ec">Telepon</th>
                    <td style="padding:10px 12px;border:1px solid #dbe4ec"><a href="tel:+<?php echo $nomor_wa_link; ?>"><?php echo $nomor_wa_display; ?></a></td>
                </tr>
                <tr>
                    <th style="background:#0a1628;color:#fff;padding:10px 12px;text-align:left;border:1px solid #dbe4ec">Alamat operasional</th>
                    <td style="padding:10px 12px;border:1px solid #dbe4ec"><?php echo $alamat_medan; ?></td>
                </tr>
                <tr>
                    <th style="background:#0a1628;color:#fff;padding:10px 12px;text-align:left;border:1px solid #dbe4ec">Jam layanan</th>
                    <td style="padding:10px 12px;border:1px solid #dbe4ec">Setiap hari, 24 jam (termasuk akhir pekan &amp; hari libur)</td>
                </tr>
                <tr>
                    <th style="background:#0a1628;color:#fff;padding:10px 12px;text-align:left;border:1px solid #dbe4ec">Area dilayani</th>
                    <td style="padding:10px 12px;border:1px solid #dbe4ec">Medan Sunggal &amp; seluruh Kota Medan, sebagian Deli Serdang</td>
                </tr>
            </table>

            <h2>Formulir Permintaan Survey</h2>
            <p>Isi formulir berikut untuk meminta survey gratis. Formulir ini menyusun pesan WhatsApp otomatis berisi data yang Anda isi — tidak ada data yang disimpan di server kami.</p>

            <form class="contact-form" id="formSurvey" action="https://wa.me/<?php echo $nomor_wa_link; ?>" method="get" target="_blank" rel="noopener">
                <label for="nama">Nama Lengkap *</label>
                <input type="text" id="nama" name="nama" required autocomplete="name" placeholder="Contoh: Andi">

                <label for="telepon">Nomor HP / WhatsApp Aktif *</label>
                <input type="tel" id="telepon" name="telepon" required autocomplete="tel" placeholder="Contoh: 08xxxxxxxxxx">

                <label for="alamat">Alamat Lokasi Pekerjaan *</label>
                <input type="text" id="alamat" name="alamat" required autocomplete="street-address" placeholder="Jalan, lingkungan, kelurahan, kecamatan">

                <label for="masalah">Jenis Masalah *</label>
                <select id="masalah" name="masalah" required style="width:100%;padding:12px 14px;border:1px solid #cfdbe6;border-radius:10px;font:inherit;margin-bottom:16px;background:#fff">
                    <option value="">— Pilih jenis masalah —</option>
                    <option>WC mampet</option>
                    <option>Septic tank penuh / perlu disedot</option>
                    <option>Bau tidak sedap dari kloset atau got</option>
                    <option>Saluran / got tersumbat</option>
                    <option>Bak kontrol atau resapan meluap</option>
                    <option>Perawatan berkala / pengecekan</option>
                    <option>Lainnya (saya jelaskan di kolom pesan)</option>
                </select>

                <label for="pesan">Kronologi Singkat *</label>
                <textarea id="pesan" name="pesan" required placeholder="Contoh: air kloset naik lambat sejak 3 hari lalu, terakhir sedot sekitar 3 tahun lalu."></textarea>

                <button type="submit">Kirim via WhatsApp →</button>
                <p style="font-size:.85rem;color:#5a6a7a;margin:14px 0 0">Dengan mengirim formulir, Anda menyetujui isi pesan diteruskan ke WhatsApp kami. Lihat <a href="/kebijakan-privasi">Kebijakan Privasi</a> untuk penjelasan lengkapnya.</p>
            </form>

            <h2>Sebelum Menelepon, Siapkan Ini</h2>
            <ul>
                <li><strong>Patokan lokasi</strong> — nama jalan, warna pagar, atau bangunan yang mudah dikenali. Gang di Medan sering tidak bernomor rumah.</li>
                <li><strong>Estimasi jarak truk ke septic tank</strong> — menentukan panjang selang yang harus dibawa.</li>
                <li><strong>Tahun terakhir septic tank disedot</strong> — membantu memperkirakan volume lumpur.</li>
                <li><strong>Akses pintu/gerbang</strong> — apakah truk bisa masuk atau perlu diparkir di jalan utama.</li>
            </ul>

            <h2>Lokasi Kami</h2>
            <p>Peta di bawah menampilkan area operasional di Medan Sunggal. Tekan tombol untuk membuka rute di Google Maps.</p>
            <div style="border-radius:16px;overflow:hidden;border:1px solid #e3e9f0;margin-top:16px">
                <iframe title="Peta lokasi Sedot WC Medan Sunggal"
                        src="https://www.google.com/maps?q=Sunggal,%20Medan%20Sunggal,%20Kota%20Medan,%20Sumatera%20Utara%2020128&output=embed"
                        width="100%" height="360" style="border:0;display:block" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
            </div>

        </div>
    </div>
</section>

<script>
// Menyusun pesan WhatsApp otomatis dari isi formulir (tanpa server/database).
document.getElementById('formSurvey').addEventListener('submit', function (e) {
    var nama    = document.getElementById('nama').value.trim();
    var telepon = document.getElementById('telepon').value.trim();
    var alamat  = document.getElementById('alamat').value.trim();
    var masalah = document.getElementById('masalah').value;
    var pesan   = document.getElementById('pesan').value.trim();

    var teks = 'Halo Sedot WC Medan, saya ingin meminta survey GRATIS.%0A%0A'
             + 'Nama: '       + encodeURIComponent(nama)    + '%0A'
             + 'No. HP: '     + encodeURIComponent(telepon) + '%0A'
             + 'Alamat: '     + encodeURIComponent(alamat)  + '%0A'
             + 'Masalah: '    + encodeURIComponent(masalah) + '%0A'
             + 'Keterangan: ' + encodeURIComponent(pesan);

    this.href = 'https://wa.me/<?php echo $nomor_wa_link; ?>?text=' + teks;
});
</script>
<?php require_once __DIR__ . '/../footer.php'; ?>
