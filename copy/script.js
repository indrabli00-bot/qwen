// Toggle Mobile Menu
function toggleMenu() {
    document.getElementById('navLinks').classList.toggle('active');
}

// Contact Form Handler
const form = document.getElementById('contactForm');
const success = document.getElementById('formSuccess');

if (form) {
    form.addEventListener('submit', function (e) {
        e.preventDefault();
        const data = new FormData(form);
        const name = data.get('name') || '';
        const phone = data.get('phone') || '';
        const service = data.get('service') || '';
        const message = data.get('message') || '';

        success.classList.add('show');

        window.open(
            'https://wa.me/6282267775464?text=' +
            encodeURIComponent(`Halo Sedot WC Medan, saya ${name} (${phone}).\nLayanan: ${service}.\nPesan: ${message}`),
            '_blank'
        );

        form.reset();
    });
}

// Smooth scroll for nav links (close mobile menu on click)
document.querySelectorAll('.nav-links a').forEach(link => {
    link.addEventListener('click', () => {
        document.getElementById('navLinks').classList.remove('active');
    });
});

// Pop-up sambutan: tampil sekali per sesi (hanya jika elemen pop-up ada di halaman)
(function () {
    var STORAGE_KEY = 'sedotwc_popup_seen';
    var popup = document.getElementById('welcomePopup');
    var closeBtn = document.getElementById('popupClose');
    if (!popup) return;
    function closePopup() { popup.classList.remove('active'); }
    try {
        if (!sessionStorage.getItem(STORAGE_KEY)) {
            setTimeout(function () { popup.classList.add('active'); }, 1500);
            sessionStorage.setItem(STORAGE_KEY, 'true');
        }
    } catch (e) {}
    if (closeBtn) closeBtn.addEventListener('click', closePopup);
    popup.addEventListener('click', function (ev) { if (ev.target === popup) closePopup(); });
})();

// Video Autoplay Control
const video = document.getElementById('autoVideo');
const videoControl = document.getElementById('videoControl');

if (video && videoControl) {
    // Toggle Play/Pause saat tombol diklik
    videoControl.addEventListener('click', function() {
        if (video.paused) {
            video.play();
            this.innerHTML = '⏸'; // Pause icon
            this.setAttribute('aria-label', 'Pause video');
        } else {
            video.pause();
            this.innerHTML = '▶'; // Play icon
            this.setAttribute('aria-label', 'Play video');
        }
    });
    
    // Handle video ended (loop otomatis sudah di HTML)
    video.addEventListener('ended', function() {
        videoControl.innerHTML = '▶';
    });
    
    // Handle video play
    video.addEventListener('play', function() {
        videoControl.innerHTML = '⏸';
    });
    
    // Handle video pause
    video.addEventListener('pause', function() {
        videoControl.innerHTML = '▶';
    });
    
    // Mute/unmute toggle (opsional - klik kanan pada video)
    video.addEventListener('click', function(e) {
        // Jangan trigger jika yang diklik adalah tombol control
        if (e.target !== videoControl) {
            if (video.muted) {
                video.muted = false;
            } else {
                video.muted = true;
            }
        }
    });
}