<?php
$referer = $_SERVER['referer'];
if ($referer === "https://www.google.com/ " || $referer === "https://www.google.com"){
	echo "nctf{http_referer}";
}else{
	echo "are you from google?";
}
?>