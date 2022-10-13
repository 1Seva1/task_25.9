<?php
class Model
{
    public function get_data()
    {
        //todo
    }
    /*public function db()

    {
        $link=mysqli_connect("localhost", "root", "seva1312", "test");
        return $link;
    }*/
    public static function get_connection()
    {
        return new PDO('mysql:host=localhost;dbname=test', 'root', 'seva1312');
    }
        
    
}