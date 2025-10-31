<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto de Gestión de Residuos - EFPEM USAC</title>
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