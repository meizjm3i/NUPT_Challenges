<?php
$md51 = md5('QNKCDZO');
$a = @$_GET['a'];
$md52 = @md5($a);
if(isset($a)){
if ($a != 'QNKCDZO' && $md51 == $md52) {
    echo "nctf{md5_collision_is_easy}";
} else {
    echo "false!!!";
}}
else{echo "please input a";}
?>