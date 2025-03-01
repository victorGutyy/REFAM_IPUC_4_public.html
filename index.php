<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - REFAM 2025</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <div class="nav-container">
            <div class="logo-container">
                <img src="assets/images/logo.png" alt="Logo REFAM">
            </div>
            <nav>
                <div class="hamburger-menu" onclick="toggleMenu()">
                    <img src="assets/images/menu.svg" alt="Menú">
                </div>
                <ul class="menu" id="menu">
                     <li><a href="login.php" class="btn-login">INICIAR SESIÓN</a></li>
                     <li><a href="https://www.bibliaparalela.com" target="_blank">BIBLIA</a></li>
                    <li><a href="blog.php">BLOG IPUC</a></li>
                    <li><a href="assets/material_refam.pdf" target="_blank">MATERIAL REFAM</a></li>
                    
                </ul>
            </nav>
        </div>
    </header>

    <body>
    <!-- Video de fondo -->
    <video autoplay loop muted playsinline class="background-video">
        <source src="assets/videos/unanimes_ipuc.mp4" type="video/mp4">
        Tu navegador no soporta videos en HTML5.
    </video>

    <main>
        
    </main>

    <!-- Código JavaScript -->
    <script>
        function toggleMenu() {
            let menu = document.getElementById("menu");
            menu.classList.toggle("active");
        }
    </script>

</body>
</html>
