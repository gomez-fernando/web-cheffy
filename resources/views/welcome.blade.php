<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Cheffy</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700,700i|Open+Sans:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <!-- <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet"> -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<link rel="shortout icon" type="image/png" href="favicon.png">
</head>
<body>



	<div class="contenido-header">
		<div class="fondo" id="fondo">
			<h1 class="texto">Cheffy</h1>
		</div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light  menu" id="menu">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                <li class="nav-item">
                  <a class="nav-link" href="#about_us">{{ __('lang.about_us') }}</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="#services">{{ __('lang.services') }}</a>
                      </li>
                <li class="nav-item">
                        <a class="nav-link" href="#contact_form">{{ __('lang.contact') }}</a>
                      </li>
                      <li class="nav-item">
                            <a class="nav-link" href="#where_are_we">{{ __('lang.where_are_we') }}</a>
                          </li>
                <li class="nav-item">
                    <a href="locale/en" class="nav-link"><img src="{{ asset('img/icons/uk_flag.png') }}" alt=""></a>
                </li>
                <li class="nav-item">
                    <a href="locale/es" class="nav-link"><img src="{{ asset('img/icons/spain_flag.png') }}" alt=""></a>
                </li>
              </ul>
            </div>
          </nav>

	<main class="container">
        <span class="anchor" id="about_us"></span>
        <div class="row nosotros justify-content-center">
            <div class="col-12 text-center">
                <h2 class="subtitulo"><span>{{ __('lang.who_are_we') }}</span></h2>
                <h3 class="titulo">{{ __('lang.our_passion') }}</h3>
                <p>{{ __('lang.text_1') }}</p>
                <a href="{{ route('catalog') }}" class="enlace">{{ __('lang.discover') }}</a>
            </div>
        </div>

        <span class="anchor" id="services"></span>
		<div class="row productos">
			<article class="col-12 text-center">
				<h2 class="subtitulo"><span>{{ __('lang.we_provide') }}</span></h2>
				<p class="titulo">{{ __('lang.our_products') }}</p>
				<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit veniam saepe cum aspernatur neque odit? Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae deserunt perferendis. Lorem ipsum dolor sit amet consectetur.</p>
			</article>

{{--			<div class="col-12">--}}


                <div class="row justify-content-center">
                    <article class="col-12 col-lg-6 py-1">
                        <a href="">
                            <figure class="producto">
                                <img src="img/products/pr-1.jpg" class="img-fluid" alt="">
                                <figcaption class="overlay">
                                    <p class="overlay-texto">
                                        Viajes personalizados
                                    </p>
                                </figcaption>
                            </figure>
                        </a>
                    </article>
                </div>

                <div class="row justify-content-center">
					<article class="col-6 col-lg-3 py-1">
                        <a href="">
                            <figure class="producto">
                                <img src="img/products/pr-2.jpg" class="img-fluid" alt="">
                                <figcaption class="overlay">
                                    <p class="overlay-texto">Cata de vinos con degustación</p>
                                </figcaption>
                            </figure>
                        </a>
					</article>

					<article class="col-6 col-lg-3 py-1">
                        <a href="">
                            <figure class="producto">
                                <img src="img/products/pr-3.jpg" class="img-fluid" alt="">
                                <figcaption class="overlay">
                                    <p class="overlay-texto">Menú degustación D.O. Marbellla</p>
                                </figcaption>
                            </figure>
                        </a>
					</article>

					<article class="col-6 col-lg-3 py-1">
                        <a href="">
                            <figure class="producto">
                                <img src="img/products/pr-4.jpg" class="img-fluid" alt="">
                                <figcaption class="overlay">
                                    <p class="overlay-texto">Quesería La Frasera</p>
                                </figcaption>
                            </figure>
                        </a>
					</article>

				</div>
            <a class="d-block btn-productos mx-auto" href="{{ route('catalog') }}" class="enlace">{{ __('lang.all_products') }}</a>
			</div>
{{--		</div>--}}
	</main>

    <div id="carousel" class="carousel slide carousel-fade mb-5" data-ride="carousel" data-pause="false"  data-interval="3000">
        <a href="">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/profits.png" alt="">
                    <div class="carousel-caption d-none d-md-block ">
                        <h3>¿Buscas una oportunidad de inversión?</h3>
                        <h4>Invierte en Cheffy!!</h4>
                    </div>
                    <div class="carousel-caption  d-xs-block">
                        <h4>Invierte en Cheffy!!</h4>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/invest.png" alt="">
                    <div class="carousel-caption d-none d-md-block  ">
                        <h3>¿Buscas una oportunidad de inversión?</h3>
                        <h4>Invierte en Cheffy!!</h4>
                    </div>
                    <div class="carousel-caption  d-xs-block ">
                        <h4>Invierte en Cheffy!!</h4>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/strategy.png" alt="">
                    <div class="carousel-caption d-none d-md-block  ">
                        <h3>¿Buscas una oportunidad de inversión?</h3>
                        <h4>Invierte en Cheffy!!</h4>
                    </div>
                    <div class="carousel-caption  d-xs-block ">
                        <h4>Invierte en Cheffy!!</h4>
                    </div>
                </div>

            </div>
        </a>
    </div>

	<div class="container">
		<div class="row acerca-de justify-content-around">
			<article class="col-10 col-sm-5">
				<figure class="text-center">
					<img src="img/icons/icon-team.png" alt="">
					<figcaption>
						<p>
							<strong class="mb-2">{{ __('lang.experts') }}</strong>
							<div class="w-100"></div>
							{{ __('lang.team_made_up') }}
						</p>
					</figcaption>
				</figure>
			</article>

			<article class="col-10 col-sm-5">
				<figure class="text-center">
					<img src="img/icons/icon-services.png" alt="">
					<figcaption>
						<p>
							<strong class="mb-2">{{ __('lang.commitment') }}</strong>
							<div class="w-100"></div>
							Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem totam dolorem error.
						</p>
					</figcaption>
				</figure>
			</article>
		</div>
	</div>

	<div class="container-fluid px-0 galeria">
		<div class="row justify-content-center mx-0 px-0">
			<div class="col-4 px-0 mx-0">
				<img src="img/display/dp-cocina.jpg" alt="">
			</div>
			<div class="col-4 px-0 mx-0">
				<img src="img/display/dp-sala.jpg" alt="">
			</div>
			<div class="col-4 px-0 mx-0">
				<img src="img/display/dp-cheers.jpg" alt="">
			</div>
		</div>
	</div>

	<div class="container" id="">

        <span class="anchor" id="contact_form"></span>
        <section class="contacto row justify-content-center">
            <div class="col-12 col-md-9 text-center">
                    <h2 class="subtitulo"><span>{{ __('lang.contact_form') }}</span></h2>
            </div>
            <div class="col-sm-9 col-12 col-md-4 text-center">
                {{-- // mostramos mensaje --}}
        @include('includes.message')
                            <form action="{{ route('contactForm') }}" method="POST" id="contactForm">
                                @csrf
							  <div class="form-group">
							    <label for="name">Nombre</label>
							    <input type="text" class="form-control" id="name" aria-describedby="your name" placeholder="" required>
							  </div>
								<div class="form-group">
							    <label for="surname">Apellido</label>
							    <input type="text" class="form-control" id="surname" aria-describedby="your surname" placeholder="" required>
							  </div>
							  <div class="form-group">
							    <label for="email">Email</label>
							    <input type="email" class="form-control" id="email" placeholder="" required>
							  </div>
								<div class="form-group">
								 <label for="text">Tu mensaje</label>
								 <textarea name="text" id="text" class="form-control" rows="5" cols="80" required></textarea>
							 </div>
							  <button type="submit" class="submit-form">Enviar</button>
							</form>

            </div>
        </section>

        <span class="anchor" id="where_are_we"></span>
		<section class="contacto row justify-content-center">
			<div class="col-12 col-md-9 text-center">
				<h2 class="subtitulo"><span>{{ __('lang.where_are_we') }}</span></h2>
			</div>
			<iframe class="col-12 col-md-9" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d476.7119334860765!2d-4.896319086452246!3d36.50772444651502!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7328004cc908d7%3A0x3da5567adbd7a362!2sLos%20Mellizos%20Marbella!5e0!3m2!1ses!2ses!4v1575458614385!5m2!1ses!2ses" width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

			<div class="w-100 mb-4"></div>
			<div class="w-100 mb-4"></div>
			<div>
				<p class="border-bottom border-top">
					<img src="img/icons/icon-location-64.png" alt="">Paseo Marítimo, 8, 29602 Marbella, Málaga
				</p>
			</div>
			<div class="w-100 mb-4"></div>
			<div>
				<p class="border-bottom border-top">
					<img src="img/icons/mobile-phone-8-64.png" alt="">+34 653 891 672
				</p>
            </div>
			<div class="w-100 mb-4"></div>
            <div>
                <p class="border-bottom border-top">
                    <img src="img/icons/inbox-8-64.png" alt="">&nbsp; info@cheffy.com
                </p>
            </div>
        </section>
    </div>

<!-- Footer -->
<footer class="page-footer font-small stylish-color-dark pt-4 redes-sociales">

		<!-- Footer Links -->
		<div class="container text-center text-md-left">

			<!-- Grid row -->
			<div class="row">

				<hr class="clearfix w-100 d-md-none">

				<!-- Grid column -->
				<div class="col-md-4 mx-auto">

					<!-- Links -->
					<h5 class="font-weight-bold text-uppercase mt-3 mb-4">Sobre nosotros</h5>

					<ul class="list-unstyled">
						<li>
							<a href="#!">Quiénes somos</a>
						</li>
						<li>
							<a href="#!">Trabaja con nosotros</a>
						</li>
						<li>
							<a href="#!">Invierte en Cheffy</a>
						</li>
					</ul>

				</div>
				<!-- Grid column -->


				<hr class="clearfix w-100 d-md-none">

				<!-- Grid column -->
				<div class="col-md-4 mx-auto">

					<!-- Links -->
					<h5 class="font-weight-bold text-uppercase mt-3 mb-4">Información importante</h5>

					<ul class="list-unstyled">
						<li>
							<a href="#!">Condiciones generales</a>
						</li>
						<li>
							<a href="#!">Política de privacidad</a>
						</li>
						<li>
							<a href="#!">Preguntas frecuentes</a>
						</li>
						<li>
							<a href="#!">Política de cookies</a>
                        </li>
                        <li>
                            <a href="#!">Atención al cliente</a>
                        </li>
					</ul>

				</div>
				<!-- Grid column -->

			</div>
			<!-- Grid row -->

		</div>
		<!-- Footer Links -->

		<hr>

		<!-- Invierte en Cheffy -->
		<ul class="list-unstyled list-inline text-center py-2">
			<li class="list-inline-item">
				<h5 class="mb-1">Invierte en Cheffy</h5>
			</li>
			<li class="list-inline-item">
				<a href="#!" class="btn btn-danger btn-rounded">Saber más!</a>
			</li>
		</ul>
		<!-- Invierte en Cheffy -->

		<hr>

		<!-- Redes sociales -->
		<ul class="list-unstyled list-inline text-center">
				<li class="list-inline-item">
						<a class="btn-floating btn-gplus mx-1" href="https://sites.google.com/fp.uoc.edu/grupo-tourify/presentaci%C3%B3n-del-proyecto" target="_blank"><img src="img/icons/google-plus-3-96.png" alt="">
						</a>
					</li>
			<li class="list-inline-item">
				<a class="btn-floating btn-fb mx-1" href="https://www.youtube.com/watch?v=-Fyn83okjg8&feature=youtu.be" target="_blank">
						<img src="img/icons/youtube-3-96.png" alt="">
				</a>
			</li>
			<li class="list-inline-item">
				<a class="btn-floating btn-tw mx-1" href="https://github.com/FernandoDavidGomezOrtega/web-cheffy" target="_blank"><img src="img/icons/github-8-96.png" alt="">
				</a>
			</li>
		</ul>
		<!-- Redes sociales -->

		<!-- Copyright -->
		<div class="footer-copyright text-center py-3">© 2018 Copyright: Grupo Tourify - UOC
		</div>
		<!-- Copyright -->

	</footer>


    <script src="js/main.js"></script>

     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
