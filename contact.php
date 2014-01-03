<?php
    include_once("includes/header.php");
    include_once("includes/footer.php");
    include_once("includes/databasefunctions.php");
    include_once("includes/commonfunctions.php");

    $site = "main";
    $siteID = GetSiteId($site);
    
    $page = LoadPage($siteID, 1);
    if($page != "0")
        DisplayHeader($page["title"], $page["keywords"], $page["description"], 1, 6, "CONTACT");
?>

<div id="main_content">
            
    <div id="main_left_contact">

        <p><strong>Main Office Information</strong></p>
        
        <p><em>Contact us to volunteer or find out more<br /> information about our programs.</em></p>

        <br />
        
        <div id="contact_info">
        <img src="images/contact_address.jpg" alt="Via Address" />
        <p class="contact_info_text" style="margin-top: -3px;">1725 Clay Street, Suite 100, San Francisco, CA 94109</p>
        
        <img src="images/contact_email.jpg" alt="Email the Via Team" />
        <p class="contact_info_text" style="margin-top: -8px;"><a href="mailto:info@theviafoundation.org" title="email The Via Foundation">info@theviafoundation.org</a></p>
        
        <img src="images/contact_phone.jpg" alt="Call The Via Offices" />
        <p class="contact_info_text">800-284-0125</p>
        
        </div><!--contact_info-->
        
        <div id="social-contact">
        	<a href="3" title="Find The Via Foundation on Facebook" /><img style="outline:none; border: 0;" src="images/contact_facebook.jpg" alt="Reach Start A Heart on Facebook" /></a>
        	<a href="3" title="Find The Via Foundation on Twitter" /><img style="outline:none; border: 0;" src="images/contact_twitter.jpg" alt="Reach Start A Heart on Twitter" /></a>
        </div>
				
		<a href="#" title="Locate the Via Offices"><img style="outline:none; border: 0;" src="images/contact_map.gif" alt="Map depicting the Via offices" /></a>
		
		<br />
		<br />
		
		<ul>
			<li>Does your school district, community, or organization want AEDs and CPR training?</li>
			<li>Are you unsure of how to properly implement a successful public access defibrillation program?</li>
			<li>Do you lack the funds to buy AEDs and hold training sessions?</li>
			<li>Are you worried about maintaining your AEDs and keeping up to date with CPR Training?</li>
		</ul>
		
		<br />
		
		<p><em>If the answer to any of these questions is yes, The Via Foundation may be able to help you. 
		Fill out our online form and find out how.</em></p>

    </div><!--main_left_contact-->
    
    <div id="main_right_contact">

        <p><strong>Contact Us</strong></p>
                
        <form id="contact">

		<fieldset class="fieldset_style"><!--contact-info-->
			<div>
				<label>
					<input id="given-name" type="text" autofocus="" required="" placeholder="First Name" name="given-name" />
				</label>
			</div>
				
			<div>	
				<label>
					<input id="last-name" type="text" autofocus="" required="" placeholder="Last Name" name="last-name" />
				</label>
			</div>
				
			<div>	
				<label>
					<input id="tel" type="text" autofocus="" placeholder="Best contact phone number" name="phone" />
				</label>
			</div>
				
			<div>
				<label>
					<input id="email-address" type="email" autofocus="" required="" placeholder="Email Address" name="email-address" />
				</label>
			</div>
				
			<div>	
				<label>
					<input id="city-state-zip" type="text" autofocus="" placeholder="City, State, Zip" name="city-state-zip" />
				</label>
			</div>
		</fieldset><!--contact-info-->
		
		<fieldset class="fieldset_style"><!--program-of-interest-->
			<legend><strong>Program Interested In:</strong></legend>
			<fieldset class="fieldset_style"><!--program-choices-->
				<div class="program-choices">
					<input id="campus-heart-program" type="radio" name="program-choice" value="campus heart program" />
					<label for="campus-heart-program">AEDs in schools</label>
					<br />
					<input id="queens-heart-safe" type="radio" name="program-choice" value="queens heart safe program" />
					<label for="community-with-heart">AEDs in a
					business</label>
					<br />
					<input id="community-with-heart" type="radio" name="program-choice" value="community with heart program" />
					<label for="community-with-heart">AEDs in the
					commnunity</label>
					<br />
					<input id="something-else" type="radio" name="program-choice" value="i am contacting you regarding something else" />
					<label for="something-else">I am contacting you regarding something else</label>
					<br />
				</div>
			</fieldset><!--program-choices-->
		</fieldset><!--program-of-interest-->
		
		<fieldset class="fieldset_style"><!--membership-status-->
			<legend><strong>I Am A:</strong></legend>
			<fieldset class="fieldset_style"><!--membership-status-choices-->
				<div class="membership-status">
					<input id="pta" type="checkbox" name="member-type" value="pta member" />
					<label for="pta">PTA Member</label>
					<br />
					<input id="ems" type="checkbox" name="member-type" value="ems member" />
					<label for="ems">EMS Member</label>
					<br />
					<input id="fire-department" type="checkbox" name="member-type" value="rotary member" />
					<label for="fire-department">Rotary Member</label>
					<br />
					<input id="hospital" type="checkbox" name="member-type" value="fire department personnel" />
					<label for="hospital">Fire Department Personnel</label>
					<br />
					<input id="parent" type="checkbox" name="member-type" value="concerned parent" />
					<label for="rotary">Concerned Parent</label>
					<br />
					<input id="rotary" type="checkbox" name="member-type" value="hospital personnel" />
					<label for="rotary">Hospital Personnel</label>
					<br />
					<input id="other-membership" type="checkbox" name="member-type" value="other" />
					<label for="other">Other</label>
				</div>
			</fieldset><!--membership-status-choices-->
		</fieldset><!--membership-status-->
		
		<fieldset class="fieldset_style">
			<legend><strong>Message:</strong></legend>		
				<div>
					<textarea name="message" cols="80" rows="20" placeholder="Type your message to us here!"></textarea>
				</div>
		</fieldset>
		
		<fieldset class="fieldset_style"><!--contact-submit-->
			<div>
				<button name="submit" type="submit" value="send message" id="contact_submit">Send Message</button>
			</div>
		</fieldset><!--contact-submit-->
		
		<p id="clear_all_fields"> or, <input type="reset" value="clear all fields" /></p>
				
		</form>	
			        
    </div><!--main_right_contact-->
    
</div><!--main_content-->

<?php
    DisplayFooter();
?>