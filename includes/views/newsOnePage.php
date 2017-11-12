
<?php render('_header',array('title'=>$title))?>

<!--JS для Читают\Просматривают сейчас-->
<script src="http://127.0.0.1/diploma/js/reading-now.js"></script>

    <p>Здесь отображается одна новость</p>

    <ul class="news-list" data-role="listview" data-inset="true" data-theme="c" data-dividertheme="b">

       <?php render($newspage) ?>

    </ul>


<?php render('_footer')?>