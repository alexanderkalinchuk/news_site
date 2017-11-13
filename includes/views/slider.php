<?php
/**
 * Created by PhpStorm.
 * User: Alexander
 * Date: 13.11.2017
 * Time: 19:17
 */

//Создаю клон который будет содержать переменную с новостями. Вычисляю длину массива, чтобы работать с последними
//добавленными в БД новостями. Беру последние 3 новости.

    $homeControllerObj = new HomeController();
    $newsForSlider = clone $homeControllerObj;
    $news = $newsForSlider->newsForSlider();
    $last_news = count($news)-1;

?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <a href="./<?php echo $news[$last_news-2]->news_category;?>/?id=<?php echo $news[$last_news-2]->id;?>"><img class="d-block img-fluid" src="includes\img\slide1.png" alt="First slide"></a>
            <div class="carousel-caption d-none d-md-block">
                <h3><?php echo $news[$last_news-2]->news_title?></h3>
                <p><?php echo $news[$last_news-2]->text?></p>
            </div>
        </div>
        <div class="carousel-item">
            <a href="./<?php echo $news[$last_news-1]->news_category;?>/?id=<?php echo $news[$last_news-1]->id;?>"><img class="d-block img-fluid" src="includes\img\slide2.png" alt="Second slide"></a>
            <div class="carousel-caption d-none d-md-block">
                <h3><?php echo $news[$last_news-1]->news_title?></h3>
                <p><?php echo $news[$last_news-1]->text?></p>
            </div>
        </div>
        <div class="carousel-item">
            <a href="./<?php echo $news[$last_news]->news_category;?>/?id=<?php echo $news[$last_news]->id;?>"><img class="d-block img-fluid" src="includes\img\slide3.png" alt="Third slide"></a>
            <div class="carousel-caption d-none d-md-block">
                <h3><?php echo $news[$last_news]->news_title?></h3>
                <p><?php echo $news[$last_news]->text?></p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
