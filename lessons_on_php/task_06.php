<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">

        <link rel="stylesheet" href="../css/style.css" />

        <title>Task 6</title>
    </head>
    <body>
        <div class="container">
            <div class="exit">
                <a href="index.php">exit</a>
            </div>
            <h1>Создание сокращенного варианта ФИО</h1>
            <p>
                Вашим заданием будет создание сокращенного варианта ФИО. Например, вводим: Иванов Иван Петрович, а в результате должны получить: Иванов И. П.
            </p>
            <div>
                <form method="post">
                    <label>Ф.И.О.:</label>
                    <input type="text" name="fio" value="Иванов Иван Петрович"/>
                    <button name="form">Сократить</button>
                </form>
            </div>
            <?php
                if(isset($_POST['form'])) {

                    $fio = explode(" ",$_POST['fio']);

                    echo $fio[0].' '.mb_substr($fio[1],0,1,'UTF-8').'. '.mb_substr($fio[2],0,1,'UTF-8').'.';

                } else {
                    echo 'Форма не отправлена';
                }
            ?>
        </div>
    </body>
</html>
