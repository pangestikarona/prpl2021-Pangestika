<?php

require_once "dbconfig.php";
if ($user->isLoggedIn()) {
    header("location: index.php");
}

if (isset($_POST['kirim'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if ($user->login($email, $password)) {
        header("location: index.php");
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Pangestika 1900018013</title>
    <link rel="stylesheet" media="screen" title="no title" charset="utf-8">
    <style>
        label {
            display: block;
        }

        .container {
            position: relative;
            z-index: 1;
            max-width: 300px;
            margin: 0 auto;
        }
    </style>

</head>

<body>
    <div class="container">
        <h1>Login</h1>
        <form class="login-form" method="post">
            <?php if (isset($error)) : ?>
                <div class="error">
                    <?php echo $error ?>
                </div>
            <?php endif; ?>
            <label for="username">User name:</label>
            <input type="email" name="email" placeholder="email" required />
            <label for="exampleInputPassword1">Password:</label>
            <input type="password" name="password" placeholder="password" required />
            <button type="submit" name="kirim">login</button>
            <p class="message">Not registered? <a href="register.php">Create an account</a></p>
        </form>
    </div>
</body>

</html>