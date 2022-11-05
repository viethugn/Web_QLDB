<?php # Script 3.4 - index.php
$page_title = 'Welcome to this Site!';
include('../header.html');
?>

<title>Quản lý nhân viên</title>


<style type="text/css">
    .container {
        background-color: #8ef1f0;
        padding: 30px 0 30px 0;
    }

    form>table {
        margin: 0 auto;
    }

    table {

        color: #ffff00;

        background-color: gray;

    }

    table,
    td,
    tr {
        padding: 10px;
    }

    table th {

        background-color: blue;

        font-style: vni-times;

        color: yellow;

    }
</style>
<?php

abstract class NhanVien
{
    protected $name, $gender, $dateWork, $coefficientsSalary, $numChildren;
    const basicSalary = 5000000;
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setGender($gender)
    {
        $this->gender = $gender;
    }
    public function getGender()
    {
        return $this->gender;
    }
    public function setDateWork($dateWork)
    {
        $this->dateWork = $dateWork;
    }
    public function getDateWork()
    {

        $yearsOfWork = explode("/", $this->dateWork);

        return date("Y") - $yearsOfWork[4];
    }
    public function setCoefficientsSalary($coefficientsSalary)
    {
        $this->coefficientsSalary = $coefficientsSalary;
    }
    public function getCoefficientsSalary()
    {
        return $this->coefficientsSalary;
    }
    public function setNumChildren($numChildren)
    {
        $this->numChildren = $numChildren;
    }
    public function getNumChildren()
    {
        return $this->numChildren;
    }
    abstract public function salaryCal();
    abstract public function subsidizeCal();
    abstract public function bonuseCal();
}

class VanPhong extends NhanVien
{
    private  $absent;
    const absentNorms = 4;
    const punishPrice = 50000;
    public function setAbsent($absent)
    {
        $this->absent = $absent;
    }
    public function getAbsent()
    {
        return  $this->absent;
    }
    public function punishCal()
    {
        if ($this->getAbsent() == null) {
            $this->absent = 0;
        } else
            if ($this->getAbsent() > self::absentNorms) {
            return $this->getAbsent() * self::punishPrice;
        } else
            return 0;
    }
    public function salaryCal()
    {
        return self::basicSalary * $this->getCoefficientsSalary() - $this->punishCal();
    }
    public function subsidizeCal()
    {
        if ($this->gender == "Nữ") {
            return 200000 * $this->getNumChildren() * 1.5;
        } else
            return 200000 * $this->getNumChildren();
    }
    public function bonuseCal()
    {
        return $this->getDateWork() * 1000000;
    }
}

class SanXuat extends NhanVien
{
    private $product;
    const productNorms = 50;
    const productPrice = 20000;
    public function setProduct($product)
    {
        $this->product = $product;
    }
    public function getProduct()
    {
        return  $this->product;
    }
    public function subsidizeCal()
    {
        return $this->getNumChildren() * 120000;
    }
    public function bonuseCal()
    {
        if ($this->getProduct() > self::productNorms) {
            return ($this->getDateWork() * 1000000) + (($this->getProduct() >= -self::productNorms) * self::productPrice * 0.03);
        } else
            return 0;
    }
    public function salaryCal()
    {
        return $this->getProduct() * self::productPrice + $this->bonuseCal();
    }
}

if (isset($_POST['name']))
    $name = $_POST['name'];
else
    $name = null;

if (isset($_POST['numChildren']))
    $numChildren = $_POST['numChildren'];
else
    $numChildren = null;

if (isset($_POST['birthday']))
    $birthday = $_POST['birthday'];
else
    $birthday = null;

if (isset($_POST['dateWork']))
    $dateWork = $_POST['dateWork'];
else
    $dateWork = null;

if (isset($_POST['coefficientsSalary']))
    $coefficientsSalary = $_POST['coefficientsSalary'];
else
    $coefficientsSalary = null;

if (isset($_POST['absent']))
    $absent = $_POST['absent'];
else
    $absent = null;

if (isset($_POST['product']))
    $product = $_POST['product'];
else
    $product = null;

if (isset($_POST['salary']))
    $salary = $_POST['salary'];
else
    $salary = null;

if (isset($_POST['subsidize']))
    $subsidize = $_POST['subsidize'];
else
    $subsidize = null;
if (isset($_POST['bonus']))
    $bonus = $_POST['bonus'];
else
    $bonus = null;

if (isset($_POST['punish']))
    $punish = $_POST['punish'];
else
    $punish = null;

if (isset($_POST['receiveSalary']))
    $receiveSalary = $_POST['receiveSalary'];
else
    $receiveSalary = null;

if (isset($_POST['tinh'])) {
    if (isset($_POST['staff']) && $_POST['staff'] == 'Văn phòng') {
        $vp = new VanPhong();
        $vp->setName($name);
        $vp->setGender($_POST['gender']);
        $vp->setDateWork($dateWork);
        $vp->setCoefficientsSalary($coefficientsSalary);
        $vp->setNumChildren($numChildren);
        $vp->setAbsent($absent);
        $salaryCal = ($vp->salaryCal($coefficientsSalary));
        $subsidizeCal = ($vp->subsidizeCal($numChildren));
        $bonuseCal = ($vp->bonuseCal());
        $punishCal = ($vp->punishCal());
        $salary = number_format($salaryCal) . " VNĐ";
        $subsidize = number_format($subsidizeCal) . " VNĐ";
        $bonus = number_format($bonuseCal) . " VNĐ";
        $punish = number_format($punishCal) . " VNĐ";
        $receiveSalary = number_format(($salaryCal + $bonuseCal + $subsidizeCal) - $punishCal) . " VNĐ";
    } else {
        if (isset($_POST['staff']) && $_POST['staff'] == 'Sản xuất') {
            $sx = new SanXuat();
            $sx->setName($name);
            $sx->setGender($_POST['gender']);
            $sx->setDateWork($dateWork);
            $sx->setCoefficientsSalary($coefficientsSalary);
            $sx->setNumChildren($numChildren);
            $sx->setProduct($product);
            $salaryCal = $sx->salaryCal($coefficientsSalary);
            $subsidizeCal = $sx->subsidizeCal($numChildren);
            $bonuseCal = $sx->bonuseCal();
            $salary = number_format($salaryCal) . " VNĐ";
            $subsidize = number_format($subsidizeCal) . " VNĐ";
            $bonus = number_format($bonuseCal) . " VNĐ";
            $punish =  "0 VNĐ";
            $receiveSalary = number_format($salaryCal + $bonuseCal + $subsidizeCal) . " VNĐ";
        }
    }
}
?>
<div class="container">
    <form action="" method="post">
        <table>

            <th colspan="4" align="center">QUẢN LÝ NHÂN VIÊN</th>

            <tr>
                <td>Họ và tên: </td>
                <td><input type="text" value="<?php echo $name ?>" name="name" required></td>
                <td>Số con: </td>
                <td><input type="text" value="<?php echo $numChildren ?>" name="numChildren" required></td>
            </tr>
            <tr>
                <td>Ngày sinh: </td>
                <td><input type="text" value="<?php echo $birthday ?>" name="birthday" required></td>
                <td>Ngày vào làm</td>
                <td><input type="text" value="<?php echo $dateWork ?>" name="dateWork" required></td>
            </tr>
            <tr>
                <td>Giới tính: </td>
                <td><input class="inpRadio" type="radio" value="Nam" name="gender" <?php if (isset($_POST['gender']) && ($_POST['gender']) == "Nam") echo 'checked="checked"' ?> required>Nam<input class="inpRadio" type="radio" value="Nữ" name="gender" id="Nu" <?php if (isset($_POST['gender']) && ($_POST['gender']) == "Nữ") echo 'checked="checked"' ?> required>Nữ</td>
                <td>Hệ số lương:</td>
                <td><input type="text" value="<?php echo $coefficientsSalary ?>" name="coefficientsSalary" required></td>
            </tr>
            <tr>
                <td>Loại nhân viên: </td>
                <td><input type="radio" name="staff" value="Văn phòng" <?php if (isset($_POST['staff']) && ($_POST['staff']) == "Văn phòng") echo 'checked="checked"' ?> required>Văn phòng</td>
                <td><input type="radio" name="staff" value="Sản xuất" <?php if (isset($_POST['staff']) && ($_POST['staff']) == "Sản xuất") echo 'checked="checked"' ?> required>Sản xuất</td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>Số ngày vắng: <input type="text" value="<?php echo $absent ?>" name="absent" required></td>
                <td>Số sản phẩm: </td>
                <td><input type="text" value="<?php echo $product ?>" name="product" required></td>
            </tr>
            <tr">
                <td colspan="4" align="center"></button><button name="tinh" type="submit">Tính lương</button></button></td>
                </tr>
                <tr>
                    <td>Tiền lương: </td>
                    <td><input value="<?php echo $salary ?>" type="text" name="salary" disabled></td>
                    <td>Tiền trợ cấp: </td>
                    <td><input value="<?php echo $subsidize ?>" type="text" name="subsidize" disabled></td>
                </tr>
                <tr>
                    <td>Tiền thưởng: </td>
                    <td><input value="<?php echo $bonus ?>" type="text" name="bonus" disabled></td>
                    <td>Tiền phạt: </td>
                    <td><input value="<?php echo $punish ?>" type="text" name="punish" disabled></td>
                </tr>
                <tr>
                    <td colspan="4" align="center">Thực lãnh: <input value="<?php echo $receiveSalary ?>" type="text" name="receiveSalary" disabled></td>
                </tr>
        </table>
    </form>
</div>
<?php
include('../footer.html');
?>