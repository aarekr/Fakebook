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
