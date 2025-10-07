<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Proyecto - Gestión de Residuos EFPEM</title>
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
            max-width: 1200px;
            margin: 0 auto;
            padding: 60px 5%;
        }

        /* Tabs Navigation */
        .tabs {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }

        .tab-btn {
            padding: 12px 30px;
            background: #FFFFFF;
            border: 2px solid #437DBF;
            color: #437DBF;
            border-radius: 25px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
            font-size: 1rem;
        }

        .tab-btn:hover {
            background: #437DBF;
            color: #FFFFFF;
            transform: translateY(-2px);
        }

        .tab-btn.active {
            background: #0E2144;
            color: #FFFFFF;
            border-color: #0E2144;
        }

        /* Tab Content */
        .tab-content {
            display: none;
            animation: fadeIn 0.5s ease;
        }

        .tab-content.active {
            display: block;
        }

        /* Section Styles */
        .section-title {
            color: #0E2144;
            font-size: 2rem;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 4px solid #12A1DC;
        }

        .subsection-title {
            color: #437DBF;
            font-size: 1.5rem;
            margin-top: 30px;
            margin-bottom: 20px;
        }

        .content-box {
            background: #f8f9fa;
            border-left: 5px solid #12A1DC;
            padding: 25px;
            margin-bottom: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }

        .content-box h3,
        .content-box h4 {
            color: #0E2144;
            margin-bottom: 15px;
        }

        .content-box p,
        .content-box ul {
            line-height: 1.8;
            color: #000000;
        }

        .content-box ul {
            margin-left: 20px;
            margin-top: 15px;
        }

        .content-box li {
            margin-bottom: 10px;
        }

        /* Highlight Box */
        .highlight-box {
            background: linear-gradient(135deg, #0E2144 0%, #437DBF 100%);
            color: #FFFFFF;
            padding: 30px;
            border-radius: 15px;
            margin: 40px 0;
            box-shadow: 0 10px 30px rgba(14, 33, 68, 0.3);
        }

        .highlight-box h3 {
            color: #12A1DC;
            margin-bottom: 15px;
            font-size: 1.8rem;
        }

        /* Info Cards */
        .info-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            margin: 30px 0;
        }

        .info-card {
            background: #FFFFFF;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            border-top: 4px solid #b0142b;
            transition: all 0.3s ease;
        }

        .info-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(176, 20, 43, 0.2);
        }

        .info-card .icon {
            font-size: 2.5rem;
            margin-bottom: 15px;
            display: block;
        }

        .info-card h4 {
            color: #0E2144;
            margin-bottom: 10px;
            font-size: 1.2rem;
        }

        /* Problem Tree */
        .tree-container {
            background: #f8f9fa;
            padding: 40px;
            border-radius: 15px;
            margin: 40px 0;
            overflow-x: auto;
        }

        .tree-box {
            background: #FFFFFF;
            border: 3px solid;
            border-radius: 10px;
            padding: 20px;
            margin: 15px;
            min-width: 250px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .tree-box.effects {
            border-color: #b0142b;
        }

        .tree-box.problem {
            border-color: #437DBF;
            background: linear-gradient(135deg, #437DBF 0%, #12A1DC 100%);
            color: #FFFFFF;
            font-weight: 600;
            font-size: 1.1rem;
        }

        .tree-box.causes {
            border-color: #12A1DC;
        }

        .tree-label {
            font-weight: 700;
            color: #0E2144;
            margin-bottom: 20px;
            font-size: 1.3rem;
            text-transform: uppercase;
        }

        /* FODA Table */
        .foda-table {
            width: 100%;
            border-collapse: collapse;
            margin: 30px 0;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        .foda-table th {
            background: #0E2144;
            color: #FFFFFF;
            padding: 20px;
            text-align: left;
            font-size: 1.2rem;
        }

        .foda-table td {
            padding: 25px;
            border-bottom: 1px solid #e0e0e0;
            vertical-align: top;
        }

        .foda-table tr:last-child td {
            border-bottom: none;
        }

        .foda-table ul {
            margin-left: 20px;
            line-height: 1.8;
        }

        .foda-fortalezas {
            background: #e3f2fd;
        }

        .foda-oportunidades {
            background: #e8f5e9;
        }

        .foda-debilidades {
            background: #fff3e0;
        }

        .foda-amenazas {
            background: #ffebee;
        }

        /* Strategy Box */
        .strategy-box {
            background: linear-gradient(135deg, #12A1DC, #437DBF);
            color: #FFFFFF;
            padding: 25px;
            border-radius: 10px;
            margin: 20px 0;
            box-shadow: 0 6px 15px rgba(18, 161, 220, 0.3);
        }

        .strategy-box h4 {
            color: #FFFFFF;
            margin-bottom: 15px;
            font-size: 1.3rem;
        }

        /* Timeline */
        .timeline {
            position: relative;
            padding-left: 50px;
            margin: 40px 0;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 20px;
            top: 0;
            bottom: 0;
            width: 4px;
            background: #12A1DC;
        }

        .timeline-item {
            position: relative;
            margin-bottom: 30px;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -38px;
            top: 5px;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #b0142b;
            border: 4px solid #FFFFFF;
            box-shadow: 0 0 0 4px #12A1DC;
        }

        .timeline-content {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }

        .timeline-content h4 {
            color: #0E2144;
            margin-bottom: 10px;
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

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
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

            .tabs {
                flex-direction: column;
            }

            .tab-btn {
                width: 100%;
            }

            .foda-table {
                font-size: 0.9rem;
            }

            .foda-table th,
            .foda-table td {
                padding: 15px;
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
            <li><a href="proyecto.php" class="active">El Proyecto</a></li>
            <li><a href="videos.php">Videos</a></li>
            <li><a href="juegos.php">Juegos</a></li>
            <li><a href="recursos.php">Recursos</a></li>
            <li><a href="contacto.php">Contacto</a></li>
        </ul>
    </nav>

    <!-- Breadcrumb -->
    <div class="breadcrumb">
        <a href="index.php">Inicio</a> / <span>El Proyecto</span>
    </div>

    <!-- Hero Section -->
    <section class="hero">
        <h2>Proyecto de Mejoramiento Educativo</h2>
        <p>Deficiente organización, clasificación y manejo de desechos sólidos en EFPEM con escasa integración de estrategias didácticas interdisciplinarias</p>
    </section>

    <!-- Main Content -->
    <div class="container">
        <!-- Tabs Navigation -->
        <div class="tabs">
            <button class="tab-btn active" onclick="openTab(event, 'organizacional')">Marco Organizacional</button>
            <button class="tab-btn" onclick="openTab(event, 'situacional')">Análisis Situacional</button>
            <button class="tab-btn" onclick="openTab(event, 'estrategico')">Análisis Estratégico</button>
            <button class="tab-btn" onclick="openTab(event, 'justificacion')">Justificación</button>
        </div>

        <!-- Tab 1: Marco Organizacional -->
        <div id="organizacional" class="tab-content active">
            <h2 class="section-title">Marco Organizacional</h2>

            <div class="highlight-box">
                <h3>Sobre EFPEM</h3>
                <p>La Escuela de Formación de Profesores de Enseñanza Media (EFPEM) de la Universidad de San Carlos de Guatemala fue fundada en 1968 para formar docentes para el nivel medio. Surge de un convenio entre el Ministerio de Educación y la USAC, con el objetivo de mejorar y desarrollar la educación nacional.</p>
            </div>

            <h3 class="subsection-title">Misión</h3>
            <div class="content-box">
                <p>Somos una Escuela no facultativa de la Universidad de San Carlos de Guatemala, con excelencia académica en el funcionamiento de todos sus programas, responsable de la formación de profesionales de alta calidad en el campo de la docencia, en los distintos niveles del sistema educativo nacional, y que, basados en la investigación, la docencia y la extensión, contribuimos al fortalecimiento del proceso educativo en el ámbito nacional, trabajando con ética, responsabilidad y compromiso con el desarrollo ambiental sostenible.</p>
            </div>

            <h3 class="subsection-title">Visión</h3>
            <div class="content-box">
                <p>Ser la unidad académica de la Universidad de San Carlos de Guatemala que coadyuva a la formación del profesional docente del sistema educativo nacional, con bases científica, tecnológica y humanística, que promuevan una cultura ambiental sostenible; que se fundamenten en las nuevas corrientes pedagógicas, capaces de cubrir las necesidades de la educación nacional en un contexto intercultural, cimentados en los valores éticos y morales de un profesional de la educación.</p>
            </div>

            <h3 class="subsection-title">Características Institucionales</h3>
            <div class="info-cards">
                <div class="info-card">
                    <span class="icon">🏛️</span>
                    <h4>Naturaleza</h4>
                    <p>Unidad Académica de la USAC, institución pública de educación superior</p>
                </div>
                <div class="info-card">
                    <span class="icon">📚</span>
                    <h4>Orientación</h4>
                    <p>Formación de profesores de enseñanza media (educación secundaria)</p>
                </div>
                <div class="info-card">
                    <span class="icon">📏</span>
                    <h4>Tamaño</h4>
                    <p>Aproximadamente 22,500 m² de área ocupada (150m × 150m)</p>
                </div>
                <div class="info-card">
                    <span class="icon">🌎</span>
                    <h4>Cobertura</h4>
                    <p>Nacional, formando docentes para todo el sistema educativo de Guatemala</p>
                </div>
            </div>

            <h3 class="subsection-title">Programas Académicos</h3>
            <div class="content-box">
                <h4>Profesorados y Licenciaturas</h4>
                <ul>
                    <li><strong>Matemática y Física:</strong> Formación en ciencias exactas</li>
                    <li><strong>Química y Biología:</strong> Ciencias naturales y de la vida</li>
                    <li><strong>Idioma Español y Literatura:</strong> Lengua y comunicación</li>
                    <li><strong>Computación e Informática:</strong> Tecnología educativa</li>
                    <li><strong>Ciencias Económico-Contables:</strong> Educación comercial</li>
                    <li><strong>Educación Bilingüe Intercultural:</strong> Formación multicultural</li>
                </ul>
            </div>

            <div class="content-box">
                <h4>Programas Especiales</h4>
                <ul>
                    <li><strong>PADEP/D:</strong> Programa Académico de Desarrollo Profesional Docente para maestros en servicio</li>
                    <li><strong>Programa de Educación Alternativa:</strong> Con apoyo de USAID para estudiantes excluidos del sistema tradicional</li>
                    <li><strong>Maestría en Formación Docente:</strong> Posgrado para profesionales universitarios</li>
                    <li><strong>Programa Galileo:</strong> Formación en áreas científicas y tecnológicas</li>
                    <li><strong>Escuela de Vacaciones:</strong> Formación intensiva durante receso académico</li>
                </ul>
            </div>
        </div>

        <!-- Tab 2: Análisis Situacional -->
        <div id="situacional" class="tab-content">
            <h2 class="section-title">Análisis Situacional</h2>

            <div class="highlight-box">
                <h3>Problema Prioritario</h3>
                <p>"Deficiente organización, clasificación y manejo de desechos sólidos en la Escuela de Profesores de Enseñanza Media -EFPEM-, con escasa integración de estrategias didácticas interdisciplinarias"</p>
            </div>

            <h3 class="subsection-title">Listado de Problemas Identificados</h3>
            <div class="content-box">
                <ul>
                    <li>Falta de clasificación y manejo adecuado de los desechos de EFPEM</li>
                    <li>Acumulación inadecuada de basura en el área de parqueo de motos</li>
                    <li>Deficiente clasificación y manejo de desechos sólidos con escasa integración de estrategias didácticas interdisciplinarias</li>
                    <li>Falta de estaciones de ordenamiento de desechos como estrategia didáctica interdisciplinaria</li>
                    <li>Deficiencia en la gestión, organización y falta de educación ambiental sobre residuos</li>
                    <li>Estaciones inadecuadas para la clasificación y ordenamiento de residuos</li>
                </ul>
            </div>

            <h3 class="subsection-title">Árbol de Problemas</h3>
            <div class="tree-container">
                <div class="tree-label" style="color: #b0142b;">EFECTOS</div>
                <div style="display: flex; flex-wrap: wrap; justify-content: center;">
                    <div class="tree-box effects">
                        <strong>Riesgos sanitarios</strong>
                        <p style="font-size: 0.9rem; margin-top: 10px;">Contaminación, malos olores y plagas</p>
                    </div>
                    <div class="tree-box effects">
                        <strong>Deterioro ambiental</strong>
                        <p style="font-size: 0.9rem; margin-top: 10px;">Acumulación de residuos</p>
                    </div>
                    <div class="tree-box effects">
                        <strong>Pérdida de oportunidades</strong>
                        <p style="font-size: 0.9rem; margin-top: 10px;">No reciclaje ni reutilización</p>
                    </div>
                </div>

                <div style="margin: 30px 0; text-align: center;">
                    <div style="height: 60px; width: 4px; background: #437DBF; margin: 0 auto;"></div>
                </div>

                <div class="tree-label" style="color: #437DBF;">PROBLEMA CENTRAL</div>
                <div style="display: flex; justify-content: center;">
                    <div class="tree-box problem">
                        Deficiente organización, clasificación y manejo de desechos sólidos en EFPEM con escasa integración de estrategias didácticas interdisciplinarias
                    </div>
                </div>

                <div style="margin: 30px 0; text-align: center;">
                    <div style="height: 60px; width: 4px; background: #437DBF; margin: 0 auto;"></div>
                </div>

                <div class="tree-label" style="color: #12A1DC;">CAUSAS</div>
                <div style="display: flex; flex-wrap: wrap; justify-content: center;">
                    <div class="tree-box causes">
                        <strong>Falta de normativa interna</strong>
                    </div>
                    <div class="tree-box causes">
                        <strong>Infraestructura inadecuada</strong>
                    </div>
                    <div class="tree-box causes">
                        <strong>Deficiente cultura de clasificación</strong>
                    </div>
                    <div class="tree-box causes">
                        <strong>Falta de recursos económicos</strong>
                    </div>
                </div>
            </div>

            <h3 class="subsection-title">Actores Involucrados</h3>
            <div class="info-cards">
                <div class="info-card">
                    <span class="icon">👥</span>
                    <h4>Estudiantes</h4>
                    <p>Futuros docentes de licenciatura y profesorado</p>
                </div>
                <div class="info-card">
                    <span class="icon">👨‍🏫</span>
                    <h4>Docentes</h4>
                    <p>Profesores de diferentes especialidades</p>
                </div>
                <div class="info-card">
                    <span class="icon">🏢</span>
                    <h4>Autoridades</h4>
                    <p>Dirección y junta directiva de EFPEM</p>
                </div>
                <div class="info-card">
                    <span class="icon">🧹</span>
                    <h4>Personal Operativo</h4>
                    <p>Equipo de limpieza y mantenimiento</p>
                </div>
            </div>
        </div>

        <!-- Tab 3: Análisis Estratégico -->
        <div id="estrategico" class="tab-content">
            <h2 class="section-title">Análisis Estratégico FODA</h2>

            <table class="foda-table">
                <tr>
                    <th class="foda-fortalezas">FORTALEZAS</th>
                    <th class="foda-oportunidades">OPORTUNIDADES</th>
                </tr>
                <tr>
                    <td class="foda-fortalezas">
                        <ul>
                            <li><strong>Respaldo institucional:</strong> La misión y visión de EFPEM incluyen compromiso con sostenibilidad ambiental</li>
                            <li><strong>Conciencia comunitaria:</strong> Personal, docentes y estudiantes con disposición para gestión de residuos</li>
                            <li><strong>Espacios físicos:</strong> Áreas disponibles para infraestructura de clasificación</li>
                            <li><strong>Herramientas de comunicación:</strong> Plataformas digitales para difusión educativa</li>
                            <li><strong>Colaboración interdisciplinaria:</strong> Integración de estudiantes de diferentes carreras</li>
                            <li><strong>Servicio de extracción:</strong> Sistema de recolección general existente</li>
                        </ul>
                    </td>
                    <td class="foda-oportunidades">
                        <ul>
                            <li><strong>Apoyo normativo nacional:</strong> Acuerdo Gubernativo 164-2021 sobre gestión de residuos</li>
                            <li><strong>Alianzas estratégicas:</strong> Convenios con empresas recicladoras</li>
                            <li><strong>Reducción de huella ambiental:</strong> Aplicación de las 3R y compostaje</li>
                            <li><strong>Campañas educativas:</strong> Talleres y capacitaciones comunitarias</li>
                            <li><strong>Plan integral:</strong> Desarrollo de modelo institucional replicable</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th class="foda-debilidades">DEBILIDADES</th>
                    <th class="foda-amenazas">AMENAZAS</th>
                </tr>
                <tr>
                    <td class="foda-debilidades">
                        <ul>
                            <li><strong>Falta de marco normativo interno:</strong> Sin reglamento específico de gestión</li>
                            <li><strong>Deficiente cultura de clasificación:</strong> Comunidad sin capacitación adecuada</li>
                            <li><strong>Infraestructura inadecuada:</strong> Falta de contenedores diferenciados</li>
                            <li><strong>Recursos económicos limitados:</strong> Presupuesto insuficiente</li>
                            <li><strong>Desarticulación académica:</strong> Sin iniciativas curriculares ambientales</li>
                            <li><strong>Falta de seguimiento:</strong> Sin sistema de supervisión continua</li>
                        </ul>
                    </td>
                    <td class="foda-amenazas">
                        <ul>
                            <li><strong>Riesgos sanitarios:</strong> Contaminación, malos olores y plagas</li>
                            <li><strong>Falta de continuidad:</strong> Desinterés administrativo</li>
                            <li><strong>Resistencia al cambio:</strong> Oposición de parte de la comunidad</li>
                            <li><strong>Contaminación específica:</strong> Acumulación de metales pesados en zonas críticas</li>
                            <li><strong>Uso indebido:</strong> Personas ajenas que hacen mal uso de instalaciones</li>
                        </ul>
                    </td>
                </tr>
            </table>

            <h3 class="subsection-title">Estrategias MINI-MAX</h3>

            <div class="strategy-box">
                <h4>🔷 Fortalezas + Amenazas (Maxi-Mini)</h4>
                <p>Utilizar el respaldo institucional y las herramientas de comunicación para crear campañas de sensibilización que contrarresten la resistencia al cambio y el desinterés. Mostrar los beneficios de un manejo adecuado de residuos para la salud y el bienestar de la comunidad, fomentando una cultura de responsabilidad colectiva.</p>
            </div>

            <div class="strategy-box">
                <h4>🔷 Fortalezas + Debilidades (Maxi-Mini)</h4>
                <p>Aprovechar el espacio físico disponible y la disposición de la comunidad educativa para implementar un proyecto piloto de puntos de acopio de residuos. Este proyecto servirá para educar de manera práctica a la comunidad, y su éxito será un argumento para la gestión de recursos económicos para una implementación a gran escala.</p>
            </div>

            <div class="strategy-box">
                <h4>🔷 Oportunidades + Debilidades (Maxi-Mini)</h4>
                <p>A partir del marco legal proporcionado por el Acuerdo Gubernativo 164-2021, se gestionará la creación de un reglamento interno. Paralelamente, se buscarán alianzas con empresas de reciclaje que puedan brindar asesoría o recursos, compensando así la falta de conocimientos y presupuesto para la implementación de un sistema de gestión adecuado.</p>
            </div>

            <div class="strategy-box">
                <h4>🔷 Oportunidades + Amenazas (Maxi-Mini)</h4>
                <p>Utilizar el apoyo del gobierno y la promoción de la gestión de residuos para mostrar a la comunidad educativa la importancia y los beneficios de un manejo que evita la contaminación y los problemas de salud. Las alianzas con empresas de reciclaje pueden crear un modelo de negocio que genere ingresos, mitigando la amenaza de la pérdida de recursos y haciendo el proyecto financieramente sostenible.</p>
            </div>

            <div class="strategy-box">
                <h4>🔷 Fortalezas + Oportunidades (Maxi-Maxi)</h4>
                <p>Con base en el compromiso institucional y la existencia de una comunidad consciente, se aprovechará el marco legal y las alianzas externas para diseñar e implementar un plan integral de gestión de residuos. Este plan incluirá campañas educativas y talleres que, apalancados en las redes sociales de la institución, se enfocarán en la separación y valorización de residuos, generando un modelo exitoso y replicable dentro de EFPEM.</p>
            </div>

            <h3 class="subsection-title">Matriz de Eisenhower</h3>
            <div class="content-box">
                <p style="margin-bottom: 20px;">Herramienta para priorizar tareas según su urgencia e importancia:</p>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 20px;">
                    <div style="background: #ffebee; padding: 20px; border-radius: 10px; border-left: 5px solid #b0142b;">
                        <h4 style="color: #b0142b; margin-bottom: 15px;">⚡ URGENTE E IMPORTANTE (Hacer)</h4>
                        <ul style="font-size: 0.9rem;">
                            <li>Cotización de depósitos nuevos</li>
                            <li>Identificar puntos estratégicos</li>
                            <li>Contabilizar materiales necesarios</li>
                            <li>Reubicar basurero general</li>
                        </ul>
                    </div>

                    <div style="background: #e8f5e9; padding: 20px; border-radius: 10px; border-left: 5px solid #12A1DC;">
                        <h4 style="color: #12A1DC; margin-bottom: 15px;">📅 IMPORTANTE, NO URGENTE (Programar)</h4>
                        <ul style="font-size: 0.9rem;">
                            <li>Implementar contenedores identificados</li>
                            <li>Sensibilizar a la población EFPEM</li>
                            <li>Integrar estrategias pedagógicas</li>
                            <li>Capacitar a futuros docentes</li>
                        </ul>
                    </div>

                    <div style="background: #fff3e0; padding: 20px; border-radius: 10px; border-left: 5px solid #437DBF;">
                        <h4 style="color: #437DBF; margin-bottom: 15px;">👥 URGENTE, NO IMPORTANTE (Delegar)</h4>
                        <ul style="font-size: 0.9rem;">
                            <li>Establecer normas internas</li>
                            <li>Gestionar pormenores legales</li>
                            <li>Alianzas con empresas externas</li>
                            <li>Publicación de material didáctico</li>
                        </ul>
                    </div>

                    <div style="background: #f5f5f5; padding: 20px; border-radius: 10px; border-left: 5px solid #000000;">
                        <h4 style="color: #000000; margin-bottom: 15px;">❌ NO URGENTE, NO IMPORTANTE (Eliminar)</h4>
                        <ul style="font-size: 0.9rem;">
                            <li>Reuniones teóricas excesivas</li>
                            <li>Creación de manuales redundantes</li>
                            <li>Desechar dispensadores viejos</li>
                            <li>Actividades improvisadas</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tab 4: Justificación -->
        <div id="justificacion" class="tab-content">
            <h2 class="section-title">Justificación del Proyecto</h2>

            <div class="highlight-box">
                <h3>📋 Fundamento Legal</h3>
                <p>La selección de este problema se fundamenta primordialmente en el cumplimiento del <strong>Reglamento 164-2021 para la Gestión Integral de los Residuos y Desechos Sólidos Comunes</strong>, el cual establece directrices específicas para instituciones educativas universitarias.</p>
            </div>

            <h3 class="subsection-title">Alineación con la Misión Institucional</h3>
            <div class="content-box">
                <p>El problema seleccionado se alinea directamente con la misión de EFPEM de formar "profesionales de alta calidad en el campo de la docencia" que contribuyan "al fortalecimiento del proceso educativo en el ámbito nacional, trabajando con ética, responsabilidad y compromiso con el desarrollo ambiental sostenible".</p>
                <p style="margin-top: 15px;">Asimismo, responde a la visión institucional de promover "una cultura ambiental sostenible" fundamentada en bases científicas, tecnológicas y humanísticas.</p>
            </div>

            <h3 class="subsection-title">Interdisciplinariedad del Proyecto</h3>
            <div class="info-cards">
                <div class="info-card">
                    <span class="icon">🔢</span>
                    <h4>Matemática y Física</h4>
                    <p>Análisis estadístico, modelado matemático y principios físicos en la cuantificación y optimización de procesos de gestión de residuos</p>
                </div>
                <div class="info-card">
                    <span class="icon">🧪</span>
                    <h4>Química y Biología</h4>
                    <p>Comprensión de procesos de descomposición, análisis de compuestos contaminantes y estudios microbiológicos</p>
                </div>
                <div class="info-card">
                    <span class="icon">📖</span>
                    <h4>Español y Literatura</h4>
                    <p>Desarrollo de competencias comunicativas para divulgación científica y producción de materiales educativos</p>
                </div>
                <div class="info-card">
                    <span class="icon">💻</span>
                    <h4>Computación</h4>
                    <p>Diseño de sistemas de información y tecnologías emergentes para monitoreo y gestión de datos ambientales</p>
                </div>
            </div>

            <h3 class="subsection-title">Metodologías Pedagógicas Innovadoras</h3>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-content">
                        <h4>🎯 Aprendizaje Basado en Proyectos (ABP)</h4>
                        <p>Los estudiantes trabajarán en la resolución de una problemática real y tangible, desarrollando soluciones prácticas y aplicables.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content">
                        <h4>🔬 Metodología STEAM</h4>
                        <p>Integración de ciencia, tecnología, ingeniería, artes y matemáticas en un proyecto unificado que aborda el problema desde múltiples perspectivas.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content">
                        <h4>💭 Pedagogía Crítica</h4>
                        <p>Análisis reflexivo de problemáticas socioambientales desde múltiples perspectivas disciplinarias, fomentando el pensamiento crítico.</p>
                    </div>
                </div>
            </div>

            <h3 class="subsection-title">Competencias del Siglo XXI</h3>
            <div class="content-box">
                <p>La selección de este problema responde a la necesidad de desarrollar en los futuros docentes competencias esenciales:</p>
                <ul>
                    <li><strong>Pensamiento crítico:</strong> Análisis de problemáticas ambientales complejas</li>
                    <li><strong>Colaboración interdisciplinaria:</strong> Trabajo en equipos multidisciplinarios</li>
                    <li><strong>Comunicación efectiva:</strong> Transmisión de conocimientos técnicos a audiencias diversas</li>
                    <li><strong>Creatividad e innovación:</strong> Diseño de soluciones sostenibles y contextualmente apropiadas</li>
                    <li><strong>Responsabilidad social:</strong> Compromiso con la sostenibilidad ambiental</li>
                </ul>
            </div>

            <h3 class="subsection-title">Impacto Social y Replicabilidad</h3>
            <div class="content-box">
                <p>Guatemala enfrenta desafíos significativos en materia de gestión de residuos sólidos, siendo este un problema de salud pública y sostenibilidad ambiental. Los futuros docentes que egresen de EFPEM serán multiplicadores de conocimiento en el sistema educativo nacional, por lo que su formación en gestión ambiental tendrá un efecto multiplicador en la sociedad guatemalteca.</p>
                <p style="margin-top: 15px;">Las soluciones desarrolladas pueden ser replicadas y adaptadas en otras instituciones educativas del país, maximizando el impacto del proyecto más allá de los límites institucionales.</p>
            </div>

            <h3 class="subsection-title">Viabilidad del Proyecto</h3>
            <div class="info-cards">
                <div class="info-card">
                    <span class="icon">✅</span>
                    <h4>Accesibilidad</h4>
                    <p>Se desarrolla dentro del campus universitario, facilitando el acceso y la observación directa</p>
                </div>
                <div class="info-card">
                    <span class="icon">🏗️</span>
                    <h4>Recursos Disponibles</h4>
                    <p>La institución cuenta con la infraestructura básica necesaria para la implementación</p>
                </div>
                <div class="info-card">
                    <span class="icon">🤝</span>
                    <h4>Apoyo Institucional</h4>
                    <p>Alineación con las políticas institucionales de sostenibilidad ambiental</p>
                </div>
                <div class="info-card">
                    <span class="icon">⏱️</span>
                    <h4>Temporalidad</h4>
                    <p>Puede desarrollarse dentro del período académico del seminario</p>
                </div>
            </div>

            <div class="highlight-box" style="margin-top: 40px;">
                <h3>🎓 Conclusión</h3>
                <p>La selección del problema se justifica por su alineación con el marco normativo nacional, su pertinencia con la misión institucional, su potencial interdisciplinario, su relevancia pedagógica y su impacto formativo en competencias del siglo XXI. Este problema ofrece un contexto auténtico y significativo para la formación integral de futuros docentes comprometidos con la sostenibilidad ambiental y la innovación educativa.</p>
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
        function openTab(evt, tabName) {
            // Ocultar todos los contenidos de tabs
            var tabContents = document.getElementsByClassName("tab-content");
            for (var i = 0; i < tabContents.length; i++) {
                tabContents[i].classList.remove("active");
            }

            // Remover clase active de todos los botones
            var tabBtns = document.getElementsByClassName("tab-btn");
            for (var i = 0; i < tabBtns.length; i++) {
                tabBtns[i].classList.remove("active");
            }

            // Mostrar el tab actual y marcar el botón como activo
            document.getElementById(tabName).classList.add("active");
            evt.currentTarget.classList.add("active");

            // Scroll suave al inicio del contenido
            window.scrollTo({
                top: document.querySelector('.container').offsetTop - 100,
                behavior: 'smooth'
            });
        }
    </script>
</body>

</html>