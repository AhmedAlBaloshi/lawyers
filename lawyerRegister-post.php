    <?php
    include 'data/database.php';

    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirm_password']) && isset($_POST['detail']) && isset($_POST['image']) && isset($_POST['region_id'])) {
        $name = $_POST['name'];
        $image = $_POST['image'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $region_id = $_POST['region_id'];
        $confirmPass = $_POST['confirm_password'];
        $detail = $_POST['detail'];
        $role = 'LAWYER';

        if ($pass === $confirmPass) {
            $database = new Database();
            $query = "INSERT INTO `users`  (`name`, `email`, `password`,`role`) VALUES ('$name', '$email', '$pass', '$role')";
            $user = $database->insert($query);
            $user_id = $database->getLastId();

            $lawyerQuery = "INSERT INTO lawyers (`user_id`, `image`, `detail`, `region_id`) VALUES ($user_id, '$image', '$detail', $region_id)";
            $lawyer = $database->insert($lawyerQuery);

            if ($user === true) {
                session_start();
                $_SESSION['user'] = $_POST;
                $_SESSION['user']['id'] = $database->getLastId();
                header('Location: index.php');
            } else {
                header('Location: lawyer_register.php?err=Email%20is%20already%20registered%20please%20login');
            }
        } else {
            header("Location: lawyer_register.php?err=Confirm%20password%20is%20incorrect");
        }
    } else {
        header("Location: lawyer_register.php");
    }
