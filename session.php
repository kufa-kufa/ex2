<?php

class Cookie {

    private $current_date_time;
    private $visit_counter;
    private $last_visit;

    public function __construct() {
        $this->current_date_time = date("Y-m-d H:i:s");
    }

    public function disp() {

        if (empty($_COOKIE['visit_date_time'])) {
            $this->putCookie();
            header('Location: session.php');
        }
        $this->last_visit = $_COOKIE['visit_date_time'];
        $this->visit_counter = intval($_COOKIE['visit_counter']);
        $this->visit_counter++;
        $this->putCookie($this->visit_counter);
        echo '<p>Сейчас:' . $this->current_date_time . '</p>';
        echo '<p>Последний раз вы заходили:' . $this->last_visit . '</p>';
        echo '<p>Всего посещений:' . $this->visit_counter . '</p>';
    }

    public function putCookie($param = 1) {

        setcookie('visit_date_time', $this->current_date_time, time() + 3600 * 24);
        setcookie('visit_counter', $param, time() + 36000 * 24);
    }

}

$cook = new Cookie;
$cook->disp();
?>



