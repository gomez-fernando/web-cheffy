<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Cheffy</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700,700i|Open+Sans:400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/estilos.css">

	<link rel="shortout icon" type="image/png" href="favicon.png">
</head>
<body>
	<div class="contenido-header">
		<div class="fondo" id="fondo">
			<h1 class="texto">Cheffy</h1>
		</div>
	</div>

	<nav class="menu">
        <a href="#">{{ __('lang.about_us') }}</a>
		<a href="#">{{ __('lang.services') }}</a>
		<a href="#">{{ __('lang.contact') }}</a>
	</nav>

	<main class="container">
		<div class="row nosotros justify-content-center">
			<div class="col-12 text-center">
				<h2 class="subtitulo"><span>{{ __('lang.who_are_we') }}</span></h2>
				<h3 class="titulo">{{ __('lang.our_passion') }}</h3>
				<p>{{ __('lang.text_1') }}</p>
				<a href="#" class="enlace">{{ __('lang.discover') }}</a>
			</div>
		</div>

		<div class="row productos">
			<article class="col-12 text-center">
				<h2 class="subtitulo"><span>{{ __('lang.we_provide') }}</span></h2>
				<p class="titulo">{{ __('lang.our_products') }}</p>
				<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit veniam saepe cum aspernatur neque odit? Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae deserunt perferendis. Lorem ipsum dolor sit amet consectetur.</p>
			</article>

			<div class="col-12">
				<div class="row justify-content-center">
					<article class="col-6 col-lg-3 py-1">
						<figure class="producto">
							<img src="img/products/pr-1.jpg" class="img-fluid" alt="">
							<figcaption class="overlay">
								<p class="overlay-texto">Nombre del producto</p>
							</figcaption>
						</figure>
					</article>

					<article class="col-6 col-lg-3 py-1">
						<figure class="producto">
							<img src="img/products/pr-2.jpg" class="img-fluid" alt="">
							<figcaption class="overlay">
								<p class="overlay-texto">Nombre del producto</p>
							</figcaption>
						</figure>
					</article>

					<article class="col-6 col-lg-3 py-1">
						<figure class="producto">
							<img src="img/products/pr-3.jpg" class="img-fluid" alt="">
							<figcaption class="overlay">
								<p class="overlay-texto">Nombre del producto</p>
							</figcaption>
						</figure>
					</article>

					<article class="col-6 col-lg-3 py-1">
						<figure class="producto">
							<img src="img/products/pr-4.jpg" class="img-fluid" alt="">
							<figcaption class="overlay">
								<p class="overlay-texto">Nombre del producto</p>
							</figcaption>
						</figure>
					</article>

					<button class="d-block btn-productos">{{ __('lang.all_products') }}</button>
				</div>
			</div>
		</div>
	</main>

	<div class="separador text-center text-white">
		<p><q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, eligendi</q></p>
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

	<div class="container-fluid">
		<section class="contacto row justify-content-center">
			<div class="col-12 col-md-9 text-center">
				<h2 class="subtitulo"><span>{{ __('lang.where_are_we') }}</span></h2>
			</div>
			<iframe class="col-12 col-md-9" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1603.4677862691858!2d-4.895630342007969!3d36.50741729500249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfdc51b563715b018!2sPlaya%20Europa!5e0!3m2!1ses!2ses!4v1575375396733!5m2!1ses!2ses" width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

			<div class="w-100 mb-4"></div>
			<div>
				<p class="border-bottom border-top">
					<img src="img/icons/icon-cellphone.png" alt="">Playa La Fontanilla, s/n, 29602 Marbella, Málaga
				</p>
			</div>
			<div class="w-100 mb-4"></div>
			<div>
				<p class="border-bottom border-top">
					<img src="img/icons/icon-cellphone.png" alt="">Tel: 1 23 45 67
				</p>
			</div>
		</section>

		<footer class="row justify-content-center redes-sociales">
			<div class="col-auto">
				<a href="#"><img src="img/icons/facebook.png" alt=""></a>
				<a href="#"><img src="img/icons/twitter.png" alt=""></a>
				<a href="#"><img src="img/icons/instagram-new.png" alt=""></a>
			</div>
		</footer>
	</div>


	<script src="js/main.js"></script>
</body>
</html>
