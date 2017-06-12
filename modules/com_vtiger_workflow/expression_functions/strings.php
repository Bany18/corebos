<?php
/*************************************************************************************************
 * Copyright 2015 JPL TSolucio, S.L. -- This file is a part of TSOLUCIO coreBOS Customizations.
 * Licensed under the vtiger CRM Public License Version 1.1 (the "License"); you may not use this
 * file except in compliance with the License. You can redistribute it and/or modify it
 * under the terms of the License. JPL TSolucio, S.L. reserves all rights not expressly
 * granted by the License. coreBOS distributed by JPL TSolucio S.L. is distributed in
 * the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied
 * warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. Unless required by
 * applicable law or agreed to in writing, software distributed under the License is
 * distributed on an "AS IS" BASIS, WITHOUT ANY WARRANTIES OR CONDITIONS OF ANY KIND,
 * either express or implied. See the License for the specific language governing
 * permissions and limitations under the License. You may obtain a copy of the License
 * at <http://corebos.org/documentation/doku.php?id=en:devel:vpl11>
 *************************************************************************************************/

function __vt_concat($arr){
	return implode($arr);
}

function __vt_substring($arr) {
	if (count($arr)<2 or count($arr)>3) return $arr[0];
	if (count($arr)==2) {
		return substr($arr[0],$arr[1]);
	} else {
		return substr($arr[0],$arr[1],$arr[2]);
	}
}

function __vt_uppercase($arr) {
	if (count($arr)==0) {
		return '';
	} else {
		return strtoupper($arr[0]);
	}
}

function __vt_lowercase($arr) {
	if (count($arr)==0) {
		return '';
	} else {
		return strtolower($arr[0]);
	}
}

function __vt_uppercasefirst($arr) {
	if (count($arr)==0) {
		return '';
	} else {
		return ucfirst($arr[0]);
	}
}

function __vt_uppercasewords($arr) {
	if (count($arr)==0) {
		return '';
	} else {
		return ucwords($arr[0]);
	}
}

?>