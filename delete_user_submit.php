<?php 

require "include/layout/header.php";
include "include/functions.php";
include "include/connect.php";
include "include/validation.php";
	$id=null;
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	
}
	
		$sql = "DELETE FROM `users` WHERE id={$id}";

    if (mysqli_query($conn, $sql) && mysqli_affected_rows($conn) > 0){
			header("location:admin.php");
		
		
	}else header("location:delete_user.php");

?>



<?php  
				include "include/layout/footer.php";
				?>