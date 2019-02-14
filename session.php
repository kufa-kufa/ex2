<?php
$current_date_time = date("Y-m-d H:i:s");
if (empty($_COOKIE['visit_date_time'])) {
    putCookie(1);
    header('Location: session.php');
}
$last_visit = $_COOKIE['visit_date_time'];
$visit_counter = intval($_COOKIE['visit_counter']);
$visit_counter++;
putCookie($visit_counter);
echo '<p>Сейчас:' . $current_date_time . '</p>';
echo '<p>Последний раз вы заходили:' . $last_visit . '</p>';
echo '<p>Всего посещений:' . $visit_counter . '</p>';
function putCookie($status)
{    
    setcookie('visit_date_time', $current_date_time, time() + 3600 * 24);
    setcookie('visit_counter', $status, time() + 36000 * 24);    
}
?>



