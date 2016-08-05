print "enter a temperatrue in celsius:\n";
$reply=<STDIN>;
chop($reply);
if($reply =~ m/-?((^[0-9]+$)|(^[0-9]*[.][0-9]{1,2}+$))/){
	print "only digits";

}else{
	print "not only digits";
};
