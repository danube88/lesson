<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">

        <link rel="stylesheet" href="../css/style.css" />

        <title>Task 2</title>
    </head>
    <body>
        <div class="container">
            <div class="exit">
                <a href="index.php">exit</a>
            </div>
            <h1>Проверить количество вхождения цифры в число</h1>
            <p>
                Вам нужно разработать программу, которая считала бы количество вхождений какой-нибуть выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе 442158755745 встречается 4 раза
            </p>

            <div>
                <form method="post">
                    <label>Число:</label>
                    <input type="number" name="number" value="442158755745"/>
                    <label>Цифра:</label>
                    <input type="number" name="var" value="5"/>
                    <button name="form">Рассчитать</button>
                </form>
            </div>
            <?php
                if(isset($_POST['form'])) {
                    //echo $_POST['number'] . ' : ' . $_POST['var'] . '<br>';

                    $number = $_POST['number'];

                    echo '</br>Число = '.$number.'</br>';

                    $var = $_POST['var'];

                    $col = 0;

                    for ($i=0; $i < strlen($number); $i++) {
                        if ($number[$i] == $var) {
                            $col++;
                        }
                    }
                    echo 'Количество вхождений числа '.$var.' - '.$col.'</br>';
                } else {
                    echo 'Форма не отправлена';
                }

                //$number = '4455668972315648953215055540578';
                $var = 0;

                echo '</br>Число = '.$number.'</br>';

                for ($j=0; $j <= 9; $j++) {
                    $var = $j;
                    $col = 0;
                    for ($i=0; $i < strlen($number); $i++) {
                        if ($number[$i] == $var) {
                            $col++;
                        }
                    }
                    echo 'Количество вхождений числа '.$var.' - '.$col.'</br>';
                }

            ?>
        </div>
    </body>
</html>
