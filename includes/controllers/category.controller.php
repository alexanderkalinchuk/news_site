<?php
/**
 * Created by PhpStorm.
 * User: Alexander
 * Date: 05.11.2017
 * Time: 14:15
 */

//Использует метод для поиска заголовков новостей и отправляет их на отображение в render
class CategoryController{
    public function handleRequest(){

        $cat = News::findNewsHeader(array('news_category'=>$_GET['category']));

        if(empty($cat)){
            throw new Exception("There is no such category!");
        }

        $categories = News::findNewsHeader();
        $news = News::findNewsHeader(array('news_category'=>$_GET['category']));
        $news_count = News::findNewsHeader(array('news_count'=>$_GET['category']));

        render('category',array(
            'title'			=> $cat[0]->name,
            'categories'	=> $categories,
            'news'		=> $news,
            'news_count' => $news_count

        ));
    }
}
?>
