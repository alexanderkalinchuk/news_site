<?php
/**
 * Created by PhpStorm.
 * User: Alexander
 * Date: 12.11.2017
 * Time: 15:13
 */
// Здесь реализуется список категорий для дальнейшего редактирования
class CategoryEditController{
    public function handleRequest(){

        $categoryedit = AdminCategoryEdit::categoryEdit(array());

        if(empty($categoryedit)){
            throw new Exception("Error in CategoryEditController");
        }

        render('admincategoryedit',array(
            'title'			=> 'CategoryEditor',
            'admincategoryedit'	=> $categoryedit
        ));
    }
}

class CategoryDelete {

  public function handleRequest(){
    $id = $_GET['delete'];
    $categoryDelete = AdminCategoryEdit::categoryDelete($id);

  }
}

class CategoryAdd {

  public function handleRequest(){
    $categoryName = $_POST['categoryName'];
    $categoryAdd = AdminCategoryEdit::categoryAdd($categoryName);

  }
}

  class NewsDelete {

    public function handleRequest(){
      $id = $_GET['delete-news'];
      $newsDelete = AdminCategoryEdit::newsDelete($id);
    }
  }
