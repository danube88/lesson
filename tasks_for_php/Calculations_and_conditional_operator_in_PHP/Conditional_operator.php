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
            <p>
                09) В данном трехзначном числе переставьте цифры так, чтобы новое число оказалось наибольшим из возможных.
            </p>
            <?php
                $num = (string) rand(100,999);
                $a = $num;
                $size = strlen($num);

                for( $i = 0; $i < $size; $i++) {
                    $k = $i;
                    $x = $a[$i];
                    for( $j = $i + 1; $j < $size; $j++)
                        if (  $a[$j] > $x ) {
                            $k = $j;
                            $x = $a[$j];
                        }
                    $a[$k] = $a[$i];
                    $a[$i] = $x;
                }

                echo "<p><b>Дано:</b></br>";
                echo "Число = $num</br>";
                echo "<b>Решение</b></br>";
                echo "$a</p>";
            ?>
            <p>
                10) Решите  уравнение ax<sup>2</sup>+bx+c=0.
            </p>
            <?php
                $a = rand(-99,99);
                $b = rand(-99,99);
                $c = rand(-99,99);

                $d = ($b**2)-(4*($a*$c));

                if ($d > 0 && $a != 0) {
                    $x1 = round((-$b-sqrt($d))/(2*$a),3);
                    $x2 = round((-$b+sqrt($d))/(2*$a),3);
                    $res = "D>0, то имеем два действительных корня:</br>x<sub>1</sub> = $x1, x<sub>2</sub> = $x2";
                } elseif ($d == 0) {
                    $x = round((-$b)/(2*$a),3);
                    $res = "D=0, то имеем единственный корень (или два равных корня):</br> x = $x";
                } elseif ($d < 0) {
                    $res = "D<0, действительных корней нет";
                } else {
                    $res = "первый коэффициент \"a\" не должен = $a";
                }

                echo "<p><b>Дано:</b></br>";
                echo (($a == 0) ? "" : $a)."x<sup>2</sup>".(($b >= 0) ? "+" : "").$b."x".(($c >= 0) ? "+" : "").$c." = 0 </br>";
                echo "<b>Решение</b></br>";
                echo "$res</p>";
            ?>
            <p>
                11) Вычислите значение выражения<b><span class="fra" id='fraction'>
                    <span class="fra" id='numerator'>
                        max<sup>2</sup>(x,y,z)−3<sup>x</sup>*min(x,y,z)
                    </span>
                    <span class="fra" id='denominator' style="margin-left: -188px;">
                        sin1+max(x,y−z)/min(y,z)
                    </span>
                </span></b>. Если вычисление невозможно, то сообщите об этом пользователю..
            </p>
            <?php
                $x = rand(-9,9);
                $y = rand(-9,9);
                $z = rand(-9,9);

                echo "<p><b>Дано:</b></br>";
                echo "x = $x</br>";
                echo "y = $y</br>";
                echo "z = $z</br>";
                echo "<b>Решение</b></br></br>";

                if ($y == 0 || $z == 0) {
                    $res = "Error del 0";
                } else {
                    $res0 = sin(1)+(max($x,$y-$z)/min($y,$z));

                    if ($res0 != 0) {
                        $res1 = (max($x,$y,$z)**2)-(3**$x)*min($x,$y,$z);
                        $res = $res1/$res0;
                    } else {
                        $res = "Error del 0";
                    }
                }

                echo "<span class=\"fra\" id='fraction'>
                    <span class=\"fra\" id='numerator'>
                        max<sup>2</sup>($x,$y,$z)−3<sup>x</sup>*min($x,$y,$z)
                    </span>
                    <span class=\"fra\" id='denominator' style=\"margin-left: -187px;\">
                        sin1+max($x,$y\−$z)/min($y,$z)
                    </span>
                </span> = $res</p>";
            ?>
        </div>
    </body>
</html>
<?php
