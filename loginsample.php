<?php
session_start();
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 1/16/15
 * Time: 4:43 PM
 */
function DBConnection(){
    try
    {
        $db = new PDO("mysql:host=127.0.0.1;dbname=", "root", "");
    }
    catch(Exception $ex)
    {
        die($ex->getMessage());
    }

}


require 'saltgen.php';

function makeUser(){
    $username= $_POST["username"];
    $password=$_POST["password"];
    $email= $_POST["email"];

    $length = 60;
    $result = genKey($length);

    $hash = "SHA1(CONCAT(salt,:password))";
    //   $stmt = $db->prepare("Select * from User where (username, hash) = (Select username, SHA1(CONCAT(salt, :password)) as hash FROM User where username = :username)");
    $stmt = $db->prepare("Select * from User where (username = :username)");


    $stmt->bindValue(":username", $username);

    $stmt->execute();






}

?>

<html>
<head></head>
<body>
    <form method="post" action="<? makeUser('username') ?>">
        <input name="username" type="text">
        <input name="password" type="password">
        <input name="email" type="email">
    </form>



</body>






</html>