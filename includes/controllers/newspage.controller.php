<?php
/**
 * Created by PhpStorm.
 * User: Alexander
 * Date: 07.11.2017
 * Time: 17:44
 */

/*Класс необходим для обработки данных при клике на какую-любо новость*/

class NewsPageController{
    public static function handleRequest(){
        $newspage = NewsPage::OneNewsPage();

        render('newsOnePage', array(
            'title' => 'this news',
             'newspage' => $newspage,
            )
        );
    }

}



?>