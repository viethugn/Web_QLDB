<?php # Script 3.4 - index.php
$page_title = 'Welcome to this Site!';
include('../header.html');
?>
<style>
    .container {
        background-color: #8ef1f0;
        padding: 30px 0 30px 0;
    }

    .h2-mar {
        text-align: center;
        border: aqua;
    }

    .textcolor {
        color: red;
        background-color: #94efcc;
        margin: 0 auto;
        display: block;
        /* padding-top: 5px; */
        font-family: cursive;
    }

    .col {
        padding-left: 0;
        padding-right: 0;
    }

    form {
        padding: 5px;
    }

    th {
        padding-right: 20px;
    }

    tr td {
        padding-top: 10px;
    }

    .inp-sub {
        margin-top: 10px;
    }

    .inputfile {
        opacity: 0;
        overflow: hidden;
        position: absolute;
        z-index: -1;

    }

    .labelfile {
        width: 120px;
        height: 25px;
    }

    .inputfile+label {
        font-size: 1em;
        font-weight: 700;
        color: white;
        background-color: gray;
        display: inline-block;
        cursor: pointer;
    }

    .inputfile:focus+label,
    .inputfile+label:hover {
        background-color: #8b8bfa;
    }

    .wid1 {
        width: 400px;
    }

    .wid2 {
        width: 150px;
    }

    .wid3 {
        width: 120px;
    }

    select {
        background-color: transparent;
        padding: 0 1em 0 0;

    }

    .error {
        color: red;
    }

    textarea {
        resize: none;
    }

    div.jfilestyle.jfilestyle-theme-default input {
        border: 1px solid orange;
        margin-right: 10px;
        height: 30px;
        /* width: 400px; */
    }

    div.jfilestyle.jfilestyle-theme-default label {
        border-color: orange;
        background: orange;
        color: #fff;
        text-align: center;
        border-radius: 10px;
        height: 30px;
        font-size: 13px;
        text-align: center;
    }

    /* .bgr-inputfile{
        height: 30px;
        border: 1px solid orange;
        margin-right: 10px;
    } */
    div.jfilestyle label {
        padding: 7px;
        background-color: grey;
    }
</style>
<div class="container">
    <?php
    include_once("xuly.php")
    ?>
    <div class="container-fluid">
        <div class="row pt-5 mx-auto" style="width: 800px;">
            <div class="col border border-dark">
                <h3 align="center" class="col textcolor border border-dark">
                    THÊM MỚI SỮA
                </h3>
                <form action="" method="post" enctype="multipart/form-data">
                    <table>
                        <tr>
                            <th>Mã sữa:</th>
                            <td>
                                <input type="text" name="masua" value="<?php if (isset($_POST['masua'])) echo $_POST['masua']; ?>" />
                                <span class="error">* <br><?php echo $masuaErr; ?></span>
                            </td>
                        </tr>

                        <tr>
                            <th>Tên sữa:</th>
                            <td>
                                <input class="wid1" type="text" name="tensua" value="<?php if (isset($_POST['tensua'])) echo $_POST['tensua']; ?>" />
                                <span class="error">* <br><?php echo $tensuaErr; ?></span>
                            </td>
                        </tr>

                        <tr>
                            <th>Hãng sữa:</th>
                            <td>
                                <?php
                                include('hangsua.php');
                                ?>
                                <span class="error">* <br><?php echo $hangsuaErr; ?></span>
                            </td>
                        </tr>
                        <tr>
                            <th>Loại sữa:</th>
                            <td>
                                <?php
                                include('loaisua.php');
                                ?>
                                <span class="error">* <br><?php echo $loaisuaErr; ?></span>
                            </td>
                        </tr>
                        <tr>
                            <th>Trọng lượng:</th>
                            <td>
                                <input type="text" name="trongluong" value="<?php if (isset($_POST['trongluong'])) echo $_POST['trongluong']; ?>" /> (gr hoặc ml)
                                <span class="error">* <br><?php echo $trongluongErr; ?></span>
                            </td>
                        </tr>
                        <tr>
                            <th>Đơn giá:</th>
                            <td>
                                <input type="text" name="dongia" value="<?php if (isset($_POST['dongia'])) echo $_POST['dongia']; ?>" /> (VNĐ)
                                <span class="error">* <br><?php echo $dongiaErr; ?></span>
                            </td>
                        </tr>
                        <tr>
                            <th>Thành phân dinh dưỡng:</th>
                            <td>
                                <textarea cols="50" rows="2" name="tpdinhduong"></textarea>
                                <!-- <span class="error">* <br><?php echo $tpdinhduongErr; ?></span> -->
                            </td>
                        </tr>
                        <tr>
                            <th>Lợi ích:</th>
                            <td>
                                <textarea cols="50" rows="2" name="loiich"></textarea>
                                <!-- <span class="error">* <br><?php echo $loiichErr; ?></span> -->
                            </td>
                        </tr>
                        <tr>
                            <th>Hình ảnh:</th>
                            <td>
                                <div class="d-flex">
                                    <!-- <input class="wid1 bgr-inputfile" type="text" name="namefile" value="<?php $namefile = $_FILES['namefile']['name'];
                                                                                                                echo $namefile; ?>" disabled /> -->
                                    <input type="file" name="namefile" class="namefile" id="icondemo">
                                </div>
                            </td>
                        </tr>
                    </table>

                    <input class="row mx-auto inp-sub" type="submit" name="themmoi" value="Thêm mới" />

                </form>
            </div>
        </div>
        <div class="row pt-5 mx-auto" style="width: 800px;">
        
        </div>
    </div>
</div>

<script type="text/javascript" src="jquery-filestyle-master/src/jquery-filestyle.js"></script>
<script type="text/javascript" src="jquery-filestyle-master/src/jquery-filestyle.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(":file").jfilestyle({
            input: true,
            iconName: "icon-plus",
            text: "Browse...",
            inputSize: "400px",
            placeholder: "Choose your file image!"
        });

    });
</script>
<?php
include('../footer.html');
?>