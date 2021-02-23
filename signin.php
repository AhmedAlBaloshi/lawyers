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
                    <button onclick="lawyerLogin()" id="loginBtnForLawyer" style="cursor: pointer; text-decoration: underline;" class="text-primary border-0 bg-transparent outline-none">
                        Lawyer Sign In
                    </button>
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
                                <div class="form-group pass">
                                    <input type="password" name="password" id="pass" class="form-control text-center" placeholder="Password" required="required" />
                                    <span><i onclick="showPass()" class="fa fa-eye-slash" id="showPass" aria-hidden="true"></i></span>
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
    <!-- User & Lawyer Button Script -->
    <script>
        function lawyerLogin() {
            document.getElementById('loginHead').innerHTML = 'Lawyer Sign In';
            document.getElementById('loginBtnForLawyer').innerHTML = 'User Sign In';
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
    <!-- End User & Lawyer Button Script -->

    <!-- Show & Hide Password Button Script -->
    <script>
        function showPass() {

            document.getElementById('showPass').className = "fa fa-eye";
            document.getElementById('pass').type = "text";
            document.getElementById('showPass').setAttribute('onclick', 'hidePass()');
            document.getElementById('showPass').setAttribute('id', 'hidePass');
        }

        function hidePass() {

            document.getElementById('hidePass').className = "fa fa-eye-slash";
            document.getElementById('pass').type = "password";
            document.getElementById('hidePass').setAttribute("onclick", "showPass()");
            document.getElementById('hidePass').setAttribute('id', 'showPass');
        }
    </script>
    <!-- End Show & Hide Password Button Script -->
</body>

</html>