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
			?>
			<section>
			
			<h3>Inter The Post info</h3>
								<form method="post" enctype='multipart/form-data' action="create_post_submit.php">
									<div class="row gtr-uniform gtr-50">
										<div class="col-6 col-12-xsmall">
											<input type="text" name="name" placeholder="Name" />
										</div>
										<div class="col-12">
											<textarea name="about"  placeholder="Enter about Post" rows="6"></textarea>
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

			
			
			
			
			
			
	<?php	}else{



 ?>

<section>
<div class="table-wrapper">
							<table class="alt">
							<thead>
							<tr>
								<th> Page Name</th>
								<th>Action</th>
												
							</tr>
                        </thead>
                        <tbody>
<?php 
        $query = "SELECT * FROM pages  ";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
								<td>{$row['name']}</td>
								<td>
									<a href='create_post.php?id={$row['id']}' class='button primary'>create</a>
                                </td>
							</tr>";

            }


        }?>
        </tbody>
                        </table>
								</div>
							</section>
	<?php }?>
</div>
</div>







				<?php  
				include "include/layout/footer.php";
				?>