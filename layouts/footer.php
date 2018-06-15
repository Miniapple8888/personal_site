<footer>
		<div class="row row-foot">
			<div class="foot-sect col-12 col-lg-3 col-md-6 col-sm-12">
				<div class="foot-div">
					<h5 class="foot-subt">Start</h5>
				</div>
				<a class="foot-link" href="index.php" title="footer_Home">Home</a>
			</div>
			<div class="foot-sect col-12 col-lg-3 col-md-6 col-sm-12">
				<div class="foot-div">
					<h5 class="foot-subt">Skills</h5>
				</div>
				<a class="foot-link" href="skills.php" title="HTML" onclick="location.reload()">HTML</a>
				<a class="foot-link" href="skills.php#css" title="CSS" onclick="location.reload()">CSS</a>
				<a class="foot-link" href="skills.php#animations" title="Animations" onclick="location.reload()">Animations (CSS 3.0)</a>
				<a class="foot-link" href="skills.php#design" title="Design" onclick="location.reload()">Design</a>
			</div>
			<div class="foot-sect col-12 col-lg-3 col-md-6 col-sm-12">
				<div class="foot-div">
					<h5 class="foot-subt">About me</h5>
				</div>
				<a class="foot-link" href="about.php" title="footer_About">About</a>
				<a class="foot-link" href="pp.php" title="footer_Past_Projects">Past Projects</a>
				<a class="foot-link" href="blog.php" title="footer_Blog">Blog</a>
			</div>
			<div class="foot-sect col-12 col-lg-3 col-md-6 col-sm-12">
				<div class="foot-div">
					<h5 class="foot-subt">Other</h5>
				</div><!-- Contact Me -->
				<a class="foot-link" href="contact.php" title="footer_Contact">Contact Me</a>
				<a class="foot-link" href="indexfr.php" title="footer_French">Fran&ccedil;ais</a>
			</div>
			<script type="text/javascript">
				$(function() {
				    var classes = "foot-link-current";
				    var selection = "";
				    var url = window.location.pathname.replace("/", "");
				    var anchor = window.location.hash;
				    if (anchor) {
				    	switch(anchor) {
				    		case '#css':
				    			selection = "a[title='CSS']";
				    			break;
				    		case '#animations':
				    			selection = "a[title='Animations']";
				    			break;
				    		case '#design':
				    			selection = "a[title='Design']";
				    			break;
				    	}
				    } else {
				    	switch(url) {
				    		case 'index.php':
				    		case '':
				    			selection = "a[title='footer_Home']";
				    			break;
				    		case 'about.php':
				    			selection = "a[title='footer_About']";
				    			break;
				    		case 'pp.php':
				    			selection = "a[title='footer_Past_Projects']";
				    			break;
				    		case 'blog.php':
				    			selection = "a[title='footer_Blog']";
				    			break;
				    		case 'contact.php':
				    			selection = "a[title='footer_Contact']";
				    			break;
				    		case 'skills.php':
				    			selection = "a[title='HTML']";
				    			break;
				    		case 'indexfr.php':
				    			selection = "a[title='footer_French']";
				    			break;
				    	}
				    	
				    }$(selection).attr("class", classes);
				});
			</script>
		</div>
		</footer>
	</body>
</html><!--code by J.A.-->
