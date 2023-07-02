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

    

     <!-- ================> About section start here <================== -->
     <section class="about padding-top padding-bottom" id="beneficios">
        <div class="container">
            <div class="about__wrapper">
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div class="about__thumb" data-aos="fade-up" data-aos-duration="1500">
                            <img src="assets/images/about/01.png" alt="About Image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about__content" data-aos="fade-up" data-aos-duration="2000">
                            <p class="subtitle">Beneficios</p>
                            <h2>Seguridad</h2>
                            <p style="font-size: 18px"> Black X, el mejor panel en el mercado para mejorar tu experiencia en Free Fire! Aquí encontrarás una amplia gama de <strong>hacks</strong> exclusivos y diseñados para ayudarte a alcanzar la victoria sin riesgo de baneos o blacklist.</p>
                            <p style="font-size: 18px">Tu seguridad es nuestra máxima prioridad. Nos esforzamos por mantenernos actualizados con las últimas actualizaciones de Free Fire y adaptar nuestras herramientas para garantizar una experiencia sin problemas y sin riesgos.</p>
                            <div class="mint-step">
                                <p class="subtitle color--secondary-color">Lista de beneficios</p>
                                {{-- <h3>How to Mint</h3> --}}
                                {{-- <p>Richard mclintock an Latin professor and hampden-sydney college in virginia and
                                    looked up one of the more obscure words consectetur cites of the word in</p> --}}
                                <ul class="mint-step__list">
                                    <li class="mint-step__list-item"><span class="color--theme-color">1.</span>
                                        Sin riesgo de baneos</li>
                                    <li class="mint-step__list-item"><span class="color--theme-color">2.</span>
                                        Sin riesgo de blacklist</li>
                                    <li class="mint-step__list-item"><span class="color--theme-color">3.</span>
                                      Sin límite de rachas ganadas</li>
                                    <li class="mint-step__list-item"><span class="color--theme-color">4.</span>
                                      Actualizaciones frecuentes</li>
                                    <li class="mint-step__list-item"><span class="color--theme-color">5.</span>
                                        Soporte dedicado 24/7</li>
                                    <li class="mint-step__list-item"><span class="color--theme-color">6.</span>
                                        Buena comunidad</li>
                                </ul>
                                <div class="btn-group">
                                  <a href="#" class="default-btn default-btn--secondary custom-btn btn-6"><span>Adquiere tu Panel <i class="fa-solid fa-crown"></i></span></a>
                                    {{-- <a href="#" class="default-btn default-btn--secondary">Mint Now</a> --}}
                                    {{-- <a href="#" class="default-btn">Whitelist Now</a> --}}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================> About section end here <================== -->

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

	<!-- ================> Counter section start here <================== -->
    <section class="counter">
		<div class="container">
			<div class="counter__wrapper">
				<div class="row g-1">
					<div class="col-lg-3 col-sm-6">
						<div class="counter__item">
							<div class="counter__item-content">
								<h2><span class="purecounter" data-purecounter-start="0"
										data-purecounter-end="8888">8888</span> </h2>
								<p>Total items</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="counter__item">
							<div class="counter__item-content">
								<h2><span class="purecounter" data-purecounter-start="0" data-purecounter-end="1460"
										data-purecounter-once="false">1460</span></h2>
								<p>Total Owners</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="counter__item">
							<div class="counter__item-content">
								<h2>0.<span class="purecounter" data-purecounter-start="0.1" data-purecounter-end="84"
										data-purecounter-once="false">0.84</span></h2>
								<p>floor price [Eth]</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="counter__item">
							<div class="counter__item-content">
								<h2><span class="purecounter" data-purecounter-start="0" data-purecounter-end="13"
										data-purecounter-once="false">13</span>k</h2>
								<p>Volume Traded [Eth]</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ================> Counter section end here <================== -->

	<!-- ================> About section start here <================== -->
	<section class="about padding-top padding-bottom" id="beneficios">
        <div class="container">
            <div class="about__wrapper">
                <div class="row g-5">
                    
                    <div class="col-lg-6">
                        <div class="about__content" data-aos="fade-up" data-aos-duration="2000">
                            <p class="subtitle">Opiniones de nuestros usuarios</p>
                            <h2>Testiminios</h2>
                            {{-- <p style="font-size: 18px">En Black X, nos enorgullece contar con una comunidad de jugadores satisfechos que han experimentado los beneficios de nuestros cheats y herramientas en Free Fire. Aquí te presentamos algunas opiniones de nuestros usuarios</p> --}}
                            <div class="mint-step">
                                {{-- <h3>How to Mint</h3> --}}
                                {{-- <p>Richard mclintock an Latin professor and hampden-sydney college in virginia and
                                    looked up one of the more obscure words consectetur cites of the word in</p> --}}
									<div class="carousel slide" id="carouselExampleDark" data-bs-ride="carousel">
										<div class="carousel-inner">
										  <div class="carousel-item active" data-bs-interval="10000">
											<div class="row">
											  <div class="col-12"><svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
												  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
												</svg><svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
												  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
												</svg><svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
												  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
												</svg><svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
												  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
												</svg><svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
												  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
												</svg>
												<h5 class="my-4 fw-bold lh-sm">Usuario Panel VIP</h5>
												<p class="mb-0 text-center text-md-start">El mejor panel hasta el momento, 100% seguro, sin blacklist. Estoy feliz con los productos de Black X, siempre se preocupan por tu cuenta y por la seguridad.</p>
											  </div>
											  <div class="col-xl-6 pt-4 d-flex d-sm-block flex-center">
												<div class="d-flex align-items-md-center"><img class="img-fluid me-4 me-md-3 me-lg-4" src="https://img001.prntscr.com/file/img001/4gAvv8shR9y2P_Ki4Bg0yA.png" width="100" alt="" />
												  <div class="w-lg-50 my-3">
													<h5 class="mb-0 fw-bold">Aquiles</h5>
													<p class="fw-normal mb-0">Panel VIP</p>
												  </div>
												</div>
											  </div>
											</div>
										  </div>
										  {{-- <div class="carousel-item" data-bs-interval="2000">
											<div class="row h-100">
											  <div class="col-12"><svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
												  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
												</svg><svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
												  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
												</svg><svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
												  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
												</svg><svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
												  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
												</svg><svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
												  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
												</svg>
												<h5 class="my-4 fw-bold lh-sm">User friendly &amp; Customizable</h5>
												<p class="mb-0 text-center text-md-start">Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>
											  </div>
											  <div class="col-xl-6 pt-4 d-flex d-sm-block flex-center">
												<div class="d-flex align-items-md-center"><img class="img-fluid me-4 me-md-3 me-lg-4" src="assets/img/gallery/user-1.png" width="100" alt="" />
												  <div class="w-lg-50 my-3">
													<h5 class="mb-0 fw-bold">Jhon Doe</h5>
													<p class="fw-normal mb-0">Web Developer</p>
												  </div>
												</div>
											  </div>
											</div>
										  </div>
										  <div class="carousel-item">
											<div class="row h-100">
											  <div class="col-12"><svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
												  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
												</svg><svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
												  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
												</svg><svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
												  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
												</svg><svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
												  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
												</svg><svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
												  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
												</svg>
												<h5 class="my-4 fw-bold lh-sm">User friendly &amp; Customizable</h5>
												<p class="mb-0 text-center text-md-start">Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>
											  </div>
											  <div class="col-xl-6 pt-4 d-flex d-sm-block flex-center">
												<div class="d-flex align-items-md-center"><img class="img-fluid me-4 me-md-3 me-lg-4" src="assets/img/gallery/user-2.png" width="100" alt="" />
												  <div class="w-lg-50 my-3">
													<h5 class="mb-0 fw-bold">Viezh Robert</h5>
													<p class="fw-normal mb-0">UI/UX Designer</p>
												  </div>
												</div>
											  </div>
											</div>
										  </div> --}}
										</div>
										<div class="position-relative mt-sm-n5"><a class="carousel-control-prev carousel-icon z-index-2" href="#carouselExampleDark" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next carousel-icon z-index-2" href="#carouselExampleDark" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></a></div>
									  </div>
                            </div>

                        </div>
                    </div>
					<div class="col-lg-6">
                        <div class="about__thumb" data-aos="fade-up" data-aos-duration="1500">
                            <img src="assets/images/banner/testimonial.png" alt="About Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================> About section end here <================== -->

@endsection
