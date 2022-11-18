<?php 
// connect to database
include('../samples/conect_database.php');

$sql_qg = 'select * from quoc_gia';
$result = mysqli_query($conn, $sql_qg);


if (mysqli_num_rows($result) <> 0) {
    echo "<select name='quocgia' class='form-select form-control form-control-lg'>";
    while ($rows = $result->fetch_assoc()) {
        //nếu có mã quốc gia trùng
        if ($rows['ma_qg'] == (isset($quocgia) ? $quocgia : "")) {
            $select = "selected";
         }else{
            $select = "";
         }
        echo "<option value='".$rows['ma_qg']."' $select>".$rows['ten_qg']."</option>";
    }
    echo "</select>";
}
?>