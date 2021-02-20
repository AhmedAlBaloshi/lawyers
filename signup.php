<!DOCTYPE html>
<html lang="en">

<head>
    <?php $page = 'signup' ?>

    <title>Lawyer-SignUp</title>
    <?php include "layout/header.php" ?>

<body>
    <div class="wrapper">

        <?php include "layout/nav.php" ?>

        <!-- Register form -->
        <div class="contact">
            <div class="container">
                <div class="section-header">
                    <h2>Sign Up</h2>
                </div>
                <div class="row">
                    <div class="col-md-6  text-center form_center">
                        <div class="contact-form">
                            <form action="signup-post.php" method="POST">
                                <?php if (isset($_GET['err'])) {
                                    echo '<p class="btn-outline-danger">' . $_GET['err'] . '</p>';
                                } ?>
                                <div class="form-group">
                                    <input type="text" class="form-control text-center" name="name" placeholder="Username" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control text-center" name="email" placeholder="Email" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control text-center" id="pass" name="password" placeholder="Password" required="required" />

                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control text-center" id="confPass" name="confirm_password" placeholder="Confirm Password" required="required" />
                                </div>
                                <div>
                                    <button class="btn" type="submit">Sign up</button>
                                </div>
                            </form>
                            <hr>
                            <!-- Design -->
                            <i onclick="showPass()" class="fa fa-eye" id="showPass" aria-hidden="true"></i>
                            <!-- /Design -->
                            <p class="mt-3 ">Already a member ? <span class="font-weight-bold font-italic"><a href="signin.php">Login here.</a></span></p>
                            <p class="mt-3 ">Are you lawyer ? <span class="font-weight-bold font-italic"><a href="lawyer_register.php">Register as lawyer.</a></span></p>
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