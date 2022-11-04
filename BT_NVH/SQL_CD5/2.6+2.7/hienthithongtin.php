<?php # Script 3.4 - index.php
$page_title = 'Welcome to this Site!';
include('../header.html');
?>
<style>
    .container {
        background-color: #8ef1f0;
        padding: 30px 0 30px 0;
    }

    .row {
        margin: 1px;
        padding: 2px;
    }

    .col-8 {
        padding: 0px 15x;
    }

    img {
        filter: drop-shadow(0 0 5px blue);
        /* max-width: 100%;
        max-height: 100%; */
    }

    p {
        margin: 0;
    }

    .border {
        box-shadow: 1px 2px 5px #AAA;
    }

    .container {
        padding: 0;
    }

    .col-12,
    .col-4 {
        padding-right: 0;
        padding-left: 0;
    }

    .col-8 {
        padding-right: 0;
    }

    .textcolor {
        color: red;
        background-color: #94efcc;
        margin: 0 auto;
        display: block;
        /* padding-top: 5px; */
        font-family: cursive;
        height: 40px;
    }
</style>

<div class="container">
    <div class="row mx-auto" style="width: 850px;">
        <div class="container border border-dark">
            <div class="row gx-2">
                <div class="col-12">
                    <div class="border border-dark bg-info">
                        <h3 align="center" class="textcolor">
                            <?php echo $_GET['tensua'] . ' - ' . $_GET['tenhangsua']; ?>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row gx-2">
                <div class="col-4">
                    <div class="p-3 border border-dark">
                        <img src="<?php echo $_GET['hinh']; ?>" class="rounded mx-auto d-block img-fluid" alt="">
                    </div>
                </div>
                <div class="col-8">
                    <div class="p-3 border border-dark">
                        <p>
                            <i>
                                <b> Thành phần dinh dưỡng: </b>
                            </i>
                            <br>
                            <?php echo $_GET['tpdinhduong']; ?>
                        </p>
                        <p>
                            <i>
                                <b> Lợi ích: </b>
                            </i><br><?php echo $_GET['loiich']; ?>
                        </p>
                        <p align="right">
                            <i>
                                <b> Trọng lượng: </b>
                            </i>
                            <?php echo $_GET['trongluong']; ?>
                            <i>
                                <b> - Đơn giá: </b>
                            </i>
                            <?php echo $_GET['dongia']; ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <a href="./2.6+2.7listdangcotcolink.php">Quay lại</a>
            </div>
        </div>
    </div>
</div>

<?php
include('../footer.html');
?>