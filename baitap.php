<?php # Script 3.4 - index.php
$page_title = 'Welcome to this Site!';
include('includes/header.html');
?>
<div class="body">
    <div id="fontSizeWrapper">
        <label for="fontSize">Font size</label>
        <input type="range" value="1" id="fontSize" step="0.5" min="0.5" max="5" />
    </div>
    <ul class="tree">
        <li>
            <input type="checkbox" checked="checked" id="c1" /> <!--  checked="checked" -->
            <label class="tree_label" for="c1">NGUYỄN VIỆT HƯNG</label>
            <ul>
                <li>
                    <input type="checkbox" checked="checked" id="c2" />
                    <!--checked="checked" -->
                    <label for="c2" class="tree_label">Form</label>
                    <ul>
                        <li><a href="BT_NVH/BTCD3/nhapThongtin.htm"><span class="tree_label">Trang web nhận và xử lý thông tin người dùng</span></a></li>
                        <li><a href="BT_NVH/BTCD3/pheptinhpage1.php"><span class="tree_label">Trang web thực hiện phép tính trên 2 số</span></a></li>
                        <li><a href="BT_NVH/BTCD3/formtinhdientichHCN.php"><span class="tree_label">Tinh dien tich HCN</span></a></li>
                        <li><a href="BT_NVH/BTCD3/formtinhtiendien.php"><span class="tree_label">Tính tiền điện</span></a></li>
                    </ul>
                </li>
                <li>
                    <input type="checkbox" checked="checked" id="c3" />
                    <label for="c3" class="tree_label">OOP</label>
                    <ul>
                        <li><a href="BT_NVH/BTCD4_mang/OOP_GV_SV/oopthongtinGV_HS.php"><span class="tree_label">Giáo viên & sinh viên</span></a></li>
                        <li><a href="BT_NVH/BTCD4_mang/OOP_Tinhphanso/nhapthongtinpheptinh.php"><span class="tree_label">Tính phân số</span></a></li>
                        <li><a href="BT_NVH/BTCD4_mang/Quanly_thongtin_nhanvien/nhapthongtin_NV.php"><span class="tree_label">Quản lý thông nhân viên</span></a></li>
                    </ul>
                </li>
                <li>
                    <input type="checkbox" checked="checked" id="c4" />
                    <label for="c4" class="tree_label">Array & String</label>
                    <ul>
                        <li><a href="BT_NVH/BTCD4_mang/Mang_chuoi/timnamamlich.php"><span class="tree_label">Tìm năm âm lịch</span></a></li>
                        <li><a href="BT_NVH/BTCD4_mang/Mang_chuoi/formnhapvatimtrendayso.php"><span class="tree_label">Nhập và tìm kiếm trên dãy số</span></a></li>
                        <li><a href="BT_NVH/BTCD4_mang/Mang_chuoi/formnhapvathaythe.php"><span class="tree_label">Nhập và thay thế</span></a></li>
                        <li><a href="BT_NVH/BTCD4_mang/Mang_chuoi/mangsotunhien.php"><span class="tree_label"></span>Mảng số tự nhiên</a></li>
                        <li><a href="BT_NVH/BTCD4_mang/Mang_chuoi/mangmatransonguyen.php"><span class="tree_label">Mảng ma trận số nguyên</span></a></li>
                        <li><a href="BT_NVH/BTCD4_mang/Mang_chuoi/xapxepmang.php"><span class="tree_label">Xắp xếp</span></a></li>
                        <li><a href="BT_NVH/BTCD4_mang/Mang_chuoi/formphatsinhmangvatinhtoan.php"><span class="tree_label">Phát sinh mảng và tính toán</span></a></li>
                        <li><a href="BT_NVH/BTCD4_mang/Mang_chuoi/formnhapvatinhtrendayso.php"><span class="tree_label">Nhập và tính trên dãy số</span></a></li>
                    
                    </ul>
                </li>
                <li>
                    <input type="checkbox" checked="checked" id="c5" />
                    <label for="c5" class="tree_label">Database</label>
                    <ul>
                        <li><a href="BT_NVH/SQL_CD5/2.5hienthidanglistcoanh.php"><span class="tree_label">List dạng cột có ảnh</span></a></li>
                        <li><a href="BT_NVH/SQL_CD5/2.6+2.7/2.6+2.7listdangcotcolink.php"><span class="tree_label">List dạng cột + link</span></a></li>
                        <li><a href="BT_NVH/SQL_CD5/2.11_themmoi/formthemmoi.php"><span class="tree_label">Thêm mới sữa</span></a></li>
                        <li><a href="BT_NVH/SQL_CD5/BT_mauSQL/thongtinhangsua.php"><span class="tree_label">Thông tin hãng sữa</span></a></li>
                        <li><a href="BT_NVH/SQL_CD5/BT_mauSQL/thongtinsuavedauvecuoi.php"><span class="tree_label">Lưới phân trang</span></a></li>
                        <li><a href="BT_NVH/SQL_CD5/BT_mauSQL/thongtinkhachhang.php"><span class="tree_label">Thông tin khách hàng</span></a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <input type="checkbox" checked="checked" id="c7" /> <!--  checked="checked" -->
            <label class="tree_label" for="c7">TRƯƠNG MINH PHI</label>
            <ul>
                <li>
                    <input type="checkbox" checked="checked" id="c8" />
                    <!--checked="checked"  -->
                    <label for="c8" class="tree_label">Form</label>
                    <ul>
                        <li><a href="BT_TMP/ThucHanhFormDonGian/FormHCN.php"><span class="tree_label">Form HCN</span></a></li>
                        <li><a href="BT_TMP/ThucHanhFormDonGian/pheptinh.php"><span class="tree_label">Phép tính trên hai con số</span></a></li>
                        <li><a href="BT_TMP/ThucHanhFormDonGian/FormTinhTienDien.php"><span class="tree_label">Form tính tiền điện</span></a></li>
                        <li><a href="BT_TMP/ThucHanhFormDonGian/Thongtin.html"><span class="tree_label">Nhận và xử lý thông tin người dùng</span></a></li>
                    </ul>
                </li>
                <li>
                    <input type="checkbox" checked="checked" id="c9" />
                    <label for="c9" class="tree_label">OOP</label>
                    <ul>
                        <li><a href="BT_TMP/FormHuongDoiTuong/ChuViDienTichHinhTronVuong.php"><span class="tree_label">Tính CV và DT các hình</span></a></li>
                        <li><a href="BT_TMP/FormHuongDoiTuong/GiangVienSinhVien.php"><span class="tree_label">Giảng viên sinh viên</span></a></li>
                        <li><a href="BT_TMP/FormHuongDoiTuong/QuanLyThongTinNhanVien.php"><span class="tree_label">Quản lý thông tin nhân viên</span></a></li>
                        <li><a href="BT_TMP/FormHuongDoiTuong/XuLyPhanSo.php"><span class="tree_label">Xử lý phân số</span></a></li>
                    </ul>
                </li>
                <li>
                    <input type="checkbox" checked="checked" id="c11" />
                    <label for="c11" class="tree_label">Array & String</label>
                    <ul>
                        <li><a href="BT_TMP/FormMangVaChuoi/TimNamAmLich.php"><span class="tree_label">Tìm năm âm lịch</span></a></li>
                        <li><a href="BT_TMP/FormMangVaChuoi/TimNamNhuan.php"><span class="tree_label">Tìm năm nhuận</span></a></li>
                        <li><a href="BT_TMP/FormMangVaChuoi/TimKiemPhanTu.php"><span class="tree_label">Tìm kiếm phẩn tử trong mảng</span></a></li>
                        <li><a href="BT_TMP/FormMangVaChuoi/ThayThePhanTu.php"><span class="tree_label">Thay thế phần tử trong mảng</span></a></li>
                        <li><a href="BT_TMP/FormMangVaChuoi/ThaoTacTrenMangSoNguyen.php"><span class="tree_label">Thao tác trên mảng số nguyên</span></a></li>
                        <li><a href="BT_TMP/FormMangVaChuoi/SapXepMang.php"><span class="tree_label">Sắp xếp mảng theo chiều tăng giảm</span></a></li>
                        <li><a href="BT_TMP/FormMangVaChuoi/PhatSinhMangVaTinhToan.php"><span class="tree_label">Phát sinh mảng và tính toán</span></a></li>
                        <li><a href="BT_TMP/FormMangVaChuoi/NhapVaTinhTong.php"><span class="tree_label">Nhập mảng và tính tổng giá trị</span></a></li>
                        <li><a href="BT_TMP/FormMangVaChuoi/HienThiMaTran.php"><span class="tree_label">Hiển thị random mảng 2 chiều và tính toán đơn giản</span></a></li>
                        <li><a href="BT_TMP/FormMangVaChuoi/GhepMangAB.php"><span class="tree_label">Ghép mảng A và B thành mảng C</span></a></li>
                    </ul>
                </li>
                <li>
                    <input type="checkbox" checked="checked" id="c13" />
                    <label for="c13" class="tree_label">Database</label>
                    <ul>
                        <li><a href="BT_TMP/MySQL/BaiTapQuanLyBanSua/2,1.php"><span class="tree_label">Bài 2.1</span></a></li>
                        <li><a href="BT_TMP/MySQL/BaiTapQuanLyBanSua/2,2.php"><span class="tree_label">Bài 2.2</span></a></li>
                        <li><a href="BT_TMP/MySQL/BaiTapQuanLyBanSua/2,3.php"><span class="tree_label">Bài 2.3</span></a></li>
                        <li><a href="BT_TMP/MySQL/BaiTapQuanLyBanSua/2,4.php"><span class="tree_label">Bài 2.4</span></a></li>
                        <li><a href="BT_TMP/MySQL/BaiTapQuanLyBanSua/2,5.php"><span class="tree_label">Bài 2.5</span></a></li>
                        <li><a href="BT_TMP/MySQL/BaiTapQuanLyBanSua/2,6.php"><span class="tree_label">Bài 2.6</span></a></li>
                        <li><a href="BT_TMP/MySQL/BaiTapQuanLyBanSua/2,7.php"><span class="tree_label">Bài 2.7</span></a></li>

                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</div>

<?php
include('includes/footer.html');
?>