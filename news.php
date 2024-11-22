<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        include('./component/head-link.php');
    ?>
    <title>News</title>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <?php
        include('./component/topbar.php');
    ?>
    <!-- Topbar End -->


    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <?php
            include('./component/header.php');
        ?>

        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">News</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">News</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    <!-- News 1 Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute" src="img/nw1.jpeg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">See What's New</h6>
                    <h3 class="mb-4">Deploying Solar Systems at Scale: Final Dissemination Workshop & Inauguration of the Digital Grid Research Lab</h3>
                    <h5>2024-05-29</h5>
                    <p>Deploying Solar Systems at Scale: Final Dissemination Workshop & Inauguration of the Digital Grid Research Lab</p>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="http://sgrl.elect.uom.lk/">See More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- News 1 End -->

    <!-- News 2 Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute" src="img/nw2.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">See What's New</h6>
                    <h3 class="mb-4">The Renewable Energy Microgrid Pilot Project and the SMART Grid Research Laboratory</h3>
                    <h5>2022-08-22</h5>
                    <p>The LECO Microgrid Pilot Project is the first of its kind in Sri Lanka. It consists of a solar photovoltaic system, a lithium-ion battery energy storage system, and a diesel generator as the energy resources. The capacity of the solar photovoltaic system is 350 kW, and the battery energy storage system is 400 kWh. The backup diesel generator capacity is 630 kVA. In addition, the microgrid powers three buildings on the campus with integrated remote load control capability</p>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="https://uom.lk/university_news/renewable-energy-microgrid-pilot-project-and-smart-grid-research-laboratory">See More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- News 2 End -->

    <!-- Footer Start -->
    <?php
        include('./component/footer.php');
    ?>
    <!-- Footer End -->

    <?php
        include('./component/footer-link.php');
    ?>
</body>

</html>