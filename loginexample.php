<?php

//Start session before content sent
session_start();

//Initialize username if one does not exist.
if(!array_key_exists("username", $_SESSION))
    $_SESSION['username'] = "Anonymous";

//Per Cloud9 docs
$C9_IP = getenv("IP");
$C9_USER = getenv("C9_USER");
$C9_PASS = NULL;
$C9_DB = "c9";

try
{
    $db = new PDO("mysql:host=$C9_IP;dbname=$C9_DB", $C9_USER, $C9_PASS);
}
catch(Exception $ex)
{
    die($ex->getMessage());
}


/*
* Accepts user credentials and returns true if login succeeds, otherwise false.
*/
function login($username, $password)
{

    /*
    * Hint: 
    * Select the row from the database that has the user account your looking for.
    * Once you have that row check and see if salt concatenated to the beggining 
    * of the user supplied password produces the SHA1() hash you expected.  
    * So the password stored in the database is SHA1(salt . actualPassword); 
    * In php . is the + operator for strings.
    */


    /*
    * Security Good: Uses paramaterized queries... no SQL injection
    * Security Bad: User/Pass will be stored in plaintext for MySQL logs
    */
    global $db; //Use the $db declared already
    $hash = "SHA1(CONCAT(salt,:password))";
    //   $stmt = $db->prepare("Select * from User where (username, hash) = (Select username, SHA1(CONCAT(salt, :password)) as hash FROM User where username = :username)");
    $stmt = $db->prepare("Select * from User where (username = :username)");


    $stmt->bindValue(":username", $username);

    $stmt->execute();


    if($stmt->rowCount() == 1)
    {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        // $row['id'] Contains row id
        // $row['username'] Contains row username
        if (SHA1($row['salt'].$password) == $row['hash'])
        {
            $_SESSION = array(); //Unset all session vars now
            $_SESSION['username'] = $username; //Set the username var
            $_SESSION['id'] = $row['id'];
            return true;
        }
    }
    return false;
}

/*
* Logs the user our by destroying their session, unsetting all array keys and setting user to Anonymous.
*/
function logout()
{
    session_destroy();
    $_SESSION = array(); //Unset all session vars now
    $_SESSION['username'] = "Anonymous"; //Set username back to anoymous
    return true;
}

