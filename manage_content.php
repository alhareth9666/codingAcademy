<?php
require "include/layout/header.php";
include "include/functions.php";
include "include/connect.php";
if(!isset($_SESSION['visible']) && $_SESSION['visible']!=1)
{
	header("location:login.php");
}
 ?>
	<body class="is-preload landing">
		<div id="page-wrapper">

			<?php nav_par($conn); echo $_SESSION['visible'];?>

			<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header>
							<h2>The future has landed</h2>
							<p>And there are no hoverboards or flying cars.<br />
							Just apps. Lots of mother flipping apps.</p>
						</header>
						<span class="image"><img src="images/pic01.jpg" alt="" /></span>
					</div>
					<a href="#one" class="goto-next scrolly">Next</a>
				</section>

			<!-- One -->
				<section id="one" class="spotlight style1 bottom">
					<span class="image fit main"><img src="images/pic02.jpg" alt="" /></span>
					<div class="content">
						<div class="container">
							<div class="row">
								<div class="col-4 col-12-medium">
									<header>
										<h2>Odio faucibus ipsum integer consequat</h2>
										<p>Nascetur eu nibh vestibulum amet gravida nascetur praesent</p>
									</header>
								</div>
								<div class="col-4 col-12-medium">
									<p>Feugiat accumsan lorem eu ac lorem amet sed accumsan donec.
									Blandit orci porttitor semper. Arcu phasellus tortor enim mi
									nisi praesent dolor adipiscing. Integer mi sed nascetur cep aliquet
									augue varius tempus lobortis porttitor accumsan consequat
									adipiscing lorem dolor.</p>
								</div>
								<div class="col-4 col-12-medium">
									<p>Morbi enim nascetur et placerat lorem sed iaculis neque ante
									adipiscing adipiscing metus massa. Blandit orci porttitor semper.
									Arcu phasellus tortor enim mi mi nisi praesent adipiscing. Integer
									mi sed nascetur cep aliquet augue varius tempus. Feugiat lorem
									ipsum dolor nullam.</p>
								</div>
							</div>
						</div>
					</div>
					<a href="#four" class="goto-next scrolly">Next</a>
				</section>

			
			
			<!-- Four -->
				<section id="four" class="wrapper style1 special fade-up">
					<div class="container">
						<header class="major">
							<h2>Your Control Panel </h2>
							<p>Let's start</p>
						</header>
						<div class="box alt">
							<div class="row gtr-uniform">
								<section class="col-4 col-6-medium col-12-xsmall">
									<span class="icon alt major fa-area-chart"></span>
										<h3>Create Department</h3>
										<ul class="actions stacked">
											<li><a href="create_department.php" class="button primary">Go To Create Department</a></li>
										</ul>
								</section>
								<section class="col-4 col-6-medium col-12-xsmall">
									<span class="icon alt major fa-comment"></span>
										<h3>Create Post</h3>
										<ul class="actions stacked">
											<li><a href="create_post.php" class="button primary">Go To Create Post</a></li>
										</ul>
								</section>
								<section class="col-4 col-6-medium col-12-xsmall">
									<span class="icon alt major fa-flask"></span>
										<h3>Edite Post</h3>
										<ul class="actions stacked">
											<li><a href="edite_post.php" class="button primary">Go To Edite Post</a></li>
										</ul>
								</section>
								<section class="col-4 col-6-medium col-12-xsmall">
									<span class="icon alt major fa-paper-plane"></span>
										<h3>Delet Post</h3>
										<ul class="actions stacked">
											<li><a href="delete_post.php" class="button primary">Go To Delete Post</a></li>
										</ul>
								</section>
							
							</div>
						</div>
						
					</div>
				</section>

			<!-- Five -->
				<section id="five" class="wrapper style2 special fade">
					<div class="container">
						<header>
							<h2>Magna faucibus lorem diam</h2>
							<p>Ante metus praesent faucibus ante integer id accumsan eleifend</p>
						</header>
						<form method="post" action="#" class="cta">
							<div class="row gtr-uniform gtr-50">
								<div class="col-8 col-12-xsmall"><input type="email" name="email" id="email" placeholder="Your Email Address" /></div>
								<div class="col-4 col-12-xsmall"><input type="submit" value="Get Started" class="fit primary" /></div>
							</div>
						</form>
					</div>
				</section>
				
				<?php  
				include "include/layout/footer.php";
				?>
