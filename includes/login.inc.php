<?php

if (isset($_POST["submit"])) 
{

    // Grabs the data
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];

    // Instatiate SignupContr class
    include "../classes/dbh.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login-contr.classes.php";
    $login = new loginContr($uid, $pwd);
 
    // Running error handlers and user signup
    $login-> loginUser();
    // Going to back to front page
    header("location: ../index.php?error=none");
}
 