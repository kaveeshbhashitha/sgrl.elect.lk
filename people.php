<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        include('./component/head-link.php');
    ?>
    <title>People</title>
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
                        <h1 class="display-3 text-white animated slideInDown">People</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">People</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->

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
                    <a class="btn btn-primary py-3 px-5 mt-2" href="https://lk.linkedin.com/in/udayanga-hemapala-1b8a53168">See More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Coordinator End -->

    <!-- International Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Who Is Being with Us</h6>
                    <h1 class="mb-4">Our<span class="text-primary"> Partnership</span></h1>
                    <h3 class="mb-4">Dr. Rikiya Abe</h3>
                    <h5>Representative, Director of Digital Grid Consortium, CEO of DG Power System</h5>
                    <p>Dr. Rikiya Abe is a renowned authority in renewable energy and smart grid innovations, with a focus on sustainable energy solutions and grid resilience. His research bridges advanced technology and environmental responsibility, making significant contributions to the field. As an educator and researcher, Dr. Abe inspires progress in energy systems with a forward-thinking approach and dedication to sustainability.</p>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="https://www.researchgate.net/profile/Rikiya-Abe">See More</a>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute" src="img/ra.jpeg" alt="" style="object-fit: cover; height: auto; width: 400px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- International End -->

    <!-- Partnetship Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
                <h1 class="mb-5">Our Clients Say!!!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item bg-white text-center border p-4">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/ra.jpeg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Dr. Rikiya Abe</h5>
                    <p>Tokyo, Japan</p>
                    <p class="mb-0">Representative, Director of Digital Grid Consortium, CEO of DG Power System</p>
                </div>
                <div class="testimonial-item bg-white text-center border p-4">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/leco.png" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Lanka Electricity Company (Pvt)</h5>
                    <p>Sri Lanka</p>
                    <p class="mt-2 mb-0">LECO Lanka is a leading electricity distribution company in Sri Lanka, dedicated to providing reliable and efficient power solutions to its customers.</p>
                </div>
                <div class="testimonial-item bg-white text-center border p-4">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/ra.jpeg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Dr. Rikiya Abe</h5>
                    <p>Tokyo, Japan</p>
                    <p class="mb-0">Representative, Director of Digital Grid Consortium, CEO of DG Power System</p>
                </div>
                <div class="testimonial-item bg-white text-center border p-4">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/leco.png" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Lanka Electricity Company (Pvt)</h5>
                    <p>Sri Lanka</p>
                    <p class="mt-2 mb-0">LECO Lanka is a leading electricity distribution company in Sri Lanka, dedicated to providing reliable and efficient power solutions to its customers.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Partnetship End -->

    <!-- Postgraduates -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Excellence</h6>
                <h1 class="mb-5">Postgraduate Students</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="overflow-hidden space">
                            <img class="img-fluid circle" src="img/img1.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Mr. N.T.Senarathna</h5>
                            <small>MPhil.in Electrical Engineering</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="overflow-hidden space">
                            <img class="img-fluid circle" src="img/img2.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Ms. S.P.Somathilaka</h5>
                            <small>MSc.in Electrical Engineering</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="overflow-hidden space">
                            <img class="img-fluid circle" src="img/img3.jpeg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Mr. M.A.Sarith Wasitha</h5>
                            <small>MSc.in Electrical Engineering</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="overflow-hidden space">
                            <img class="img-fluid circle" src="img/img4.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Mr. W.Charitha Maduranga</h5>
                            <small>MSc.in Electrical Engineering</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="overflow-hidden space">
                            <img class="img-fluid circle" src="img/img5.jpeg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Mr. Nayanajith Kurukulasooriya</h5>
                            <small>MPhil.in Electrical Engineering</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="overflow-hidden space">
                            <img class="img-fluid circle" src="img/img6.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Mr. N.H.Reshan H.Perera</h5>
                            <small>MSc.in Electrical Engineering</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Postgraduates -->


    <!-- Alumni -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Excellence</h6>
                <h1 class="mb-5">Postgraduate Students</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="overflow-hidden space">
                            <img class="img-fluid circle" src="img/al1.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Mr. L.W.K.Tharuka</h5>
                            <small>MSc.in Electrical Engineering</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="overflow-hidden space">
                            <img class="img-fluid circle" src="img/al2.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Mr. M.A.K.S.Boralessa</h5>
                            <small>MSc.in Electrical Engineering</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="overflow-hidden space">
                            <img class="img-fluid circle" src="img/al3.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Mr. J.M.D.S.Jeewandara</h5>
                            <small>MSc.in Electrical Engineering</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="overflow-hidden space">
                            <img class="img-fluid circle" src="img/al4.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Ms. M.K.Perera</h5>
                            <small>MSc.in Electrical Engineering</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="overflow-hidden space">
                            <img class="img-fluid circle" src="img/al5.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Mr. C.Devin Aluthge</h5>
                            <small>MSc.in Electrical Engineering</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="overflow-hidden space">
                            <img class="img-fluid circle" src="img/al6.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Mr. W.H.Eranga</h5>
                            <small>MSc.in Electrical Engineering</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Alumni -->

    <!-- Alumni -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Support</h6>
                <h1 class="mb-5">Our Staff Members</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="overflow-hidden space">
                            <img class="img-fluid circle" src="img/rg.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Mr. V.R.K.JAYASANKA</h5>
                            <small>Technical Officer</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Alumni -->

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