<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">

        <link rel="stylesheet" href="../css/style.css" />

        <title>Task 3</title>
    </head>
    <body>
        <div class="container">
            <div class="exit">
                <a href="index.php">exit</a>
            </div>
            <h1>Найти сумму чисел, которые делятся на 5</h1>
            <p>
                Разработайте программу, которая из чисел 20 .. 45 находила те, которые делятся на 5 и найдите сумму этих чисел. Рекомендую использовать функцию fmod для определения "делится число" или "не делится".
            </p>
            <div>
                <form method="post">
                    <label>Число start:</label>
                    <input type="number" name="start" value="20"/>
                    <label>Число end:</label>
                    <input type="number" name="end" value="45"/>
                    <label>Число del:</label>
                    <input type="number" name="del" value="5"/>
                    <button name="form">Рассчитать</button>
                </form>
            </div>
            <?php
                if(isset($_POST['form'])) {
                    //echo $_POST['number'] . ' : ' . $_POST['var'] . '<br>';

                    $start = $_POST['start'];
                    $end = $_POST['end'];
                    $del = $_POST['del'];

                    echo '</br>Число start = '.$start.'</br>';
                    echo '</br>Число end = '.$end.'</br>';
                    echo '</br>Число del = '.$del.'</br></br>';

                    $sum = 0;
                    $col = 0;

                    for ($i = $start; $i <= $end; $i++) {
                        if (fmod($i, $del) == 0) {
                            $sum += $i;
                            $col++;
                        }
                    }

                    echo 'Сумма = '.$sum.'</br>';
                    echo 'Количество = '.$col.'</br>';
                } else {
                    echo 'Форма не отправлена';
                }
            ?>
        </div>
    </body>
</html>
