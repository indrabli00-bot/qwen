<!-- ============================================================
     footer.php — include di bawah SETIAP halaman.
     Berisi: footer (copyright + 4 halaman wajib), CTA mengambang,
     script, lalu menutup dokumen HTML.
     ============================================================ -->
<footer>
    <div class="container">
        <div class="footer-grid">
            <div class="footer-brand">
                <a href="/" class="logo">
                    <img src="/assets/logo.png" alt="Logo Sedot WC Medan">
                    Sedot WC Medan
                </a>
                <p>Jasa sedot WC profesional untuk rumah tinggal dan usaha di Medan Sunggal dan sekitarnya. Cepat, bersih, tuntas — siap 24 jam.</p>
            </div>
            <div class="footer-links">
                <h4>Layanan</h4>
                <ul>
                    <li>WC Mampet &amp; Penuh</li>
                    <li>Bau Tidak Sedap</li>
                    <li>Saluran Tersumbat</li>
                    <li>Layanan Darurat 24 Jam</li>
                </ul>
            </div>
            <div class="footer-links">
                <h4>Situs</h4>
                <ul>
                    <li><a href="/blog">Blog &amp; Artikel</a></li>
                    <li><a href="/tentang">Tentang Kami</a></li>
                    <li><a href="/kontak">Kontak</a></li>
                    <li><a href="/kebijakan-privasi">Kebijakan Privasi</a></li>
                    <li><a href="/disclaimer">Disclaimer</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h4>Kontak</h4>
                <ul>
                    <li><a href="tel:+<?php echo $nomor_wa_link; ?>"><?php echo $nomor_wa_display; ?></a></li>
                    <li><a href="https://wa.me/<?php echo $nomor_wa_link; ?>" target="_blank" rel="noopener">WhatsApp</a></li>
                    <li><?php echo $alamat_medan; ?></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© 2026 Sedot WC Medan (medansedotwc.my.id). Semua hak dilindungi. —
               <a href="/tentang">About Us</a> ·
               <a href="/kontak">Contact Us</a> ·
               <a href="/kebijakan-privasi">Privacy Policy</a> ·
               <a href="/disclaimer">Disclaimer</a>
            </p>
        </div>
    </div>
</footer>

<!-- Floating CTA -->
<a href="https://wa.me/<?php echo $nomor_wa_link; ?>?text=Halo%20Sedot%20WC%20Medan%2C%20saya%20mau%20tanya%20jasa%20sedot%20WC" class="floating-cta" target="_blank" rel="noopener">💬 Chat WhatsApp</a>

<script src="/script.js"></script>
</body>
</html>
