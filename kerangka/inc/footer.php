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
                <h4>Halaman</h4>
                <ul>
                    <li><a href="/blog">Blog</a></li>
                    <li><a href="/tentang">Tentang Kami</a></li>
                    <li><a href="/kontak">Kontak</a></li>
                    <li><a href="/kebijakan-privasi">Kebijakan Privasi</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h4>Kontak</h4>
                <ul>
                    <li><a href="tel:<?= e(cfg('phone_intl')) ?>"><?= e(cfg('phone')) ?></a></li>
                    <li><a href="https://wa.me/<?= e(cfg('wa')) ?>" target="_blank" rel="noopener">WhatsApp</a></li>
                    <li><?= e(cfg('address')) ?></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© <?= date('Y') ?> Sedot WC Medan (medansedotwc.my.id). Semua hak dilindungi.</p>
        </div>
    </div>
</footer>
<a href="https://wa.me/<?= e(cfg('wa')) ?>?text=Halo%20Sedot%20WC%20Medan%2C%20saya%20mau%20tanya%20jasa%20sedot%20WC" class="floating-cta" target="_blank" rel="noopener">💬 Chat WhatsApp</a>
<script src="/script.js"></script>
</body>
</html>
