<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reseña Histórica - IPUC</title>
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

    <a href="https://www.youtube.com/watch?v=Oh0hKSzIF9s" target="_blank" class="btn-pdf-float">
            Para más información
            </a>

    <main>
        <section class="historia">
            <h2>RESEÑA HISTÓRICA</h2>
            <p>
                Recién llegado, el misionero Larsen compartió con los misioneros trinitarios Charles y Clara Berchtold, 
                quienes al convencerse de la doctrina de la Unicidad de Dios, conversaron con sus seguidores que habían 
                sido bautizados en la Trinidad, y todos pidieron ser bautizados en el nombre de Jesús. Entre ellos se 
                encontraba Maruja Correa, quien era una destacada joven predicadora.
            </p>
            <p>
                En un solo día del mes de junio de 1937, cincuenta y dos (52) colombianos fueron bautizados en el nombre de Jesús 
                por el hermano Charles Berchtold, en el río Servitá, mientras el misionero Larsen observaba como testigo.
            </p>
            <h3>Un Culto de Avivamiento</h3>
            <p>
                En la noche de ese mismo día, celebraron un culto en el que oraron pidiendo el poder de Dios, y el Espíritu Santo 
                vino sobre todos ellos. Algunos recibieron sanidades.
            </p>
            <p>
                Todo esto ocurrió en una finca llamada Loma del Salado, localizada en la Vereda Peña Colorada del municipio de Enciso, 
                departamento de Santander. En aquella finca, el Espíritu Santo se derramó por primera vez en el territorio colombiano.
            </p>
            <p>
                Los misioneros Berchtold fueron los fundadores de la Iglesia de las Buenas Nuevas, que es otra de las agrupaciones 
                pentecostales del nombre de Jesucristo más antiguas de Colombia.
            </p>
            <h3>Expansión y Consolidación de la Obra en Colombia</h3>
            <p>
                El misionero Larsen también compartió con la misionera Pearl Cooper, quien en un principio apoyó a los Berchtold y después 
                colaboró con Larsen en el ministerio. Luego, ella trabajó por su cuenta en Bucaramanga, Cartagena y Luruaco. El hermano 
                Larsen iba a realizar bautismos cuando ella se lo pedía.
            </p>
            <p>
                En septiembre de 1941, la Iglesia Pentecostal Incorporada de los Estados Unidos envió al hermano James Elmer Ball, quien 
                junto con su esposa Grace Helen, realizaron un fructífero trabajo de once años en la ciudad de Bucaramanga.
            </p>
            <p>
                En el año 1945, las Asambleas Pentecostales de Canadá se unieron con la Iglesia Pentecostal Incorporada de los Estados Unidos 
                para formar la Iglesia Pentecostal Unida Internacional. Esta nueva organización contribuyó grandiosamente con el trabajo 
                misionero en Colombia.
            </p>
            <h3>Persecución Religiosa</h3>
            <p>
                Durante esos primeros años, estos predicadores experimentaron una creciente persecución, debido al sectarismo religioso 
                que se vivía en el país.
            </p>
            <p>
                En ese tiempo, no se podía decir que uno era cristiano evangélico, pues les quemaban las casas y templos. Se inventaron 
                canciones que decían:
            </p>
            <blockquote>
                "No queremos protestantes que nos vengan a Colombia a corromper."
            </blockquote>
            <p>
                Los insultaban, les tiraban piedras, los golpeaban, y no les vendían nada en los mercados. A los que eran cristianos los 
                llamaban "protestantes", y no querían tener ningún tipo de relación con ellos.
            </p>
            <h3>Ruptura y Desarrollo de la Iglesia Pentecostal en Colombia</h3>
            <p>
                Por los años 60s, los oficiales de la Iglesia Pentecostal Unida Internacional propusieron a los hermanos colombianos que 
                fueran tomando la dirección de la Iglesia Pentecostal Unida de Colombia.
            </p>
            <p>
                Los misioneros quedaron como consejeros, pero toda la administración pasó a manos de colombianos. Esto llevó a una ruptura 
                organizacional entre las direcciones colombiana y norteamericana a finales de la década.
            </p>
            <h3>Actualidad</h3>
            <p>
                Hoy en día, en el territorio colombiano existe un gran número de organizaciones catalogadas como pentecostales del nombre 
                de Jesucristo.
            </p>
            <h4>Referencias</h4>
            <p>
                Hernández, David. Forero, Eduardo.; Una Historia que no Termina; Editorial Buena Semilla, Medellín Colombia, 2005.
            </p>
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
