// Botão Voltar ao Topo
const btnTopo = document.getElementById('btnTopo');
const header = document.querySelector('header');
const headerAltura = header ? header.offsetHeight : 80;

function getScrollTop() {
    return window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;
}

if (btnTopo) {
    window.addEventListener('scroll', () => {
        if (getScrollTop() > headerAltura) {
            btnTopo.style.display = 'block';
        } else {
            btnTopo.style.display = 'none';
        }
    });

    btnTopo.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
}


// Relógio e Data
function updateClockAndDate() {
    const now = new Date();
    const time = now.toLocaleTimeString('pt-PT', { hour12: false });
    const options = { year: 'numeric', month: 'long', day: 'numeric' };
    let date = now.toLocaleDateString('pt-PT', options);
    const parts = date.split(' de ');
    if (parts.length >= 2) {
        parts[1] = parts[1].charAt(0).toUpperCase() + parts[1].slice(1);
        date = parts.join(' de ');
    }
    const dateEl = document.getElementById('date');
    const clockEl = document.getElementById('clock');
    if (dateEl && clockEl) {
        dateEl.textContent = date;
        clockEl.textContent = time;
    }
}
setInterval(updateClockAndDate, 1000);
updateClockAndDate();

// Animação da DragonBall
const ball = document.querySelector('.fourstarball img');
if (ball) {
    let rotating = false;
    let startTime = null;
    let currentAngle = 0;
    let animationId;
    let angleOffset = 0;
    function rotate(timestamp) {
        if (!startTime) startTime = timestamp;
        const elapsed = timestamp - startTime;
        currentAngle = (elapsed * 0.09) + angleOffset;
        ball.style.transform = `rotate(${currentAngle}deg)`;
        animationId = requestAnimationFrame(rotate);
    }
    ball.addEventListener('click', () => {
        if (!rotating) {
            rotating = true;
            startTime = null;
            animationId = requestAnimationFrame(rotate);
        } else {
            rotating = false;
            cancelAnimationFrame(animationId);
            angleOffset = currentAngle;
        }
    });
}

// Menu Hamburguer
const hamburger = document.querySelector('.hamburger');
const navMenu = document.querySelector('.nav-menu');
if (hamburger && navMenu) {
    hamburger.addEventListener('click', () => {
        navMenu.classList.toggle('active');
    });
}

// Carousel TikTok
const myCarousel = document.querySelector('#tiktokCarousel');
if (myCarousel) {
    const carousel = new bootstrap.Carousel(myCarousel, {
        interval: false,
        ride: false,
        pause: true,
        wrap: true
    });
}

// Carrega script TikTok
const tiktokScript = document.createElement('script');
tiktokScript.src = 'https://www.tiktok.com/embed.js';
tiktokScript.async = true;
document.head.appendChild(tiktokScript);