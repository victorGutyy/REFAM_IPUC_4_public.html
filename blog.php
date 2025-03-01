<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog IPUC - 4TA CALARCÁ</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!-- Barra de navegación -->
    <header>
        <div class="nav-container">
            <!-- Logo -->
            <div class="logo-container">
                <img src="assets/images/logo.png" alt="Logo IPUC">
            </div>

            <!-- Menú de navegación -->
            <nav>
                <ul class="menu">
                    <li><a href="index.php">Inicio</a></li>
                    <li class="dropdown">
                        <a href="#">Nuestra Iglesia ▼</a>
                        <ul class="dropdown-menu">
                        <li><a href="quienes_somos.php">Quiénes somos</a></li>
                            <li><a href="#">Reseña histórica</a></li>
                            <li><a href="#">En qué creemos</a></li>
                        </ul>
                    </li>
                    <li><a href="contacto.php">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Contenido principal -->
    <main>

        <section class="hero">
            <h1>BIENVENIDOS A NUESTRO BLOG REFAM IPUC SEDE 4TA CALARCÁ</h1>
            <p>Información relevante para nuestra congregación.</p>
        </section>

        <section class="articles">
            <article>
                <h2>Título del artículo</h2>
                <p>Resumen del artículo con información relevante...</p>
                <a href="#">Leer más</a>
            </article>

            <article>
                <h2>Otro tema importante</h2>
                <p>Detalles sobre otro tema relevante...</p>
                <a href="#">Leer más</a>
            </article>
        </section>
    </main>

    <script>
        // Script para activar el menú desplegable
        document.querySelector('.dropdown a').addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector('.dropdown-menu').classList.toggle('active');
        });
    </script>
</body>
</html>
