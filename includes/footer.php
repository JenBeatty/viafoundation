<?php
function DisplayFooter(){ 
    global $directory, $images, $javascript, $isHome;
    ?>
<div id="footer">
    <div id="footer_logo">
        <img src="<?php echo $images; ?>/LogoTransparent2.png" />
    </div>
    <div id="footer_right_content">
        <p id="footer_paragraph" style="float: right; margin-top: 10px;"><span style="font-size: 30px; letter-spacing: 2px;">The <span style="color: #185e8b;">V</span><span style="color: #66cc33;">I</span><span style="color: #66cc99;">A</span> Foundation</span> <br />
        <span style="font-size: 14px; line-height: 160%;">1725 Clay Street | Suite 100 | San Francisco, California 94109 <br />
        Office: 800-284-0125 | Fax: 415-226-0675 | www.theviafoundation.org</span>
        </p>
    </div><!--footer_right_content-->
        <div id="footer_bottom_content">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="about-what-we-do.php">About</a></li>
                <li><a href="learn-about-sca.php">Learn</a></li>
                <li><a href="contact.php">Donate</a></li>
                <li><a href="via-programs.php">Programs</a></li>
                <li><a href="donate.php">Contact</a></li>
                <?php if($isHome) { ?> <li style="display: none;"><input type="text" name="search" class="defaultText" id="search" title="Enter Search Term" /><img src="images/magGlass.gif" /></li> <?php } ?>
            </ul>
        </div><!--footer_bottom_content-->
    <div id="footer_copyright">
        <p>COPYRIGHT 2014 THE VIA FOUNDATION. ALL RIGHTS RESERVED.</p>
    </div><!--footer_copyright--<>
</div><!--footer-->
</body>
</div><!--content-->
</div><!--page-wrapper-->
</html>

<?php } ?>
