<?php
session_start();

if($_SESSION["orgID"]==NULL){
    header("Location: http://localhost/SuperSeniorsWiredHack/index.php"); /* Redirect browser */
    exit();

}


try
{
    $db = new PDO("mysql:host=localhost;dbname=PROJECT", 'root', '' );
}
catch(Exception $ex)
{
    die($ex->getMessage());
}


$title= $_POST["title"];
$startDate=$_POST["startDate"];
$startTime= $_POST["startTime"];
$endTime= $_POST["endTime"];
$description= $_POST["description"];
$city= $_POST["city"];
$zip= $_POST["zip"];
$state= $_POST["state"];
$streetAddress= $_POST["streetAddress"];

//    $stmt = $db->prepare("Select company from ORG where (id = :orgID)");
  //  $stmt->bindValue(":orgID", $_SESSION["orgID"]);
    //$stmt->execute();
    //$row = $stmt->fetch(PDO::FETCH_ASSOC);
$orgid=$_SESSION["orgID"];
settype( $orgid , $int );

global $db;

$stmt= $db->prepare("insert into EVENT(title, startDate, startTime, endTime, description, streetAddress, city, state, zip, orgID) VALUES (:title, :startDate, :startTime, :endTime, :description, :streetAddress, :city, :state, :zip, :orgid);");

$stmt->bindValue(":title", $title);
$stmt->bindValue(":startDate", $startDate);
$stmt->bindValue(":startTime", $startTime);
$stmt->bindValue(":endTime", $endTime);
$stmt->bindValue(":description", $description);
$stmt->bindValue(":city", $city);
$stmt->bindValue(":state", $state);
$stmt->bindValue(":zip", $zip);
$stmt->bindValue(":streetAddress", $streetAddress);
$stmt->bindValue(":orgid", $orgid);


$stmt->execute();

header("Location: http://localhost/HackFinal/org.php"); /* Redirect browser */
exit();
