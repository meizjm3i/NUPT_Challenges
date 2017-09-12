<?php
include("class.php");



$name = $_POST['name'];
$functions = new Functions();
$student   = new Student();
$functions->checkWaf($name);

if($functions->checkFileExists()){
    $userinfo = $functions->getStuInfo($name);
    print_r("student's name is :".$userinfo->name."<br>");
    print_r("student's age  is :".$userinfo->age."<br>");
    //$student->assign($username);
}else{
    file_put_contents("name.txt","");
}
echo "<br>";
var_dump($_POST);



?>