<?php
$title = "J.A. - À propos de moi";
require '../core/init.php';
require 'layouts/header.php';
?>
		<h2 class="content-divider">À propos de moi</h2>
		<div class="container-sm-pad">
			<div class="row main-row justify-content-center">
				<div class="col-10 col-sm-10 col-lg-5">
					<p>
					Un fier Canadien qui crée des sites web pour le fun. Rien d'autre cool sur moi.
					</p>
				</div>
				<div class="col-10 col-sm-10 col-lg-5">
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
