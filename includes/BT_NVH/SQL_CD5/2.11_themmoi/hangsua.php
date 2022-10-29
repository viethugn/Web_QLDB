<?php
// Ket noi CSDL hiển thị lên select option

$conn = mysqli_connect('localhost', 'root', '', 'qlbansua')
    or die('Could not connect to MySQL: ' . mysqli_connect_error());
mysqli_set_charset($conn, 'UTF8');

$sql = 'select Ma_hang_sua,Ten_hang_sua
	from hang_sua';
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) <> 0) {
    echo "<select name='hangsua' class='wid2'>";
    while ($rows = $result->fetch_assoc()) {
        echo "<option value='".$rows['Ma_hang_sua']."' <?php if (isset(".$_POST['hangsua'].") && ".$_POST['hangsua']." == '".$rows['Ma_hang_sua']."') echo 'selected'; ?>
        ".$rows['Ten_hang_sua']."</option>";
    }
    echo "</select>";
}

?>
