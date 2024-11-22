<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        include('./component/head-link.php');
    ?>
    <title>Contact Us</title>
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
                        <h1 class="display-3 text-white animated slideInDown">Contact Us</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Contact Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    <!-- About Start -->
    <div class="container-xxl py-5 mb-3">
        <div class="container">
            <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Find Us</h6>
                <h1 class="mb-5">How to Contact Us</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.780036145733!2d79.89791922212657!3d6.796595872347431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2454105064bb3%3A0x1d73cb3ec27f242c!2sDepartment%20of%20Electrical%20Engineering!5e0!3m2!1sen!2slk!4v1712894119588!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Where we are?</h6>
                    <h1 class="mb-4">Welcome to <span class="text-primary">SGRL</span></h1>
                    <p class="mb-4">We are located at Department of Electrical Engineering, Faculty of Engineering, University of Moratuwa. Katubadda, Moratuwa 10400, Sri Lanka</p>
                    
                    <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Process Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row gy-5 gx-4 justify-content-center">
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                            <i class="fa fa-globe fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Find us on web</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                            <i class="fa-solid fa-location-dot fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Meet Us physicaly</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                            <i class="fa-solid fa-hashtag fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Like us on Social Media</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Process Start -->


    <!-- Booking Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="booking p-5">
                <div class="row g-5 align-items-center">
                    <div class="col-md-6 text-white">
                        <h6 class="text-white text-uppercase">Feel free to contact us</h6>
                        <h2 class="text-white mb-4">Have Any Query? or Need More InFo, Feel Free To Contact Us</h2>
                        <p class="mb-4">We are pleased to help you and also help to solve your problems with new and innovative way of technology..</p>
                        <p class="mb-4"></p>
                        <a class="btn btn-outline-light py-3 px-5 mt-2" href="https://uom.lk/">Read More</a>
                    </div>
                    <div class="col-md-6">
                        <h1 class="text-white mb-4">Send Us a message</h1>
                        <form action="./send_email.php" method="post">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="name" placeholder="Your Name" name="name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control bg-transparent" id="email" placeholder="Your Email" name="email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating date" id="date3" data-target-input="nearest">
                                        <input type="text" class="form-control bg-transparent datetimepicker-input" id="datetime" placeholder="Subject" name="subject"/>
                                        <label for="datetime">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control bg-transparent" id="message" style="height: 100px" name="message"></textarea>
                                        <label for="message">Your message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-outline-light w-100 py-3" type="submit" name="send">Submit Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking Start -->
        

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