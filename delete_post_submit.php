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
	
		$sql = "DELETE FROM `posts` WHERE id={$_SESSION['post_id']} ";

    if (mysqli_query($conn, $sql) && mysqli_affected_rows($conn) > 0){
			header("location:manage_content.php");
		$_SESSION['page_id']=null;
		
	}

?>



<?php  
				include "include/layout/footer.php";
				?>