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
?>
<form name=theResponse method="POST" action=<?php echo "$url" ?> >  <!-- "https://www.sailangle.com/usps-signup" -->
<input type='hidden' name='Certificate' value='<?php echo $username;?>'>
<input type='hidden' name='HASH' value='<?php echo $hash;?>'>
</form>
<script> document.theResponse.submit();</script> 


