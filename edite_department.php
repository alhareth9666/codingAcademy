<?php 
require "include/layout/header.php";
include "include/functions.php";
include "include/connect.php";
?>




<body class="is-preload">
		<div id="page-wrapper">
<?php nav_par($conn); ?>

<section>
<div class="table-wrapper">
									<table class="alt">
										<thead>
											<tr>
												<th>Name</th>
												<th>Description</th>
												<th>Price</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Item 1</td>
												<td>Ante turpis integer aliquet porttitor.</td>
												<td>29.99</td>
											</tr>
											<tr>
												<td>Item 2</td>
												<td>Vis ac commodo adipiscing arcu aliquet.</td>
												<td>19.99</td>
											</tr>
											<tr>
												<td>Item 3</td>
												<td> Morbi faucibus arcu accumsan lorem.</td>
												<td>29.99</td>
											</tr>
											<tr>
												<td>Item 4</td>
												<td>Vitae integer tempus condimentum.</td>
												<td>19.99</td>
											</tr>
											<tr>
												<td>Item 5</td>
												<td>Ante turpis integer aliquet porttitor.</td>
												<td>29.99</td>
											</tr>
										</tbody>
										<tfoot>
											<tr>
												<td colspan="2"></td>
												<td>100.00</td>
											</tr>
										</tfoot>
									</table>
								</div>
							</section>

</div>







				<?php  
				include "include/layout/footer.php";
				?>