<?php
    include_once("includes/header.php");
    include_once("includes/footer.php");
    include_once("includes/databasefunctions.php");
    include_once("includes/commonfunctions.php");

    $site = "main";
    $siteID = GetSiteId($site);
    
    $page = LoadPage($siteID, 2);
    if($page != "0")
        DisplayHeader($page["title"], $page["keywords"], $page["description"], 1, 7, "Via Programs");
?>

<div  class="fullWidth_page">
    
    <img src='images/programs_main_banner.jpg' alt="Learn About The Via Foundation" />
        
    <div class="main_content_fullWidth">

    	<h2>Via Programs</h2>
    
    	<hr>
    
    	<br />
    	
    	<a href="queens-heart-safe-program.php" title="Queens Heart Safe Program"><p class="via-programs-title">Queen's Heart Safe Program</p></a>

        <p class="programs-p">Queen of the Valley Medical Center partnered with The Via Foundation to create the Queen’s Heart Safe 
        Program in an effort to help increase the survival rate from <a href="learn-about-sca.php" title"Learn More About SCA">sudden cardiac arrest (SCA)</a> in Napa County.</p>
        
		<p class="programs-p">The <a href="queens-heart-safe-program.php" title="Queens Heart Safe Program">Queen’s Heart Safe Program</a> is a collaboration between several agencies, with goals to place automated external 
		defibrillators (AEDs), teach CPR, and offer long-term program management solutions to businesses, organizations, and 
		schools throughout the county.</p>

    	<a href="campus-heart-program.php" title="The Campus Heart Program"><p class="via-programs-title via-programs-title-not-first">Campus Heart Program</p></a>
    	
    	<p class="programs-p">Individual schools and school districts that are interested in having a comprehensive, ongoing AED and CPR 
    	program can apply for <a href="campus-heart-program.php" title="The Campus Heart Program">The Via Foundation’s Campus Heart Program.</a>
    	</p>
    	
    	<a href="heart-safe-program.php" title="The Heart Safe Program"><p class="via-programs-title via-programs-title-not-first">Heart Safe Program</p></a>
    	
    	<p class="programs-p">The Via Foundation can manage your Heart Safe Community Program and help you become a Heart Safe Community thanks to 
    	funding from local healthcare organizations, grants, and donations. The Via Foundation can manage your <a href="heart-safe-program.php" title="The Heart Safe Program">Heart Safe Community Program</a> and help you become a Heart Safe Community.
    	</p>
    	
    	<a href="pta-campus-heart-program.php" title="The PTA Campus Heart Program"><p class="via-programs-title via-programs-title-not-first">PTA Campus Heart Program</p></a>
    	
    	<p class="programs-p">It is estimated that 1 in 500 school-age children have an undetected heart condition that could lead to SCA. Students, 
    	faculty, parents, and visitors participate in activities that take place daily on a school campus. Having an AED 
    	on campus provides access to early defibrillation for 20% of our population.
    	</p> 
    	
    	<a href="gophotobooks-program.php" title="GOphotobooks.com Fundraiser"><p class="via-programs-title via-programs-title-not-first">Gophotobooks.com Fundraiser</p></a>
    	
    	<p class="programs-p">We handle all compliance elements of the AED program and offer all California schools a 
    	special discounted price on the AED package. We make it easy to have a Heart Safe Campus!
    	</p>
    	
    </div>

</div>
<?php
    DisplayFooter();
?>