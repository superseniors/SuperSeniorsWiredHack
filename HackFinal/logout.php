<?php
session_start();
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 1/17/15
 * Time: 1:28 AM
 */

//function logout()
//{
    session_destroy();
    $_SESSION = array(); //Unset all session vars
    $_SESSION['username'] = "Anonymous";
    header("Location: http://localhost/HackFinal/index.php"); /* Redirect browser */
    exit();
    return true;
//}

