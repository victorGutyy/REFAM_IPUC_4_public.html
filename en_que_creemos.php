<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>En qué creemos - IPUC</title>
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

         <a href="assets/en_que_creemos.pdf" target="_blank" class="btn-pdf-float">
            Para más información
            </a>

    <main>
        <section class="historia">
            <h2>EN QUÉ CREEMOS</h2>
            <p>
                La Iglesia Pentecostal Unida de Colombia abraza la doctrina de la Unicidad de Dios con sus implicaciones cristológicas y practica el bautismo en el nombre de Jesús. Por eso es considerada como parte de los pentecostales del nombre de Jesucristo o apostólicos.
            </p>

            <h3>LA BIBLIA ES INSPIRADA POR DIOS</h3>
            <p>
                "Toda la Escritura es inspirada por Dios y útil para enseñar, para redargüir, para corregir, para instruir en justicia" 
            </p>
            <blockquote>(2 Timoteo 3:16)</blockquote>
            <p>
                La Biblia es la única autoridad dada por Dios al hombre; toda doctrina, fe, esperanza y enseñanza para la Iglesia debe basarse en ella. “Ninguna profecía de la Escritura es de interpretación privada...” 
            </p>
            <blockquote>(2 Pedro 1:20-21)</blockquote>

            <h3>NATURALEZA DE DIOS</h3>
            <p>
                Creemos en un solo Dios viviente, eterno, infinito en poder, santo en naturaleza, atributos y propósitos. La Escritura afirma que Dios es uno:
            </p>
            <blockquote>"Oye Israel, el Señor nuestro Dios, el Señor uno es". (Marcos 12:29)</blockquote>
            <p>
                Este único Dios verdadero se manifestó en carne en la persona de Jesucristo, quien es "el Alfa y la Omega, principio y fin..." 
            </p>
            <blockquote>(Apocalipsis 1:8)</blockquote>

            <h3>EL NOMBRE</h3>
            <p>
                Dios usó diferentes títulos en el Antiguo Testamento, pero el nombre redentor revelado en el Nuevo Testamento es <strong>Jesús</strong>.
            </p>
            <blockquote>"Y en ningún otro hay salvación; porque no hay otro nombre debajo del cielo, dado a los hombres, en que podamos ser salvos". (Hechos 4:12)</blockquote>

            <h3>LA CREACIÓN Y CAÍDA DEL HOMBRE</h3>
            <p>
                En el principio, Dios creó al hombre puro y santo, pero el pecado entró en el mundo a través de Adán.
            </p>
            <blockquote>"Por cuanto todos pecaron, y están destituidos de la gloria de Dios". (Romanos 3:23)</blockquote>

            <h3>EL PLAN DE SALVACIÓN</h3>
            <h4>Arrepentimiento y Conversión</h4>
            <p>
                El arrepentimiento es el primer paso hacia la salvación.
            </p>
            <blockquote>"Arrepentíos, y bautícese cada uno de vosotros en el nombre de Jesucristo para perdón de los pecados". (Hechos 2:38)</blockquote>

            <h4>Bautismo en Agua</h4>
            <p>
                Creemos en el bautismo por inmersión en el nombre de Jesús como parte del nuevo nacimiento.
            </p>
            <blockquote>"Porque somos sepultados juntamente con él para muerte por el bautismo". (Romanos 6:4)</blockquote>

            <h4>El Bautismo del Espíritu Santo</h4>
            <p>
                Creemos que la evidencia inicial del bautismo en el Espíritu Santo es hablar en otras lenguas.
            </p>
            <blockquote>"Y fueron todos llenos del Espíritu Santo, y comenzaron a hablar en otras lenguas". (Hechos 2:4)</blockquote>

            <h3>LA IGLESIA</h3>
            <p>
                La Iglesia es el cuerpo de Cristo y su misión es proclamar el evangelio y preparar a los creyentes para la eternidad.
            </p>
            <blockquote>"Y yo también te digo, que tú eres Pedro, y sobre esta roca edificaré mi iglesia". (Mateo 16:18)</blockquote>

            <h3>EL REGRESO DE CRISTO</h3>
            <p>
                Creemos en la segunda venida de Cristo y en la resurrección de los justos.
            </p>
            <blockquote>"Porque el Señor mismo con voz de mando... descenderá del cielo". (1 Tesalonicenses 4:16)</blockquote>
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
