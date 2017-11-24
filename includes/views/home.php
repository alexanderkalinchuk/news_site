<!--Отображение главной страницы-->

<?php render('_header',array('title'=>$title))?>
<?php render('slider')?>

<div class="container">
    <div class="row">
        <div class="col">
        </div>
        <div class="col-6">
            <ul class="news-list" data-role="listview" data-inset="true" data-theme="c" data-dividertheme="b">
                <p><h3>НОВОСТИ</h3></p><hr>
                <?php render($news) ?>
                <?php render($content) ?>
            </ul>
        </div>
        <div class="col">
        </div>
    </div>
</div>

<p><?php render('_footer') ?></p>