<?php 
include_once("databasefunctions.php");

function ValidateUser($name, $password)
{
    openDatabase();
    $name = mysql_real_escape_string($name);
    $result = QuickQuery("SELECT * FROM users WHERE name = '{$name}'");
    
    if(mysql_num_rows($result) > 0)
    {
        if(!mysql_result($result,0,"name"))//Make sure the user exists
            return "User Does Not Exist";
    }
    else
        return "User Does Not Exist";
    
    $temppwd=mysql_result($result,0,"password");//Make sure the passwords match
    if(sha1($password) != $temppwd)
        return "Password Does Not Match";
    
    return 1;
}

function GetUserID($name)
{
    openDatabase();
    $name = mysql_real_escape_string($name);
    $result = QuickQuery("SELECT id FROM users WHERE name = '{$name}'");
    closeDatabase();

    return(mysql_result($result,0,"id"));//Get the UserID
}

function ChangePassword($id, $password)
{
    return QuickQuery("UPDATE users SET password='{$password}' WHERE id={$id}");
}

function CreateRandomKey($amount)
{
    $keyset = "abcdefghijklmABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $randkey = "";
    for ($i=0; $i<$amount; $i++)
    $randkey .= substr($keyset, rand(0, strlen($keyset)-1), 1);
    return $randkey;
}

function GetUserType($user)
{
    openDatabase();
    $user = mysql_real_escape_string($user);
    $result = QuickQuery("SELECT type FROM users WHERE name='{$user}'");
    if(mysql_num_rows($result) > 0)
        return mysql_result ($result, 0, "type");
    else 
        return 0;
}

function CreateUser($user, $password, $type, $site)
{
    openDatabase();
    $user = mysql_real_escape_string($user);
    $password = mysql_real_escape_string($password);
    $password = sha1($password);
    
    $result = QuickQuery("SELECT * FROM users WHERE name='{$name}'");
    if(mysql_num_rows($result) > 0)
        return 0;
    
    QuickQuery("INSERT INTO users (name, type, password) VALUES ('{$user}', '{$type}', '{$password}')");
    $result = QuickQuery("SELECT id FROM users WHERE name='{$user}'");
    $ownerid = mysql_result($result, 0, "id");
    QuickQuery("INSERT INTO siteowners (siteid, ownerid) VALUES ('{$site}', '{$ownerid}')");
    return 1;
}

function DoesUserExist($username)
{
    openDatabase();
    $user = mysql_real_escape_string($username);
    
    $result = QuickQuery("SELECT * FROM users WHERE name='{$username}'");
    if(mysql_num_rows($result) > 0)
        return true;
    
    return false;
}

?>