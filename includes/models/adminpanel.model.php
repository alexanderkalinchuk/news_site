<?php
/**
 * Created by PhpStorm.
 * User: Alexander
 * Date: 12.11.2017
 * Time: 8:14
 */

class AdminCategoryEdit {

  public static function Panel(){

  }

    public static function categoryEdit($arr = array())
    {
        global $db;

        if (empty($arr)) {

            $st = $db->prepare("SELECT * FROM categories");

        } else {
            throw new Exception("Unsupported property!");
        }

        $st->execute($arr);

        return ($st->fetchAll(PDO::FETCH_CLASS, "AdminCategoryEdit"));
    }


    public static function categoryDelete($id)
    {
      global $db;

      if(!empty($id) and (Session::has('user') and Session::get('user') == 'admin')){
        $st = $db->prepare("DELETE FROM categories WHERE id=$id");
      } else {
        throw new Exception("Error in categotyDelete");
      }

      if( $st->execute($arr) ) {
        header('location: ./?categoryedit=1/');
      }
    }


    public static function categoryAdd($categoryName)
    {
      global $db;

      if(!empty($categoryName) and (Session::has('user') and Session::get('user') == 'admin')){
        $st = $db->prepare("INSERT INTO categories (`id`, `name`) VALUES ('"."', '$categoryName')");
      } else {
        throw new Exception("Error in categotyAdd");
      }
        if( $st->execute($arr) ) {
          header('location: ./?categoryedit=1/');
        }


    }

    public static function newsDelete($id)
    {
      global $db;

      if(!empty($id) and (Session::has('user') and Session::get('user') == 'admin')){
        $st = $db->prepare("DELETE FROM news WHERE id=$id");
      }else{
        throw new Exception("Error in newsDelete");
      }

      if( $st->execute($arr) ) {

      //здесь разбивается строка что вытащить часть ссылки страницы на которой мы находимя, и затем
      // после нажатия Delete новость, юзера перенаправил хэдэр на эту же страницу
        $url = $_SERVER["HTTP_REFERER"];
        $relocateUrl = explode('?', $url);
        $relocateUrl = $relocateUrl[1];

        header("location: ./?$relocateUrl");
      }
    }
}
