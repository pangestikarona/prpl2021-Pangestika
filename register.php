<?php
require_once "dbconfig.php";
if ($user->isLoggedIn()) {
    header("location: index.php");
}

if (isset($_POST['kirim'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if ($user->register($email, $password)) {
        $success = true;
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Register</title>
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
        <h1>Register</h1>
        <form class="register-form" method="post">
            <?php if (isset($error)) : ?>
                <div class="error">
                    <?php echo $error ?>
                </div>
            <?php endif; ?>
            <label for="username">User name:</label>
            <input type="email" name="email" placeholder="email" required />
            <label for="exampleInputPassword1">Password:</label>
            <input type="password" name="password" placeholder="password" required />
            <button type="submit" name="kirim">create</button>
            <p class="message">Already registered? <a href="login.php">Sign In</a></p>
        </form>

    </div>
</body>

</html>