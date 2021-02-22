<!DOCTYPE html>
<html lang="en">

<head>
    <?php $page = 'lawyer'; ?>
    <title>Lawyer-Profile</title>
    <?php include "layout/header.php";
    $database  = new Database();

    $id = $_GET['lawyer_id'];

    $query = "SELECT U.id AS `id`, U.`name` AS `name`, L.image AS  `image`, S.`name` AS `service_name`, R.`name` AS region_name, L.detail AS detail 
    FROM users U
    JOIN lawyers L ON U.id = L.user_id
    JOIN services S 
    ON L.service_id = S.id
    JOIN region R 
    ON R.id = L.region_id WHERE U.id = $id";

    $lawyer = $database->query($query);
    $database->close();
    // var_dump($lawyer);
    // exit;
    ?>

<body>
    <div class="wrapper">
        <?php include "layout/nav.php" ?>
        <br><br>
        <div class="container">
            <center>
                <div class="section-header">
                    <h2> <?php echo $lawyer['name'] ?> </h2>
                </div>
            </center>
            <div class="row">
                <div class="col-sm-3">
                    <div class="card" style="width:250px;">
                        <img src="img/<?php echo $lawyer['image'] ?>" alt="Card image" style="width:100% ; height: 300px;">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div style="width:500px">
                        <p class="lawyer_profile">Service :<a href="#"><Span> <?php echo $lawyer['service_name'] ?> </Span></a></p>
                        <p class="lawyer_profile">Location :<Span> <?php echo $lawyer['region_name'] ?> </Span></p>
                        <p class="lawyer_profile">Laywer Detail :</p>
                        <p class="detail"> 
                        <?php echo $lawyer['detail'] ?>
                         </p>
                    </div>
                </div>
                <div class="col-sm-3 mb-5">
                    <input class="celender form-control" type="date" name="birthday">
                    <button class="button">Appointment</button>
                </div>
            </div>
        </div>
        <?php include "layout/footer.php" ?>

    </div>
</body>

</html>