<?php 
	function fn(){
		echo "inside the function,\$var=".$var."<br />";
		$var = "contents 2";
		echo "inside the function,\$var=".$var."<br />";
	}
	$var = "contents 1";
	fn();
	echo "outside the function,\$var=".$var."<br />";
?>

<?php 
	$var = "contents 1";
	function fn1(){
		echo "inside the function,\$var=".$var."<br />";
		$var = "contents 2";
		echo "inside the function,\$var=".$var."<br />";
	}
	fn1();
	echo "outside the function,\$var=".$var."<br />";
?>

<?php 
	global $var;
	function fn2(){
		echo "inside the function,\$var=".$var."<br />";
		$var = "contents 2";
		echo "inside the function,\$var=".$var."<br />";
	}
	$var = "contents 1";
	fn2();
	echo "outside the function,\$var=".$var."<br />";
?>

<?php 
	function fn3(){
		global $var;
		echo "inside the function,\$var=".$var."<br />";
		$var = "contents 2";
		echo "inside the function,\$var=".$var."<br />";
	}
	$var = "contents 1";
	fn3();
	echo "outside the function,\$var=".$var."<br />";
?>

<?php 
	function fn4(){
		echo "inside the function,\$var=".$var."<br />";
		global $var;
		$var = "contents 2";
		echo "inside the function,\$var=".$var."<br />";
	}
	$var = "contents 1";
	fn4();
	echo "outside the function,\$var=".$var."<br />";
?>

