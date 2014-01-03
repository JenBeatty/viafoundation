<?php
    include_once("includes/header.php");
    include_once("includes/footer.php");
    include_once("includes/databasefunctions.php");
    include_once("includes/commonfunctions.php");

    $site = "main";
    $siteID = GetSiteId($site);
    
    $page = LoadPage($siteID, 1);
    if($page != "0")
        DisplayHeader($page["title"], $page["keywords"], $page["description"], 2, 1, "ABOUT VIA");
?>

<div id="main_content">
    
    <img src='images/donate_template_banner.jpg' alt="Support the Queens Heart Program in Napa" />
        
    <div id="main_left">

    	<h2>Queens Heart Safe Program; Napa, California</h2>
    
    	<hr>
    
    	<br />

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute 
        irure dolor in reprehen.
        </p>
        
		<p>Cum penatibus arcu, porta tempor ut sit, pid diam placerat dolor scelerisque pulvinar? 
		Mauris augue hac lorem, platea, magna, elit integer scelerisque magna montes, integer 
		lorem platea egestas amet? A in. Scelerisque sed! Sociis habitasse tincidunt tincidunt 
		dapibus dolor. Nunc lorem? Odio, magna! Magna in, scelerisque magna ac, adipiscing. 
		Montes placerat nec! 
        </p>

        <br />

		<h2>Learn More About Napa’s Queens Heart Safe Program:</h2>
		
		<img src="images/donate_template_video_preview.jpg" alt="Watch A Video To Learn More" />

    </div>
    
    <aside id="sidebar_donate_template">
        <h2>Participate</h2>
        <h3>Donate</h3>
        
        <a href="#" title="" class="donate_template_button">DONATE</a>
        
        <div class="donate_template_ccards">
        <img src="images/donateVisa.jpg" class="ccard" />
        <img src="images/donateMC.jpg" class="ccard" />
        <img src="images/donateAMEX.jpg" class="ccard" />
        <img src="images/donateDINERS.jpg" class="ccard" />
        <img src="images/donateDISC.jpg" class="ccard" />
        </div>
        
        <br />
        <br />
        
        <h3>Join Us</h3>
        <a href="#" title="Apply to Join"><p>Application & Agreement</p>
        
    </aside>
</div>
<?php
    DisplayFooter();
?>