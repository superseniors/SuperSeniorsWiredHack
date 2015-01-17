<?php
session_start();
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 1/16/15
 * Time: 7:41 PM
 */

try
{
    $db = new PDO("mysql:host=localhost;dbname=PROJECT", 'root', '' );
}
catch(Exception $ex)
{
    die($ex->getMessage());
}






$username= $_POST["username"];
$password=$_POST["password"];
$email= $_POST["email"];
$company= $_POST["company"];
$address= $_POST["address"];
$city= $_POST["city"];
$zip= $_POST["zip"];
$state= $_POST["state"];
$phone= $_POST["phone"];
$website= $_POST["website"];


require 'saltgen.php';
$length = 60;
$result = genKey($length);

$hash = SHA1($result.$password);

global $db;

$stmt= $db->prepare("insert into ORG(coUserName, company, salt, hash, address, city, state, zip, phone, email, website) VALUES (:username,:company, :result, :hash, :address, :city, :state, :zip, :phone, :email, :website);");

$stmt->bindValue(":username", $username);
$stmt->bindValue(":company", $company);
$stmt->bindValue(":result", $result);
$stmt->bindValue(":hash", $hash);
$stmt->bindValue(":address", $address);
$stmt->bindValue(":city", $city);
$stmt->bindValue(":state", $state);
$stmt->bindValue(":zip", $zip);
$stmt->bindValue(":phone", $phone);
$stmt->bindValue(":email", $email);
$stmt->bindValue(":website", $website);

$stmt->execute();

