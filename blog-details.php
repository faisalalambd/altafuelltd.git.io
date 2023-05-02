<!-- ############################## Header Section ############################## -->
<?php
include("header.php");
include("admin/config.php");
// error_reporting(0); 
?>



<section class="section blog-wrap bg-gray">

	<div class="container">

		<div class="row">

			<div class="col-lg-8">

				<div class="row">

					<div class="col-lg-12 mb-5">

						<div class="single-blog-item">

							<?php
							$sql = "SELECT * FROM blog WHERE id=1";
							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
								// output data of each row
								while ($row = $result->fetch_assoc()) {

							?>

									<img src="admin/assets/image/<?php echo $row['image'] ?>" alt="" class="img-fluid rounded">

									<div class="blog-item-content bg-white p-5">

										<h2 class="mt-3 mb-4"><a href="blog-single.html"><?php echo $row['title'] ?></a></h2>

										<p class="lead mb-4"><?php echo $row['description'] ?></p>

										<div class="tag-option mt-5 clearfix">

											<ul class="float-right list-inline">
												<li class="list-inline-item"> Share: </li>
												<li class="list-inline-item"><a href="#!"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
												<li class="list-inline-item"><a href="#!"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
												<li class="list-inline-item"><a href="#!"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
												<li class="list-inline-item"><a href="#!"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
											</ul>
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