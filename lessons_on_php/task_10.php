<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">

        <link rel="stylesheet" href="../css/style.css" />

        <title>Task 10</title>
    </head>
    <body>
        <div class="container">
            <div class="exit">
                <a href="index.php">exit</a>
            </div>
            <h1>Определить достоинство игральных карт по номеру</h1>
            <p>
                Игральным картам присвоены следующие порядковые номера в зависимости от их достоинства: "валет" - 11, "дама" - 12, "король" - 13, "туз" - 14. Порядковые номера остальных карт соответствуют их названиям("семерка", "восмерка" и т. д.). Вам нужно разработать программу, которая выводила достоинство карты по заданному номеру, который будет вводит пользователь.
            </p>
            <div>
                <form method="post">
                    <label>Номер:</label>
                    <input type="number" name="number" placeholder="2-14" pattern="[2-14]{1-2}"/>
                    <button name="form">Карта</button>
                </form>
            </div>
            <?php
                if(isset($_POST['form'])) {

                    $number = $_POST['number'];

                    if ($number >= 2 && $number <= 14) {
                        switch ($number) {
                            case 2:
                                echo "Двойка - 2";
                                break;
                            case 3:
                                echo "Тройка - 3";
                                break;
                            case 4:
                                echo "Четверка - 4";
                                break;
                            case 5:
                                echo "Пятерка - 5";
                                break;
                            case 6:
                                echo "Шестерка - 6";
                                break;
                            case 7:
                                echo "Семерка - 7";
                                break;
                            case 8:
                                echo "Восьмерка - 8";
                                break;
                            case 9:
                                echo "Девятка - 9";
                                break;
                            case 10:
                                echo "Десятка - 10";
                                break;
                            case 11:
                                echo "Валет - 11";
                                break;
                            case 12:
                                echo "Дама - 12";
                                break;
                            case 13:
                                echo "Король - 13";
                                break;
                            case 14:
                                echo "Туз - 14";
                                break;
                        }
                    } else {
                        echo 'Введенное число может быть от 2 до 14';
                    }
                } else {
                    echo 'Форма не отправлена';
                }
            ?>
        </div>
    </body>
</html>
