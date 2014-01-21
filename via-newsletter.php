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
        
    <div id="main_content_staff">

    
    	<div class="newsletter_group_left">
    		<h3>November, 2013</h3>
    		<img src="images/newsletter-archive-01.png" alt="The Via Foundation's quarterly newsletter from November, 2013" />
    		<p>Great Samaritan Saves a Life!, Reunion, Bob’s Legal Corner and Fun Facts.</p>
    	</div><!--newsletter_photos_left-->
    	
        	
    	<div class="newsletter_group_right">
    		<h3>January, 2014</h3>
    		<img src="images/newsletter-archive-02.png" alt="The Via Foundation's quarterly newsletter from January, 2014" />
    		<p>Via’s 2nd Annual Cocktail Party, Welcome Pam Dodson, Ask Bob, Fun Facts.</p>
    	</div><!--newsletter_photos_right-->
    	
    </div><!--main_content-->
    
</div><!--main-->

<?php
    DisplayFooter();
?>