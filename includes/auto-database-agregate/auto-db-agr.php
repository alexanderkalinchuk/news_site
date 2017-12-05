<?php

// Класс предназначен для создания конструктора запросов к БД, отправки запроса. По дефолту класс отключен 

class AgregateQuery{

  public $text;
  public $category;
  public $tags;


  public function __construct($count, $text, $category, $tags){
    $this -> fullQuery =" INSERT INTO `news`(`id`, `img`, `news_title`, `text`, `news_category`, `tags`, `date`, `total_read`) VALUES ('".$count."','includes/img/ava.jpg','новость".$count."' ,'".$text."','".$category."','".$tags."','DATE: Manual Date', '') " ;

  }

  public static function queryBuild(){
    global $db;

//открывает файл для чтения
    $text = file_get_contents('./text_fish.txt', true);
    $arrayText = str_split($text, 100);

    $category = file_get_contents('./text_categories.txt', true);
    $arrayCategory = explode(',',$category);

    $tags = file_get_contents('./text_tags.txt', true);
    $arrayTags = explode(';', $tags);

//начальные значения. не изменять
    $textCount = 0;
    $catCount = 0;
    $tagsCount = 0;

    for ($i = 45; $i < 60; $i++){

//Подготовка запроса
      $query = new AgregateQuery($i, $arrayText[$textCount], $arrayCategory[$catCount], $arrayTags[$tagsCount]);
      $fullQueryDB = $query->fullQuery;

//подключение к БД. Запрос на внесение строки
      $st = $db->prepare($fullQueryDB);
      $st->execute($arr);

//условия для совпадения в БД тегов с категориями
      $textCount += 1;
      if($tagsCount == 9){
        $tagsCount = 0;
      }else{
        $tagsCount += 1;
      }

//условия для совпадения в БД тегов с категориями
      if($tagsCount % 2 == 0 && $tagsCount !== 0){
        $catCount += 1;
      } else if ($tagsCount == 0){
        $catCount = 0;
      }



    }
  }



}
//ЗАПУСК АВТОЗАПОЛНЕНИЯ. Раскомментируй след. строку
// AgregateQuery::queryBuild();


?>
