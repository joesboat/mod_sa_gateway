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
hash_update($ctx,$pwd);
hash_update($ctx, $cert);
hash_update($ctx, $first);
hash_update($ctx, $last);
$hash = hash_final($ctx);
?>
<form name=theResponse method="POST" action=<?php echo "$url" ?> >  <!-- "https://www.sailangle.com/usps-signup" -->
<input type=hidden name=txtUserName      value=<?php echo $cert ?>            >
<input type=hidden name=txtPassword      value=<?php echo $pwd ?>            >
<input type=hidden name=txtFirstName value=<?php echo $first ?>         >
<input type=hidden name=txtLastName value=<?php echo $last ?>             >
<input type=hidden name=txtEmail value=<?php echo $email ?>  >
<input type=hidden name=txtAccountNumber value=<?php echo $sqd ?>  >
<input type= hidden name=txtNickName value=<?php echo $nickname ?>               >
<input type = hidden name=txtKey value = <?php echo "$hash" ?>  >
</form>
<script> document.theResponse.submit();</script> 


