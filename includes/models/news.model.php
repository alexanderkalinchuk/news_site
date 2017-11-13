<?php
/**
 * Created by PhpStorm.
 * User: Alexander
 * Date: 07.11.2017
 * Time: 17:58
 */
class NewsPage {
// Вытягивает из БД запрашиваемую новость
    public static function OneNewsPage($news_page = array()){
        global $db;

        $category = substr($_GET['action'], 0, -1);
        $newsID = $_GET['id'];

        if(empty($news_page)){
            $query = "SELECT * FROM news WHERE news_category = '". $category ."' AND id = '".$newsID."'";
            $news = $db->prepare($query);

        }
        else {
            throw new Exception("Что-то не то в news.model");
        }

        $news->execute($news_page);

        return $news->fetchAll(PDO::FETCH_CLASS, "NewsPage");
    }

    public static function Tags($tags = array()){



    }

}


