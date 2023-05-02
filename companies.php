<!-- ############################## Header Section ############################## -->
<?php
include("header.php");
include("admin/config.php");
// error_reporting(0); 
?>



<section class="page-title bg-1">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="block text-center">
					<span class="text-white">Our Companies</span>
					<h1 class="text-capitalize mb-4 text-lg">Companies</h1>
					<ul class="list-inline">
						<li class="list-inline-item"><a href="index.php" class="text-white">Home</a></li>
						<li class="list-inline-item"><span class="text-white">/</span></li>
						<li class="list-inline-item"><a href="#" class="text-white-50">Our companies</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>



<section class="section blog-wrap bg-gray">

	<div class="container">

		<div class="row">

			<?php
			$sql = "SELECT * FROM companies order by id desc";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				// output data of each row
				while ($row = $result->fetch_assoc()) {

			?>

					<div class="col-lg-4 col-md-4 mb-5">

						<div class="blog-item">

							<img src="admin/assets/image/<?php echo $row['image'] ?>" alt="" class="img-fluid rounded">

							<div class="blog-item-content bg-white" style="padding: 1rem 1rem 2rem;">
								<h3 class="mt-3 mb-3"><a href="companies-details.php"><?php echo $row['title'] ?></a></h3>
								<p class="mb-4"><?php echo $row['short_description'] ?></p>
								<a href="companies-details.php" class="btn btn-small btn-main btn-round-full">Learn More</a>
							</div>

						</div>

					</div>

			<?php }
			} ?>

		</div>

	</div>

</section>



<!-- ############################## Footer Section ############################## -->
<?php include("footer.php"); ?>