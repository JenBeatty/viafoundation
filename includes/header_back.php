<!DOCTYPE html>
<?php
include_once("includes/commonfunctions.php");
include_once("includes/globals.php");

function DisplayHeader($title, $keywords, $description, $type="1", $menuNumber="0")
{
    global $directory, $javascript, $images, $root;
    $request_url=$_SERVER['REQUEST_URI'];
    $site = "main";
//    $directory = "";
    if($type != "1")
    {
        $request_url = explode("/",$request_url);
        $site = $request_url[3];
    }
    $site = GetSiteId($site);
    ?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="description" content="<?php echo $description; ?>" />
        <meta name="keywords" content="<?php echo $keywords; ?>" />
        <link href="<?php echo $root;?>/css/style.css" rel="stylesheet" type="text/css">
        <title><?php echo $title; ?></title>
        <script type="text/javascript" src="<?php echo $javascript; ?>/jquery.js"></script>
    </head>
    <body>
    <div id="page-wrapper">
        <div id="content">
        <div id="header">
            <div id="above_menu">
                <img src="<?php echo $images;?>/via-logo.jpg" />
                <p><span style="color:navy; font-family:arial;">CONTACT US</span><br />
                   <span style="font-size:28px; color:gray;">1-800-284-0125</span></p>
                <form method="POST" action="search.php">
                    <p style="clear:right; margin-top:10px;">Search: <input type="text" name="search" /> <input type="submit" value="search" /></p>
                    <input type="hidden" name="site" value="<?php echo $siteName; ?>" />
                </form>
            </div><!--above_menu-->
        <?php
            include_once("includes/menu.php");
            DisplayMenu($type, $menuNumber, $site);
        ?>
        </div><!--header-->
<?php
}
?>
