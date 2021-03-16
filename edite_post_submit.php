<?php 
   
require "include/layout/header.php";
include "include/functions.php";
include "include/connect.php";
include "include/validation.php";
$page=null;
if(isset($_GET['id']))
{
	$page=$_GET['id'];
	$_SESSION['post_id'] =$page;
}
if($_SERVER['REQUEST_METHOD']=='POST')
  {
	$nameError=letters($_POST['name']);
	
	
	if(empty($nameError))
	{
	$name=$_POST['name'];
	
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
	
		$sql = "UPDATE `posts` SET `name`='{$name}' ,`p_text`='{$about}' , `image` ='{$target_file}' where id = '{$_SESSION['post_id']}'";

    if (mysqli_query($conn, $sql) && mysqli_affected_rows($conn) > 0)
			header("location:manage_content.php");
		$_SESSION['post_id']=null;
		
	}
}
?>


<body class="is-preload">
		<div id="page-wrapper">
	<?php nav_par($conn); ?>


<div class="container">

<section>
			<?php  $query = "SELECT * FROM posts  WHERE id = {$_SESSION['post_id']} limit 1";
                $result = mysqli_query($conn, $query);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) { 
			echo"<h3>Inter The Post info</h3>
								<form method=\"post\" enctype='multipart/form-data' action=\"edite_post_submit.php\">
									<div class=\"row gtr-uniform gtr-50\">
										<div class=\"col-6 col-12-xsmall\">
											<input type=\"text\" name=\"name\" value='{$row['name']}' />
										</div>
										<div class=\"col-12\">
											<textarea name=\"about\"   rows=\"6\">{$row['p_text']}</textarea>
										</div>
										<div class=\"col-12\">
										<ul class=\"actions\">
                                       <li> <input type='file' name='pic' value='{$row['image']}' class=\"primary\"/></li>
									   </ul>
                                            </div>
										<div class=\"col-12\">
											<ul class=\"actions\">
												<li><input type=\"submit\" name='submit' value='submit' class=\"primary\" /></li>
												<li><input type=\"reset\" value=\"Reset\" /></li>
											</ul>
										</div>
									</div>
								</form>
							</section> ";
				 }}?>

</div>
</div>







				<?php  
				include "include/layout/footer.php";
				?>