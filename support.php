<?php
    include_once("includes/header.php");
    include_once("includes/footer.php");
    include_once("includes/databasefunctions.php");
    include_once("includes/commonfunctions.php");

    $site = "main";
    $siteID = GetSiteId($site);
    
    $page = LoadPage($siteID, 18);
    if($page != "0")
        DisplayHeader($page["title"], $page["keywords"], $page["description"], 1, 18);
?>
    <div id="main">
<?php echo $page["content"]; ?>
    </div><!--main-->
    <div id="sidebar">
<?php
    $paypal = GetPayPalInfo(1);
    ShowDonations(1, $paypal["goal"], $paypal["current"], $paypal["code"]);
?>
    </div><!--sidebar-->
<?php
    DisplayFooter();
?>