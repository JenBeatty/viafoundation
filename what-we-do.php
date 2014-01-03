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
    
    <img src= "images/bannerAbout2.jpg" alt="Learn About The Via Foundation" />
        
    <div id="main_left2">
    
    	<h2>What We Do</h2>
    
    	<hr>
    
    	<br />

        <p>Via helps school districts, communities, and businesses design and implement 
        fully-comprehensive automated external defibrillator (AED) programs. We assist with:</a></p>
        
        <ul> 
            <li>Fundraising</li>
			<li>Purchasing AEDs</li>
			<li>Ongoing medical direction</li>
			<li>Training classes</li>
			<li>Site assessments to determine correct AED placement</li>
			<li>County registration</li>
			<li>Policy and procedure documents</li>
			<li>Expiration-date tracking</li>
			<li>Replacement supplies</li>
			<li>Defibrillator upgrade and recall assistance</li>
			<li>Monthly maintenance reminders via email</li>
			<li>Annual maintenance subscriptions</li>
        </ul>

		<br />
		
        <p>We handle all elements of a fully-comprehensive AED program. If you are interested 
        in becoming a Via Partner, please <a href="contact.php" title="Contact The Via Foundation">contact The Via Foundation</a>.
        </p>

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
