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
	{{-- <div class="contenido-header">
		<div class="fondo" id="fondo">
			<h1 class="texto">Cheffy</h1>
		</div>
	</div> --}}

	<nav class="menu">
        <a href="#about_us">{{ __('lang.about_us') }}</a>
		<a href="#services">{{ __('lang.services') }}</a>
		<a href="#contact_form">{{ __('lang.contact') }}</a>
		<a href="#where_are_we">{{ __('lang.where_are_we') }}</a>
	</nav>

	<main class="container">
        {{-- <span class="anchor" id="about_us"></span>
        <div class="row nosotros justify-content-center">
            <div class="col-12 text-center">
                <h2 class="subtitulo"><span>{{ __('lang.who_are_we') }}</span></h2>
                <h3 class="titulo">{{ __('lang.our_passion') }}</h3>
                <p>{{ __('lang.text_1') }}</p>
                <a href="#" class="enlace">{{ __('lang.discover') }}</a>
            </div>
        </div> --}}

        <span class="anchor" id="services"></span>
		<div class="row productos">
			<article class="col-12 text-center">
				<h2 class="subtitulo"><span>{{ __('descubre tu próxima experiencia') }}</span></h2>
				<p class="titulo">{{ __('PRODUCTO 1') }}</p>
				<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit veniam saepe cum aspernatur neque odit? Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae deserunt perferendis. Lorem ipsum dolor sit amet consectetur.</p>
            </article>

            <!-- <div class="col-md-6 col-12"> -->
                <div class="row justify-content-center">
                    <article class="col-12 col-md-6   py-1">
          							<figure class="producto">
          								<img src="img/products/pr-4.jpg" class="img-fluid" alt="">

          							</figure>
          					</article>
                <!-- </div> -->
            </div>
            <article class="col-12 text-center">
      				<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit veniam saepe cum aspernatur neque odit? Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae deserunt perferendis. Lorem ipsum dolor sit amet consectetur.</p>
                  </article>

				</div>
			</div>
		</div>
	</main>

	<div class="container-fluid" id="">
		<footer class="row justify-content-center redes-sociales">
			<div class="col-auto">
				<a href="https://sites.google.com/fp.uoc.edu/grupo-tourify/presentaci%C3%B3n-del-proyecto" target="_blank"><img src="img/icons/google-plus-3-96.png" alt=""></a>
				<a href="https://www.youtube.com/watch?v=-Fyn83okjg8&feature=youtu.be" target="_blank"><img src="img/icons/youtube-3-96.png" alt=""></a>
				<a href="https://github.com/FernandoDavidGomezOrtega/web-cheffy" target="_blank"><img src="img/icons/github-8-96.png" alt=""></a>
			</div>
		</footer>
	</div>


	<script src="js/main.js"></script>
</body>
</html>
