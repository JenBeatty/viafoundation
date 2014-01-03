<?php
    include_once("includes/header.php");
    include_once("includes/footer.php");
    include_once("includes/databasefunctions.php");
    include_once("includes/commonfunctions.php");
    include_once("includes/aed_slides.php");

    $site = "main";
    $siteID = GetSiteId($site);
    
    $page = LoadPage($siteID, 3);
    if($page != "0")
        DisplayHeader($page["title"], $page["keywords"], $page["description"], 1, 3);
?>

<div class="fullWidth_page">
    
    <img src='images/banner_whatIsAnAED.jpg' alt="Learn About Automatic External Defibrilators" />
        
    <div class="main_content_fullWidth">

    	<h2>Learn About AEDs</h2>
    
    	<hr>
    
    	<br />
    	
        <h4>What Is An AED?</h4>
        
        <ul>
        <li>AED stands for “automated external defibrillator.”</li>
		<li>It is a portable device, designed for anyone to use.</li>
		<li>The device uses SMART technology to tell if a shock is needed.</li>
		<li>Without an AED unit on hand, a victim of sudden cardiac arrest (SCA) has less than a 5 % chance of survival.</li>
		<li>With an AED and early defibrillation, survival can increase to 90%.</li>

		</ul>
		
        <h4>How Do I Use An AED?</h4>
        
        <ul>
		<li>Bring an AED to the scene if anyone is reported to be unconscious, not breathing, and/or without a pulse.</li>
		<li>All AED units are easy-to-use and guide the rescuer through the save process.</li>
		<li>Pictures show exactly where to place the electrodes.</li>
		<li>Once charged, the AED will either emit a shock or ask the rescuer to push a flashing “Shock” button.</li>
		</ul>

        <h4>What Am I Supposed To Do?</h4>
        
        <p>An AED will keep analyzing and keep emitting shocks until the medical professionals arrive. The rescuer’s job:
        </p>
        
        <ul>
		<li>Turn on the AED.</li>
		<li>Apply the electrodes.</li>
		<li>Pictures show exactly where to place the electrodes.</li>
		<li>Follow the instructions provided by the AED.</li>
		</ul>

        <br />
        
        <p>AEDs are becoming more and more common and may someday be standard equipment, like a fire 
        extinguisher, in every building. AEDs are designed so that anyone can become a lifesaver. If 
        you have additional questions about AEDs, please <a href="#" title="">contact The Via Foundation.</a>
        </p>
        
        <br />
        
        <div class="aed-photo">
        	<img src="images/whatIsAnAEDAEDModels.jpg" alt="AED Models Banner" />
        </div><!--aed-photo-->
        
        <div class="aed-photo">
        	<a href="#" title=""><img src="images/whatIsAnAEDa.jpg" alt="AED Models Banner" /></a>
        </div><!--aed-photo-->
        
        <div class="aed-photo">
        	<a href="#" title=""><img src="images/whatIsAnAEDb.jpg" alt="AED Models Banner" /></a>
        </div><!--aed-photo-->
        
        <div class="aed-photo">
        	<a href="#" title=""><img src="images/whatIsAnAEDc.jpg" alt="AED Models Banner" /></a>
        </div><!--aed-photo-->
        
        <div class="aed-photo">
        	<a href="#" title=""><img src="images/whatIsAnAEDd.jpg" alt="AED Models Banner" /></a>
        </div><!--aed-photo-->
        
        <div class="aed-photo">
        	<a href="#" title=""><img src="images/whatIsAnAEDe.jpg" alt="AED Models Banner" /></a>
        </div><!--aed-photo-->
        
        <div class="aed-photo">
        	<a href="#" title=""><img src="images/whatIsAnAEDf.jpg" alt="AED Models Banner" /></a>
        </div><!--aed-photo-->
        
        <div class="aed-photo">
        	<a href="#" title=""><img src="images/whatIsAnAEDg.jpg" alt="AED Models Banner" /></a>
        </div><!--aed-photo-->

    </div>
</div>

<?php
    DisplayFooter();
?>