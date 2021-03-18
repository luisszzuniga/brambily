<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<title>{{config('app.name')}}</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<meta name="Description" content="Le Brambily Restaurant Mauron">
		<meta name="author" content="Le Brambily">
		<meta name="Revisit-After" content="1 day">
		<meta name="Robots" content="all">
		<meta name="Rating" content="general">
		<meta name="Distribution" content="global">
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<meta name="category" content="restaurant">
		<meta name="language" content="fr">
		<meta name="publisher" content="Le Brambily">
		<meta property="og:title" content="Le Brambily restaurant Mauron"/>
		<meta property="og:type" content="website"/>
		<meta property="og:image" content="https://NOM_DU_SITE_A_DEFINIR.fr/img/logo/open_graph.jpg"/>
		<!--img à définir-->
		<meta property="og:description" content="Le Brambily Restaurant Mauron"/>
		<meta property="og:url" content="https://NOM_DU_SITE_A_DEFINIR.fr/"/>
		<!-- LINKS CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://fontawesome.com/releases/v5.10.0/css/all.css">
		<link rel="stylesheet" href="{{ asset('css/index.css') }}">
	</head>
	<body>
		@if(Session::has('succes'))  
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			<p>
				{{Session::get('succes')}}
			</p>
		</div>
		@endif
		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="container-fluid">
					<a class="navbar-brand" href="#"><img src="{{ asset('images/logo-rouge.svg') }}" alt=""></a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav me-auto mb-2 mb-lg-0">
							<li class="nav-item"><a class="nav-link active" aria-current="page" href="#" onclick="scrollAnimation(0)">Accueil</a></li>
							<li class="nav-item"><a class="nav-link" href="#" onclick="scrollAnimation(1801)">Nos Bières</a></li>
							<li class="nav-item"><a class="nav-link" href="#" onclick="scrollAnimation(2701)">Notre Menu</a></li>
							<li class="nav-item"><a class="nav-link" href="#" onclick="scrollAnimation(3401)">Commander & Contact</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
		<main class="animation">
			<div class="bar" id="bar">
				<img class="waiter" id="waiter" src="images/waiter.png" alt="">
				<div class="carte-bieres" id="carteBieres">
					<h2 class="text-center pt-3">Nos bières</h2>
					<ul class="carte-liste">
						                    @foreach($plates as $plate)                        @if($plate->
						category_id == 13)                            
						<li>{{ $plate->name }} <span class="badge bg-secondary prix">{{ $plate->price }} €</span></li>
						                           @endif                     @endforeach                
					</ul>
				</div>
				<div class="menu" id="menu">
					<h2 class="text-center pt-3">Notre menu</h2>
					<ul class="carte-liste">
						@foreach($plates as $plate)
							@if($plate->category_id === 12)
								<li>{{ $plate->name }} <span class="badge bg-secondary prix">{{$plate->price}} €</span>
									<p>-{{$plate->description}}</p>
								</li>
							@endif
						@endforeach
					</ul>
				</div>
				<div class="order" id="order">
					<section class="ordernow">
						<h3>Commandez maintenant!</h3>
						<form action="{{ route('index.order') }}" method="POST">
							                      @csrf                      
							<input name="name" type="text" class="form-control" placeholder="Nom et Prénom" required>
							<input type="number" name="phone" class="form-control mt-3" required placeholder="Numéro de téléphone">
							<textarea name="order" class="form-control mt-3"  cols="30" rows="7" required>Votre commande ici...</textarea>
							<button class="btn btn-secondary mt-3">Commander</button>
						</form>
					</section>
					<section>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2665.404545653584!2d-2.286105694139875!3d48.08313547697515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480e4c938064e71b%3A0x5bb519556129cddf!2sH%C3%B4tel%20le%20Brambily!5e0!3m2!1sfr!2sfr!4v1615986790654!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
						<aside class="adress">
							<h3>Restaurant Le Brambily</h3>
							<p>
								<i class="fas fa-map-signs mr-3"></i>
								  14 place Henri Thébault, 56430 Mauron
							</p>
							<p>
								<i class="fas fa-phone mr-3"></i>
								  02 30 19 01 41
							</p>
						</aside>
					</section>
					<footer>
						<p class="footer-text">
							                    Le Brambily 2021 - 
							<a class="mentions-legales" href="{{ route('index.mentionsLegales') }}">Mentions Légales</a>
						</p>
					</footer>
				</div>
			</div>
			<div class="portes">
				<div class="porte porte-gauche" id="porteGauche"></div>
				<div class="porte porte-droite" id="porteDroite"></div>
			</div>
			<section class="devanture" id="devanture">
				<h1 class="titre">Restaurant le Brambily</h1>
				<div class="neon"></div>
			</section>
		</main>

		<div class="menu-left" id="menu-left">
			<ul>
				<li><a href="#" onclick='menuBurger()'>Accueil</a></li>
				<li><a href="#bieresAnchor" onclick='menuBurger()'>Les Bières</a></li>
				<li><a href="#menuAnchor" onclick='menuBurger()'>Le Menu</a></li>
				<li><a href="#contactAnchor" onclick='menuBurger()'>Contact & Commandes</a></li>
			</ul>
			<i onclick='menuBurger()' class='fas fa-times close-button'></i>
		</div>

		<header class="mobile-header">
			<a href="#" class="img-link">
				<img src="{{ asset('images/biglogowhite.svg') }}" alt="">
			</a>
			<div class="container">
				<div id="contour">
					<nav class="mobile-nav" id="mobileNav">
						<span class="mobile-nav-span">
							<img src="{{ asset('images/logo-blanc.svg') }}" alt="">
						</span>
						<span class="mobile-nav-burger" id="burgerButton"><i onclick="menuBurger()" class="fas fa-bars"></i></span>
					</nav>
				</div>
				
				<div class="mobile-headers">
					<h1>Le Brambily</h1>
					<h4>Restaurant sur place ou à emporter</h4>
				</div>
			</div>
		</header>

		<main class="mobile-main">
			<div class="container">
				<section class="bieres">
					<h2 id="bieresAnchor">Les bières</h2>
						<div class="row mobile-row">
							@foreach($plates as $plate)
								@if($plate->category_id === 13)
									<div class="col-11 col-sm-5 mobile-card">
										<h4>{{$plate->name}}</h4>
										<p>{{$plate->description}}</p>
										<span>{{$plate->price}} €</span>
									</div>
								@endif
							@endforeach
						</div>
				</section>
				<hr>
				<section class="mobile-menu">
					<h2 id="menuAnchor">Le menu</h2>
					@foreach($categories as $category)
						@if($category->id !== 13)
						<h5>{{$category->name}}</h5>
						<div class="row mobile-row">
							@foreach($plates as $plate)
								@if($plate->category_id === $category->id)
									<div class="col-11 col-sm-5 mobile-card">
										<h4>{{$plate->name}}</h4>
										<p>{{$plate->description}}</p>
										<span>{{$plate->price}} €</span>
									</div>
								@endif
							@endforeach
						</div>
						@endif
					@endforeach
				</section>
				
			</div>
			<section class="contact" id="contactAnchor">
				<div class="container">
					<h2>Commander</h2>
					<form action="{{ route('index.order') }}" method="POST">
						@csrf                      
						<input name="name" type="text" class="form-control" placeholder="Nom et Prénom" required>
						<input type="number" name="phone" class="form-control mt-3" required placeholder="Numéro de téléphone">
						<textarea name="order" class="form-control mt-3"  cols="30" rows="7" required>Votre commande ici...</textarea>
						<button class="btn btn-secondary mt-3">Commander</button>
					</form>

					<hr>

					<h2>Contact</h2>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2665.404545653584!2d-2.286105694139875!3d48.08313547697515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480e4c938064e71b%3A0x5bb519556129cddf!2sH%C3%B4tel%20le%20Brambily!5e0!3m2!1sfr!2sfr!4v1615986790654!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					<aside class="adress">
						<h3>Restaurant Le Brambily</h3>
						<p>
							<i class="fas fa-map-signs mr-3"></i>
							  14 place Henri Thébault, 56430 Mauron
						</p>
						<p>
							<i class="fas fa-phone mr-3"></i>
							  02 30 19 01 41
						</p>
					</aside>
					
				</div>
				<footer class="mobile-footer">
					<p class="footer-text">
											Le Brambily 2021 - 
						<a class="mentions-legales" href="{{ route('index.mentionsLegales') }}">Mentions Légales</a>
					</p>
				</footer>
			</section>
		</main>




		<script src="{{ asset('js/app.js') }}"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	</body>
</html>
