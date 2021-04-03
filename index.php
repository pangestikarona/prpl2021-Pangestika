<?php
require_once "dbconfig.php";
if (!$user->isLoggedIn()) {
    header("location: login.php");
}
$currentUser = $user->getUser();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link rel="stylesheet" media="screen" title="no title" charset="utf-8">
    <style>
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
        <h1>Welcome, <?php echo $currentUser['email'] ?> ...!!</h1>
    </div>

</body>

</html>