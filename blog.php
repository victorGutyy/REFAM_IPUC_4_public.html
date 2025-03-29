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
            <div class="hamburger-menu" onclick="toggleMenu()">
                <img src="assets/images/menu.svg" alt="Menú">
            </div>
                <ul class="menu">
                    <li><a href="index.php">Inicio</a></li>
                    <li class="dropdown">
                        <a href="#">Nuestra Iglesia ▼</a>
                        <ul class="dropdown-menu">
                        <li><a href="quienes_somos.php">Quiénes somos</a></li>
                            <li><a href="reseña_historica.php">Reseña histórica</a></li>
                            <li><a href="en_que_creemos.php">En qué creemos</a></li>
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
            <p class="mensaje-destacado">JESUCRISTO te ama y te quiere salvar.</p>

            <!-- Contenedor de la imagen -->
            <div class="image-container">
                <img src="assets/images/imagen_ipuc_cuarta.jpg" alt="IPUC Cuarta Calarcá">
            </div>

        </section>

        <section class="articles">
            <article>
                <h2> Conoces a JESUCRISTO?</h2>
                <p>Te invito a conocerlo como dice la escritura</p>
                <a href="https://www.youtube.com/watch?v=5bZLETzdEAU">Escucha el video</a>
            </article>

            <article>
                <h2>Otro tema importante</h2>
                <p>Detalles sobre otro tema relevante...</p>
                <a href="#">Leer más</a>
            </article>
        </section>
    </main>

    <script>
    document.addEventListener("DOMContentLoaded", function () {
        // Activa el menú hamburguesa en móviles
        document.querySelector(".hamburger-menu").addEventListener("click", function () {
            document.getElementById("menu").classList.toggle("active");
        });

        // Activa el menú desplegable en "Nuestra Iglesia"
        document.querySelector('.dropdown a').addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector('.dropdown-menu').classList.toggle('active');
        });
    });
</script>
</body>
</html>
