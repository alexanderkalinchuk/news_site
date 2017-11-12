<?php
session_start();

require_once 'forms/login.form.class.php';
require_once 'db.class.php';
require_once 'password.class.php';
require_once 'session.class.php';


$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'users';

$msg = '';

$db = new DB($db_host, $db_user, $db_password, $db_name);
$form = new LoginForm($_POST);

if ($_POST) {
    if ($form->validate()) {
        $username = $db->escape($form->getUsername());
        $password = new Password( $db->escape($form->getPassword()) );

        $res = $db->query("SELECT * FROM users WHERE username = '{$username}' AND password = '{$password}' LIMIT 1");
        if (!$res) {
            $msg = 'Неверный логин или пароль';

        } else {
            $user = $res[0]['username'];
            Session::set('user', $user);
            header('location: http://localhost/diploma/');
        }

    } else {
        $msg = 'Please fill in fields';
    }
}


?>
