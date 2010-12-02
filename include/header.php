<?php
        //include config for title
        include('config.inc.php');
        //Strict doctype
        echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">';
        echo '<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">';
        echo '<head>';
        //metatype
        echo '<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />';
        //Keywords for google etc
        echo '<meta name="Keywords" content="" />';
        //Description of the website
        echo '<meta name="Description" content="" />';
        //$overall_title is loaded from config.inc.php, $page = given with the function<?php
        echo "<title>".$overall_title." - ".$page."</title>";
 
 
         echo '</head>';
         echo '<body>';
         echo '<!-- Wrapper div -->';
         echo '<div id="container">';
         echo '<!-- Header -->';
         echo '<div id="header">';

//header
echo "<img src='images/HJVG.png'></img>";
?>