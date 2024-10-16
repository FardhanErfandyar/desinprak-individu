document.addEventListener('scroll', function() {
    const sections = document.querySelectorAll('div[id]'); // Mengambil semua div dengan id
    const navLinks = document.querySelectorAll('.nav-link'); // Mengambil semua nav-link

    let scrollPos = window.scrollY; // Posisi scroll saat ini

    sections.forEach(section => {
        const sectionTop = section.offsetTop; // Posisi atas dari section
        const sectionHeight = section.clientHeight; // Tinggi section

        // Hitung batas atas untuk active-link (10% dari tinggi section)
        const sectionOffset = sectionHeight * 0.2;

        // Cek jika posisi scroll berada dalam rentang section dengan offset
        if (scrollPos >= sectionTop - sectionOffset && scrollPos < sectionTop + sectionHeight) {
            const currentId = section.getAttribute('id'); // Mengambil id dari section yang aktif
            navLinks.forEach(link => {
                link.classList.remove('active-link'); // Menghapus active-link dari semua nav-link
                if (link.getAttribute('href') === '#' + currentId) {
                    link.classList.add('active-link'); // Menambahkan active-link pada nav-link yang sesuai
                }
            });
        }
    });
});
