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
                        <li><span class="tree_label">Level 2</span></li>
                        <li><span class="tree_label">Level 2</span></li>
                    </ul>
                </li>
                <li>
                    <input type="checkbox" checked="checked" id="c9" />
                    <label for="c9" class="tree_label">OOP</label>
                    <ul>
                        <li><span class="tree_label">Level 2</span></li>
                        <li>
                            <input type="checkbox" id="c10" />
                            <label for="c10" class="tree_label"><span class="tree_custom">Specified tree item view</span></label>
                            <ul>
                                <li><span class="tree_label">Level 3</span></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <input type="checkbox" checked="checked" id="c11" />
                    <label for="c11" class="tree_label">Array & String</label>
                    <ul>
                        <li><span class="tree_label">Level 2</span></li>
                        <li>
                            <input type="checkbox" checked="checked" id="c12" />
                            <label for="c12" class="tree_label"><span class="tree_custom">Specified tree item view</span></label>
                            <ul>
                                <li><span class="tree_label">Level 3</span></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <input type="checkbox" checked="checked" id="c13" />
                    <label for="c13" class="tree_label">Database</label>
                    <ul>
                        <li><span class="tree_label">Level 2</span></li>
                        <li>
                            <input type="checkbox" checked="checked" id="c14" />
                            <label for="c14" class="tree_label"><span class="tree_custom">Specified tree item view</span></label>
                            <ul>
                                <li><span class="tree_label">Level 3</span></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</div>

<?php
include('includes/footer.html');
?>