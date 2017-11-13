<!--отоборажает новость при клике на неё-->

<div id="newspage">
    <div><?php echo $newspage->news_title ?></div>
    <img src="../<?php echo $newspage->img ?>" alt="img ;(">
    <div><?php echo $newspage->text ?></div>
    <hr>

    <h4>Теги: </h4>
    <?php echo tagsDivider($newspage); ?>


<hr>
    <div class="news-user-info">Сейчас читают: <p id="reading-now">0</p></div>
    <div class="news-user-info">Всего прочитали: <p id="total-read">0</p></div>
</div>

