<?php
declare(strict_types = 1);
$password = '';
$message  = '';

function valid_password(string $password): bool {
    if (
        mb_Strlen($password) >= 8
        and preg_match('/[A-Z]/', $password)
        and preg_match('/[a-z]/', $password)
        and preg_match('/[0-9]/', $password)
    ) {
        return true;
    }
    return false;
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $password = $_POST['password'];
    $valid = valid_password($password);
    $message = $valid ? 'Password is valid' : 'Password not strong enough';
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <h1>Registration form</h1>
    <form action="register.php" method="post">
        <label for="username">Username:</label> 
        <input id="username" name="username" required="" type="text" /> <br>
        <label for="email">Email:</label>
        <input id="email" name="email" required="" type="email" /> <br>
        <label for="password">Password:</label>
        <input id="password" name="password" required="" type="password" /> <br>
        <input name="register" type="submit" value="Register" />
    </form>
</body>
</html>
