<?php
$main_menu[] = array('href' => 'index', 'name' => 'Главная', 'title' => '');
$main_menu[] = array('href' => 'add', 'name' => 'Добавить новость', 'title' => '');
$main_menu[] = array('href' => 'tmp', 'name' => 'Добавить таблицу', 'title' => '');
#$main_menu[] = array('href' => 'upload', 'name' => 'Загрузить файл', 'title' => '');

foreach ($main_menu as $main_menu_item) {
    $active = '';
    if (isset($_GET['page']) && ($_GET['page'] == $main_menu_item['href'])) {
        $active = 'class = "active" ';
    }
    ?>
    <li <?php echo @$active; ?> title="<?php echo $main_menu_item['title']; ?>">
        <a href="?page=<?php echo $main_menu_item['href']; ?>"><?php echo $main_menu_item['name']; ?></a>
    </li>
<?php } ?>