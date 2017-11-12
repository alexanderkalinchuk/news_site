<?php
/**
 * Created by PhpStorm.
 * User: Alexander
 * Date: 12.11.2017
 * Time: 8:11
 */

class AdminController{
    public static function handleRequest(){
        $adminmenu = AdminPanel::Panel();

        render('adminpanel', array(
                'title' => 'this is admin panel',
                'adminmenu' => $adminmenu
            )
        );
    }


}