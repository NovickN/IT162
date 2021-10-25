<?php


/*
portal-config.php

Used to store all of our IT162 configuration information

*/

//prevents data from being sent early
ob_start();

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');


//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

switch(THIS_PAGE){

    case 'index.php':
        $title = "Nicholas IT162 Title Page";
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;

    case 'aia.php': 
        $title = "Nicholas IT162 Final Project";
        $logo = 'fa-universal-access';
        $PageID = 'AIA';
        $logo_color = ' style="color:#00f"';
    break;

    case 'contact.php':
        $title = "Nicholas IT162 Contact Page";
        $logo = 'fa-paper-plane-o';
        $PageID = 'Contact Nick';
        $logo_color = ' style="color:#0f0"';
    break;

    case 'big.php':
        $title = "Nicholas IT162 Big Project";
        $logo = 'fa-paper-plane-o';
        $PageID = 'Big';
    break;

    default:
        $title = THIS_PAGE;
        $logo = 'fa-home' ;
        $PageID = 'Welcome';
}

//place URL & labels in the array here for navigation:
    $nav1['index.php'] = "Welcome";
    $nav1['big.php'] = "Big";
    $nav1['aia.php'] = "AIA";
    $nav1['https://docs.google.com/document/d/1AHl450XCVUffbIiLwdy_5xy2E575wK8j7y-Pj6Muv2E/edit'] = "Flowchart";
    $nav1['fp/template.html'] = "Final Project";
    $nav1['contact.php'] = "Contact Nick";
    
    /*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}

?>

