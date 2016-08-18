# ~和等于之间不能有空格

$var = "by jeffs jjkk";
$var =~ s/(?<=jeff)(?=s)/'/g;
print "$var \n";

$pop = 14367523456789;
$pop =~ s/(?<=\d)(?=(?:\d\d\d)+$)/,/g;
#$pop =~ s/(?<=\d)(?=(?:\d{3})+$)/,/g;
print "the us population is $pop \n";

#$val=~ s/(\d)((\d\d\d)+\b)/$1,$2/g;
$val= 123456789987456;
# while($val=~ s/(\d)((\d\d\d)+\b)/$1,$2/g){
# 	print "$val \n";
# }
while($val=~ s/(\d)((\d\d\d)+\b)/$1,$2/g){
	$val=$val;	
}
print "$val \n";