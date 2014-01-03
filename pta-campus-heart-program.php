<?php
    include_once("includes/header.php");
    include_once("includes/footer.php");
    include_once("includes/databasefunctions.php");
    include_once("includes/commonfunctions.php");

    $site = "main";
    $siteID = GetSiteId($site);
    
    $page = LoadPage($siteID, 2);
    if($page != "0")
        DisplayHeader($page["title"], $page["keywords"], $page["description"], 1, 7, "PTA CAMPUS HEART PROGRAM");
?>

<div  id="main_content">
            
    <div id="main_left2">
    
        <img src='images/PTAcampus_banner.jpg' alt="GOPHOTOBOOKS.COM Fundraiser" class="programs_banner" />


    	<h3>PTA Campus Heart Program</h3>
    
    	<hr>
        	
    	<h4>The Parent Teacher Associations and AEDs</h4>

        <p>At the 2011 California State Parent Teacher Association (PTA) convention, the PTA passed 
        a resolution supporting AED programs in schools. The resolution supports not only getting 
        an AED in a school, but also establishing a management program to maintain the AED. 
        For her help with the resolution, our executive director, Liz Lazar, 
        received the Honorary Service Award from the California PTA.
        </p>
        
        <p>As an Allied Agency of the California PTA, The Via Foundation has put together an AED 
        package to help PTAs and schools implement a fully-comprehensive and successful AED program. 
        Our annual maintenance services ensure that your school is in compliance with the Health and 
        Safety Code and that your AED is ready for use at all times.
        </p>
                        
		<h4>The VIA Foundation's Implementation Guide to Assist PTAs</h4>
				
		<p>The Via Foundation has created a guide to help PTAs and schools evaluate their AED needs 
		and walk them through the steps necessary to implement a successful AED program. 
		Download the <a href="downloads/School-AEDs-Implementation-Guide.pdf" title="Download the Guide">School AEDs 
		Implementation Guide.</a>
		</p>
				
		<h4>Who Is A VIA Partner?</h4>

		<p>A Via Partner is any school, PTA, organization, or business that wants to have a successful and 
		fully-comprehensive AED program on site. By becoming a Via Partner you will receive discounted 
		rates on AEDs, assistance with fundraising for your program, access to our Partner Toolkit, and 
		be eligible for ongoing maintenance services designed to keep your facility compliant and your 
		AED ready for use at all times.
		</p>

        <a href="downloads/PTA-Application-and-Agreement.pdf" target="blank" title="Download the Application">PTA Application Agreement</a>

    </div>
    
    <aside id="sidebar">
        <h2>Quick Links</h2>
        
        <ul>
            <li><a href="queens-heart-safe-program.php" title="The Queens Heart Safe Program">Queen's Heart Safe Program</a></li>
            <li><a href="gophotobooks-program.php" title="GOphotobooks.com Fundraiser">Gophotobooks.com Fundraiser</a></li>
            <li><a href="campus-heart-program.php" title="The Campus Heart Program">Campus Heart Program</a></li>
            <li><a href="heart-safe-program.php" title="The Heart Safe Program">Heart Safe Program</a></li>
        </ul>
        
    </aside>

</div>
<?php
    DisplayFooter();
?>