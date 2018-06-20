<?php
$title = "J.A. - Blog";
require 'core/init.php';
require 'layouts/header.php';
?>
		<h2 class="content-divider">Posts</h2>
		<div class="container-sm-pad">
			<div class="row main-row first-row justify-content-around">
				<div class="col-lg-8 col-sm-9 col-10">
					<h3 class="post-title">&ldquo;How to start your own website today!&rdquo;&emsp;<span class="date-time">Tuesday, June 5<sup>th</sup> 2018; 12:30 p.m.</span></h3>
					<br>
					<p>
					&emsp;Welcome to my third post! Today I'm gonna show you guys <strong>how to get your website started</strong> in a few 
					simple & easy steps:
					<ol>
						<li>Learn basic <a href="skills.php" class="text-link">HTML</a> and <a href="skills.php#css" class="text-link">CSS</a>
						(or look into <a href="http://www.wordpress.com" class="text-link">wordpress</a> if you aren't into coding);</li>
						<li><a href="https://www.000webhost.com" class="text-link">Host your website</a> for free!</li>
						<li>Grow, learn, and have fun!</li>
					</ol>
					<br>
					Even though I've only started coding websites about a year ago, I feel like I have learned so much in the time I've had! My
					experiences have truly helped me become a better web developper/designer.
					<br>
					<br>
					<h5 class="post-subtitle">A word of advice</h5>
					<br>
					When beginning to develop, I'd recommend to not give in to all the ads and websites that promise mastery of HTML and/or CSS
					in <em>x</em> number of days. Rather, seek to learn the basics at <a href="https://www.w3schools.com/" class="text-link">W3 schools</a>
					, and then test it out yourself! Of course your first website may not be a masterpiece, it'll be a great starting point to
					develop your skills.
					<br>
					<br>
					That's all for now, and good luck in whatever you do!
					<br>
					As always, do not hesitate to contact me at <a href="mailto:j.alfahad@gmail.com?subject=Inquiry&body=I have a question regarding your website..." 
					class="email">j.alfahad@gmail.com</a> if you have any inquiries or just feedback for the website!
					</p>
				</div>
				<div class="col-lg-2 col-sm-9 col-10">
					<!--<img class="img-fluid" alt="" src="assets/?" />-->
					<img src="assets/info.png" alt="info" title="Important Info" class="info-icon" />
					<p>Image coming soon!</p>
				</div>
			</div>
		</div>
		<div class="container-sm-pad">
			<div class="row main-row first-row justify-content-around">
				<div class="col-lg-8 col-sm-9 col-10">
					<h3 class="post-title">&ldquo;Frameworks & stuff&rdquo;&emsp;<span class="date-time">Tuesday, June 5<sup>th</sup> 2018; 12:30 p.m.</span></h3>
					<br>
					<p>
					&emsp;Welcome to my second post! I just wanted to officially announce that all the pages on my site are working. Although the content is 
					missing for some of them, at least they're up! I also wanted to talk about some of the frameworks I use for websites:
					<br>
					<a target="_blank" href="http://getbootstrap.com/" class="text-link">Bootstrap (4.0)</a>
					<br>
					<a target="_blank" href="https://www.w3schools.com/default.asp" class="text-link">W3 framework</a>
					<br>
					<h5 class="post-subtitle">W3</h5>
					<br>
					I learned a lot about <a href="skills.php#animations" class="text-link">CSS 3.0 Animations</a> with this framework!
					<br>
					<br>
					<h5 class="post-subtitle">Bootstrap</h5>
					<br>
					I use Bootstrap a lot since it's super responsive and easy to use! Thi website actually uses bootstrap!
					<br>
				</div>
				<div class="col-lg-2 col-sm-9 col-10">
					<!--<img class="img-fluid" alt="" src="assets/?" />-->
					<img src="assets/info.png" alt="info" title="Important Info" class="info-icon" />
					<p>Image coming soon!</p>
				</div>
			</div>
		</div>
		<br>
		<br>
		<div class="container-sm-pad">
			<div class="row main-row first-row justify-content-around">
				<div class="col-lg-7 col-sm-9 col-10">
					<h3 class="post-title">&ldquo;First Post!&rdquo;&emsp;<span class="date-time">Monday, June 4<sup>th</sup> 2018; 9:00 p.m.</span></h3>
					<br>
					<p>
					&emsp;Hello! This is my first blog post! Although my website is still unfinished at this point in time, I will still be uploading blog
					posts to keep whatever small number of people might see this updated! Currently, I am still working on most pages of the site, however the
					home and blog pages work (obviously). In future blogs, I will be talking about my experiences as an amateur web designer/developper, and 
					perhaps tips & tricks, good online sources, etc...
				</div>
				<div class="col-lg-3 col-sm-9 col-10">
					<!--<img class="img-fluid" alt="" src="assets/?" />-->
					<img src="assets/info.png" alt="info" title="Important Info" class="info-icon" />
					<p>Image coming soon!</p>
				</div>
			</div>
		</div>
		<h2 class="content-divider">Other</h2>
		<div class="container-sm-pad">
			<div class="row main-row first-row justify-content-around">
				<div class="col-lg-10 col-sm-10 col-10">
					<h3 class="post-title">About Me</h3>
					<br>
					<p>
					Just another amateur coder trying to get better. I've been making websites for a little over a year now.
					<br>
					<a href="about.php" class="text-link">Learn more about me</a> or <a href="pp.php" class="text-link">look at the projects I've done!</a>
					</p>
				</div>
				<div class="col-lg-3 col-sm-9 col-10">
					<!--<img class="img-fluid" alt="" src="assets/?" />-->
					<img src="assets/info.png" alt="info" title="Important Info" class="info-icon" />
					<p>Image coming soon!</p>
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
		<?php require 'layouts/footer.php' ?>
