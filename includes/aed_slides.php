<?php
include_once("includes/globals.php");
function GetAEDSlides()
{
    global $javascript, $images;
$tmp = "
<script>
            $(function(){
                    // Set starting slide to 1
                    var startSlide = 1;
                    // Get slide number if it exists
                    if (window.location.hash) {
                            startSlide = window.location.hash.replace('#','');
                    }
                    // Initialize Slides
                    $('#slides').slides({
                            preload: true,
                            preloadImage: '',
                            generatePagination: false,
                            play: 4000,
                            pause: 3500,
                            hoverPause: true,
                            // Get the starting slide
                            start: startSlide
                    });
            });
    </script><script type=\"text/javascript\" src=\"{$javascript}/slides.min.jquery.js\"></script>
<div id=\"nosidebar\">
	<div id=\"slides\">
		<div class=\"slides_container\" style=\"width:300px; height:250px;\">
			<div class=\"slide\">
				<img alt=\"\" height=\"250\" src=\"{$images}/common/G3open_s.jpg\" width=\"300\" /></div>
			<div class=\"slide\">
				<a href=\"http://dev7studios.com\"><img alt=\"\" height=\"250\" src=\"{$images}/common/aed-plus-in-school.jpg\" title=\"An AED in a school\" width=\"300\" /></a></div>
			<div class=\"slide\">
				<img alt=\"\" height=\"250\" src=\"{$images}/common/CR Plus Open.jpg\" width=\"300\" /></div>
			<div class=\"slide\">
				<img alt=\"\" height=\"250\" src=\"{$images}/common/CS AED - Copy.jpg\" width=\"300\" /></div>
		</div>
	</div>
	<!--slides-->";
return $tmp;
}
?>