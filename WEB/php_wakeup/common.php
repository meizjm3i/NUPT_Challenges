<?php

foreach (array('_COOKIE','_POST','_GET') as $_request)  
{

    foreach ($$_request as $_key=>$_value)  
    {

        $$_key=  $_value;

    }

}
session_start();

?>