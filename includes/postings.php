<?php session_start();//Start PHP session?>
<?php
include_once("includes/databasefunctions.php");

if(!function_exists(PostData))
{
    function PostData($type, $content, $userid)
    {
        openDatabase();
        $content = mysql_real_escape_string($content);
        $query = "INSERT INTO postings (poster_id, post_content, post_type, post_time)
                  VALUES ({$userid}, '{$content}', '{$type}', NOW())";
        QuickQuery($query);
    }
}

if(!function_exists(GetPosts))
{
    function GetPosts($type)
    {
        openDatabase();
        $query = "SELECT * FROM postings 
                  LEFT JOIN users u ON poster_id = u.id
                  WHERE post_type = '{$type}' 
                  ORDER BY post_time DESC";
        return QuickQuery($query);
    }
}
?>
