<?php 
	function increment($value ,$amount=1){
	$value=$value+$amount;
	}

	$value=10;
	increment($value);
	echo $value."<br />";
?>

<?php 
	function increment2(&$value ,$amount=1){
	$value=$value+$amount;
	}

	$value=10;
	increment2($value);
	echo $value;

	phpinfo();
?>



