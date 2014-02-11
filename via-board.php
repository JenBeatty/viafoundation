<?php
    include_once("includes/header.php");
    include_once("includes/footer.php");
    include_once("includes/databasefunctions.php");
    include_once("includes/commonfunctions.php");

    $site = "main";
    $siteID = GetSiteId($site);
    
    $page = LoadPage($siteID, 9);
    if($page != "0")
        DisplayHeader($page["title"], $page["keywords"], $page["description"], 1, 22, "MEET THE TEAM");
?>
<div id="main-rest">
    
    <img src='images/board_banner-V2.jpg' alt="Learn About The Via Foundation" />

	<header id="staff_header">
    <h2>The Via Foundation Board</h2>

    <hr>
    <br />

    </header>
    
    <br />
        
    <div id="main_content_staff">

    	
    	<div class="profile_photos">
    		<img src="images/board_Joe.jpg" alt="Joe Novello" />
    	</div><!--profile_photos-->
    	
    	<div class="profile_bio">
    		<h3>Joseph Novello, IV, RN, BSN, BA</h3>
    		<h4>Board Member | Interim Board President</h4>
    		
    		<p>Joe is a healthcare entrepreneur with clinical expertise in emergency and 
    		critical care nursing. His clinical career started in pre-hospital emergency 
    		care as a firefighter/EMT. Since then, he has worked for many agencies including 
    		major academic university hospitals, small rural community hospitals and a 
    		critical care and specialty care transport ambulance. During his career he has 
    		responded to hundreds of cardiac arrest emergencies. He has been involved with 
    		several business start-ups. Most recently as the CEO of a national firm specializing 
    		in corporate health, safety, and wellness. Joe has served as a faculty member for 
    		the American Heart Association, has taught hundreds of healthcare providers Advanced 
    		Cardiac Life Support, and certified thousands of laypeople in CPR. Joe holds a BA and 
    		BSN from the University of Portland, where he served on several faculty-level 
    		committees and boards while completing his academic study.
    		</p>
    	
    	</div><!--profile_bio-->
        	
    	<div class="interesting_facts">
    	<p class="fact_title_odd">Interesting Facts About Joe</p>
    	
    	<ul>
    		<li>He has traveled to 20 countries.</li>
    		<li>He won’t eat anything within a few days of its expiration date.</li>
    		<li>He was an extra in a blockbuster film when he was younger.</li>
    	</ul>
    	
    	</div><!--interesting_facts-->
    	
    	<div class="profile_photos">
    		<img src="images/board_Joanne.jpg" alt="S. Joanne Dames" />
    	</div><!--profile_photos-->
    	
    	<div class="profile_bio">
    		<h3>S. Joanne Dames</h3>
    		<h4>Medical Director and Vice President</h4>
    		
    		<p>Joanne is board certified in emergency medicine and has 17 years of experience 
    		in resuscitating victims of sudden cardiac arrest. She is passionate in her quest 
    		to educate the public regarding the prevalence of cardiovascular disease, and 
    		the importance of communities being trained in CPR and AED use.  A spokesperson 
    		for the American Heart Association for the past several years, with numerous radio 
    		and television appearances, Joanne is a CPR/AED instructor as well as a regular 
    		instructor for the Advanced Cardiac Life Support course at Stanford University.
    		</p>
    	
    	</div><!--profile_bio-->
    	
    	<div class="interesting_facts">
    	<p class="fact_title_even">Interesting Facts About Joanne</p>
    	
    	<ul>
    		<li>At age 55, she decided her first marathon should be the original one, the Marathon to Athens—in Greece!</li>
    		<li>She insists that the lyrics to Credence Clearwater Revival’s, “There is a bad moon on the rise” are really “There's on the bathroom on the right.”</li>
    		<li>She cheats at Scrabble by making up fake medical terms.</li>
    	</ul>
    	
    	</div><!--interesting_facts-->
    	
    	<div class="profile_photos">
    		<img src="images/board_Liz.jpg" alt="Liz Dollar" />
    	</div><!--profile_photos-->
    	
    	<div class="profile_bio">
    		<h3>Elizabeth (Liz) Dollar, CPA</h3>
    		<h4>Treasurer and Interim Secretary</h4>
    		
    		<p>Liz is a partner at Moss Adams LLP in their San Francisco office. She has practiced 
    		public accounting for over 12 years, and for the past 10 years, Liz has focused 
    		exclusively on serving not-for-profit organizations, performing audits, tax returns, 
    		and consulting. Liz is the Greater Bay Area Practice Not-for-Profit & Government 
    		group leader and also leads the Foundation Sector practice for the entire firm. 
    		She graduated from Washington State University with a bachelor’s degree in business 
    		administration with an emphasis in accounting. Liz lives in Alameda, California with 
    		her husband and their two children.
    		</p>
    	
    	</div><!--profile_bio-->
    	
    	<div class="interesting_facts">
    	<p class="fact_title_odd">Interesting Facts About Liz</p>
    	
    	<ul>
    		<li>She is a thrill-ride junkie and has never met a rollercoaster she didn’t love.</li>
    		<li><cite>Grease</cite> is one of her all-time favorite movies and her nickname in high school 
    		was Rizzo, although she considers herself to be more like Sandy.</li>
    		<li>She married her high school sweetheart.</li>
    	</ul>
    	
    	</div><!--interesting_facts-->
    	
    	<div class="profile_photos">
    		<img src="images/board-jim.png" alt="Jim Fohrman" />
    	</div><!--profile_photos-->
    	
    	<div class="profile_bio">
    		<h3>Jim Fohrman</h3>
    		<h4>Board Member</h4>
    		
    		<p> Jim is the Director of Global Accounts at Centimark. A highly motivated achiever 
    		who thrives on constant challenges and is driven to succeed, Jim brings analytical 
    		and decisive organizational skills to the Via Board of Directors. Having experienced 
    		cardiac events in his personal sphere, Jim knows the importance of AED preparedness 
    		and it’s what motivated him to join Via’s efforts in his community.
    		</p>
    	
    	</div><!--profile_bio-->
    	
    	<div class="interesting_facts">
    	<p class="fact_title_even">Interesting Facts About Jim</p>
    	
    	<ul>
    		<li>Jim is an avid wine lover, which is part of the reason he lives in Napa, California.</li>
    		<li>He has been a stamp collector for over forty-one years.</li>
    		<li>Jim is a constant whistler (mostly Christmas music ... all year round).</li>
    	</ul>
    	
    	</div><!--interesting_facts-->
    	
    	<div class="profile_photos">
    		<img src="images/board_Bruce.jpg" alt="Bruce Medoff" />
    	</div><!--profile_photos-->
    	
    	<div class="profile_bio">
    		<h3>Bruce Medoff</h3>
    		<h4>Board Member</h4>
    		
    		<p> Coming Soon!! 
    		</p>
    	
    	</div><!--profile_bio-->
    	
    	<div class="interesting_facts">
    	<p class="fact_title_odd">Interesting Facts About Bruce</p>
    	
    	<ul>
    		<li>Coming Soon!</li>
    		<li>Coming Soon!</li>
    		<li>Coming Soon!</li>
    	</ul>
    	
    	</div><!--interesting_facts-->
    	
    	<div class="profile_photos">
    		<img src="images/board_Nancy.jpg" alt="Nancy Spalding" />
    	</div><!--profile_photos-->
    	
    	<div class="profile_bio">
    		<h3>Nancy Spradling</h3>
    		<h4>BA in Consumer Food Science</h4>
    		<h4>Advisory Committee Member</h4>
    		
    		<p>While raising her family, Nancy became involved in Parent Teacher Association (PTA), 
    		as many moms of school-aged kids do. Inspired by the broader issues the state PTA takes 
    		on, Nancy became involved on a larger scale. She spent over 17 years in all levels of 
    		PTA, including four years on the California State PTA Board of Managers, actively 
    		participating on a variety of commissions and committees, including finance, bylaws, a
    		nd leadership services.
    		</p>
			<p> Nancy served two years as vice president for health on the California State PTA Board 
			of Directors. During her years on the State Board she was responsible for writing two 
			resolutions that were passed by the delegates at the annual convention.
    		</p>
    		<p>Her interest and passion for children’s health issues led to 10 years as executive 
    		director of the California School Nurses Organization (CSNO). As an advocate for more 
    		school nurses in California schools, she testified before the legislature and worked with 
    		a variety of groups and state agencies. She and her husband live in Sacramento, California.
    		</p>
    	
    	</div><!--profile_bio-->
    	
    	<div class="interesting_facts">
    	<p class="fact_title_even">Interesting Facts About Nancy</p>
    	
    	<ul>
    		<li>After being forced to take a speed reading class in high school, Nancy reads 1,000 words per minute.</li>
    		<li>Her favorite books are romantic suspense, military science fiction, and paranormal—or any combination of the genres.</li>
    		<li>When her sons were in high school, Nancy single-handedly provided the desserts for five years 
    		of senior awards nights—attended by 400 people!</li>
    	</ul>
    	
    	</div><!--interesting_facts-->
    	
    	<div class="profile_photos">
    		<img src="images/Micah.png" alt="Micah Bongberg" />
    	</div><!--profile_photos-->
    	
    	<div class="profile_bio">
    		<h3>Micah Bongberg</h3>
    		<h4>Advisory Committee Member</h4>
    		
    		<p> Micah is the president and chief executive officer of Annuvia, a healthcare 
    		company offering enhanced emergency response training for businesses and community 
    		organizations. Micah received a BA from the University of California at Santa 
    		Barbara in business economics. While an undergrad, he was active in numerous 
    		professional organizations including the Business Economics Association, the 
    		Accounting Association, and the Center for Engineering and Entrepreneurial 
    		Management. These experiences provided Mr. Bongberg with valuable financial, 
    		economic and small business knowledge which he is proud to bring to his role 
    		on The Via Foundation Advisory Committee.
    		</p>
    	
    	</div><!--profile_bio-->
    	
    	<div class="interesting_facts">
    	<p class="fact_title_odd">Interesting Facts About Micah</p>
    	
    	<ul>
    		<li>His favorite television character of all time is Chuck Bass.</li>
			<li>He’s had the exact same meal for lunch every day … for 3 years.</li>
			<li>Much to the entertainment of others, he’s scared of pigeons.</li>
    	</ul>
    	
    	</div><!--interesting_facts-->
    	
    	<div class="profile_photos">
    		<img src="images/board_Scott.jpg" alt="Stephani Scott" />
    	</div><!--profile_photos-->
    	
    	<div class="profile_bio">
    		<h3>Stephani Scott, Executive Director, San Mateo County Community Colleges Foundation</h3>
    		<h4>Advisory Committee Member</h4>
    		
    		<p>A graduate of San Diego State University with a bachelor’s degree in sociology, 
    		Stephani has an established a legacy of developing community and organizational 
    		partnerships. Stephani is currently executive director at San Mateo County Community 
    		Colleges Foundation. Prior to her present role, Stephani was CEO of Sequoia Healthcare 
    		District where she instituted a robust grant program, a nursing education enterprise, 
    		and HeartSafe—the first Public Access Defibrillation program in San Mateo County. 
    		Prior to her role at Sequoia Healthcare District, Stephani was executive director of 
    		Sustainable San Mateo County, a local non-profit organization dedicated to programs 
    		promoting the economic vitality, social equity, and environmental stability of our 
    		local region. Stephani and her family reside in Redwood City, California.
    		</p>
    	
    	</div><!--profile_bio-->
    	
    	<div class="interesting_facts">
    	<p class="fact_title_even">Interesting Facts About Stephani</p>
    	
    	<ul>
    		<li>She became a CEO at age 30.</li>
    		<li>She is addicted to chocolate with no plans to give it up.</li>
    		<li>Stephani enjoys hiking and swimming in an effort to offset her chocolate addiction.</li>
    	</ul>
    	
    	</div><!--interesting_facts-->
    	
    	<div class="profile_photos">
    		<img src="images/board-robert.jpg" alt="Robert W. Taggart" />
    	</div><!--profile_photos-->
    	
    	<div class="profile_bio">
    		<h3>Robert W. Taggart</h3>
    		<h4>Advisory Committee Member</h4>
    		
    		<p> Bob is a Bay Area native and a graduate of the University of California and UC Hastings 
    		College of the Law. He spent the majority of his career with Southern Pacific Transportation 
    		Co., first as a civil trial lawyer and later as vice president of Governmental Relations 
    		and Public Affairs. Following his retirement from Southern Pacific, Bob fulfilled a lifelong 
    		interest in emergency medicine by becoming an EMT and CPR/AED instructor and doing volunteer 
    		work in that field. Deciding to return to work, he joined a national health firm as vice 
    		president of Communications and Public Affairs and works with them in furthering their 
    		mission of providing the highest quality private emergency medical response training with 
    		emphasis on CPR/AED. He is a strong advocate of the importance of public access AED 
    		placement and high-quality AED/CPR training.
    		</p>
    	
    	</div><!--profile_bio-->
    	
    	<div class="interesting_facts">
    	<p class="fact_title_odd">Interesting Facts About Robert</p>
    	
    	<ul>
    		<li>Coming Soon!</li>
			<li>Coming Soon!</li>
			<li>Coming Soon!</li>
    	</ul>
    	
    	</div><!--interesting_facts-->
    	
    	<div class="profile_photos">
    		<img src="images/board_Rodney.jpg" alt="Rodney Norse" />
    	</div><!--profile_photos-->
    
    	<div class="profile_bio">
    		<h3>Rodney Norse</h3>
    		<h4>Advisory Committee Member</h4>
    		
    		<p>Rodney is a consultant to the non-profit community working in the areas of 
    		governance, organizational development, compliance and financial management. 
    		With an MBA from San Francisco State University and a JD from the Mississippi 
    		College School of Law, Rodney has worked as VP for Corporate Development and 
    		Corporate Counsel for a New Orleans based for-profit company and has served as 
    		outside counsel to a variety of other for-profit enterprises while practicing 
    		law in his hometown of Biloxi, MS. Rodney has also worked as an educator, 
    		teaching undergraduate Business Law at the University of Southern Mississippi. 
    		As a survivor of the physical and psychological devastation of Hurricane Katrina 
    		and as a witness to the good works non-profits do for distressed communities, 
    		Rodney has returned to New Orleans in order to share his for-profit experiences 
    		with the Crescent City’s non-profit community and make his personal contribution 
    		to a greater good. 
    		</p>
    	
    	</div><!--profile_bio-->
    	
    	<div class="interesting_facts">
    	<p class="fact_title_even">Interesting Facts About Rodney</p>
    	
    	<ul>
    		<li>He studied grape growing and wine making in France and made wine in Napa Valley.</li>
			<li>He is an avid outdoors person, having backpacked in Alaska, Montana, rocked climbed in California, and snow camped and back-country skied in Idaho.</li>
			<li>His is a big fan of the New Orleans Jazz and Heritage Festival, having been to most of the Festivals in the past 45 years.</li>
    	</ul>
    	
    	</div><!--interesting_facts-->
    	
    	
    </div><!--main_content-->
    
</div><!--main-->


<?php
    DisplayFooter();
?>