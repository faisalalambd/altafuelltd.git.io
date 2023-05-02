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
					<span class="text-white">Our services</span>
					<h1 class="text-capitalize mb-4 text-lg">What We Do</h1>
					<ul class="list-inline">
						<li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
						<li class="list-inline-item"><span class="text-white">/</span></li>
						<li class="list-inline-item"><a href="#" class="text-white-50">Our services</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>



<!-- ############################## Our Services [Start] ############################## -->
<section class="section service border-top">

	<div class="container">

		<div class="row justify-content-center">

			<div class="col-lg-7 text-center">

				<div class="section-title">

					<span class="h6 text-color">Our Services</span>

					<h2 class="mt-3 content-title ">We provide a wide range of creative services</h2>

				</div>

			</div>

		</div>


		<div class="row justify-content-center">

			<?php
			$sql = "SELECT * FROM ourServices order by id ASC";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				// output data of each row
				while ($row = $result->fetch_assoc()) {

			?>

					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="service-item mb-5">
							<img src="admin/assets/image/<?php echo $row['image'] ?>" alt="" class="img-fluid rounded" style="width: 3rem;height: 3rem;position: absolute;left: 0px;top: 5px;">
							<h4 class="mb-3"><?php echo $row['title'] ?></h4>
							<p><?php echo $row['short_description'] ?></p>
						</div>
					</div>

			<?php
				}
			}
			?>

		</div>

	</div>

</section>
<!-- ############### Our Services [End] ###############  -->



<section class="cta-2">
    <div class="cta-block p-5 rounded">
        <div class="row justify-content-center align-items-center ">
            <div class="col-lg-7">
                <span class="text-color">For Every type business</span>
                <h2 class="mt-2 text-white">Entrust Your Project to Our Best Team of Professionals</h2>
            </div>
            <div class="col-lg-4">
                <a href="contact.php" class="btn btn-main btn-round-full float-right">Contact Us</a>
            </div>
        </div>
    </div>
</section>



<!-- ############################## Footer Section ############################## -->
<?php include("footer.php"); ?>