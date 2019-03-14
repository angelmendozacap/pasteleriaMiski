<?php
define('PATH_IMGS', './pictures/');
define('PATH_ASSETS', './assets/');

?>
<!DOCTYPE html>
<html lang="es-PE">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Panadería y Pastelería Misk´i; ofrecemos la elaboración tortas, pasteles, bocaditos para todo tipo de eventos (matrimonios, cumpleaños, bautizos, etc.).">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Pacifico|Srisakdi:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo PATH_ASSETS; ?>css/styles.css">
    <link rel="shortcut icon" href="<?php echo PATH_ASSETS; ?>img/logo/miski_logo.png">
    <title>Pastelería Misk'i</title>
</head>

<body>
    <!-- HEADER NAV -->
    <header id="header" class="header">
        <div class="u-container">
            <div class="header-container">
                <div class="header-logo">
                    <a href="#">
                        <img src="<?php echo PATH_ASSETS; ?>img/logo/miski_logo.png" alt="Logo Misk'i">
                    </a>
                </div>
                <div id="toggle" class="header-toggle"></div>
                <nav id="navbar" class="header-nav">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-item__link" href="#welcome">Bienvenido</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-item__link" href="#nosotros">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-item__link" href="#galeria">Galería</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-item__link" href="#contacto">Contacto</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
<<<<<<< HEAD
    <main>
        <!-- BANNER -->
        <section id="welcome" class="banner">
            <div class="banner-logo">
                <div class="banner-logo__subtitle">
                    <p>Pastelería y Panadería</p>
                </div>
                <div class="banner-logo__title">
                    <h1>Misk'i</h1>
                </div>
                <div class="banner-logo__owner">
                    <h2>D' Jessybens</h2>
                </div>
=======
    <!-- BANNER -->
    <section id="welcome" class="banner">
        <div class="banner-logo">
            <div class="banner-logo__subtitle">
                <p>Pastelería y Panadería</p>
            </div>
            <div class="banner-logo__title">
                <h1>Misk'i</h1>
>>>>>>> cb5cd56
            </div>
        </section>
        <!-- SECCIÓN NOSOTROS -->
        <section id="nosotros" class="about u-center">
            <div class="u-container">
                <div class="about-container">
                    <div class="about-container__description">
                        <h2>Nosotros</h2>
                        <p>
                            En <b>Misk´i</b> ofrecemos la elaboración tortas, pasteles, bocaditos para todo tipo de eventos (matrimonios, cumpleaños, bautizos, etc.).
                        </p>
                        <p>
                            <em>
                                <blockquote>Pero más que eso hacemos que esos momentos dulces se conviertan en recuerdos inolvidables.</blockquote>
                            </em>
                        </p>
                    </div>
                    <div class="about-container__image">
                        <img src="<?php echo PATH_ASSETS; ?>img/backgrounds/aboutUs.jpg" alt="">
                    </div>
                </div>
            </div>
<<<<<<< HEAD
        </section>
        <!-- SECCIÓN GALERÍA -->
        <section id="galeria" class="gallery u-center">
            <div class="u-container">
                <div class="gallery-container">
                    <div class="gallery-container__photos">
                        <div class="photos">
                            <div class="photos_card">
                                <img src="<?php echo PATH_IMGS; ?>cakeExample.jpg" alt="Torta de Fresa">
                                <h3>Torta de Fresa</h3>
                                <p>Torta hecha en fresa</p>
                            </div>
                            <div class="photos_card">
                                <img src="<?php echo PATH_IMGS; ?>cakeExample.jpg" alt="Torta de Fresa">
                                <h3>Torta de Fresa</h3>
                                <p>Torta hecha en fresa</p>
                            </div>
                            <div class="photos_card">
                                <img src="<?php echo PATH_IMGS; ?>cakeExample.jpg" alt="Torta de Fresa">
                                <h3>Torta de Fresa</h3>
                                <p>Torta hecha en fresa</p>
                            </div>
                            <div class="photos_card">
                                <img src="<?php echo PATH_IMGS; ?>cakeExample.jpg" alt="Torta de Fresa">
                                <h3>Torta de Fresa</h3>
                                <p>Torta hecha en fresa</p>
                            </div>
                            <div class="photos_card">
                                <img src="<?php echo PATH_IMGS; ?>cakeExample.jpg" alt="Torta de Fresa">
                                <h3>Torta de Fresa</h3>
                                <p>Torta hecha en fresa</p>
                            </div>
                            <div class="photos_card">
                                <img src="<?php echo PATH_IMGS; ?>cakeExample.jpg" alt="Torta de Fresa">
                                <h3>Torta de Fresa</h3>
                                <p>Torta hecha en fresa</p>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-container__description">
                        <h2>Galería</h2>
                        <p>
                            Fotos de trabajos realizados y dejaron satisfechos a nuestros clientes.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer id="contacto" class="footer">
        <div class="u-center">
            <div class="u-container">
                <div class="footer-container">
                    <div class="footer-contact">
                        <p>
                            <span>
                                <i class="fas fa-phone"></i>
                            </span>
                            <a href="tel:+51941942666">941942666</a>
                        </p>
                        <p>
                            <span>
                                <i class="fas fa-envelope"></i>
                            </span>
                            <a href="mailto:jessybens_08@hotmail.com">jessybens_08@hotmail.com</a>
                        </p>
                    </div>
                    <div class="footer-social">
                        <a href="">
                            <span><i class="fab fa-facebook"></i></span>
                        </a>
                        <a href="https://api.whatsapp.com/send?phone=51941942666">
                            <span><i class="fab fa-whatsapp-square"></i></span>
                        </a>
                    </div>
                    <div class="footer-logo">
                        <img src="<?php echo PATH_ASSETS; ?>img/logo/miski_logo.png" alt="Logo Misk'i">
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-rights">
            <small>&copy; Todos los derechos reservados. Misk'i <?php echo date('Y'); ?></small>
        </div>
    </footer>
=======
        </div>
    </section>
    <!-- SECCIÓN NOSOTROS -->
    <section id="nosotros" class="about u-center">
        <div class="u-container">
            <div class="about-container">
                <div class="about-container__description">
                    <h2>Nosotros</h2>
                    <p>
                        En <b>Misk´i</b> ofrecemos la elaboración tortas, pasteles, bocaditos para todo tipo de eventos (matrimonios, cumpleaños, bautizos, etc.).
                    </p>
                    <p>
                        <em>
                            <blockquote>Pero más que eso hacemos que esos momentos dulces se conviertan en recuerdos inolvidables.</blockquote>
                        </em>
                    </p>
                </div>
                <div class="about-container__image">
                    <img src="<?php echo PATH_ASSETS; ?>img/backgrounds/aboutUs.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- SECCIÓN GALERÍA -->
    <section id="galeria" class="gallery u-center">
        <div class="u-container">
            <div class="gallery-container">
                <div class="gallery-container__photos">
                    <div class="photos">
                        <div class="photos_card">
                            <img src="<?php echo PATH_IMGS; ?>cakeExample.jpg" alt="Torta de Fresa">
                            <h3>Torta de Fresa</h3>
                            <p>Torta hecha en fresa</p>
                        </div>
                        <div class="photos_card">
                            <img src="<?php echo PATH_IMGS; ?>cakeExample.jpg" alt="Torta de Fresa">
                            <h3>Torta de Fresa</h3>
                            <p>Torta hecha en fresa</p>
                        </div>
                        <div class="photos_card">
                            <img src="<?php echo PATH_IMGS; ?>cakeExample.jpg" alt="Torta de Fresa">
                            <h3>Torta de Fresa</h3>
                            <p>Torta hecha en fresa</p>
                        </div>
                        <div class="photos_card">
                            <img src="<?php echo PATH_IMGS; ?>cakeExample.jpg" alt="Torta de Fresa">
                            <h3>Torta de Fresa</h3>
                            <p>Torta hecha en fresa</p>
                        </div>
                        <div class="photos_card">
                            <img src="<?php echo PATH_IMGS; ?>cakeExample.jpg" alt="Torta de Fresa">
                            <h3>Torta de Fresa</h3>
                            <p>Torta hecha en fresa</p>
                        </div>
                        <div class="photos_card">
                            <img src="<?php echo PATH_IMGS; ?>cakeExample.jpg" alt="Torta de Fresa">
                            <h3>Torta de Fresa</h3>
                            <p>Torta hecha en fresa</p>
                        </div>
                    </div>
                </div>
                <div class="gallery-container__description">
                    <h2>Galería</h2>
                    <p>
                        Fotos de trabajos realizados y dejaron satisfechos a nuestros clientes.
                    </p>
                </div>
            </div>
        </div>
    </section>
>>>>>>> cb5cd56
    <script src="<?php echo PATH_ASSETS; ?>js/app.js"></script>
</body>

</html> 