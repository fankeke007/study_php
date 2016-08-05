<?php
$string = "This is\tan example\nstring";
/* 使用制表符和换行符作为分界符 */
$tok = strtok($string, " \n\t");
echo $string."<br />";
// echo $tok;
while ($tok !== false) {
    echo "Word=$tok<br />";
    $tok = strtok(" \n\t");
}
?> 