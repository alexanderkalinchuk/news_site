
<?php render('_header',array('title'=>$title))?>

<!--JS для Читают\Просматривают сейчас-->
<script src="http://alexk.in.ua/js/reading-now.js"></script>

<!--JS для Читают\Просматривают сейчас-->

    <ul class="news-list">

       <?php render($newspage) ?>

    </ul>


<?php render('_footer')?>
