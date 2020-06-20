<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">

        <link rel="stylesheet" href="../css/style.css" />

        <title>Task 9</title>
    </head>
    <body>
        <div class="container">
            <div class="exit">
                <a href="index.php">exit</a>
            </div>
            <h1>Проверить високосный ли год</h1>
            <p>
                Вам нужно разработать программу, которая проверяла бы введенное пользователем число (год). Число может быть в диапазоне от 1 до 9999.
            </p>
            <div>
                <form method="post">
                    <label>Год:</label>
                    <input type="number" name="year" placeholder="1-9999" pattern="[1-9999]{1-4}"/>
                    <button name="form">Проверить</button>
                </form>
            </div>
            <?php
                if(isset($_POST['form'])) {

                    $year = $_POST['year'];

                    if ($year >= 1 && $year <= 9999) {
                        $type = $year % 4;

                        switch ($type) {
                            case 0:
                                echo $year." - Высокосный год";
                                break;

                            default:
                                echo $year." - Не высокосный год";
                                break;
                        }
                    } else {
                        echo 'Введенное число может быть от 1 до 9999';
                    }
                } else {
                    echo 'Форма не отправлена';
                }
            ?>
        </div>
    </body>
</html>
