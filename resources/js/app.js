import './bootstrap';
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.data('carousel', () => ({
    slides: [
        { type: 'image', src: '/img/ads3.png' },
        { type: 'video', src: '/vid/ultramilkads.mp4' },
        { type: 'image', src: '/img/newjeans-indomieads.png' },
        { type: 'video', src: '/vid/chitatoads.mp4' },
        { type: 'image', src: '/img/cornettoice.jpg' },
    ],
    activeIndex: 0,
    timer: null,
    duration: 5000, // default 5 detik untuk image

    init() {
        this.startAuto();
    },

    startAuto() {
        this.stopAuto();

        let currentSlide = this.slides[this.activeIndex];
        if (currentSlide.type === 'video') {
            // Kalau video → biarin video jalan, autoNext pas ended (lihat di @ended HTML)
            return;
        }

        // Kalau gambar → autoNext setelah duration
        this.timer = setTimeout(() => {
            this.next();
        }, this.duration);
    },

    stopAuto() {
        if (this.timer) clearTimeout(this.timer);
    },

    next() {
        this.activeIndex = (this.activeIndex + 1) % this.slides.length;
        this.startAuto();
    },

    prev() {
        this.activeIndex = (this.activeIndex - 1 + this.slides.length) % this.slides.length;
        this.startAuto();
    },

    goTo(index) {
        this.activeIndex = index;
        this.startAuto();
    }
}));

Alpine.start();
