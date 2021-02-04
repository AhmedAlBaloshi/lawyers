<!DOCTYPE html>
<html lang="en">

<head>
<?php $page = 'signin' ?>

    <title>Lawyer-SignIn</title>
    <?php include "layout/header.php" ?>

<body>
    <div class="wrapper">

        <?php include "layout/nav.php" ?>

        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Sign In</h2>
                    </div>
                    <div class="col-12">
                        <a href="index.php">Home</a>
                        <a href="signin.php">Sign In</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- page Header End -->
         <!-- Login form -->
         <div class="contact">
            <div class="container">
                <div class="section-header">
                    <h2>Log In</h2>
                </div>
                <div class="row">
                    <div class="col-md-6  text-center form_center">
                        <div class="contact-form">
                            <form action="login-post.php" method="POST">
                            <?php if(isset($_GET['err'])){ echo '<p class="btn-outline-danger">'.$_GET['err'].'</p>'; } ?>
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control text-center" placeholder="Email" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control text-center" placeholder="Password" required="required" />
                                </div>
                                <div>
                                    <button class="btn" type="submit">Log in</button>
                                </div>
                                <hr>
                                <p class="mt-3 ">Not registered ? <span class="font-weight-bold font-italic"><a href="signup.php"> Create an account</a></span></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login form End-->

        <?php include "layout/footer.php" ?>

    </div>
</body>

</html>