<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">

        <link rel="stylesheet" href="../css/style.css" />

        <title>Task 7</title>
    </head>
    <body>
        <div class="container">
            <div class="exit">
                <a href="index.php">exit</a>
            </div>
            <h1>Определения положения стрелки часов</h1>
            <p>
                Разработайте программу, которая определяла количество прошедших часов по введенным пользователем градусах. Введенное число может быть от 0 до 360.
            </p>
            <div>
                <form method="post">
                    <label>Градус стрелки часов</label>
                    <input type="number" name="hour" placeholder="0-360" pattern="[0-9]{1-3}"/>
                    <button name="form">Получить время</button>
                </form>
            </div>
            <?php
                if(isset($_POST['form'])) {

                    $hour_g = (int) $_POST['hour'];

                    if ($hour_g >= 360 && $hour_g <= 0) {
                        echo "Введенное число может быть от 0 до 360.";
                    } else {

                        echo "Градусы - ".$hour_g."</br>";

                        $g_str_h = 360/12;

                        $hour = round($hour_g/$g_str_h, 2);
                        $minut = 0;
                        $second = 0;

                        if ($hour != round($hour)) {

                            $hour_n = floor($hour);

                            $minut = 60*($hour-$hour_n);

                            $minut_n = floor($minut);

                            $second = 60*($minut-$minut_n);

                            $second_n = round($second);

                            echo 'Время: '.$hour_n.':'.str_pad($minut_n, 2, '0', STR_PAD_LEFT).':'.str_pad($second_n, 2, '0', STR_PAD_LEFT);

                        } else {
                            echo 'Время: '.$hour.':'.str_pad($minut, 2, '0', STR_PAD_LEFT).':'.str_pad($second, 2, '0', STR_PAD_LEFT);
                        }
                    }
                } else {
                    echo 'Форма не отправлена';
                }
            ?>
        </div>
    </body>
</html>
