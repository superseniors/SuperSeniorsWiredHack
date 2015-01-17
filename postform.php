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

?>

<html>
<head></head>
<body>
<form method="post" action="insertposts.php">
    <label for="title">Title</label>
    <input name="title" type="text"><br/><br/>
    <label for="orgName">Organization Name</label>
    <input name="orgName" type="text"><br/><br/>

    <label for="message">Tell us about your experience!</label>
    <textarea name="message"></textarea><br/><br/>


    <input type="submit" name="Submit">
</form>

</body>


</html>