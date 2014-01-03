<?php
    include_once("includes/header.php");
    include_once("includes/footer.php");
    include_once("includes/databasefunctions.php");
    include_once("includes/commonfunctions.php");

    $request_url=$_SERVER['REQUEST_URI'];
    $site = "main";
    
    $siteID = GetSiteId($site);
    
//    $page = LoadPage($siteID, 4);
//    if($page != "0")
        DisplayHeader($page["title"], $page["keywords"], $page["description"], 1, 0);//Don't highlight any menu items
?>
    <div id="nosidebar">
<?php
    if($_POST["search"])
    {
        $search = $_POST["search"];
        $result = SearchSite($siteID, $search);
        $num = mysql_num_rows($result);
        if($num > 0)
        {
            ?><p>The following pages match the results of your keyword(s): <span style="color:red;"> <?php echo $search; ?></span></p><?php
            for($x = 0; $x < $num; $x++)
            {
                $pageid = mysql_result($result, $x, "id");
                $str = mysql_result($result, $x, "str");
                $link = mysql_result($result, $x, "link");
                ?>
                <div class="search_result" style="display:block; float:left; width:100%; margin:10px 0px; padding:10px 0px;">
                    <a href="<?php echo $link; ?>"><?php echo GetPageTitleFromId($pageid); ?></a>
                </div><!--search_result-->
                <?php
            }
        }
        else {
            echo "NO RESULTS";
        }
    }
?>
    </div><!--main-->
<?php
    DisplayFooter();
?>