<?php
    include_once("includes/header.php");
    include_once("includes/footer.php");
    include_once("includes/databasefunctions.php");
    include_once("includes/commonfunctions.php");

    $site = "main";
    $siteID = GetSiteId($site);
    
    $page = LoadPage($siteID, 2);
    if($page != "0")
        DisplayHeader($page["title"], $page["keywords"], $page["description"], 1, 25, "LEARN ABOUT SCA");
?>

<div  class="fullWidth_page">
    
    <img src='images/aboutSCA_banner-V2.jpg' alt="Learn About The Via Foundation" />
        
    <div class="main_content_fullWidth">

    	<h2>Learn About SCA</h2>
    
    	<hr>
    
    	<br />
    	
	<div class="accordion_section">
	
		<h2 class="accordion_subsection_less sca_head">What is SCA?
		</h2>
		<p class="more_content">SCA stands for sudden cardiac arrest. SCA is the sudden cessation 
		of the effective pumping action of the heart. The normal heartbeat stops, and is most 
		frequently replaced with an irregular, useless twitching state of the muscles of the 
		heart’s chambers, called the ventricles. This heart rhythm is called ventricular fibrillation 
		or ventricular tachycardia. Consequently, blood and oxygen are no longer circulating to 
		the brain and body.</p>
		
		<h2 class="accordion_subsection_less sca_head">
		How is SCA different than a heart attack?
		</h2>
		<p class="more_content">Sudden cardiac arrest is not the same as a heart attack. A 
		heart attack occurs when there is interruption of blood flow to a portion of the 
		heart, and that part of the heart starts to die due to a lack of oxygen. The majority 
		of heart attacks are due to a blockage in one of the arteries that supplies blood to 
		a specific area of the heart. A heart attack victim will usually be able to talk and 
		respond to bystanders. If a heart attack occurs, it can trigger ventricular fibrillation 
		and SCA. More than 80% of cases of SCA occur in people who have significant heart disease.
		</p>
		
		<h2 class="accordion_subsection_less sca_head">What is the first sign of SCA?
		</h2>
		<p class="more_content">The first thing someone will do when they experience SCA 
		is pass out. They will also stop breathing normally, although they may be gasping 
		or moaning. Since the victim is no longer getting blood and oxygen to the brain, 
		they have only 4-6 minutes before they will start to experience brain damage, and 
		soon after that, brain death. For each minute that passes without oxygen being 
		delivered to the brain and body, there is an incremental 10% decrease in the 
		chance of survival.
		</p>
		
		<h2 class="accordion_subsection_less sca_head">How is SCA treated?
		</h2>
		<p class="more_content">The majority of SCA is due to erratic, twitching heart behavior, 
		and the definitive treatment for that is defibrillation. Defibrillation means delivering 
		a high-dose electrical shock that stops the heart from quivering and allows it to regain 
		a normal heart rhythm. This shock must be administered quickly, before the brain begins 
		to die. With fire and ambulance response times being anywhere from 4 to 20 minutes 
		(depending on location), having access to early defibrillation is the key to surviving SCA.
		</p>
		
		<h2 class="accordion_subsection_less sca_head">How can AEDs in our community help SCA?
		</h2>
		<p class="more_content">Currently, only 7 out of every 100 Americans (5%) who experience SCA 
		survive. SCA kills more Americans each year than breast cancer, lung cancer, prostate cancer, 
		and AIDS combined. Approximately 900 Americans die each day due to complications from SCA. 
		In places with strong AED programs and CPR training (such as the Las Vegas casinos), 
		survival rates jump to over 70%. Communities with strong CPR training programs (such as 
		Rochester, Minnesota), place AEDs in police cars and at local parks, recreation centers, 
		schools, and sporting fields – resulting in survival rates as high as 43%. Access to early 
		defibrillation and knowing CPR has been proven to save lives.
		</p>

	</div>
	
		<img src="images/chainOfLifeGraphic.jpg" id="chain_of_life" alt="Chain Of Life" />
    	
    </div>

</div>
<?php
    DisplayFooter();
?>