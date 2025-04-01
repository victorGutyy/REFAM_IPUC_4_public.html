<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - IPUC</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!-- Encabezado de navegación -->
    <header>
        <div class="nav-container">
            <div class="logo-container">
                <img src="assets/images/logo.png" alt="Logo IPUC">
            </div>
            <nav>
                <div class="hamburger-menu" onclick="toggleMenu()">
                    <img src="assets/images/menu.svg" alt="Menú">
                </div>
                <ul class="menu" id="menu">
                    <li><a href="index.php">Inicio</a></li>
                    <li class="dropdown">
                        <a href="#">Nuestra Iglesia ▼</a>
                        <ul class="dropdown-menu">
                            <li><a href="quienes_somos.php">Quiénes somos</a></li>
                            <li><a href="reseña_historica.php">Reseña histórica</a></li>
                            <li><a href="en_que_creemos.php">En qué creemos</a></li>
                        </ul>
                    </li>
                    <li><a href="contacto.php" class="active">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="header-spacer"></div>


    <!-- Contenido principal -->
    <main>
        <section class="contacto">
            <h2>CONTÁCTANOS</h2>
            <p>Estamos para servirte. Escríbenos y pronto estaremos en contacto contigo.</p>

            <form action="#" method="post" class="formulario-contacto">
                <input type="text" name="nombre" placeholder="Nombre completo" required>
                <input type="email" name="correo" placeholder="Correo electrónico" required>
                <textarea name="mensaje" rows="5" placeholder="Escribe tu mensaje aquí..." required></textarea>
                <button type="submit">Enviar mensaje</button>
            </form>

            <div class="info-extra">
                <p><strong>Dirección:</strong> Barrio villa astri lote 1, Calarcá, Quindío</p>
                <p><strong>Teléfono:</strong> +57 3142542855 </p>
                <p><strong>Email:</strong> refamipuc4calarca@gmail.com</p>
                <p><strong>Redes sociales:</strong>
                    <a href="https://www.facebook.com/search/top?q=ipuc%20cuarta%20calarc%C3%A1" target="_blank">Facebook</a> |
                    <a href="#" target="_blank">Instagram</a>
                </p>
            </div>
        </section>
    </main>

    <script>
        function toggleMenu() {
            let menu = document.getElementById("menu");
            menu.classList.toggle("active");
        }

        document.addEventListener("DOMContentLoaded", function () {
            let dropdown = document.querySelector(".dropdown a");
            if (dropdown) {
                dropdown.addEventListener("click", function (e) {
                    e.preventDefault();
                    document.querySelector(".dropdown-menu").classList.toggle("active");
                });
            }
        });
    </script>
</body>
</html>
