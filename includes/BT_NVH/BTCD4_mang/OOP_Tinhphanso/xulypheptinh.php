<?php 

abstract class PhepTinh{
	protected $tuso1, $mauso1, $tuso2, $mauso2;
    public function __construct($tuso1, $mauso1, $tuso2, $mauso2) {
        $this->tuso1 = $tuso1;
        $this->mauso1 = $mauso1;
        $this->tuso2 = $tuso2;
        $this->mauso2 = $mauso2;
    }
	public function getTuso1(){
		return $this->tuso1;
	}
	public function getMauso1(){
		return $this->mauso1;
	}
    public function getTuso2(){
		return $this->tuso2;
	}
    public function getMauso2(){
		return $this->mauso2;
	}
	abstract public function Phep_Cong($cong);
	abstract public function Phep_Tru($tru);
    abstract public function Phep_Nhan($nhan);
	abstract public function Phep_Chia($chia);
}



class Phepcong extends PhepTinh{
    protected $mausochung;
    public function setMausochung($mausochung){
		$this->mausochung = $mausochung;
	}
    public function getMausochung(){
		return $this->mausochung;
	}
    //----------------------
    function USCLN($a, $b){
        if($b == 0) return $a;
        return self::USCLN($b, $a%$b);
    }
    
    function abs($a){
        return $a > 0 ? $a : -$a;
    }
    //------------------------------
   
	public function Phep_Cong($cong){
        if($cong == 'cong')
        {
            //Tìm ước số chung của giá trị tuyệt đối giữa tử và mẫu
            $usc1 = abs(self::USCLN(abs(self::getTuso1()), abs(self::getMauso1())));
            $usc2 = abs(self::USCLN(abs(self::getTuso2()), abs(self::getMauso2())));
            $a1 = self::getTuso1()/$usc1;//tử phân số 1
            $b1 = self::getMauso1()/$usc1;//mẫu phân số 1
            $a2 = self::getTuso2()/$usc2;//tử phân số 2
            $b2 = self::getMauso2()/$usc2;//mẫu phân số 2
            if(self::getMauso1() == self::getMauso2()){
                //rút gọn kết quả
                //abs(($b2 * $a1)+($b1 * $a2)) tử số, abs($b1) mẫu số
                $usc_kq = abs(self::USCLN(abs(($b2 * $a1)+($b1 * $a2)), abs($b1)));
                $tuso_kq = (($a1 * $b2)+($b1 * $a2)) / $usc_kq;
                $mauso_kq = $b1 / $usc_kq;
                //đã check validate mẫu số nhỏ hơn 0
                self::setMausochung($mauso_kq);
                return $tuso_kq; 
            }
            else{
                //rút gọn kết quả
                //abs(($b2 * $a1)-($b1 * $a2)) tử số, bs($b1 * $b2) mẫu số
                $usc_kq = abs(self::USCLN(abs(($b2 * $a1)+($b1 * $a2)), abs($b1 * $b2)));
                $tuso_kq = (($a1 * $b2)+($b1 * $a2)) / $usc_kq;
                $mauso_kq = ($b1 * $b2) / $usc_kq;
                //đã check validate mẫu số nhỏ hơn 0
                self::setMausochung($mauso_kq);
                return $tuso_kq; 
            }
        }

    }
	public function Phep_Tru($tru){
        return null;
    }
    public function Phep_Nhan($nhan){
        return null;
    }
	public function Phep_Chia($chia){
        return null;
    }
}

class Pheptru extends PhepTinh{
    protected $mausochung;
    public function setMausochung($mausochung){
		$this->mausochung = $mausochung;
	}
    public function getMausochung(){
		return $this->mausochung;
	}
    //----------------------
    function USCLN($a, $b){
        if($b == 0) return $a;
        return self::USCLN($b, $a%$b);
    }
    
    function abs($a){
        return $a > 0 ? $a : -$a;
    }
    //------------------------------
    public function Phep_Cong($cong){
        return null;
    }
	public function Phep_Tru($tru){
        if($tru == 'tru')
        {
            //Tìm ước số chung của giá trị tuyệt đối giữa tử và mẫu
            $usc1 = abs(self::USCLN(abs(self::getTuso1()), abs(self::getMauso1())));
            $usc2 = abs(self::USCLN(abs(self::getTuso2()), abs(self::getMauso2())));
            $a1 = self::getTuso1()/$usc1;//tử phân số 1
            $b1 = self::getMauso1()/$usc1;//mẫu phân số 1
            $a2 = self::getTuso2()/$usc2;//tử phân số 2
            $b2 = self::getMauso2()/$usc2;//mẫu phân số 2
            if(self::getMauso1() == self::getMauso2()){
                //rút gọn kết quả
                //abs(($b2 * $a1)-($b1 * $a2)) tử số, abs($b1) mẫu số
                $usc_kq = abs(self::USCLN(abs(($a1 * $b2)-($b1 * $a2)), abs($b1)));
                $tuso_kq = (($a1 * $b2)-($b1 * $a2)) / $usc_kq;
                $mauso_kq = $b1 / $usc_kq;
                //đã check validate mẫu số nhỏ hơn 0
                self::setMausochung($mauso_kq);
                return $tuso_kq; 
            }
            else{
                 //rút gọn kết quả
                //abs(($b2 * $a1)-($b1 * $a2)) tử số, abs($b1 * $b2) mẫu số
                $usc_kq = abs(self::USCLN(abs(($a1 * $b2)-($b1 * $a2)), abs($b1 * $b2)));
                $tuso_kq = (($a1 * $b2)-($b1 * $a2)) / $usc_kq;
                $mauso_kq = ($b1 * $b2) / $usc_kq;
                //đã check validate mẫu số nhỏ hơn 0
                self::setMausochung($mauso_kq);
                return $tuso_kq; 
            }
        }
    }
    public function Phep_Nhan($nhan){
        return null;
    }
	public function Phep_Chia($chia){
        return null;
    }
}

class Phepnhan extends PhepTinh{
    protected $mausochung;
    public function setMausochung($mausochung){
		$this->mausochung = $mausochung;
	}
    public function getMausochung(){
		return $this->mausochung;
	}
    //----------------------
    function USCLN($a, $b){
        if($b == 0) return $a;
        return self::USCLN($b, $a%$b);
    }
    
    function abs($a){
        return $a > 0 ? $a : -$a;
    }
    //------------------------------
	public function Phep_Cong($cong){
        return null;
    }
	public function Phep_Tru($tru){
        return null;
    }
    public function Phep_Nhan($nhan){
        if($nhan == 'nhan')
        {
             //Tìm ước số chung của giá trị tuyệt đối giữa tử và mẫu
             $usc1 = abs(self::USCLN(abs(self::getTuso1()), abs(self::getMauso1())));
             $usc2 = abs(self::USCLN(abs(self::getTuso2()), abs(self::getMauso2())));
             $a1 = self::getTuso1()/$usc1;//tử phân số 1
             $b1 = self::getMauso1()/$usc1;//mẫu phân số 1
             $a2 = self::getTuso2()/$usc2;//tử phân số 2
             $b2 = self::getMauso2()/$usc2;//mẫu phân số 2
            //rút gọn kết quả
            //abs($a1* $a2) tử số, abs($b1 * $a1) mẫu số
            $usc_kq = abs(self::USCLN(abs($a1* $a2), abs($b1 * $b2)));
            $tuso_kq=($a1* $a2) / $usc_kq;
            $mauso_kq = ($b1 * $b2) / $usc_kq;
            //đã check validate mẫu số nhỏ hơn 0
            self::setMausochung($mauso_kq);
            return $tuso_kq; 
        }
    }
	public function Phep_Chia($chia){
        return null;
    }
}


class Phepchia extends PhepTinh{
    protected $mausochung;
    public function setMausochung($mausochung){
		$this->mausochung = $mausochung;
	}
    public function getMausochung(){
		return $this->mausochung;
	}
     //----------------------
     function USCLN($a, $b){
        if($b == 0) return $a;
        return self::USCLN($b, $a%$b);
    }
    
    function abs($a){
        return $a > 0 ? $a : -$a;
    }
    //------------------------------
    public function Phep_Cong($cong){
        return null;
    }
	public function Phep_Tru($tru){
        return null;
    }
    public function Phep_Nhan($nhan){
        return null;
    }
	public function Phep_Chia($chia){
        if($chia == 'chia')
        {
            //Tìm ước số chung của giá trị tuyệt đối giữa tử và mẫu
            $usc1 = abs(self::USCLN(abs(self::getTuso1()), abs(self::getMauso1())));
            $usc2 = abs(self::USCLN(abs(self::getTuso2()), abs(self::getMauso2())));
            $a1 = self::getTuso1()/$usc1;//tử phân số 1
            $b1 = self::getMauso1()/$usc1;//mẫu phân số 1
            $a2 = self::getTuso2()/$usc2;//tử phân số 2
            $b2 = self::getMauso2()/$usc2;//mẫu phân số 2
            //rút gọn kết quả
            //abs($a1* $b2) tử số, abs($b1 * $a1) mẫu số
            $usc_kq = abs(self::USCLN(abs($a1 * $b2), abs($b1 * $a2)));
            $tuso_kq=($a1 * $b2) / $usc_kq;
            $mauso_kq = ($b1 * $a2) / $usc_kq;
            self::setMausochung($mauso_kq);
            return $tuso_kq; 
        }
    }
}

$tusoaErr = $mausoaErr = $tusobErr = $mausobErr = $pheptinhErr = $ketqua ='';
$flag=0;
if(isset($_POST['ketqua'])){
    //---------phân sô 1 validate
    $tusoa = $_POST['tusoa'];
    $mausoa = $_POST['mausoa'];
    $varcheck_tusoa = is_numeric($tusoa) ? $tusoa*1 : $tusoa;
    $varcheck_mausoa = is_numeric($mausoa) ? $mausoa*1 : $mausoa;
    //----tử ps1
    if ($_POST["tusoa"] === '')
    {
        $tusoaErr="Bạn cần nhập tử số của phân số thứ 1!";
        $flag=1;
    }
    elseif(!is_numeric($_POST['tusoa']))
    {
        $tusoaErr="Cần nhập số!";
        $flag=1;
    }
    elseif($_POST["tusoa"] == 0)
    {
        $tusoaErr="Cần nhập số khác số 0!";
        $flag=1;
    } 
    elseif(!is_int($varcheck_tusoa))
    {
        $tusoaErr="Cần nhập số nguyên!";
        $flag=1;
    }
    //---mẫu ps1
    if ($_POST["mausoa"] === '')
    {
        $mausoaErr="Bạn cần nhập mẫu số của phân số thứ 1!";
        $flag=1;
    } 
    elseif(!is_numeric($_POST['mausoa']))
    {
        $mausoaErr="Cần nhập số!";
        $flag=1;
    }
    elseif($_POST["mausoa"] == 0)
    {
        $mausoaErr="Cần nhập số khác số 0!";
        $flag=1;
    }elseif($_POST["mausoa"] < 0)
    {
        $mausoaErr="Cần nhập số khác lớn hơn 0!";
        $flag=1;
    }
    elseif(!is_int($varcheck_mausoa))
    {
        $mausoaErr="Cần nhập số nguyên!";
        $flag=1;
    }
  
    //---------phân số 2 validate
    $tusob = $_POST['tusob'];
    $mausob = $_POST['mausob'];
    $varcheck_tusob = is_numeric($tusob) ? $tusob*1 : $tusob;
    $varcheck_mausob = is_numeric($mausob) ? $mausob*1 : $mausob;
    //---tử ps2
    if ($_POST["tusob"] === '')
    {
        $tusobErr="Bạn cần nhập tử số của phân số thứ 2!";
        $flag=1;
    }
    elseif(!is_numeric($_POST['tusob']))
    {
        $tusobErr="Cần nhập số!";
        $flag=1;
    }
    elseif($_POST["tusob"] == 0)
    {
        $tusobErr="Cần nhập số khác số 0!";
        $flag=1;
    } 
    elseif(!is_int($varcheck_tusob))
    {
        $tusobErr="Cần nhập số nguyên!";
        $flag=1;
    }
    //---mẫu ps2
    if ($_POST["mausob"] === '')
    {
        $mausobErr="Bạn cần nhập mẫu số của phân số thứ 2!";
        $flag=1;
    }
    elseif(!is_numeric($_POST['mausob']))
    {
        $mausobErr="Cần nhập số!";
        $flag=1;
    }
    elseif($_POST["mausob"]==0)
    {
        $mausobErr="Cần nhập số khác số 0!";
        $flag=1;
    }
    elseif($_POST["mausob"] < 0)
    {
        $mausobErr="Cần nhập số khác lớn hơn 0!";
        $flag=1;
    } 
    elseif(!is_int($varcheck_mausob))
    {
        $mausobErr="Cần nhập số nguyên!";
        $flag=1;
    }
}
//Xư lý kết quả
if($flag == 0)//nếu biến cờ bằng giá trị ban đầu
{
    if(isset($_POST['pheptinh'])&&($_POST['pheptinh'])=="cong"){
        $pc = new Phepcong($_POST["tusoa"],$_POST["mausoa"],$_POST["tusob"],$_POST["mausob"]);
        $ketqua = "Phép cộng là: ".$pc->getTuso1(). "/" .$pc->getMauso1().
        " + ". $pc->getTuso2(). "/". $pc->getMauso2(). " = ". $pc->Phep_Cong($_POST['pheptinh'])."/".$pc->getMausochung();        
    }
    if(isset($_POST['pheptinh'])&&($_POST['pheptinh'])=="tru"){
        $pc = new Pheptru($_POST["tusoa"],$_POST["mausoa"],$_POST["tusob"],$_POST["mausob"]);
        $ketqua = "Phép trừ là: ".$pc->getTuso1(). "/" .$pc->getMauso1().
        " - ". $pc->getTuso2(). "/". $pc->getMauso2(). " = ". $pc->Phep_Tru($_POST['pheptinh'])."/".$pc->getMausochung();        
    }
    if(isset($_POST['pheptinh'])&&($_POST['pheptinh'])=="nhan"){
        $pc = new Phepnhan($_POST["tusoa"],$_POST["mausoa"],$_POST["tusob"],$_POST["mausob"]);
        $ketqua = "Phép nhân là: ".$pc->getTuso1(). "/" .$pc->getMauso1().
        " * ". $pc->getTuso2(). "/". $pc->getMauso2(). " = ". $pc->Phep_Nhan($_POST['pheptinh'])."/".$pc->getMausochung();        
    }
    if(isset($_POST['pheptinh'])&&($_POST['pheptinh'])=="chia"){
        $pc = new Phepchia($_POST["tusoa"],$_POST["mausoa"],$_POST["tusob"],$_POST["mausob"]);
        $ketqua = "Phép chia là: ".$pc->getTuso1(). "/" .$pc->getMauso1().
        " : ". $pc->getTuso2(). "/". $pc->getMauso2(). " = ". $pc->Phep_Chia($_POST['pheptinh'])."/".$pc->getMausochung();        
    }
}
?>