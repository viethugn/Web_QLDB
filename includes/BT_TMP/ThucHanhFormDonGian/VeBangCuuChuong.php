<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MinhPhi</title>
</head>
<body>
    <h2 style="color: red; text-align:center;">BẢNG CỬU CHƯƠNG</h2>
    <table border="6px;" style="margin: auto;   color:blue;     width: 800px;   height:auto;">
        <tr>
        <?php 
            for($i = 1; $i < 10; $i ++) {
                echo "<td>";
                for($j = 1; $j <= 10; $j ++) {
                    echo "$i x $j = " . ($i * $j);
                    echo "<br>";
                }
            echo "</td>";
            }
        ?>
        </tr>
    </table>
</body>
</html>