<?php
    include_once("includes/header.php");
    include_once("includes/footer.php");
    include_once("includes/databasefunctions.php");
    include_once("includes/commonfunctions.php");

    $site = "main";
    $siteID = GetSiteId($site);
    
    $page = LoadPage($siteID, 4);
    if($page != "0")
        DisplayHeader($page["title"], $page["keywords"], $page["description"], 1, 4);
?>
    <div id="nosidebar">
<?php
    echo $page["content"];
?>
<?php
    if($_POST["area_search"])
    {
        $criteria = $_POST["area_search"];
        openDatabase();
        $criteria = mysql_real_escape_string($criteria);
        
        $result = QuickQuery("SELECT * FROM area_search WHERE criteria REGEXP '{$criteria}'");
        $sites = array();
        if(mysql_num_rows($result) > 0)
        {
            while($row = mysql_fetch_array($result))
                $sites[] = GetProgramSearchResults($row["siteid"]);
        }
        if(sizeof($sites) > 0)
        {?>
        <h2>The following site(s) are part of the via foundation</h2>
        <?php 
            foreach($sites AS $k => $v)
            {?>
                <a href="sites/<?php echo $v["name"]; ?>/home.php"><?php echo $v["name"]; ?></a><br />
            <?php
                echo $v["description"] . "<br /><br />";
            }
        }
    }
?>
    </div><!--main-->
<?php
    DisplayFooter();
?>