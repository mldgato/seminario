/**
 * ===================================
 * Proyecto de Gestión de Residuos
 * EFPEM USAC - JavaScript Principal
 * ===================================
 */

/**
 * Función para filtrar videos por categoría
 * @param {string} category - Categoría de videos a mostrar ('todos', 'tutorial', 'documental', 'testimonio')
 */
function filterVideos(category) {
    const videos = document.querySelectorAll('.video-card');
    const buttons = document.querySelectorAll('.filter-btn');

    // Actualizar botones activos
    buttons.forEach(btn => btn.classList.remove('active'));

    // Obtener el botón que disparó el evento
    if (event && event.target) {
        event.target.classList.add('active');
    }

    // Filtrar videos con animación
    videos.forEach(video => {
        if (category === 'todos') {
            // Mostrar todos los videos
            video.style.display = 'block';
            setTimeout(() => {
                video.style.opacity = '1';
                video.style.transform = 'scale(1)';
            }, 10);
        } else if (video.getAttribute('data-category') === category) {
            // Mostrar videos de la categoría seleccionada
            video.style.display = 'block';
            setTimeout(() => {
                video.style.opacity = '1';
                video.style.transform = 'scale(1)';
            }, 10);
        } else {
            // Ocultar videos que no coinciden con la categoría
            video.style.opacity = '0';
            video.style.transform = 'scale(0.9)';
            setTimeout(() => {
                video.style.display = 'none';
            }, 300);
        }
    });
}

/**
 * Inicialización cuando el DOM está listo
 */
document.addEventListener('DOMContentLoaded', function () {
    // Inicializar estilos de transición para videos
    initializeVideoTransitions();

    // Inicializar otros componentes si es necesario
    initializeComponents();

    // Manejar navegación smooth scroll si hay enlaces internos
    initializeSmoothScroll();

    // Inicializar animaciones de scroll
    initializeScrollAnimations();
});

/**
 * Inicializar transiciones CSS para las tarjetas de video
 */
function initializeVideoTransitions() {
    const videos = document.querySelectorAll('.video-card');
    videos.forEach(video => {
        video.style.transition = 'all 0.3s ease';
    });
}

/**
 * Inicializar componentes adicionales
 */
function initializeComponents() {
    // Inicializar botones de like si existen
    initializeLikeButtons();

    // Inicializar reproductor de video si existe
    initializeVideoPlayer();

    // Inicializar contador de estadísticas animado
    initializeStatsCounter();
}

/**
 * Inicializar botones de "Me gusta"
 */
function initializeLikeButtons() {
    const likeButtons = document.querySelectorAll('.like-button');

    likeButtons.forEach(button => {
        button.addEventListener('click', function (e) {
            e.preventDefault();

            // Toggle clase "liked"
            this.classList.toggle('liked');

            // Cambiar texto del botón
            const buttonText = this.querySelector('span:last-child');
            if (this.classList.contains('liked')) {
                buttonText.textContent = 'Te gusta';
                this.style.background = 'linear-gradient(135deg, #28a745, #5cb85c)';
            } else {
                buttonText.textContent = 'Me gusta';
                this.style.background = 'linear-gradient(135deg, #ff6b6b, #ff8787)';
            }

            // Animación de pulso
            this.style.transform = 'scale(1.2)';
            setTimeout(() => {
                this.style.transform = 'scale(1.1)';
            }, 200);
        });
    });
}

/**
 * Inicializar reproductor de video principal
 */
function initializeVideoPlayer() {
    const videoContainers = document.querySelectorAll('.video-container video');

    videoContainers.forEach(video => {
        // Agregar controles personalizados si es necesario
        video.addEventListener('play', function () {
            console.log('Video iniciado');
        });

        video.addEventListener('pause', function () {
            console.log('Video pausado');
        });

        video.addEventListener('ended', function () {
            console.log('Video finalizado');
        });
    });

    // Manejar clics en placeholders de video
    const videoPlaceholders = document.querySelectorAll('.video-placeholder');
    videoPlaceholders.forEach(placeholder => {
        placeholder.addEventListener('click', function () {
            // Aquí puedes agregar lógica para abrir el video en un modal
            // o redirigir a una página de reproducción
            console.log('Video placeholder clickeado');
        });
    });
}

/**
 * Inicializar smooth scroll para enlaces internos
 */
function initializeSmoothScroll() {
    const links = document.querySelectorAll('a[href^="#"]');

    links.forEach(link => {
        link.addEventListener('click', function (e) {
            const href = this.getAttribute('href');

            // Solo procesar si es un enlace interno válido
            if (href && href !== '#' && href.length > 1) {
                const targetElement = document.querySelector(href);

                if (targetElement) {
                    e.preventDefault();

                    // Calcular posición considerando el header sticky
                    const headerOffset = 100;
                    const elementPosition = targetElement.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });
}

/**
 * Inicializar animaciones al hacer scroll
 */
function initializeScrollAnimations() {
    const animatedElements = document.querySelectorAll('.card, .stat-card, .video-card');

    // Crear el observer
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -100px 0px'
    });

    // Preparar elementos y observar
    animatedElements.forEach(element => {
        element.style.opacity = '0';
        element.style.transform = 'translateY(20px)';
        element.style.transition = 'all 0.6s ease';
        observer.observe(element);
    });
}

/**
 * Contador animado para estadísticas
 */
function initializeStatsCounter() {
    const statNumbers = document.querySelectorAll('.stat-number');

    const animateValue = (element, start, end, duration) => {
        let startTimestamp = null;
        const step = (timestamp) => {
            if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 1);

            // Easing function para una animación más suave
            const easeOutQuad = progress * (2 - progress);

            element.textContent = Math.floor(easeOutQuad * (end - start) + start).toLocaleString();

            if (progress < 1) {
                window.requestAnimationFrame(step);
            } else {
                // Agregar símbolo si es necesario (%, +, etc.)
                const originalText = element.getAttribute('data-suffix');
                if (originalText) {
                    element.textContent = element.textContent + originalText;
                }
            }
        };
        window.requestAnimationFrame(step);
    };

    // Crear observer para animar cuando sea visible
    const statsObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const element = entry.target;
                const finalValue = parseInt(element.textContent.replace(/\D/g, ''));

                if (finalValue) {
                    animateValue(element, 0, finalValue, 2000);
                    statsObserver.unobserve(element);
                }
            }
        });
    }, {
        threshold: 0.5
    });

    statNumbers.forEach(stat => {
        statsObserver.observe(stat);
    });
}

/**
 * Función para manejar el menú móvil (si se agrega en el futuro)
 */
function initializeMobileMenu() {
    // Preparado para agregar funcionalidad de menú móvil
    const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
    const navMenu = document.querySelector('nav ul');

    if (mobileMenuToggle && navMenu) {
        mobileMenuToggle.addEventListener('click', function () {
            navMenu.classList.toggle('active');
            this.classList.toggle('active');
        });
    }
}

/**
 * Función para manejar la carga lazy de imágenes
 */
function initializeLazyLoading() {
    const images = document.querySelectorAll('img[data-src]');

    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.add('loaded');
                observer.unobserve(img);
            }
        });
    }, {
        rootMargin: '50px 0px',
        threshold: 0.01
    });

    images.forEach(img => imageObserver.observe(img));
}

/**
 * Función helper para debounce (optimización de eventos)
 */
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

/**
 * Manejar eventos de scroll optimizados
 */
window.addEventListener('scroll', debounce(function () {
    // Agregar clase al nav cuando se hace scroll
    const nav = document.querySelector('nav');
    if (nav) {
        if (window.scrollY > 100) {
            nav.classList.add('scrolled');
        } else {
            nav.classList.remove('scrolled');
        }
    }

    // Mostrar/ocultar botón de scroll to top
    const scrollTopBtn = document.querySelector('.scroll-to-top');
    if (scrollTopBtn) {
        if (window.scrollY > 500) {
            scrollTopBtn.classList.add('visible');
        } else {
            scrollTopBtn.classList.remove('visible');
        }
    }
}, 100));

/**
 * Función para scroll to top
 */
function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}

// Exportar funciones para uso global si es necesario
window.filterVideos = filterVideos;
window.scrollToTop = scrollToTop;

