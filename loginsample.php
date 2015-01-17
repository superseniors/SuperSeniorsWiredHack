<?php
session_start();
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 1/16/15
 * Time: 4:43 PM
 */


require 'saltgen.php';



 ?>

<html>
<head></head>
<body>
    <form method="post" action="insertuser.php">
        <input name="username" type="text">
        <input name="password" type="password">
        <input name="email" type="email">
        <input type="submit" name="Submit">
    </form>



</body>






</html>