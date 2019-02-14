<?php
$current_date_time = date("Y-m-d H:i:s");
if (empty($_COOKIE['visit_date_time'])) {
    setcookie('visit_date_time', $current_date_time, time() + 3600 * 24);
    setcookie('visit_counter', 1, time() + 36000 * 24);
    header('Location: session.php');
}
$last_visit = $_COOKIE['visit_date_time'];
$visit_counter = intval($_COOKIE['visit_counter']);
$visit_counter++;
setcookie('visit_date_time', $current_date_time, time() + 3600 * 24);
setcookie('visit_counter', $visit_counter, time() + 36000 * 24);
echo '<p>Сейчас:' . $current_date_time . '</p>';
echo '<p>Последний раз вы заходили:' . $last_visit . '</p>';
echo '<p>Всего посещений:' . $visit_counter . '</p>';
?>
