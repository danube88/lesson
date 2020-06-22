<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">

        <link rel="stylesheet" href="../../../css/style.css" />
        <link rel="stylesheet" href="css/styles.css" />

        <title>Simple arithmetic</title>
    </head>
    <body>
        <div class="container">
            <div class="exit">
                <a href="index.php">exit</a>
            </div>
            <h1>Простейшая арифметика</h1>
            <p>
                01) Даны два числа. Найти их сумму и произведение.
            </p>
            <?php
                $a = 4;
                $b = 2;

                $sum = $a + $b;
                $com = $a * $b;

                echo "<p><b>Дано:</b></br>";
                echo "a = $a</br>";
                echo "b = $b</br>";
                echo "<b>Решение</b></br>";
                echo "a + b = $a + $b = $sum</br>";
                echo "a * b = $a * $b = $com</p>";
            ?>
            <p>
                02) Даны два числа. Найдите сумму их квадратов.
            </p>
            <?php
                $a = 4;
                $b = 2;

                $res = ($a ** 2) + ($b ** 2);

                echo "<p><b>Дано:</b></br>";
                echo "a = $a</br>";
                echo "b = $b</br>";
                echo "<b>Решение</b></br>";
                echo "a<sup>2</sup> + b<sup>2</sup> = $a<sup>2</sup> + $b<sup>2</sup> = $res</p>";
            ?>
            <p>
                03) Даны три числа. Найдите их среднее арифметическое.
            </p>
            <?php
                $a = 4;
                $b = 2;
                $c = 6;

                $res = ($a + $b + $c)/3;

                echo "<p><b>Дано:</b></br>";
                echo "a = $a</br>";
                echo "b = $b</br>";
                echo "c = $c</br>";
                echo "<b>Решение</b></br>";
                echo "(a + b + c)/3 = ($a + $b + $c) / 3 = $res</p>";
            ?>
            <p>
                04) Даны три числа <b>x</b>,<strong>y</strong> и <strong>z</strong>. Найдите <strong>(x+1)<sup>4</sup>−2(z−2x<sup>2</sup>+y<sup>2</sup>)+<span>&#8730;|siny|</span></strong>
            </p>
            <?php
                $x = 3;
                $y = 5;
                $z = 2;

                $res = ($x + 1) ** 4;

                $res -= 2*($z - 2*($x**2) + ($y**2));

                $res += sqrt(abs(sin($y)));

                echo "<p><b>Дано:</b></br>";
                echo "x = $x</br>";
                echo "y = $y</br>";
                echo "z = $z</br>";
                echo "<b>Решение</b></br>";
                echo "(x+1)<sup>4</sup>−2(z−2x<sup>2</sup>+y<sup>2</sup>)+<span>&#8730;|siny|</span> = ($x + 1)<sup>4</sup> − 2($z − 2*$x<sup>2</sup> + $y<sup>2</sup>)+<span>&#8730;|sin$y|</span> = $res</p>";
            ?>
            <p>
                05) Даны три ненулевых числа. Найдите всевозможные результаты деления суммы двух из них на оставшееся третье число.
            </p>
            <?php
                $a = 8;
                $b = 6;
                $c = 4;

                $resC = ($a + $b) / $c;
                $resB = ($a + $c) / $b;
                $resA = ($b + $c) / $a;

                echo "<p><b>Дано:</b></br>";
                echo "a = $a</br>";
                echo "b = $b</br>";
                echo "c = $c</br>";
                echo "<b>Решение</b></br>";
                echo "(a + b) / c = ($a + $b) / $c = $resC</br>";
                echo "(a + c) / b = ($a + $c) / $b = $resB</br>";
                echo "(b + c) / a = ($b + $c) / $a = $resA</p>";
            ?>
            <p>
                06) Дано натуральное числа. Найдите остатки от деления этих чисел на 3 и на 5.
            </p>
            <?php
                $a = 8;

                $res3 = $a % 3;
                $res5 = $a % 5;

                echo "<p><b>Дано:</b></br>";
                echo "a = $a</br>";
                echo "<b>Решение</b></br>";
                echo "Остаток от деления числа $a на 3 = $res3</br>";
                echo "Остаток от деления числа $a на 5 = $res5</p>";
            ?>
            <p>
                07) Дано число. Увеличьте его на 30%, на 120%.
            </p>
            <?php
                $a = 35;

                $res30 = $a*1.3;
                $res120 = $a*2.2;

                echo "<p><b>Дано:</b></br>";
                echo "a = $a</br>";
                echo "<b>Решение</b></br>";
                echo "Увеличение $a на  30% = $res30</br>";
                echo "Увеличение $a на 120% = $res120</p>";
            ?>
            <p>
                08) Дано два числа. Найдите сумму 40% от первого числа и 84% от второго числа.
            </p>
            <?php
                $a = 15;
                $b = 25;

                $res = $a * 0.4 + $b * 0.84;

                echo "<p><b>Дано:</b></br>";
                echo "a = $a</br>";
                echo "b = $b</br>";
                echo "<b>Решение</b></br>";
                echo "Сумма 40% от $a и 84% от $b = $res</p>";
            ?>
            <p>
                09) Дано трехзначное числа. Найдите сумму его цифр.
            </p>
            <?php
                $a = '257';
                $res = 0;

                for ($i=0; $i < strlen($a); $i++) {
                    $res += $a[$i];
                }

                echo "<p><b>Дано:</b></br>";
                echo "a = $a</br>";
                echo "<b>Решение</b></br>";

                for ($i=0; $i < strlen($a); $i++) {
                    $text .= $a[$i].(($i < strlen($a)-1) ? " + " : " = ");
                }

                echo $text;
                echo " $res</p>";
            ?>
            <p>
                10) Дано трехзначное числа. Поменяйте среднюю цифру на ноль.
            </p>
            <?php
                $a = '356';
                $b = $a;

                $text = '';
                $i = round(strlen($a)/2,PHP_ROUND_HALF_DOWN);

                $a[$i] = 0;

                echo "<p><b>Дано:</b></br>";
                echo "a = $b</br>";
                echo "<b>Решение</b></br>";

                for ($i=0; $i < strlen($a); $i++) {
                    $text .= $a[$i];
                }

                echo "a = ".$text;
            ?>
            <p>
                11) Найдите число, полученное выписыванием в обратном порядке цифр данного трехзначного натурального числа.
            </p>
            <?php
                $a = '734';
                $b = $a;

                $text = '';

                echo "<p><b>Дано:</b></br>";
                echo "a = $b</br>";
                echo "<b>Решение</b></br>";

                for ($i = strlen($a); $i >= 0; $i--) {
                    $text .= $a[$i];
                }

                echo "a = ".$text;
            ?>
        </div>
    </body>
</html>
