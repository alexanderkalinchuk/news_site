<?php
/**
 * Created by PhpStorm.
 * User: Alexander
 * Date: 24.11.2017
 * Time: 20:26
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
        <a href = '?category=<?php  echo strtolower($category) ?>&page=<?=$button->page?>'><?=$button->text?></a>
    <?php else : ?>
        <span style="color:#555555"><?=$button->text?></span>
    <?php endif;
endforeach; ?>