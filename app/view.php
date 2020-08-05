<?php
require("model.php");

class View extends Model{
 
/////Importing Nav View/////////////
function nav(){
  return include'views/nav.php';
}
/////Checking Database For Error/////////////
public function database(){
       $array=parent::sql_db();

     if($array['is_error']==true){  $ray=array(); 
        $ray['is_error']=$array['is_error']; 
        $ray['db_msg']=$array['db_msg']; return $ray;} else{ return null;}
    }









}

?>