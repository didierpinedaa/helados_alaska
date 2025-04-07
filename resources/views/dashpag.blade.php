<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Heladería Alaska</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos personalizados -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f7fa;
            color: #333;
        }
        .sidebar {
            height: 100vh;
            background-color: #ffebcd;
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            padding-top: 20px;
        }
        .sidebar a {
            color: #6c757d;
            text-decoration: none;
            padding: 12px 20px;
            display: block;
            font-size: 18px;
            border-bottom: 1px solid #ddd;
        }
        .sidebar a:hover {
            background-color: #f1b7b7;
            color: #333;
        }
        .sidebar a.active {
            background-color: #ff8c94;
            color: white;
        }
        .content {
            margin-left: 260px;
            padding: 20px;
        }
        .card {
            background-color: #fffbf2;
        }
        .card-header {
            background-color: #f0b7c2;
            color: #fff;
        }
        .card-body {
            background-color: #ffe6e0;
        }
        .footer {
            text-align: center;
            padding: 20px;
            background-color: #ffebcd;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>

    <!-- Barra lateral -->
    <div class="sidebar">
        <h2 class="text-center text-primary">Heladería Alaska</h2>
        <a href="#" class="active">Inicio</a>
        <a href="#">Productos</a>
        <a href="#">Pedidos</a>
        <a href="#">Configuración</a>
    </div>

    <!-- Contenido -->
    <div class="content">
        <div class="container-fluid">
            <h1 class="my-4 text-center text-primary">Bienvenido al Dashboard</h1>

            <!-- Card de productos -->
            <div class="card mb-4">
                <div class="card-header">
                    <h5>Productos Destacados</h5>
                </div>
                <div class="card-body">
                    <p>Aquí puedes ver los productos más populares de nuestra heladería Alaska.</p>
                    <button class="btn btn-primary">Ver Productos</button>
                </div>
            </div>

            <!-- Card de pedidos -->
            <div class="card mb-4">
                <div class="card-header">
                    <h5>Pedidos Recientes</h5>
                </div>
                <div class="card-body">
                    <p>Visualiza los pedidos recientes realizados por los clientes.</p>
                    <button class="btn btn-primary">Ver Pedidos</button>
                </div>
            </div>

            <!-- Card de configuración -->
            <div class="card mb-4">
                <div class="card-header">
                    <h5>Configuración</h5>
                </div>
                <div class="card-body">
                    <p>Aquí puedes configurar los ajustes de la tienda.</p>
                    <button class="btn btn-primary">Ir a Configuración</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Pie de página -->
    <div class="footer">
        <p>&copy; 2025 Heladería Alaska - Todos los derechos reservados.</p>
    </div>

    <!-- Scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>