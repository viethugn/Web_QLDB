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
            <label class="tree_label" for="c1">Nguyễn Việt Hưng</label>
            <ul>
                <li>
                    <input type="checkbox" checked="checked" id="c2" />
                    <!--checked="checked"  -->
                    <label for="c2" class="tree_label">Form</label>
                    <ul>
                        <li><a href="includes/BT_NVH/BTCD3/checkbox.php"><span class="tree_label">Check box</span></a></li>
                        <li><a href="includes/BT_NVH/BTCD3/combobox.php"><span class="tree_label">Combo box</span></a></li>
                        <li><a href="includes/BT_NVH/BTCD3/radiobutton.php"><span class="tree_label">Radio button</span></a></li>
                        <li><a href="includes/BT_NVH/BTCD3/texterea.php"><span class="tree_label">Texterea</span></a></li>
                        <li><a href="includes/BT_NVH/BTCD3/textfield_dang1.php"><span class="tree_label">Textfield dạng 1</span></a></li>
                        <li><a href="includes/BT_NVH/BTCD3/textfield_dang2.php"><span class="tree_label">Textfield dạng 2</span></a></li>
                        <li><a href="includes/BT_NVH/BTCD3/listbox.php"><span class="tree_label">Listbox</span></a></li>
                        <li><a href="includes/BT_NVH/BTCD3/nhapThongtin.htm"><span class="tree_label">Trang web nhận và xử lý thông tin người dùng</span></a></li>
                        <li><a href="includes/BT_NVH/BTCD3/pheptinhpage1.php"><span class="tree_label">Trang web thực hiện phép tính trên 2 số</span></a></li>
                        <li><a href="includes/BT_NVH/BTCD3/formtinhdientichHCN.php"><span class="tree_label">Tinh dien tich HCN</span></a></li>
                        <li><a href="includes/BT_NVH/BTCD3/formtinhtiendien.php"><span class="tree_label">Tính tiền điện</span></a></li>
                    </ul>
                </li>
                <li>
                    <input type="checkbox" checked="checked" id="c3" />
                    <label for="c3" class="tree_label">OOP</label>
                    <ul>
                        <li><a href="includes/BT_NVH/BTCD4_mang/OOP_GV_SV/oopthongtinGV_HS.php"><span class="tree_label">Giáo viên & sinh viên</span></a></li>
                        <li><a href="includes/BT_NVH/BTCD4_mang/OOP_Tinhphanso/nhapthongtinpheptinh.php"><span class="tree_label">Tính phân số</span></a></li>
                        <li><a href="includes/BT_NVH/BTCD4_mang/Quanly_thongtin_nhanvien/nhapthongtin_NV.php"><span class="tree_label">Quản lý thông nhân viên</span></a></li>
                    </ul>
                </li>
                <li>
                    <input type="checkbox" checked="checked" id="c4" />
                    <label for="c4" class="tree_label">Array & String</label>
                    <ul>
                        <li><a href="includes/BT_NVH/BTCD4_mang/Mang_chuoi/timnamamlich.php"><span class="tree_label">Tìm năm âm lịch</span></a></li>
                        <li><a href="includes/BT_NVH/BTCD4_mang/Mang_chuoi/formnhapvatimtrendayso.php"><span class="tree_label">Nhập và tìm kiếm trên dãy số</span></a></li>
                        <li><a href="includes/BT_NVH/BTCD4_mang/Mang_chuoi/formnhapvathaythe.php"><span class="tree_label">Nhập và thay thế</span></a></li>
                        <li><a href="includes/BT_NVH/BTCD4_mang/Mang_chuoi/mangsotunhien.php"><span class="tree_label"></span>Mảng số tự nhiên</a></li>
                        <li><a href="includes/BT_NVH/BTCD4_mang/Mang_chuoi/mangmatransonguyen.php"><span class="tree_label">Mảng ma trận số nguyên</span></a></li>
                        <li><a href="includes/BT_NVH/BTCD4_mang/Mang_chuoi/Bai8_xapxep/xapxepmang.php"><span class="tree_label">Xắp xếp</span></a></li>
                        <li><a href="includes/BT_NVH/BTCD4_mang/Mang_chuoi/Bai5_phatsinhmangvatinhtoan/formphatsinhmangvatinhtoan.php"><span class="tree_label">Phát sinh mảng và tính toán</span></a></li>
                        <li><a href="includes/BT_NVH/BTCD4_mang/Mang_chuoi/Bai4_nhapvatinhtrendayso/formnhapvatinhtrendayso.php"><span class="tree_label">Nhập và tính trên dãy số</span></a></li>
                        <li><a href="includes/BT_NVH/BTCD4_mang/Mang_chuoi/formnhapvathaythe.php"><span class="tree_label"></span></a></li>
                    </ul>
                </li>
                <li>
                    <input type="checkbox" checked="checked" id="c5" />
                    <label for="c5" class="tree_label">Database</label>
                    <ul>
                        <li><a href="includes/BT_NVH/SQL_CD5/2.5hienthidanglistcoanh.php"><span class="tree_label">List dạng cột có ảnh</span></a></li>
                        <li><a href="includes/BT_NVH/SQL_CD5/2.6+2.7/2.6+2.7listdangcotcolink.php"><span class="tree_label">List dạng cột + link</span></a></li>
                        <li><a href="includes/BT_NVH/SQL_CD5/2.11_themmoi/formthemmoi.php"><span class="tree_label">Thêm mới</span></a></li>
                        <li><a href="includes/BT_NVH/SQL_CD5/BT_mauSQL/thongtinhangsua.php"><span class="tree_label">Hiển thị lưới</span></a></li>
                        <li><a href="includes/BT_NVH/SQL_CD5/BT_mauSQL/thongtinsuavedauvecuoi.php"><span class="tree_label">Lưới phân trang</span></a></li>
                        <li><a href="includes/BT_NVH/SQL_CD5/"><span class="tree_label"></span></a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
        <input type="checkbox" checked="checked" id="c7" /> <!--  checked="checked" -->
            <label class="tree_label" for="c7">Trương Minh Phi</label>
            <ul>
                <li>
                    <input type="checkbox" checked="checked" id="c8" />
                    <!--checked="checked"  -->
                    <label for="c8" class="tree_label">Form</label>
                    <ul>
                        <li><a href="includes/BT_TMP/ThucHanhFormDonGian/BangCuuChuongRD.php"><span class="tree_label">Bảng cửu chương</span></a></li>
                        <li><a href="includes/BT_TMP/ThucHanhFormDonGian/bt.php"><span class="tree_label">Chu vi diện tích HCN</span></a></li>
                        <li><a href="includes/BT_TMP/ThucHanhFormDonGian/DocFile.php"><span class="tree_label">Đọc ghi file</span></a></li>
                        <li><a href="includes/BT_TMP/ThucHanhFormDonGian/FormCheckBox.php"><span class="tree_label">Form check box</span></a></li>
                        <li><a href="includes/BT_TMP/ThucHanhFormDonGian/FormComboBox.php"><span class="tree_label">Form combo box</span></a></li>
                        <li><a href="includes/BT_TMP/ThucHanhFormDonGian/FormHCN.php"><span class="tree_label">Form HCN</span></a></li>
                        <li><a href="includes/BT_TMP/ThucHanhFormDonGian/FormListBox.php"><span class="tree_label">Form list box</span></a></li>
                        <li><a href="includes/BT_TMP/ThucHanhFormDonGian/FormMultiplelineText.php"><span class="tree_label">Text area</span></a></li>
                        <li><a href="includes/BT_TMP/ThucHanhFormDonGian/FormRadioButton.php"><span class="tree_label">Radio button</span></a></li>
                        <li><a href="includes/BT_TMP/ThucHanhFormDonGian/FormTextField1.php"><span class="tree_label">Form text 1</span></a></li>
                        <li><a href="includes/BT_TMP/ThucHanhFormDonGian/FormTextField2.php"><span class="tree_label">Form text 2</span></a></li>
                        <li><a href="includes/BT_TMP/ThucHanhFormDonGian/FormTinhTienDien.php"><span class="tree_label">Form tính tiền điện</span></a></li>
                        <li><a href="includes/BT_TMP/ThucHanhFormDonGian/Thongtin.html"><span class="tree_label">Nhận và xử lý thông tin người dùng</span></a></li>
                    </ul>
                </li>
                <li>
                    <input type="checkbox" checked="checked" id="c9" />
                    <label for="c9" class="tree_label">OOP</label>
                    <ul>
                        <li><a href="includes/BT_TMP/FormHuongDoiTuong/ChuViDienTichHinhTronVuong.php"><span class="tree_label">Tính CV và DT các hình</span></a></li>
                        <li><a href="includes/BT_TMP/FormHuongDoiTuong/GiangVienSinhVien.php"><span class="tree_label">Giảng viên sinh viên</span></a></li>
                        <li><a href="includes/BT_TMP/FormHuongDoiTuong/QuanLyThongTinNhanVien.php"><span class="tree_label">Quản lý thông tin nhân viên</span></a></li>
                        <li><a href="includes/BT_TMP/FormHuongDoiTuong/XuLyPhanSo.php"><span class="tree_label">Xử lý phân số</span></a></li>
                    </ul>
                </li>
                <li>
                    <input type="checkbox" checked="checked" id="c11" />
                    <label for="c11" class="tree_label">Array & String</label>
                    <ul>
                        <li><a href="includes/BT_TMP/FormMangVaChuoi/TimNamAmLich.php"><span class="tree_label">Tìm năm âm lịch</span></a></li>
                        <li><a href="includes/BT_TMP/FormMangVaChuoi/TimKiemPhanTu.php"><span class="tree_label">Tìm kiếm phẩn tử trong mảng</span></a></li>
                        <li><a href="includes/BT_TMP/FormMangVaChuoi/ThayThePhanTu.php"><span class="tree_label">Thay thế phần tử trong mảng</span></a></li>
                        <li><a href="includes/BT_TMP/FormMangVaChuoi/ThaoTacTrenMangSoNguyen.php"><span class="tree_label">Thao tác trên mảng số nguyên</span></a></li>
                        <li><a href="includes/BT_TMP/FormMangVaChuoi/SapXepMang.php"><span class="tree_label">Sắp xếp mảng theo chiều tăng giảm</span></a></li>
                        <li><a href="includes/BT_TMP/FormMangVaChuoi/PhatSinhMangVaTinhToan.php"><span class="tree_label">Phát sinh mảng và tính toán</span></a></li>
                        <li><a href="includes/BT_TMP/FormMangVaChuoi/NhapVaTinhTong.php"><span class="tree_label">Nhập mảng và tính tổng giá trị</span></a></li>
                        <li><a href="includes/BT_TMP/FormMangVaChuoi/HienThiMaTran.php"><span class="tree_label">Hiển thị random mảng 2 chiều và tính toán đơn giản</span></a></li>
                        <li><a href="includes/BT_TMP/FormMangVaChuoi/GhepMangAB.php"><span class="tree_label">Ghép mảng A và B thành mảng C</span></a></li>
                    </ul>
                </li>
                <li>
                    <input type="checkbox" checked="checked" id="c13" />
                    <label for="c13" class="tree_label">Database</label>
                    <ul>
                    <li><a href="includes/BT_TMP/MySQL/BaiTapQuanLyBanSua/BaiTapMauKetNoiSQL.php"><span class="tree_label">Kết nối SQL với PHP</span></a></li>
                    <li><a href="includes/BT_TMP/MySQL/BaiTapQuanLyBanSua/2,1.php"><span class="tree_label">Bài 2.1</span></a></li>
                    <li><a href="includes/BT_TMP/MySQL/BaiTapQuanLyBanSua/2,2.php"><span class="tree_label">Bài 2.2</span></a></li>
                    <li><a href="includes/BT_TMP/MySQL/BaiTapQuanLyBanSua/2,3.php"><span class="tree_label">Bài 2.3</span></a></li>
                    <li><a href="includes/BT_TMP/MySQL/BaiTapQuanLyBanSua/2,4.php"><span class="tree_label">Bài 2.4</span></a></li>
                    <li><a href="includes/BT_TMP/MySQL/BaiTapQuanLyBanSua/2,5.php"><span class="tree_label">Bài 2.5</span></a></li>
                    <li><a href="includes/BT_TMP/MySQL/BaiTapQuanLyBanSua/2,6.php"><span class="tree_label">Bài 2.6</span></a></li>
                    <li><a href="includes/BT_TMP/MySQL/BaiTapQuanLyBanSua/2,7.php"><span    class="tree_label">Bài 2.7</span></a></li>
                   
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</div>

<?php
include('includes/footer.html');
?>