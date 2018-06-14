<?php
$title = "J.A. - Past Projects";
require 'layouts/header.php';
?>
		<h2 class="content-divider">Past Projects</h2>
		<div class="container-sm-pad">
			<div class="row main-row first-row justify-content-around">
				<div class="col-lg-5 col-sm-9 col-10">
					<h3 class="post-title"><a target="_blank" href="http://www.crhsrobotics.com/2018/"class="text-link-header">Centennial Regional High School Robotics Official Site (2017-2018)</a></h3>
					<br>
					<p>
					This website was created for my school robotics (2017-2018).
					</p>
				</div>
				<div class="col-lg-5 col-sm-9 col-10">
					<iframe src="http://www.crhsrobotics.com/2018/">
					  <p>Sorry about that, it doesn't seem like your browser supports iframes. :(</p>
					</iframe>
				</div>
			</div>
		</div>
		<div class="container-sm-pad">
			<div class="row main-row first-row justify-content-around">
				<div class="col-lg-5 col-sm-9 col-10">
					<h3 class="post-title"><a target="_blank" href="PP_1/indexj.html"class="text-link-header">Anti-Bullying Site (French Only; 2018)</a></h3>
					<br>
					<p>
					This website was created for my school french class for anti-bullying (2018).
					</p>
				</div>
				<div class="col-lg-5 col-sm-9 col-10">
					<iframe src="PP_1/indexj.html">
					  <p>Sorry about that, it doesn't seem like your browser supports iframes. :(</p>
					</iframe>
				</div>
			</div>
		</div>
		<div class="container-sm-pad">
			<div class="row main-row first-row justify-content-around">
				<div class="col-lg-5 col-sm-9 col-10">
					<h3 class="post-title"><a target="_blank" href="PP_2/index.html"class="text-link-header">Site about Richard Wagamese's "Indian Horse" (2018)</a></h3>
					<br>
					<p>
					This website was created for my school english class as a project on Richard Wagamese's book "Indian Horse" (2018).
					</p>
				</div>
				<div class="col-lg-5 col-sm-9 col-10">
					<iframe src="PP_2/index.html">
					  <p>Sorry about that, it doesn't seem like your browser supports iframes. :(</p>
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
