<!--ОТображение списка новостей категории-->
<?php
    $category = ucfirst($_GET['category']); //первый символ в верхний регистр
?>

<?php render('_header', array('title' => $title )) ?>

<!-- Здесь используется две разные заметки: для обычного отображения юзеру и для админки -->
<?php if($_GET['editor']){ ?>

    <div class="container">
        <div class="row">
            <div class="col-6">

              <?php if($_GET['editor']){ ?>

                  <form action="?addnews=1" method="post" name="form">
                    <p><h1> Add news </p></h1><hr>
                    <p><input type="text" name="newsName" size="40" placeholder="News title.."></input></p>
                    <p><textarea name="newsText" cols="42" rows="7" placeholder="News text.." id="textarea-news-add"></textarea></p>
                    <p><input type="text" name="newsTags" size="40" placeholder="News tags.."></input></p>
                    <p><input type="file" name="newsPicture" size="2" multiple accept="image/*,image/jpeg"></input></p>
                    <input type="submit" value="Add news"></input>
                  </form>
              <?php } ?>

            </div>
            <div class="col-6">
              <!-- название категории новостей -->
                <p><h1> <?php  echo $category ?> </h1></p><hr>
                <div>
                    <?php
                      render($news);
                    ?>
                </div><hr>
                <div class="pagination-position">
                    <p></p><?php require_once "includes/views/pagination.php"; ?></p>
                </div>
            </div>
        </div>
    </div>

<!-- Если нет get-параметра editor, разметка стандартная         -->
<?php }else{ ?>

  <div class="container">
      <div class="row">
          <div class="col">
          </div>
          <div class="col-6">
            <!-- название категории новостей -->
              <p><h1> <?php  echo $category ?> </h1></p><hr>
              <div>
                  <?php
                    render($news);
                  ?>
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
<?php } ?>

<p><?php render('_footer') ?></p>
