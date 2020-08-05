<?php 
require("templets/database.php");
class Model extends Database{
static $array;
static $pdo;
  
/////Checking regular Database/////////////
    protected function database(){
       
        self::$array = parent::sql_db();
        self::$pdo=static::$array['pdo'];
        if(self::$array['is_error']==true){
      
           return self::$array;
        }

        else{
            return self::$array;
        }

    }











}


?>