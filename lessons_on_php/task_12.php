<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">

        <link rel="stylesheet" href="../css/style.css" />

        <title>Task 12</title>
    </head>
    <body>
        <div class="container">
            <div class="exit">
                <a href="index.php">exit</a>
            </div>
            <h1>Вычислить квадраты чисел</h1>
            <p>
                Дано натуральное число n. Вычислить: 1<sup><small>1</small></sup> + 2<sup><small>2</small></sup> + .. + n<sup><small>n</small></sup>. Вывести на экран квадраты этих чисел, а также сумму квадратов этих чисел.
            </p>
            <div>
                <form method="post">
                    <label>Число:</label>
                    <input type="number" name="number" />
                    <button name="form">Расчитать</button>
                </form>
            </div>
            <?php
                if(isset($_POST['form'])) {

                    $n = $_POST['number'];
                    $sum = 0;
                    $cub = '';

                    echo "Введенное число: ".$n."</br>";

                    if ($n > 0) {

                        for ($i=1; $i <= $n; $i++) {
                            $cub .=  $i.'<sup><small>'.$i.'</sup></small>'.(($i != $n) ? ' + ' : ' = ');
                            $sum += pow($i,$i);
                        }

                        echo $cub.$sum;

                    } else {
                        echo 'Введенное число может быть только натуральным';
                    }
                } else {
                    echo 'Форма не отправлена';
                }
            ?>
        </div>
    </body>
</html>
