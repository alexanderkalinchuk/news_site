
<?php render('_header',array('title'=>$title))?>

<!--JS для Читают\Просматривают сейчас-->
<script src="http://alexk.in.ua/newssite/js/reading-now.js"></script>

    <p>Здесь отображается одна новость</p>

    <ul class="news-list">

       <?php render($newspage) ?>

    </ul>


<?php render('_footer')?>
