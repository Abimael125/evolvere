// --- FUNÇÃO PARA CRIAR CARROSSEL ---
function ativarCarrossel(idSlider, idBtnEsq, idBtnDir) {
    const slider = document.getElementById(idSlider);
    const prevBtn = document.getElementById(idBtnEsq);
    const nextBtn = document.getElementById(idBtnDir);
    const scrollAmount = 300; // Quanto rola por clique

    if (slider && prevBtn && nextBtn) {
        nextBtn.addEventListener('click', () => {
            slider.scrollLeft += scrollAmount;
        });

        prevBtn.addEventListener('click', () => {
            slider.scrollLeft -= scrollAmount;
        });
    } else {
        console.warn(`Alerta: Elementos do carrossel ${idSlider} não encontrados.`);
    }
}

// --- ATIVAR OS CARROSSÉIS ---
ativarCarrossel('slider', 'prevBtn', 'nextBtn');
ativarCarrossel('slider-clientes', 'prevBtnClientes', 'nextBtnClientes');

// --- LÓGICA EXCLUSIVA PARA FEEDBACKS ---
const trackFeedback = document.getElementById('trackFeedback');
const btnFeedPrev = document.getElementById('btnFeedPrev');
const btnFeedNext = document.getElementById('btnFeedNext');

if (trackFeedback && btnFeedPrev && btnFeedNext) {
    // Calcula a largura do card + o gap (espaço)
    // 320px do card + 30px do gap = 350px
    const moveAmount = 350;

    btnFeedNext.addEventListener('click', () => {
        trackFeedback.scrollLeft += moveAmount;
    });

    btnFeedPrev.addEventListener('click', () => {
        trackFeedback.scrollLeft -= moveAmount;
    });
}

// --- LÓGICA PARA CARDS DE SOLUÇÕES (SANFONA) ---
function toggleCard(element) {
    const isAlreadyActive = element.classList.contains('ativo');
    const allCards = document.querySelectorAll('.card');
    
    allCards.forEach(card => {
        card.classList.remove('ativo');
    });

    if (!isAlreadyActive) {
        element.classList.add('ativo');
    }
}

// --- SCRIPT PARA AS ABAS DOS PACOTES CONTÁBEIS ---
document.querySelectorAll('.tab-btn').forEach(button => {
    button.addEventListener('click', () => {
        document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active'));
        document.querySelectorAll('.tab-content').forEach(content => content.classList.remove('active'));
        
        button.classList.add('active');
        document.getElementById(button.getAttribute('data-tab')).classList.add('active');
    });
});

// --- MENU MOBILE SCRIPT ---
const menuToggle = document.getElementById('menuToggle');
const menuNav = document.getElementById('menuNav');

if (menuToggle && menuNav) {
    menuToggle.addEventListener('click', () => {
        menuNav.classList.toggle('active');
    });

    // Fecha o menu ao clicar em algum link
    menuNav.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
            menuNav.classList.remove('active');
        });
    });
}
