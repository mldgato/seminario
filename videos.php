<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videos Educativos - Gestión de Residuos EFPEM</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Header -->
    <header>
        <div class="header-top"></div>
        <div class="header-content">
            <div class="logo-section">
                <img src="img/Escudo USAC fondos oscuros.png" alt="USAC" class="logo-usac">
                <img src="img/logo invertido EFPEM.png" alt="EFPEM" class="logo-efpem">
            </div>
            <div class="title-section">
                <h1>Proyecto de Gestión Integral de Residuos</h1>
                <p>EFPEM - Universidad de San Carlos de Guatemala</p>
            </div>
        </div>
    </header>

    <!-- Navigation -->
    <div class="nav-container">
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="proyecto.php">El Proyecto</a></li>
                <li><a href="videos.php">Videos</a></li>
                <li><a href="juegos.php">Juegos</a></li>
                <li><a href="recursos.php">Recursos</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </nav>
        <div id="franja"></div>
    </div>

    <!-- Breadcrumb -->
    <div class="breadcrumb">
        <a href="index.php">Inicio</a> / <span>Videos Educativos</span>
    </div>

    <!-- Hero Section -->
    <section class="hero">
        <h2>📹 Videos Educativos</h2>
        <p>Aprende sobre gestión de residuos sólidos a través de contenido audiovisual dinámico y educativo</p>
    </section>

    <!-- Main Content -->
    <div class="container">
        <!-- Featured Video Section -->
        <div class="featured-section">
            <div class="featured-content">
                <div class="featured-video">
                    <div class="featured-video">
                        <video controls poster="intro-thumbnail.jpg" style="width: 100%; border-radius: 15px;">
                            <source src="mp4/intro.mp4" type="video/mp4">
                            Tu navegador no soporta la reproducción de videos.
                        </video>
                    </div>
                </div>
                <div class="featured-info">
                    <span class="featured-badge">⭐ VIDEO DESTACADO</span>
                    <h2>Introducción al Proyecto EFPEM</h2>
                    <p>Conoce los objetivos, alcances y beneficios de nuestro proyecto de gestión integral de residuos sólidos en EFPEM. Un viaje hacia la sostenibilidad ambiental.</p>
                    <div class="featured-stats">
                        <div class="featured-stat">
                            <span class="icon">👁️</span>
                            <span>1,234 vistas</span>
                        </div>
                        <div class="featured-stat">
                            <span class="icon">⏱️</span>
                            <span>8:45 min</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Info Section -->
        <div class="info-section">
            <h3>🎬 Sobre Nuestros Videos</h3>
            <p>Cada video ha sido cuidadosamente diseñado para enseñar de manera práctica y entretenida los conceptos fundamentales de la gestión de residuos. Nuestro contenido está creado por estudiantes de EFPEM con el apoyo de docentes expertos, garantizando calidad educativa y rigor científico.</p>
        </div>

        <!-- Filter Buttons -->
        <div class="filter-buttons">
            <button class="filter-btn active" onclick="filterVideos('todos')">📚 Todos</button>
            <button class="filter-btn" onclick="filterVideos('tutorial')">🎯 Tutoriales</button>
            <button class="filter-btn" onclick="filterVideos('documental')">🎥 Documentales</button>
            <button class="filter-btn" onclick="filterVideos('testimonio')">💬 Testimonios</button>
        </div>

        <h2 class="section-title">Biblioteca de Videos</h2>
        <p class="section-description">Explora nuestra colección completa de videos educativos sobre gestión de residuos</p>

        <!-- Videos Grid -->
        <div class="videos-grid">
            <!-- Video 1 -->
            <div class="video-card" data-category="tutorial">
                <div class="video-placeholder">
                    <span class="play-icon">▶️</span>
                    <span class="video-duration">10:24</span>
                </div>
                <div class="video-info">
                    <span class="video-category tutorial">Tutorial</span>
                    <h3>¿Cómo Separar Correctamente los Residuos?</h3>
                    <p>Aprende la clasificación correcta de residuos orgánicos, inorgánicos y reciclables con ejemplos prácticos del día a día.</p>
                    <div class="video-meta">
                        <div class="video-stats">
                            <div class="stat-item">
                                <span class="icon">👁️</span>
                                <span>856</span>
                            </div>
                            <div class="stat-item">
                                <span class="icon">📅</span>
                                <span>Hace 3 días</span>
                            </div>
                        </div>
                        <button class="like-button">
                            <span class="heart-icon">❤️</span>
                            <span>Me gusta</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Video 2 -->
            <div class="video-card" data-category="documental">
                <div class="video-placeholder">
                    <span class="play-icon">▶️</span>
                    <span class="video-duration">15:30</span>
                </div>
                <div class="video-info">
                    <span class="video-category documental">Documental</span>
                    <h3>El Impacto Ambiental de los Residuos en Guatemala</h3>
                    <p>Documental sobre la problemática actual de gestión de residuos en Guatemala y sus efectos en el medio ambiente.</p>
                    <div class="video-meta">
                        <div class="video-stats">
                            <div class="stat-item">
                                <span class="icon">👁️</span>
                                <span>1,542</span>
                            </div>
                            <div class="stat-item">
                                <span class="icon">📅</span>
                                <span>Hace 1 semana</span>
                            </div>
                        </div>
                        <button class="like-button">
                            <span class="heart-icon">❤️</span>
                            <span>Me gusta</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Video 3 -->
            <div class="video-card" data-category="tutorial">
                <div class="video-placeholder">
                    <span class="play-icon">▶️</span>
                    <span class="video-duration">12:15</span>
                </div>
                <div class="video-info">
                    <span class="video-category tutorial">Tutorial</span>
                    <h3>Compostaje Casero: Paso a Paso</h3>
                    <p>Guía completa para crear tu propio sistema de compostaje en casa y transformar residuos orgánicos en abono natural.</p>
                    <div class="video-meta">
                        <div class="video-stats">
                            <div class="stat-item">
                                <span class="icon">👁️</span>
                                <span>2,103</span>
                            </div>
                            <div class="stat-item">
                                <span class="icon">📅</span>
                                <span>Hace 2 semanas</span>
                            </div>
                        </div>
                        <button class="like-button">
                            <span class="heart-icon">❤️</span>
                            <span>Me gusta</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Video 4 -->
            <div class="video-card" data-category="testimonio">
                <div class="video-placeholder">
                    <span class="play-icon">▶️</span>
                    <span class="video-duration">8:45</span>
                </div>
                <div class="video-info">
                    <span class="video-category testimonio">Testimonio</span>
                    <h3>Estudiantes EFPEM: Nuestra Experiencia</h3>
                    <p>Testimonios de estudiantes sobre su participación en el proyecto de gestión de residuos y su impacto formativo.</p>
                    <div class="video-meta">
                        <div class="video-stats">
                            <div class="stat-item">
                                <span class="icon">👁️</span>
                                <span>678</span>
                            </div>
                            <div class="stat-item">
                                <span class="icon">📅</span>
                                <span>Hace 4 días</span>
                            </div>
                        </div>
                        <button class="like-button">
                            <span class="heart-icon">❤️</span>
                            <span>Me gusta</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Video 5 -->
            <div class="video-card" data-category="documental">
                <div class="video-placeholder">
                    <span class="play-icon">▶️</span>
                    <span class="video-duration">18:20</span>
                </div>
                <div class="video-info">
                    <span class="video-category documental">Documental</span>
                    <h3>Reglamento 164-2021: ¿Qué Necesitas Saber?</h3>
                    <p>Explicación detallada del Reglamento para la Gestión Integral de Residuos y su aplicación en instituciones educativas.</p>
                    <div class="video-meta">
                        <div class="video-stats">
                            <div class="stat-item">
                                <span class="icon">👁️</span>
                                <span>1,289</span>
                            </div>
                            <div class="stat-item">
                                <span class="icon">📅</span>
                                <span>Hace 5 días</span>
                            </div>
                        </div>
                        <button class="like-button">
                            <span class="heart-icon">❤️</span>
                            <span>Me gusta</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p><strong>Escuela de Formación de Profesores de Enseñanza Media - EFPEM</strong></p>
        <p>Universidad de San Carlos de Guatemala</p>
        <p>Seminario 2025 | <a href="https://www.efpemusac.org/" target="_blank">www.efpemusac.org</a></p>
        <p style="margin-top: 20px; font-size: 0.9rem;">Proyecto desarrollado por estudiantes de Licenciatura en Computación e Informática</p>
    </footer>

    <script>
        function filterVideos(category) {
            const videos = document.querySelectorAll('.video-card');
            const buttons = document.querySelectorAll('.filter-btn');

            // Actualizar botones activos
            buttons.forEach(btn => btn.classList.remove('active'));
            event.target.classList.add('active');

            // Filtrar videos
            videos.forEach(video => {
                if (category === 'todos') {
                    video.style.display = 'block';
                    setTimeout(() => {
                        video.style.opacity = '1';
                        video.style.transform = 'scale(1)';
                    }, 10);
                } else if (video.getAttribute('data-category') === category) {
                    video.style.display = 'block';
                    setTimeout(() => {
                        video.style.opacity = '1';
                        video.style.transform = 'scale(1)';
                    }, 10);
                } else {
                    video.style.opacity = '0';
                    video.style.transform = 'scale(0.9)';
                    setTimeout(() => {
                        video.style.display = 'none';
                    }, 300);
                }
            });
        }

        // Inicializar estilos de transición
        document.addEventListener('DOMContentLoaded', function() {
            const videos = document.querySelectorAll('.video-card');
            videos.forEach(video => {
                video.style.transition = 'all 0.3s ease';
            });
        });
    </script>
</body>

</html>