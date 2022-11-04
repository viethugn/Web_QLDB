<?php
session_start(); //sử dụng để bắt đầu một session.
?>
<?php # Script 3.4 - index.php
$page_title = 'Welcome to this Site!';
include('../header.html');
?>
<title>Phép tính trên phân số</title>
<style>
    .container {
        background-color: #8ef1f0;
        padding: 30px 0 30px 0;
    }

    .container form>fieldset {
        margin: 0 auto;
    }

    fieldset {
        background-color: #eeeeee;
        width: 700px;
    }

    legend {
        background-color: gray;
        color: white;
        padding: 5px 10px;
    }

    .error {
        color: #FF0000;
    }

    input {
        margin: 8px;
        padding: 4px;
    }

    .radcen {
        margin-top: 25px;
    }
</style>
<div class="container">
    <?php include './xulypheptinh.php'; ?>
    <form action="" method="post">
        <fieldset>
            <legend>Phép tính trên phân số</legend>
            <table border='0'>

                <tr>
                    <td>
                        Nhập phân số thứ 1:
                        Tử số:
                        <input type="text" name="tusoa" value="<?php if (isset($_POST['tusoa'])) echo $_POST['tusoa']; ?>" />
                        <span class="error">*<br> <?php echo $tusoaErr; ?></span>
                    </td>
                    <td>
                        Mẫu số:
                        <input type="text" name="mausoa" value="<?php if (isset($_POST['mausoa'])) echo $_POST['mausoa']; ?>" />
                        <span class="error">*<br> <?php echo $mausoaErr; ?></span>
                    </td>
                </tr>
                <tr>
                    <td>
                        Nhập phân số thứ 2:
                        Tử số:
                        <input type="text" name="tusob" value="<?php if (isset($_POST['tusob'])) echo $_POST['tusob']; ?>" />
                        <span class="error">* <br><?php echo $tusobErr; ?></span>
                    </td>
                    <td>
                        Mẫu số:
                        <input type="text" name="mausob" value="<?php if (isset($_POST['mausob'])) echo $_POST['mausob']; ?>" />
                        <span class="error">* <br><?php echo $mausobErr; ?></span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <fieldset style="width: auto; height: 100px;"">
                    <legend>Chọn phép tính</legend>
                 
                        <input class=" radcen" type="radio" name="pheptinh" value="cong" <?php if (isset($_POST['pheptinh']) && ($_POST['pheptinh']) == "cong") echo 'checked' ?> />Cộng
                        <input class="radcen" type="radio" name="pheptinh" value="tru" <?php if (isset($_POST['pheptinh']) && ($_POST['pheptinh']) == "tru") echo 'checked' ?> />Trừ
                        <input class="radcen" type="radio" name="pheptinh" value="nhan" <?php if (isset($_POST['pheptinh']) && ($_POST['pheptinh']) == "nhan") echo 'checked' ?> />Nhân
                        <input class="radcen" type="radio" name="pheptinh" value="chia" <?php if (isset($_POST['pheptinh']) && ($_POST['pheptinh']) == "chia") echo 'checked' ?> />Chia
                        <span class="error">* <?php echo $pheptinhErr; ?></span>

        </fieldset>
        </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="ketqua" value="Kết quả" />
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <fieldset style="width: auto; height: 100px;" onchange="this.form.submit();">
                    <legend>KẾT QUẢ</legend>
                    <?php echo $ketqua; ?>
                </fieldset>
            </td>
        </tr>
        </table>
        </fieldset>
    </form>
</div>

<?php
include('../footer.html');
?>