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
        DisplayHeader($page["title"], $page["keywords"], $page["description"], 1, 25, "LEARN ABOUT AEDs");
?>

<div class="fullWidth_page">
    
    <img src='images/banner_whatIsAnAED.jpg' alt="Learn About Automatic External Defibrilators" />
        
    <div class="main_content_fullWidth">

    	<h2>Learn About AEDs</h2>
    
    	<hr>
    
    	<br />
    	
        <h4>What Is An AED?</h4>
        
        <ul>
        <li>AED stands for “Automated External Defibrillator.”</li>
		<li>It is a portable device, designed for anyone to use.</li>
		<li>The device uses smart technology to tell if a “shock” is needed.</li>
		<li>Without an AED unit on hand, a victim of sudden cardiac arrest has less than a 5 % chance of survival.</li>
		<li>With an AED and early defibrillation, survival can increase to 90%.   </li>
		</ul>
		
        <h4>How Do I Use An AED?</h4>
        
        <ul>
		<li>Bring an AED to the scene if anyone is reported to be unconscious, not breathing, and/or without a pulse.</li>
		<li>All AED units are easy-to-use and guide the rescuer through the “save” process.</li>
		<li>Pictures show exactly where to place the electrodes.</li>
		<li>Once charged, the AED will either emit a shock or ask the rescuer to push a flashing “Shock” button.</li>
		</ul>

        <h4>What Am I Supposed To Do?</h4>
        
        <p>An AED will keep analyzing and keep emitting shocks until the medical professionals 
        arrive.The rescuer’s job:
        </p>
        
        <ul>
		<li>Turn on the AED.</li>
		<li>Apply the electrodes.</li>
		<li>Pictures show exactly where to place the electrodes.</li>
		<li>Follow the instructions provided by the AED.</li>
		</ul>

        <br />
        
        <p>AEDs are becoming more and more common and may someday be standard equipment, like 
        a fire extinguisher, in any building. <strong>AEDs are designed so that anyone can become a 
        lifesaver</strong>. If you have additional questionsabout AEDs, please <a href="contact.php" title="Contact The VIA Foundation">contact The Via Foundation.</a>
        </p>
        
        <br />
        
        <div class="aed-photo">
        <figure>
        	<img src="images/whatIsAnAEDAEDModels.jpg" alt="AED Models Banner" />
        </figure>
        </div><!--aed-photo-->
        
        <div class="aed-photo">
        	<a href="http://www.healthcare.philips.com/us_en/products/resuscitation/products/frx/index.wpd" target="blank" title="Learn More About the Philips FRX">
        	<figure>
        	<img style="outline:none; border: 0;" src="images/whatIsAnAEDa.jpg" alt="Philips FRX" />
        	<figcaption>Philips FRX<br /><img src="images/linkIcon.jpg" class="linkIcon" /></figcaption>
        	</figure>
        	</a><!--aed-photo-->
        	<a href="aedpricing/Philips-FRX-AED-package1.pdf" target="blank" title="Download the Pricing Sheet"><p>Pricing Package</p></a>
        </div>
        
        <div class="aed-photo">
        	<a href="http://www.physio-control.com/ProductDetail.aspx?id=3355" target="blank" title="Learn More About the LIFEPAK CR Plus">
        	<figure>
        	<img style="outline:none; border: 0;" src="images/whatIsAnAEDb.jpg" alt="LIFEPAK CR Plus" />
        	<figcaption>LIFEPAK CR Plus<br /><img src="images/linkIcon.jpg" class="linkIcon" /></figcaption>
        	</figure>
        	</a><!--aed-photo-->
        	<a href="aedpricing/Cr-Plus-AED-package1.pdf" target="blank" title="Download the Pricing Sheet"><p>Pricing Package</p></a>
        </div>
        
        <div class="aed-photo">
        	<a href="http://www.heartsine.com/en/products/samaritan-pad-300p/" target="blank" title="Learn More About the HeartSine Samaritan">
        	<figure>
        	<img style="outline:none; border: 0;" src="images/whatIsAnAEDc.jpg" alt="Zoll AED Plus" />
        	<figcaption>HeartSine Samaritan<br /><img src="images/linkIcon.jpg" class="linkIcon" /></figcaption>
        	</figure>
        	</a><!--aed-photo-->
        	<a href="aedpricing/Heartsine-AED-Package1.pdf" target="blank" title="Download the Pricing Sheet"><p>Pricing Package</p></a>
        </div>
        
        <div class="aed-photo">
        	<a href="http://www.cardiacscience.com/cardiology-products/aed-defibrillator/portable-aed-machines-powerheart-aed-g3-automatic-semiautomatic-defibrillators.php" target="blank" title="Learn More About the Cardiac Science G3">
        	<figure>
        	<img style="outline:none; border: 0;" src="images/whatIsAnAEDd.jpg" alt="Cardiac Science G3" />
        	<figcaption>Cardiac Science G3<br /><img src="images/linkIcon.jpg" class="linkIcon" /></figcaption>
        	</figure><!--aed-photo-->
        	</a>
        	<a href="aedpricing/Cardiac-Science-G3-AED-Package1.pdf" target="blank" title="Download the Pricing Sheet"><p>Pricing Package</p></a>
        </div>
        
        <div class="aed-photo">
        	<a href="http://www.defibtech.com/lifeline" target="blank" title="Learn More About the Defibtech Lifeline">
        	<figure>
        	<img style="outline:none; border: 0;" src="images/whatIsAnAEDe.jpg" alt="Defibtech Lifeline" />
        	<figcaption>Defibtech Lifeline<br /><img src="images/linkIcon.jpg" class="linkIcon" /></figcaption>
        	</figure><!--aed-photo-->
        	</a>
        	<a href="aedpricing/Defibtech-AED-Package1.pdf" target="blank" title="Download the Pricing Sheet"><p>Pricing Package</p></a>
        </div>
        
        <div class="aed-photo">
        	<a href="http://www.zoll.com/medical-products/automated-external-defibrillators/aed-plus/" target="blank" title="Learn More About the Zoll AED Plus">
        	<figure>
        	<img style="outline:none; border: 0;" src="images/whatIsAnAEDf.jpg" alt="Zoll AED Plus" />
        	<figcaption>Zoll AED Plus<br /><img src="images/linkIcon.jpg" class="linkIcon" /></figcaption>
        	</figure><!--aed-photo-->
        	</a>
        	<a href="aedpricing/Zoll-Plus-AED-Package1.pdf" target="blank" title="Download the Pricing Sheet"><p>Pricing Package</p></a>
        </div>
        
        <div class="aed-photo">
        	<a href="http://www.healthcare.philips.com/us_en/products/resuscitation/products/OnSite/index.wpd" target="blank" title="Learn More About the Philips On-Site">
        	<figure>
        	<img style="outline:none; border: 0;" src="images/whatIsAnAEDg.jpg" alt="Philips On-Site" />
        	<figcaption>Philips On-Site<br /><img src="images/linkIcon.jpg" class="linkIcon" /></figcaption>
        	</figure><!--aed-photo-->
        	</a>
        	<a href="aedpricing/Philips-OnSite-AED-Package1.pdf" target="blank" title="Download the Pricing Sheet"><p>Pricing Package</p></a>
        </div>

    </div>
</div>

<?php
    DisplayFooter();
?>