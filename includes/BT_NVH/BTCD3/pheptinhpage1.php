<?php
    session_start();//sử dụng để bắt đầu một session.
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Trang web thực hiện phép tính trên 2 số</title>
    <style type="text/css">

        body{  
            
            background-color: #a3a3a3;
        }
        table{
            background: #ffd94d;
            border: 0 solid yellow;
        }
        thead{
            background: #fff14d;    
        }
        td {
            color: blue;
        }
        h3{
            font-family: verdana;
            text-align: center;
            /* text-anchor: middle; */
            color: #ff8100;
            font-size: medium;
        }
    </style>
</head>
<body>
<?php 
 $pheptinh= "";
$flag=0;

    if(isset($_POST['tinh']))
    {  
        
        if(empty($_POST["pheptinh"])){
            echo "<font color='red'  text-align: center;>Bạn chưa chọn phép tính!</font>";
            $flag=1;
        }
        //check số thứ nhất
        if($_POST["sothunhat"] === '')
        {
            echo "<font color='red'  align='center'>Chưa nhập số thứ nhất!</font>";
            $flag=1;
        }
        elseif(!is_numeric($_POST['sothunhat']))
        {
            echo "<font color='red' align='center'>Cần nhập số ô một!</font>";
            $flag=1;
        }
        //check số thứ 2
        if($_POST["sothuhai"] === '')
        {
            echo "<font color='red'  align='center'>Chưa nhập số thứ hai!</font>";
            $flag=1;
        }
        elseif(!is_numeric($_POST['sothuhai']))
        {
            echo "<font color='red' align='center'>Cần nhập số ô hai!</font>";
            $flag=1;
        }
       
        if($flag != 1) 
        {
            $pheptinh = test_input($_POST["pheptinh"]);
            $caculate=$_POST["pheptinh"];
            $number1=$_POST["sothunhat"];
            $number2=$_POST["sothuhai"];
            $_SESSION["number1"]=$number1;
            $_SESSION["number2"]=$number2;
            $_SESSION["caculate"]=$caculate;
            header("location: ./pheptinhpage2.php");
        }
        
                
    }     
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }  
?>

<form  action="" method="post">
<table>
    <thead>
        <th colspan="2" align="center"><h3>Phép tính trên hai số</h3></th>
    </thead>
    <tr>
        <td>Chọn phép tính</td>
        <td>
            <input type="radio" name="pheptinh" value="cong" <?php if (isset($pheptinh) && $pheptinh=='cong') echo 'checked';?>>Cộng
            <input type="radio" name="pheptinh" value="tru" <?php if (isset($pheptinh) && $pheptinh=='tru') echo 'checked';?>>Trừ
            <input type="radio" name="pheptinh" value="nhan" <?php if (isset($pheptinh) && $pheptinh=='nhan') echo 'checked';?>>Nhân
            <input type="radio" name="pheptinh" value="chia" <?php if (isset($pheptinh) && $pheptinh=='chia') echo 'checked';?>>Chia
        </td>
    </tr>
    <tr>
        <td>Số thứ nhất:</td>
        <td>
            <input type="text" name="sothunhat" value="<?php if(isset($_POST['sothunhat'])) echo $_POST['sothunhat'];?>"/>
        </td>
    </tr>
    <tr>
        <td>Số thứ hai:</td>
        <td>
            <input type="text" name="sothuhai" value="<?php if(isset($_POST['sothuhai'])) echo $_POST['sothuhai'];?>"/>
        </td>
    </tr>

    <tr>
        <td colspan="2" align="center">
            <input type="submit" value="Tính" name="tinh" />
        </td>
    </tr>
</table>
</form>
<?php
	include('../../backindex.html');
?>
</body>
</html>