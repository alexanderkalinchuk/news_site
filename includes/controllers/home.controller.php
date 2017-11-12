<?php

class HomeController{

    public function handleRequest(){

        $content = Category::find();
		$news = News::findNewsHeader();

		render('home', array(
			'title' => 'Welcome to Daily Planet',
			'content' => $content,
			'news' => $news
			));
	}
}
?>