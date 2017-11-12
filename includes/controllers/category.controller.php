<?php
/**
 * Created by PhpStorm.
 * User: Alexander
 * Date: 05.11.2017
 * Time: 14:15
 */

class CategoryController{
    public function handleRequest(){

        $cat = News::findNewsHeader(array('news_category'=>$_GET['category']));

        if(empty($cat)){
            throw new Exception("There is no such category!");
        }

        // Fetch all the categories:
        $categories = News::findNewsHeader();

        // Fetch all the products in this category:
        $news = News::findNewsHeader(array('news_category'=>$_GET['category']));
//        echo '<pre>';
//        var_dump($news);
        // $categories and $products are both arrays with objects

        render('category',array(
            'title'			=> $cat[0]->name,
            'categories'	=> $categories,
            'news'		=> $news
        ));
    }
}
?>