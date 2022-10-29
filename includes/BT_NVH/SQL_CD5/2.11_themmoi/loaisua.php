<?php
// Ket noi CSDL hiển thị lên select option

$conn = mysqli_connect('localhost', 'root', '', 'qlbansua')
    or die('Could not connect to MySQL: ' . mysqli_connect_error());
mysqli_set_charset($conn, 'UTF8');

$sql = 'select Ma_loai_sua,Ten_loai
	from loai_sua';
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) <> 0) {
    echo "<select name='loaisua' class='wid3'>";
    while ($rows = $result->fetch_assoc()) {
        echo "<option value='".$rows['Ma_loai_sua']."' <?php if (isset(".$_POST['loaisua'].") && ".$_POST['loaisua']." == '".$rows['Ma_loai_sua']."') echo 'selected'; ?>
        ".$rows['Ten_loai']."</option>";
    }
    echo "</select>";
}

?>