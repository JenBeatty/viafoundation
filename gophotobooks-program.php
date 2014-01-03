<?php
    include_once("includes/header.php");
    include_once("includes/footer.php");
    include_once("includes/databasefunctions.php");
    include_once("includes/commonfunctions.php");

    $site = "main";
    $siteID = GetSiteId($site);
    
    $page = LoadPage($siteID, 2);
    if($page != "0")
        DisplayHeader($page["title"], $page["keywords"], $page["description"], 1, 7, "GOPHOTOBOOKS.COM");
?>

<div  id="main_content">
            
    <div id="main_left2">
    
        <img src='images/gophotobooks_Banner.jpg' alt="GOPHOTOBOOKS.COM Fundraiser" class="programs_banner" />


    	<h3>GOPHOTOBOOKS.COM Fundraiser</h3>
    
    	<hr>
        	
    	<h4>AEDs On Campus</h4>

        <p>It’s estimated that up to 7,000 children die each year of <a href="learn-about-sca.php" title="Learn About SCA">Sudden 
        Cardiac Arrest</a> (SCA) in the United States. Does your school have a lifesaving device called 
        an <a href="learn-about-aeds.php" title="Learn About AEDs">automated external 
        defibrillator (AED)</a>? automated external defibrillator (AED)? AEDs are easy to use and have 
        been proven to save lives. Having a Heart Safe Campus is a great idea, but AEDs can be expensive — 
        ranging from $1,400 to $ 2,500. They require medical authorization, ongoing medical direction, a 
        storage cabinet to house the device, wall signs, and a record of monthly maintenance checks that 
        ensure the device is in proper working order. Sound too difficult? We can help! We handle all 
        compliance elements of the AED program and offer all California schools a special discounted 
        price on the AED package. We make it easy to have a Heart Safe Campus! The AED package 
        is $1,495.00 and includes:
        </p>

        <ul>
        <li>Initial medical authorization.</li>
        <li>An AED, carrying case, and spare set of electrodes.</li>
		<li>Alarmed wall cabinet</li>
		<li>Alarmed wall cabinet</li>
		<li>Wall sign</li>
		<li>Initial medical authorization</li>
		<li>3D wall sign</li>
		<li>The first year of maintenance services, including: ongoing medical direction, monthly 
		maintenance email reminders, policy and procedures, and a virtual site assessment to 
		determine the correct location of your AED wall cabinet.</li>
		</ul>
		
		<h4>The Fundraiser</h4>
		
		<p>To make things even easier, we have partnered with <a href="http://www.gophotobooks.com/" title="GOPHOTOBOOKS.COM" target="_blank">GOphotobooks.com</a>, 
		a photo project website for custom cards, photo albums, and calendars. Through this partnership, schools 
		can participate in our fall/winter AED fundraiser. Students gather names and funds directly, or guide 
		supporters to the school’s custom portal on the <a href="http://www.gophotobooks.com/" title="GOPHOTOBOOKS.COM" target="_blank">GOphotobooks website</a> where they purchase a gift card 
		for $25 (or more) to be used toward purchase of GOphotobooks.com custom photo projects.</p>
		
		<p>For every gift card purchased, half the amount will be credited to an account aimed at achieving the 
		school’s AED fundraising goal. Depending on the size of the school and number of AEDs required, only 
		170 to 500 $25 gift card purchases will be needed in order to reach AED goals.</p>
				
		<p>To sign your school up for this fundraiser, please contact The Via Foundation at (800) 284-0125 or email us at 
		<a href="mailto:fundraiser@theviafoundation.org">fundraiser@theviafoundation.org</a>.</p>


      <!--  <h2>The Deadline for Starting the Fundraiser...</h2>

        <h2>The Completion Date for the Fundraiser...</h2><-->


    </div>
    
    <aside id="sidebar">
        <h2>Quick Links</h2>
        
        <ul>
            <li><a href="queens-heart-safe-program.php" title="The Queens Heart Safe Program">Queen's Heart Safe Program</a></li>
            <li><a href="pta-campus-heart-program.php" title="The PTA Campus Heart Program">PTA Campus Heart Program</a></li>
            <li><a href="campus-heart-program.php" title="The Campus Heart Program">Campus Heart Program</a></li>
            <li><a href="heart-safe-program.php" title="The Heart Safe Program">Heart Safe Program</a></li>
        </ul>
        
    </aside>

</div>
<?php
    DisplayFooter();
?>