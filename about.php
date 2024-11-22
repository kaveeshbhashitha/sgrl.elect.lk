<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        include('./component/head-link.php');
    ?>
    <title>About Us</title>
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
                        <h1 class="display-3 text-white animated slideInDown">About Us</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Research with Us</h6>
                    <h1 class="mb-4">Smart Grid <span class="text-primary"> Research Group</span></h1>
                    <p class="mb-4">Smart Grid Research Group (SGRG) of the Department of Electrical Engineering, University of Moratuwa is dedicated to the transformation of conventional power networks to self-healing, interactive, and secure Smart Grids with the integration of communication and information technology to advance power system operations</p>

                    <div class="row">
                        <div class="col-lg-5">
                            <img src="img/adb.png" alt="ADB">
                        </div>
                        <div class="col-lg-7">
                            <p>The establishment of the Smart Grid Lab, supported by the Asian Development Bank, marks a significant advancement in modern energy infrastructure and innovation.</p>
                            <a class="btn btn-primary py-3 px-5 mt-2" href="https://www.adb.org/where-we-work/sri-lanka">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">How Work for Future</h6>
                    <h1 class="mb-4">Our Mission</h1>
                    <p class="mb-4">To the advancement of intelligent systems through original research and system development to cater the needs of the power sector and the society.</p>

                    <h6 class="section-title bg-white text-start text-primary pe-3">How we See Future</h6>
                    <h1 class="mb-4">Our Vision</h1>
                    <p class="mb-4">To actively contribute to the technological advancement of the power system sector for the betterment of the quality of life in Sri Lankan society and the sustainable development of the nation by performing well-organized and focused research in the Smart Grid field.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
        
    <!-- youtube Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Discover</h6>
                <h1 class="mb-5">Discover Our Works</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <iframe width="100%" height="230" src="https://www.youtube.com/embed/WjyRLKaTjKQ?playlist=WjyRLKaTjKQ&loop=1"></iframe>
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">Watch Us</h3>
                            <p>The PowerGrid Lab provides a hands-on environment for studying and optimizing electrical power systems.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <iframe width="100%" height="230" src="https://www.youtube.com/embed/Xm1oIRuSOWA?playlist=Xm1oIRuSOWA&loop=1"></iframe>
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">Explore Us</h3>
                            <p>Equipped with advanced tools, the lab allows users to simulate and control grid dynamics safely.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <iframe width="100%" height="230" src="https://www.youtube.com/embed/XhW8-n37asE?playlist=XhW8-n37asE&loop=1"></iframe>
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">Learn Well</h3>
                            <p>This facility fosters research in sustainable energy and prepares students for real-world power engineering challenges.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- youtube End -->

    <!-- Coordinator Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute" src="img/us.jpg" alt="" style="object-fit: cover; height: auto; width: 400px;">
                    </div>
                </div>
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Who Conduct Us</h6>
                    <h1 class="mb-4">Our<span class="text-primary"> Coordinator</span></h1>
                    <h3 class="mb-4">Prof. Udayanga Hemapala</h3>
                    <h5>Coordinator of SGRG</h5>
                    <p>Prof. Udayanga Hemapala is a distinguished expert in electrical engineering, specializing in power systems and smart grid technologies. Known for his research in automation and sustainable energy, he brings valuable industry insights and academic excellence to his field. Prof. Hemapala is also a dedicated mentor, inspiring students and professionals alike with his expertise and innovative approach.</p>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="https://lk.linkedin.com/in/udayanga-hemapala-1b8a53168">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Coordinator End -->

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