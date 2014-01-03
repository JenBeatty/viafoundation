<?php
    include_once("includes/header.php");
    include_once("includes/footer.php");
    include_once("includes/databasefunctions.php");
    include_once("includes/commonfunctions.php");

    $site = "main";
    $siteID = GetSiteId($site);
    
    $page = LoadPage($siteID, 22);
    if($page != "0")
        DisplayHeader($page["title"], $page["keywords"], $page["description"], 1, 22, "MEET THE TEAM");
?>
	

<div id="main-rest">
    
    <img src='images/staff-banner-0607.jpg' alt="Learn About The Via Foundation" />

	<header id="staff_header">
    <h2>The Via Foundation Staff</h2>

    <hr>
    <br />

    </header>
    
    <br />
        
    <div id="main_content_staff">

    	
    	<div class="profile_photos">
    		<img src="images/staff_Liz.jpg" alt="Liz Lazar" />
    	</div><!--profile_photos-->
    	
    	<div class="profile_bio">
    		<h3>Liz Lazar</h3>
    		<h4>Executive Director</h4>
    		<p class="staff-phone">800.284.0125 ext. 701</p>
    		
    		<p>Liz started The Via Foundation with over 16 years of experience in project management 
    		and business start-up and 10 years of experience in implementing public access defibrillation 
    		programs. She has worked with numerous hospitals, healthcare districts, organizations, and 
    		Fortune 500 companies in placing hundreds of automated external defibrillators (AEDs) in 
    		over 25 countries throughout the world. After graduating with an undergraduate degree in 
    		Exercise Physiology, she found her passion in working with AEDs and helping the families 
    		of SCA victims.  Her husband is the Executive Officer on a Navy Destroyer. They currently 
    		reside in San Diego with their daughter, Alexandra.
    		</p>
    	
    	</div><!--profile_bio-->
        	
    	<div class="interesting_facts">
    	<p class="fact_title_odd">Interesting Facts About Liz</p>
    	
    	<ul>
    		<li>She is working on kicking a serious toothpick addiction.</li>
    		<li>Has had ophidiophobia for as long as she can remember, an 
    		irrational fear of snakes. And no, she does not care if they 
    		aren’t slimy or poisonous.</li>
    		<li>Since having a child, she has replaced a love of shoes for a love of purses. Big, roomy, purses.</li>
    	</ul>
    	
    	</div><!--interesting_facts-->
    	
    	<div class="profile_photos">
    		<img src="images/staff_Cathy.jpg" alt="Cathy DeCock" />
    	</div><!--profile_photos-->
    	
    	<div class="profile_bio">
    		<h3>Cathy DeCock</h3>
    		<h4>Director of Operations</h4>
			<p class="staff-phone">800.284.0125 ext. 700</p>
    		
    		<p> Cathy comes to The Via Foundation with ten years of non-profit management experience at the 
            Sierra Club.  There she managed the national program of chapter and group outings, risk 
            management, and oversight of the Club’s lodges and huts. She was promoted to the Office of 
            Environmental Programs where she managed grant compliance and activist training sessions. 
            She left the Sierra Club to be a full-time mom. During those years, Cathy became very 
            involved in her children’s schools. She was elected to the School Site Council and to the 
            PTA Executive Board. Now, Cathy is in her third year with Via, and brings her non-profit 
            management skills and her PTA and school knowledge to us as she manages all aspects of the 
            operations, including orders, accounting and the Via staff. If you have a question about 
            your order, Cathy can answer it!
    		</p>
    	
    	</div><!--profile_bio-->
    	
    	<div class="interesting_facts">
    	<p class="fact_title_even">Interesting Facts About Cathy</p>
    	
    	<ul>
    		<li>She has been a vegetarian since she was 16, and both of her kids have been vegetarians since birth.</li>
    		<li>She fantasizes about moving to the Caribbean and opening a bakery or a boat rental business.</li>
    		<li>She doesn’t like creamy food and especially dislikes white, creamy food.</li>
    	</ul>
    	
    	</div><!--interesting_facts-->
    	
    	<div class="profile_photos">
    		<img src="images/staff_kelly.jpg" alt="Kelly" />
    	</div><!--profile_photos-->
    	
    	<div class="profile_bio">
    		<h3>Kelly</h3>
    		<h4>Administrative Assistant</h4>
    		<p class="staff-phone">800.284.0125 ext. 702</p>
    		
    		<p>Kelly comes to The Via Foundation after completing her degrees in music at the 
    		San Francisco Conservatory of Music and Carnegie Mellon University. Over the years, 
    		she has worked as an assistant to professors and provided customer service to bank 
    		patrons; Kelly’s happy to utilize these experiences to provide administrative assistance 
    		at Via. You can find her answering phones, responding to emails, navigating Arch, and 
    		doing anything she can to promote placing more AEDs in our communities!</p>
    	
    	</div><!--profile_bio-->
    	
    	<div class="interesting_facts">
    	<p class="fact_title_odd">Interesting Facts About Kelly</p>
    	
    	<ul>
    		<li>She is an operatic soprano. (No, she doesn’t own a hat with horns on it, and 
    		no, Phantom of the Opera is not really an opera.)</li>
    		<li>She loves reading, watching, and writing science fiction.</li>
    		<li>She enjoys making pies, which usually end up looking ugly but tasting good.</li>
    	</ul>
    	
    	</div><!--interesting_facts-->
    	
    	<div class="profile_photos">
    		<img src="images/staff_Rochelle.jpg" alt="Rochelle Short" />
    	</div><!--profile_photos-->
    	
    	<div class="profile_bio">
    		<h3>Rochelle Short</h3>
    		<h4>Social Media and Marketing Manager</h4>
    		
    		<p>Rochelle came to The Via Foundation wanting to merge her love of social media 
    		with her passion for being involved in a cause she believes in. After leaving a 
    		decade-long career in the real estate field, Rochelle spent a year volunteering 
    		for various nonprofits and completing her certification in editing from the University 
    		of Washington. She handles print, press, and social media outreach for The Via 
    		Foundation. Her dream job title is “Chief Conversationalist” and she looks forward 
    		to connecting with you on the foundation’s Facebook and Twitter pages.
    		</p>
    	
    	</div><!--profile_bio-->
    	
    	<div class="interesting_facts">
    	<p class="fact_title_even">Interesting Facts About Rochelle</p>
    	
    	<ul>
    		<li>She recycles plastic bottle caps obsessively for her numerous Montessori friends’ craft projects.</li>
    		<li>She can hail a taxi from over two blocks away with her loud whistle.</li>
    		<li>She loves reading culinary memoirs but rarely steps foot in her own kitchen.</li>
    	</ul>
    	
    	</div><!--interesting_facts-->
    	
    	<div class="profile_photos">
    		<img src="images/staff_Joe.jpg" alt="Joe Kinson" />
    	</div><!--profile_photos-->
    	
    	<div class="profile_bio">
    		<h3>Joe Kinson</h3>
    		<h4>Site Maintenance Supervisor</h4>
    		<p class="staff-phone">800.284.0125 ext. 704</p>
    		
    		<p>After 27 years as a firefighter and 12 years as a paramedic, Joe is enjoying 
    		his retirement by working as the Site Maintenance Supervisor for The Via Foundation 
    		and teaching American Heart Association CPR classes. As Site Maintenance Supervisor, 
    		Joe visits Via Partners and makes sure their AEDs are up to date and compliant with 
    		the Health and Safety Code. He regularly performs updates, event downloads, and 
    		changes out batteries and pads so our Partners never have to worry if their AED is 
    		ready for use.  He regularly teaches CPR and AED classes, putting his experience 
    		saving lives as a firefighter/paramedic to good use.  He has 2 boys and lives in 
    		Fremont with his dog, Reba.
    		</p>
    	
    	</div><!--profile_bio-->
    	
    	<div class="interesting_facts">
    	<p class="fact_title_odd">Interesting Facts About Joe</p>
    	
    	<ul>
    		<li>He has made over 60 gallons of chili at one time for his side hobby, chili cook-offs.</li>
    		<li>He has been a pizza maker, a radio disc jockey, and a play-by-play sportscaster before becoming a firefighter.</li>
    		<li>He is extremely afraid of clowns.</li>
    	</ul>
    	
    	</div><!--interesting_facts-->
    	
    	<div class="profile_photos">
    		<img src="images/staff_Maria.jpg" alt="Maria Kovell" />
    	</div><!--profile_photos-->
    	
    	<div class="profile_bio">
    		<h3>Maria Kovell</h3>
    		<h4>Community Outreach Coordinator</h4>
    		<p class="staff-phone">800.284.0125 ext. 703</p>
    		
    		<p>Maria comes to The Via Foundation with 10 years of communications experience in
			the non-profit sector. After returning from the Peace Corps in Moldova, she moved
			to California to pursue a Master of Public Administration degree at the Monterey
			Institute of International Studies. Maria is an aspiring cross-cultural health advocate.
			She is passionate about health literacy and patient empowerment. Maria loves to
			provide educational programs and support to community members. She conducts
			community outreach for The Via Foundation.
    		</p>
    	
    	</div><!--profile_bio-->
    	
    	<div class="interesting_facts">
    	<p class="fact_title_even">Interesting Facts About Maria</p>
    	
    	<ul>
    		<li>She uses palindromic sentences and numbers whenever possible.</li>
    		<li>She made her own wine while living in Moldova, a small country in Eastern Europe.</li>
    		<li>She dreams of being a back-up singer and never owning a car again.</li>
    	</ul>
    	
    	</div><!--interesting_facts-->
    			
    	<img src="images/cathyAboutGraphic.png" id="chain_of_life" alt="Cathy hard at work" />

    </div><!--main_content-->
    
</div><!--main-->

<?php
    DisplayFooter();
?>