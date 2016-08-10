#需要替换的letter模板
$letter='Dear =FIRST=,
You have been chosen to win a brand new =TRINKET=! Free!
Could you use another =TRINKET= in the =FAMILY= household ?
 Yes =SUCKER= ,I bet you could! Just respond by...';
#用于替换的值
$given = 'Tom';
$family = 'Cruise';
$wunderprice = '100% genuine faux diamond';
#执行替换
$letter=~ s/=FIRST=/$given/g;
$letter=~ s/=FAMILY=/$family/g;
$letter=~ s/=SUCKER=/$given $family/g;
$letter=~ s/=TRINKET=/fabulous $wunderprice/g;
#打印替换后的结果
print $letter;

#another example 修正float
$price=12.35700000000392;
$price=~ s/\.\d\d[1-9]?//