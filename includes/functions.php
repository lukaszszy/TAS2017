<?php
	function mysql_escape_mimic($inp) {
		if(is_array($inp)) 
			return array_map(__METHOD__, $inp); 

		if(!empty($inp) && is_string($inp)) { 
			return str_replace(array('\\', "\0", "\n", "\r", "'", '"', "\x1a"), array('\\\\', '\\0', '\\n', '\\r', "\\'", '\\"', '\\Z'), $inp); 
		} 

		return $inp; 
	} 
	
	function Redirect($url) {
		echo "<meta http-equiv=\"REFRESH\" content=\"0;url=".$url."\">";
		//exit(); Ni dzioła
	}
?>
