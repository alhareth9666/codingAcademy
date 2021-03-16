<?php 
   
require "include/layout/header.php";
include "include/functions.php";
include "include/connect.php";
$page=null;
if(isset($_GET['id']))
{
	$page=$_GET['id'];
	$_SESSION['page_id'] =$page;
}
?>

<body class="is-preload">
		<div id="page-wrapper">
	<?php nav_par($conn); ?>


<div class="container">
<?php 
if($page !=null)
{
	
	echo"<section>
<div class=\"table-wrapper\">

							<table class=\"alt\">
							<thead>
							<tr>
								<th> Page Name</th>
								<th>Action</th>
												
							</tr>
                        </thead>
                        <tbody>";

        $query = "SELECT * FROM posts where page_id={$_SESSION['page_id']}  ";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
			
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
								<td>{$row['name']}</td>
								<td>
									<a href='edite_post_submit.php?id={$row['id']}' class='button primary'>create</a>
                                </td>
							</tr>";

            }


        }
      echo"  </tbody>
                        </table>
								</div>";
}else{
echo"<section>
<div class=\"table-wrapper\">

							<table class=\"alt\">
							<thead>
							<tr>
								<th> Page Name</th>
								<th>Action</th>
												
							</tr>
                        </thead>
                        <tbody>";

        $query = "SELECT * FROM pages  ";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
								<td>{$row['name']}</td>
								<td>
									<a href='edite_post.php?id={$row['id']}' class='button primary'>create</a>
                                </td>
							</tr>";

            }


        }
      echo"  </tbody>
                        </table>
</div>";}?>


</div>
</div>



				<?php  
				include "include/layout/footer.php";
				?>