<?php
    $title = 'Task 1';
    $content = 'task on echo content';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title><?php echo $title ?></title>
    </head>
    <body>
        <h1><?php echo $title ?></h1>
        <div>
            <?php echo $content ?>
        </div>
    </body>
</html>
