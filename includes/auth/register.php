<?php

require_once('forms/registration.form.class.php');
require_once('db.class.php');
require_once('password.class.php');

$db_host = '91.231.86.213';
$db_user = 'alexk91_admin';
$db_password = 'F7U?adlcIVrx';
$db_name = 'alexk91_newssite_users';

$msg = '';

$db = new DB($db_host, $db_user, $db_password, $db_name);
$form = new RegistrationForm($_POST);

if ($_POST) {
    if ($form->validate()) {
        $email = $db->escape($form->getEmail());
        $username = $db->escape($form->getUsername());
        $password = new Password( $db->escape($form->getPassword()) );

        $res = $db->query("SELECT * FROM users WHERE username = '{$username}'");
        if ($res) {
            $msg = 'Пользователь с таким именем уже существует';
        } else {
            $db->query("INSERT INTO users (email, username, password) VALUES ('{$email}','{$username}','{$password}')");
            header('location: http://alexk.in.ua');
        }

    } else {
        $msg = $form->passwordsMatch() ? 'Заполните поля' : 'Пароль не оч';
    }
}


?>
