<?php
/**
 * index.php — Beranda jasa sedot WC medansedotwc.my.id
 * Arsitektur modular (pasal 3 & 4.1 blueprint):
 *   header.php di atas  -> <head>, meta SEO, kode AdSense (1x), topbar + menu
 *   footer.php di bawah -> copyright, 4 halaman wajib, CTA mengambang, penutup dokumen
 * Seluruh konten body beranda asli (popup, hero, layanan, kenapa kami, proses,
 * video, galeri, testimoni, form kontak, peta) dipertahankan 100% tanpa pengurangan.
 */
$page_title     = 'Sedot WC Medan 24 Jam | Jasa Sedot Tinja & Septic Tank - Medansedotwc.my.id';
// Meta description: 143 karakter (batas maks blueprint pasal 4.2 = 155)
$meta_desc      = 'Jasa sedot WC Medan 24 jam untuk rumah, ruko, kantor, dan kos. Tangani WC mampet, septic tank penuh, bau, dan saluran tersumbat. Survey gratis.';
$canonical_path = '/';

require_once __DIR__ . '/header.php';
?>
<!-- ===== Pop-up Notifikasi Pertama Kali ===== -->
<div class="popup-overlay" id="welcomePopup">
  <div class="popup-box">
    <button class="popup-close" id="popupClose" aria-label="Tutup">✕</button>
    
    <div class="popup-icon">🚛</div>
    <h2 class="popup-title">Selamat Datang di Sedot WC Medan!</h2>
    <p class="popup-subtitle">Solusi WC mampet, penuh & bau — <strong>24 Jam Nonstop!</strong></p>
    
    <div class="popup-features">
      <div class="popup-feature">
        <span class="popup-check">✓</span>
        <span>Survey <strong>GRATIS!</strong></span>
      </div>
      <div class="popup-feature">
        <span class="popup-check">✓</span>
        <span>Respon Cepat</span>
      </div>
      <div class="popup-feature">
        <span class="popup-check">✓</span>
        <span>Harga Terjangkau</span>
      </div>
    </div>

    <div class="popup-actions">
      <a href="https://wa.me/6282267775464?text=Halo%20Sedot%20WC%20Medan%2C%20saya%20mau%20tanya%20jasa%20sedot%20WC" 
         class="popup-btn primary" target="_blank" rel="noopener">
        💬 Chat WhatsApp Sekarang
      </a>
      <a href="tel:+6282267775464" class="popup-btn secondary">
        📞 Telepon 0822-6777-5464
      </a>
    </div>
    
    <p class="popup-note">📍 Melayani Medan Sunggal & sekitarnya</p>
  </div>
</div>

<!-- Hero Section -->
<section class="hero" id="home">
    <div class="hero-bg-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <div class="hero-left">

                <!-- Badge sejajar dengan SEDOT WC -->
                <div class="title-row">
                    <h1>SEDOT<br><span class="title-yellow">WC</span></h1>
                    <div class="survey-badge">
                        <span class="badge-text">SURVEY<br>GRATIS!</span>
                    </div>
                </div>

                <div class="tagline-bar">CEPAT • BERSIH • TUNTAS</div>

                <p class="hero-subtitle">Atasi <strong>WC Mampet, Penuh, Bau,</strong> dan <strong>Saluran Tersumbat</strong> di rumah maupun tempat usaha Anda. Melayani wilayah Medan Sunggal dan sekitarnya, siap datang kapan saja.</p>

                <div class="hero-actions">
                    <a href="tel:+6282267775464" class="cta-btn yellow">📞 Telepon 0822-6777-5464</a>
                    <a href="https://wa.me/6282267775464?text=Halo%20Sedot%20WC%20Medan%2C%20saya%20mau%20tanya%20jasa%20sedot%20WC" class="cta-btn outline" target="_blank" rel="noopener">💬 Chat WhatsApp</a>
                </div>

                <!-- Benefits -->
                <div class="benefits-list">
                    <div class="benefit-item">
                        <span class="checkmark">✓</span>
                        <span>LAYANAN CEPAT 24 JAM</span>
                    </div>
                    <div class="benefit-item">
                        <span class="checkmark">✓</span>
                        <span>TENAGA PROFESIONAL</span>
                    </div>
                    <div class="benefit-item">
                        <span class="checkmark">✓</span>
                        <span>HARGA TERJANGKAU</span>
                    </div>
                </div>

                <p class="hero-phone">
                    
                    <a href="https://wa.me/6282267775464" target="_blank" rel="noopener">+62 822-6777-5464</a>
                </p>
            </div>
        </div>
    </div>
</section>
<section class="services" id="services">
  <div class="container">
    <div class="section-title">
      <h2 data-i18n="services_title">Layanan Kami</h2>
      <p data-i18n="services_subtitle">Solusi lengkap septic tank, saluran mampet, dan sedot WC di Medan & sekitarnya. Siap bantu kapan aja, dijamin beres!</p>
    </div>
    <div class="services-grid">
      <div class="service-card">
        <div class="service-icon">🚽</div>
        <h3 data-i18n="service_1_title">Sedot Septic Tank Penuh</h3>
        <p data-i18n="service_1_desc">Sedot isi septic tank rumah atau ruko sampai tuntas, dijamin WC lancar kembali seperti baru.</p>
      </div>
      <div class="service-card">
        <div class="service-icon">🚰</div>
        <h3 data-i18n="service_2_title">Atasi Saluran Mampet</h3>
        <p data-i18n="service_2_desc">WC atau saluran air mampet? Kami buka sumbatannya, pipa besar atau kecil, pasti beres tanpa merusak.</p>
      </div>
      <div class="service-card">
        <div class="service-icon">🏭</div>
        <h3 data-i18n="service_3_title">Layanan Rumah & Usaha</h3>
        <p data-i18n="service_3_desc">Siap melayani rumah tinggal, kos-kosan, restoran, kantor, sampai lokasi proyek bangunan.</p>
      </div>
      <div class="service-card">
        <div class="service-icon">🚨</div>
        <h3 data-i18n="service_4_title">Layanan Darurat 24 Jam</h3>
        <p data-i18n="service_4_desc">Lagi darurat WC mampet tengah malam? Tenang, satu telepon kami langsung meluncur ke lokasi.</p>
      </div>
      <div class="service-card">
        <div class="service-icon">📅</div>
        <h3 data-i18n="service_5_title">Perawatan Berkala</h3>
        <p data-i18n="service_5_desc">Cegah masalah mahal di kemudian hari dengan jadwal perawatan rutin yang terjangkau dan terjadwal.</p>
      </div>
      <div class="service-card">
        <div class="service-icon">♻️</div>
        <h3 data-i18n="service_6_title">Pembuangan Limbah Aman</h3>
        <p data-i18n="service_6_desc">Limbah dibuang di tempat resmi, jadi aman, bersih, dan nggak bikin lingkungan sekitar tercemar.</p>
      </div>
    </div>
  </div>
</section>

<!-- Why Us Section -->
<section class="why-us" id="kenapa-kami">
    <div class="container">
        <div class="section-title">
            <h2>Kenapa Pilih Kami?</h2>
            <p>Dipercaya warga Medan Sunggal dan sekitarnya untuk layanan sedot WC yang cepat, bersih, dan profesional.</p>
        </div>
        <div class="why-grid">
            <div class="why-item">
                <div class="why-icon">⏱️</div>
                <h3>Layanan 24 Jam</h3>
                <p>Siap melayani panggilan darurat kapan saja, siang atau malam, tanpa hari libur.</p>
            </div>
            <div class="why-item">
                <div class="why-icon">🔍</div>
                <h3>Survey Gratis</h3>
                <p>Tim kami akan mengecek lokasi terlebih dahulu dan memberikan estimasi biaya yang transparan.</p>
            </div>
            <div class="why-item">
                <div class="why-icon">👷‍♂️</div>
                <h3>Tenaga Profesional</h3>
                <p>Dikerjakan oleh tim berpengalaman dengan peralatan modern untuk hasil yang maksimal.</p>
            </div>
            <div class="why-item">
                <div class="why-icon">💰</div>
                <h3>Harga Terjangkau</h3>
                <p>Biaya layanan kompetitif dan sesuai dengan kualitas pekerjaan yang diberikan.</p>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="process" id="proses">
    <div class="container">
        <div class="section-title">
            <h2>Cara Kerja Kami</h2>
            <p>4 langkah mudah untuk WC bersih dan masalah teratasi tuntas.</p>
        </div>
        <div class="process-steps">
            <div class="step">
                <div class="step-num">1</div>
                <h4>Hubungi Kami</h4>
                <p>Telepon 0822-6777-5464 atau kirim pesan WhatsApp.</p>
            </div>
            <div class="step">
                <div class="step-num">2</div>
                <h4>Survey Gratis</h4>
                <p>Tim kami mengecek lokasi dan memberi estimasi biaya secara jelas.</p>
            </div>
            <div class="step">
                <div class="step-num">3</div>
                <h4>Pengerjaan</h4>
                <p>Truk dan peralatan datang, proses penyedotan dilakukan dengan rapi.</p>
            </div>
            <div class="step">
                <div class="step-num">4</div>
                <h4>Bersih Tuntas</h4>
                <p>WC dan saluran kembali normal, Anda beraktivitas dengan nyaman.</p>
            </div>
        </div>
    </div>
</section>

<!-- Video Section -->
<section class="video-section" id="video">
    <div class="container">
        <div class="section-title">
            <h2>Video Profil Layanan</h2>
            <p>Lihat bagaimana tim kami bekerja menangani sedot WC dengan cepat dan rapi.</p>
        </div>
        
        <div class="video-wrap">
            <video autoplay muted loop playsinline poster="assets/video-poster.jpg" id="autoVideo">
                <source src="assets/video-profil.mp4" type="video/mp4">
                <!-- Fallback untuk browser yang tidak support -->
                Browser Anda tidak mendukung tag video.
            </video>
            
            <!-- Tombol Play/Pause Manual -->
            <button class="video-control" id="videoControl" aria-label="Pause video">⏸</button>
        </div>
        
        <p class="video-note">
          
        </p>
    </div>
</section>

<!-- Work Examples / Gallery -->
<section class="work-examples" id="galeri">
    <div class="container">
        <div class="section-title">
            <h2> Hasil Kerja</h2>
            <p>Dokumentasi pekerjaan nyata di lapangan.</p>
        </div>
        <div class="work-grid">
            <div class="work-item"><img src="assets/gallery/1.jpg" alt="Contoh hasil kerja 1" loading="lazy"></div>
            <div class="work-item"><img src="assets/gallery/2.jpg" alt="Contoh hasil kerja 2" loading="lazy"></div>
            <div class="work-item"><img src="assets/gallery/3.jpg" alt="Contoh hasil kerja 3" loading="lazy"></div>
            <div class="work-item"><img src="assets/gallery/4.jpg" alt="Contoh hasil kerja 4" loading="lazy"></div>
        </div>
        <div class="work-cta">
            <a href="https://wa.me/6282267775464" class="cta-btn" target="_blank" rel="noopener">Hubungi sekarang </a>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="testi" id="testimoni">
    <div class="container">
        <div class="section-title">
            <h2>Kata Pelanggan Kami</h2>
            <p>Testimoni pelanggan kami</p>
        </div>
        <div class="testi-grid">
            <div class="testi-card">
                <div class="testi-stars">★★★★★</div>
                <p>"Responnya cepat, langsung disurvey gratis hari itu juga. WC yang tadinya mampet sekarang lancar lagi."</p>
                <div class="testi-name">Pelanggan Medan Sunggal</div>
                <div class="testi-loc">Rumah Tinggal</div>
            </div>
            <div class="testi-card">
                <div class="testi-stars">★★★★★</div>
                <p>"Petugasnya profesional dan rapi kerjanya. Harga juga sesuai dengan yang dijanjikan di awal."</p>
                <div class="testi-name">Pelanggan Usaha</div>
                <div class="testi-loc">Ruko / Kos-kosan</div>
            </div>
            <div class="testi-card">
                <div class="testi-stars">★★★★★</div>
                <p>"Dipanggil malam hari pun tetap datang. Sangat terbantu karena saluran WC benar-benar tersumbat parah."</p>
                <div class="testi-name">Pelanggan Darurat 24 Jam</div>
                <div class="testi-loc">Kota Medan</div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact" id="kontak">
    <div class="container">
        <div class="contact-grid">
            <div class="contact-info">
                <h2>Hubungi Kami Sekarang</h2>
                <p class="lead">Jangan biarkan masalah WC dan septic tank Anda semakin parah. Hubungi kami untuk solusi cepat dan profesional.</p>
                <div class="contact-item">
                    <span></span>
                    <div>
                        <strong>Telepon / WhatsApp</strong>
                        <a href="tel:+6282267775464">0822-6777-5464</a>
                    </div>
                </div>
                <div class="contact-item">
                    <span>💬</span>
                    <div>
                        <strong>WhatsApp Business</strong>
                        <a href="https://wa.me/6282267775464" target="_blank" rel="noopener">Chat via WhatsApp</a>
                    </div>
                </div>
                <div class="contact-item">
                    <span></span>
                    <div>
                        <strong>Jam Operasional</strong>
                        Buka 24 Jam Setiap Hari
                    </div>
                </div>
                <div class="contact-item">
                    <span>📍</span>
                    <div>
                        <strong>Alamat</strong>
                        Gg. Sejahtera, Sunggal, Kec. Medan Sunggal,<br>
                        Kota Medan, Sumatera Utara 20128, Indonesia
                    </div>
                </div>
            </div>
            <div class="contact-form">
                <form id="contactForm">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="name" placeholder="Nama Anda" required>
                    </div>
                    <div class="form-group">
                        <label>No. HP / WhatsApp</label>
                        <input type="tel" name="phone" placeholder="08xxxxxxxxxx" required>
                    </div>
                    <div class="form-group">
                        <label>Jenis Layanan</label>
                        <select name="service">
                            <option>WC Mampet / Penuh</option>
                            <option>Bau Tidak Sedap</option>
                            <option>Saluran Tersumbat</option>
                            <option>Layanan Darurat</option>
                            <option>Lainnya</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Pesan</label>
                        <textarea name="message" rows="4" placeholder="Ceritakan keluhan Anda secara singkat"></textarea>
                    </div>
                    <button type="submit" class="cta-btn" style="width:100%">📩 Kirim Permintaan</button>
                    <p class="form-success" id="formSuccess">Terima kasih! Permintaan Anda akan segera kami hubungi via WhatsApp.</p>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="map-section">
    <iframe src="https://maps.google.com/maps?q=Gg.%20Sejahtera%2C%20Sunggal%2C%20Kec.%20Medan%20Sunggal%2C%20Kota%20Medan%2C%20Sumatera%20Utara%2020128&t=&z=15&ie=UTF8&iwloc=&output=embed" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Lokasi Sedot WC Medan"></iframe>
</section>

<?php require_once __DIR__ . '/footer.php'; ?>
