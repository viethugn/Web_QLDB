<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MinhPhi</title>
</head>
<body>
    <?php
        $a = rand(1,9);
        echo "Bảng cửu chương $a:<br>";
        for($i = 1; $i<=10; $i++)
        {
            echo "$a x $i = ". ($a*$i); echo "<br>";
        }
        




    ?>
</body>
</html>