<?php
    include_once("includes/header.php");
    include_once("includes/footer.php");
    include_once("includes/databasefunctions.php");
    include_once("includes/commonfunctions.php");

    $site = "main";
    $siteID = GetSiteId($site);
    
    $page = LoadPage($siteID, 7);
    if($page != "0")
        DisplayHeader($page["title"], $page["keywords"], $page["description"], 1, 7);
?>
    <div id="nosidebar">
<?php
    echo $page["content"];
?>
    </div><!--main-->
<?php
    DisplayFooter();
?>