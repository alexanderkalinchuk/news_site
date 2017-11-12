<?php
    $category = ucfirst($_GET['category']); //первый символ в верхний регистр


?>

<?php render('_header', array('title' => $title )) ?>

<h1> <?php  echo $category ?> </h1>
<div>
    <?php

    render($news)?>
</div>
<div>

</div>

<?php render('_footer') ?>
