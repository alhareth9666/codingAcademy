<?php
  
require "include/layout/header.php";
include "include/functions.php";
include "include/connect.php";
include "include/validation.php";
	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		
		$emailError=email($_POST['email']);
		$passError=password($_POST['pass']);
	if(empty($emailError)&&empty($passError)){
		$_POST['pass']=md5($_POST['pass']);
		$sql = "SELECT * from `users` where email='{$_POST['email']}' and password='{$_POST['pass']}' LIMIT 1 ; ";
		$result=mysqli_query($conn,$sql);
 while ($row = mysqli_fetch_assoc($result)) 
		 {
    
		$_SESSION['statue']=true;
		$_SESSION['visible']=$row['visible'];
			header("location:manage_content.php");
	}
	}
}
 ?>
	
<body class="is-preload">
		<div id="page-wrapper">
	<?php nav_par($conn); ?>


<div class="container">

<section>
								<h3>Suign up</h3>
								<form method="post" enctype='multipart/form-data' action="login.php">
									<div class="row gtr-uniform gtr-50">
										
										
										<div class="col-6 col-12-xsmall">
											<input type="text" name="email" placeholder="Email" />
											<?php if($_SERVER['REQUEST_METHOD']=='POST') echo "<h6>$emailError</h6>"?>
										</div>
										
										<div class="col-6 col-12-xsmall">
											<input type="text" name="pass" placeholder="Password" />
											<?php if($_SERVER['REQUEST_METHOD']=='POST') echo "<h6>$passError</h6>"?>
											
										</div>
											
										<div class="col-12">
											<ul class="actions">
												<li><input type="submit" name='submit' value='submit' class="primary" /></li>
												<li><input type="reset" value="Reset" /></li>
											</ul>
										</div>
									</div>
													</form>
							</section>




</div>
</div>

	<?php  
				include "include/layout/footer.php";
				?>
