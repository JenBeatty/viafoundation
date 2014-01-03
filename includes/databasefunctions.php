<?php
require("mysqlinfo.php");
     
if(!function_exists("openDatabase"))
{
    function openDatabase()
    {
        mysql_connect(DB_SERVER, DB_USER, DB_PASS);
        @mysql_select_db(DB_NAME) or die( "Unable to select database");
    }
}

if(!function_exists("closeDatabase"))
{
    function closeDatabase()
    {
        mysql_close();
    }
}

if(!function_exists("QuickQuery"))
{
    function QuickQuery($query, $errormessage="0")//Insert "0" as errormessage to get the default mysql_error
    {
        openDatabase();
        if($errormessage)
            $result = mysql_query($query) or die($errormessage);
        else
        if($errormessage == "0")
        {
            $result = mysql_query($query) or die(mysql_error());
        }
        else
            $result = mysql_query($query);

        if(!$result)
            return 0;
        else
            return $result;
    }
}

?>
