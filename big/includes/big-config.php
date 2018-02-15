<?php
/* BIG CONFIG */


/**
 * config.php provides a place to store configuration info, 
 * such as your reCAPTCHA site keys
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 1.01 2015/11/17
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @see recaptchalib.php
 * @see util.js 
 * @todo none
 */

//Here are the keys for the server: verachuangdesign.com
$siteKey = "6Ld35EAUAAAAANuwYOLxhJrmEtWTgq9H36ogDljt";
$secretKey = "6Ld35EAUAAAAABpLEMn_HTO6ECp7KC9rxhXy9WW-";

//this helps eliminate PHP date errors
date_default_timezone_set('America/Los Angeles');

// echo basename($_SERVER['PHP_SELF']); /* current name of page*/
// die;

define ('THIS_PAGE', basename($_SERVER['PHP_SELF'])); /*this URL*/




//echo "constant: " . THIS_PAGE;
//die;

switch(THIS_PAGE)
{
    case 'index.php':
        $title = 'Vera Chuang: WEB120 Portal Website';
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;
        
    case 'flexbox.php':
        $title = "Vera Chuang's Flexbox Research";
        $logo = "";
        $PageID = 'Flexbox Research';
    break;
        
    case 'galleries.php':
        $title = "Vera Chuang's Galleries Research";
        $logo = "";
        $PageID = 'Galleries Research';
    break;
        
    case 'map.php':
        $title = "Vera Chuang's Google Maps";
        $logo = "";
        $PageID = 'Google Maps';
    break;
        
    case 'calendar.php':
        $title = "Vera Chuang's Event Calendar";
        $logo = "";
        $PageID = 'Event Calendar';
    break;

    case 'youtube.php':
        $title = "Vera Chuang's Youtube";  //eg wordpress intro video
        $logo = "";
        $PageID = 'Youtube';
    break;

    case 'parallax.php':
        $title = "Vera Chuang's Parallax Research";
        $logo = "";
        $PageID = 'Parallax Research';
    break;

    case 'shoppingcarts.php':
        $title = "Vera Chuang's Shopping Cart Research";
        $logo = "";
        $PageID = 'Shopping Cart Research';
    break;

    case 'siteapp.php':
        $title = "Vera Chuang's Responsive Website v.s. Native Mobil App";
        $logo = "";
        $PageID = 'Responsive Website v.s. Native Mobil App';
    break;    
        
    case 'webcam.php':
        $title = "Vera Chuang's Two examples of web cams";
        $logo = "";
        $PageID = 'Two examples of web cams';
    break;
        
    default:
        $title = THIS_PAGE;
        $logo = '';
        $PageID = '';
    break;    
}

