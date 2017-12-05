<?php
/**
 * Created by PhpStorm.
 * User: Alexander
 * Date: 13.11.2017
 * Time: 22:02
 */
if (!empty($_POST['key'])) {
    file_put_contents('test.txt', $_POST['key']);
}