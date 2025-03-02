<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiénes Somos - IPUC</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <!-- Encabezado y Menú de Navegación -->
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
                    <li><a href="index.php">Inicio</a></li>
                    <li class="dropdown">
                        <a href="#">Nuestra Iglesia ▼</a>
                        <ul class="dropdown-menu">
                            <li><a href="quienes_somos.php">Quiénes somos</a></li>
                            <li><a href="reseña_historica.php">Reseña histórica</a></li>
                            <li><a href="#">En qué creemos</a></li>
                        </ul>
                    </li>
                    <li><a href="contacto.php">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="quienes-somos">
            <h2>¿QUIÉNES SOMOS?</h2>
            <p>
                Por cuanto es la <strong>voluntad de Dios</strong> sacar del mundo un pueblo salvo para la <strong>Gloria de su Nombre</strong>, pueblo que constituye la iglesia de Jesucristo, 
                la cual debe estar edificada sobre el fundamento de los <strong>apóstoles y profetas</strong>, siendo la principal piedra del ángulo <strong>Jesucristo mismo</strong>. (Ef. 2:20; 1 Co. 3:11)
            </p>
            <p>
                Por cuanto se hace necesaria la <strong>permanente comunión</strong> entre los miembros de la iglesia; impartir <strong>consejos</strong> y ser instruidos en la <strong>Palabra de Dios</strong> 
                para la obra del ministerio, y para el ejercicio de los <strong>oficios espirituales</strong> provistos en la Santa Biblia.
            </p>
            <p>
                por cuanto esta comunion <strong>establecida por la voluntad de Dios</strong> es sostenida por el espiritu santo, y El es quien pone
                 en su iglesia: <strong>apóstoles, profetas, evangelistas, pastores y maestros</strong>. (Ef. 2:20; 1 Co. 3:11)
            </p>

                <blockquote>
                "Pedro les dijo: Arrepentíos, y bautícese cada uno de vosotros en el nombre de Jesucristo para perdón de los pecados; y recibiréis el don del Espíritu Santo."
                <br><em>(Hechos 2:38)</em>
            </blockquote>
            <p>
                Porque <strong>para vosotros es la promesa</strong>, y para <strong>vuestros hijos</strong>, y para <strong>todos los que están lejos</strong>, 
                para cuantos el Señor nuestro Dios llamare. (Hechos 2:38-39). 
            </p>
            <p><strong>Declaramos esforzarnos</strong> para guardar la <strong>unidad del Espíritu en el vínculo de la paz</strong>, profesando nuestra adoración a un Señor, 
                una fe y un bautismo, poniendo en práctica: <strong>Una fe y un bautismo</strong>, ya que tenemos un solo Dios y Padre de todos.
</p>
            <blockquote>
                "Solícitos en guardar la unidad del Espíritu en el vínculo de la paz; un cuerpo, y un Espíritu, como fuisteis también llamados en una misma esperanza de vuestra vocación;
                un Señor, una fe, un bautismo, un Dios y Padre de todos, el cual es sobre todos y por todos y en todos." <br><em>(Ef. 4:3-6)</em>
            </blockquote>
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
