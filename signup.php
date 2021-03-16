<?php
require "include/layout/header.php";
include "include/functions.php";
include "include/connect.php";
include "include/validation.php";

	if($_SERVER['REQUEST_METHOD']=='POST')
  {
	$fnameError=letters($_POST['fname']);
	$lnameError=letters($_POST['lname']);
	$passError=password($_POST['pass1']);
	$emailError=email($_POST['email']);
	$phoneError=numbers($_POST['phone']);
	$phoneError2=length($_POST['phone']);
	$match=null;
	if($_POST['pass1']!=$_POST['pass2']){
		$match="the passwords does not match";
	}
	if(empty($fnameError)&&$phoneError2=="OK"&&empty($lnameError)&&empty($passError)&&empty($emailError)&& $phoneError &&!$match)
	{
		$_POST['pass1']=md5($_POST['pass1']);
		$sql = "INSERT INTO `users`(`fname`, `lname`, `email`, `phone`, `password`) VALUES ( '{$_POST['fname']}' ,'{$_POST['lname']}','{$_POST['email']}','{$_POST['phone']}','{$_POST['pass1']}'); ";

    if (mysqli_query($conn, $sql) )
			header("location:manage_content.php");
	}
}
 ?>
	
<body class="is-preload">
		<div id="page-wrapper">
	<?php nav_par($conn); ?>


<div class="container">

<section>
								<h3>Suign up</h3>
								<form method="post" enctype='multipart/form-data' action="signup.php">
									<div class="row gtr-uniform gtr-50">
										<div class="col-6 col-12-xsmall">
											<input type="text" name="fname" placeholder="First Name" />
											<?php if($_SERVER['REQUEST_METHOD']=='POST') echo "<h6>$fnameError</h6>"?>
										</div>
										<div class="col-6 col-12-xsmall">
											<input type="text" name="lname" placeholder="Last Name" />
											<?php if($_SERVER['REQUEST_METHOD']=='POST') echo "<h6>$lnameError</h6>"?>
										</div>
										<div class="col-6 col-12-xsmall">
											<input type="text" name="email" placeholder="Email" />
											<?php if($_SERVER['REQUEST_METHOD']=='POST') echo "<h6>$emailError</h6>"?>
											
										</div>
										<div class="col-6 col-12-xsmall">
											<input type="text" name="phone" placeholder="Phone Number" />
											<?php if($_SERVER['REQUEST_METHOD']=='POST' &&!( numbers($_POST['phone']))) echo "<h6>wrong numbers</h6>"?>
										</div>
										<div class="col-6 col-12-xsmall">
											<input type="text" name="pass1" placeholder="Password" />
											<?php if($_SERVER['REQUEST_METHOD']=='POST') echo "<h6>$passError</h6>"?>
											<?php if($_SERVER['REQUEST_METHOD']=='POST') echo "<h6>$match</h6>"?>
										</div>
											<div class="col-6 col-12-xsmall">
											<input type="text" name="pass2" placeholder="retype Password" />
											<?php if($_SERVER['REQUEST_METHOD']=='POST') echo "<h6>$passError</h6>"?>
											<?php if($_SERVER['REQUEST_METHOD']=='POST') echo "<h6>$match</h6>"?>
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
