// ====== FUNGSI UNTU HAMBURGER MENU ======
const navToggle = document.querySelector('.nav__toggle');
const navList = document.querySelector('.nav__list');

// Tambahkan event listener ke tombol hamburger
navToggle.addEventListener('click', () => {
    // Toggle class 'nav__list--active' pada daftar navigasi
    navList.classList.toggle('nav__list--active');
});


// ====== FUNGSI UNTUK SMOOTH SCROLLING ======
// Pilih semua link anchor (yang href-nya dimulai dengan #)
const scrollLinks = document.querySelectorAll('a[href^="#"]');

scrollLinks.forEach(link => {
    link.addEventListener('click', function(e) {
        // Mencegah perilaku default (lompatan kasar)
        e.preventDefault();

        const id = this.getAttribute('href');

        // Pastikan link punya id tujuan, bukan cuma "#"
        if (id.length > 1) {
            const targetElement = document.querySelector(id);
    
            // Jika elemen tujuan ada, scroll ke sana dengan mulus
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        }
    });
});

// Kurung kurawal berlebih yang ada di sini sudah dihapus