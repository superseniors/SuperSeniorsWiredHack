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
<form method="post" action="insertorg.php">
    <input name="username" type="text">
    <input name="password" type="password">
    <input name="email" type="email">
    <input name="address" type="text">
    <input name="city" type="text">
    <input name="state" type="text">
    <input name="zip" type="text">
    <input name="phone" type="text">
    <input name="website" type="text">
    <input type="submit" name="Submit">
</form>



</body>






</html>