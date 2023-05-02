<!-- ############################## Header Section ############################## -->
<?php
include("header.php");
include("admin/config.php");
// error_reporting(0); 
?>



<!-- ############################## Big Banner [Start] ############################## -->
<?php
$sql = "SELECT * FROM bigBanner order by id desc";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {

?>

        <section class="slider" style="background: url('admin/assets/image/<?php echo $row['image'] ?>') no-repeat;">

            <div class="container">

                <div class="row">

                    <div class="col-lg-9 col-md-10">

                        <div class="block">

                            <span class="d-block mb-3 text-white text-capitalize"><?php echo $row['short_title'] ?></span>

                            <h1 class="animated fadeInUp mb-5"><?php echo $row['title'] ?></h1>

                        </div>

                    </div>

                </div>

            </div>

        </section>

<?php
    }
}
?>
<!-- ############### Big Banner [End] ###############  -->



<!-- ############################## We Are Creative [Start] ############################## -->
<section class="section intro">

    <div class="container">

        <div class="row ">

            <div class="col-lg-8">

                <div class="section-title">

                    <span class="h6 text-color ">We are creative & expert people</span>

                    <h2 class="mt-3 content-title">We work with business & provide solution to client with their business problem </h2>

                </div>

            </div>

        </div>


        <div class="row justify-content-center">

            <?php
            $sql = "SELECT * FROM weAreCreative order by id ASC";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {

            ?>

                    <div class="col-lg-4 col-md-6 col-12">

                        <div class="intro-item mb-5 mb-lg-0">

                            <img src="admin/assets/image/<?php echo $row['image'] ?>" alt="" class="img-fluid rounded" style="width: 4rem;height: 4rem;">

                            <h4 class="mt-4 mb-3"><?php echo $row['title'] ?></h4>

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
<!-- ############### We Are Creative [End] ###############  -->



<!-- ############################## What We Are [Start] ############################## -->
<section class="section about position-relative">

    <?php
    $sql = "SELECT * FROM whatWeAre WHERE id=1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {

    ?>

            <div class="bg-about" style="background: url('admin/assets/image/<?php echo $row['image'] ?>') no-repeat; background-size: cover;"></div>

            <div class="container">

                <div class="row">

                    <div class="col-lg-6 offset-lg-6 offset-md-0">

                        <div class="about-item ">

                            <span class="h6 text-color">What we are</span>

                            <h2 class="mt-3 mb-4 position-relative content-title"><?php echo $row['title'] ?></h2>

                            <div class="about-content" style="padding-left: 0;">

                                <p class="mb-5"><?php echo $row['short_description'] ?></p>

                                <a href="#!" class="btn btn-main btn-round-full">Get started</a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

    <?php
        }
    }
    ?>

</section>
<!-- ############### What We Are [End] ###############  -->



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
            $sql = "SELECT * FROM ourServices ORDER BY id DESC LIMIT 6";
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



<section class="section cta">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="cta-item  bg-white p-5 rounded">
                    <span class="h6 text-color">We create for you</span>
                    <h2 class="mt-2 mb-4">Entrust Your Project to Our Best Team of Professionals</h2>
                    <p class="lead mb-4">Have any project on mind? For immidiate support :</p>
                    <h3><i class="ti-mobile mr-3 text-color"></i>+23 876 65 455</h3>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- ############################## Clients Testimonial [Start] ############################## -->
<section class="section testimonial">

    <div class="container">

        <div class="row">

            <div class="col-lg-7 ">

                <div class="section-title">

                    <span class="h6 text-color">Clients testimonial</span>

                    <h2 class="mt-3 content-title">Check what's our clients say about us</h2>

                </div>

            </div>

        </div>

    </div>


    <div class="container">

        <div class="row testimonial-wrap">

            <?php
            $sql = "SELECT * FROM clientsTestimonial order by id ASC";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {

            ?>

                    <div class="testimonial-item position-relative">

                        <i class="ti-quote-left text-color"></i>

                        <div class="testimonial-item-content">

                            <p class="testimonial-text"><?php echo $row['paragraph'] ?></p>

                            <div class="testimonial-author">

                                <h5 class="mb-0 text-capitalize"><?php echo $row['name'] ?></h5>

                                <p><?php echo $row['designation'] ?></p>

                            </div>

                        </div>

                    </div>

            <?php
                }
            }
            ?>

        </div>

    </div>

</section>
<!-- ############### Clients Testimonial [End] ###############  -->



<!-- ############################## Our Blog [Start] ############################## -->
<!-- <section class="section latest-blog bg-2">

	<div class="container">

		<div class="row justify-content-center">

			<div class="col-lg-7 text-center">

				<div class="section-title">

					<span class="h6 text-color">Latest Blog</span>

					<h2 class="mt-3 content-title text-white">Latest articles to enrich knowledge</h2>

				</div>

			</div>

		</div>


		<div class="row justify-content-center">

			<?php
            $sql = "SELECT * FROM blog order by id DESC";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {

            ?>

					<div class="col-lg-4 col-md-6 mb-5">

						<div class="card bg-transparent border-0">

							<img src="admin/assets/image/<?php echo $row['image'] ?>" alt="" class="img-fluid rounded">

							<div class="card-body mt-2">

								<h3 class="mb-5 lh-36"><a href="#" class="text-white "><?php echo $row['title'] ?></a></h3>

								<a href="blog-single.html" class="btn btn-small btn-solid-border btn-round-full text-white">Learn More</a>

							</div>

						</div>

					</div>

			<?php
                }
            }
            ?>

		</div>

	</div>

</section> -->
<!-- ############### Our Blog [End] ###############  -->



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