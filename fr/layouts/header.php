<!DOCTYPE html>
<html>
    <head>
	<title><?php echo $title; ?></title>
        <html lang="en">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../assets/style.css">
        <link type="text/javascript" src="assets/js.js">
        <link rel="icon" type="image/x-icon" href="../assets/favicon.ico">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <script src="assets/main.js" type="text/javascript"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
	<body id="body">
	    <nav id="nav" class="navbar navbar-expand-lg">
	        <a class="navbar-brand" class="img-logo" href="index.php"><img class="img-logo" alt="logo" src="../assets/computer.png" title="Click the computer to go back Home!" /></a>
			<button class="navbar-toggler" type="button" id="navbar-toggler-button right" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<img src="../assets/dot.png" title="Dropdown Menu" alt="&darr;" />
			</button>

		    <div class="collapse navbar-collapse left-link" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto">
			        <li class="nav-item">
			            <a title="Home" class="nav-link" id="navlink" href="index.php">Accueil</a>
			        </li>
				<li class="nav-item">
					<div class="dropdown">
						<button title="Skills" class="nav-link" onclick="showDropdown('dropdown-content')" onblur="hideDropdown('dropdown-content')" id="dropbtn">Compétences</button>
							<div id="dropdown" class="dropdown-content drop_1">
                                				<a class="a link" id="a" href="skills.php" onclick="location.reload()">HTML</a>
                                				<a class="b link" id="b" href="skills.php#css" onclick="location.reload()">CSS</a>
                                				<a class="c link" id="c" href="skills.php#animations" onclick="location.reload()">Animations (CSS 3)</a>
                                				<a class="d link" id="d" href="skills.php#design" onclick="location.reload()">Design</a>
							</div>
					</div>
				</li>
				<li class="nav-item">
			            <a title="Blog" class="nav-link" id="navlink" href="blog.php">Blog</a>
			        </li>
					<li class="nav-item">
			            <a title="Past_Projects" class="nav-link" id="navlink" href="pp.php">Anciens Projets</a>
			        </li>
			        <li class="nav-item">
			            <a title="About" class="nav-link" id="navlink" href="about.php">À Propos</a>
			        </li>
			        <li class="nav-item">
			            <a title="Contact" class="nav-link" id="navlink" href="contact.php">Contact</a>
			        </li>
					<li class="nav-item">
						<a title="French" class="nav-link" id="navlink" href="../index.php">English</a>
					</li>
					<?php if (isset($_SESSION["user"])): ?>
						<li class="nav-item">
							<a href="log_out.php" class="nav-link" id="navlink">Log out</a>
						</li>
					<?php endif; ?>

				    <script type="text/javascript">
				    	$(function() {
				    		active_links("navlink-current", false);
				    	});
				    </script>
	    </nav>
<?php if (Session::exist('flash')): ?>
	<p><?php echo Session::get('flash'); ?></p>
	<?php Session::delete('flash'); ?>					
<?php endif; ?>