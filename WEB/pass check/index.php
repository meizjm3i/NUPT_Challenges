<?php
$pass=@$_POST['pass'];
$pass1="FGHJSsd#&@^$(";//被隐藏起来的密码
if(isset($pass)){
	if(@!strcmp($pass,$pass1)){
		echo "flag:nctf{strcmp_is_n0t_3afe}";
	}else{
		echo "the pass is wrong!";
	}
}else{
	echo "please input pass!";
}
?>