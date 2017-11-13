<?php
/**
 * Created by PhpStorm.
 * User: Alexander
 * Date: 09.11.2017
 * Time: 23:20
 */

class TagsController {
    public function handleRequest(){

        $news = News::findNewsHeader(array('tag'=>$_GET['tag']));
  
        render('category',array(
            'title'			=> "this is tagslist",
            'news'		=> $news
        ));
    }

}