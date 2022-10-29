<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">

<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Thông tin sữa</title>
</head>
<?php
// if(isset($_POST['xuly'])){
//     if($_FILES['ProductImg']['name']!=NULL)
//     {
//         move_uploaded_file($_FILES["ProductImg"]["tmp_name"],
//         "E:\\xampp\\img\\".$_FILES["ProductImg"]["name"]);
//         echo "<h3>Upload thành công</h3>";
//         echo "Name: " .$_FILES["ProductImg"]["name"]."<br>";
//         echo "Type: " .$_FILES["ProductImg"]["type"]."<br>";
//         echo "Size: " .($_FILES["ProductImg"]["size"]/1024)."Kb<br>";
//         echo "Temp. Stored in: ".$_FILES["ProductImg"]["tmp_name"];
//         }
//     else echo "Vui lòng chọn file upload!";
// }


if(isset($_FILES['ProductImg'])){
    echo "<pre>";
    var_dump($_FILES);
    echo "</pre>";
}
?>
    <body>
    <!-- --- uploadForm.html --- -->
    <form method="post" action="" enctype="multipart/form-data">
    Tên file: <input type="file" name ="ProductImg"><p>
    <input type="submit" value="Submit" name="xuly">
    </form>
    </body>
</html>