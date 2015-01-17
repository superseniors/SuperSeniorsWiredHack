<?php
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 1/17/15
 * Time: 6:10 AM
 */

global $db;

global $db;

$stmt= $db->prepare("select likeCount from POST where();");

$stmt->bindValue(":title", $title);
$stmt->bindValue(":orgName", $orgName);
$stmt->bindValue(":message", $message);
$stmt->bindValue(":userID", $userid);



$stmt->execute();



$stmt= $db->prepare("insert into POST(title, orgName, message, userID) VALUES (:title, :orgName, :message, :userID);");

$stmt->bindValue(":title", $title);
$stmt->bindValue(":orgName", $orgName);
$stmt->bindValue(":message", $message);
$stmt->bindValue(":userID", $userid);



$stmt->execute();