<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Black X, El mejor panel para Free Fire</title>

    <link rel="shortcut icon" href="https://black-x.marbot.bo/assets/img/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/lightcase.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <!-- main css for template -->
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        
.glitch {
  font-size: 8rem;
  font-weight: bold;

  position: relative;
  text-shadow: 0.05em 0 0 #00fffc, -0.03em -0.04em 0 #fc00ff,
    0.025em 0.04em 0 #fffc00;
  animation: glitch 725ms infinite;
}

.glitch span {
  position: absolute;
  top: 0;
  left: 0;
}

.glitch span:first-child {
  animation: glitch 500ms infinite;
  clip-path: polygon(0 0, 100% 0, 100% 35%, 0 35%);
  transform: translate(-0.04em, -0.03em);
  opacity: 0.75;
}

.glitch span:last-child {
  animation: glitch 375ms infinite;
  clip-path: polygon(0 65%, 100% 65%, 100% 100%, 0 100%);
  transform: translate(0.04em, 0.03em);
  opacity: 0.75;
}

@keyframes glitch {
  0% {
    text-shadow: 0.05em 0 0 #00fffc, -0.03em -0.04em 0 #fc00ff,
      0.025em 0.04em 0 #fffc00;
  }
  15% {
    text-shadow: 0.05em 0 0 #00fffc, -0.03em -0.04em 0 #fc00ff,
      0.025em 0.04em 0 #fffc00;
  }
  16% {
    text-shadow: -0.05em -0.025em 0 #00fffc, 0.025em 0.035em 0 #fc00ff,
      -0.05em -0.05em 0 #fffc00;
  }
  49% {
    text-shadow: -0.05em -0.025em 0 #00fffc, 0.025em 0.035em 0 #fc00ff,
      -0.05em -0.05em 0 #fffc00;
  }
  50% {
    text-shadow: 0.05em 0.035em 0 #00fffc, 0.03em 0 0 #fc00ff,
      0 -0.04em 0 #fffc00;
  }
  99% {
    text-shadow: 0.05em 0.035em 0 #00fffc, 0.03em 0 0 #fc00ff,
      0 -0.04em 0 #fffc00;
  }
  100% {
    text-shadow: -0.05em 0 0 #00fffc, -0.025em -0.04em 0 #fc00ff,
      -0.04em -0.025em 0 #fffc00;
  }
}

    </style>
</head>

<body>

    <!-- ===============>> Preloader start here <<================= -->
    <div class="preloader">
        <img src="assets/images/logo/preloader-x.png" alt="Apes land">
    </div>
    <!-- ===============>> Preloader end here <<================= -->



    <!-- ========== Multipage Header Section Starts Here========== -->
    <header class="header-section">
        <div class="header-bottom">
            <div class="container">
                <div class="header-wrapper">
                    <div class="logo">
                        <a href="index.html">
                            <!-- <img src="assets/images/logo/logo.png" alt="logo"> -->
                            <img src="assets/images/logo/logo.png" alt="logo" style="
                                position: absolute;
                                top: 10px;
                            ">
                        </a>
                    </div>
                    <div class="menu-area">
                        <ul class="menu">
                            <li>
                                <a href="#home">Inicio</a>
                            </li>

                            <li>
                                <a href="#beneficios">Beneficios</a>
                            </li>
                            <li>
                                <a href="#precios">Comprar</a>
                            </li>
                            <li>
                                <a href="#faq">Videos</a>
                            </li>
                            <li>
                                <a href="#faq">Review</a>
                            </li>
                        </ul>
                        <div class="header-btn">
                            {{-- <a href="#" class="default-btn default-btn--secondary">
                                <span>Unirse <i class="fa-brands fa-discord"></i></span>
                            </a> --}}
                            {{-- <a href="#" class="default-btn" data-bs-toggle="modal" data-bs-target="#wallet-option">
                                <span>Ingresar <i class="fa-solid fa-user"></i></span>
                            </a> --}}
                            {{-- <a href="#" class="default-btn default-btn--secondary custom-btn btn-6"><span>Ingresar <i class="fa-solid fa-crown"></i></span></a> --}}
                        </div>

                        <!-- toggle icons -->
                        <div class="header-bar d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ========== Multipage Header Section Ends Here========== -->

    @yield('content')

    <!-- ================> Footer section start here <================== -->
    <footer class="footer" style="background: #040404;">
        <div class="footer__wrapper padding-top padding-bottom">
            <div class="container">
                <div class="footer__content text-center">
                    <a class="mb-4 d-inline-block" href="index.html"><img src="assets/images/logo/logo.png"
                            alt="Logo"></a>
                    <ul class="social justify-content-center">
                        <li class="social__item">
                            <a href="#" class="social__link"><i class="fab fa-twitter social__icon_mz"></i></a>
                        </li>
                        <li class="social__item">
                            <a href="#" class="social__link"><i class="fab fa-discord social__icon_mz"></i></a>
                        </li>
                        <li class="social__item">
                            <a href="#" class="social__link"><i class="fab fa-twitch social__icon_mz"></i></a>
                        </li>
                        <li class="social__item">
                            <a href="#" class="social__link"><i class="fab fa-instagram social__icon_mz"></i></a>
                        </li>
                        <li class="social__item">
                            <a href="#" class="social__link"><i class="fab fa-tiktok social__icon_mz"></i></a>
                        </li>
                        <li class="social__item">
                            <a href="#" class="social__link"><i class="fab fa-facebook-f social__icon_mz"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer__copyright">
            <div class="container">
                <div class="text-center py-4">
                    <p class=" mb-0">© 2023 | All Rights Reserved, whith <strong style="color: red">♥</strong> <a href="https://marbot.bo" target="_blank">@marbot.bo</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- ================> Footer section end here <================== -->


    <!-- vendor plugins -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/all.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/countdown.min.js"></script>
    <script src="assets/js/lightcase.js"></script>
    <script src="assets/js/purecounter_vanilla.js"></script>
    <script src="assets/js/custom.js"></script>


    <script>

    setInterval(function(){
        var imageMz = document.getElementById('imageMz');
        
        imageMz.src = "assets/images/banner/06.png";
        imageMz.classList.add("flash");

        setTimeout(function(){
            imageMz.src = "assets/images/banner/05.png";
            imageMz.classList.remove("flash");
        }, 200); // actualizado para que coincida con la duración de la animación
    }, 5000);


//     // Selecciona todos los enlaces del menú
// const enlacesMenu = document.querySelectorAll('nav a');

// // Asigna un evento de clic a cada enlace del menú
// enlacesMenu.forEach(enlace => {
//   enlace.addEventListener('click', function(e) {
//     e.preventDefault(); // Evita el comportamiento predeterminado del enlace

//     const seccionId = this.getAttribute('href'); // Obtiene el atributo href del enlace
//     const seccionObjetivo = document.querySelector(seccionId); // Selecciona el elemento de destino mediante el atributo href

//     seccionObjetivo.scrollIntoView({ behavior: 'smooth' }); // Desplaza suavemente hasta la sección de destino
//   });
// });


    </script>
</body>

</html>