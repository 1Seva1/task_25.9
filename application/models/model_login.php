<?php
class Model_Login extends Model
{
    public function db()
    {
    $query = mysqli_query($link,"SELECT id, login, hash FROM users WHERE login='".mysqli_real_escape_string($link,$_POST['login'])."'");
    $data_db = mysqli_fetch_assoc($query);
    if ($data_db['hash'] === password_hash($_POST['password'], PASSWORD_BCRYPT))
    {
        header("Location: index.php?url=main"); 
        exit();
    }else
    {
        header("Location: index.php?url=register");
        exit();
    }
    }
}