<?php
$title = "J.A. - Skills";
require 'layouts/header.php';
?>
		<h2 class="content-divider">HTML</h2>
		<div class="container-sm-pad">
			<div class="row main-row justify-content-around">
				<div class="col-sm-10 col-10 col-lg-6">
					<p>
					HTML (or <b>H</b>yper <b>T</b>ext <b>M</b>arkup <b>Language</b>) is the structure for all websites. HTML is not a programming language.
					HTML also works very closely in conjuction with <a href="#css" class="text-link">CSS (see below)</a>, to create webpages, as well as JS (javascript). 
					</p>
				</div>
				<a name="css"></a>
				<div class="col-sm-10 col-10 col-lg-4">
					<p>
					I recommend going to <a target="_blank" href="https://www.w3schools.com/html/default.asp" class="text-link">W3 schools</a> to learn more about HTML!
					</p>
				</div>
			</div>
		</div>
		<h2 class="content-divider">CSS</h2>
		<div class="container-sm-pad">
			<div class="row main-row justify-content-around">
				<div class="col-sm-10 col-10 col-lg-4">
					<p>
					CSS (or <b>C</b>ascading <b>S</b>tyle <b>S</b>heet) is used to design and (in more recent updates) animate HTML webpages <a href="skills.php" class="text-link">(see above)</a> 
					.
					</p>
				</div>
				<div class="col-sm-10 col-10 col-lg-6">
					<h3 class="post-title">CSS code example</h3>
					<div class="code-block">
						<code>
						<span class="name-code">div</span> { <span class="comment-code">/*This is a comment*/</span>
						<br>
						&emsp;&emsp;<span class="code-code">color: black;</span> <span class="comment-code">/*Sets the text color to black (#000)*/</span>
						<br>
						&emsp;&emsp;<span class="code-code">background-color: red;</span> <span class="comment-code">/*Sets the background-color to red*/</span>
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
					I recommend going to <a target="_blank" href="https://www.w3schools.com/css/default.asp" class="text-link">W3 schools</a> to learn more about CSS!
					</p>
				</div>
			</div>
		</div>
		<h2 class="content-divider">Animations (CSS 3.0)</h2>
		<div class="container-sm-pad">
			<div class="row main-row justify-content-around">
				<div class="col-sm-10 col-10 col-lg-3">
					<p>
					<a href="#css" class="text-link">CSS (see above)</a> animations are used to add certain stylings over an interval of time in a webpage.
					</p>
				</div>
				<div class="col-sm-10 col-10 col-lg-7">
					<h3 class="post-title">CSS animation code example</h3>
					<div class="code-block">
						<code>
						<span class="name-code">div</span> { <span class="comment-code">
						<br>
						&emsp;&emsp;<span class="code-code">animation-name: AnimationName;</span> <span class="comment-code">/*This will associate
						the <span class="name-code">AnimationName</span> animation to the tag <span class="name-code">div</span>*/</span>
						<br>
						&emsp;&emsp;<span class="code-code">animation-duration: 1s</span> <span class="comment-code">/*This will make the
						animation run for 1s.*/</span>
						<br>
						&emsp;&emsp;<span class="code-code">animation-delay: 1s</span> <span class="comment-code">/*This will make the
						animation run after 1s of being idle after startup.*/</span>
						<br>
						}
						</code>
					</div>
					<div class="code-block">
						<code>
						@keyframes <span class="name-code">AnimationName</span> { <span class="comment-code">/*The animtion's name must be only one 
						word*/</span>
						<br>
						&emsp;&emsp;<span class="code-code">from {opacity: 0}</span> <span class="comment-code">/*This tells the browser to start at
						the lowest opacity (0).*/</span>
						<br>
						&emsp;&emsp;<span class="code-code">to {opacity: 1}</span> <span class="comment-code">/*This tells the browser to make
						it at full opacity (1) after the duration.*/</span>
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
					I recommend going to <a target="_blank" href="https://www.w3schools.com/css/css3_animations.asp" class="text-link">W3 schools</a> to learn more about CSS animations!
					</p>
				</div>
			</div>
		</div>
		<h2 class="content-divider">Design</h2>
		<div class="container-sm-pad">
			<div class="row main-row">
				<div class="col-sm-10 col-10 col-lg-5">
					
					<p>
						<i>Coming Soon</i>
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
