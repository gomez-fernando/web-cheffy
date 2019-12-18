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
<nav class="menu" id="menu">
    <a href="#about_us">{{ __('lang.about_us') }}</a>
    <a href="#services">{{ __('lang.services') }}</a>
    <a href="#contact_form">{{ __('lang.contact') }}</a>
    <a href="#where_are_we">{{ __('lang.where_are_we') }}</a>
    <a class="nav-link" href="locale/en"  style="padding: 10px"><img src="{{ asset('img/icons/uk_flag.png') }}" alt="" class="px-0"></a>
    <a class="nav-link" href="locale/es" style="padding: 10px"><img src="{{ asset('img/icons/spain_flag.png') }}" alt=""></a>
    <div class="collapse navbar-collapse mr-0" id="navbarSupportedContent">
        <div class="form-inline my-2 my-lg-0 ml-auto ">
            <ul class="navbar-nav mr-0">
                <li class="nav-item">
                    <a class="nav-link" href="locale/en"><img src="{{ asset('img/icons/uk_flag.png') }}" alt=""></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="locale/es"><img src="{{ asset('img/icons/spain_flag.png') }}" alt=""></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

	<main class="container">

        <span class="anchor" id="services"></span>
		<div class="row productos">
			<article class="col-12 text-center">
                <h2 class="subtitulo"><span>{{ __('lang.discover') }}</span></h2>
                <p class="titulo">{{ __('lang.product3_tittle') }}</p>
                <p>{{ __('lang.product3_description_1') }}</p>
            </article>

            <!-- <div class="col-md-6 col-12"> -->
                <div class="row justify-content-center">
                    <article class="col-12 col-md-6   py-1">
          							<figure class="producto">
          								<img src="img/products/pr-3.jpg" class="img-fluid" alt="">

          							</figure>
          					</article>
                <!-- </div> -->
            </div>
            <article class="col-12 text-center">
  				<p>{{ __('lang.product3_description_2') }}</p>
            </article>

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
