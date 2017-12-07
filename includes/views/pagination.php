<?php
/**
 * Created by PhpStorm.
 * User: Alexander
 * Date: 24.11.2017
 * Time: 20:28
 */

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

$p = new Pagination(array(
    'itemsCount' => count($news_count), //сколько всего новостей определенной категории
    'itemsPerPage' => 5, //кол-во новостей на странице (для расчетов, а не для отображения)
    'currentPage' => $page
));
?>

<?php foreach ($p->buttons as $button) :
    if ($button->isActive) : ?>

<!-- Далее идет условие на проверку в админке мы или нет? Если да, нам надо передавать в ссылке get-параметр editor,
чтобы отображать кнопку delete при пагинации -->

  <?php if ($_GET['editor']){ ?>
        <a href = '?category=<?php  echo strtolower($category) ?>&editor=1&page=<?=$button->page?>'><?=$button->text?></a>
  <?php }else{ ?>
        <a href = '?category=<?php  echo strtolower($category) ?>&page=<?=$button->page?>'><?=$button->text?></a>
  <?php } ?>

    <?php else : ?>
        <span style="color:#555555"><?=$button->text?></span>
    <?php endif;
endforeach; ?>
