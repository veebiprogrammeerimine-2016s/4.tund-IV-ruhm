<?php 

	/*$name = "romil 2";
	
	var_dump($GLOBALS["name"]);
	
	function tlu() {
		echo $GLOBALS["name"];
	}*/
	
	
	function compare($x, $y) {
		$notice = "";
		
		if($x > $y) {
			$notice = "esimene on suurem";
		} else {
			$notice = "teine arv on suurem või sama";
		}
		
		return $notice;
	}
	
	$answer = compare(1234123,1243467);
	echo $answer;

	
?>