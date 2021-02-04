 <!-- Nav Bar Start -->
 <div class="nav-bar">
     <div class="container-fluid">
         <!-- logo -->
         <div class="logo">
             <a href="index.php">
                 <h1>Kanun</h1>
                 <!-- <img src="img/logo.png" > -->
             </a>
         </div>
         <!-- logo -->
         <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
             <a href="#" class="navbar-brand ml-auto">MENU</a>
             <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                 <span class="navbar-toggler-icon"></span>
             </button>

             <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                 <div class="navbar-nav ml-auto" id="nav-item">
                     <a href="index.php" id="home" class="nav-item nav-link <?php if ($page == 'index') {
                                                                                echo  'active';
                                                                            } ?>">Home</a>
                     <a href="lawyer.php" id="lawyer" class="nav-item nav-link <?php if ($page == 'lawyer') {
                                                                                    echo  'active';
                                                                                } ?>">lawyers</a>
                     <?php if (!isset($_SESSION['user']) && empty($_SESSION['user'])) { ?>
                         <a href="signin.php" id="signin" class="nav-item nav-link <?php if ($page == 'signin') {
                                                                                        echo  'active';
                                                                                    } ?>">Sign In</a>
                         <a href="signup.php" id="signup" class="nav-item nav-link <?php if ($page == 'signup') {
                                                                                        echo  'active';
                                                                                    } ?>">Sign Up</a>
                     <?php } ?>
                     <a href="about.php" id="about" class="nav-item nav-link <?php if ($page == 'about') {
                                                                                    echo  'active';
                                                                                } ?>">About</a>
                     <a href="contact.php" id="contact" class="nav-item nav-link <?php if ($page == 'contact') {
                                                                                        echo  'active';
                                                                                    } ?> ">Contact</a>
                 </div>
                 <div class="ml-auto">
                     <a class="btn" href="#">Admin Panel</a>
                     <?php if (isset($_SESSION['user']) && !empty($_SESSION['user'])) { ?>

                     <a href="logout.php" class="btn ml-2">logout</a>
                     <?php } ?>
                 </div>
             </div>
         </nav>
     </div>
 </div>
 <!-- Nav Bar End -->