<!DOCTYPE html>
<html lang="Es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE_BUSINESS; ?> - Empleados</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/css/dashboard.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<?php include __DIR__ . '/../layouts/sidebar.php'; ?>

<!-- CONTENIDO PRINCIPAL -->
<main>
    <nav class="breadcrumb">
        <span>Dashboard</span>
        <i class="fa-solid fa-chevron-right"></i>
        <span>Empleados</span>
        <i class="fa-solid fa-chevron-right"></i>
        <span id="breadcrumb-page">Reportes</span>
    </nav>
    <div class="main-content">
        <div class="table-responsive">
            <?php if(empty($empleados)) : ?>
                  <p>No hay registro</p>
            <?php else: ?>    
            <table class="table table-bordered text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Producto</th>
                        <th>Descripcion</th>
                        <th>Compra</th>
                        <th>Venta</th>
                        <th>Stock</th>
                        <th>fecha de vencimiento</th>
                        <th>Categoria</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($empleados as $empleaditos): ?>
                        <tr>
                            <td><?php echo $empleaditos['IDproducto']?></td>
                            <td><?php echo $empleaditos['nombre']?></td>
                            <td><?php echo htmlspecialchars($empleaditos['descripcion'])?></td>
                            <td><?php echo htmlspecialchars($empleaditos['precio_compra'])?></td>
                            <td><?php echo htmlspecialchars($empleaditos['precio_venta'])?></td>
                            <td><?php echo htmlspecialchars($empleaditos['stock_actual'])?></td>
                            <td><?php echo htmlspecialchars($empleaditos['fecha_vencimiento'])?></td>
                            <td><?php echo htmlspecialchars($empleaditos['IDcategoria'])?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?php endif; ?>
        </div>
    </div>
</main>
<script src="<?php echo BASE_URL; ?>/public/js/dashboard.js"></script>
<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
