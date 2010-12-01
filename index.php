<?php
//Including header
require_once('include/header.php');
echo "<br />";
//Including Menu
require_once('include/menu.php');
echo "<hr />";
//Loading content
if(isset($_GET['page']) && !empty($_GET['page']))
{
    if(file_exists('pages/'.$_GET['page'].'.php'))
    {
        require_once('pages/'.$_GET['page'].'.php');   
    }
    else
    {
        require_once('pages/error.php');
    }
}
else
{
    require_once('pages/home.php');
}
echo "<hr />";
//Including Footer
require_once('include/footer.php');
?>