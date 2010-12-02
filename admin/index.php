<?php
//start session
session_start();
//admin part

//process login part

//end of login part

if($_SESSION['admin_login'] == 'yes')
{
    //load the normal admin part
}
else
{
    //show the login part
}
?>