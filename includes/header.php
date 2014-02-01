<!DOCTYPE html>
<?php
include_once("includes/commonfunctions.php");
include_once("includes/globals.php");
include_once("includes/menu.php");

function DisplayHeader($title, $keywords, $description, $type="1", $menuNumber="0", $page_title="")
{
    global $directory, $javascript, $images, $root, $isHome, $siteID;
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

        <script type="text/javascript">
            $(document).ready(function()
            {
                $(".defaultText").focus(function(srcc)
                {
                    if ($(this).val() == $(this)[0].title)
                    {
                        $(this).removeClass("defaultTextActive");
                        $(this).val("");
                    }
                });

                $(".defaultText").blur(function()
                {
                    if ($(this).val() == "")
                    {
                        $(this).addClass("defaultTextActive");
                        $(this).val($(this)[0].title);
                    }
                });

                $(".defaultText").blur();
            });
        </script>
    </head>
    <body>
    <div id="page-wrapper">
        <div id="content">
        <div id="header">
            <div id="above_menu">
                <ul>
                    <li>&nbsp</li>
                </ul>
<!--                <img src="<?php echo $images;?>/via-logo.jpg" />
                <p><span style="color:navy; font-family:arial;">CONTACT US</span><br />
                   <span style="font-size:28px; color:gray;">1-800-284-0125</span></p>
                <form method="POST" action="search.php">
                    <p style="clear:right; margin-top:10px;">Search: <input type="text" name="search" /> <input type="submit" value="search" /></p>
                    <input type="hidden" name="site" value="<?php echo $siteName; ?>" />
                </form>-->
            </div><!--above_menu-->
            <div id="menu">
                <ul id="left_menu">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="who-we-are.php">About</a>
                    	<ul>
                    		<li><a href="who-we-are.php">Who We Are</a></li>
                    		<li><a href="what-we-do.php">What We Do</a></li>
                    		<li><a href="via-mission.php">Via Mission</a></li>
                    	</ul>
                    </li>
                    <li><a href="learn-about-sca.php">Learn</a>
                    	<ul>
                    		<li><a href="learn-about-sca.php">Learn About SCA</a></li>
                    		<li><a href="learn-about-aeds.php">Learn About AEDs</a></li>
                    	</ul>
                    </li>
                </ul>
                <a href="home.php" title="The Via Foundation"><img style="outline:none; border: 0;" src="images/headerLogo.png" /></a>
                <ul id="right_menu">
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="via-programs.php">Programs</a></li>
                    <li><a href="donate.php">Donate</a></li>
                </ul>
            </div>
        <?php
//            include_once("includes/menu.php");
//            DisplayMenu($type, $menuNumber, $site);
        if($isHome)
        {
        ?>
            <img src="images/bannerHome3.jpg" />
            <div id="sub_heading">
                <ul>
                    <li onclick="window.location = 'who-we-are.php'"><div class="circle"><span class="text">1</span></div><a href="who-we-are.php">About</a><br /><span class="sub_text-first">Find out who Via is</span></li>
                    <li onclick="window.location = 'about-what-we-do.php'"><div class="circle"><span class="text">2</span></div><a href="about-what-we-do.php">Programs</a><br /><span class="sub_text">Read about what Via does</span></li>
                    <li onclick="window.location = 'via-newsletter.php'"><div class="circle"><span class="text">3</span></div><a href="via-newsletter.php">Newsletter</a><br /><span class="sub_text">Read and Subscribe</span></li>
                    <li onclick="window.location = 'donate.php'"><div class="circle"><span class="text">4</span></div><a href="donate.php">Donate</a><br /><span class="sub_text">Support our work &amp; programs</span></li>
                </ul>
            </div><!--sub_heading-->
  <?php } else 
        { ?>
        <?php  
            $result = GetMenuItems($type, $menuNumber);
            $num = mysql_num_rows($result);
            ?>
            <div id="menu_background">
            <div id="page_title"><?php echo $page_title; ?></div><div id="menu_sub_heading"><ul><?php
                for($x = 0; $x < $num; $x++)
                {
                    echo mysql_result($result, $x, "name");
                }
            ?></ul></div>
            </div><?php
        ?>
  <?php } ?>
        </div><!--header-->
<?php
}
?>
