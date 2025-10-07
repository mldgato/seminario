<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto de Gestión de Residuos - EFPEM USAC</title>
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
            position: relative;
        }

        nav ul li a:hover {
            background-color: #12A1DC;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(18, 161, 220, 0.4);
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #437DBF 0%, #12A1DC 100%);
            padding: 80px 5%;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"><path d="M0,60 Q300,20 600,60 T1200,60 L1200,0 L0,0 Z" fill="rgba(14,33,68,0.1)"/></svg>');
            background-size: cover;
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        .hero h2 {
            color: #FFFFFF;
            font-size: 2.5rem;
            margin-bottom: 20px;
            animation: fadeInUp 1s ease;
        }

        .hero p {
            color: #FFFFFF;
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.6;
            animation: fadeInUp 1.2s ease;
        }

        /* Main Content */
        .container {
            max-width: 1200px;
            margin: 60px auto;
            padding: 0 5%;
        }

        .section-title {
            text-align: center;
            color: #0E2144;
            font-size: 2rem;
            margin-bottom: 40px;
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

        /* Cards Grid */
        .cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 60px;
        }

        .card {
            background: #FFFFFF;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            border-top: 4px solid #12A1DC;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(18, 161, 220, 0.3);
        }

        .card h3 {
            color: #0E2144;
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        .card p {
            color: #000000;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .card .icon {
            font-size: 3rem;
            margin-bottom: 20px;
            display: block;
        }

        /* Video Section */
        .video-section {
            background: linear-gradient(135deg, #0E2144 0%, #437DBF 100%);
            padding: 60px 5%;
            margin: 60px 0;
            border-radius: 20px;
        }

        .video-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .video-card {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .video-card:hover {
            transform: scale(1.05);
            background: rgba(255, 255, 255, 0.2);
        }

        .video-placeholder {
            background: #000000;
            aspect-ratio: 16/9;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #12A1DC;
            font-size: 3rem;
        }

        .video-info {
            padding: 20px;
            color: #FFFFFF;
        }

        .video-info h4 {
            margin-bottom: 10px;
            color: #12A1DC;
        }

        /* Games Section */
        .games-section {
            padding: 60px 5%;
        }

        .games-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .game-card {
            background: linear-gradient(135deg, #437DBF, #12A1DC);
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            color: #FFFFFF;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .game-card::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transform: rotate(45deg);
            transition: all 0.5s ease;
        }

        .game-card:hover::before {
            left: 100%;
        }

        .game-card:hover {
            transform: translateY(-10px) scale(1.05);
            box-shadow: 0 15px 40px rgba(18, 161, 220, 0.5);
        }

        .game-icon {
            font-size: 4rem;
            margin-bottom: 20px;
        }

        .game-card h4 {
            font-size: 1.3rem;
            margin-bottom: 10px;
        }

        .btn {
            display: inline-block;
            padding: 12px 30px;
            background: #b0142b;
            color: #FFFFFF;
            text-decoration: none;
            border-radius: 25px;
            font-weight: 600;
            transition: all 0.3s ease;
            margin-top: 15px;
        }

        .btn:hover {
            background: #aa132a;
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(176, 20, 43, 0.4);
        }

        /* Footer */
        footer {
            background: #0E2144;
            color: #FFFFFF;
            padding: 40px 5%;
            text-align: center;
        }

        footer p {
            margin-bottom: 10px;
        }

        footer a {
            color: #12A1DC;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive */
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

            nav ul {
                gap: 15px;
            }

            nav ul li a {
                padding: 8px 15px;
                font-size: 0.9rem;
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
            <li><a href="videos.php">Videos</a></li>
            <li><a href="juegos.php">Juegos</a></li>
            <li><a href="recursos.php">Recursos</a></li>
            <li><a href="contacto.php">Contacto</a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h2>Transformando EFPEM con Educación Ambiental</h2>
            <p>Un proyecto interdisciplinario que integra estrategias didácticas innovadoras para el manejo sostenible de residuos sólidos en nuestra comunidad educativa.</p>
        </div>
    </section>

    <!-- Main Content -->
    <div class="container">
        <h2 class="section-title">¿Qué es este proyecto?</h2>

        <div class="cards-grid">
            <div class="card">
                <span class="icon">♻️</span>
                <h3>Gestión Integral</h3>
                <p>Implementación de estaciones de clasificación de residuos orgánicos, inorgánicos y reciclables en todo EFPEM.</p>
            </div>

            <div class="card">
                <span class="icon">🎓</span>
                <h3>Educación Ambiental</h3>
                <p>Formación de futuros docentes con competencias en sostenibilidad y responsabilidad ambiental.</p>
            </div>

            <div class="card">
                <span class="icon">🌱</span>
                <h3>Interdisciplinario</h3>
                <p>Integración de Matemática, Física, Química, Biología, Computación y Literatura en un proyecto común.</p>
            </div>

            <div class="card">
                <span class="icon">🎯</span>
                <h3>Impacto Social</h3>
                <p>Cumplimiento del Reglamento 164-2021 y creación de un modelo replicable en otras instituciones.</p>
            </div>
        </div>
    </div>

    <!-- Video Section -->
    <section class="video-section">
        <div class="container">
            <h2 class="section-title" style="color: #FFFFFF;">Videos Educativos</h2>
            <div class="video-grid">
                <div class="video-card">
                    <div class="video-placeholder">▶️</div>
                    <div class="video-info">
                        <h4>¿Cómo separar residuos?</h4>
                        <p>Aprende la clasificación correcta de residuos orgánicos, inorgánicos y reciclables.</p>
                    </div>
                </div>

                <div class="video-card">
                    <div class="video-placeholder">▶️</div>
                    <div class="video-info">
                        <h4>El Proyecto EFPEM</h4>
                        <p>Conoce los objetivos y alcances de nuestro proyecto de gestión de residuos.</p>
                    </div>
                </div>

                <div class="video-card">
                    <div class="video-placeholder">▶️</div>
                    <div class="video-info">
                        <h4>Compostaje Universitario</h4>
                        <p>Descubre cómo transformar residuos orgánicos en abono para el campus.</p>
                    </div>
                </div>
            </div>
            <div style="text-align: center; margin-top: 30px;">
                <a href="videos.php" class="btn">Ver todos los videos</a>
            </div>
        </div>
    </section>

    <!-- Games Section -->
    <section class="games-section">
        <div class="container">
            <h2 class="section-title">Juegos Interactivos</h2>
            <p style="text-align: center; margin-bottom: 40px; color: #437DBF; font-size: 1.1rem;">
                Aprende sobre gestión de residuos de forma divertida
            </p>

            <div class="games-grid">
                <div class="game-card" onclick="window.location.href='juego-clasificacion.php'">
                    <div class="game-icon">🎮</div>
                    <h4>Clasificador de Basura</h4>
                    <p>Arrastra los residuos al contenedor correcto</p>
                    <a href="juego-clasificacion.php" class="btn">Jugar</a>
                </div>

                <div class="game-card" onclick="window.location.href='juego-quiz.php'">
                    <div class="game-icon">❓</div>
                    <h4>Quiz Ambiental</h4>
                    <p>Pon a prueba tus conocimientos</p>
                    <a href="juego-quiz.php" class="btn">Jugar</a>
                </div>

                <div class="game-card" onclick="window.location.href='juego-memoria.php'">
                    <div class="game-icon">🧠</div>
                    <h4>Memoria Ecológica</h4>
                    <p>Encuentra las parejas de residuos</p>
                    <a href="juego-memoria.php" class="btn">Jugar</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p><strong>Escuela de Formación de Profesores de Enseñanza Media - EFPEM</strong></p>
        <p>Universidad de San Carlos de Guatemala</p>
        <p>Seminario 2025 | <a href="https://www.efpemusac.org/" target="_blank">www.efpemusac.org</a></p>
        <p style="margin-top: 20px; font-size: 0.9rem;">Proyecto desarrollado por estudiantes de Licenciatura en Computación e Informática</p>
    </footer>
</body>

</html>