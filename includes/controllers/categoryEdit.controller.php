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

        $category = AdminPanel::categoryEdit(array());

        if(empty($category)){
            throw new Exception("ошибка в CategoryEditController");
        }

        render('categoryeditor',array(
            'title'			=> 'CategoryEditor',
            'categories'	=> categoryedit
        ));
    }
}
?>
