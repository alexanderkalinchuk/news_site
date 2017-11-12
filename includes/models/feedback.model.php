<?php
/**
 * Created by PhpStorm.
 * User: Alexander
 * Date: 09.11.2017
 * Time: 18:26
 */



class Feedback {

    /*
        метод find вытягивает из таблицы категории новостей и возвращает массив в $content в home.controller
    */

    public static function feedb()
    {
        global $db;

        if (isset($_POST['messageFF'])) {
            $admin_mail = "kalinchuk_yu1@bigmir.net";
            $subject_mail = "заполнена контактная форма с ".$_SERVER['HTTP_REFERER'];
            $message_mail = "Имя: ".$_POST['nameFF']."\nEmail: ".$_POST['contactFF']."\nСообщение: ".$_POST['messageFF'];
            mail($admin_mail, $subject_mail, $message_mail);
            echo '<p id="feedback_message">Ваше сообщение отправлено, спасибо! В ближайшее время с Вами свяжется наш оператор!</p>';

        }



        // Returns an array of Category objects:

    }

}