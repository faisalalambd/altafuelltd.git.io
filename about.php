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
					<span class="text-white">About Us</span>
					<h1 class="text-capitalize mb-4 text-lg">Our Company</h1>
					<ul class="list-inline">
						<li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
						<li class="list-inline-item"><span class="text-white">/</span></li>
						<li class="list-inline-item"><a href="#" class="text-white-50">About Us</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>



<!-- ############################## What We Are [Start] ############################## -->
<section class="section about-2 position-relative">

	<div class="container">

		<div class="row">

			<?php
			$sql = "SELECT * FROM whatWeAre WHERE id=2";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				// output data of each row
				while ($row = $result->fetch_assoc()) {

			?>

					<div class="col-lg-6 col-md-6">

						<div class="about-item pr-3 mb-5 mb-lg-0">

							<span class="h6 text-color">What we are</span>

							<h2 class="mt-3 mb-4 position-relative content-title"><?php echo $row['title'] ?></h2>

							<p class="mb-5"><?php echo $row['short_description'] ?></p>

							<a href="#" class="btn btn-main btn-round-full">Get started</a>

						</div>
					</div>


					<div class="col-lg-6 col-md-6">

						<div class="about-item-img">

							<img src="admin/assets/image/<?php echo $row['image'] ?>" alt="" class="img-fluid">

						</div>

					</div>

			<?php
				}
			}
			?>

		</div>

	</div>

</section>
<!-- ############### What We Are [End] ###############  -->



<!-- ############################## Mission/Vision/Approach [Start] ############################## -->
<section class="about-info section pt-0">

	<div class="container">

		<div class="row justify-content-center">

			<?php
			$sql = "SELECT * FROM  mission order by id desc";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				// output data of each row
				while ($row = $result->fetch_assoc()) {

			?>

					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="about-info-item mb-4 mb-lg-0">
							<h2 class="mb-3"><span class="text-color">Our </span> Mission</h2>
							<p><?php echo $row['description'] ?></p>
						</div>
					</div>

			<?php
				}
			}
			?>


			<?php
			$sql = "SELECT * FROM  vision order by id desc";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				// output data of each row
				while ($row = $result->fetch_assoc()) {

			?>

					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="about-info-item mb-4 mb-lg-0">
							<h2 class="mb-3"><span class="text-color">Our </span> Vision</h2>
							<p><?php echo $row['description'] ?></p>
						</div>
					</div>

			<?php
				}
			}
			?>


			<?php
			$sql = "SELECT * FROM  approach order by id desc";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				// output data of each row
				while ($row = $result->fetch_assoc()) {

			?>

					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="about-info-item mb-4 mb-lg-0">
							<h2 class="mb-3"><span class="text-color">Our </span> Approach</h2>
							<p><?php echo $row['description'] ?></p>
						</div>
					</div>

			<?php
				}
			}
			?>


		</div>

	</div>

</section>
<!-- ############### Mission/Vision/Approach [End] ###############  -->



<!-- ############################## Countable [Start] ############################## -->
<section class="section counter bg-counter" style="padding: 4rem 0;margin-top: 13rem;">

	<div class="container">

		<div class="row">

			<?php
			$sql = "SELECT * FROM countable order by id ASC";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				// output data of each row
				while ($row = $result->fetch_assoc()) {

			?>

					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="counter-item text-center mb-5 mb-lg-0">
							<!--<i class="ti-check color-one text-md"></i>-->
							<h3 class="mt-2 mb-0 text-white"><span class="counter-stat font-weight-bold"><?php echo $row['number'] ?></span></h3>
							<p class="text-white-50"><?php echo $row['title'] ?></p>
						</div>
					</div>

			<?php
				}
			}
			?>

		</div>

	</div>

</section>
<!-- ############### Countable [End] ###############  -->



<!-- ############################## Our Team [Start] ############################## -->
<section class="section team">

	<div class="container">

		<div class="row justify-content-center">

			<div class="col-lg-7 text-center">

				<div class="section-title">

					<span class="h6 text-color">Our Team</span>

					<h2 class="mt-3 content-title">Expert Team member to get best service</h2>

				</div>

			</div>

		</div>


		<div class="row justify-content-center">

			<?php
			$sql = "SELECT * FROM team order by id ASC";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				// output data of each row
				while ($row = $result->fetch_assoc()) {

			?>

					<div class="col-lg-3 col-md-6 col-sm-6">

						<div class="team-item-wrap mb-4">

							<div class="team-item position-relative">

								<img src="admin/assets/image/<?php echo $row['image'] ?>" alt="" class="img-fluid w-100" style="height:225px;">

								<div class="team-img-hover">
									<ul class="team-social list-inline">
										<li class="list-inline-item">
											<a href="<?php echo $row['facebook'] ?>" class="facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
										</li>
										<li class="list-inline-item">
											<a href="<?php echo $row['twitter'] ?>" class="twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a>
										</li>
										<li class="list-inline-item">
											<a href="<?php echo $row['instagram'] ?>" class="instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a>
										</li>
										<li class="list-inline-item">
											<a href="<?php echo $row['linkedin'] ?>" class="linkedin"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
										</li>
									</ul>
								</div>

							</div>

							<div class="team-item-content">
								<h5 class="mt-3 mb-0 text-capitalize"><?php echo $row['name'] ?></h5>
								<p><?php echo $row['designation'] ?></p>
							</div>

						</div>

					</div>

			<?php }
			} ?>

		</div>
	</div>
</section>
<!-- ############### Our Team [End] ###############  -->



<!--<section class="section testimonial bg-gray">-->
<!--	<div class="container">-->
<!--		<div class="row justify-content-center">-->
<!--			<div class="col-lg-7 text-center">-->
<!--				<div class="section-title">-->
<!--					<span class="h6 text-color">Clients testimonial</span>-->
<!--					<h2 class="mt-3 content-title">Check what's our clients say about us</h2>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->

<!--	<div class="container">-->
<!--		<div class="testimonial-wrap">-->
<!--			<div class="testimonial-item position-relative">-->
<!--				<i class="ti-quote-left text-color"></i>-->

<!--				<div class="testimonial-item-content">-->
<!--					<p class="testimonial-text">Quam maiores perspiciatis temporibus odio reiciendis error alias debitis atque consequuntur natus iusto recusandae numquam corrupti facilis blanditiis.</p>-->

<!--					<div class="testimonial-author">-->
<!--						<h5 class="mb-0 text-capitalize">Thomas Johnson</h5>-->
<!--						<p>Excutive Director,themefisher</p>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="testimonial-item position-relative">-->
<!--				<i class="ti-quote-left text-color"></i>-->

<!--				<div class="testimonial-item-content">-->
<!--					<p class="testimonial-text">Consectetur adipisicing elit. Quam maiores perspiciatis temporibus odio reiciendis error alias debitis atque consequuntur natus iusto recusandae .</p>-->

<!--					<div class="testimonial-author">-->
<!--						<h5 class="mb-0 text-capitalize">Mickel hussy</h5>-->
<!--						<p>Excutive Director,themefisher</p>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="testimonial-item position-relative">-->
<!--				<i class="ti-quote-left text-color"></i>-->

<!--				<div class="testimonial-item-content">-->
<!--					<p class="testimonial-text">Quam maiores perspiciatis temporibus odio reiciendis error alias debitis atque consequuntur natus iusto recusandae numquam corrupti.</p>-->

<!--					<div class="testimonial-author">-->
<!--						<h5 class="mb-0 text-capitalize">James Watson</h5>-->
<!--						<p>Excutive Director,themefisher</p>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="testimonial-item position-relative">-->
<!--				<i class="ti-quote-left text-color"></i>-->

<!--				<div class="testimonial-item-content">-->
<!--					<p class="testimonial-text">Consectetur adipisicing elit. Quam maiores perspiciatis temporibus odio reiciendis error alias debitis atque consequuntur natus iusto recusandae .</p>-->

<!--					<div class="testimonial-author">-->
<!--						<h5 class="mb-0 text-capitalize">Mickel hussy</h5>-->
<!--						<p>Excutive Director,themefisher</p>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</section>-->



<!-- ############################## Footer Section ############################## -->
<?php include("footer.php"); ?>