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
        if(!empty($_POST['login_name']) )
        {
            $username = mysql_real_escape_string($_POST['login_name']);
        }
        else
        {
            $error = 'No username entered <br />';
        }
        if(!empty($_POST['login_password']))
        {
            $password = md5(mysql_real_escape_string($_POST['login_password']));
        }
        else
        {
            $error .= 'No password entered <br />';
        }
            if(isset($error) || !empty($error))
            {
                echo $error;
            }
            else
            {
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
    
}
//end of login part

if($_SESSION['admin_login'] == 'yes')
{
//admin part
if(isset($_GET['page']) || !empty($_GET['page']))
   {
        //Check too see if file exists
        if(file_exists('pages/'.$_GET['page'].'.php'))
        {
            require_once('pages/'.$_GET['page'].'.php');
        }
        //If file doesn't exist, then just show the home part of the admin menu.
        else
        {
            require_once('pages/home.php');
        }
   }





}
?>