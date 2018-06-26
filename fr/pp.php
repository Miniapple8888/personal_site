<?php
$title = "J.A. - Ancien Projets";
require '../core/init.php';
require 'layouts/header.php';
?>
		<h2 class="content-divider">Anciens projets</h2>
		<div class="container-sm-pad">
			<div class="row main-row first-row justify-content-around">
				<div class="col-lg-5 col-sm-9 col-10">
					<h3 class="post-title"><a target="_blank" href="http://www.crhsrobotics.com/2018/"class="text-link-header">Site Web Officiel pour la Robotique de l'École Secondaire Centennial Régionale(2017-2018)</a></h3>
					<br>
					<p>
					Ce site web était créé pour la Robotique de mon école (2017-2018).
					</p>
				</div>
				<div class="col-lg-5 col-sm-9 col-10">
					<iframe src="http://www.crhsrobotics.com/2018/">
					  <p>Désolé pour cela, il semble que votre navigateur ne supporte pas iframe. :(</p>
					</iframe>
				</div>
			</div>
		</div>
		<div class="container-sm-pad">
			<div class="row main-row first-row justify-content-around">
				<div class="col-lg-5 col-sm-9 col-10">
					<h3 class="post-title"><a target="_blank" href="PP_1/indexj.html"class="text-link-header">Site contre l'intimidation (Français seulement; 2018)</a></h3>
					<br>
					<p>
					Ce site web était créé pour mon cours français à l'école pour contrer l'intimidation (2018).
					</p>
				</div>
				<div class="col-lg-5 col-sm-9 col-10">
					<iframe src="PP_1/indexj.html">
					  <p>Désolé pour cela, il semble que votre navigateur ne supporte pas iframe. :(</p>
					</iframe>
				</div>
			</div>
		</div>
		<div class="container-sm-pad">
			<div class="row main-row first-row justify-content-around">
				<div class="col-lg-5 col-sm-9 col-10">
					<h3 class="post-title"><a target="_blank" href="PP_2/index.html"class="text-link-header">Site sur "Indian Horse" de Richard Wagamese (2018)</a></h3>
					<br>
					<p>
					Ce site web était créé pour un cours d'anglais pour un projet sur le livre de Richard Wagamese "Indian Horse" (2018).
					</p>
				</div>
				<div class="col-lg-5 col-sm-9 col-10">
					<iframe src="PP_2/index.html">
					  <p>Désolé pour cela, il semble que votre navigateur ne supporte pas iframe. :(</p>
					</iframe>
				</div>
			</div>
		</div>
		<div class="stuck_right">
			<button title="Back To Top" class="button" onclick="scrollToTop(1000);">
				&#9651;
			</button>
		</div>
		<script>
		function scrollToTop(scrollDuration) {
			var cosParameter = window.scrollY / 2,
			scrollCount = 0,
			oldTimestamp = performance.now();
			function step (newTimestamp) {
				scrollCount += Math.PI / (scrollDuration / (newTimestamp - oldTimestamp));
				if (scrollCount >= Math.PI) window.scrollTo(0, 0);
				if (window.scrollY === 0) return;
				window.scrollTo(0, Math.round(cosParameter + cosParameter * Math.cos(scrollCount)));
				oldTimestamp = newTimestamp;
				window.requestAnimationFrame(step);
			}
			window.requestAnimationFrame(step);
		}
		</script>
		<?php require "layouts/footer.php"; ?>
