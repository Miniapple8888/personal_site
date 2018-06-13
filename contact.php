<?php
$title = "J.A. - Contact";
require 'layouts/header.php';
?>
		<h2 class="content-divider">Contact Me</h2>
		<div class="container-sm-pad">
			<div class="row main-row justify-content-center">
				<div class="col-10 col-sm-10 col-lg-5">
					<p>
					You can use <span class="email">j.alfahad@gmail.com</span> to get ahold of me.
					</p>
				</div>
				<div class="col-10 col-sm-10 col-lg-5">
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

		<?php require 'layouts/footer.php'; ?>