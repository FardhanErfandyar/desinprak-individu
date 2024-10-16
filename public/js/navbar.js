document.addEventListener('scroll', function() {
    const sections = document.querySelectorAll('div[id]'); 
    const navLinks = document.querySelectorAll('.nav-link'); 

    let scrollPos = window.scrollY; 

    sections.forEach(section => {
        const sectionTop = section.offsetTop; 
        const sectionHeight = section.clientHeight; 

       
        const sectionOffset = sectionHeight * 0.2;

        
        if (scrollPos >= sectionTop - sectionOffset && scrollPos < sectionTop + sectionHeight) {
            const currentId = section.getAttribute('id'); 
            navLinks.forEach(link => {
                link.classList.remove('active-link'); 
                if (link.getAttribute('href') === '/#' + currentId) {
                    link.classList.add('active-link'); 
                }
            });
        }
    });
});
