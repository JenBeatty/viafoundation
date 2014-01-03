<?php
    include_once("includes/header.php");
    include_once("includes/footer.php");
    include_once("includes/databasefunctions.php");
    include_once("includes/commonfunctions.php");
    $isHome = true;

    $site = "main";
    $siteID = GetSiteId($site);
    
    $page = LoadPage($siteID, 0);
    if($page != "0")    
        DisplayHeader($page["title"], $page["keywords"], $page["description"], 1);
    echo $page['content'];
?>

<?php
    DisplayFooter();
?>