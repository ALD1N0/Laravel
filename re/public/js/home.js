const videos = document.querySelectorAll('.insta-video');

videos.forEach(video => {
    const soundIndicator = document.createElement('div');
    soundIndicator.classList.add('sound-indicator');
    soundIndicator.textContent = '🔇'; // Status awal
    video.parentElement.appendChild(soundIndicator);

    // Fungsi untuk memeriksa apakah video dalam viewport
    function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    // Event listener untuk memutar atau menjeda video berdasarkan apakah video terlihat di layar
    window.addEventListener('scroll', () => {
        if (isInViewport(video)) {
            video.play();
        } else {
            video.pause();
        }
    });

    // Event listener agar video langsung diputar ketika halaman dimuat
    window.addEventListener('load', () => {
        if (isInViewport(video)) {
            video.play();
        }
    });

    // Event listener untuk mengaktifkan/mematikan suara ketika video diklik
    video.addEventListener('click', () => {
        video.muted = !video.muted; // Toggle muted
        soundIndicator.textContent = video.muted ? '🔇' : '🔊'; // Ubah ikon
    });

    // Gaya untuk indikator suara
    const styles = document.createElement('style');
    styles.innerHTML = `
    .sound-indicator {
        position: absolute;
        bottom: 10px;
        right: 10px;
        font-size: 24px;
        background: rgba(0, 0, 0, 0.6);
        color: white;
        padding: 5px 10px;
        border-radius: 20px;
        pointer-events: none;
    }
    `;
    document.head.appendChild(styles);
});