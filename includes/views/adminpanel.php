<?php render('_header',array('title'=>$title))?>


    <br class="admin-panel">

        <a href="?categoryedit=1">Редактирование категорий</a></br>
        <a href="?menuedit">Редактирование меню</a></br>

        <?php var_dump($adminpanel); ?>
    </div></br>
<?php render('_footer')?>