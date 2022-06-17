<?php

class connection {


    public static function connect($config){
        try{

            // return new PDO('mysql:host=localhost;dbname=users','root','');


            return new PDO(

                $config['connection'].";dbname=". $config['dbname'],
                $config['username'],
                $config['password'],
                $config['options']
   
            );
            

        }catch(PDOException $e){
            
            die("Cannot Connect To Database!".$e->getMessage());
            
        }
    }
}  