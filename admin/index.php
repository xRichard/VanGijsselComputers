<?php
//start session
session_start();
//Include functions.inc.php - admin functions only
require_once('include/functions.inc.php');
db_connect();
exit();
if($_GET['page'] == 'logout')
{
    $_SESSION['admin_login'] = 'no';
}

//admin part
print_r($_SESSION);
//process login part
if($_SESSION['admin_login'] != 'yes')
{
    
    if(!isset($_POST['login_btn']) || empty($_POST['login_name']))
    {
    echo "<form id='login_form' name='login_form' method='POST' action='".$_SERVER['PHP_SELF']."'>";
    echo "<input type='text' name='login_name' id='login_name' /><br />";
    echo "<input type='password' name='login_password' id='login_password' /><br />";
    echo "<input type='submit' name='login_btn' id='login_btn' value='Login'/>";
    echo "</form>";
    }
    else
    {
        
        if($_POST['login_name'] == 'test' && $_POST['login_password'] == 'test')
        {
            $_SESSION['admin_login'] = 'yes';
        }
        else
        {
            echo "Wrong login name and/or password.";
        }
    }
    
}
//end of login part

if($_SESSION['admin_login'] == 'yes')
{
echo "test";
}
?>