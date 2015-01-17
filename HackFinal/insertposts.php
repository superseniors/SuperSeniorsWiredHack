<?php
session_start();

try
{
    $db = new PDO("mysql:host=localhost;dbname=PROJECT", 'root', '' );
}
catch(Exception $ex)
{
    die($ex->getMessage());
}


$title= $_POST["title"];
$orgName=$_POST["orgName"];
$message= $_POST["message"];


//    $stmt = $db->prepare("Select company from ORG where (id = :orgID)");
//  $stmt->bindValue(":orgID", $_SESSION["orgID"]);
//$stmt->execute();
//$row = $stmt->fetch(PDO::FETCH_ASSOC);
$userid=$_SESSION["id"];
settype($userid, $int);


global $db;

$stmt= $db->prepare("insert into POST(title, orgName, message, userID) VALUES (:title, :orgName, :message, :userID);");

$stmt->bindValue(":title", $title);
$stmt->bindValue(":orgName", $orgName);
$stmt->bindValue(":message", $message);
$stmt->bindValue(":userID", $userid);



$stmt->execute();

header("Location: http://localhost/HackFinal/experience.php"); /* Redirect browser */
exit();
