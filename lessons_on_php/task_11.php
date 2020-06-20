<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">

        <link rel="stylesheet" href="../css/style.css" />

        <title>Task 11</title>
    </head>
    <body>
        <div class="container">
            <div class="exit">
                <a href="index.php">exit</a>
            </div>
            <h1>Определить название года за китайским календарем</h1>
            <p>
                Составить программу, которая бы по заданному числу выводила его название по китайском календаре. Заданное число не может быть меньше 1924.
            </p>
            <div>
                <form method="post">
                    <label>Год:</label>
                    <input type="number" name="year" placeholder="не меньше 1924" />
                    <button name="form">Название</button>
                </form>
            </div>
            <?php
                if(isset($_POST['form'])) {

                    $year = $_POST['year'];
                    $start = 1924;

                    echo $year." год ";

                    if ($year >= $start) {

                        $sign = ($year - $start) % 12;

                        switch ($sign) {
                            case 0:
                                echo 'Крысы';
                                break;
                            case 1:
                                echo 'Быка';
                                break;
                            case 2:
                                echo 'Тигра';
                                break;
                            case 3:
                                echo 'Кролика (кота)';
                                break;
                            case 4:
                                echo 'Дракона';
                                break;
                            case 5:
                                echo 'Змеи';
                                break;
                            case 6:
                                echo 'Лошади';
                                break;
                            case 7:
                                echo 'Овцы';
                                break;
                            case 8:
                                echo 'Обезьяны';
                                break;
                            case 9:
                                echo 'Петуха';
                                break;
                            case 10:
                                echo 'Собаки';
                                break;
                            case 11:
                                echo 'Свиньи';
                                break;
                        }

                        $element = ($year - $start) % 60;

                        $element = $element + 1;

                        $green  = [1,2,11,12,21,22,31,32,41,42,51,52];
                        $red    = [3,4,13,14,23,24,33,34,43,44,53,54];
                        $yellow = [5,6,15,16,25,26,35,36,45,46,55,56];
                        $white  = [7,8,17,18,27,28,37,38,47,48,57,58];
                        $black  = [9,10,19,20,29,30,39,40,49,50,59,60];

                        switch ($element) {
                            case (in_array($element,$green)):
                                echo ' - Дерево (зелёный)';
                                break;
                            case (in_array($element,$red)):
                                echo ' - Огонь (красный)';
                                break;
                            case (in_array($element,$yellow)):
                                echo ' - Земля (жёлтый)';
                                break;
                            case (in_array($element,$white)):
                                echo ' - Металл (белый)';
                                break;
                            case (in_array($element,$black)):
                                echo ' - Вода (чёрный, синий)';
                                break;
                        }
                    } else {
                        echo 'Введенное число не может быть меньше 1924';
                    }
                } else {
                    echo 'Форма не отправлена';
                }
            ?>
        </div>
    </body>
</html>
