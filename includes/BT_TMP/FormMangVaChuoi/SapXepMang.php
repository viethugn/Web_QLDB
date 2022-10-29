<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SẮP XẾP MẢNG</title>


    <style type="text/css">

    table{

        color: #ffff00;

        background-color: gray;     

    }

    table th{

        background-color: blue;

        font-style: vni-times;

        color: yellow;

    }

    </style>
</head>
<body>

<?php 

    function Hoan_Vi(&$a, &$b)
    {
        $tmp = $a;
        $a = $b;
        $b = $tmp;
    }

    function SapXep_Giam($arr)
    {
        for ($i = 0; $i < count($arr) - 1; $i++)
            for ($j = $i + 1; $j < count($arr); $j++)
            {
                if ($arr[$i] < $arr[$j]) {
                    Hoan_Vi( $arr[$j],$arr[$i] );
                }
            }
    return $arr;
    }

    function SapXep_Tang($arr)
    {
        for ($i = 0; $i < count($arr) - 1; $i++)
            for ($j = $i + 1; $j < count($arr); $j++) {
                if ($arr[$i] > $arr[$j]) {
                    Hoan_Vi($arr[$i] , $arr[$j]);
                }
            }
        return $arr;
    }

    
    if(isset($_POST['inp']))
        $inp = $_POST['inp'];
    else
        $inp = "";


    if(isset($_POST['tangDan']))
        $tangDan = $_POST['tangDan'];
    else
        $tangDan = '';


    if (isset($_POST['giamDan']))
        $giamDan = $_POST['giamDan'];
    else
        $giamDan = '';


    $arr = array();


    if (isset($_POST['tinh'])) 
    {
        $arr = explode(",", $inp);


        $tang = implode(" ", SapXep_Tang($arr));
        $giam = implode(" ", SapXep_Giam($arr));
        $fp = fopen('input_bai8.txt', 'w+');
        $data =  $inp . "\n" . $tang . "\n" . $giam . "\n";
        fwrite($fp, $data);
        fclose($fp);

        $readFile = fopen('input_bai8.txt', "r") or die("File $fp not found !!");
        $temp = fgets($readFile);
        $tangDan = fgets($readFile);
        $giamDan = fgets($readFile);
        fclose($readFile);
    }



?>
    






<form action="" method="post">
<table border="0" cellpadding="0">
    <th colspan="2"><h2>SẮP XẾP MẢNG TĂNG GIẢM</h2></th>

    <tr>
        <td>Nhập các phần tử:</td>
        <td><input  type="text" value="<?php echo $inp ?>" name="inp" required><b>(*)</b></td>
    </tr>


    <tr>
        <td></td>
        <td><input type="submit" name="tinh"  size="20" value="Sắp xếp tăng/giảm"/></td>
    </tr>


    </tr>
        <td>Mảng sau khi sắp xếp tăng:</td>
        <td><input type="text" name="tang" size= "70" disabled="disabled" value="<?php echo $tangDan;?>"/></td>
    </tr>

    </tr>
        <td>Mảng sau khi sắp xếp giảm:</td>
        <td><input type="text" name="giam" size= "70" disabled="disabled" value="<?php echo $giamDan;?>"/></td>
    </tr>

    <tr >
        <td colspan="2" align="center"><label>(Các phần tử trong mảng sẽ cách nhau bằng dấu ",")</label></td>
    </tr>
</table>
</form>
</body>
</html>