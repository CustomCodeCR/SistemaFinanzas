<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <nav class="sidebar">
        <div class="sidebar-header">
            <h3>Menu</h3>
        </div>
        <ul class="list-unstyled components">
            <li>
                <a href="index.php">
                    <i class="fas fa-house-user"></i> 
                    <span>Inicio</span>
                </a>
            </li>
            <li>
                <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fas fa-user-cog"></i> 
                    <span>Gestión de Cuentas</span>
                    <i class="fas fa-angle-down"></i> 
                </a>
                <ul class="collapse list-unstyled" id="submenu1">
                    <li>
                        <a href="opcion1.php">
                            <i class="fas fa-wallet"></i> 
                            <span>Cuentas</span>
                        </a>
                    </li>
                    <li>
                        <a href="opcion2.php">
                            <i class="fas fa-university"></i> 
                            <span>Bancos</span>
                        </a>
                    </li>
                    <li>
                        <a href="opcion3.php">
                            <i class="fas fa-coins"></i> 
                            <span>Divisas</span>
                        </a>
                    </li>
                    <li>
                        <a href="opcion3.php">
                            <i class="fas fa-piggy-bank"></i> 
                            <span>Tipo de Cuenta</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fas fa-exchange-alt"></i> 
                    <span>Movimientos</span>
                    <i class="fas fa-angle-down"></i> 
                </a>
                <ul class="collapse list-unstyled" id="submenu2">
                    <li>
                        <a href="opcion1.php">
                            <i class="fas fa-money-check-alt"></i> 
                            <span>Transacciones</span>
                        </a>
                    </li>
                    <li>
                        <a href="opcion2.php">
                            <i class="fas fa-redo"></i> 
                            <span>Recurrentes</span>
                        </a>
                    </li>
                    <li>
                        <a href="opcion3.php">
                            <i class="fas fa-tags"></i> 
                            <span>Categorías</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="otra_pagina.php">
                    <i class="fas fa-chart-pie"></i> 
                    <span>Presupuestos</span>
                </a>
            </li>
            <li>
                <a href="otra_pagina.php">
                    <i class="fas fa-bullseye"></i> 
                    <span>Metas Financieras</span>
                </a>
            </li>
            <li>
                <a href="otra_pagina.php">
                    <i class="fas fa-exchange-alt"></i> 
                    <span>Tipo de Cambio</span>
                </a>
            </li>
            <li>
                <a href="otra_pagina.php">
                    <i class="fas fa-chart-bar"></i> 
                    <span>Reportes y Estadísticas</span>
                </a>
            </li>
        </ul>
    </nav>


    <!-- JavaScript para manejar el dropdown -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const dropdownToggles = document.querySelectorAll('.dropdown-toggle');

            dropdownToggles.forEach(function(toggle) {
                toggle.addEventListener('click', function(e) {
                    e.preventDefault();
                    const submenu = this.nextElementSibling;
                    submenu.classList.toggle('show');

                    const arrow = this.querySelector('.fa-angle-down');
                    arrow.classList.toggle('rotate');
                });
            });
        });
    </script>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #2c3e50;
            padding-top: 20px;
            color: white;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        .sidebar-header {
            padding: 20px;
            text-align: center;
            background-color: #34495e;
        }

        .sidebar-header h3 {
            margin: 0;
            font-size: 1.5rem;
            color: #ecf0f1;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            padding: 10px;
        }

        .sidebar ul li a {
            color: #bdc3c7;
            text-decoration: none;
            display: flex;
            align-items: center;
            padding: 10px;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .sidebar ul li a:hover {
            background-color: #34495e;
            color: #ecf0f1;
        }

        .sidebar ul li a i {
            margin-right: 10px;
            font-size: 1.2rem;
        }

        .sidebar ul li a .fa-angle-down {
            margin-left: auto;
            transition: transform 0.3s ease;
        }

        .sidebar ul li a .fa-angle-down.rotate {
            transform: rotate(180deg);
        }

        .sidebar ul li .collapse {
            padding-left: 20px;
            display: none;
        }

        .sidebar ul li .collapse.show {
            display: block;
        }

        .sidebar ul li .collapse li a {
            padding-left: 30px;
        }
    </style>
</body>

</html>