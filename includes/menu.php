<?php include "databasefunctions.php" ?>
<?php

function GetMenuItems($type, $parent_id)
{
    $result = QuickQuery("SELECT * FROM menu
                          WHERE type = {$type}
                          AND parent_id = {$parent_id}");
    return $result;
}

function DisplayMenu($type, $menuNumber, $siteid)
{
    $result = QuickQuery("SELECT * FROM menu 
                          LEFT JOIN pages ON pages.menu = menu.id AND pages.owner_site = {$siteid}
                          WHERE type='{$type}' AND parent_id IS null
                          ORDER BY position");//Get the parent menu items
    $num = mysql_num_rows($result);
    $menu = array();
    for($x = 0; $x < $num; $x++)
    {   
        $id = mysql_result($result, $x, "id");
        $name = mysql_result($result, $x, "name");
        $link = mysql_result($result, $x, "link");
        $position = mysql_result($result, $x, "position");
        $menu[$x] = array("id" => $id,
                          "name" => $name,
                          "link" => $link,
                          "position" => $position);
        $r = QuickQuery("SELECT * FROM menu 
                     LEFT JOIN pages ON pages.menu = menu.id 
                     WHERE type='{$type}' AND parent_id = {$id}");//Get the child menu items
        $child_num = mysql_num_rows($r);
        for($y = 0; $y < $child_num; $y++)
        {
            $id = mysql_result($r, $y, "id");
            $child_name = mysql_result($r, $y, "name");
            $link = mysql_result($r, $y, "link");
            $position = mysql_result($r, $y, "position");
            $menu[$x]["child"][$y] = array("id" => $id,
                                           "name" => $child_name,
                                           "link" => $link,
                                           "position" => $position);
        }
    }
?>
<div id="menu">
    <ul>
<?php
    $active = "";
    for($x = 0; $x < sizeof($menu); $x++)
    {
        if($menu[$x]["id"] == $menuNumber)
            $active = "class='active'";
        echo "<li {$active}><a href=\"{$menu[$x]["link"]}\" {$active}>" . $menu[$x]["name"] . "</a>";
        if(sizeof($menu[$x]["child"]) > 0)
            echo "<ul>";
        for($y = 0; $y < sizeof($menu[$x]["child"]); $y++)
        {
            if($menu[$x]["child"][$y]["id"] == $menuNumber)
                $active = "class='active'";//PROBLEM IS SOMEWHERE IN THIS SECTION
            echo "<li {$active}><a href=\"{$menu[$x]["child"][$y]["link"]}\">" . $menu[$x]["child"][$y]["name"] . "</a></li>\n";
        }
        if(sizeof($menu[$x]["child"]) > 0)
            echo "</ul>";
        echo "</li>\n";
        $active = "";
    }
?>    
    </ul>
</div><!--menu-->

<?php 
}?>

<!--<div id="menu">
    <ul>
        <li><a href="about.php">About Via</a>
            <ul>
                <li><a href="staff.php">Staff</a></li>
                <li><a href="board.php">Board</a></li>
            </ul>
        </li>
        <li><a href="what_is_sca.php">What is SCA?</a></li>
        <li><a href="what_is_an_aed.php">What is an AED?</a></li>
        <li><a href="via_programs.php">Is there a Via Program<br/>in your area?</a></li>
        <li><a href="liability_concerns.php">Liability Concerns</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="what_is_a_via_program.php">What is a Via Program?</a></li>
    </ul>
</div><!--menu-->
