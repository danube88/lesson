<?php
    $cols = 11;
    $rows = 11;
?>
<style>
    table { border: 0; }
    td { padding: 5px; text-align: center; }
</style>

<table>
<?php
for ($tr = 1; $tr <= $rows; $tr++)
{
    echo '<tr>';

    for($td = 1; $td <= $cols; $td++)
    {
        $background = '';

        if($cols === $rows)
        {
            if($td === $tr)
            {
                if(($cols % 2) and $td == ceil($cols / 2))
                    $background = 'chartreuse';
                else
                    $background = 'orange';
            }
            elseif($tr + $td === $cols + 1)
                $background = 'red';
        }

        if(!$background)
        {
            if($td === 1 or $td === $cols)
                $background = 'yellow';
            elseif($tr === 1 or $tr === $rows)
                $background = 'pink';
            else
                $background = 'white';
        }

        echo '<td style="background-color:', $background, '">', $tr * $td, '</td>';
    }
    echo "</tr>";
}
?>
</table>
