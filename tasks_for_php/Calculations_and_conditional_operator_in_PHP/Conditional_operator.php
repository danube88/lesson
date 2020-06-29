<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">

        <link rel="stylesheet" href="../../../css/style.css" />
        <link rel="stylesheet" href="css/styles.css" />
        <link rel="stylesheet" href="css/fraction-08.css" />

        <title>Conditional operator</title>
    </head>
    <body>
        <div class="container">
            <div class="exit">
                <a href="index.php">exit</a>
            </div>
            <h1>Условный оператор</h1>
            <p>
                01) Дано число. Если оно больше 10, то увеличьте его на 100, иначе уменьшите на 30.
            </p>
            <?php
                $a = rand(1,50);

                if ($a > 10) {
                    $res = $a + 100;
                    $text = "больше 10";
                } else {
                    $res = $a - 30;
                    $text = "меньше 10";
                }

                echo "<p><b>Дано:</b></br>";
                echo "a = $a</br>";
                echo "<b>Решение</b></br>";
                echo "$text = $res</p>";
            ?>
            <p>
                02) Дано натуральное число. Если оно четное, то уменьшите его в 2 раза, иначе увеличьте в 3 раза.
            </p>
            <?php
                $a = rand(1,100);

                if ($a % 2 == 0) {
                    $res = $a / 2;
                    $text = "четное";
                } else {
                    $res = $a * 3;
                    $text = "не четное";
                }

                echo "<p><b>Дано:</b></br>";
                echo "a = $a</br>";
                echo "<b>Решение</b></br>";
                echo "$text = $res</p>";
            ?>
            <p>
                03) Дано число. Если оно не меньше 50, то выведите квадрат этого числа, если же это число больше 10 и меньше 30, то выведите ноль, в остальных случаях выведите слово "Ошибка".
            </p>
            <?php
                $a = rand(1,100);

                if ($a > 50) {
                    $res = $a ** 2;
                    $text = "не меньше 50 = a<sup>2</sup> = $a<sup>2</sup> =";
                } elseif ($a > 10 && $a < 30) {
                    $res = 0;
                    $text = "больше 10 и меньше 30: a =";
                } else {
                    $res = 'Ошибка';
                    $text = "Msg";
                }

                echo "<p><b>Дано:</b></br>";
                echo "a = $a</br>";
                echo "<b>Решение</b></br>";
                echo "$text $res</p>";
            ?>
            <p>
                04) Дано два числа. Вывести наибольшее из них.
            </p>
            <?php
                $a = rand(1,100);
                $b = rand(1,100);

                if ($a > $b) {
                    $res = $a;
                    $text = "a > b =";
                } else {
                    $res = $b;
                    $text = "a < b =";
                }

                echo "<p><b>Дано:</b></br>";
                echo "a = $a</br>";
                echo "b = $b</br>";
                echo "<b>Решение</b></br>";
                echo "$text $res</p>";
            ?>
            <p>
                05) Дано два числа. Вывести 'Да', если они отличаются на 100, иначе вывести 'Нет'.
            </p>
            <?php
                $a = rand(1,999);
                $b = rand(1,999);

                $text = "a,b отличаются на 100 - ";

                if (abs($a - $b) == 100) {
                    $res = 'Да';
                } else {
                    $res = 'Нет';
                }

                echo "<p><b>Дано:</b></br>";
                echo "a = $a</br>";
                echo "b = $b</br>";
                echo "<b>Решение</b></br>";
                echo "$text $res</p>";
            ?>
            <p>
                06) Дано два числа. Вывести 'Да', если они отличаются не более чем на 20, иначе вывести 'Нет'.
            </p>
            <?php
                $a = rand(1,999);
                $b = rand(1,999);

                $text = "a,b отличаются не более чем на 20 - ";

                if (abs($a - $b) < 20) {
                    $res = 'Да';
                } else {
                    $res = 'Нет';
                }

                echo "<p><b>Дано:</b></br>";
                echo "a = $a</br>";
                echo "b = $b</br>";
                echo "<b>Решение</b></br>";
                echo "$text $res</p>";
            ?>
            <p>
                07) Дан номер месяца. Вывести название поры года (весна, лето и так далее) или слово 'Ошибка', если месяца с таким номером не существует.
            </p>
            <?php
                $month = rand(0,13);

                if ($month == 1 || $month == 2 || $month == 12) {
                    $res = 'Зима';
                } elseif ($month >= 3 && $month <= 5) {
                    $res = 'Весна';
                } elseif ($month >= 6 && $month <= 8) {
                    $res = 'Лето';
                } elseif ($month >= 9 && $month <= 11) {
                    $res = 'Осень';
                } else {
                    $res = 'Ошибка';
                }

                echo "<p><b>Дано:</b></br>";
                echo "Номер месяца = $month</br>";
                echo "<b>Решение</b></br>";
                echo "$res</p>";
            ?>
            <p>
                08) Вычислите значение выражения
                <b><span class="fra" id='fraction'>
                    <span class="fra" id='numerator'>
                        x<sup>2</sup>−4<span class="cond">&#8730;y-1</span>
                    </span>
                    <span class="fra" id='denominator'>
                        sin2x+|x|
                    </span>
                </span></b> . Перед вычислением проверить корректность значений переменных.
            </p>
            <?php
                $x = rand(-10,10);
                $y = rand(-10,10);

                $res = sin(2*$x)+abs($x);

                echo "<p><b>Дано:</b></br>";
                echo "x = $x</br>";
                echo "y = $y</br>";
                echo "<b>Решение</b></br></br>";

                if($res == 0 ){
                    echo "Error: X не должен равняться 0";
                } elseif($y <= 0) {
                    echo "Error: Y должен быть больше 0";
                } else {
                    $res0 = (($x**2)-4*sqrt($y-1))/$res;
                    echo "<span class=\"fra\" id='fraction'>
                        <span class=\"fra\" id='numerator'>
                            x<sup>2</sup>−4<span class=\"cond\">&#8730;y-1</span>
                        </span>
                        <span class=\"fra\" id='denominator'>
                            sin2x+|x|
                        </span>
                    </span>                 =   <span class=\"fra\" id='fraction'>
                        <span class=\"fra\" id='numerator'>
                            $x<sup>2</sup>−4<span class=\"cond\">&#8730;$y-1</span>
                        </span>
                        <span class=\"fra\" id='denominator'>
                            sin(2*$x)+|$x|
                        </span>
                    </span> = $res0</p>";
                }
            ?>
        </div>
    </body>
</html>
<?php
echo "
В данном трехзначном числе переставьте цифры так, чтобы новое число оказалось наибольшим из возможных.
Решите  уравнение ax2+bx+c=0.
Вычислите значение выражения max2(x,y,z)−3x⋅min(x,y,z)sin1+max(x,y−z)/min(y,z). Если вычисление невозможно, то сообщите об этом пользователю.";
