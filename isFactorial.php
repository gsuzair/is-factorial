<?php

$n = 120;
isFacotrial($n);

function isFacotrial($n){
	$rest = 1;
	$resp = false;
	for($i = 1; $i <= $n; $i++){
		if($n > 1){
			$rest = $rest * $i;
			if($rest == $n){
				$resp = true;
			} 
		}
	}
	echo $resp;
}

?>
