<?php
class Model_Login extends Model
{
    public function login()
    {
    $query = mysqli_query($link,"SELECT id, login, hash FROM users WHERE login='".mysqli_real_escape_string($link,$_POST['login'])."'");
    $data_db = mysqli_fetch_assoc($query);
    if ($data_db['hash'] === password_hash($_POST['password'], PASSWORD_DEFAULT))
    {
        header("Location: index.php"); 
        exit();
    }
    }
}