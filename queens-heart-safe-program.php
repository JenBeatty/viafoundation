<?php
    include_once("includes/header.php");
    include_once("includes/footer.php");
    include_once("includes/databasefunctions.php");
    include_once("includes/commonfunctions.php");

    $site = "main";
    $siteID = GetSiteId($site);
    
    $page = LoadPage($siteID, 2);
    if($page != "0")
        DisplayHeader($page["title"], $page["keywords"], $page["description"], 1, 7, "QUEEN'S HEART SAFE PROGRAM");
?>

<div  id="main_content">
            
    <div id="main_left2">
    
        <img src='images/queensheartBanner.png' alt="Queen's Heart Safe Program" class="programs_banner" />


    	<h3>The Queen's Heart Safe Program</h3>
    
    	<hr>
    
    	<br />

        <p>Queen of the Valley Medical Center, in collaboration with The Via Foundation, has created the 
        Queen’s Heart Safe Program to help increase the survival rate from sudden cardiac arrest (SCA) 
        in Napa County.
        </p>
        
        <p>The Queen’s Heart Safe Program is a collaboration between several agencies with a goal of 
        increasing the survival rate from SCA by placing automated external defibrillators (AEDs), 
        teaching CPR, and providing long-term program management solutions to businesses, organizations, 
        and schools throughout the county.
        </p>

		<p>The Queen’s Heart Safe Program offers discounted AED packages to all businesses and organizations 
		throughout Napa County.
        </p>

        <h4>AED Packages Include</h4>
        
        <ul>
        <li>AED with carrying case, battery, and electrodes</li>
		<li>A spare set of electrodes</li>
		<li>Alarmed wall cabinet</li>
		<li>Wall sign</li>
		<li>Initial medical authorization</li>
		<li>Site assessment</li>
		<li>First year of medical direction</li>
		<li>First year of maintenance services</li>
		</ul>
		
        <h4>Annual Maintenance Services</h4>
        
        <ul>
		<li>Replacement battery and electrodes every two years</li>
		<li>Replacement battery and electrodes after each time the AED is used (up to once per year)</li>
		<li>Ongoing medical direction</li>
		<li>Cardiac event download and evaluation</li>
		<li>Monthly maintenance emails</li>
		<li>Expiration-date tracking</li>
		<li>Upgrade and recall service</li>
		<li>Policy and procedure assistance</li>
		</ul>
		
    	<br />
		
		<p>Become a bronze, silver or gold sponsor today for an AED at a school or non-profit 
		in Napa County. We’ll place a plaque on the AED cabinet acknowledging your gift. 
		More importantly, you’ll know that your support is helping save lives.
        </p>

        <h2>To Join The Queen’s Heart Safe Program and Become a Heart Safe Facility, 
        please download and complete the application below:
        </h2>
        
        <a href="downloads/Queens-Heart-Safe-Program-Application-and-Agreement1.pdf" target="blank" title="Download the Application">Queen's Heart Safe Program Application & Agreement</a>

        <br />
        <br />
        
        <p>For more information, visit <a href="http://www.thequeen.org/For-Community/The-Queens-HeartSafe-Program.aspx" title="Queen's Heart Safe Program">www.thequeen.org/heartsafe</a> or contact The Via Foundation 
        at 800.284.0125 or <a href="mailto:fundraiser@theviafoundation.org" title="Email The Via Foundation">info@theviafoundation.org.</a>
        </p>
        
        <br />
        
      <!-- <a href"#" title="" class="doc_link">Register Your AED</a>-->
        
        <h2>To Donate to the Queens Heart Safe Program (Napa, California), use the
		button below:
        </h2>
        
        <div class="donate-button">
        <form method="post" action="https://www.paypal.com/cgi-bin/webscr">
			<input type="hidden" value="_s-xclick" name="cmd">
			<input type="hidden" value="TK9T4WT4QKRFA" name="hosted_button_id">
			<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" name="submit" alt="PayPal - The safer, easier way to pay online!">
			<img width="1" height="1" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" alt="">
		</form>
		</div>

        <!-- <a href="#" title="" class="button">DONATE</a>
        
        <div id="ccards">
        <img src="images/donateVisa.jpg" class="ccard" />
        <img src="images/donateMC.jpg" class="ccard" />
        <img src="images/donateAMEX.jpg" class="ccard" />
        <img src="images/donateDINERS.jpg" class="ccard" />
        <img src="images/donateDISC.jpg" class="ccard" />
        </div>-->


    </div>
    
    <aside id="sidebar">
        <h2>Quick Links</h2>
        
        <ul>
            <li><a href="gophotobooks-program.php" title="GOphotobooks.com Fundraiser">Gophotobooks.com Fundraiser</a></li>
            <li><a href="pta-campus-heart-program.php" title="The PTA Campus Heart Program">PTA Campus Heart Program</a></li>
            <li><a href="campus-heart-program.php" title="The Campus Heart Program">Campus Heart Program</a></li>
            <li><a href="heart-safe-program.php" title="The Heart Safe Program">Heart Safe Program</a></li>
        </ul>
        
    </aside>

</div>
<?php
    DisplayFooter();
?>