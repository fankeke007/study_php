print "my first perl script.\n";

$celsius=20;
while($celsius<=45){
	$fahrenheit=($celsius*9/5)+32;
	print "$celsius C is $fahrenheit F. \n";
	$celsius=$celsius+5;
};

$reply=123;
if($reply =~ m/^[0-9]+$/){
	print "only digits";

}else{
	print "not only digits";
}
