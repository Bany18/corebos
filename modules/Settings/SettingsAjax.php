<?php
/*+********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ********************************************************************************/

if(isset($_REQUEST['file']) && ($_REQUEST['file'] !='')) {
	checkFileAccessForInclusion('modules/Settings/'.vtlib_purify($_REQUEST['file']).'.php');
	require_once('modules/Settings/'.vtlib_purify($_REQUEST['file']).'.php');
}
if(isset($_REQUEST['orgajax']) && ($_REQUEST['orgajax'] !='')) {
	checkFileAccessForInclusion('modules/Settings/CreateSharingRule.php');
	require_once('modules/Settings/CreateSharingRule.php');
}
?>