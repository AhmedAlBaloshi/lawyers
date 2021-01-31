<!DOCTYPE html>
<html lang="en">

<head>
<?php $page = 'lawyer' ?>

    <title>Lawyer-LawyerPage</title>
    <?php include "layout/header.php" ?>

<body>
    <div class="wrapper">


        <?php include "layout/nav.php" ?>


        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Lawyer</h2>
                    </div>
                    <div class="col-12">
                        <a href="index.php">Home</a>
                        <a href="lawyer.php">Lawyer</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

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
                    <h2>Our Case Studies</h2>
                </div>
                <div class="row">
                    <div class="col-12">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".first">Civil</li>
                            <li data-filter=".second">Criminal</li>
                            <li data-filter=".third">Business</li>
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