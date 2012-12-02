<?php
if (!$result_news = mysql_query("SELECT * FROM `news` ORDER BY `id` DESC"))
    echo 'не пашет, ошибка: ' . mysql_error();
if (isset($_GET['do']) && $_GET['id']) {
    mysql_query("DELETE FROM news WHERE id={$_GET['id']}");
    header('Location: ?page=index');
}
while ($rows = @mysql_fetch_assoc($result_news)):
    echo '<div style="clear:both"><h2>' . $rows['title'] . '</h2>';
    if (file_exists($rows['img'] . '_sml'))
        echo '<img id="img_news" src="' . $rows['img'] . '_sml' . '" style="float:left; margin-right:10px; margin-botoom:10px;" />';




    echo '<p>' . $rows['short_new'] . '</p>';
    echo '<p>Автор: ' . $rows['author'] . ' ';
    echo 'Дата: ' . $rows['date'] . ' ';
    ?>
    <a href="?page=index&do=delete&id=<?php echo $rows['id']; ?>">удалить</a>
    <?php
    echo '</p></div>';
endwhile;
?>
