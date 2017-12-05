<?php

class Category {

    /*
        find вытягивает из таблицы категории новостей и возвращает массив в $content в home.controller
    */

    public static function find($arr = array())
    {
        global $db;

        if (empty($arr)) {

            $st = $db->prepare("SELECT * FROM categories");
        } else if ($arr['news_category']) {
            $st = $db->prepare("SELECT * FROM categories WHERE id=:news_category");
        } else {
            throw new Exception("Unsupported property!");
        }

        $st->execute($arr);

        return ($st->fetchAll(PDO::FETCH_CLASS, "Category"));
    }

}


class News {

    /*
        метод findNewsHeader вытягивает из таблицы заголовки новостей. Также генерирует sql запрос для главной страницы
        который вытягивает заголовки новостей и отображает не более 5 для каждой категории.
    */

	public static function findNewsHeader($news_array = array()){
	    global $db;

        $array_category = Category::find();
        $full_query = '';

        //В блок IF создается запрос на выборку заголовков новостей из таблицы в количестве не более 5.
        // Отображение на главной странице
	    if(empty($news_array)){
	        for ($i=0; $i<count($array_category); $i++) {
                if ($i < count($array_category) - 1) {
                    $query = "(SELECT * FROM news WHERE news_category = '" . $array_category[$i]->name . "' LIMIT 5) UNION ALL ";
                    $full_query = $full_query . $query;
                } else {
                    $query = "(SELECT * FROM news WHERE news_category = '" . $array_category[$i]->name . "' LIMIT 5)";
                    $full_query = $full_query . $query;
                }

            }

            $news = $db->prepare($full_query);

        } else if ($news_array['news_category']){
                //здесь новости отображаются по 5 штук для пагинации. Учитывается номер страницы при переключение пагинации.
            if (!$_GET['page']){
                $coefficientForNewsPage = 0;
            }else{
                $coefficientForNewsPage = ($_GET['page']-1) * 5; //этот коэффициент нужен для LIMIT (с какой начинать, сколько)
            }
            $query = "(SELECT * FROM news WHERE news_category=:news_category LIMIT " . $coefficientForNewsPage . ",5 )";
            $news = $db->prepare($query);

        } else if ($news_array['news_count']){
                //здесь отдается количество новостей определенной категории для расчетов в пагинации
            $query = "(SELECT * FROM news WHERE news_category=:news_count)";
            $news = $db->prepare($query);

        } else if ($news_array['tag']){
            $tagquery = $news_array['tag'];
            $news = $db->prepare("SELECT * FROM news WHERE tags LIKE '%$tagquery%' ");

        }
	    else {
	        throw new Exception("Что-то не то в category.model");

        }

	     $news->execute($news_array);

	    return $news->fetchAll(PDO::FETCH_CLASS, "News");
    }

    //функция возвращает последние 3 добавленные в БД заголовка новости
    public static function findLastNewsHeader($news_array = array()){
        global $db;


        $query = "SELECT * FROM news ORDER BY id DESC LIMIT 3";

        $news = $db->prepare($query);


        $news->execute($news_array);

        return $news->fetchAll(PDO::FETCH_CLASS, "News");
    }


}


?>
