<?php
//admin functions

//Database connection
function db_connect()
{
    include('../include/config.inc.php');
    $con = mysql_connect($dbserver.':'.$dbport, $dbuser, $dbpass);
    if(!$con)
    {
        //means connection ain't working ;(
        die('Could not connect: ' . mysql_error());
    }
    //connection is working
    else
    {
        
        $db_selected = mysql_select_db($dbdatabase, $con);
        //check if DB exists
        if(!$db_selected)
        {
            die('Can\'t use '.$dbdatabase.' : '. mysql_error());
        }
    }
    
}
?>