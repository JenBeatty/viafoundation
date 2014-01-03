<?php
    include_once("includes/header.php");
    include_once("includes/footer.php");
    include_once("includes/databasefunctions.php");
    include_once("includes/commonfunctions.php");

    $site = "main";
    $siteID = GetSiteId($site);
    
    $page = LoadPage($siteID, 1);
    if($page != "0")
        DisplayHeader($page["title"], $page["keywords"], $page["description"], 1, 1, "WHAT WE DO");
?>

<div id="main_content">
    
    <img src= "images/bannerAbout2.jpg" alt="Learn About The Via Foundation" />
        
    <div id="main_left">
    
    	<h2>Our Work At The Via Foundation</h2>
    
    	<hr>
    
    	<br />

        <p>The Via Foundation will help <a href="#" title="">school districts</a> and <a href="#" title="">communities:</a></p>
        
        <ol> 
            <li>raise funds to purchase AEDs;</li>
            <li>provide medical authorisations;</li>
            <li>teach American Heart Association CPR/AED training sessions every two years;</li>
            <li>coordinate the monthly email maintenance reminders, and</li>
            <li>send out replacement supplies when needed.</li>
        </ol>

        <p>The Via Foundation handles all elements of a comprehensive AED Program for as long 
           as the site subscribes to our program. If your school, school district, organisation, 
           or community is interested in becoming a Via Partner, please <a href="#" title="">contact The Via Foundation</a>.
        </p>

        <br />
        
    </div>
    
    <aside id="sidebar">
        <h2>Quick Links</h2>
        
        <ul>
            <li><a href="via-staff.php" title="The Via Foundation Staff">Meet The Team: Via Staff</a></li>
            <li><a href="via-board.php" title="The Via Foundation Board">Meet The Team: Via Board</a></li>
            <li><a href="via-partners.php" title="The Via Foundation's Partners">Via Partners</a></li>
        </ul>
        
    </aside>
</div>
<?php
    DisplayFooter();
?>
