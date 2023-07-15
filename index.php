<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./CSS/bootstrap.min.css">
</head>

<body>
    <?php if (isset($_GET['suspended'])) : ?>
        <div class="alert alert-danger">
            Account suspended
        </div>
    <?php endif ?>
    <form action="actions/login.php" class="container" style="max-width: 600px;" method="POST">
        <h1 class="text-center text-danger mt-5 mb-5">Login Page</h1>

        <?php if (isset($_GET["register"])) : ?>
            <div class="alert alert-info">
                Register success, Please Login
            </div>
        <?php endif ?>

        <?php if (isset($_GET['auth=fail'])) : ?>
            <div class="alert alert-warning">
                Incorrect email or password
            </div>
        <?php endif ?>

        <input type="text" name="email" placeholder="Enter Your Username" class="form-control" required><br>
        <input type="text" name="password" placeholder="Enter Your Password" class="form-control" required><br>
        <button name="button" class="btn btn-danger form-control">Login</button>
    </form>
</body>

</html>

<?php
// session_start();
// if (isset($_POST['button'])) {
//     $user = $_POST['user'];
//     $_SESSION['user'] = $user;
//     header('location: actionlogin.php');
//     exit();
// }
?>