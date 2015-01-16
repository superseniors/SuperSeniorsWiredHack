<?php
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 1/15/15
 * Time: 8:00 PM
 */
$var=$_GET["email"];

for($i=0; $i<10; $i++){
    echo "hello ";
}

mail($var, "stuff", "email things");
?>
<html>
<form method="get">
    <input type="text" name="email">
    <input>
    <input type="submit">
</form>
