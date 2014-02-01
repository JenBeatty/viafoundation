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
    
    <img src='images/newsletter-archive-header.jpg' alt="Read The Via Foundation's Newsletters" />

	<header id="staff_header">
    <h2>Newsletter Archive</h2>

    <hr>
    <br />

    </header>
    
    <br />
        
    <div id="main_content_newsletter">

    
    	<p>The Via Foundation distributes a quarterly newsletter that aims to: 
		<p><span class="newsletter-bold"><strong>Educate</strong></span>: AED laws change, new legislation is frequently introduced, and medical advancements 
		affect our mission. It’s our job to inform you about the latest news regarding SCA, CPR, and AEDs. </p>
		<p><span class="newsletter-bold"><strong>Acknowledge</strong></span>: As a nonprofit organization, Via succeeds because of generous donors, an amazing pool of 
		volunteers, and a dedicated Board of Directors and staff. We want you to meet these individuals!</p>
		<p><span class="newsletter-bold"><strong>Inspire</strong></span>: Via wants to share stories! When someone’s life is saved because of an on-site 
		AED, we want you to know! When we place AEDs in schools, businesses, and gathering places – excitement about 
		future “saves” is infectious. Perhaps you’ll be inspired to purchase (or raise funds for) an AED in your school or community?</p>
		<p>When you subscribe to our quarterly newsletter, you’ll have first access to AED news and inspiring stories in your 
		community! Other than the newsletter, we will not spam you or sell your address.</p>
 		<a href="http://eepurl.com/MRxb1" title="Subscribe to The Via Foundation's Newsletter" ><p><em>Subscribe to 
    	The Via Foundation’s Newsletter.</em></p></a>
    	
    	<div class="newsletter_group_left">
    		<a href="http://us4.campaign-archive1.com/?u=3f938141ae9b05cd3b134fda0&id=5fd638724d&e=6682c72939" title="Via's November Newsletter"><h3>November, 2013</h3></a>
    		<a href="http://us4.campaign-archive1.com/?u=3f938141ae9b05cd3b134fda0&id=5fd638724d&e=6682c72939" title="Via's November Newsletter"><img src="images/newsletter-archive-01.png" alt="The Via Foundation's quarterly newsletter from November, 2013" /></a>
    		<p>Great Samaritan Saves a Life!, Reunion, Bob’s<br /> Legal Corner and Fun Facts.</p>
    	</div><!--newsletter_photos_left-->
    	
        	
    	<div class="newsletter_group_right">
    		<a href="http://us4.campaign-archive2.com/?u=3f938141ae9b05cd3b134fda0&id=93a67dfa5f&e=6682c72939" title="Via's January Newsletter"><h3>January, 2014</h3></a>
    		<a href="http://us4.campaign-archive2.com/?u=3f938141ae9b05cd3b134fda0&id=93a67dfa5f&e=6682c72939" title="Via's January Newsletter"><img src="images/newsletter-archive-02.png" alt="The Via Foundation's quarterly newsletter from January, 2014" /></a>
    		<p>Via’s 2nd Annual Cocktail Party, Welcome Pam<br /> Dodson, Ask Bob, Fun Facts.</p>
    	</div><!--newsletter_photos_right-->
    	
    </div><!--main_content-->
    
</div><!--main-->

<?php
    DisplayFooter();
?>