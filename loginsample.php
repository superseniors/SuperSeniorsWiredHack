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

    $hash = "SHA1(CONCAT($result,$password))";
    global $db;

    $stmt= $db->prepare("insert into USER (userName, email, salt, hash, avatar) VALUES (:username, :email, :result, :hash, 1);");

    $stmt->bindValue(":email", $email);
    $stmt->bindValue(":result", $result);
    $stmt->bindValue(":hash", $hash);
    $stmt->bindValue(":username", $username);

    $stmt->execute();

}

echo $db->prepare("select * from USER; ");



?>

<html>
<head></head>
<body>
    <form method="post" action="<? makeUser() ?>">
        <input name="username" type="text">
        <input name="password" type="password">
        <input name="email" type="email">
        <input type="submit" name="Submit">
    </form>



</body>






</html>