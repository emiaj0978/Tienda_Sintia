<!--El archivo .htacces tiene este linea RewriteRule ^(.+)$ app/index.php?url=$1 [QSA,L] -->
<!--Detectamos en qué pagina estamos para marcar el link activo del siderbar(inicio,producto,...)-->
 <?php 
    $rutaActual = explode('/', trim($_GET['url'] ?? 'dashboard', '/'))[0] ?: 'dashboard';
 ?>

<!-- TOPBAR (solo visible en móvil) -->
<div class="topbar">
    <div class="title-business">
        <span><?php echo htmlspecialchars($usuario['nombre_usuario'] ?? 'Usuario'); ?></span>
    </div>
    <div class="btn-menu">
        <button class="hamburger" aria-label="Abrir menú">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>
</div>

<!-- OVERLAY -->
<div class="overlay"></div>

<!-- SIDEBAR -->
<aside class="sidebar">
    <div class="sidebar-logo"><?php echo htmlspecialchars($usuario['nombre_usuario'] ?? 'Usuario'); ?></div>
    <ul>
        <li>
            <a href="<?php echo BASE_URL; ?>/dashboard"
                class="<?php echo $rutaActual === 'dashboard' ? 'activo' : ''   ; ?>" >
                <i class="fa-solid fa-house"></i>
                <span>Inicio</span>
            </a>
        </li>
        <li>
            <a href="<?php echo BASE_URL; ?>/productos"
                class="<?php echo $rutaActual === 'productos' ? 'activo' : ''; ?>"> 
                <i class="fa-solid fa-cart-shopping"></i>
                <span>Producto</span>
            </a>
        </li>
        <li>
            <a href="<?php echo BASE_URL; ?>/categorias"
                class="<?php echo $rutaActual === 'categorias' ? 'activo' : ''; ?>"> 
                <i class="fa-solid fa-tags"></i>
                <span>Categoria</span>
            </a>
        </li>
        <li>
            <a href="<?php echo BASE_URL; ?>/entradas"
                class="<?php echo $rutaActual === 'entradas' ? 'activo' : ''; ?>"> 
                <i class="fa-solid fa-right-to-bracket"></i>
                <span>Entrada</span>
            </a>
        </li>
        <li>
            <a href="<?php echo BASE_URL; ?>/salidas"
                class="<?php echo $rutaActual === 'salidas' ? 'activo' : ''; ?>"> 
                <i class="fa-solid fa-truck"></i>
                <span>salida</span>
            </a>
        </li>
        <li class="nav-logout">
            <a href="<?php echo BASE_URL; ?>/logout" id="btn-logout">
                <i class="fa-solid fa-right-from-bracket"></i>
                <span>Cerrar sesión</span>
            </a>
        </li>
    </ul>
</aside>
