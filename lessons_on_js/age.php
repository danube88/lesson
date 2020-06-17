<!DOCTYPE html>
<html lang="ru" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <input type="number" id="year" placeholder="Year"/>
        <button type="button" id="calc">Button</button>

        <script type="text/javascript">

            document.getElementById('calc').onclick = function()
            {
                let year = document.getElementById('year').value;
                let now = new Date();
                let nowYear = now.getFullYear();
                let age = nowYear-year;

                if (age > 16 && year != "" && year >= (nowYear - 100)) {
                    console.log('Wellcow to the home!');
                } else {
                    console.log('Exit');
                }
            };

        </script>
    </body>
</html>
