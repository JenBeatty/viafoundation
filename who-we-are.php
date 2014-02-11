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
    
    <img src='images/bannerAbout1-V2.jpg' alt="Learn About The Via Foundation" />
        
    <div id="main_left2">

    	<h2>Who We Are</h2>
    
    	<hr>
    
    	<br />

        <p>The Via Foundation is a nonprofit organization dedicated to saving lives in schools, 
        communities, and businesses nationwide. By raising funds, managing, and implementing 
        complete long-term automated external defibrillator (AED) programs in our communities, 
        The Via Foundation will increase the survival rate from sudden cardiac arrest (SCA). 
        Currently, the national average survival rate from SCA is 75%. SCA kills more Americans 
        each year than breast cancer, lung cancer, prostate cancer, and AIDS combined.
        </p>
        
        <p>Once in cardiac arrest, the only treatment is a shock to the victim’s heart. While 
        bystanders wait for emergency medical services (EMS) to arrive, they can assist the 
        victim by taking control with CPR and an AED.</p>
        
        <p>An AED is a small, portable, easy-to-use device that is FDA-approved for use by 
        the lay rescuer. An AED talks the rescuer through a few simple steps, then analyzes 
        the patient and determines if a shock is needed. Only if it’s deemed necessary will 
        the AED prompt the rescuer to press a button emitting a shock. (*Note not all AED 
        units require a button be pushed. Some units emit a shock automatically, if deemed 
        necessary.) There is no way to override an AED and an AED cannot hurt someone.</p>


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