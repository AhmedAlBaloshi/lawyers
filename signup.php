<!DOCTYPE html>
<html lang="en">
        <head>
<?php $page = 'signup' ?>

        <title>Lawyer-SignUp</title>
        <?php include "layout/header.php" ?>

    <body>
        <div class="wrapper">

        <?php include "layout/nav.php" ?>
            
            
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Sign Up</h2>
                        </div>
                        <div class="col-12">
                            <a href="index.php">Home</a>
                            <a href="signup.php">Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->
 <!-- Register form -->
 <div class="contact">
            <div class="container">
                <div class="section-header">
                    <h2>Register</h2>
                </div>
                <div class="row">
                    <div class="col-md-6  text-center form_center">
                        <div class="contact-form">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control text-center" placeholder="Username" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control text-center" placeholder="Email" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control text-center" placeholder="Password" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control text-center" placeholder="Confirm Password" required="required" />
                                </div>
                                <div>
                                    <button class="btn" type="submit">Register Now</button>
                                </div>
                                <hr>
                                <p class="mt-3 ">Already a member ? <span class="font-weight-bold font-italic"><a href="signin.php"> Login here</a></span></p>
                            </form>
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
