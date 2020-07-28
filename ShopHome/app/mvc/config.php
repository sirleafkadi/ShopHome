<?php



class Config{

    static $is_error=false;

protected function connect(){
    $array=array();
  
    try{
        $array[0] = new PDO('mysql: host=localhost; port=3308 dbname=shophome_db; charset=utf8', 'developer', 'Moneymoney27');
        $array[0]->setAttribute(PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION);
       
        $array[1]=self::$is_error;


        return $array;
    }
        
catch(PDOException $e){
    $database_error='<h5 style="color:red; text-align:center; margin-top:10% "> Unable to connect to the database because: '.$e->getMessage().'</h5>';
            $_SESSION['error']["db_error"]= $database_error;
            self::$is_error=true;
            $array[1]=self::$is_error;
             return $array;  


    }



}




    
}

?>