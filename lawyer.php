<!DOCTYPE html>
<html lang="en">

<head>
    <?php $page = 'lawyer' ?>
    <title>Lawyer-LawyerPage</title>
    <?php include "layout/header.php";

    $database  = new Database();
    $query = "SELECT * FROM services";
    $services = $database->query($query);

    $service_id;
    $query = "SELECT U.id AS `id`, U.`name` AS `name`, L.image AS  `image`, S.`name` AS `service_name` 
                FROM users U
                JOIN lawyers L ON U.id = L.user_id
                JOIN services S 
                ON L.service_id = S.id";

    if (isset($_GET['service']) && !empty($_GET['service'])) {
        $service_id = $_GET['service'];
        $query = $query . " WHERE S.id = " . $service_id;
    }

    $lawyers = $database->query($query);

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
                <div class="form" id="search">
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


                <!-- Lawyers -->
                <div class="team">
                    <div class="container">
                        <div class="row">
                            <?php foreach ($lawyers as $lawyer) : ?>
                                <a href="lawyer_profile.php?lawyer_id=<?php echo $lawyer['id'] ?>">
                                    <div class="col-lg-3 col-md-6">
                                        <div class="team-item">
                                            <div class="team-img">
                                                <img src="img/<?php echo $lawyer['image'] ?>" alt="Team Image">
                                            </div>
                                            <div class="team-text">
                                                <h2> <?php echo $lawyer['name'] ?> </h2>
                                                <p> <?php echo $lawyer['service_name'] ?> </p>
                                                <div class="team-social">
                                                    <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                                    <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                                    <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                                    <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            <?php endforeach ?>
                        </div>
                        <!-- <div class="row">
                            <div class="col-12 load-more">
                                <a class="btn" href="#">Load More</a>
                            </div>
                        </div> -->
                    </div>
                </div>
                <!-- /Lawyers -->


            </div>
        </div>
    </div>
    </div>
    <!-- Portfolio Start -->




    <?php include "layout/footer.php" ?>
    </div>
</body>

</html>