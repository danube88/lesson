<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">

        <link rel="stylesheet" href="../css/style.css" />
        <link rel="stylesheet" href="../css/style-table.css" />

        <title>Task 5</title>
    </head>
    <body>
        <div class="container">
            <div class="exit">
                <a href="index.php">exit</a>
            </div>
            <h1>Работа с индексами, элементами массива</h1>
            <p>
                Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф-я rand). Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные индексы. После вывести на экран элементы, которые больше ноля и у которых не парный индекс.
            </p>
            <?php
                for ($i=0; $i < rand(1,99); $i++) {
                    $array[] = rand(1,100);
                }
            ?>
            <h3>Массив:</h3>
            <table>
                <tr>
                    <th>
                        index
                    </th>
                    <th>
                        value
                    </th>
                </tr>
                <?php
                    foreach ($array as $key => $value) {
                        echo '<tr><td>'.$key.'</td><td>'.$value.'</td></tr>';
                    }
                ?>
            </table>
            <?php
                $mult = 1;

                foreach ($array as $key => $value) {
                    if($value > 0 && $key % 2 == 0) {
                        $mult *= $value;
                    } elseif ($value > 0 && $key % 2 != 0) {
                        $new_array[$key] = $value;
                    }

                }

                echo "Произведение: ".$mult;

                //echo '</br></br><pre>';
                //print_r($new_array);
                //echo '</pre></br>';
            ?>
            <h3>Массив:</h3>
            <table>
                <tr>
                    <th>
                        index
                    </th>
                    <th>
                        value
                    </th>
                </tr>
                <?php
                    foreach ($new_array as $key => $value) {
                        echo '<tr><td>'.$key.'</td><td>'.$value.'</td></tr>';
                    }
                ?>
            </table>
        </div>
    </body>
</html>
