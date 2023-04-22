
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
    <div class="content">
        <h1>Login.</h1>
    <form action="loginProcess.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="uname" placeholder="Username">
        <label for="password">Password:</label>
        <input type="password" name="pass" placeholder="Password">
        <button type="submit" class="btn" style="display: block;">Log In.</button>
    </form>
    </div>
    <div class="imgBox">
        <img src="../component/images/login.png" alt="login image">
    </div>
    </div>
</body>
</html>