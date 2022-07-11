<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fremdspracheninstitut</title>
    <!-- Icon -->
    <link rel="icon" href="assets/img/logos/logo-icon.png">
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/app.css?v=08.07.22a">
    <link rel="stylesheet" href="assets/css/style.css?v=08.07.22b">
    <!-- Scripts -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script defer src="assets/js/index.js?v=08.07.22c"></script>
    <script defer src="https://kit.fontawesome.com/757436a7d6.js" crossorigin="anonymous"></script>
    <script defer src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
    <header class="header">
        <nav class="nav-responsive">
            <div class="logo">
                <a href="#home" class="icon-ref"><img src="assets/img/logos/logo-navbar.png" alt="Fremdspracheninstitut"></a>
            </div>
            <button class="navButton-toggle" aria-label="Desplegar Menú"><i class="fa-solid fa-bars"></i></button>
            <ul class="menu-bar">
                <li class="nav-menu-sections"><a href="#about" class="nav-link-hover nav-style-font">Nosotros</a></li>
                <li class="nav-menu-sections"><a href="#teachers" class="nav-link-hover nav-style-font">Docentes</a></li>
                <li class="nav-menu-sections"><a href="#offers" class="nav-link-hover nav-style-font">Nuestras Ofertas</a></li>
                <li class="nav-menu-sections"><a href="#members" class="nav-link-hover nav-style-font">Ser Miembro</a></li>
                <li class="nav-menu-sections"><a href="#comments" class="nav-link-hover nav-style-font">Comentarios</a></li>
                <li class="nav-menu-sections"><a href="#lessons" class="nav-link-hover nav-style-font">Contactanos</a></li>
                <li class="nav-menu-sections"><a href="#" class="nav-link-hover nav-style-font">Acceder</a></li>
            </ul>
        </nav>
    </header>

    @yield('content')

    <footer>
        <!--start section contact-->
        <section id="contact" class="section-contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-font-color"><br>
                            <h5><b>Fremdspracheninstitut</b></h5>
                            <h5>Calle Santa Ana <b>#</b>105, 29090.</h5>
                            <h5>Tuxtla Gutiérrez.</h5>
                            <h5>Chiapas.</h5>
                            <h5><b>Tel:</b> 9212657749.</h5>
                            <h5><b>fremdspracheinstitut@gmail.com</b></h5>
                        </div>
                        <div class="social-media">
                            <ul class="social-network social-circle">
                                <li><a href="https://wa.me/message/J2TN3OWIRFIGO1" class="icoWhatsapp" title="Whatsapp" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                                <li><a href="https://www.facebook.com/fremdspracheninstitut/" class="icoFacebook" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://instagram.com/fremdspracheinstitut" class="icoInstagram" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="https://www.youtube.com/c/FrauArellano" class="icoYoutube" title="Youtube" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="https://vm.tiktok.com/ZMLa33PJW" class="icoTiktok" title="TikTok " target="_blank"><i class="fab fa-tiktok"></i></a></li>
                            </ul>
                        </div>
                    </div><br>
                </div>
            </div>
        </section>
        <!--end section contact-->

        <!--<div class="style-container">
            <p style="text-align: center;">
                Copyright &copy;<script>
                    document.write(new Date().getFullYear());
                </script> Derechos reservados | Fremdspracheninstitut | Desarrollado por <a href="https://inusualsoftware.com" id="linkCopy"> Inusual Softare </a></a>
            </p>
        </div>-->
    </footer>
</body>

</html>