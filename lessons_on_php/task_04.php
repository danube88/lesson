<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">

        <link rel="stylesheet" href="../css/style.css" />
        <link rel="stylesheet" href="../css/style-table.css" />

        <title>Task 4</title>
    </head>
    <body>
        <div class="container">
            <div class="exit">
                <a href="index.php">exit</a>
            </div>
            <h1>Найти максимальное и минимальное значение массива</h1>
            <p>
                Ваше задание — создать массив, наполнить его случайными значениями (можно использовать функцию rand), найти максимальное и минимальное значение массива и поменять их местами.
            </p>
            <?php
                for ($i=0; $i < rand(1,99); $i++) {
                    $array[] = rand(1,999);
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
                //echo '<pre>Массив:</br>';
                //print_r($array);
                //echo '</pre></br>';

                $min_key = array_search(min($array),$array);
                $max_key = array_search(max($array),$array);

                $min = $array[$min_key];
                $max = $array[$max_key];

                echo "индекс  = ".$min_key." min = ".$min;
                echo "</br>индекс  = ".$max_key." max = ".$max;

                $array[$min_key] = $max;
                $array[$max_key] = $min;

                //echo '</br></br><pre>Массив</br>';
                //print_r($array);
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
                    foreach ($array as $key => $value) {
                        if ($key == $min_key || $key == $max_key) {
                            echo '<tr style="background:#60e6c5"><td>'.$key.'</td><td>'.$value.'</td></tr>';
                            continue;
                        }
                        echo '<tr><td>'.$key.'</td><td>'.$value.'</td></tr>';
                    }
                ?>
            </table>
        </div>
    </body>
</html>
