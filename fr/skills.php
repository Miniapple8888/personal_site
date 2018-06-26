<?php
$title = "J.A. - Compétences";
require '../core/init.php';
require 'layouts/header.php';
?>
		<h2 class="content-divider">HTML</h2>
		<div class="container-sm-pad">
			<div class="row main-row justify-content-center">
				<div class="col-sm-10 col-10 col-lg-6">
					<p>
					HTML (ou <b>H</b>yper <b>T</b>ext <b>M</b>arkup <b>L</b>anguage) est la structure pour tous les sites web. HTML n'est pas un language de programmation.
					HTML fonctionne aussi très proche en conjonction avec <a href="#css" class="text-link">CSS (regardez en-dessous)</a>, pour créer des pages web ainsi qu'avec JS (javascript). 
					</p>
				</div>
				<a name="css"></a>
				<div class="col-sm-10 col-10 col-lg-4">
					<p>
					Je recommende d'aller sur <a target="_blank" href="https://www.w3schools.com/html/default.asp" class="text-link">W3 schools</a> pour apprendre plus sur HTML!
					</p>
				</div>
			</div>
		</div>
		<h2 class="content-divider">CSS</h2>
		<div class="container-sm-pad">
			<div class="row main-row justify-content-center">
				<div class="col-sm-10 col-10 col-lg-4">
					<p>
					CSS (ou <b>C</b>ascading <b>S</b>tyle <b>S</b>heet) est utilisé pour styliser et (dans des mises à jour plus récentes) animer des pages web de HTML <a href="skills.php" class="text-link">(regardez au-dessus)</a> 
					.
					</p>
				</div>
				<div class="col-sm-10 col-10 col-lg-6">
					<h3 class="post-title">Exemple de code CSS</h3>
					<div class="code-block">
						<code>
						<span class="name-code">div</span> { <span class="comment-code">/*Ceci est un commentaire*/</span>
						<br>
						&emsp;&emsp;<span class="code-code">color: black;</span> <span class="comment-code">/*Définit la couleur du texte en noir (#000)*/</span>
						<br>
						&emsp;&emsp;<span class="code-code">background-color: red;</span> <span class="comment-code">/*Définit la couleur de l'arrière-plan en rouge*/</span>
						<br>
						}
						</code>
					</div>
				</div>
			</div>
		</div>
		<a name="animations"></a>
		<div class="container-sm-pad">
			<div class="row main-row justify-content-center">
				<div class="col-sm-10 col-10 col-lg-8">
					<p>
					Je recommende d'aller sur <a target="_blank" href="https://www.w3schools.com/css/default.asp" class="text-link">W3 schools</a> pour apprendre plus sur CSS!
					</p>
				</div>
			</div>
		</div>
		<h2 class="content-divider">Animations (CSS 3.0)</h2>
		<div class="container-sm-pad">
			<div class="row main-row justify-content-center">
				<div class="col-sm-10 col-10 col-lg-3">
					<p>
					Les animations en <a href="#css" class="text-link">CSS (regardez au-dessus)</a> sont utilisés pour ajouter un certain stylisation sur un intervalle de temps sur la page web.
					</p>
				</div>
				<div class="col-sm-10 col-10 col-lg-7">
					<h3 class="post-title">Exemple de code pour les animations en CSS</h3>
					<div class="code-block">
						<code>
						<span class="name-code">div</span> { <span class="comment-code">
						<br>
						&emsp;&emsp;<span class="code-code">animation-name: AnimationName;</span> <span class="comment-code">/*Ceci va associer
						l'animation <span class="name-code">AnimationName</span> à la balise <span class="name-code">div</span>*/</span>
						<br>
						&emsp;&emsp;<span class="code-code">animation-duration: 1s</span> <span class="comment-code">/*Ceci va faire que
						l'animation s'exécute pour 1s.*/</span>
						<br>
						&emsp;&emsp;<span class="code-code">animation-delay: 1s</span> <span class="comment-code">/*Ceci va faire que
						l'animation s'exécute après 1s de moment d'inactivité après son démarrage.*/</span>
						<br>
						}
						</code>
					</div>
					<div class="code-block">
						<code>
						@keyframes <span class="name-code">AnimationName</span> { <span class="comment-code">/*Le nom de cette animation doit être le seul
						mot*/</span>
						<br>
						&emsp;&emsp;<span class="code-code">from {opacity: 0}</span> <span class="comment-code">/*Ceci dit au navigateur de commencer 
						à l'opacité la plus faible (0).*/</span>
						<br>
						&emsp;&emsp;<span class="code-code">to {opacity: 1}</span> <span class="comment-code">/*Ceci dit au navigateur de le
						rendre à l'opacité complète (1) après la duration.*/</span>
						<br>
						}
						</code>
					</div>
				</div>
			</div>
		</div>
		<a name="design"></a>
		<div class="container-sm-pad">
			<div class="row main-row justify-content-center">
				<div class="col-sm-10 col-10 col-lg-8">
					<p>
					Je recommende d'aller sur <a target="_blank" href="https://www.w3schools.com/css/css3_animations.asp" class="text-link">W3 schools</a> pour apprendre plus sur les animations en CSS!
					</p>
				</div>
			</div>
		</div>
		<h2 class="content-divider">Design</h2>
		<div class="container-sm-pad">
			<div class="row main-row">
				<div class="col-sm-10 col-10 col-lg-5">
					
					<p>
						<i>À venir</i>
					</p>
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
