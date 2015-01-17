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
    <label for="username">username</label>
    <input name="username" type="text"><br/><br/>
    <label for="company">company</label>
    <input name="company" type="text"><br/><br/>
    <label for="password">password</label>
    <input name="password" type="password"><br/><br/>
    <label for="email">email</label>
    <input name="email" type="email"><br/><br/>
    <label for="address">street address</label>
    <input name="address" type="text"><br/><br/>
    <label for="city">city</label>
    <input name="city" type="text"><br/><br/>
    <label for="state">state</label>
    <input name="state" type="text"><br/><br/>
    <label for="zip">zip</label>
    <input name="zip" type="text"><br/><br/>
    <label for="phone">phone</label>
    <input name="phone" type="text"><br/><br/>
    <label for="website">website URL</label>
    <input name="website" type="text"><br/><br/>
    <input type="submit" name="Submit">
</form>



</body>






</html>