<!--Список новостей-->
<!-- Здесь реализованы 1 - список для новостей по нажатию на новостную категорию. 2 - список новостей + рядом с каждой новостью
кнопка delete. Это для админ панели.  -->
<li class="<?php echo $news->news_category;?>-item-of-list">
    <a href="/<?php echo $news->news_category .'/?id='. $news->id ?>" class="<?php echo $news->news_category?>-item">
        <?php echo $news->news_title ?>
    </a>

<!-- 2     -->
<!-- Для отображения списка новостей "для всех" и списка в админке используются одни и те же классы.
Поэтому при нажатии на Редактирование категорий новостей, передается GET параметр editor.  Если он есть,
список отображается с кнопкой делете-->
<?php

if($_GET['editor']){
  echo "
    <a href=\"$news->news_category/?delete-news=$news->id\">
        Delete
    </a>
  ";
}
?>
</li>
