<?php 
define("IMAGE", "images/");

if (!isset($_SESSION)) {
     session_start(); 

};

	function nav_par($conn)
	{
	#<!-- Header -->
	echo"
	
				<header id=\"header\">
					<h1 id=\"logo\"><a href=\"index.php\">Landed</a></h1>
					<nav id=\"nav\">
						<ul>
							
							
							</li>";
				  $query = "SELECT * FROM `nav` ";
				
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
		$cont=1;
		 while ($row = mysqli_fetch_assoc($result)) {
			$cont++;
           if($row['rank']==4)
		   {	if(isset($_SESSION['statue']))
		   {
			   
			   if(isset($_SESSION['visible'])&&!empty($_SESSION['visible'])){
					echo"<li><a href='admin.php'  class='button primary'>Admin</a></li>";
					echo"<li><a href='manage_content.php'  class='button primary'>Manage_content</a></li>";
				}
				if($_SESSION['statue']==true)
			   echo"<li><a href='logout.php'  class='button primary'>Log out</a></li>";
		   }
					
				
				else if(!isset($_SESSION['statue']))
			    echo "<li><a href='{$row['path']}'  class='button primary'>{$row['name']}</a></li>";
				
				
		   }
		   else{
				echo "<li><a href='{$row['path']}'>{$row['name']}</a></li>";
		   }

        }

							
							
				echo"</ul>
					</nav>
				</header>";

       

    }
    mysqli_free_result($result);


	
	}
	function pages($conn)
	{
		
		$query = "SELECT * FROM `pages` ";

    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) 
	{
		$cont=0;
		$href=null;
		$direction_right='right';
		$direction_left='left';
		 while ($row = mysqli_fetch_assoc($result)) 
		 {		$cont ++;
				
			if($cont %2==0){
			echo"<section id=\"{$cont}\" class=\"spotlight style2 {$direction_left}\">";
			}else{echo"<section id=\"{$cont}\" class=\"spotlight style2 {$direction_right}\">"; }
				echo"	<span class=\"image fit main\"><img src=\"{$row['image']}\" alt=\"\" /></span>
					<div class=\"content\">
						<header>
							<h2>{$row['name']}</h2>
							<p>{$row['about']}</p>
						</header>
						
						<ul class=\"actions\">
							<li><a href=\"page.php?id={$row['id']}\" class=\"button\">Learn More</a></li>
						</ul>
					</div>";
					$href=$cont+1;
					echo"<a href=\"#{$href}\" class=\"goto-next scrolly\">Next</a>
					</section>";
	}								
		}
				

		
	}









?> 