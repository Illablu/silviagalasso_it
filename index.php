<?php require "config.php"; ?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Silvia Galasso | Editorial Design</title>
	<link rel="stylesheet" type="text/css" href="css/skeleton.css" /> 
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel='stylesheet' type='text/css' href="css/owl.carousel.css" />
	<link rel='stylesheet' type='text/css' href="css/owl.theme.css" />
	<link rel="stylesheet" type='text/css' href="css/owl.transitions.css">
	<link rel='stylesheet' type='text/css' href="css/style.css" />
	<link rel='stylesheet' type='text/css' href="css/jquery.fullpage.min.css" />
	<link rel="stylesheet" href="css/lightbox.min.css">
	<script src="https://use.typekit.net/ucj3pba.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>
	<script src="js/jquery-2.1.4.min.js"></script>
	<meta name="robots" content="noindex">
	<meta name="googlebot" content="noindex">
	<meta name="description" content="Impaginazione, Grafica editoriale, Correzione bozze, Revisione testi" />
	<meta name="keywords" content="Silvia Galasso,editorial design,impaginazione,grafica editoriale,correzione bozze,revisione testi,libri,cataloghi,brochures,dépliant,volantini,biglietti da visita,compilazione e personalizzazione cv" />
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script src="//cdn.jsdelivr.net/jquery.scrollto/2.1.2/jquery.scrollTo.min.js"></script>
	<script src="js/jquery-bigtext.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src='js/jquery-validate.min.js'></script>
	<script src='js/jquery-validate.messages_it_en.js'></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">	
	<script type="text/javascript">
	$(document).ready(function() {
 	  //$("header h1").bigtext({maxfontsize: 170});
	  //$("header h2").bigtext({maxfontsize: 150});
	  //$(".headline li.item").bigtext({maxfontsize: 25});

	  $('.portfolio').owlCarousel({
	    singleItem: false,
	    items : 2,
	    transitionStyle : "backSlide"
	    });

	  $(".portfolio-next").click(function(){
	    owl.trigger('owl.next');
	  })
	  $(".portfolio-prev").click(function(){
	    owl.trigger('owl.prev');
	  })

		$('.form').validate({
			lang: 'it',
			ignore: ":hidden:not(.my_cpa)",
			rules:{
				hiddencode: {
			     required: function() {
			         if(grecaptcha.getResponse() == '') {
			             return true;
			         } else {
			             return false;
			         }
			     }
				}
			},
			submitHandler: function(form) {
				$.ajax({
					type: "POST",
					url: "email.php",
					data: $(form).serialize(),
					timeout: 3000,
					success: function() {
						$('.form fieldset').fadeOut(300, function(){
							$('.form').validate().resetForm();
							$('.form')[0].reset();
							grecaptcha.reset();
							$('.form fieldset').delay(10000).fadeIn(300);
							$('.form .feedback').html("<p class='submission-confirm success'>Grazie! Il tuo messaggio è stato inviato | Thank You! Your message has been sent.</p>").fadeIn(300).delay(10000).fadeOut(300);
						});
						
					},
					error: function() {
						$('.form .feedback').html("<p class='submission-confirm error'>Qualcosa è andato storto, riprova | There was a problem with your submission, please try again.</p>").fadeIn(300).delay(10000).fadeOut(300);
					}
				});
				return false;
			}
		});
	});
</script>
</head>
<body>
	<div id="header">
		<div class="wrapper">
			<div class="container">
				<div class="row">
					<div class="twelve columns">
						<div class="titles">
							<h1><span><span class="pink">S</span>ilvia <span class="pink">G</span>ala<span class="pink">ss</span>o</span></h1>
							<h2><span class="smaller">editorial design</span></h2>
						</div>
						<div class="box-separator"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="fullpage">
		<div class="section active" id="section0">
			<div class="wrapper">
				<div class="container">
					<div class="row">
						<div class="twelve columns">
							<header>
								<div class="titles">
									<h1><span><span class="pink">S</span>ilvia <span class="pink">G</span>ala<span class="pink">ss</span>o</span></h1>
									<h2><span class="smaller">editorial design</span></h2>
								</div>
								
								<ul class="headline">
									<li class="item"><span>impaginazione</span></li>
									<li class="small-separator"><span class="separator circle"></span></li>
									<li class="item"><span>grafica editoriale</span></li>
									<li class="hidden"><span class="separator circle"></span></li>
									<li class="clear item"><span>correzione bozze</span></li>
									<li class="small-separator"><span class="separator circle"></span></li>
									<li class="item"><span>revisione testi</span></li>
								</ul>
							</header>	
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section" id="section1">
			<div class="wrapper">
				<div class="container">
					<div class="row">
						<div class="twelve columns">
							<h3 class="black-box">di cosa mi occupo<span class="en smaller"><span class="separator"></span>what I do</span></h3>

							<ul class="what">
								<li>libri<span class="en"><span class="separator"></span>books</span></li>
								<li>cataloghi<span class="en"><span class="separator"></span>catalogues</span></li>
								<li>brochures<span class="en"></span></li>
								<li>dépliant<span class="en"></span></li>
								<li>volantini<span class="en"><span class="separator"></span>flyers</span></li>
								<li>biglietti da visita<span class="en"><span class="separator"></span>business cards</span></li>
								<li>compilazione e personalizzazione cv<span class="en"><span class="separator"></span>resume layout and customization</span></li>
							</ul>


							<div class="find-me desktop">You can find me here!</div>
							<div class="find-me mobile">You can find me here!</div>
							<ul class="find">
								<li class="in"><a href="http://it.linkedin.com/in/silgalasso" target="_blank">in</a></li>
								<li class="fb"><a href="http://www.facebook.com/silviagalasso.it/" target="_blank">fb</a></li>
								<li class="be"><a href="http://www.behance.net/silvia_galasso" target="_blank">be</a></li>
								<li class="pr"><a href="http://it.pinterest.com/silviagalasso/" target="_blank">pr</a></li>
								<li class="i"><a href="http://www.instagram.com/sil.galasso/" target="_blank">i</a></li>
							</ul>
							<p class="contact-info"><?php echo $recipient_email; ?> / p.iva 01785320936</p>

						</div>
					</div>
					<div class="row">
						<div class="twelve columns">
							<div class="box">
								<p>Per informazioni e per ricevere un preventivo gratuito, <a href="#contact" class="next-step">contattami</a>.</p>
								<p class="en smaller">If you need more info or to request a free estimate, please <a href="#contact" class="next-step">contact me</a>.</p>
							</div>
							<div class="box-separator"></div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<div class="section" id="section2">
			<div class="wrapper">
				<div class="container">
					<div class="row">
						<div class="twelve columns">
							<h3 class="black-box">portfolio</h3>
							<div class="portfolio owl-carousel owl-theme">
								<div class="item">
									<a href="portfolio/portfolio-01.jpg" data-lightbox="portfolio"><img src="portfolio/portfolio-01-th.jpg" alt="Portfolio" /></a>
									<div class="description">
										<h5>progetto grafico / impaginazione / correzione bozze</h5>
										<p>Leonardo Benevolo<br />
										<strong><em>Indagine su Santo Spirito di Brunelleschi</em></strong><br />
										Guaraldi editore (2015)</p>
									</div>
								</div>
								<div class="item">
									<a href="portfolio/portfolio-02.jpg" data-lightbox="portfolio"><img src="portfolio/portfolio-02-th.jpg"  alt="Portfolio" /></a>
									<div class="description">
										<h5>progetto grafico / impaginazione / correzione bozze</h5>
										<p>G. Bordignon, M. Centanni, G. Cerri, S. Galasso, S. Garipoli, A. Grilli, C. Licitra, F. Lo Piparo, M. Nuzzi, A. Pedersoli, L. Rebaudo, O. Taplin<br />
										<strong><em>Scene dal mito. Iconologia del dramma antico</em></strong><br />
										Guaraldi editore (2015)</p>
									</div>
								</div>
								<div class="item">
									<a href="portfolio/portfolio-03.jpg" data-lightbox="portfolio"><img src="portfolio/portfolio-03-th.jpg"  alt="Portfolio" /></a>
									<div class="description">
										<h5>progetto grafico / impaginazione / correzione bozze</h5>
										<p>Lorenzo Bonoldi<br />
										<strong><em>Isabella d’Este. La Signora del Rinascimento</em></strong><br />
										Guaraldi editore (2015)</p>
									</div>
								</div>
								<div class="item">
									<a href="portfolio/portfolio-04.jpg" data-lightbox="portfolio"><img src="portfolio/portfolio-04-th.jpg"  alt="Portfolio" /></a>
									<div class="description">
										<h5>progetto grafico / impaginazione</h5>
										<p>Elisa Bastianello<br />
										<strong><em>Il Castello e il Feudo dei Bissari tra storia e mito</em></strong><br />
										edizioni Omega s.r.l. (2014)</p>
									</div>
								</div>
								<div class="item">
									<a href="portfolio/portfolio-05.jpg" data-lightbox="portfolio"><img src="portfolio/portfolio-05-th.jpg"  alt="Portfolio" /></a>
									<div class="description">
										<h5>graphic design</h5>
										<p>Materiale pubblicitario:<br />
										<strong><em>dépliant / brochure / volantini / biglietti da visita</em></strong><br />
										</p>
									</div>
								</div>
								<div class="item">
									<a href="portfolio/portfolio-06.jpg" data-lightbox="portfolio"><img src="portfolio/portfolio-06-th.jpg"  alt="Portfolio" /></a>
									<div class="description">
										<h5>graphic design</h5>
										<p>Prove di grafica pubblicitaria e riproduzione grafica di oggetti tridimensionali<br />
										<span class="details">immagini prese da Internet a puro scopo esercitativo / copyright non verificato</span></p>
									</div>
								</div>
								<div class="item">
									<a href="portfolio/portfolio-07.jpg" data-lightbox="portfolio"><img src="portfolio/portfolio-07-th.jpg"  alt="Portfolio" /></a>
									<div class="description">
										<h5>graphic design</h5>
										<p>Esercizi di fotoritocco / restauro fotografico digitale<br />
										<span class="details">immagine presa da Internet a puro scopo esercitativo / copyright non verificato</span>
									</p>
									</div>
								</div>
								<div class="item">
									<a href="portfolio/portfolio-08.jpg" data-lightbox="portfolio"><img src="portfolio/portfolio-08-th.jpg"  alt="Portfolio" /></a>
									<div class="description">
										<h5>graphic design</h5>
										<p>Prove di grafica pubblicitaria / fotoritocco<br />
										<span class="details">immagine presa da Internet a puro scopo esercitativo / copyright non verificato</span><br />
										</p>
									</div>
								</div>
								<div class="item">
									<a href="portfolio/portfolio-09.jpg" data-lightbox="portfolio"><img src="portfolio/portfolio-09-th.jpg"  alt="Portfolio" /></a>
									<div class="description">
										<h5>graphic design</h5>
										<p>Esercizi di grafica vettoriale<br />
										<span class="details">immagine presa da Internet a puro scopo esercitativo / copyright non verificato</p>
									</div>
								</div>
								<div class="item">
									<a href="portfolio/portfolio-10.jpg" data-lightbox="portfolio"><img src="portfolio/portfolio-10-th.jpg"  alt="Portfolio" /></a>
									<div class="description">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section" id="section3">
			<div class="wrapper">
				<div class="container">
					<div class="row">
						<div class="twelve columns">
							<h3 class="black-box">Contattami<span class="en smaller"><span class="separator"></span>contact me</span></h3>
							<br /><br />

							<form class="form">
								<fieldset>
									<div class="row">
										<div class="six columns">
											<label for="email">Email<span class="en"><span class="separator"></span>Email</span></label>  
											<input name="email" id="email" placeholder="" required class="u-full-width" type="email">
										</div>
										<div class="six columns">
											<label for="name">Nome<span class="en"><span class="separator"></span>Name</span></label>  
											<input id="name" name="name" placeholder="" required class="u-full-width" type="text">
										</div>
									</div>
									<div class="row">
										<div class="twelve columns">
											<label for="message">Messaggio<span class="en"><span class="separator"></span>Message</span></label>
											<textarea placeholder="" class="u-full-width" required name="message" id="message"></textarea>
										</div>
									</div>
									<div class="row">
										<div class="six columns">
											<label>&nbsp;</label>
											<div class="g-recaptcha" data-sitekey="6Ldp3xgTAAAAAMc1B0aqGVnLAco8unSmEDqoC8MZ"></div>
                      						<input type="hidden" class="my_cpa hiddencode required" name="hiddencode" id="hiddencode">  
										</div>
									</div>
									<div class="row">
										<div class="six columns">
											<label class="col-md-4 control-label">&nbsp;</label>
											<input type="submit" value="Invia / Submit" />
										</div>
									</div>
								</fieldset>
								<div class="feedback"></div>
							</form>
							<br /><br /><br /><br />
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="js/lightbox.min.js"></script>
</body>
</html>