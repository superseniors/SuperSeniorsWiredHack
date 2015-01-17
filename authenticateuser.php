<?php
session_start();
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 1/17/15
 * Time: 1:18 AM
 */
try
{
    $db = new PDO("mysql:host=localhost;dbname=PROJECT", 'root', '' );
}
catch(Exception $ex)
{
    die($ex->getMessage());
}


if(!array_key_exists("username", $_SESSION))
    $_SESSION['username'] = "Anonymous";

if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    login($username, $password);

}

function login($username, $password){
    global $db;

    $stmt = $db->prepare("Select * from USER where (username = :username)");


    $stmt->bindValue(":username", $username);

    $stmt->execute();


    if($stmt->rowCount() == 1)
    {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $hash = SHA1($row['salt'].$password);
        if ($hash == $row['HASH'])
        {
            $_SESSION = array();
            $_SESSION['username'] = $username; //Set the username var
            $_SESSION['id'] = $row['id'];
            header("Location: http://localhost/SuperSeniorsWiredHack/index.php"); /* Redirect browser */
            exit();
            return true;
        }
        else{
            header("Location: http://localhost/SuperSeniorsWiredHack/loginsample.php"); /* Redirect browser */
            exit();
        }


    }
        else{
            $stmt = $db->prepare("Select * from ORG where (coUserName = :username)");
            $stmt->bindValue(":username", $username);
            $stmt->execute();


            if($stmt->rowCount() == 1)
            {
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                $hash = SHA1($row['salt'].$password);
                if ($hash == $row['HASH'])
                {
                    $_SESSION = array();
                    $_SESSION['username'] = $username; //Set the username var
                    $_SESSION['orgID'] = $row['id'];
                    header("Location: http://localhost/SuperSeniorsWiredHack/index.php"); /* Redirect browser */
                    exit();
                    return true;
                }
                else{

                    header("Location: http://localhost/SuperSeniorsWiredHack/loginsample.php"); /* Redirect browser */
                    exit();
                }

        }
    }
    return false;
}


