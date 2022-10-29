<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XỬ LÝ PHÂN SỐ</title>






    <style type="text/css">
        table {

            color: black;

            background-color: gray;

        }

        table th {

            background-color: blue;

            font-style: vni-times;

            color: black;

        }
    </style>
</head>




















<body>
    <?php


    class PhanSo
    {
        protected $tuSo, $mauSo;
        public function setTuso($tuSo)
        {
            $this->tuSo = $tuSo;
        }
        public function getTuso()
        {
            return $this->tuSo;
        }
        public function setMauso($mauSo)
        {
            $this->mauSo = $mauSo;
        }
        public function getMauso()
        {
            return $this->mauSo;
        }
        public function congPS(PhanSo $a, PhanSo $b)
        {

            $c = new PhanSo();
            $c->setTuso(($a->getTuso() * $b->getMauso()) + ($a->getMauso() * $b->getTuso()));
            $c->setMauso($a->getMauso() * $b->getMauso());
            $kQ = $c->getTuso() / $c->getMauso();
            return $kQ;
        }
        public function truPS(PhanSo $a, PhanSo $b)
        {

            $c = new PhanSo();
            $c->setTuso(($a->getTuso() * $b->getMauso()) - ($a->getMauso() * $b->getTuso()));
            $c->setMauso($a->getMauso() * $b->getMauso());
            $kQ = $c->getTuso() / $c->getMauso();
            return $kQ;
        }
        public function nhanPS(PhanSo $a, PhanSo $b)
        {

            $c = new PhanSo();
            $c->setTuso(($a->getTuso() * $b->getTuso()));
            $c->setMauso($a->getMauso() * $b->getMauso());
            $kQ = $c->getTuso() / $c->getMauso();
            return $kQ;
        }
        public function chiaPS(PhanSo $a, PhanSo $b)
        {

            $c = new PhanSo();
            $c->setTuSo(($a->getTuso() * $b->getMauso()));
            $c->setMauso($a->getMauso() * $b->getTuso());
            $kQ = $c->getTuso() / $c->getMauso();
            return $kQ;
        }
    }
    function float2rat($n, $tolerance = 1.e-6)
    {
        $h1 = 1;
        $h2 = 0;
        $k1 = 0;
        $k2 = 1;
        $b = 1 / $n;
        do {
            $b = 1 / $b;
            $a = floor($b);
            $aux = $h1;
            $h1 = $a * $h1 + $h2;
            $h2 = $aux;
            $aux = $k1;
            $k1 = $a * $k1 + $k2;
            $k2 = $aux;
            $b = $b - $a;
        } while (abs($n - $h1 / $k1) > $n * $tolerance);

        return "$h1/$k1";
    }


    if (isset($_POST['tuSoA']))
        $tuSoA = $_POST['tuSoA'];
    else
        $tuSoA = null;
    if (isset($_POST['mauSoA']))
        $mauSoA = $_POST['mauSoA'];
    else
        $mauSoA = null;
    if (isset($_POST['tuSoB']))
        $tuSoB = $_POST['tuSoB'];
    else
        $tuSoB = null;
    if (isset($_POST['mauSoB']))
        $mauSoB = $_POST['mauSoB'];
    else
        $mauSoB = null;
    $ketQua = null;
    $checkNegativeA = 0;
    $checkNegativeB = 0;





    // execute form
    if (isset($_POST['tinh'])) {
        if (!is_numeric($tuSoA))
            $ketQua = "Tử số phân số thứ nhất phải là số nguyên";
        else
    if (!is_numeric($tuSoB))
            $ketQua = "Tử số phân số thứ hai phải là số nguyên";
        else
    if (!is_numeric($mauSoA))
            $ketQua = "Mẫu số phân số thứ nhất phải là số nguyên";
        else
    if (!is_numeric($mauSoB))
            $ketQua = "Mẫu số phân số thứ hai phải là số nguyên";
        else
    if ($tuSoA == 0)
            $ketQua = "Mẫu số phân số thứ nhất không được bằng 0";
        else {
            if ($mauSoB == 0)
                $ketQua = "Mẫu số phân số thứ hai không được bằng 0";
            else {
                if ($tuSoA < 0 || $mauSoA < 0) {
                    $checkNegativeA = 1;
                    abs($tuSoA);
                    abs($mauSoA);
                }
                if ($tuSoB < 0 || $mauSoB < 0) {
                    $checkNegativeB = 1;
                    abs($tuSoB);
                    abs($mauSoB);
                }
                $ps1 = new PhanSo();
                $ps1->setTuso($tuSoA);
                $ps1->setMauso($mauSoA);
                $ps2 = new PhanSo();
                $ps2->setTuso($tuSoB);
                $ps2->setMauso($mauSoB);
                $ps3 = new PhanSo();
                switch ($_POST['operator']) {
                    case 'Cộng':
                        $kQOperator = $ps3->congPS($ps1, $ps2);
                        break;
                    case 'Trừ':
                        $kQOperator = $ps3->truPS($ps1, $ps2);
                        break;
                    case 'Chia':
                        $kQOperator = $ps3->chiaPS($ps1, $ps2);
                        break;
                    case 'Nhân':
                        $kQOperator = $ps3->nhanPS($ps1, $ps2);
                        break;
                }
                if ($checkNegativeB + $checkNegativeA == 2) {
                    $ketQua = float2rat(abs($kQOperator));
                } else
        if ($kQOperator < 0)
                    $ketQua = "-" . float2rat(abs($kQOperator));
                else
                    $ketQua = float2rat($kQOperator);
            }
        }
    }
    ?>
























    <form action="" method="post">
        <table>
            <th colspan="3" align="center">CHỌN CÁC PHÉP TÍNH TRÊN PHÂN SỐ</th>
            <tr class="bgtr">
                <td>Nhập phân số thứ 1: </td>
                <td>Tử số:<input type="text" value="<?php echo $tuSoA ?>" name="tuSoA" required></td>
                <td>Mẫu số:<input type="text" value="<?php echo $mauSoA ?>" name="mauSoA" required></td>
            </tr>
            <tr>
                <td>Nhập phân số thứ 2: </td>
                <td>Tử số:<input type="text" value="<?php echo $tuSoB ?>" name="tuSoB" required></td>
                <td>Mẫu số:<input type="text" value="<?php echo $mauSoB ?>" name="mauSoB" required></td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <fieldset id="info_1">
                        <legend>Chọn phép tính</legend>
                        <table>
                            <tr>
                                <td><input type="radio" name="operator" id="" value="Cộng" <?php if (isset($_POST['operator']) && ($_POST['operator']) == "Cộng") echo 'checked="checked"' ?>required>Cộng </td>
                                <td><input type="radio" name="operator" id="" value="Trừ" <?php if (isset($_POST['operator']) && ($_POST['operator']) == "Trừ") echo 'checked="checked"' ?>required>Trừ </td>
                                <td><input type="radio" name="operator" id="" value="Nhân" <?php if (isset($_POST['operator']) && ($_POST['operator']) == "Nhân") echo 'checked="checked"' ?>required>Nhân </td>
                                <td><input type="radio" name="operator" id="" value="Chia" <?php if (isset($_POST['operator']) && ($_POST['operator']) == "Chia") echo 'checked="checked"' ?>required>Chia </td>
                            </tr>
                        </table>
                    </fieldset>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center"><button name="tinh" type="submit">Thực hiện</button></td>
            </tr>
            <tr>
                <td colspan="3" align="center"><?php echo $ketQua ?></td>
            </tr>
        </table>
    </form>
    <br><br>
    <?php
    include('../../backindex.html');
    ?>
</body>

</html>