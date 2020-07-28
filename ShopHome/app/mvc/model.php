<?php 

require("config.php");
class Model extends Config{
static $array;

  
/////Checking Database/////////////
    protected function check_db(){
        $is_error=false;
        self::$array = parent::connect();

        if(self::$array[1]==true){
            $is_error=true;
           return $is_error; 
        }

        else{
            return $is_error;
        }

    }

/////END||Database/////////////


/////Get Categories/////////////
protected function get_cat(){
 
    try{

        $sql="select * from shophome_db.category";
        $row = self::$array[0]->query($sql);
        return $row;

    }catch(Exception $e){
        echo "<h6 style='color:red'><span style='font-size:25px'>Error:</span> <br><br>  Code: ".$e->getCode()."</h6>";
    }


}

/////END||Categories/////////////









}


?>