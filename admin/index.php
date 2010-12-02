<?php
//start session
session_start();
//Include functions.inc.php - admin functions only
require_once('include/functions.inc.php');
db_connect();
if($_GET['page'] == 'logout')
{
    $_SESSION['admin_login'] = 'no';
}

//admin part

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
        $username = mysql_real_escape_string($_POST['login_name']);
        $password = md5(mysql_real_escape_string($_POST['login_password']));
        
        $query_login = mysql_query('SELECT * FROM user WHERE user_name = "'.$username.'" AND user_pass = "'.$password.'";');
        $check = mysql_num_rows($query_login);
        if($check > 0)
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