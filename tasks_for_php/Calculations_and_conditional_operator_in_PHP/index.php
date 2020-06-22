<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../../css/style.css" />
        <link rel="stylesheet" href="../../css/style-link.css" />
        <link rel="stylesheet" href="css/styles.css" />
        <title>Calculations and conditional operator in PHP</title>
    </head>
    <body>
        <div class="container">
            <h1>Calculations and conditional operator in PHP</h1>
            <div class="exit">
                <a href="../index.php">exit</a>
            </div>
            <ul class="older">
                <?php
                    $catalog = scandir('./');
                    //print_r($catalog);
                    $i = 0;
                    foreach ($catalog as $key => $value) {
                        $info = new SplFileInfo($value);
                        if ($value != 'index.php' && $info->getExtension() == 'php') {
                            $i++;
                            echo '<li>';
                            echo '<a href="'.$value.'"> '.mb_strtoupper(strtr(substr($value,0,-4),['_'=>' '])).'</a>';
                            echo '</li>';
                        } elseif ($info->getExtension() == '' && $value != '.' && $value != '..' && $value != 'css' && $value != 'js') {
                            echo '<li>';
                            echo '<a href="'.$value.'">'.mb_strtoupper(strtr($value,['_'=>' '])).'</a>';
                            echo '</li>';
                        }
                    }
                ?>
            </ul>
        </div>

    </body>
</html>
