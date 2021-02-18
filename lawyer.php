<!DOCTYPE html>
<html lang="en">

<head>
    <?php $page = 'lawyer' ?>

    <title>Lawyer-LawyerPage</title>
    <?php include "layout/header.php" ?>

    <?php
    $service_id;
    if (isset($_GET['service'])) {
        $service_id = $_GET['service'];
    }
    $database  = new Database();
    $query = "SELECT * FROM services";
    $services = $database->query($query);
    $database->close();
    ?>

<body>
    <div class="wrapper">
        <?php include "layout/nav.php" ?>
        <!-- Newsletter Start -->
        <div class="newsletter">
            <div class="container">
                <div class="section-header">
                    <h2>Search about for lawyer</h2>
                </div>
                <div class="form">
                    <input class="form-control" placeholder="search">
                    <button class="btn">Search</button>
                </div>
            </div>
        </div>
        <!-- Newsletter End -->
        <br><br><br><br><br>
        <!-- Portfolio Start -->
        <div class="portfolio">
            <div class="container">
                <div class="section-header">
                    <h2>Our Case Services</h2>
                </div>
                <div class="row">
                    <div class="col-12">
                        <ul id="portfolio-flters">
                            <a href="lawyer.php">
                                <li <?php if (empty($service_id)) {
                                        echo 'class="filter-active"';
                                    } ?>>All</li>
                            </a>
                            <?php foreach ($services as $service) : ?>
                                <a href="lawyer.php?service=<?php echo $service['id']; ?>">
                                    <li <?php if (isset($service_id)) {
                                            if ($service_id == $service['id']) {
                                                echo 'class="filter-active"';
                                            }
                                        } ?>><?php echo $service['name']; ?></li>
                                </a>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
                <div class="row portfolio-container">
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item first">
                        <div class="portfolio-wrap">
                            <img src="img/portfolio-1.jpg" alt="Portfolio Image">
                            <figure>
                                <p>Crime</p>
                                <a href="#">Murder Case</a>
                                <span>01-Jan-2045</span>
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item second">
                        <div class="portfolio-wrap">
                            <img src="img/portfolio-2.jpg" alt="Portfolio Image">
                            <figure>
                                <p>Politics</p>
                                <a href="#">Political Case</a>
                                <span>01-Jan-2045</span>
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item third">
                        <div class="portfolio-wrap">
                            <img src="img/portfolio-3.jpg" alt="Portfolio Image">
                            <figure>
                                <p>Family</p>
                                <a href="#">Divorce Case</a>
                                <span>01-Jan-2045</span>
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item first">
                        <div class="portfolio-wrap">
                            <img src="img/portfolio-4.jpg" alt="Portfolio Image">
                            <figure>
                                <p>Finance</p>
                                <a href="#">Money Laundering</a>
                                <span>01-Jan-2045</span>
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item second">
                        <div class="portfolio-wrap">
                            <img src="img/portfolio-5.jpg" alt="Portfolio Image">
                            <figure>
                                <p>Business</p>
                                <a href="#">Weber & Partners</a>
                                <span>01-Jan-2045</span>
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item third">
                        <div class="portfolio-wrap">
                            <img src="img/portfolio-6.jpg" alt="Portfolio Image">
                            <figure>
                                <p>Finance</p>
                                <a href="#">Property Sharing Case</a>
                                <span>01-Jan-2045</span>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 load-more">
                        <a class="btn" href="#">Load More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Start -->




        <?php include "layout/footer.php" ?>
    </div>
</body>

</html>