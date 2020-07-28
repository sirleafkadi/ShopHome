<?php
require("model.php");

class View extends Model{
   
/////Checking Database For Error/////////////
public function check_re_db(){
       $array=parent::check_reg_db();

     if($array['is_error']==true){  $ray=array(); 
        $ray['is_error']=$array['is_error']; 
        $ray['db_msg']=$array['db_msg']; return $ray;} else{ return null;}
    }









}

?>