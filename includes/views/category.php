<!--ОТображение списка новостей категории-->
<?php
    $category = ucfirst($_GET['category']); //первый символ в верхний регистр
?>

<?php render('_header', array('title' => $title )) ?>
<div class="container">
    <div class="row">
        <div class="col">
        </div>
        <div class="col-6">
            <p><h1> <?php  echo $category ?> </h1></p><hr>
            <div>
                <?php render($news)?>
            </div><hr>
        </div>
        <div class="col">
        </div>
    </div>
</div>
    <div class="row">
        <div class="col">
        </div>
        <div class="col-3">
            <p></p><?php require_once "includes/views/pagination.php"; ?></p>
        </div>
        <div class="col">
        </div>
    </div>
<p><?php render('_footer') ?></p>
