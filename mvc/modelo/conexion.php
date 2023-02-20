<?php

class Conexion
{
    static public function conectar()
    {
        try
        {
            $link= new PDO("mysql:host=localhost; dbname=empleado2; charset=UTF8","root","", array (PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES utf8"));
            return $link;
        
        }
        catch(PDOException $e){
            echo "Error: " . $e->getMessage();
        }
    }
}