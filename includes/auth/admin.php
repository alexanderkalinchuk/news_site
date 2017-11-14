<?php
session_start();
require_once 'session.class.php';

if (Session::has('user') and Session::get('user') == 'admin') {
    echo 'Hello, ' . Session::get('user');
} else {
    echo 'Доступ запрещен';

}