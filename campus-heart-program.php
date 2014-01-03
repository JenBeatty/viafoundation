<?php
    include_once("includes/header.php");
    include_once("includes/footer.php");
    include_once("includes/databasefunctions.php");
    include_once("includes/commonfunctions.php");

    $site = "main";
    $siteID = GetSiteId($site);
    
    $page = LoadPage($siteID, 2);
    if($page != "0")
        DisplayHeader($page["title"], $page["keywords"], $page["description"], 1, 7, "CAMPUS HEART PROGRAM");
?>

<div  id="main_content">
            
    <div id="main_left2">
    
        <img src='images/campusheart_banner.jpg' alt="Campus Heart Program" class="programs_banner" />


    	<h3>Campus Heart Program</h3>
    
    	<hr>
        	
    	<h4>Campus Is Home To Much of Our Population</h4>

        <p>20% of our nation’s population is on a school campus on a daily basis. This includes 
        students, parents, teachers, staff, and administrators– during normal school hours, 
        after-school activities, and at athletic events.
        </p>
        
    	<h4>Schools Are Underfunded</h4>

        <p>Some schools share one nurse within an entire school district. School staff take care 
        of our children 4 to 10 hours a day. An undiagnosed enlarged heart, or Hypertrophic 
        Cardiomyopathy, is the leading killer of our high school athletes each year. Up to 
        7,000 young people suffer sudden cardiac arrest (SCA) annually. These deaths do not 
        include sudden cardiac death (SCD) due to impact to the chest or SCDs caused by 
        lightning, heatstroke or asthma. An estimated 14,000 children and infants die annually 
        from SCD.
        </p>
        
    	<h4>The Via Foundation Can Help</h4>

        <p>Schools and school districts that are interested in having a comprehensive, ongoing 
        AED and CPR program can seek assistance from The Via Foundation. The foundation will 
        work with a site contact person at each school in your district. We will give you 
        resources to show you how to effectively raise funds. Also, a donation button on The 
        Via Foundation website will link contributors to a specific PayPal account where their 
        donation will help your organization meet its goal.
        </p>
        <p>Once the fundraising goal is met, The Via Foundation will help determine the correct 
        location of your AED’s wall cabinet which houses the device, purchase AEDs, and hold CPR 
        training classes for your teachers, coaches, and administrators.
        </p>
		<p>The school site contact will receive a monthly email reminder to check the device battery and 
		online maintenance records will be kept in accordance with the Good Samaritan Law in your state. 
		When the batteries or pads expire, the school will automatically receive new supplies for the 
		duration of their subscription to the program. The Campus Heart Program will hold CPR 
		certification classes every other year to ensure there is an abundance of rescuers trained 
		in CPR and AED use at each school.
		</p>
		<p>For more information on our Campus Heart Program or to apply for the program, please 
		<a href="contact.php" title="Contact The VIA Foundation">contact The Via Foundation.</a>
        </p>
        
        <iframe width="640" height="360" id="campus_heart_video" src="http://www.youtube.com/embed/nU-dyckwDBQ?feature=player_embedded" frameborder="0" allowfullscreen></iframe>

    </div>
    
    <aside id="sidebar">
        <h2>Quick Links</h2>
        
        <ul>
            <li><a href="queens-heart-safe-program.php" title="The Queens Heart Safe Program">Queen's Heart Safe Program</a></li>
            <li><a href="gophotobooks-program.php" title="GOphotobooks.com Fundraiser">Gophotobooks.com Fundraiser</a></li>
            <li><a href="pta-campus-heart-program.php" title="The PTA Campus Heart Program">PTA Campus Heart Program</a></li>
            <li><a href="heart-safe-program.php" title="The Heart Safe Program">Heart Safe Program</a></li>
        </ul>
        
    </aside>

</div>
<?php
    DisplayFooter();
?>