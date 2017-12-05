<?php render('_header',array('title'=>$title))?>




        <h3>Редактор категорий</h3><hr>
    <table class="category-table">

          <?php render($admincategoryedit) ?>

    </table>
    <hr>
    <form action="?add=1" method="post" name="form">
      <input type="text" name="categoryName" placeholder="Enter category name.."></input>
      <input type="submit" value="Add category name"></input> <br>
    </form>

<p><?php render('_footer') ?></p>
