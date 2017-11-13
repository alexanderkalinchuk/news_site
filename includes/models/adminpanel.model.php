<?php
/**
 * Created by PhpStorm.
 * User: Alexander
 * Date: 12.11.2017
 * Time: 8:14
 */

class AdminPanel {

    public static function Panel($arr = array())
    {

    }

    public static function categoryEdit($arr = array())
    {
        global $db;

        if (empty($arr)) {

            $st = $db->prepare("SELECT * FROM categories");

        } else {
            throw new Exception("ошибка в adm pan");
        }

        $st->execute($arr);

        return ($st->fetchAll(PDO::FETCH_CLASS, "Category"));
    }

}
