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
					<span class="text-white">Our blog</span>
					<h1 class="text-capitalize mb-4 text-lg">Blog articles</h1>
					<ul class="list-inline">
						<li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
						<li class="list-inline-item"><span class="text-white">/</span></li>
						<li class="list-inline-item"><a href="#" class="text-white-50">Our blog</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>



<section class="section blog-wrap bg-gray">

	<div class="container">

		<div class="row">

			<div class="col-lg-8">

				<div class="row">

					<?php
					$sql = "SELECT * FROM blog order by id DESC";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						// output data of each row
						while ($row = $result->fetch_assoc()) {

					?>

							<div class="col-lg-6 col-md-6 mb-5">
								<div class="blog-item">
									<img src="admin/assets/image/<?php echo $row['image'] ?>" alt="" class="img-fluid rounded">

									<div class="blog-item-content bg-white p-4">
										<h3 class="mt-3 mb-3"><a href="blog-details.php"><?php echo $row['title'] ?></a></h3>
										<p class="mb-4"><?php echo $row['short_description'] ?></p>

										<a href="blog-details.php" class="btn btn-small btn-main btn-round-full">Learn More</a>
									</div>
								</div>
							</div>

					<?php
						}
					}
					?>

				</div>

			</div>


			<div class="col-lg-4">

				<div class="sidebar-wrap">

					<div class="sidebar-widget search card p-4 mb-3 border-0">
						<input type="text" class="form-control" placeholder="search">
						<a href="#" class="btn btn-mian btn-small d-block mt-2">search</a>
					</div>


					<div class="sidebar-widget latest-post card border-0 p-4 mb-3">

						<h5>Latest Posts</h5>

						<?php
						$sql = "SELECT * FROM blog order by id DESC";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
							// output data of each row
							while ($row = $result->fetch_assoc()) {

						?>

								<div class="media border-bottom py-3">
									<a href="blog-details.php" style="width: 35%;"><img class="mr-4" src="admin/assets/image/<?php echo $row['image'] ?>" alt="" style="width: 90%;"></a>
									<div class="media-body">
										<h6 class="my-2"><a href="blog-details.php"><?php echo $row['title'] ?></a></h6>
									</div>
								</div>

						<?php
							}
						}
						?>

					</div>

				</div>

			</div>

		</div>

	</div>

</section>



<!-- ############################## Footer Section ############################## -->
<?php include("footer.php"); ?>