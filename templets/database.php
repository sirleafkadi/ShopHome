<?php



class Database{

    static $is_error=false;
    static $array=array("db_msg"=>"", "pdo"=>"");

protected function sql_db(){
    
    try{
        $array["pdo"] = new PDO('mysql: host=localhost; port=3308 dbname=shophome_db; charset=utf8', 'developer', 'Moneymoney27');
        $array["pdo"]->setAttribute(PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION);
       
        $array['is_error']=self::$is_error;
        return $array;
    }
        
catch(PDOException $e){
    $database_error='<h5 style="color:red; text-align:center; margin-top:10% "> Unable to connect to the database: '. '<br/><br>'.'Error Code '.$e->getCode().'</h5>';
          $array['db_msg']= $database_error;
            self::$is_error=true;
            $array['is_error']=self::$is_error;
             return $array;  


    }









    

}




    
}

?>