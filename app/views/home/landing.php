<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Asistencia</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Los assets usan rutas absolutas con BASE_URL para que funcionen sin importar la URL actual -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/css/landing.css">
</head>
<body>
    <!-- Fade overlay para transición de botón Ver demo -->
    <div id="fadeOverlay"></div>

    <!-- Menú móvil (overlay) fuera del nav para que position:fixed funcione siempre -->
    <?php include __DIR__ . '/../layouts/header.php'; ?>

    <!-- Sección principal con video de fondo -->
    <section class="stage">

        <video class="hero-video" autoplay muted loop playsinline>
            <source src="<?php echo BASE_URL; ?>/public/video/tienda.mp4" type="video/mp4">
        </video>

        <!-- Navbar -->
        <nav class="navbar" id="navbar">
            <a class="brand" href="#">Tienda Sintia</a>

            <button class="menu-btn" id="menuBtn" aria-label="Abrir menú">
                <i class="bi bi-list"></i>
            </button>
        </nav>

        <!-- Contenido hero -->
        <div class="hero-content">
            <button class="cta-btn demo-trigger" id="verDemo">Ver Productos</button>
        </div>

        <!-- Scroll indicator -->
        <div class="scroll-indicator" id="scrollIndicator">
            <span>Scroll</span>
            <div class="scroll-line"></div>
        </div>

    </section>

    <!-- Sección proyectos -->
    <section class="projects-section">

        <div class="project-card">
            <div class="project-img-wrap">
                <img src="<?php echo BASE_URL; ?>/public/image/foto_prueba.png" alt="Registro con DNI" class="project-img">
            </div>
            <h3 class="project-title">Registro de asistencia</h3>
            <p class="project-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At ullam iure rerum odio voluptatum voluptas voluptatem obcaecati! Nostrum, unde temporibus.</p>
            <a href="#" class="project-link">Ver demo <i class="bi bi-arrow-right"></i></a>
        </div>

        <div class="project-card">
            <div class="project-img-wrap">
                <img src="<?php echo BASE_URL; ?>/public/image/foto_prueba.png" alt="Panel de Control" class="project-img project-img--admin">
            </div>
            <h3 class="project-title">Panel de Control</h3>
            <p class="project-desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur excepturi aperiam nulla voluptatem officia eligendi voluptatum doloremque, maxime odio ratione sit architecto? Iste assumenda id, consectetur soluta vitae vero. Pariatur!</p>
            <a href="#" class="project-link">Ver demo <i class="bi bi-arrow-right"></i></a>
        </div>

    </section>


       <div class="container py-5">
    <!-- Primera fila -->
    <div class="row g-4" style="margin-bottom: 100px;">
        <div class="col-lg-4 col-md-6">
            <div class="card h-100 shadow-sm">
                <img src="img/producto1.png" class="card-img-top" alt="Producto">
                <div class="card-body">
                    <h3 class="card-title">
                        Card title
                    </h3>
                    <p class="card-text">
                        This is a wider card with supporting text below as a natural lead-in to additional content.
                    </p>
                    <small class="text-secondary">
                        Last updated 3 mins ago
                    </small>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="card h-100 shadow-sm">
                <img src="img/producto2.png" class="card-img-top" alt="Producto">
                <div class="card-body">
                    <h3 class="card-title">
                        Card title
                    </h3>
                    <p class="card-text">
                        This card has supporting text below as a natural lead-in.
                    </p>
                    <small class="text-secondary">
                        Last updated 3 mins ago
                    </small>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="card h-100 shadow-sm">
                <img src="img/producto3.png" class="card-img-top" alt="Producto">
                <div class="card-body">
                    <h3 class="card-title">
                        Card title
                    </h3>
                    <p class="card-text">
                        This is a wider card with supporting text below.
                    </p>
                    <small class="text-secondary">
                        Last updated 3 mins ago
                    </small>
                </div>
            </div>
        </div>
    </div>



    <!-- Segunda fila -->
    <div class="row g-3">
        <div class="col-md-6">
            <div class="card h-100 shadow-sm">
                <img src="img/producto4.png" class="card-img-top" alt="Producto">
                <div class="card-body">
                    <h3 class="card-title">
                        Card title
                    </h3>
                    <p class="card-text">
                        This is a longer card with supporting text below.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card h-100 shadow-sm">
                <img src="img/producto5.png" class="card-img-top" alt="Producto">
                <div class="card-body">
                    <h3 class="card-title">
                        Card title
                    </h3>
                    <p class="card-text">
                        This is a longer card with supporting text below.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card h-100 shadow-sm">
                <img src="img/producto6.png" class="card-img-top" alt="Producto">
                <div class="card-body">
                    <h3 class="card-title">
                        Card title
                    </h3>
                    <p class="card-text">
                        This is a longer card with supporting text below.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card h-100 shadow-sm">
                <img src="img/producto7.png" class="card-img-top" alt="Producto">
                <div class="card-body">
                    <h3 class="card-title">
                        Card title
                    </h3>
                    <p class="card-text">
                        This is a longer card with supporting text below.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container py-5">
    <div class="row g-1">

        <!-- Producto -->
        <div class="col-lg-2 col-md-4 col-63">
            <div class="card text-center h-100 border-0 shadow-sm">
                <img src="img/tv1.png" class="card-img-top p-3" alt="TV">
                <div class="card-body">
                    <h5 class="card-title">
                        JVC Televisor 43" QLED
                    </h5>
                    <div class="fs-3 text-danger fw-bold">
                        S/599
                        <span class="fs-6 text-dark">UN</span>
                        <span class="badge bg-danger">
                            -29%
                        </span>
                    </div>
                    <p class="text-secondary text-decoration-line-through fs-5">
                        S/649
                    </p>
                </div>
            </div>
        </div>

        <!-- Producto -->
        <div class="col-lg-2 col-md-4 col-6">
            <div class="card text-center h-100 border-0 shadow-sm">
                <img src="img/laptop.png" class="card-img-top p-3" alt="Laptop">
                <div class="card-body">
                    <h5 class="card-title">
                        Laptop HP Ci5 512GB
                    </h5>
                    <div class="fs-3 text-danger fw-bold">
                        S/2,099
                        <span class="fs-6 text-dark">UN</span>
                        <span class="badge bg-danger">
                            -22%
                        </span>
                    </div>
                    <p class="text-secondary text-decoration-line-through fs-5">
                        S/2,149
                    </p>
                </div>
            </div>
        </div>

        <!-- Producto -->
        <div class="col-lg-2 col-md-4 col-6">
            <div class="card text-center h-100 border-0 shadow-sm">
                <img src="img/celular.png" class="card-img-top p-3" alt="Celular">
                <div class="card-body">
                    <h5 class="card-title">
                        Motorola G77
                    </h5>
                    <div class="fs-3 text-danger fw-bold">
                        S/799
                        <span class="fs-6 text-dark">UN</span>
                        <span class="badge bg-danger">
                            -20%
                        </span>
                    </div>
                    <p class="text-secondary text-decoration-line-through fs-5">
                        S/849
                    </p>
                </div>
            </div>
        </div>

        <!-- Producto -->
        <div class="col-lg-2 col-md-4 col-6">
            <div class="card text-center h-100 border-0 shadow-sm">
                <img src="img/celular.png" class="card-img-top p-3" alt="Celular">
                <div class="card-body">
                    <h5 class="card-title">
                        Motorola G77
                    </h5>
                    <div class="fs-3 text-danger fw-bold">
                        S/799
                        <span class="fs-6 text-dark">UN</span>
                        <span class="badge bg-danger">
                            -20%
                        </span>
                    </div>
                    <p class="text-secondary text-decoration-line-through fs-5">
                        S/849
                    </p>
                </div>
            </div>
        </div>

        <!-- Producto -->
        <div class="col-lg-2 col-md-4 col-6">
            <div class="card text-center h-100 border-0 shadow-sm">
                <img src="img/celular.png" class="card-img-top p-3" alt="Celular">
                <div class="card-body">
                    <h5 class="card-title">
                        Motorola G77
                    </h5>
                    <div class="fs-3 text-danger fw-bold">
                        S/799
                        <span class="fs-6 text-dark">UN</span>
                        <span class="badge bg-danger">
                            -20%
                        </span>
                    </div>
                    <p class="text-secondary text-decoration-line-through fs-5">
                        S/849
                    </p>
                </div>
            </div>
        </div>

        <!-- Producto -->
        <div class="col-lg-2 col-md-4 col-6">
            <div class="card text-center h-100 border-0 shadow-sm">
                <img src="img/celular.png" class="card-img-top p-3" alt="Celular">
                <div class="card-body">
                    <h5 class="card-title">
                        Motorola G77
                    </h5>
                    <div class="fs-3 text-danger fw-bold">
                        S/799
                        <span class="fs-6 text-dark">UN</span>
                        <span class="badge bg-danger">
                            -20%
                        </span>
                    </div>
                    <p class="text-secondary text-decoration-line-through fs-5">
                        S/849
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Footer -->
    <?php include __DIR__ . '/../layouts/footer.php'; ?>
    <script src="<?php echo BASE_URL; ?>/public/js/landing.js"></script>
    </body>
</html>
