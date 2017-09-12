<?php
header("charset=UTF-8");
include('class.php');
$username  = $_POST['username'];
$userage = $_POST['userage'];

$student    = new Student();
$functions  = new Functions();





if($functions->checkWaf($username,$userage)){
    die("Not this!");
}

$student->addStudent($username,$userage);
$functions->isInfoExists($username);
$functions->addNameToFile($username);
include_once("common.php");
$functions->addInfoToFile($username,base64_encode(serialize($student)));
unset($student);



?>