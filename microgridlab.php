<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        include('./component/head-link.php');
    ?>
    <title>MicroGrid Lab</title>
</head>

<body>
    <?php
        include('./component/topbar.php');
    ?>

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <?php
            include('./component/header.php');
        ?>

        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">Our Laboratories</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">UOM Microgrid Lab</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->

     <!-- Destination Start -->
     <div class="container-xxl py-5 destination">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">What we have</h6>
                <h1 class="mb-5">UOM Microgrid Lab</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="https://momento360.com/e/u/8cfce8442ef64133997feca5dcc47a85?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium&display-plan=true" target="_blank">
                                <img class="img-fluid" src="img/lab1.JPG" alt="">
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Front</div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="https://momento360.com/e/u/3c89542c3b4249d680886ec7a5f00f05?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium&display-plan=true" target="_blank">
                                <img class="img-fluid" src="img/lab2.JPG" alt="" style="height: 200px; margin-bottom:10px">
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Front</div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="https://momento360.com/e/u/8e8e9bdfe7ce4697ad4e11579b608367?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium&display-plan=true" target="_blank">
                                <img class="img-fluid" src="img/lab3.JPG" alt="" style="height: 200px; margin-bottom:10px">
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Front</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px; margin-bottom:10px">
                    <a class="position-relative d-block h-100 overflow-hidden" href="https://momento360.com/e/u/5630659c9ebb4c3da72be509b71c6e5a?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium&display-plan=true" target="_blank">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/lab4.JPG" alt="" style="object-fit: cover;">
                        <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Front</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Destination Start -->

    <!-- News 1 Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="cards">
                <div class="card">
                    <h4>Battery Life and Helath</h4>
                    <p>85%</p>
                </div>
                <div class="card">
                    <h4>Peak Solar Power</h4>
                    <p>250 kWh</p>
                </div>
                <div class="card">
                    <h4>Direct Line Power</h4>
                    <p>150 kWh</p>
                </div>
                <div class="card">
                    <h4>Total Energy Produced</h4>
                    <p>5000 kWh</p>
                </div>
                <div class="card">
                    <h4>Energy Consumption</h4>
                    <p>4500 kWh</p>
                </div>
                <div class="card">
                    <h4>Carbon Footprint</h4>
                    <p>0.00 tons</p>
                </div>
            </div>
        </div>
    </div>
    <!-- News 1 End -->

    <div class="container-xxl">
        <div class="container">
            <main>
                <section>
                    <h2>Energy Production & Consumption</h2>
                    <canvas id="energyChart"></canvas>
                </section>
            </main>
        </div>
    </div>


    

    <script>
        const ctxEnergy = document.getElementById('energyChart').getContext('2d');
        const energyChart = new Chart(ctxEnergy, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                datasets: [
                    {
                        label: 'Solar Power (kWh)',
                        data: [220, 180, 30, 120, 120, 50],
                        borderColor: 'rgba(255, 206, 86, 1)',
                        borderWidth: 2,
                        fill: false
                    },
                    {
                        label: 'Battery Power (kWh)',
                        data: [130, 120, 120, 130, 140, 120],
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 2,
                        fill: false
                    },
                    {
                        label: 'Direct Line Power (kWh)',
                        data: [130, 130, 130, 130, 130, 130],
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 2,
                        fill: false
                    }
                ]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
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