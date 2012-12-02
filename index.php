<?php
require_once 'include/vars.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>

        <!-- This template was created by Mantis-a [http://www.mantisa.cz/]. For more templates visit Free website templates [http://www.mantisatemplates.com/]. -->

        <meta name="Description" content="..." />
        <meta name="Keywords" content="..." />
        <meta name="robots" content="all,follow" />
        <meta name="author" content="..." />
        <meta name="copyright" content="Mantis-a [http://www.mantisa.cz/]" />

        <meta http-equiv="Content-Script-Type" content="text/javascript" />

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <!-- CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen, projection, tv" />
        <link rel="stylesheet" href="css/style-print.css" type="text/css" media="print" />

        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

        <title>My personal website | Homepage</title>
    </head>

    <body>
        <p><?php require_once 'include/auth.php'; ?></p>
        <div id="wrapper">
            <div></div>
            <!-- Title -->
            <div class="title"> 
                <div class="title-top">
                    <div class="title-left">
                        <div class="title-right">
                            <div class="title-bottom">
                                <div class="title-top-left">
                                    <div class="title-bottom-left">
                                        <div class="title-top-right">
                                            <div class="title-bottom-right">
                                                <h1><a href="/" title="Go to homepage">Тестовый <span>сайт</span></a></h1>
                                                <p>Сайт находится в режиме разработки&hellip;</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Title end -->

            <hr class="noscreen" />

            <div class="content">

                <div class="column-left">

                    <a href="#skip-menu" class="hidden">Skip menu</a>
                    <ul class="menu"><?php require_once 'include/menu.php'; ?></ul>

                </div>

                <div id="skip-menu"></div>
                <div class="column-right">
                    <div class="box">
                        <div class="box-top"></div>
                        <div class="box-in">
                            <h2>Добро пожаловать!</h2>
                            <!-- <img src="uploads/6329.jpg" /> -->
                            
                            <p><?php echo '<pre> $_POST'; var_dump($_POST); echo '</pre>'; echo '<pre> $_GET'; var_dump($_GET); echo '</pre>' ?></p><p>На сайте реализована простая регистрация, авторизация, добавление и вывод новостей </p>
                            <p>Эта новость статическая и будет тут висеть, пока ее не удалить в HTML-коде. </p>
                        </div>
                        <div class="box-in">
                            <?php
                            include_once 'include/index_data.php';
                            ?>
                        </div>
                    </div>

                    <div class="box-bottom">

                        <hr class="noscreen" />

                        <div class="footer-info-left"><a href="http://vk.com/vladowski">Моя страничка ВК</a>. 2012 г. Все права защищены.©</div> 
                    </div>
                </div>

                <div class="cleaner">&nbsp;</div>
            </div>	
        </div>
    </body>
</html>