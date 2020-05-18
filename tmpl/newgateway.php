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
$ctx = hash_init('md5');
hash_update($ctx, $username);           // The certificate
hash_update($ctx, $first);           // The first name 
hash_update($ctx, $last);           // The last name
hash_update($ctx, $email);		// The email 
$hash = hash_final($ctx);?>
<form name=theResponse method="POST" action=<?php echo "$url" ?> >  <!-- "https://www.sailangle.com/usps-signup" -->
<input type='hidden' name='Certificate' value='<?php echo $username;?>'>
<input type='hidden' name='HASH' value='<?php echo $hash;?>'>
</form>
<script> document.theResponse.submit();</script> 


