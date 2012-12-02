<h2>Добавление новостей на сайт</h2>
<?php
include_once '/../imgResize.php';
if (isset($_COOKIE['u_name'])) {
    if (isset($_POST['db_ok'])) {
//        echo '<pre>'; var_dump($_POST); echo '</pre>';
        @mkdir("uploads", 0777);
        @copy(@$_FILES['file']['tmp_name'], "uploads/" . @basename(@$_FILES['file']['name']));
        $file = "uploads/" . $_FILES["file"]["name"];
        if (!file_exists($_FILES["file"]["name"])) {
            img_resize($file, $file . '_sml', 200, 150);
        }
        $title = $_POST['title'];
        $author = $_COOKIE['u_name'];
        $d = getdate();
        $date = $d['year'].$d['mon'].$d['mday'];
        $short_new = $_POST['short_new'];
        $res = mysql_query("INSERT INTO `news` (title, author, date, img, short_new) VALUES ('$title','$author','$date','$file', '$short_new') ");
        if ($res) {
            header('Location: ?index');
        } else {
            echo 'не пашет: ' . mysql_error() . '<br />';
        }
    }
    ?> 
    <form method="POST" enctype="multipart/form-data">
        <label>Тема:</label>
        <input type="text" name="title" placeholder="" title="" style="width: 455px;"/><br />
        <label>Текст новости:</label>
        <textarea name="short_new" cols="60" rows="10" title="" ></textarea><br />
        <label>Загрузить картинку </label>
        <input type="file" name="file" />
        <input type="submit" value="Добавить" name="db_ok"/>
    </form>
    <?php
} else {
    echo 'Только авторизованные пользователи могут добавлять новости.';
}
?>
