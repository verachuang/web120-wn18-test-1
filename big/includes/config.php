<?php
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

// this array works with the makelinks function below to write your navigation
$nav1['index.php'] = 'Welcome';
$nav1['big/index.php'] = 'Big';
$nav1['aia.php'] = 'AIA';
$nav1['ux.php'] = 'Google Doc (UX)';
$nav1['fp/index.php'] = 'Final Project';
$nav1['contactme.php'] = 'Contact Sara';

// echo basename($_SERVER['PHP_SELF']); /* current name of page*/
// die;

define ('THIS_PAGE', basename($_SERVER['PHP_SELF'])); /*this URL*/

//echo "constant: " . THIS_PAGE;
//die;

switch(THIS_PAGE)
{
    case 'index.php':
        $title = 'Vera: WEB120 Portal Website';
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;
        
    case 'aia.php':
        $title = 'Final Project: Audience, Issues and Approach';
        $logo = 'fa-users';
        $PageID = 'Final Project: Audience, Issues and Approach';
    break;
        
    case 'ux.php':
        $title = 'Final Project: Flowchart and Layout';
        $logo = 'fa-file-text-o';
        $PageID = 'Final Project: Flowchart and Layout';
    break;

    case 'contactme.php':
        $title = 'Contact Vera';
        $logo = 'fa-pencil-square-o';
        $PageID = 'Contact Vera';
    break;        
        
    default:
        $title = THIS_PAGE;
        $logo = '';
        $PageID = '';
}


function makeLinks($nav)
{
    $myReturn = '';
    foreach($nav as $url => $text)
    {
        if(THIS_PAGE == $url)
        {//add class
           $myReturn .= '<li><a href="' . $url . '" class="selected">' . $text . '</a></li>';            
        }else{//no class
           $myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'; 
  
        }
        
    }
    
    return $myReturn;
}