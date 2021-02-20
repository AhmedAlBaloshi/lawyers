<!DOCTYPE html>
<html lang="en">

<head>
    <?php $page = 'signup' ?>

    <title>Lawyer-SignUp</title>
    <?php include "layout/header.php" ?>

<body>
    <div class="wrapper">

        <?php include "layout/nav.php";

        $database  = new Database();
        $query = "SELECT * FROM `services`";
        $services = $database->query($query);

        $query = "SELECT * FROM `region`";
        $regions = $database->query($query);

        $database->close();
        ?>

        <!-- Register form -->
        <div class="contact">
            <div class="container">
                <div class="section-header">
                    <h2>Lawyer Register</h2>
                </div>
                <div class="row">
                    <div class="col-md-6  text-center form_center">
                        <div class="contact-form">
                            <form action="lawyerRegister-post.php" method="POST">
                                <?php if (isset($_GET['err'])) {
                                    echo '<p class="btn-outline-danger">' . $_GET['err'] . '</p>';
                                } ?>

                                <div class="form-group">
                                    <input type="text" class="form-control text-center" name="name" placeholder="Name" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="file" class="form-control" name="image" placeholder="Image" required="required" accept="image/*" />
                                </div>
                                <div class="form-group">
                                <select class="form-control  services" name="region_id">
                                    <option>Select Region</option>
                                    <?php foreach ($regions as $region) :
                                    ?><option value="<?php echo $region['id'] ?>"> <?php echo $region['name'] ?></option>
                                    <?php endforeach ?>
                                </select>
                                </div>
                                <div class="form-group">
                                <select class="form-control services" name="service">
                                    <option>Select Service</option>
                                    <?php foreach ($services as $service) :
                                    ?><option value="<?php echo $service['id'] ?>"> <?php echo $service['name'] ?></option>
                                    <?php endforeach ?>
                                </select>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control text-center" name="email" placeholder="Email" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control text-center" name="password" placeholder="Password" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control text-center" name="confirm_password" placeholder="Confirm Password" required="required" />
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control text-center" name="detail" placeholder="Lawyer Detail" required="required" rows="2" cols="50"></textarea>
                                </div>
                                <div>
                                    <button class="btn" type="submit">Register Now</button>
                                </div>
                            </form>
                            <hr>
                            <p class="mt-3 ">Already a member ? <span class="font-weight-bold font-italic"><a href="signin.php"> Login here.</a></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Register form End-->

        <?php include "layout/footer.php" ?>

    </div>
</body>

</html>