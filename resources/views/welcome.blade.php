@extends('layouts.app')



<style>
    
</style>
@section('content')
    <!-- ================> Banner section start here <================== -->
    <section id="home" class="banner" style="background-image: url(assets/images/banner/bg.png);">
        <div class="container">
            <div class="banner__wrapper">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="banner__content" data-aos="fade-right" data-aos-duration="2000">
                            <h3>El mejor <span class="color--secondary-color">panel</h3>
                            <!-- <h1>Bored <span class="color--theme-color">Ape <br> NFT</span> Collection</h1> -->
                            <!-- <h1> -->
                                <h1 class="glitch">
                                    <span aria-hidden="true">Black X</span>
                                    Black X
                                    <span aria-hidden="true">Black X</span>
                                </h1>
                            <!-- </h1> -->
                            <h4 class="pb-4">100% seguro, libre de blacklist & ban</h4>
                            <div class="btn-group">
                                {{-- <a href="#" class="default-btn default-btn--secondary custom-btn btn-5">Comprar ahora</a> --}}
                                <a href="#" class="default-btn default-btn--secondary custom-btn btn-6"><span>Comprar ahora <i class="fa-solid fa-crown"></i></span></a>
                                {{-- <button class="custom-btn btn-5"><span>Comprar ahora </span></button> --}}
                                {{-- <a href="#" class="default-btn">Unirse al Discord</a> --}}
                                {{-- <a href="#" class="default-btn custom-btn btn-15">Unirse al Discord <i class="fa-brands fa-discord"></i></a> --}}
                                <a href="#" class="default-btn default-btn--secondary custom-btn btn-7"><span>Unirse al Discord <i class="fa-brands fa-discord"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner__thumb d-flex justify-content-center" data-aos="fade-left"
                            data-aos-duration="2000">
                            <img src="assets/images/banner/05.png" id="imageMz" alt="banner Image">
                            
                            {{-- <a class="banner__video" href="https://www.youtube.com/embed/BKkc2v8echI"
                                data-rel="lightcase">
                                <div class="banner__video-inner">
                                    <svg viewBox="0 0 100 100">
                                        <defs>
                                            <path id="circle" d="
                                            M 50, 50
                                            m -37, 0
                                            a 37,37 0 1,1 74,0
                                            a 37,37 0 1,1 -74,0" />
                                        </defs>
                                        <text>
                                            <textPath xlink:href="#circle">
                                                Panel 100% seguro * Panel 100% seguro *
                                            </textPath>
                                        </text>
                                    </svg>
                                    <span><i class="fa-solid fa-play"></i></span>
                                </div>
                            </a> --}}
                            <div class="banner-shape">
                                <img src="assets/images/banner/icon/01.png" class="" alt="shape">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================> Banner section end here <================== -->

    <!-- ================Blog section start here <================== -->
    <section id="precios" class="blog padding-top padding-bottom back1">
        <div class="container">
            <div class="section-header text-center">
                <p class="subtitle">Tienda</p>
                <h2>Los mejores precios</h2>
            </div>
            <div class="blog__wrapper">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <article class="card__content grid">
                            <div class="card__pricing">
                              <div class="card__pricing-number">
                                <span class="card__pricing-symbol">$</span>10
                              </div>
                              <span class="card__pricing-month">Semanal</span>
                            </div>
                      
                            <header class="card__header">
                              {{-- <div class="card__header-circle grid">
                                <img src="https://fadzrinmadu.github.io/hosted-assets/responsive-pricing-card-using-html-and-css/free-coin.png" alt="" class="card__header-img">
                              </div> --}}
                      
                              {{-- <span class="card__header-subtitle">Producto</span> --}}
                              <h1 class="card__header-title text-center">BYPASS</h1>
                            </header>
                            
                            <span class="card__header-subtitle mb-3">Precios</span>
                            <ul class="card__list grid">
                              <li class="card__list-item">
                                <i class="fa-solid fa-check check__card"></i>
                                <p class="card__list-description pb-0">Bypass emulador</p>
                              </li>
                              <li class="card__list-item">
                                <i class="fa-solid fa-check check__card"></i>
                                <p class="card__list-description pb-0">Antiban</p>
                              </li>
                              <li class="card__list-item">
                                <i class="fa-solid fa-check check__card"></i>
                                <p class="card__list-description pb-0">Antiblacklist</p>
                              </li>
                              <li class="card__list-item">
                                <i class="fa-solid fa-check check__card"></i>
                                <p class="card__list-description pb-0">Soporte 24/7</p>
                              </li>
                              <li class="card__list-item">
                                <i class="fa-solid fa-xmark check__card"></i>
                                <p class="card__list-description pb-0">Aimbot</p>
                              </li>
                              <li class="card__list-item">
                                <i class="fa-solid fa-xmark check__card"></i>
                                <p class="card__list-description pb-0">Balas Magicas</p>
                              </li>
                              <li class="card__list-item">
                                <i class="fa-solid fa-xmark check__card"></i>
                                <p class="card__list-description pb-0">Otros</p>
                              </li>
                            </ul>
                            <a href="#" class="default-btn default-btn--secondary custom-btn btn-6" style="text-align: center"><span>Comprar</span></a>
                            {{-- <button class="card__button">Choose this plan</button> --}}
                            
                          </article>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <article class="card__content grid">
                            <div class="card__pricing">
                              <div class="card__pricing-number">
                                <span class="card__pricing-symbol">$</span>10
                              </div>
                              <span class="card__pricing-month">Semanal</span>
                            </div>
                      
                            <header class="card__header">
                              {{-- <div class="card__header-circle grid">
                                <img src="https://fadzrinmadu.github.io/hosted-assets/responsive-pricing-card-using-html-and-css/free-coin.png" alt="" class="card__header-img">
                              </div> --}}
                      
                              {{-- <span class="card__header-subtitle">Producto</span> --}}
                              <h1 class="card__header-title text-center">PANEL VIP</h1>
                            </header>
                            
                            <span class="card__header-subtitle mb-3">Precios</span>
                            <ul class="card__list grid">
                              <li class="card__list-item">
                                <i class="fa-solid fa-check check__card"></i>
                                <p class="card__list-description pb-0">Bypass emulador</p>
                              </li>
                              <li class="card__list-item">
                                <i class="fa-solid fa-check check__card"></i>
                                <p class="card__list-description pb-0">Antiban</p>
                              </li>
                              <li class="card__list-item">
                                <i class="fa-solid fa-check check__card"></i>
                                <p class="card__list-description pb-0">Antiblacklist</p>
                              </li>
                              <li class="card__list-item">
                                <i class="fa-solid fa-check check__card"></i>
                                <p class="card__list-description pb-0">Soporte 24/7</p>
                              </li>
                              <li class="card__list-item">
                                <i class="fa-solid fa-xmark check__card"></i>
                                <p class="card__list-description pb-0">Aimbot</p>
                              </li>
                              <li class="card__list-item">
                                <i class="fa-solid fa-xmark check__card"></i>
                                <p class="card__list-description pb-0">Balas Magicas</p>
                              </li>
                              <li class="card__list-item">
                                <i class="fa-solid fa-xmark check__card"></i>
                                <p class="card__list-description pb-0">Otros</p>
                              </li>
                            </ul>
                            <a href="#" class="default-btn default-btn--secondary custom-btn btn-6" style="text-align: center"><span>Comprar</span></a>
                            {{-- <button class="card__button">Choose this plan</button> --}}
                            
                          </article>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <article class="card__content grid">
                            <div class="card__pricing">
                              <div class="card__pricing-number">
                                <span class="card__pricing-symbol">$</span>10
                              </div>
                              <span class="card__pricing-month">Semanal</span>
                            </div>
                      
                            <header class="card__header">
                              {{-- <div class="card__header-circle grid">
                                <img src="https://fadzrinmadu.github.io/hosted-assets/responsive-pricing-card-using-html-and-css/free-coin.png" alt="" class="card__header-img">
                              </div> --}}
                      
                              {{-- <span class="card__header-subtitle">Producto</span> --}}
                              <h1 class="card__header-title text-center">REGEDIT</h1>
                            </header>
                            
                            <span class="card__header-subtitle mb-3">Precios</span>
                            <ul class="card__list grid">
                              <li class="card__list-item">
                                <i class="fa-solid fa-check check__card"></i>
                                <p class="card__list-description pb-0">Bypass emulador</p>
                              </li>
                              <li class="card__list-item">
                                <i class="fa-solid fa-check check__card"></i>
                                <p class="card__list-description pb-0">Antiban</p>
                              </li>
                              <li class="card__list-item">
                                <i class="fa-solid fa-check check__card"></i>
                                <p class="card__list-description pb-0">Antiblacklist</p>
                              </li>
                              <li class="card__list-item">
                                <i class="fa-solid fa-check check__card"></i>
                                <p class="card__list-description pb-0">Soporte 24/7</p>
                              </li>
                              <li class="card__list-item">
                                <i class="fa-solid fa-xmark check__card"></i>
                                <p class="card__list-description pb-0">Aimbot</p>
                              </li>
                              <li class="card__list-item">
                                <i class="fa-solid fa-xmark check__card"></i>
                                <p class="card__list-description pb-0">Balas Magicas</p>
                              </li>
                              <li class="card__list-item">
                                <i class="fa-solid fa-xmark check__card"></i>
                                <p class="card__list-description pb-0">Otros</p>
                              </li>
                            </ul>
                            <a href="#" class="default-btn default-btn--secondary custom-btn btn-6" style="text-align: center"><span>Comprar</span></a>
                            {{-- <button class="card__button">Choose this plan</button> --}}
                            
                          </article>
                    </div>
                </div>
                {{-- <div class="mt-5 text-center">
                    <a href="blog.html" class="default-btn"><span>View all blog post</span></a>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- ================Blog section end here <================== -->
@endsection