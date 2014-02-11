<?php
    include_once("includes/header.php");
    include_once("includes/footer.php");
    include_once("includes/databasefunctions.php");
    include_once("includes/commonfunctions.php");

    $site = "main";
    $siteID = GetSiteId($site);
    
    $page = LoadPage($siteID, 2);
    if($page != "0")
        DisplayHeader($page["title"], $page["keywords"], $page["description"], 1, 22, "MEET THE TEAM");
?>

<div  class="fullWidth_page">
    
    <img src='images/partners_banner-V2.jpg' alt="Learn About The Via Foundation" />
        
    <div class="main_content_fullWidth">

    	<h2>Bringing Resources and Education on SCA</h2>
    
    	<hr>
    
    	<br />
    	
	<div class="accordion_section">
	
		<p class="accordion_subsection_less">Allied Agency: The California PTA, <a href="http://www.capta.org/" title="California State PTA" target="_blank">www.capta.org</a>
		</p>
		<p class="more_content">The Via Foundation is proud to be an Allied Agency of the California PTA since 2010. As an Allied Agency, 
		Via helped write the AED Resolution that was introduced and passed at the 2011 PTA Convention. To read 
		more about the resolution encouraging AED programs in schools <a href="http://www.capta.org/assets/downloads/AED_Awareness_in_Schools.pdf" title="" target="_blank">click here.</a></p>
		
		<p class="accordion_subsection_less">
		Resource: Parent Heart Watch, <a href="http://www.parentheartwatch.org/" title="Parent Heart Watch" target="_blank">www.parentheartwatch.org</a>
		</p>
		<p class="more_content">Parent Heart Watch was established by parents who have lost a child to sudden 
		cardiac arrest (SCA). Parent Heart Watch is a national network of parents, families, 
		and partners dedicated to reducing SCA in youth. Through their dedicated network, 
		they are turning tragedy into positive actions that will save young lives across 
		the nation. They inform, educate, advocate, and implement nationwide programs that 
		help achieve their mission and vision objectives. As a partner of Parent Heart Watch, Via is 
		pleased to offer training classes, AEDs, and our Maintenance Program to all PHW members at 
		a 5% discount. 
		</p>
		
		<p class="accordion_subsection_more">Resource: Sudden Cardiac Arrest Association, 
		<a href="http://www.suddencardiacarrest.org/aws/SCAA/pt/sp/home_page" title="Sudden Cardiac Arrest Association" target="_blank">www.suddencardiacarrest.org</a>
		</p>
		
		<p class="accordion_subsection_less">
		Partner: Darius Jones Foundation, <a href="http://www.dariusjonesfoundation.org/" title="Darius Jones Foundation" target="_blank">www.dariusjonesfoundation.org</a>
		</p>
		<p class="more_content">Darius Jones suffered SCA while competing in a youth basketball 
		game on October 11, 2009. He was just 15 years old. The Darius Jones Foundation provides 
		hope and preventive assistance to athletes and families that could potentially be 
		confronted with this same tragic situation. The Darius Jones Foundation provides education 
		and awareness about the need for CPR training, medical pre-screening, and on-site AED 
		accessibility with a special emphasis on youth and high school athletic programs.
		</p>
		
		<p class="accordion_subsection_more">Via Partner: Sequoia Healthcare District, 
		<a href="http://www.sequoiahealthcaredistrict.com/" title="Sequoia Healthcare District" target="_blank">www.sequoiahealthcaredistrict.com</a>
		</p>
		
		<p class="accordion_subsection_more">Queen's Heart Safe Program, <a href="www.thequeen.org/heartsafe" title="Go to the Queen's Heart Safe Page" target="_blank">www.thequeen.org/heartsafe</a>
		</p>
		
	</div>
    	
    </div>

</div>
<?php
    DisplayFooter();
?>