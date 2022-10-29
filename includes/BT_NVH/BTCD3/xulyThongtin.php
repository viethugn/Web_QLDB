<?php
    session_start();//sử dụng để bắt đầu một session.
?>
<?php 
if (isset($hoten) && $hoten=='hoten')
    echo $_POST["hoten"];
if(isset($_POST['sdt'])){
    $sdt=$_POST['sdt'];
}
if(isset($_POST['sothuhai'])){
    $sothuhai=$_POST['sothuhai'];
}
    if(isset($_POST['gui']))
    {  
        
        if(empty($_POST["hoten"])){
            echo "<font color='red'>Bạn chưa nhập họ tên</font>";      
        }
        elseif (empty($_POST["diachi"])) {
            echo "<font color='red'>Chưa nhập địa chỉ!</font>";
        }
        elseif (empty($_POST["sdt"])) {
            echo "<font color='red'>Chưa nhập số điện thoại!</font>";
        }elseif (!(is_numeric($sdt) )) {
            echo "<font color='red'>Phải nhập số</font>";
        }elseif (empty($_POST["quoctich"])) {
            echo "<font color='red'>Bạn phải chọn quốc tịch!</font>";
        }
        // elseif(empty($_POST['monhoc'])) {    
        //     echo "<font color='red'>Bạn phải chọn môn đã học!</font>";
        // }
        else {
            //$pheptinh = test_input($_POST["pheptinh"]);
            $name=$_POST["hoten"];
            $sex=$_POST["gioitinh"];
            $address=$_POST["diachi"];
            $phone=$_POST["sdt"];
            $nationality=$_POST["quoctich"];//quốc tịch
            $note=$_POST["ghichu"];//ghi chú 
            $subjects=array(); 
            foreach($_POST['monhoc'] as $value){          
                $subjects[]=$value;
            }
            $_SESSION["name"]=$name;
            $_SESSION["sex"]=$sex;
            $_SESSION["address"]=$address;
            $_SESSION["phone"]=$phone;
            $_SESSION["nationality"]=$nationality;
            $_SESSION["note"]=$note;
            $_SESSION["subjects"]=$subjects;
            header("location: ./hienthiThongtin.php");
        }
        
                
    }   
    require './nhapThongtin.htm';  
?> 
