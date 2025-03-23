<?php

require './admin/db/conn.php';

try {
    $sql = "SELECT * FROM people WHERE publishStatus = 'Published' AND peopleType = 'Alumni'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();

    if (!$result) {
        throw new Exception("Failed to fetch data: " . $conn->error);
    }
    $alumnis = $result->fetch_all(MYSQLI_ASSOC);
} catch (Exception $e) {
    $error_message = $e->getMessage();
}

try {
    $sql = "SELECT image FROM news WHERE status = 'Published' ORDER BY date DESC LIMIT 3";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();

    if (!$result) {
        throw new Exception("Failed to fetch data: " . $conn->error);
    }
    $news = $result->fetch_all(MYSQLI_ASSOC);
} catch (Exception $e) {
    $error_message = $e->getMessage();
}

try {
    $sql = "SELECT * FROM people WHERE publishStatus = 'Published' AND peopleType = 'Postgraduate'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();

    if (!$result) {
        throw new Exception("Failed to fetch data: " . $conn->error);
    }
    $posts = $result->fetch_all(MYSQLI_ASSOC);
} catch (Exception $e) {
    $error_message = $e->getMessage();
} finally {
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        include('./component/head-link.php');
    ?>
    <title>SGRG Home</title>
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
                        <h1 class="display-3 text-white mb-3 animated slideInDown">Start Your Research With SGRG</h1>
                        <p class="fs-5 text-white mb-4 animated slideInDown">Smart Grid Research Lab of the Department of Electrical Engineering, University of Moratuwa is dedicated to the transformation of conventional power networks to self-healing, interactive, and secure Smart Grids with the integration of communication and information technology to advance power system operations.</p>
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
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/research.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Research with Us</h6>
                    <h1 class="mb-4">Welcome to <span class="text-primary">SGRL</span></h1>
                    <p class="mb-4">Collaboration and partnerships are crucial for the successful implementation of microgrids. These projects are complex and require expertise from various fields,</p>
                    <p class="mb-4">such as renewable energy, energy management systems, and grid optimization. By joining forces, stakeholders can combine their diverse skills, knowledge, and resources, fostering innovation and ensuring comprehensive solutions. We actively seek collaboration with industry and research institutes to achieve sustainable renewable energy systems.</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Udergraduates Programs</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Postgraduate Programs</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>MSc Programs</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>MPhil Programs</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>PhD Programs</p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Qualification</h6>
                <h1 class="mb-5">Why Choose Us</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5>International Standards</h5>
                            <p>Ensuring global quality and consistency in education, our programs align with recognized international standards.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-hotel text-primary mb-4"></i>
                            <h5>Friendly Learning Environment</h5>
                            <p>We foster a supportive and welcoming atmosphere where students can thrive.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-user text-primary mb-4"></i>
                            <h5>Qualified Supervisors</h5>
                            <p>Our experienced supervisors provide expert guidance, ensuring students reach their highest potential.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-cog text-primary mb-4"></i>
                            <h5>Latest Facilities</h5>
                            <p>Equipped with modern resources and technology, our facilities enhance learning and new innovation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Destination Start -->
    <div class="container-xxl py-5 destination">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Talents</h6>
                <h1 class="mb-5">Our Stratergies</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/s2.jpg" alt="">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">Power & Energy</div>
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">More</div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/s4.jpg" alt="">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">Colloboration</div>
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">More</div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/s3.jpg" alt="">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">Sustainability</div>
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">More</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/s1.jpg" alt="" style="object-fit: cover;">
                        <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">Innovation</div>
                        <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">More</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Destination Start -->


    <!-- Package Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Diversity</h6>
                <h1 class="mb-5">Research Areas</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/se.jpg" alt="">
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">Sustainabile Energy</h3>
                            <p>Utilizing renewable resources and eco-friendly solutions to ensure a greener and more resilient energy future.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/po.jpg" alt="">
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">Power Automation</h3>
                            <p>Streamlining energy systems through automation to improve efficiency, safety, and reliability in power distribution.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/ai.jpg" alt="">
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">AI for Energy</h3>
                            <p>Leveraging artificial intelligence to optimize energy management, reduce costs, and enhance predictive maintenance in energy systems.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Package End -->

    <!-- Process Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Process</h6>
                <h1 class="mb-5">3 Easy Steps</h1>
            </div>
            <div class="row gy-5 gx-4 justify-content-center">
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                            <i class="far fa-check-circle fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Choose Your Path</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Explore various opportunities and tailor your journey to match your ambitions and goals to reach your expectations.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                            <i class="far fa-registered fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Register Online</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Easily sign up through our secure online registration process and take the first step toward your future.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                            <i class="fas fa-chalkboard-teacher fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Start Research</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Dive into impactful research and expand your knowledge in areas that inspire and challenge you.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Process Start -->

    <!-- Postgraduates -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Excellence</h6>
                <h1 class="mb-5">Postgraduate Students</h1>
            </div>
            <?php if (!empty($error_message)): ?>
                <div class="alert alert-danger">Error: <?= htmlspecialchars($error_message) ?></div>
            <?php endif; ?>
            <?php if (!empty($posts)): ?>
            <div class="row g-4">
            <?php foreach ($posts as $person): ?>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="overflow-hidden space">
                            <img class="img-fluid circle" src="./admin/actions/<?= htmlspecialchars($person['image']) ?>" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href="<?= htmlspecialchars($person['contactUrl']) ?>"><i class="fa-solid fa-up-right-from-square"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">
                                <?= htmlspecialchars($person['title']) ?>.
                                <?= htmlspecialchars($person['firstName']) ?>
                                <?= htmlspecialchars($person['lastName']) ?>
                            </h5>
                            <small><?= htmlspecialchars($person['degree']) ?></small>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
            <?php else: ?>
                <div class="alert alert-warning">No records found</div>
            <?php endif; ?>
        </div>
    </div>
    <!-- Postgraduates -->

    <!-- Alumni -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Excellence</h6>
                <h1 class="mb-5">Our Alumnis</h1>
            </div>
            
            <?php if (!empty($error_message)): ?>
                <div class="alert alert-danger">Error: <?= htmlspecialchars($error_message) ?></div>
            <?php endif; ?>
            <?php if (!empty($alumnis)): ?>
            <div class="row g-4">
            <?php foreach ($alumnis as $person): ?>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="overflow-hidden space">
                            <img class="img-fluid circle" src="./admin/actions/<?= htmlspecialchars($person['image']) ?>" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href="<?= htmlspecialchars($person['contactUrl']) ?>"><i class="fa-solid fa-up-right-from-square"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">
                                <?= htmlspecialchars($person['title']) ?>.
                                <?= htmlspecialchars($person['firstName']) ?>
                                <?= htmlspecialchars($person['lastName']) ?>
                            </h5>
                            <small><?= htmlspecialchars($person['degree']) ?></small>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
            <?php else: ?>
                <div class="alert alert-warning">No records found</div>
            <?php endif; ?>
        </div>
    </div>
    <!-- Alumni -->

    <!-- News Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">News</h6>
                <h1 class="mb-5">How about now !!!</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <?php if (!empty($error_message)): ?>
                            <div class="alert alert-danger">Error: <?= htmlspecialchars($error_message) ?></div>
                            <?php endif; ?>

                            <?php if (!empty($news)): ?>
                                <div id="newsCarousel" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <?php foreach ($news as $index => $person): ?>
                                            <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                                                <img class="d-block w-100" src="./admin/actions/<?= htmlspecialchars($person['image']) ?>" alt="Slide <?= $index + 1 ?>">
                                            </div>
                                        <?php endforeach; ?>
                                    </div>

                                    <!-- Carousel Controls -->
                                    <button class="carousel-control-prev" type="button" data-bs-target="#newsCarousel" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#newsCarousel" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>

                                    <!-- Carousel Indicators -->
                                    <div class="carousel-indicators">
                                        <?php foreach ($news as $index => $person): ?>
                                            <button type="button" data-bs-target="#newsCarousel" data-bs-slide-to="<?= $index ?>" class="<?= $index === 0 ? 'active' : '' ?>" aria-current="true" aria-label="Slide <?= $index + 1 ?>"></button>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php else: ?>
                                <div class="alert alert-warning">No records found</div>
                            <?php endif; ?>


                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Latest News</h6>
                    <h1 class="mb-4">See the latest events and news on microgrid laboratory's groundbreaking research and transformative projects</h1>
                    <p class="mb-4">Our faculty and students eagerly seek industry-relevant research prospects. From significant breakthroughs to dynamic solutions, we merge science and technology to advance key research domains such as sustainability, power systems, electronics, IoT, embedded systems, renewable energy, and beyond.</p>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- News End -->

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