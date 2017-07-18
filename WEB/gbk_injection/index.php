<?php
mysql_connect("localhost","root","");
mysql_select_db('sae');
	if(isset($_GET['id'])){
		$id  = addslashes($_GET['id']);
		$sql = "select id,title from news where id = '".$id."'" ;
		echo "your sql:".$sql."<br>";
        $query = mysql_query($sql);
        $array = mysql_fetch_array($query);
        if($query){
            echo $array['title'] ;
        }


	}else{
        echo "I need id";
    }

?>