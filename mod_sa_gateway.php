<?php
/**
* @package Sail Angle Gateway
* @author Joesph P. Gibson
* @website www.joesboat.org
* @email joe@joesboat.org
* @copyright Copyright (C) 2018 Joseph P. Gibson. All rights reserved.
* @license GNU General Public License version 2 or later; see LICENSE.txt
**/

// no direct access
defined('_JEXEC') or die('Restricted access');
require(JPATH_LIBRARIES."/usps/dbUSPSVHQAB.php");
$vhqab = new USPSdbVHQAB();
require_once(dirname(__FILE__).DS.'helper.php');
$url = "https://www.sailangle.com/usps-signup";
$user = JFactory::getUser();
$cert = $username = $user->username;
$member = $vhqab->getMember($username);
$first = $member['first'];
$last = $member['last'];
$email = $member['email'];
$pwd = $member['pin'];
$sqd = $member['sqdcode'];
$nickname = $member['nick'];

require(JModuleHelper::getLayoutPath('mod_sa_gateway',"oldgateway"));
