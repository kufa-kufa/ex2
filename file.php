<?php
$user_name = $_REQUEST['user_name'];
$user_email = $_REQUEST['user_email'];
?>
<!DOCTYPE html>
<html>
    <body>
        <h2>Валидация на стороне сервера</h2>
        <p>Параметр Имя пользователя: <?php echo $user_name; ?>
            <?php
            if (strlen($user_name) < 3) {
                echo "<span style='color:red'> - валидация не пройдена!</span>";
            } else {
                echo "<span style='color:green'> - валидация  пройдена!</span>";
            }
            ?>                   
        </p>
        <p>Параметры Email пользователя: <?php echo $user_email; ?>
            <?php
            if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
                echo "<span style='color:red'> - валидация не пройдена!</span>";
            } else {
                echo "<span style='color:green'> - валидация  пройдена!</span>";
            }
            ?>    
        </p>         
    </body>
</html>


