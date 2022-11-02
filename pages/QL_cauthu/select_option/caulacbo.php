<?php 
// connect to database
include('../samples/conect_database.php');

$sql_clb = 'select * from cau_lac_bo';
$result = mysqli_query($conn, $sql_clb);

if (mysqli_num_rows($result) <> 0) {
    echo "<select name='caulacbo' class='wid2'>";
    while ($rows = $result->fetch_assoc()) {
        if ($rows['ma_clb'] == $caulacbo) {
            $select = "selected";
         }else{
            $select = "";
         }
        echo "<option value='".$rows['ma_clb']."' $select>".$rows['ten_clb']."</option>";
    }
    echo "</select>";
}
?>