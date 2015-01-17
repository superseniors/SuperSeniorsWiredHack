<?php
session_start();
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 1/16/15
 * Time: 4:43 PM
 */
//yyyy-mm-dd
//hh:mm AM

require 'saltgen.php';



?>

<html>
<head></head>
<body>
<form method="post" action="insertorg.php">
    <label for="title">Title</label>
    <input name="title" type="text"><br/><br/>
    <label for="startDate">Start Date</label>
    <input name="startDate" type="date"><br/><br/>
    <label for="startTime">Start Time</label>
    <input name="startTime" type="text"><br/><br/>
    <label for="endTime">End Time</label>
    <input name="endTime" type="text"><br/><br/>
    <label for="description">Event Description</label>
    <textarea name="description"><br/><br/>
    <label for="streetAddress">Event Address</label>
    <input name="streetAddress" type="text"><br/><br/>
    <label for="city">city</label>
    <input name="city" type="text"><br/><br/>
    <label for="state">state</label>
    <input name="state" type="text"><br/><br/>
    <label for="zip">zip</label>
    <input name="zip" type="text"><br/><br/>


    <input type="submit" name="Submit">
</form>

</body>


</html>