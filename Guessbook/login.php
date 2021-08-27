<?php
// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);


// Start the session
session_start();


// use var_dump below if figuring out error's
//var_dump($_SERVER);


//Initialize variable
$validlogin = true;
$username = "";

// if the form has been submitted
// checks if form method "POST" if empty or not
if(!empty($_POST)){
    //echo "The form has been submitted";

    // get the form data (name)
    $username = $_POST['username'];
    $password = $_POST['password'];

    // below gets login credentials to use the if statement below
    require ('login-creds.php');
    // if the login is valid
    if($username == $valid_username && $password == $valid_password){

        // Record the login in the session array
        $_SESSION['user'] = $username;

        // go to the admin page
        $page = isset($_SESSION['page']) ? $_SESSION['page'] : "admin.php";
        header('location: '.$page);
    }

    // invalid login
    $validlogin = false;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .err {
            color: darkred;
        }
    </style>
</head>
<body>
<div class="container">

    <h1>Login Page</h1>

    <form action="#" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control"
                   id="username" name="username"
                   value="<?php echo $username; ?>">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <?php
        if (!$validlogin) {
            echo '<p class="err">Login is incorrect</p>';
        }
        ?>

        <button type="submit" class="btn btn-primary">Login</button>
    </form>

</div>

<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
