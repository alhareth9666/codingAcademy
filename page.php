<?php   
require "include/layout/header.php";
include "include/functions.php";
include "include/connect.php";
$page=null;
if(isset($_GET['id']))
{
	$page=$_GET['id'];
	
}
?>
	<body class="is-preload">
		<div id="page-wrapper">

					<?php nav_par($conn); ?>

			<!-- Main -->
				<div id="main" class="wrapper style1">
				
					<div class="container">
						<header class="major">
						<?php
						$query = "SELECT * FROM pages where id={$page} ";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
				
			
						echo"<h2>{$row['name']}</h2>
							<p>{$row['about']}</p>
						</header>

						<!-- Content -->
							<section id=\"content\">
								<a href=\"#\" class=\"image fit\"><img src=\"{$row['image']}\" alt=\"\" /></a>
								
									
							</section><br></bre>

					";
		}}?>
		
						
			
			<?php 
			
			
						$query = "SELECT * FROM posts where page_id={$page} ";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
			echo"<section>
			<h4>{$row['name']}</h4>
			<p><span class=\"image left\"  style='width:250px;height:auto;'><img src=\"{$row['image']}\" alt=\"\" /></span>{$row['p_text']}.</p>
								</section>
				
<br></br>
<br></br>
";
								
								
								
								
								
								
		}}?>
</div>
				</div>

<br></br>
<br></br>

				<?php  
				include "include/layout/footer.php";
				?>