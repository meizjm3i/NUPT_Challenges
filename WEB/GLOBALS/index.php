<?php
include 'flag.php';
$a = @$_REQUEST['a'];
@eval("var_dump($$a);");
show_source(__FILE__);

?>