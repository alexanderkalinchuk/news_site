<!DOCTYPE html>
<html>
	<head>

		<title><?php echo formatTitle($title)?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <link rel="stylesheet" href="http://alexk.in.ua/newssite/style/dropdownmenu.css">
        <link rel="stylesheet" href="http://alexk.in.ua/newssite/style/style.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        <script src="http://alexk.in.ua/newssite/js/workWithNews.js"></script>

	</head>

    <body>
<?php if (require_once "includes/main.php"){
echo 'yes';}else {echo 'no'};?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="..\">Daily Planet</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="..\">Главная</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Новости</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        О нас
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="?feedback=us">Обратная связь</a></li>
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Вакансии</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">FrontEnd developer</a></li>
                                <li><a class="dropdown-item" href="#">Another submenu action</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item active">
                <!-- проверка на авторизацию -->
                    <?php
                        session_start();
                        require_once 'includes\auth\session.class.php';

                        if (Session::has('user')) : ?>
                            <a class="nav-link" href="includes\auth\logout.php">Login out, <?=Session::get('user'); ?></a>
                        <?php else : ?>
                            <a class="nav-link" href="includes\auth\reg.php">Авторизация</a>
                        <?php endif; ?>
                </li>
                <li class="nav-item active">
                    <!-- админ панель -->
                    <?php
                        if (Session::has('user') and Session::get('user') == 'admin') : ?>
                            <a class="nav-link" href="?adminpanel=1">Админ панель</a>
                        <?php endif; ?>
                </li>
            </ul>
        </div>
    </nav>

    <!--    JS для dropdown меню-->
    <script src="http://alexk.in.ua/newssite/js/dropdownmenu.js"></script>







</html>
