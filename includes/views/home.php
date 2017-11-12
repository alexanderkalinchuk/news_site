<?php render('_header',array('title'=>$title))?>



<ul class="news-list" data-role="listview" data-inset="true" data-theme="c" data-dividertheme="b">
    <h3>НОВОСТИ</h3><hr>
    <?php render($news) ?>
    <?php render($content) ?>

</ul>

<?php render('_footer')?>