<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Thông tin sữa</title>
</head>
<style>
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

<body>
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


</body>

</html>