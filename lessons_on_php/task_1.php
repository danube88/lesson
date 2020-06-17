<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">

        <link rel="stylesheet" href="../css/style.css" />

        <title>Task 1</title>
    </head>
    <body>
        <div class="container">
            <div class="exit">
                <a href="index.php">exit</a>
            </div>
            <h1>Найти сумму цифр числа</h1>
            <p>
                Вам нужно разработать программу, которая считала бы сумму цифр числа введенного пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1, 2, 3, т. е. 6.
                По желанию можете сделать проверку на корректность введения данных пользователем.
            </p>
            <div>
                <form method="post">
                    <label>Число:</label>
                    <input type="number" name="number"/>
                    <button name="form">Рассчитать</button>
                </form>
            </div>
            <?php
                if(isset($_POST['form'])) {

                    $number = $_POST['number'];

                    echo '</br>Число = '.$number.'</br>';

                    for ($i=0; $i < strlen($number); $i++) {
                        $sum += $number[$i];
                    }

                    echo 'Сумма цифр = '.$sum.'</br>';
                } else {
                    echo 'Форма не отправлена';
                }
            ?>
        </div>
    </body>
</html>
