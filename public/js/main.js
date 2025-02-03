function openModal(img) {
    const modal = document.getElementById('imageModal');
    const modalImg = document.getElementById('modalImage');
    const modalCaption = document.getElementById('modalCaption');
    
    modal.style.display = 'flex';
    modalImg.src = img.src;
    modalImg.alt = img.alt;
    
    // Set caption based on image
    if (img.classList.contains('profile-image')) {
        modalCaption.textContent = 'Bryce Canyon, 2024';
    } else if (img.classList.contains('barista-image')) {
        modalCaption.textContent = 'Opening Rowhome 2, 2023';
    }
    
    modal.classList.add('show');
}

function toggleMenu() {
    const hamburger = document.querySelector('.hamburger');
    const nav = document.querySelector('nav');
    
    hamburger.classList.toggle('active');
    nav.classList.toggle('active');
}

// Close menu when clicking outside
document.addEventListener('click', (e) => {
    const nav = document.querySelector('nav');
    const hamburger = document.querySelector('.hamburger');
    if (nav.classList.contains('active') && 
        !nav.contains(e.target) && 
        !hamburger.contains(e.target)) {
        nav.classList.remove('active');
        hamburger.classList.remove('active');
    }
});

document.addEventListener('DOMContentLoaded', () => {
    const modal = document.getElementById('imageModal');
    const closeBtn = document.querySelector('.close-modal');

    closeBtn.onclick = () => {
        modal.classList.remove('show');
        setTimeout(() => modal.style.display = 'none', 300);
    };

    window.onclick = (e) => {
        if (e.target === modal) {
            modal.classList.remove('show');
            setTimeout(() => modal.style.display = 'none', 300);
        }
    };

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && modal.classList.contains('show')) {
            modal.classList.remove('show');
            setTimeout(() => modal.style.display = 'none', 300);
        }
    });

    // Close menu when clicking a link
    document.querySelectorAll('nav a').forEach(link => {
        link.addEventListener('click', () => {
            document.querySelector('.hamburger').classList.remove('active');
            document.querySelector('nav').classList.remove('active');
        });
    });

    // Close menu when clicking outside
    document.addEventListener('click', (e) => {
        const nav = document.querySelector('nav');
        const hamburger = document.querySelector('.hamburger');
        if (nav.classList.contains('active') && 
            !nav.contains(e.target) && 
            !hamburger.contains(e.target)) {
            nav.classList.remove('active');
            hamburger.classList.remove('active');
        }
    });
    
    initCarousel();
});

function initCarousel() {
    const track = document.querySelector('.carousel-track');
    const prev = document.querySelector('.carousel-button.prev');
    const next = document.querySelector('.carousel-button.next');
    const images = track.querySelectorAll('img');
    let currentIndex = 0;

    function updateTrack() {
        track.style.transform = `translateX(-${currentIndex * 100}%)`;
    }

    prev.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        updateTrack();
    });

    next.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % images.length;
        updateTrack();
    });
}