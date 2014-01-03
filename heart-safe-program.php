<?php
    include_once("includes/header.php");
    include_once("includes/footer.php");
    include_once("includes/databasefunctions.php");
    include_once("includes/commonfunctions.php");

    $site = "main";
    $siteID = GetSiteId($site);
    
    $page = LoadPage($siteID, 2);
    if($page != "0")
        DisplayHeader($page["title"], $page["keywords"], $page["description"], 1, 7, "HEART SAFE PROGRAM");
?>

<div  id="main_content">
            
    <div id="main_left2">
    
        <img src='images/heartsafe_banner.jpg' alt="Heart Safe Program" class="programs_banner" />


    	<h3>Heart Safe Program</h3>
    
    	<hr>
        	
    	<h4>What do counties in Minnesota, California, Massachusettes, and casinos in Las Vegas, 
    	Nevada, have in common?</h4>

        <p>They all have community-wide automated external defibrillator (AED) programs and have 
        all had a bystander grab a publicly accessible AED to save a life
        </p>
        <p>The safest place in America for your heart is, surprisingly, inside the casinos in 
        Las Vegas, Nevada. Casinos have increased their victims’ survival rate from the national 
        average of 5 % to over 70%. This was due to AEDs being accessible and community/staff 
        training ensuring quick response times.
        </p>
        <p>By placing AEDs in public areas, local recreation centers, public pools, schools, 
        and police vehicles — communities are giving their residents the power to save lives. 
        Community CPR classes, training at each AED-equipped facility, and coordination with 
        local 911 call centers are helping to increase the survival rate from sudden cardiac 
        arrest (SCA). The Via Foundation can help your community become a Heart Safe Community 
        and the foundation can manage your Heart Safe Community Program.
        </p>
        <p>For more information on our Heart Safe Program for communities or to apply for the program, 
        please <a href="contact.php" title="Contact The Via Foundation">contact The Via Foundation.</a>
        </p>

    </div>
    
    <aside id="sidebar">
        <h2>Quick Links</h2>
        
        <ul>
            <li><a href="queens-heart-safe-program.php" title="The Queens Heart Safe Program">Queen's Heart Safe Program</a></li>
            <li><a href="gophotobooks-program.php" title="GOphotobooks.com Fundraiser">Gophotobooks.com Fundraiser</a></li>
            <li><a href="pta-campus-heart-program.php" title="The PTA Campus Heart Program">PTA Campus Heart Program</a></li>
            <li><a href="campus-heart-program.php" title="The Campus Heart Program">Campus Heart Program</a></li>
        </ul>
        
    </aside>

</div>
<?php
    DisplayFooter();
?>