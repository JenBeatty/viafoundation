<?php
    include_once("includes/header.php");
    include_once("includes/footer.php");
    include_once("includes/databasefunctions.php");
    include_once("includes/commonfunctions.php");

    $site = "main";
    $siteID = GetSiteId($site);
    
    $page = LoadPage($siteID, 1);
    if($page != "0")
        DisplayHeader($page["title"], $page["keywords"], $page["description"], 1, 1, "ABOUT VIA");
?>

<div id="main_content">
    
    <img src= "images/bannerAbout3.jpg" alt="Learn About The Via Foundation" />
    
    
    <div id="main_left2">

        <h2>The Via Foundation Mission</h2>
    
    	<hr>
    
    	<br />
			        
        <p>The Via Foundation helps save lives by placing 
            automated external defibrillators in schools and communities. Our CPR 
            training and program management solutions give communities the skills 
            and equipment necessary to help prevent unnecessary deaths from sudden 
            cardiac arrest.</p>


        <br />
        <br />
        <br />
        <br />
        
    </div>
    
    <aside id="sidebar">
        <h2>Quick Links</h2>
        
        <ul>
            <li><a href="via-staff.php" title="Meet The Via Team">Meet The Team: Via Staff</a></li>
            <li><a href="via-board.php" title="Meet The Via Board">Meet The Team: Via Board</a></li>
            <li><a href="via-partners.php" title="See Who Via's Partners Are">Via Partners</a></li>
        </ul>
        
    </aside>
</div>
<?php
    DisplayFooter();
?>
<?php ?>
