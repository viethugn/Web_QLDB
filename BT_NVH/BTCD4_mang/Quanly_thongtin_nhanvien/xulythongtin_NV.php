<?php 
//Lớp Nhân viên gồm có các thuộc tính: họ tên, giới tính, 
//ngày vào làm, hệ số lương, số con, lương căn bản và các 
//phương thức: tính tiền lương, tính trợ cấp, tính tiền thưởng 
//(trong đó lương cơ bản là hằng số).
abstract class NhanVien{
	protected $hoten, $ngayvaolam, $gioitinh, $hesoluong, $socon;
    const luongcb = 1490000; // setup lương cơ bản 2tr5
    public function __construct($hoten,$ngayvaolam,$gioitinh,$hesoluong,$socon) {
        $this->hoten = $hoten;
        $this->ngayvaolam = $ngayvaolam;
        $this->gioitinh = $gioitinh;
        $this->hesoluong = $hesoluong;
        $this->socon = $socon;
    }

	public function getHoten(){
		return $this->hoten;
	}
	public function getHesoluong(){
		return $this->hesoluong;
	}
    public function getGioitinh(){
		return $this->gioitinh;
	}
    public function getNgayvaolam(){
		return $this->ngayvaolam;
	}
	public function getSocon(){
		return $this->socon;
	}
	abstract public function tinh_tro_cap_NV($gioitinh,$socon);
	abstract public function tinh_tien_luong_NV($hesoluong,$day_vang);
    //tiền thưởng=số năm làm việc * 1.000.000 đồng.
    public function tinh_tien_thuong_NV($nambatdau,$namhientai){
        return ($namhientai-$nambatdau) * 1000000;
    }

}

class VanPhong extends NhanVien{
    //thêm các thuộc tính: số ngày vắng, định mức vắng, đơn giá phạt
    protected $songay_vang;
    public function setSongayvang($songay_vang){
		$this->songay_vang = $songay_vang;
	}
	public function getSongayvang(){
		return $this->songay_vang;
	}
    //tự setup value
    const  dinhmuc_vang = 3, dongia_phat = 100000;

     // Tính tiền phạt
     public function tien_phat_NVVP($day_vang){
        if($day_vang > self::dinhmuc_vang){
            //tiền phạt=số ngày vắng*định mức phạt;
            return $day_vang * self::dongia_phat;
        }
        return 0;
    }
    //Tính trợ cấp
	public function tinh_tro_cap_NV($gioitinh,$socon){
        if($gioitinh == 'nu')
        {
            return 200000 * $socon * 1.5;
        }
        else{
            return 200000 * $socon;
        }
	}
    // Tính tiền lương
	public function tinh_tien_luong_NV($hesoluong,$day_vang){
        //tiền lương= lương cơ bản* hệ số lương – tiền phạt.
        return self::luongcb * $hesoluong - self::tien_phat_NVVP($day_vang);
	}
   
}


class SanXuat extends NhanVien{
    //thêm các thuộc tính: số sản phẩm, định mức sản phẩm, đơn giá sản phẩm
    protected $so_sp;
    public function setSosp($so_sp){
		$this->so_sp = $so_sp;
	}
	public function getSosp(){
		return $this->so_sp;
	}
     //tự setup value
     const  dinhmuc_sp = 3,dongia_sp = 25000;
     //Tinh tiền thưởng nhân viên sản xuất
    public function tinh_tien_thuong_NVSX()
    {
        //tiền thưởng = (số sản phẩm - định mức sản phẩm) * đơn giá sản phẩm *0.03;
        if(self::getSosp() > self::dinhmuc_sp){
            return (self::getSosp() - self::dinhmuc_sp) * self::dongia_sp;
        }
        return 0;
    }
    // tính trợ cấp cho nhân viên sản xuất
    public function tinh_tro_cap_NV($gioitinh,$socon){
        //tiền trợ cấp = số con * 120.000đồng;
        return $socon * 120000;
	}
	public function tinh_tien_luong_NV($hesoluong,$day_vang){
        //lương=(số sản phẩm * đơn giá sản phẩm) + tiền thưởng.
        return (self::getSosp() * self::dongia_sp) + self::tinh_tien_thuong_NVSX();
	}
}
$hotenErr=$soconErr=$ngaysinhErr=$ngayvaolamErr=$gioitinhErr=$loainhanvienErr=$hesoluongErr=$songayvangErr=$sosanphamErr="";
$tienluong=$tienphat=$trocap=$tienthuong=$thuclinh="";
$disabled_so_nv="";
$disabled_so_sp="";
//hàm check format date
function isValid_date($date, $format = 'd/m/Y'){
    $dt = DateTime::createFromFormat($format, $date);
    return $dt && $dt->format($format) === $date;
  }

// đặt biến flag làm cờ để check các sự kiện đã kt xog chưa
$flag=0;
//xử lý validation
if(isset($_POST['tinhluong']))
{
    $date_ngaysinh = $_POST['ngaysinh'];
    $date_ngayvaolam = $_POST['ngayvaolam'];
    //-----------------------
    $arr_ngaysinh = explode("/",$date_ngaysinh);
    $brr_ngayvaolam =explode("/",$date_ngayvaolam);
    //setup day month year ngay sinh
    $d_ns = $y_ns = $m_ns = "";
    if(isset($arr_ngaysinh[0])) { $d_ns = $arr_ngaysinh[0]; }
    if(isset($arr_ngaysinh[1])) { $m_ns = $arr_ngaysinh[1]; }
    if(isset($arr_ngaysinh[2])) { $y_ns = $arr_ngaysinh[2]; }
    //setup day month year ngay vào làm
    $d_nvl = $y_nvl= $m_nvl = "";
    if(isset($brr_ngayvaolam[0])) { $d_nvl = $brr_ngayvaolam[0]; }
    if(isset($brr_ngayvaolam[1])) { $m_nvl = $brr_ngayvaolam[1]; }
    if(isset($brr_ngayvaolam[2])) { $y_nvl = $brr_ngayvaolam[2]; }
    //ngày sinh
    if(empty($_POST['ngaysinh']))
    {
        $ngaysinhErr="Bạn chưa nhập ngày sinh!";
        $flag=1;
    }
    elseif(!isValid_date("$d_ns/$m_ns/$y_ns"))
    {
        $ngaysinhErr="Cần nhập đúng định dạng ngày tháng năm sinh!";
        $flag=1;
    }
    //ngày vào làm
    if(empty($_POST['ngayvaolam']))
    {
        $ngayvaolamErr="Bạn chưa nhập ngày vào làm!";
        $flag=1;
    }
    elseif(!isValid_date("$d_nvl/$m_nvl/$y_nvl"))
    {
        $ngayvaolamErr="Cần nhập đúng định dạng ngày tháng năm vào làm!";
        $flag=1;
    }
    //họ tên
    if(empty($_POST['hoten']))
    {
        $hotenErr="Bạn chưa nhập họ tên!";
        $flag=1;
    }
    //số con
    if($_POST["socon"] === '')
    {
        $soconErr="Bạn chưa nhập số con!";
        $flag=1;
    }
    elseif(!is_numeric($_POST['socon']))
    {
        $soconErr="Cần nhập số!";
        $flag=1;
    }
    //giới tính
    if(empty($_POST['gioitinh']))
    {
        $gioitinhErr="Bạn cần chọn giới tính!";
        $flag=1;
    }
    //hệ số lương
    if($_POST['hesoluong'] === '')
    {
        $hesoluongErr="Bạn cần nhập hệ số lương!";
        $flag=1;
    }
    elseif(!is_numeric($_POST['hesoluong']))
    {
        $hesoluongErr="Cần nhập số!";
        $flag=1;
    }
    //loại nhân viên
    if(empty($_POST['nv']))
    {
        $loainhanvienErr="Bạn cần chọn loại nhân viên!";
        $flag=1;
    }
}

//click chọn loại nhân viên nào thì sẽ xử lý disabled cho text còn lại
if(isset($_POST['nv'])&&($_POST['nv']) == "vp")
{   
    $disabled_so_sp = "disabled";
    $disabled_so_nv = "";
      //check validate số ngày vắng
    if(isset($_POST['tinhluong']))
    {
        if ($_POST["songayvang"] === '')
        {
            $songayvangErr="Bạn cần nhập số ngày vắng!";
            $flag=1;
        }elseif(!is_numeric($_POST['songayvang']))
        {
            $songayvangErr="Cần nhập số!";
            $flag=1;
        }
    }
   
}

if(isset($_POST['nv'])&&($_POST['nv']) == "sx")
{
    $disabled_so_nv = "disabled";
    $disabled_so_sp = "";
    //check validate số sản phẩm
    if(isset($_POST['tinhluong']))
    {
        if ($_POST["sosanpham"] === '')
        {
            $sosanphamErr="Bạn cần nhập số sản phẩm!";
            $flag=1;
        }elseif(!is_numeric($_POST['sosanpham']))
        {
            $sosanphamErr="Cần nhập số!";
            $flag=1;
        }
    }
    
       
}
if(isset($_POST['tinhluong'])){
    if($flag == 0)//các ô đã được nhập xử lý tính toán cho nhân viên
    {
        $date = getdate();
        //nhân viên sản xuất
        if(isset($_POST['nv'])&&($_POST['nv']) == "sx"){
            $sanxuat= new SanXuat($_POST["hoten"],$_POST["ngayvaolam"],$_POST["gioitinh"],$_POST["hesoluong"],$_POST["socon"]);
            $sanxuat->setSosp($_POST["sosanpham"]); // số sản phẩm của nhân viên sản xuất
            $tienthuong = $sanxuat -> tinh_tien_thuong_NVSX();
         
            $tienluong = $sanxuat -> tinh_tien_luong_NV(0,0);
            $trocap = $sanxuat -> tinh_tro_cap_NV($_POST['gioitinh'],$sanxuat->getSocon());
            $tienphat = 0;
            //thực lĩnh = (tiền lương+ tiền thưởng + trợ cấp) - tiền phạt
            $thuclinh = ( $tienluong + $tienthuong + $trocap ) - $tienphat;
        } 
        //nhân viên văn phòng
        if(isset($_POST['nv'])&&($_POST['nv']) == "vp"){
            $vanphong= new VanPhong($_POST["hoten"],$_POST["ngayvaolam"],$_POST["gioitinh"],$_POST["hesoluong"],$_POST["socon"]);
            $vanphong->setSongayvang($_POST["songayvang"]); // số ngày vắng của nhân viên văn phòng
            $tienluong = $vanphong -> tinh_tien_luong_NV($_POST["hesoluong"],$vanphong->getSongayvang());
            if(isset($brr_ngayvaolam[2])) 
            {
                $tienthuong = $vanphong -> tinh_tien_thuong_NV($brr_ngayvaolam[2],$date['year']);
            }
            $trocap = $vanphong -> tinh_tro_cap_NV($_POST['gioitinh'],$vanphong->getSocon());
            $tienphat = $vanphong -> tien_phat_NVVP($vanphong ->getSongayvang());
            //thực lĩnh = (tiền lương+ tiền thưởng + trợ cấp) - tiền phạt
            $thuclinh = ( $tienluong + $trocap ) - $tienphat;   
        } 
    }
}


?>