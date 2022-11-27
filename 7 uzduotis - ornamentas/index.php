<html>
<head>

</head>
<body>
<table>
    <tbody>
    <?php for ($j = 0; $j < 7; $j++) {?>
        <tr>
            <?php for ($i = 0; $i < 7; $i++) {
                $displayColor = 'yellow';
                if ($i == $j || $i + $j === 6) {
                    $displayColor = 'green';
                } ?>
                <td style="width: 100px; height: 100px; background-color: <?= $displayColor; ?>; border: solid 3px red"></td>
            <?php } ?>
        </tr>
    <?php } ?>
    </tbody>
</table>


</body>
</html>

<?php
