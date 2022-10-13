<?php
class Model_Register extends Model
{
    // Проверка введенных данных в поля
    public function checkData()
    {
        $login = $_POST['login'];
        $pass = $_POST['password'];
        $pass_r = $_POST['password_repeat'];

        $errors = [];
    
        if (!isset($login) || empty($login)) 
        {
            $errors[] = 'Логин не указан';
        }
        if (!isset($pass) || empty($pass)) 
        {
            $errors[] = 'Пароль не указан';
        }
        if (!isset($pass_r) || empty($pass_r)) 
        {
            $errors[] = 'Нужно повторить пароль';

        } elseif ((isset($pass) && isset($pass_r)) && ($pass != $pass_r)) 
            {
            $errors[] = 'Пароли не совпадают';
            }
    return $errors;
    }
    public function addUser()
    {
        
            $login = $_POST['login'];
            $hash = password_hash((trim($_POST['password'])), PASSWORD_BCRYPT);

            $query = 'INSERT INTO users (login, hash) VALUES($login, $hash)';
            $db = Model::get_connection();
            $stmt = $db->prepare($query);
        
    return $stmt->execute();
    }
}