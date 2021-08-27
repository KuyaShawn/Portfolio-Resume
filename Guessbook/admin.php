<?php
// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// start the login session
session_start();
// use var_dump below if figuring out error's
//var_dump($_SERVER);

//if the user is not logged in
if(empty($_SESSION['user'])){

    // Redirect user to login page
    header('location: login.php');
}


require('includes/php_setup.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GRC Student Summary</title>
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <!-- Styles -->
    <link rel="stylesheet" href="styles/adminstyles.css">
    <title>Admin</title>
</head>
<body>
<div class="main_container_admin">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <a class="navbar-brand nav-link" href="/305/HTML%20Resume/index.html">Personal Resume Page</a>
            <a class="navbar-brand nav-link" href="/305/Guessbook/guestbook.php">Guestbook Form Page</a>
            <div class="float-right"><a class="navbar-brand nav-link" href="logout.php">Logout</a></div>
            <a class="navbar-brand nav-link" href="https://github.com/KuyaShawn/portfolio">Github</a>
        </nav>
    </header>

    <h3>Admin</h3>

    <table id="guessbook">
        <thead>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Profession</th>
            <th>Email</th>
            <th>Linkedin</th>
            <th>How we met</th>
            <th>Message</th>
            <th>Email Format</th>
            <th>Date submitted</th>
            <th>Add to Mailing list</th>
        </tr>
        </thead>
        <tbody>

        <?php

        //Define a query
        $sql = "SELECT * FROM guestbook ";

        //Send the query to the db
        $result = mysqli_query($cnxn, $sql);
        //var_dump($result);

        //Process the result
        foreach ($result as $row) {
            //var_dump($row);

            $first_name = $row['FirstName'];
            $last_name = $row['LastName'];
            $job_title = $row['JobTitle'];
            $company = $row['Company'];
            $email = $row['Email'];
            $linkedin = $row['URL'];
            $location = $row['location'];
            $msg = $row['Message'];
            $format = $row['Format'];
            $datestamp = $row['DateStamp'];
            $Mailing_List = $row['Mailing_List'];
            $id = $row['id'];


            echo "<tr>
                    <td>$id</td>
                    <td>$first_name  $last_name</td>
                    <td>$company $job_title</td>
                    <td>$email</td>
                    <td>$linkedin</td>
                    <td>$location</td>
                    <td>$msg</td>
                    <td>$format</td>
                    <td>$datestamp</td>
                    <td>$Mailing_List</td>
                  </tr>";
        }

        ?>
        </tbody>
    </table>
</div>

<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready( function () {
        $('#guessbook').DataTable();
    } );
    $('#guessbook').DataTable({
        aaSorting : [[0, 'asc']]
    });
</script>
</body>
</html>