<?php

class HomeController{

    public function handleRequest(){
        // Реализует методы для поиска в БД категорий и новостных заголовков
        $content = Category::find();
		$news = News::findNewsHeader();

		render('home', array(
			'title' => 'Welcome to Daily Planet',
			'content' => $content,
			'news' => $news
			));

	}
    //эта функция отдает информацию о заголовках новостей. В slider.php создается клон экземпляра HomeController и туда
    // попадает эта инфа
	public function newsForSlider(){
        $news = News::findLastNewsHeader();
        return $news;
    }
}
?>