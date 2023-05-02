<?php $header = $_GET['header'];
if ($header == NULL) {
    $header = "AltaFuel Ltd - Admin";
}
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <title><?php echo $header ?></title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/css/app.min.css">
    <link rel="stylesheet" href="assets/bundles/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="assets/bundles/codemirror/lib/codemirror.css">
    <link rel="stylesheet" href="assets/bundles/codemirror/theme/duotone-dark.css">
    <link rel="stylesheet" href="assets/bundles/jquery-selectric/selectric.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
    <link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">

    <!-- Custom style CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />

</head>


<body>

    <!-- <div class="loader"></div> -->


    <div id="app">

        <div class="main-wrapper main-wrapper-1">

            <div class="navbar-bg"></div>


            <nav class="navbar navbar-expand-lg main-navbar sticky">

                <div class="form-inline mr-auto">

                    <ul class="navbar-nav mr-3">

                        <li>
                            <a href="#" data-toggle="sidebar" class="nav-link nav-link-lg collapse-btn">
                                <i data-feather="align-justify"></i>
                            </a>
                        </li>


                        <li>
                            <a href="#" class="nav-link nav-link-lg fullscreen-btn">
                                <i data-feather="maximize"></i>
                            </a>
                        </li>


                        <li>
                            <form class="form-inline mr-auto">
                                <div class="search-element">
                                    <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="200">
                                    <button class="btn" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        </li>

                    </ul>

                </div>

            </nav>


            <div class="main-sidebar sidebar-style-2">

                <aside id="sidebar-wrapper">

                    <!-- ############################## LOGO ############################## -->
                    <div class="sidebar-brand">
                        <a href="index.php">
                            <img alt="image" src="assets/img/logo.png" class="header-logo" />
                            <span class="logo-name">Admin</span>
                        </a>
                    </div>


                    <!-- ############################## SIDEBAR ############################## -->
                    <ul class="sidebar-menu">

                        <li class="dropdown active">
                            <a href="index.php" class="nav-link">
                                <i data-feather="monitor"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>



                        <!-- ############################## HOME ############################## -->
                        <li class="menu-header">HOME</li>

                        <li>
                            <a class="nav-link" href="bigBanner.php?header=Big Banner">
                                <i class="far fa-file-alt"></i>
                                <span>Big Banner</span>
                            </a>
                        </li>

                        <li>
                            <a class="nav-link" href="weAreCreative.php?header=We Are Creative">
                                <i class="far fa-file-alt"></i>
                                <span>We Are Creative</span>
                            </a>
                        </li>

                        <li>
                            <a class="nav-link" href="whatWeAre.php?header=What We Are">
                                <i class="far fa-file-alt"></i>
                                <span>What We Are</span>
                            </a>
                        </li>

                        <li>
                            <a class="nav-link" href="countable.php?header=Countable">
                                <i class="far fa-file-alt"></i>
                                <span>Countable</span>
                            </a>
                        </li>

                        <li>
                            <a class="nav-link" href="ourServices.php?header=Our Services">
                                <i class="far fa-file-alt"></i>
                                <span>Our Services</span>
                            </a>
                        </li>

                        <li>
                            <a class="nav-link" href="clientsTestimonial.php?header=Clients Testimonial">
                                <i class="far fa-file-alt"></i>
                                <span>Clients Testimonial</span>
                            </a>
                        </li>

                        <!-- <li>
                            <a class="nav-link" href="blog.php?header=Our Blog">
                                <i class="far fa-file-alt"></i>
                                <span>Our Blog</span>
                            </a>
                        </li> -->



                        <!-- ############################## ABOUT US ############################## -->
                        <li class="menu-header">ABOUT US</li>

                        <li>
                            <a class="nav-link" href="whatWeAre_about.php?header=What We Are">
                                <i class="far fa-file-alt"></i>
                                <span>What We Are</span>
                            </a>
                        </li>

                        <li>
                            <a class="nav-link" href="mission.php?header=Our Mission">
                                <i class="far fa-file-alt"></i>
                                <span>Our Mission</span>
                            </a>
                        </li>

                        <li>
                            <a class="nav-link" href="vision.php?header=Our Vision">
                                <i class="far fa-file-alt"></i>
                                <span>Our Vision</span>
                            </a>
                        </li>

                        <li>
                            <a class="nav-link" href="approach.php?header=Our Approach">
                                <i class="far fa-file-alt"></i>
                                <span>Our Approach</span>
                            </a>
                        </li>

                        <li>
                            <a class="nav-link" href="countable.php?header=Countable">
                                <i class="far fa-file-alt"></i>
                                <span>Countable</span>
                            </a>
                        </li>

                        <li>
                            <a class="nav-link" href="team.php?header=Our Team">
                                <i class="far fa-file-alt"></i>
                                <span>Our Team</span>
                            </a>
                        </li>

                        <!--<li>-->
                        <!--    <a class="nav-link" href="clientsTestimonial.php?header=Clients Testimonial">-->
                        <!--        <i class="far fa-file-alt"></i>-->
                        <!--        <span>Clients Testimonial</span>-->
                        <!--    </a>-->
                        <!--</li>-->



                        <!-- ############################## SERVICES ############################## -->
                        <li class="menu-header">SERVICES</li>

                        <li>
                            <a class="nav-link" href="ourServices.php?header=Our Services">
                                <i class="far fa-file-alt"></i>
                                <span>Our Services</span>
                            </a>
                        </li>



                        <!-- ############################## COMPANIES ############################## -->
                        <li class="menu-header">COMPANIES</li>

                        <li>
                            <a class="nav-link" href="companies.php?header=Our Companies">
                                <i class="far fa-file-alt"></i>
                                <span>Our Companies</span>
                            </a>
                        </li>



                        <!-- ############################## GALLERY ############################## -->
                        <li class="menu-header">GALLERY</li>

                        <li>
                            <a class="nav-link" href="gallery.php?header=Our Gallery">
                                <i class="far fa-file-alt"></i>
                                <span>Our Gallery</span>
                            </a>
                        </li>



                        <!-- ############################## BLOG ############################## -->
                        <!-- <li class="menu-header">BLOG</li>

                        <li>
                            <a class="nav-link" href="blog.php?header=Our Blog">
                                <i class="far fa-file-alt"></i>
                                <span>Our Blog</span>
                            </a>
                        </li> -->



                        <!-- ############################## CONTACT ############################## -->
                        <li class="menu-header">CONTACT</li>

                        <li>
                            <a class="nav-link" href="sendMessage.php?header=Send A Message">
                                <i class="far fa-file-alt"></i>
                                <span>Send A Message</span>
                            </a>
                        </li>

                        <li>
                            <a class="nav-link" href="weAreProfessionals.php?header=We Are Professionals">
                                <i class="far fa-file-alt"></i>
                                <span>We Are Professionals</span>
                            </a>
                        </li>



                        <!-- ############################## SIGN OUT ############################## -->
                        <li class="menu-header">SIGN OUT</li>

                        <li>
                            <a class="nav-link" href="logout.php">
                                <i class="far fa-file-alt"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul>

                </aside>

            </div>



            <!-- ############################## Main Content ############################## -->
            <div class="main-content">