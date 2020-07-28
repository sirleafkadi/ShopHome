<?php 
require("templets/database.php");
class Model extends Database{
static $array;
static $is_error=false;
  
/////Checking regular Database/////////////
    protected function check_reg_db(){
       
        self::$array = parent::reg_db();

        if(self::$array['is_error']==true){
      
           return self::$array;
        }

        else{
            return self::$array;
        }

    }











}


?>