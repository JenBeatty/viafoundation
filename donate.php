<?php
    include_once("includes/header.php");
    include_once("includes/footer.php");
    include_once("includes/databasefunctions.php");
    include_once("includes/commonfunctions.php");

    $site = "main";
    $siteID = GetSiteId($site);
    
    $page = LoadPage($siteID, 2);
    if($page != "0")
        DisplayHeader($page["title"], $page["keywords"], $page["description"], 1, 2, "Donate");
?>

<div  class="fullWidth_page">
    
    <img src='images/donateMainBanner.jpg' alt="Learn About The Via Foundation" />
        
    <div class="main_content_fullWidth">

    	<h2>Support Via</h2>
    
    	<hr>
    
    	<br />

        <p>Thank you for your interest in furthering The Via Foundation’s mission to place 
        AEDs and offer CPR training in every school and community nationwide. We’ve made 
        it easy for you to support The Via Foundation with a donation. Click the Donate 
        button below to contribute securely through PayPal with your credit card. A PayPal 
        account is not required. Thank you for your support!
        </p>

        <br />

        <h2 class="donate_text">To Donate to The VIA Foundation General Fund 
        <br />(to support programs as needed), use the button below:
        </h2>

        <br />
        
        <div class="donate-button">
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
			<input name="cmd" type="hidden" value="_s-xclick" /> <input name="hosted_button_id" type="hidden" value="GG29JQBGN77SS" /> <input alt="PayPal - The safer, easier way to pay online!" name="submit" src="https://www.paypalobjects.com/WEBSCR-640-20110401-1/en_US/i/btn/btn_donateCC_LG.gif" type="image" /><img alt="" border="0" height="1" src="https://www.paypalobjects.com/WEBSCR-640-20110401-1/en_US/i/scr/pixel.gif" width="1" /></form>
		</div>
        
       <!-- <div id="ccards">
        <img src="images/donateVisa.jpg" class="ccard" />
        <img src="images/donateMC.jpg" class="ccard" />
        <img src="images/donateAMEX.jpg" class="ccard" />
        <img src="images/donateDINERS.jpg" class="ccard" />
        <img src="images/donateDISC.jpg" class="ccard" />
        </div>-->


    </div>

</div>
<?php
    DisplayFooter();
?>