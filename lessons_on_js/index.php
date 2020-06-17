<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/style.css" />
        <link rel="stylesheet" href="../css/style-link.css" />
        <title>Completed Lessons on JS</title>
    </head>
    <body>
        <div class="container">
            <h1>Completed lessons on JS</h1>
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
                            echo '<a href="'.$value.'">Task '.$i.'</a>';
                            echo '</li>';
                        }
                    }
                ?>
            </ul>
        </div>

    </body>
</html>
