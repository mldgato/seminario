<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videos Educativos - Gestión de Residuos EFPEM</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #FFFFFF;
            color: #000000;
            overflow-x: hidden;
        }

        /* Header */
        header {
            background: linear-gradient(135deg, #0E2144 0%, #437DBF 100%);
            padding: 0;
            position: relative;
            overflow: hidden;
        }

        .header-top {
            background-color: #b0142b;
            height: 8px;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 5%;
            position: relative;
            z-index: 10;
        }

        .logo-section {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .logo-usac,
        .logo-efpem {
            height: 80px;
            width: auto;
            filter: drop-shadow(0 4px 6px rgba(0, 0, 0, 0.2));
        }

        .title-section h1 {
            color: #FFFFFF;
            font-size: 2rem;
            font-weight: 700;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .title-section p {
            color: #12A1DC;
            font-size: 1rem;
            margin-top: 5px;
        }

        /* Navigation */
        nav {
            background-color: rgba(14, 33, 68, 0.95);
            padding: 15px 5%;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        nav ul {
            display: flex;
            justify-content: center;
            list-style: none;
            gap: 30px;
            flex-wrap: wrap;
        }

        nav ul li a {
            color: #FFFFFF;
            text-decoration: none;
            font-weight: 500;
            padding: 10px 20px;
            border-radius: 25px;
            transition: all 0.3s ease;
        }

        nav ul li a:hover,
        nav ul li a.active {
            background-color: #12A1DC;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(18, 161, 220, 0.4);
        }

        /* Breadcrumb */
        .breadcrumb {
            background-color: #f5f5f5;
            padding: 15px 5%;
            font-size: 0.9rem;
        }

        .breadcrumb a {
            color: #437DBF;
            text-decoration: none;
        }

        .breadcrumb a:hover {
            text-decoration: underline;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #437DBF 0%, #12A1DC 100%);
            padding: 60px 5%;
            text-align: center;
            position: relative;
        }

        .hero h2 {
            color: #FFFFFF;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .hero p {
            color: #FFFFFF;
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto;
        }

        /* Container */
        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 60px 5%;
        }

        .section-title {
            text-align: center;
            color: #0E2144;
            font-size: 2rem;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 15px;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: linear-gradient(90deg, #b0142b, #12A1DC);
            border-radius: 2px;
        }

        .section-description {
            text-align: center;
            color: #437DBF;
            font-size: 1.1rem;
            margin-bottom: 50px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        /* Filter Buttons */
        .filter-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }

        .filter-btn {
            padding: 10px 25px;
            background: #FFFFFF;
            border: 2px solid #437DBF;
            color: #437DBF;
            border-radius: 25px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
            font-size: 0.95rem;
        }

        .filter-btn:hover,
        .filter-btn.active {
            background: #437DBF;
            color: #FFFFFF;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(67, 125, 191, 0.3);
        }

        /* Videos Grid */
        .videos-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(380px, 1fr));
            gap: 35px;
            margin-bottom: 60px;
        }

        .video-card {
            background: #FFFFFF;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }

        .video-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 40px rgba(18, 161, 220, 0.3);
            border-color: #12A1DC;
        }

        .video-placeholder {
            width: 100%;
            aspect-ratio: 16/9;
            background: linear-gradient(135deg, #0E2144 0%, #437DBF 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            color: #12A1DC;
            position: relative;
            overflow: hidden;
        }

        .video-placeholder::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="20" cy="20" r="2" fill="rgba(18,161,220,0.3)"/><circle cx="80" cy="40" r="3" fill="rgba(18,161,220,0.2)"/><circle cx="50" cy="70" r="2.5" fill="rgba(18,161,220,0.25)"/><circle cx="30" cy="90" r="2" fill="rgba(18,161,220,0.3)"/></svg>');
            background-size: 100px 100px;
        }

        .video-placeholder .play-icon {
            font-size: 5rem;
            margin-bottom: 15px;
            position: relative;
            z-index: 1;
            filter: drop-shadow(0 4px 8px rgba(0, 0, 0, 0.3));
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .video-placeholder:hover .play-icon {
            transform: scale(1.1);
            color: #FFFFFF;
        }

        .video-placeholder .video-duration {
            position: absolute;
            bottom: 10px;
            right: 10px;
            background: rgba(0, 0, 0, 0.8);
            color: #FFFFFF;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 0.85rem;
            font-weight: 600;
            z-index: 2;
        }

        .video-info {
            padding: 25px;
        }

        .video-category {
            display: inline-block;
            background: #12A1DC;
            color: #FFFFFF;
            padding: 5px 15px;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: 600;
            margin-bottom: 12px;
        }

        .video-category.tutorial {
            background: #437DBF;
        }

        .video-category.documental {
            background: #b0142b;
        }

        .video-category.testimonio {
            background: #aa132a;
        }

        .video-info h3 {
            color: #0E2144;
            font-size: 1.3rem;
            margin-bottom: 12px;
            line-height: 1.4;
        }

        .video-info p {
            color: #000000;
            line-height: 1.6;
            font-size: 0.95rem;
            margin-bottom: 15px;
        }

        .video-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 15px;
            border-top: 2px solid #f0f0f0;
        }

        .video-stats {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .stat-item {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #437DBF;
            font-size: 0.9rem;
        }

        .stat-item .icon {
            font-size: 1.2rem;
        }

        .like-button {
            background: linear-gradient(135deg, #b0142b, #aa132a);
            color: #FFFFFF;
            border: none;
            padding: 10px 20px;
            border-radius: 25px;
            cursor: pointer;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
            font-size: 0.9rem;
        }

        .like-button:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 12px rgba(176, 20, 43, 0.4);
        }

        .like-button .heart-icon {
            font-size: 1.2rem;
            animation: heartBeat 1.5s infinite;
        }

        @keyframes heartBeat {

            0%,
            100% {
                transform: scale(1);
            }

            25% {
                transform: scale(1.1);
            }

            50% {
                transform: scale(1);
            }
        }

        /* Featured Video */
        .featured-section {
            background: linear-gradient(135deg, #0E2144 0%, #437DBF 100%);
            padding: 60px 5%;
            margin-bottom: 60px;
            border-radius: 20px;
            position: relative;
            overflow: hidden;
        }

        .featured-section::before {
            content: '⭐';
            position: absolute;
            font-size: 15rem;
            opacity: 0.1;
            right: -50px;
            top: -50px;
            animation: rotate 20s linear infinite;
        }

        @keyframes rotate {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        .featured-content {
            display: grid;
            grid-template-columns: 1.5fr 1fr;
            gap: 40px;
            align-items: center;
            position: relative;
            z-index: 1;
        }

        .featured-video {
            background: #000000;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.5);
        }

        .featured-video video {
            width: 100%;
            height: 100%;
            min-height: 400px;
            /* Altura mínima */
            max-height: 500px;
            /* Altura máxima */
            object-fit: cover;
            /* Importante: hace que el video llene el contenedor */
            border-radius: 15px;
        }

        .featured-placeholder {
            width: 100%;
            aspect-ratio: 16/9;
            background: linear-gradient(135deg, #000000 0%, #1a1a1a 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #12A1DC;
            font-size: 6rem;
            position: relative;
        }

        .featured-placeholder .play-icon {
            filter: drop-shadow(0 8px 16px rgba(0, 0, 0, 0.6));
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .featured-placeholder:hover .play-icon {
            transform: scale(1.15);
            color: #FFFFFF;
        }

        .featured-info {
            color: #FFFFFF;
        }

        .featured-badge {
            display: inline-block;
            background: #b0142b;
            color: #FFFFFF;
            padding: 8px 20px;
            border-radius: 20px;
            font-weight: 700;
            margin-bottom: 20px;
            font-size: 0.9rem;
        }

        .featured-info h2 {
            font-size: 2.2rem;
            margin-bottom: 20px;
            color: #12A1DC;
        }

        .featured-info p {
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 25px;
        }

        .featured-stats {
            display: flex;
            gap: 30px;
            margin-bottom: 25px;
        }

        .featured-stat {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .featured-stat .icon {
            font-size: 1.5rem;
            color: #12A1DC;
        }

        .watch-btn {
            background: #12A1DC;
            color: #FFFFFF;
            border: none;
            padding: 15px 35px;
            border-radius: 30px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 1rem;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .watch-btn:hover {
            background: #437DBF;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(18, 161, 220, 0.4);
        }

        /* Info Section */
        .info-section {
            background: #f8f9fa;
            padding: 50px;
            border-radius: 20px;
            margin-bottom: 60px;
            border-left: 6px solid #12A1DC;
        }

        .info-section h3 {
            color: #0E2144;
            font-size: 1.8rem;
            margin-bottom: 20px;
        }

        .info-section p {
            color: #000000;
            line-height: 1.8;
            font-size: 1.05rem;
        }

        /* Footer */
        footer {
            background: #0E2144;
            color: #FFFFFF;
            padding: 40px 5%;
            text-align: center;
            margin-top: 60px;
        }

        footer a {
            color: #12A1DC;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .videos-grid {
                grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            }

            .featured-content {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                text-align: center;
            }

            .title-section h1 {
                font-size: 1.5rem;
            }

            .hero h2 {
                font-size: 1.8rem;
            }

            .videos-grid {
                grid-template-columns: 1fr;
            }

            .filter-buttons {
                flex-direction: column;
            }

            .filter-btn {
                width: 100%;
            }

            .featured-info h2 {
                font-size: 1.6rem;
            }

            .info-section {
                padding: 30px;
            }
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header>
        <div class="header-top"></div>
        <div class="header-content">
            <div class="logo-section">
                <img src="Escudo USAC fondos oscuros.png" alt="USAC" class="logo-usac">
                <img src="logo invertido EFPEM.png" alt="EFPEM" class="logo-efpem">
            </div>
            <div class="title-section">
                <h1>Proyecto de Gestión Integral de Residuos</h1>
                <p>EFPEM - Universidad de San Carlos de Guatemala</p>
            </div>
        </div>
    </header>

    <!-- Navigation -->
    <nav>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="proyecto.php">El Proyecto</a></li>
            <li><a href="videos.php" class="active">Videos</a></li>
            <li><a href="juegos.php">Juegos</a></li>
            <li><a href="recursos.php">Recursos</a></li>
            <li><a href="contacto.php">Contacto</a></li>
        </ul>
    </nav>

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
                            <source src="intro.mp4" type="video/mp4">
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