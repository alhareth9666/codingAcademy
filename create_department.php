<?php 
require "include/layout/header.php";
include "include/functions.php";
include "include/connect.php";
include "include/validation.php";
?>
<?php
	
	if($_SERVER['REQUEST_METHOD']=='POST')
  {
	$nameError=letters($_POST['name']);
	
	
	if(empty($nameError))
	{
	$name=$_POST['name'];
	$rank=(int)$_POST['rank'];
	$about=$_POST['about'];
	if (!file_exists(IMAGE)) {
        mkdir(IMAGE);
    }
	$accepted_formats = array("jpg", "png", "jpeg", "gif");
    $target_file = IMAGE . $_FILES['pic']['name'];
    $uplod_error = '';
    $check = mime_content_type($_FILES['pic']['tmp_name']);
    $file_type = explode('/', $check)[1];
    if (in_array($file_type, $accepted_formats)) {
        move_uploaded_file($_FILES['pic']['tmp_name'], $target_file);

    }
	
		$sql = "INSERT INTO `pages`(`name`, `about`,`rank`, `image`) VALUES ( '{$name}' ,'{$about}',{$rank},'{$target_file}') ";

    if (mysqli_query($conn, $sql) && mysqli_affected_rows($conn) > 0)
			header("location:manage_content.php");
		
	}
}?>
<body class="is-preload">
		<div id="page-wrapper">
	<?php nav_par($conn); ?>


<div class="container">


<section>
								<h3>Inter The Department info</h3>
								<form method="post" enctype='multipart/form-data' action="create_department.php">
									<div class="row gtr-uniform gtr-50">
										<div class="col-6 col-12-xsmall">
											<input type="text" name="name" placeholder="Name" />
										</div>
										
										<div class="col-12">
											
											<select name="rank" id="category">
												<option value='0'>- Pages -</option> 
												<?php 
												$query = "SELECT rank FROM pages";

													$result = mysqli_query($conn, $query);
													$number = mysqli_num_rows($result);
													for ($i = 1; $i <= $number + 1; $i++) {

														echo "<option value='{$i}'>{$i}</option>";

													}


       ?>
													</div>
											</select>
										
										<div class="col-12">
											<textarea name="about"  placeholder="Enter about Page" rows="6"></textarea>
										</div>
										<div class="col-12">
										<ul class="actions">
                                       <li> <input type='file' name='pic' class="primary"></li>
									   </ul>
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