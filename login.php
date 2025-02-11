<?php
include 'includes/sessions.php';
if ($logged_in == false) {
    header('Location: account.php');
    exit;
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_email    = $_POST['email'];
    $user_password = $_POST['password'];
    if ($user_email == $email and $user_password == $password) {
        login();
        header('Location: account.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
</head>
<body>
    <?php include 'includes/header-member.php'; ?>
    <h1>Login page</h1>
    <form method="post" action="">
        <p>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
        </p>
        <p>
            <label for="pwd">Password:</label>
            <input type="password" name="pwd" id="pwd">
        </p>
        <p>
            <input name="login" type="submit" value="Log in">
        </p>
    </form>
    <div class="container d-flex justify-content-center">
        <form method="post">
            <div class="text-center mt-4">
                <h1 class="h3 mb-3 font-weight-normal">Authenticate</h1>
            </div>
            <div class="form-label-group mb-3">
                <label for="inputUser">Username</label>
                <input class="form-control" id="inputUser" name="username"  
                placeholder="Username" type="text">
            </div>
            <div class="form-label-group mb-3">
                <label for="inputPassword">Password</label>
                <input class="form-control" id="inputPassword" name="password"  
                            placeholder="Password" type="password">
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        </form>
    </div>
</body>
</html>
