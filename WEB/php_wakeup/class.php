<?php
header("charset=UTF-8");
class Student {
    private $pri2 = "teacher";
    private $pri  = "student";
    

    public function __construct(){
        $this->pri = "student";
        echo "construct success"."<br>";
    }


    public function __destruct(){     //unset触发
        echo "destruct success"."<br>";
        if($this->pri == "teacher"){
            echo "nctf{548sa2a1fsd6a6sv2ds8}";
        }
        echo $this->pri."<br>";
    }


    public function __wakeup(){    //construct 触发
        echo "wakeup success!"."<br>";   //__wakeup 失效 CVE
        $this->pri = "student";
    }

    public function addStudent($name,$age){     //增添学生信息
        $this->name = $name;
        $this->age  = $age;

    }

    public function assign($name,$value){


        $GLOBALS['$variable'] = $value;
    }

}




class Functions {
    public function isInfoExists($nameinfo){
        $name = unserialize(file_get_contents("name.txt")) ;
        for ($i=0;$i<count($name);$i++){
            if($nameinfo == $name[$i]){
                die("该学生信息已存在!");
            
            };
        }
    }//检测学生信息是否已存在


    public function addNameToFile($name){
        if(!empty(file_get_contents("name.txt"))){
            $nameInfo = unserialize(file_get_contents("name.txt"));
            Array_push($nameInfo,$name);
            // echo serialize($nameInfo);
            // die();
            file_put_contents("name.txt",serialize($nameInfo));
        }else{
            file_put_contents("name.txt","");
        }
    }//将学生姓名存入文件



    public function addInfoToFile($username,$content){
        file_put_contents("$username.txt",$content);
    }//将学生信息存好

    //waf模块
    public function checkWaf(){
        $num = func_num_args();
        $args = func_get_args();
        switch($num){
            case 1:
                $this->__call('checkWaf1',$args);
                break;
            case 2:
                $this->__call('checkWaf2',$args);
                break;
            default:
                throw new  Exception();

        }
    }

    public function checkWaf1($name){
        if(preg_match("/^[0-9a-zA-Z]*$/",$name)){
            return TRUE;
        }
    }


    public function checkWaf2($name,$age){
        if (preg_match("/^[0-9a-zA-Z]*$/",$name)){
            if(preg_match("/^[\d]*$/",$age)){
                return TRUE;
            }else{
                return FALSE;
            }
        }else{
            return FALSE;
        }
    }

    public function __call($function,$args){
        if($function="checkWaf"){
            $num = count($args);
            if(method_exists($this,$f='checkWaf'.$num)){
                call_user_func_array(array($this,$f),$args);
            }
        }
        
    }//函数重载




    public function getStuInfo($name){
        if(file_exists("$name.txt")){
            $info = unserialize(base64_decode(file_get_contents("$name.txt")));
            return $info ;
        }else{
            die("No this student");
        }
    }

    public function checkFileExists(){
        if(file_exists("name.txt")){
            return TRUE;
        }else{
            return FALSE;
        }
    }

   
}





?>