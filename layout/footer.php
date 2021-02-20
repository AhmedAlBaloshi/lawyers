<?php
$database  = new Database();
$query = "SELECT * FROM services";
$services = $database->query($query);
$database->close();
?>

<!-- Footer Start -->

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="footer-about">
                    <h2>About Us</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu lectus a leo tristique dictum nec non quam. Suspendisse convallis, tortor eu placerat rhoncus, lorem quam iaculis felis, sed eleifend lacus neque id eros. Integer convallis volutpat neque
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-8">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-link">
                            <h2>Services Areas</h2>
                            <?php foreach($services as $service): ?>
                            <a href=""><?php echo $service['name'] ?></a>
                            <?php endforeach ?>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-link">
                            <h2>Useful Pages</h2>
                            <a href="index.php">Home</a>
                            <a href="lawyer.php">Lawyers</a>
                            <a href="signin.php">Sign In</a>
                            <a href="signup.php">Sign Up</a>
                            <a href="about.php">About</a>
                            <a href="contact.php">Contact</a>

                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-contact">
                            <h2>Get In Touch</h2>
                            <p><i class="fa fa-map-marker-alt"></i>123 Street, New York, USA</p>
                            <p><i class="fa fa-phone-alt"></i>+012 345 67890</p>
                            <p><i class="fa fa-envelope"></i>info@example.com</p>
                            <div class="footer-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-youtube"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container footer-menu">
        <div class="f-menu">
            <a href="">Terms of use</a>
            <a href="">Privacy policy</a>
            <a href="">Cookies</a>
            <a href="">Help</a>
            <a href="">FQAs</a>
        </div>
    </div>
    <div class="container copyright">
        <div class="row">
            <div class="col-md-6">
                <p> All Copyright Reserved &copy; .</p>
            </div>

        </div>
    </div>
</div>
<!-- Footer End -->
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


<script>
        function showPass() {
            
            document.getElementById('showPass').className = "fa fa-eye-slash";
            document.getElementById('pass').type = "text";
            document.getElementById('confPass').type = "text";
            document.getElementById('showPass').setAttribute('onclick', 'hidePass()');
            document.getElementById('showPass').setAttribute('id', 'hidePass');
        }
        
        function hidePass() {
            
            document.getElementById('hidePass').className = "fa fa-eye";
            document.getElementById('pass').type = "password";
            document.getElementById('confPass').type = "password";
            document.getElementById('hidePass').setAttribute( "onclick", "showPass()" );
            document.getElementById('hidePass').setAttribute('id', 'showPass');
        }

    </script>