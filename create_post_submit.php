<?php 
  
require "include/layout/header.php";
include "include/functions.php";
include "include/connect.php";
include "include/validation.php";
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
	
		$sql = "INSERT INTO `posts`(`name`, `p_text`, `image`, `page_id`) VALUES ( '{$name}' ,'{$about}','{$target_file}',{$_SESSION['page_id']}) ";

    if (mysqli_query($conn, $sql) && mysqli_affected_rows($conn) > 0)
			header("location:manage_content.php");
		$_SESSION['page_id']=null;
		
	}
}
?>



<?php  
				include "include/layout/footer.php";
				?>