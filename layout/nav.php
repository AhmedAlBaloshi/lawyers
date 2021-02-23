 <!-- Nav Bar Start -->
 <div class="nav-bar">
     <div class="container-fluid" id="nav-div">
         <!-- logo -->
         <div class="logo">
             <a href="index.php">
                 <h1>Kanun</h1>
                 <!-- <img src="img/logo.png" > -->
             </a>
         </div>
         <!-- Lawyer Dropdown -->
         <?php if (isset($_SESSION['user']) && !empty($_SESSION['user'])) :?>
             <div class="dropdown lawyer_drop">
                 <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <i class="fa fa-user"></i> <?php echo $_SESSION['user']['name'] ?></button>
                 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                 <?php if($_SESSION['user']['role'] == 'LAWYER'): ?>
                     <!-- <a class="dropdown-item" href="#"><i class="fa fa-edit"></i>Edit Profile</a> -->
                     <a class="dropdown-item <?php if ($page == 'appointment') {
                                                    echo 'active';
                                                } ?>" href="lawyer_appointments.php"><i class="fa fa-check-circle"></i>Appointments</a>
                                                <?php endif ?>
                     <a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out-alt"></i>Logout</a>
                 </div>
             </div>
             
         <?php endif ?>
         <!-- Lawyer Dropdown -->

         <nav class="navbar navbar-expand-lg navbar-dark" id="nav">
             <a href="#" class="navbar-brand ml-auto">MENU</a>
             <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                 <div class="navbar-nav" id="nav-item">
                         <a href="index.php" id="home" class="nav-item nav-link <?php if ($page == 'index') {
                                                                                    echo 'active';
                                                                                } ?>">Home</a>
                         <a href="lawyer.php" id="lawyer" class="nav-item nav-link <?php if ($page == 'lawyer') {
                                                                                        echo  'active';
                                                                                    } ?>">lawyers</a>
                         <?php if (!isset($_SESSION['user']) && empty($_SESSION['user'])) { ?>
                             <a href="signin.php" id="signin" class="nav-item nav-link <?php if ($page == 'signin') {
                                                                                            echo 'active';
                                                                                        } ?>">Sign In</a>
                             <a href="signup.php" id="signup" class="nav-item nav-link <?php if ($page == 'signup') {
                                                                                            echo 'active';
                                                                                        } ?>">Sign Up</a>
                         <?php } ?>
                         <a href="about.php" id="about" class="nav-item nav-link <?php if ($page == 'about') {
                                                                                        echo 'active';
                                                                                    } ?>">About</a>
                         <a href="contact.php" id="contact" class="nav-item nav-link <?php if ($page == 'contact') {
                                                                                            echo 'active';
                                                                                        } ?> ">Contact</a>
                 </div>
             </div>
             <div class="ml-auto">
                     <a class="btn" href="#"><i class="fa fa-address-book" style="padding-right: 5px;"></i> Admin Panel</a>
                 </div>
         </nav>
     </div>
 </div>
 <!-- Nav Bar End -->