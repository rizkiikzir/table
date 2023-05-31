<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>nilai</th>
            <th>perkalian</th>
        </tr>
        <?php
            $hasil = 0;          
                for ($i = 0; $i <= 10; $i += 2){
                    if ($hasil <= 100) {
                    $hasil = $i * $i;
                    echo "<tr>";
                    echo "<td>".$i."x".$i."</td>";
                    echo "<td>".$hasil."</td>";
                    echo "</tr>";
                    }
                }
        ?>
    </table>
</body>
</html>