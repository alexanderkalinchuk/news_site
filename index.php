<?php

require_once "includes/main.php";
require_once 'includes/auth/session.class.php';
session_start();

try {

	if($_GET['category']){
		$c = new CategoryController();
	}
	else if(empty($_GET)){
		$c = new HomeController();
	}
	else if($_GET['id']){
	    $c = new NewsPageController();
    }
    else if($_GET['feedback']){
        $c = new FeedbackController();
    }
    else if($_GET['tag']){
        $c = new TagsController();
    }
    else if($_GET['adminpanel'] and (Session::has('user') and Session::get('user') == 'admin')){
        $c = new AdminController();
    }
    else if($_GET['categoryedit'] and (Session::has('user') and Session::get('user') == 'admin')){
        $c = new CategoryEditController();
    }

	else throw new Exception('Wrong page!');
	
	$c->handleRequest();

}
catch(Exception $e) {
	// сообщение об ошибке
	render('error',array('message'=>$e->getMessage()));
}

?>