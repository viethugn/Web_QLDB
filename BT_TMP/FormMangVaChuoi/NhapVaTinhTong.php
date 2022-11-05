<?php 
$page_title = 'Welcome to this Site!';
include('../header.html');
?>
<style>
  
.container{
        background-color: #8ef1f0;
        padding: 30px 0 30px 0;
    }
   form>table{
        margin: 0 auto;
    }
 tr,td{
            padding: 10px;
        }
</style>
  <?php
  $fp = @fopen("input_bai4.txt", "w+");
  if (!$fp) {
    echo 'Mở file không thành công';
  } else {
    function tongdayso($arr)
    {
      $S = 0;
      $n = count($arr);
      for ($i = 0; $i < $n; $i++) {
        $S = $S + $arr[$i];
      }
      return $S;
    }
    $str = "";
    $tong = "";
    if (isset($_POST['tinh'])) {
      $str = $_POST['mang'];
      fwrite($fp, $str);
      $arr = explode(",", $str);
      $tong = tongdayso($arr);
    }
  }
  fclose($fp);
  ?>


  <div class="container">
  <form action="" method="post">
    <table>
      <thead>
        <th colspan="2" align="center">
          <h3>Nhập và tính trên dãy số</h3>
        </th>
      </thead>
      <tr>
        <td>Nhập dãy số:</td>
        <td>
          <input type="text" name="mang" value="<?php echo $str; ?>"> (*)
        </td>
      </tr>
      <tr>
        <td></td>
        <td>
          <input type="submit" value="Tổng dãy số" name="tinh">
        </td>
      </tr>
      <tr>
        <td>Tổng dãy số:</td>
        <td>
          <input type="text" style="background: lightgreen;" disabled name="ketqua" value="<?php echo $tong; ?>">
        </td>
      </tr>
      <tr>
        <td colspan="2" align="center"><label>(Các số được nhập cách nhau bằng dấu ",")</label></td>
      </tr>
    </table>
  </form>
  </div>

<?php
include('../footer.html');
?>