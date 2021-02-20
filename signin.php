<!DOCTYPE html>
<html lang="en">

<head>
    <?php $page = 'signin' ?>

    <title>Lawyer-SignIn</title>
    <?php include "layout/header.php" ?>

<body>
    <div class="wrapper">

        <?php include "layout/nav.php" ?>

        <!-- Login form -->
        <div class="contact">
            <div class="container">
                <div class="section-header">
                    <h2 id="loginHead"> User Sign In </h2>
                    <!-- Design -->
                    <a onclick="lawyerLogin()" id="loginBtnForLawyer" class="btn ml-2"> Lawyer Login </a>
                    <!-- /Design  -->
                </div>
                <div class="row">
                    <div class="col-md-6  text-center form_center">
                        <div class="contact-form">
                            <form action="login-post.php" method="POST">
                                <?php if (isset($_GET['err'])) {
                                    echo '<p class="btn-outline-danger">' . $_GET['err'] . '</p>';
                                } ?>
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
                            </form>
                            <p class="mt-3 ">Not registered ? <span class="font-weight-bold font-italic"><a href="signup.php"> Create an account</a></span></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login form End-->

        <?php include "layout/footer.php" ?>

    </div>
    <script>
        function lawyerLogin() {
            document.getElementById('loginHead').innerHTML = 'Lawyer Sign In';
            document.getElementById('loginBtnForLawyer').innerHTML = 'User Login';
            document.getElementById('loginBtnForLawyer').setAttribute('onclick', 'userLogin()');
            document.getElementById('loginBtnForLawyer').setAttribute('id', 'loginBtnForUser');
        }

        function userLogin() {
            document.getElementById('loginHead').innerHTML = 'User Sign In';
            document.getElementById('loginBtnForUser').innerHTML = 'Lawyer Login';
            document.getElementById('loginBtnForUser').setAttribute('onclick', 'lawyerLogin()');
            document.getElementById('loginBtnForUser').setAttribute('id', 'loginBtnForLawyer');
        
        }
    </script>
</body>

</html>