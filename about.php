<?php
$title = "J.A. - About";
require 'layouts/header.php';
?>
		<h2 class="content-divider">About Me</h2>
		<div class="container-sm-pad">
			<div class="row main-row justify-content-center">
				<div class="col-10 col-sm-10 col-lg-6">
					<p>
					A proud Canadian dude who makes websites for fun. Nothing much else cool about me.
					</p>
				</div>
				<div class="col-10 col-sm-10 col-lg-4">
					<p>
					<i>Coming Soon</i>
					</p>
				</div>
			</div>
		</div>
		<div class="stuck_left">
			<div class="banner-box">
				<button id="banner-btn">?</button>
					<div class="banner">
						<p>
						Having Trouble? Contact me at <span class="email">j.alfahad@gmail</span>. Please remember that this is still an unfinished
						site, so there may be problems. Thanks!
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