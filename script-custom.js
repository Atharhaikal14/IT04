document.addEventListener('DOMContentLoaded', () => {
    const mainNav = document.getElementById('mainNav');
    const footerCopy = document.getElementById('footer-copy');

    // 1. Logic untuk Sticky Header (Mengubah kelas saat scroll)
    const scrollFunction = () => {
        if (!mainNav) return;
        if (window.scrollY > 100) {
            // Navbar menyusut dan background menjadi solid gelap saat scroll
            mainNav.classList.remove('navbar-expand-lg');
            mainNav.classList.add('bg-dark'); 
            mainNav.style.paddingTop = '10px';
            mainNav.style.paddingBottom = '10px';
        } else {
            // Navbar kembali ke ukuran dan warna utama di bagian atas
            mainNav.classList.add('navbar-expand-lg');
            mainNav.classList.remove('bg-dark');
            mainNav.style.paddingTop = '';
            mainNav.style.paddingBottom = '';
        }
    };
    window.addEventListener('scroll', scrollFunction);
    scrollFunction(); // Inisialisasi awal

    // 2. Logic untuk Form Feedback (Simulasi Pengiriman)
    const feedbackForm = document.getElementById('feedbackForm');
    const feedbackMessage = document.getElementById('feedbackMessage');

    if (feedbackForm) {
        feedbackForm.addEventListener('submit', function(event) {
            event.preventDefault(); // Mencegah form terkirim
            
            // Simulasi pengiriman data
            console.log('Feedback Submitted:', {
                nama: document.getElementById('nama').value,
                departemen: document.getElementById('departemen').value,
                feedback: document.getElementById('feedback').value,
            });

            // Reset form dan tampilkan pesan sukses
            feedbackForm.reset();
            if (feedbackMessage) {
                feedbackMessage.classList.remove('d-none');
                setTimeout(() => {
                    feedbackMessage.classList.add('d-none');
                }, 5000); // Pesan hilang setelah 5 detik
            }
        });
    }

    // 3. Logic untuk menyalin konten footer dari index.html ke halaman lain
    if (footerCopy) {
        // Asumsi struktur footer sama di semua halaman, dan akan diisi dari index.html
        // Karena keterbatasan, kode ini hanya memastikan elemen ID ada.
        // Dalam implementasi nyata, fungsi ini akan memuat konten footer dari AJAX atau backend.
    }
});