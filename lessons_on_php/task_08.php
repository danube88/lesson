<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">

        <link rel="stylesheet" href="../css/style.css" />

        <title>Task 8</title>
    </head>
    <body>
        <div class="container">
            <div class="exit">
                <a href="index.php">exit</a>
            </div>
            <h1>Рассчитать цвет сигнала светофора</h1>
            <p>
                Работа светофора запрограммирована таким образом: с начала каждого часа, в течении трех минут горит зеленый сигнал, следующие две минуты горит красный, дальше в течении трех минут - зеленый и т. д. Вам нужно разработать программу, которая по введенному числу определяла какого цвета сейчас горит сигнал.
            </p>
            <div>
                <form method="post">
                    <label>Минуты:</label>
                    <input type="number" name="min" placeholder="0-59" pattern="[0-9]{1-2}"/>
                    <button name="form">Сигнал светофора</button>
                </form>
            </div>
            <?php
                if(isset($_POST['form'])) {

                    $min = $_POST['min'];

                    if ($min == 0) {
                        $time = 1;
                    } else {
                        $time = $min % 5;
                    }

                    switch ($time) {
                        case 1:
                        case 2:
                        case 3:
                            echo "Green";
                            break;

                        case 4:
                        case 5:
                        case 0:
                            echo "Red";
                            break;
                    }

                } else {
                    echo 'Форма не отправлена';
                }
            ?>
        </div>
    </body>
</html>
