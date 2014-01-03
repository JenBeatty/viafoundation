<?php
include_once("includes/databasefunctions.php");
include_once("includes/aed_slides.php");

if(!function_exists(LoadPageById))
{
    function LoadPageByID($pageid)
    {
        $result = QuickQuery("SELECT * FROM pages WHERE id={$pageid}");
        if(mysql_num_rows($result) > 0)
            return mysql_result($result, 0, "content");
        else
            return 0;
        
        return 0;
    }
}

if(!function_exists(LoadPage))
{
    /**
     * Loads a page based on the owner site ID and the menu id
     * @param type $owner_site
     * @param type $menu
     * @return int
     */
    function LoadPage($owner_site, $menu)//LoadPage uses the owner_site id and the menu ID to determine which one to show
    {
        $result = QuickQuery("SELECT * FROM pages WHERE owner_site={$owner_site} AND menu={$menu}");
        if(mysql_num_rows($result) > 0)
            return mysql_fetch_assoc($result);
        else
            return 0;
    }
}

if(!function_exists(GetSiteIdByOwner))
{
    function GetSiteIdByOwner($ownerid)
    {
        $result = QuickQuery("SELECT siteid FROM siteowners WHERE ownerid={$ownerid}");
        if(mysql_num_rows($result) > 0)
            return mysql_result($result, 0, "siteid");
        else
            return 0;
    }
}

if(!function_exists(GetSiteId))
{
    function GetSiteId($site)//Get the site ID from the name
    {
        openDatabase();
        $site = str_replace("%20", " ", $site);
        $site = mysql_real_escape_string($site);
        $result = QuickQuery("SELECT id FROM sites WHERE name='{$site}'");
        if(mysql_num_rows($result) > 0)
            return mysql_result($result, 0, "id");
        else
            return 0;
    }
}

if(!function_exists(GetPageList))
{
    function GetPageList($siteid)
    {
        $idlist = array();
        $result = QuickQuery("SELECT * FROM pages WHERE owner_site={$siteid} AND editable=1");
        $num = mysql_num_rows($result);
        if($num > 0)
        {
            for($x = 0; $x < $num; $x++)
            {
                $id = mysql_result($result, $x, "id");
                $title = mysql_result($result, $x, "title");
                $idlist[$x] = array("id" => $id,
                                    "title" => $title);
            }
            return $idlist;
        }
        else
            return 0;
        return 0;
    }
}

if(!function_exists(GetSiteList))
{
    function GetSiteList()
    {
        $result = QuickQuery("SELECT * FROM sites");
        $num = mysql_num_rows($result);
        $sites = array();
        if($num > 0)
        {
            for($x = 0; $x < $num; $x++)
            {
                $id = mysql_result($result, $x, "id");
                $name = mysql_result($result, $x, "name");
                $sites[$x] = array("id" => $id,
                                   "name" => $name);
            }
            return $sites;
        }
        else
            return 0;
    }
}

if(!function_exists(DoesSiteExist))
{
    function DoesSiteExist($sitename)
    {
        openDatabase();
        $sitename = mysql_real_escape_string($sitename);
        $result = QuickQuery("SELECT * FROM sites WHERE name='{$sitename}'");
        if(mysql_num_rows($result) > 0)
            return true;
        else
            return false;
    }
}

if(!function_exists(MakeDirectory))
{
    function MakeDirectory($directoryName)
    {
        $oldumask = umask(0);
        return mkdir("sites/{$directoryName}",0755);
        umask($oldumask);
    }
}

if(!function_exists(CreateFile))
{
    function CreateFile($filename, $content)
    {
//        $oldumask = umask(0);
        $fh = fopen($filename, "w") or die ("Can't Create File!");
        fwrite($fh, $content);
        fclose($fh);
        chmod($filename, 0755);
//        umask($oldumask);
        return true;
    }
}

if(!function_exists(GetMenuInfo))
{
    function GetMenuInfo($type)
    {
        return QuickQuery("SELECT * FROM menu WHERE type={$type}");
    }
}

if(!function_exists(GetKeywords))
{
    function GetKeywords($siteid)
    {
        $result = QuickQuery("SELECT * FROM area_search WHERE siteid={$siteid}");
        if(mysql_num_rows($result) > 0)
            return mysql_result($result, 0, "criteria");
        return "";
    }
}

if(!function_exists(UpdateAreaSearch))
{
    function UpdateAreaSearch($siteid, $criteria)
    {
        $result = QuickQuery("SELECT * FROM area_search WHERE siteid={$siteid}");
        openDatabase();
        $criteria = mysql_real_escape_string($criteria);
        if(mysql_num_rows($result) > 0)
            QuickQuery("UPDATE area_search SET criteria='{$criteria}' WHERE siteid={$siteid}");
        else
            QuickQuery("INSERT INTO area_search (siteid, criteria) VALUES ({$siteid}, '{$criteria}')");
    }
}

if(!function_exists(CreateSiteData))
{
    function CreateSiteData($sitename)
    {
        openDatabase();
        $sitename = mysql_real_escape_string($sitename);
        QuickQuery("INSERT INTO sites (name) VALUES ('{$sitename}')");
        $result = QuickQuery("SELECT MAX(id) AS id FROM sites");
        $id = mysql_result($result, 0, "id");
        QuickQuery("INSERT INTO pages (owner_site, title, keywords, description, menu, content, link, editable) 
                              VALUES ({$id}, 'Contact Us', 'Contact', 'Contact {$sitename}', 16, 'NEED CONTACT CONTENT HERE', 'contact.php', 1)");
        $page = LoadPage(1, 2);
        $content = mysql_real_escape_string($page['content']);
        QuickQuery("INSERT INTO pages (owner_site, title, keywords, description, menu, content, link) 
                              VALUES ({$id}, 'What is SCA?', 'What is SCA', 'A description of what SCA is', 11, '{$content}', 'what_is_sca.php')");
        $slides = GetAEDSlides();
        $page = LoadPage(1, 3);
        $content = $slides . "<br />" . $page['content'];
        $content = mysql_real_escape_string($content);
        QuickQuery("INSERT INTO pages (owner_site, title, keywords, description, menu, content, link) 
                              VALUES ({$id}, 'What is an AED?', 'AED, CPR, VIA', 'Describes what exactly an AED is', 10, '{$content}', 'what_is_an_aed.php')");
        $page = LoadPage(1, 5);
        $content = mysql_real_escape_string($page['content']);
        QuickQuery("INSERT INTO pages (owner_site, title, keywords, description, menu, content, link) 
                              VALUES ({$id}, 'Liability Concerns', 'AED Liability Conerns', 'Describes what liability concerns are associated with having an AED', 12, '{$content}', 'liability_concerns.php')");
        QuickQuery("INSERT INTO pages (owner_site, title, keywords, description, menu, content, link) 
                              VALUES ({$id}, 'Support', 'AED Support', 'The AED Support Page', 14, 'NEED SUPPORT CONTENT HERE', 'support.php')");
        QuickQuery("INSERT INTO pages (owner_site, title, keywords, description, menu, content, link, editable) 
                              VALUES ({$id}, 'Personal', 'Personal Story', '{$sitename} Personal Story', 15, 'NEED PERSONAL CONTENT HERE', 'personal.php', 1)");
        QuickQuery("INSERT INTO pages (owner_site, title, keywords, description, menu, content, link, editable) 
                              VALUES ({$id}, 'Home', '{$sitename} Homepage', 'The AED Support Page', 17, 'NEED HOMEPAGE CONTENT HERE', 'home.php', 1)");
        return $id;
    }
}

if(!function_exists(ReturnAfterMenuType))
{
    function ReturnAfterMenuType($menuID)
    {
        switch($menuID)
        {
            case 10:
            case 11:
            case 12:
            {
                return "nosidebar";
            } break;
            case 14:
            {
                return "sidebar";
            }
            default:
                return "aftermenu";
        }
        return "aftermenu";
    }
}

if(!function_exists(CreateTemplates))
{
    function CreateTemplates($sitename, $type="main")//Returns the site ID if everything is successful
    {
        $result = QuickQuery("SELECT content FROM templates WHERE title='beforemenu'");
        $beforemenu = mysql_result($result, 0, "content");
        
/*        $result = QuickQuery("SELECT content FROM templates WHERE title='aftermenu'");
        $aftermenu = mysql_result($result, 0, "content");*/
        
        $siteID = CreateSiteData($sitename);
        $result = GetMenuInfo(2);//Get all menu items from type 2 (which is a sub-site)
        
        if(mysql_num_rows($result) > 0)
        {
            for($x = 0; $x < mysql_num_rows($result); $x++)
            {
                $link = "sites/{$sitename}/";
                $menu = "";
                $menuID = mysql_result($result, $x, "id");
                $r = QuickQuery("SELECT link FROM pages WHERE menu={$menuID} AND owner_site={$siteID}");
                if(mysql_num_rows($r) > 0)
                    $link .= mysql_result($r, 0, "link");
                else
                {
                    echo "Cannot find site link.  Site ID searched was {$siteID}, menu was {$menuID}";
                    exit;
                }
                $aftermenutype = ReturnAfterMenuType($menuID);
                $r = QuickQuery("SELECT content FROM templates WHERE title='{$aftermenutype}'");
                $aftermenu = mysql_result($r, 0, "content");
                
                $content = $beforemenu . "\n\$menuID = {$menuID};\n" . $aftermenu;
                if(!CreateFile($link, $content))
                {
                    echo "Could not create file {$link}";
                    exit;
                }
            }
            $r = QuickQuery("SELECT content FROM templates WHERE title='search'");
            $content = mysql_result($r, 0, "content");
            if(!CreateFile("sites/{$sitename}/search.php", $content))
            {
                echo "Could not create file search.php";
                exit;
            }
        }
        return $siteID;
    }
}

if(!function_exists(UpdatePage))
{
    function UpdatePage($pageid, $pagecontent)
    {
        openDatabase();
        $content = stripslashes($pagecontent);
        //$content = mysql_real_escape_string($content);
        QuickQuery("UPDATE pages SET content='{$content}' WHERE id={$pageid}");
        switch($pageid)
        {
            case 4:{//What is an AED
                $tmp = GetAEDSlides();
                $tmp .= "<br />" . $content;
                $tmp = mysql_real_escape_string($tmp);
                QuickQuery("UPDATE pages SET content='{$tmp}' WHERE menu=10");
            } break;
            case 3:{//What is SCA
                $content = mysql_real_escape_string($content);
                QuickQuery("UPDATE pages SET content='{$content}' WHERE menu=11");
            } break;
            case 6:{//Liability Concerns
                $content = mysql_real_escape_string($content);
                QuickQuery("UPDATE pages SET content='{$content}' WHERE menu=12");
            } break;
        }
    }
}

if(!function_exists(GetProgramSearchResults))//Get the results from when people do a via_programs search
{
    function GetProgramSearchResults($siteid)
    {
        $result = QuickQuery("SELECT * FROM sites WHERE id={$siteid}");
        if(mysql_num_rows($result) > 0)
        {
            $name = mysql_result($result, 0, "name");
            $description = mysql_result($result, 0, "description");
            $info = array("name" => $name, 
                          "description" => $description);
            return $info;
        }
        return 0;
    }
}

if(!function_exists(SearchSite))//Get the search results for a site search
{
    function SearchSite($siteid, $search)
    {
        openDatabase();
        $search = mysql_real_escape_string($search);
        $query = "SELECT id, link, SUBSTRING(content,LOCATE('{$search}',content),100) AS str FROM pages WHERE owner_site={$siteid} AND content REGEXP '{$search}'";
        $result = QuickQuery($query);
        return $result;
    }
}

if(!function_exists(GetPageTitleFromId))
{
    function GetPageTitleFromId($pageid)
    {
        $query = "SELECT title FROM pages WHERE id={$pageid}";
        $result = QuickQuery($query);
        if(mysql_num_rows($result) > 0)
            return mysql_result($result, 0, "title");
        else
            return null;
    }
}

if(!function_exists(GetGoalAmount))
{
    function GetGoalAmount($siteid)
    {
        $query = "SELECT goal_amount FROM paypal WHERE siteid={$siteid}";
        $result = QuickQuery($query);
        if(mysql_num_rows($result) > 0)
            return mysql_result($result, 0, "goal_amount");
        else
            return 0;
    }
}

if(!function_exists(GetCurrentAmount))
{
    function GetCurrentAmount($siteid)
    {
        $query = "SELECT current_amount FROM paypal WHERE siteid={$siteid}";
        $result = QuickQuery($query);
        if(mysql_num_rows($result) > 0)
            return mysql_result($result, 0, "current_amount");
        else
            return 0;
    }
}

if(!function_exists(GetPaypalCode))
{
    function GetPaypalCode($siteid)
    {
        $query = "SELECT paypal_code FROM paypal WHERE siteid={$siteid}";
        $result = QuickQuery($query);
        if(mysql_num_rows($result) > 0)
            return mysql_result($result, 0, "paypal_code");
        else
            return null;
    }
}

if(!function_exists(SavePaypal))
{
    function SavePaypal($siteid, $goal, $current, $code)
    {
        openDatabase();
        $code = mysql_real_escape_string($code);
        $code = str_replace("\\r","\r",str_replace("\\n","\n",$code));
        $code = stripslashes($code);
        $query = "REPLACE INTO paypal (siteid, paypal_code, goal_amount, current_amount)
                                     VALUES ({$siteid}, '{$code}', {$goal}, {$current})";
        QuickQuery($query);
    }
}

if(!function_exists(GetPayPalInfo))
{
    function GetPayPalInfo($siteid)
    {
        openDatabase();
        $query = "SELECT * FROM paypal WHERE siteid = {$siteid}";
        $result = QuickQuery($query);
        if(mysql_num_rows($result) <= 0)
            return 0;
        $code = mysql_result($result, 0, "paypal_code");
        $goal = mysql_result($result, 0, "goal_amount");
        $current = mysql_result($result, 0, "current_amount");
        
        $paypal = array("code"=>$code,
                        "goal"=>$goal,
                        "current"=>$current);
        return $paypal;
    }
}

if(!function_exists(ShowDonations))
{
    function ShowDonations($siteid, $goal, $raised, $code)
    {
        if($siteid == 1)
            $loc = "";
        else
            $loc = "../../";
        
        
        if($goal)
        {
    ?>
        <script src="<?php echo $loc; ?>javascript/libraries/RGraph.common.core.js" ></script>
        <script src="<?php echo $loc; ?>javascript/libraries/RGraph.common.effects.js" ></script>
        <script src="<?php echo $loc; ?>javascript/libraries/RGraph.thermometer.js" ></script>

    <script>
        window.onload = function ()
        {
            // Create the Thermometer chart. The arguments are: the canvas ID, the minimum,
            // the maximum and the indicated value.
                var thermometer = new RGraph.Thermometer('myCanvas', 0,<?php echo $goal; ?>, <?php echo $raised; ?>);

                var grad = thermometer.context.createLinearGradient(15,0,85,0);
                grad.addColorStop(0,'green');
                grad.addColorStop(0.5,'#9f9');
                grad.addColorStop(1,'red');

                thermometer.Set('chart.colors', [grad]);
                thermometer.Set('chart.title.side', 'Amount Raised Towards Our Goal');
                thermometer.Set('chart.scale.visible', true);
                thermometer.Set('chart.scale.decimals', 0);
                thermometer.Set('chart.gutter.right', 25);
                thermometer.Draw();        
        }
    </script>
    <?php } ?>
        <div id="sidebar">
            <canvas id="myCanvas" width="110" height="350">[No canvas support]</canvas> 
            <?php echo $code; ?>
        </div><!--sidebar-->
<?php 
    }
}
?>
