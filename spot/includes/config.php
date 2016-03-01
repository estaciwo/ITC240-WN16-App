<?php
/*
config.php

Provides a place to put all configuration info for our app 


*/

include 'credentials.php';

define('DEBUG',true); #we want to see all errors

//THIS_PAGE is the name of the current page
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav1['index.php'] = "Home";
$nav1['template.php'] = "Template";
$nav1['contact.php'] = "Contact Us";
$nav1['disclaimer.php'] = "Disclaimer";
//template, contact us, disclaimer 
// THIS_PAGE;
//die;
ob_start(); //prevents header errors 

switch(THIS_PAGE)
{
    case "index.php":
        $title = "Home page title";
        $pageID = "Home Page";
        break;
        
    case "template.php":
        $title = "Template page title";
        $pageID = "Template Page";
        break;
        
    default: 
        $title = THIS_PAGE;
        $pageID = "";
        
}

function myerror($myFile, $myLine, $errorMsg)
{
    if(defined('DEBUG') && DEBUG)
    {
       echo "Error in file: <b>" . $myFile . "</b> on line: <b>" . $myLine . "</b><br />";
       echo "Error Message: <b>" . $errorMsg . "</b><br />";
       die();
    }else{
		echo "I'm sorry, we have encountered an error.  Would you like to buy some socks?";
		die();
    }
}