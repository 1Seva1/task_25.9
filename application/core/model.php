<?php
class Model
{
    public function get_data()
    {
        //todo
    }

    public static function get_connection()
    {
        return new PDO('mysql:host=localhost;dbname=test', 'root', 'seva1312');
    }
        
    
}