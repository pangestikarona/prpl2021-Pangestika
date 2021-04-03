<?php

try {

    $con = new PDO('mysql:host=localhost;dbname=prpl2021', 'root', '', array(PDO::ATTR_PERSISTENT => true));
} catch (PDOException $e) {

    echo $e->getMessage();
}

include_once 'UsersClass.php';

$user = new Users($con);
