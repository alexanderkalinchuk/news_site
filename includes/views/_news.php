
<li class="<?php echo $news->news_category;?>-item-of-list">

<?php
//    if()
?>
    <a href="/<?php echo $news->news_category .'/?id='. $news->id ?>" class="<?php echo $news->news_category?>-item">
        <?php echo $news->news_title ?>
    </a>

</li>


