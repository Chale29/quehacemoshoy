<?php
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¿Y qué hacemos hoy? | Eventos Locales y Experiencias Únicas</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        :root {
            --primary: #00733C;
            --primary-dark: #014220;
            --secondary: #FFFFFF;
            --accent: #FFD700;
            --text: #222;
            --text-light: #777;
            --bg-light: #F5F5F5;
            --border: #E0E0E0;
        }
        html {
            scroll-behavior: smooth;
        }
        body {
            font-family: 'Poppins', sans-serif;
            color: var(--text);
            background-color: var(--secondary);
            line-height: 1.6;
        }

        header.sticky-top,
        .navbar,
        .navbar.bg-primary,
        .navbar-dark.bg-primary {
        background-color: var(--primary) !important;
        border-color: var(--primary) !important;
        }

        .btn-primary-custom {
            background-color: var(--primary);
            border-color: var(--primary);
            color: #fff;
            font-weight: 600;
            transition: background 0.2s, border 0.2s, box-shadow 0.2s;
            box-shadow: 0 2px 8px rgba(0,115,60,0.08);
        }
        .btn-primary-custom:hover, .btn-primary-custom:focus {
            background-color: var(--primary-dark);
            border-color: var(--primary-dark);
            color: #fff;
            box-shadow: 0 4px 16px rgba(0,115,60,0.13);
        }

        .btn-danger-custom {
            background-color: var(--accent);
            border-color: var(--accent);
            color: var(--primary-dark);
            font-weight: 600;
        }
        .btn-danger-custom:hover, .btn-danger-custom:focus {
            background-color: #e6c200;
            border-color: #e6c200;
            color: var(--primary-dark);
        }
        .btn-outline-primary-custom {
            border-color: var(--primary);
            color: var(--primary);
            font-weight: 600;
        }
        .btn-outline-primary-custom.active, .btn-outline-primary-custom:hover, .btn-outline-primary-custom:focus {
            background-color: var(--primary);
            color: var(--secondary);
        }
        .hero {
            background: linear-gradient(rgba(0, 115, 60, 0.85), rgba(0, 115, 60, 0.95)), url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1920&q=80') center/cover no-repeat;
            color: var(--secondary);
            padding: 6rem 0 4rem 0;
            text-align: center;
            position: relative;
            min-height: 80vh;
            display: flex;
            align-items: center;
        }
        .hero-content h2 {
            text-shadow: 0 2px 16px rgba(0,0,0,0.18);
        }
        .highlight {
            color: var(--accent);
            font-weight: 700;
        }
        .hero-tags span {
            background-color: rgba(255, 255, 255, 0.18);
            padding: 0.5rem 1rem;
            border-radius: 50px;
            font-size: 0.95rem;
            margin: 0 0.2rem 0.4rem 0;
            display: inline-block;
            font-weight: 500;
        }
        .scroll-down {
            position: absolute;
            bottom: 2rem;
            left: 50%;
            transform: translateX(-50%);
            animation: bounce 2s infinite;
            cursor: pointer;
        }
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateY(0) translateX(-50%);}
            40% { transform: translateY(-18px) translateX(-50%);}
            60% { transform: translateY(-8px) translateX(-50%);}
        }
        .number {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
            min-width: 40px;
        }
        .para-turistas {
            background: linear-gradient(90deg, var(--primary) 70%, #009e4f 100%);
            color: var(--secondary);
        }
        .image-container img {
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.18);
        }
        .card-custom {
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .card-custom:hover {
            transform: translateY(-5px) scale(1.03);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }
        .badge-custom {
            position: absolute;
            top: 1rem;
            right: 1rem;
            padding: 0.3rem 0.8rem;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 600;
        }
        .badge-trending {
            background-color: #FF3B30;
        }
        .badge-discount {
            background-color: var(--accent);
            color: var(--text);
        }
        footer {
            background-color: var(--primary-dark);
            color: var(--secondary);
            font-size: 1rem;
        }
        .footer-link {
            color: #fff;
            opacity: 0.8;
            text-decoration: none;
            transition: opacity 0.2s;
        }
        .footer-link:hover, .footer-link:focus {
            opacity: 1;
            text-decoration: underline;
        }
        .social-icons a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.13);
            border-radius: 50%;
            transition: background-color 0.3s;
            font-size: 1.3rem;
        }
        .social-icons a:hover {
            background-color: rgba(255, 255, 255, 0.23);
        }
        /* Responsive tweaks */
        @media (max-width: 767px) {
            .hero { padding: 3rem 0 2rem 0; min-height: 60vh;}
            .hero-content h2 { font-size: 2.2rem;}
        }
    </style>
</head>
<body>
    <header class="sticky-top bg-primary text-white shadow-sm">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand fw-bold" href="#">¿Y qué hacemos hoy?</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Menú">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mainNav">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#hero">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#tendencias">Tendencias</a></li>
                        <li class="nav-item"><a class="nav-link" href="#footer">Contacto</a></li>                        
                        <li class="nav-item"><a class="nav-link" href="views/auth/register.php">Registrate</a></li>
                        <li class="nav-item"><a class="nav-link" href="views/auth/login.php">Inicia sesion</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section class="hero" id="hero">
            <div class="container">
                <div class="hero-content mx-auto" style="max-width: 800px;">
                    <h2 class="display-4 mb-4">Descubre lo <span class="highlight">mejor</span> de tu ciudad</h2>
                    <p class="subtitle fs-5 mb-4">Eventos, fiestas, cultura y aventuras</p>
                    <p class="subtitle fs-5 mb-5">Todo en un solo lugar</p>
                    <div class="d-flex justify-content-center gap-3 mb-4 flex-wrap">
                        <a href="views/auth/register.php" class="btn btn-primary-custom btn-lg px-4">Regístrate</a>
                        <a href="views/auth/login.php" class="btn btn-danger-custom btn-lg px-4">Inicio de sesión</a>
                    </div>
                    <div class="hero-tags d-flex justify-content-center gap-2 flex-wrap mb-5">
                        <span>#FiestasLocales</span>
                        <span>#CulturaUrbana</span>
                        <span>#Gastronomía</span>
                        <span>#EventosExclusivos</span>
                    </div>
                </div>
                <div class="scroll-down text-center" onclick="document.getElementById('tendencias').scrollIntoView({behavior:'smooth'})" title="Ver tendencias">
                    <i class="fas fa-chevron-down text-white fa-2x"></i>
                </div>
            </div>
        </section>

        <section id="tendencias" class="py-5">
            <div class="container text-center mb-5">
                <h2 class="display-5 mb-3">Tendencias <span class="highlight">del momento</span></h2>
                <p class="text-muted mb-0">Lo más popular entre la comunidad esta semana</p>
            </div>
            <div class="d-flex justify-content-center gap-3 mb-5 flex-wrap">
                <button class="btn btn-outline-primary-custom rounded-pill px-5 py-2 mb-2 active">Eventos</button>
                <button class="btn btn-outline-primary-custom rounded-pill px-5 py-2 mb-2 active">Lugares</button>
                <button class="btn btn-outline-primary-custom rounded-pill px-5 py-2 mb-2 active">Tematicas</button>
            </div>
            <div class="container" style="max-width: 600px;">
                <div class="d-flex align-items-center p-3 border-bottom mb-3 card-custom">
                    <span class="number me-3">1</span>
                    <div class="flex-grow-1 text-start">
                        <h3 class="fs-5 mb-1">Festivales Gastronomicos</h3>
                    </div>
                    <i class="fas fa-chevron-right"></i>
                </div>
                <div class="d-flex align-items-center p-3 border-bottom mb-3 card-custom">
                    <span class="number me-3">2</span>
                    <div class="flex-grow-1 text-start">
                        <h3 class="fs-5 mb-1">Eventos Medio ambientales</h3>

                    </div>
                    <i class="fas fa-chevron-right"></i>
                </div>
                <div class="d-flex align-items-center p-3 card-custom">
                    <span class="number me-3">3</span>
                    <div class="flex-grow-1 text-start">
                        <h3 class="fs-5 mb-1">Fiestas para los amigos</h3>
                    </div>
                    <i class="fas fa-chevron-right"></i>
                </div>
            </div>
        </section>

        <section class="para-turistas py-5">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6">
                        <h2 class="display-5 mb-4">¿Eres <span class="text-warning">turista</span>?</h2>
                        <p class="fs-5 mb-4" style="opacity: 0.9;">Descubre experiencias auténticas que no encontrarás en las guías tradicionales</p>
                        <ul class="list-unstyled mb-5">
                            <li class="d-flex align-items-center mb-3"><i class="fas fa-check-circle me-3 text-warning"></i> Eventos organizados por locales</li>
                            <li class="d-flex align-items-center mb-3"><i class="fas fa-check-circle me-3 text-warning"></i> Los mejores restaurantes cerca de ti</li>
                            <li class="d-flex align-items-center mb-3"><i class="fas fa-check-circle me-3 text-warning"></i> Conoce nuevos lugares</li>
                            <li class="d-flex align-items-center mb-3"><i class="fas fa-check-circle me-3 text-warning"></i> Recomendaciones personalizadas</li>
                        </ul>
                        <a href="#registro" class="btn btn-warning btn-lg px-4 py-2 fw-bold shadow-sm">Ver opciones para turistas</a>
                    </div>
                    <div class="col-lg-6">
                        <div class="image-container text-center">
                            <img src="https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=600&q=80" alt="Experiencias para turistas" class="img-fluid shadow-lg" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="registro" class="py-5 bg-light">
            <div class="container text-center">
                <h2 class="display-2 mb-3">¿Listo para <span class="highlight">aventurarte</span>?</h2>
                <h3 class="display-5 mb-3">Únete a nuestra <span class="highlight">comunidad</span></h3>

                <p class="mb-4">Regístrate gratis y recibe recomendaciones personalizadas</p>

                <a href="views/auth/register.php" class="btn btn-primary-custom btn-lg px-4">Regístrate</a>

            </div>
        </section>
    </main>

    <footer class="py-5" id="footer">
        <div class="container">
            <div class="row gy-4">
                <div class="col-md-6 col-lg-4">
                    <h3 class="mb-3">¿Y qué hacemos hoy?</h3>
                    <p class="mb-4 opacity-75">La mejor manera de descubrir experiencias únicas en tu ciudad y conectar con gente increíble.</p>
                    <div class="d-flex gap-3 social-icons">
                        <a href="#" class="text-white" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
                        <a href="#" class="text-white" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <h4 class="mb-4">Explorar</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="footer-link">Eventos hoy</a></li>
                        <li class="mb-2"><a href="#" class="footer-link">Próximos eventos</a></li>
                        <li class="mb-2"><a href="#" class="footer-link">Para grupos</a></li>
                        <li class="mb-2"><a href="#" class="footer-link">Individuales</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-4">
                    <h4 class="mb-4">Compañía</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="footer-link">Sobre nosotros</a></li>
                        <li class="mb-2"><a href="#" class="footer-link">Trabaja con nosotros</a></li>
                        <li class="mb-2"><a href="#" class="footer-link">Blog</a></li>
                        <li class="mb-2"><a href="#" class="footer-link">Contacto</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-top border-white border-opacity-10 mt-5 pt-4">
                <div class="row align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        <p class="mb-0">&copy; 2025 ¿Y qué hacemos hoy? Todos los derechos reservados.</p>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="d-flex justify-content-center justify-content-md-end gap-3">
                            <a href="#" class="footer-link">Términos</a>
                            <a href="#" class="footer-link">Privacidad</a>
                            <a href="#" class="footer-link">Cookies</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>