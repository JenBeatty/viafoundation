<?php
    include_once("includes/header.php");
    include_once("includes/footer.php");
    include_once("includes/databasefunctions.php");
    include_once("includes/commonfunctions.php");

    $site = "main";
    $siteID = GetSiteId($site);
    
    $page = LoadPage($siteID, 2);
    if($page != "0")
        DisplayHeader($page["title"], $page["keywords"], $page["description"], 1, 7, "THANK YOU");
?>


	<div  class="fullWidth_page">
    
    <img src='images/thank-you.jpg' alt="The Via Foundation Thanks You" />
        
    	<div id="thankyoumain">
    	
    		<div class="main_content_fullWidth">

				<a href="http://theviafoundation.org" title="The Via Foundation">
				<p class="backtosite">Go Back to The Via Foundation Site</p></a>
    	
    		</div>

		</div>

	</div>
<?php
    DisplayFooter();
?>