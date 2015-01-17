<?php
session_start();
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 1/16/15
 * Time: 4:43 PM
 */


require 'saltgen.php';
require "authenticateuser.php";





 ?>

<html>
<head></head>
<body>
<p>create an account</p>
    <form method="post" action="insertuser.php">
        <input name="username" type="text">
        <input name="password" type="password">
        <input name="email" type="email">
        <input type="submit" name="Submit">
    </form>

<p>sign into an account</p>
<form method="post" action="authenticateuser.php">
    <input name="username" type="text">
    <input name="password" type="password">

    <input type="submit" name="Submit">
</form>

<?php




?>

</body>






</html>