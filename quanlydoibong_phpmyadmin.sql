-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 26, 2022 lúc 05:47 PM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlydoibong`
--
CREATE DATABASE IF NOT EXISTS `quanlydoibong` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `quanlydoibong`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ho_ten` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tai_khoan` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`admin_id`, `ho_ten`, `sdt`, `dia_chi`, `email`, `tai_khoan`, `mat_khau`) VALUES
('admin01', 'Nguyễn Việt Hưng', '0123456', '38 Lê Hồng Phong Nha Trang', 'hung@gmail.com', 'nvh', '000'),
('admin02', 'Trương Minh Phi', '0123455', '40 Lê Hồng Phong Nha Trang', 'phi@gmail.com', 'tmp', '000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cau_lac_bo`
--

CREATE TABLE `cau_lac_bo` (
  `ma_clb` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ten_clb` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ma_san` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ma_tinh` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cau_lac_bo`
--

INSERT INTO `cau_lac_bo` (`ma_clb`, `ten_clb`, `ma_san`, `ma_tinh`) VALUES
('barcalona', 'BARCA LONA', 'svd01', 'KH'),
('liverpool', 'LIVERPOOL', 'svd02', 'PY'),
('MC', 'MANCHESTER CITY', 'svd01', 'KH'),
('MU', 'MANCHESTER UNITED', 'svd03', 'NT'),
('napoli', 'NAPOLI', 'svd01', 'KH'),
('realmadrid', 'REAL MADRID', 'svd01', 'KH');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cau_thu`
--

CREATE TABLE `cau_thu` (
  `ma_cau_thu` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ho_ten_cau_thu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `vi_tri` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_sinh` date NOT NULL,
  `dia_chi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ma_clb` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ma_qg` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `so` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cau_thu`
--

INSERT INTO `cau_thu` (`ma_cau_thu`, `ho_ten_cau_thu`, `vi_tri`, `ngay_sinh`, `dia_chi`, `ma_clb`, `ma_qg`, `so`) VALUES
('ct01', 'Nguyễn Lê Thành Tâm', 'Thủ môn', '2001-02-01', '31 Trần Phú Nha Trang', 'realmadrid', 'VN', 1),
('ct02', 'Nguyễn Minh Trí', 'Hậu vệ cánh trái', '2001-02-02', '32 Trần Phú Nha Trang', 'realmadrid', 'TBN', 2),
('ct03', 'Nguyễn Khánh Duy', 'Hậu vệ trung tâm', '2001-02-03', '33 Trần Phú Nha Trang', 'realmadrid', 'UAE', 3),
('ct04', 'Tạ Long Phi', 'Hậu vệ cánh phải', '2001-02-04', '34 Trần Phú Nha Trang', 'realmadrid', 'VN', 4),
('ct05', 'Đặng Phương Nam', 'Tiền vệ phòng ngự', '2001-02-05', '35 Trần Phú Nha Trang', 'realmadrid', 'SGP', 5),
('ct06', 'Nguyễn Văn Bảo', 'Tiền vệ cánh trái', '2001-02-06', '36 Trần Phú Nha Trang', 'realmadrid', 'MLS', 6),
('ct07', 'Nguyễn Thành Lãnh', 'Tiền vệ trung tâm', '2001-02-07', '37 Trần Phú Nha Trang', 'realmadrid', 'TBN', 7),
('ct08', 'Đỗ Tuấn Kiệt', 'Tiền vệ cánh phải', '2001-02-08', '38 Trần Phú Nha Trang', 'realmadrid', 'UAE', 8),
('ct09', 'Nguyễn Quốc Châu', 'Tiện đạo cánh trái', '2001-02-09', '39 Trần Phú Nha Trang', 'realmadrid', 'VN', 9),
('ct10', 'Phạm Minh Hoàng', 'Tiền đạo trung tâm', '2001-02-10', '40 Trần Phú Nha Trang', 'realmadrid', 'MLS', 10),
('ct11', 'Văn Tấn Thông', 'Tiền đạo cánh phải', '2001-02-11', '41 Trần Phú Nha Trang', 'realmadrid', 'UAE', 11),
('ct12', 'Phan Trần Hữu Phúc', 'Dự bị thủ môn', '2001-02-12', '42 Trần Phú Nha Trang', 'realmadrid', 'VN', 12);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hlv_clb`
--

CREATE TABLE `hlv_clb` (
  `ma_hlv` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ma_clb` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `vai_tro` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hlv_clb`
--

INSERT INTO `hlv_clb` (`ma_hlv`, `ma_clb`, `vai_tro`) VALUES
('hlv01', 'realmadrid', 'Huấn luyện viên chiến thuật'),
('hlv02', 'barcalona', 'Huấn luyện cầu thủ trẻ'),
('hlv03', 'MC', 'Chỉ đạo trực tiếp trận đấu'),
('hlv04', 'liverpool', 'Cố vấn cho huấn luyện viên trưởng'),
('hlv05', 'MU', 'phân tích sau trận đấu'),
('hlv06', 'napoli', 'Chỉ đạo trên sân tập');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `huan_luyen_vien`
--

CREATE TABLE `huan_luyen_vien` (
  `ma_hlv` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ten_hlv` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_sinh` date NOT NULL,
  `dia_chi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dien_thoai` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ma_qg` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `huan_luyen_vien`
--

INSERT INTO `huan_luyen_vien` (`ma_hlv`, `ten_hlv`, `ngay_sinh`, `dia_chi`, `dien_thoai`, `ma_qg`) VALUES
('hlv01', 'Trương Minh Phi', '2001-01-28', '25 Trần Phú Nha Trang', '0869079903', 'VN'),
('hlv02', 'Nguyễn Việt Hưng', '2001-09-30', '26 Trần Phú Nha Trang', '0123456789', 'TBN'),
('hlv03', 'Phan Ngọc Thịnh', '2001-05-31', '27 Trần Phú Nha Trang', '0123456788', 'UAE'),
('hlv04', 'Nguyễn Trương Ngọc Huy', '2001-07-25', '28 Trần Phú Nha Trang', '0123456787', 'MLS'),
('hlv05', 'Văn Tấn Thông', '2001-02-21', '29 Trần Phú Nha Trang', '0123456786', 'SGP');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quoc_gia`
--

CREATE TABLE `quoc_gia` (
  `ma_qg` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ten_qg` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quoc_gia`
--

INSERT INTO `quoc_gia` (`ma_qg`, `ten_qg`) VALUES
('MLS', 'Malaysia'),
('SGP', 'Singapore'),
('TBN', 'Tây Ban Nha'),
('UAE', 'Các tiểu vương quốc Ả Rập thốn'),
('VN', 'Việt Nam');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_van_dong`
--

CREATE TABLE `san_van_dong` (
  `ma_san` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ten_san` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `san_van_dong`
--

INSERT INTO `san_van_dong` (`ma_san`, `ten_san`, `dia_chi`) VALUES
('svd01', 'santiago bernabeu', '01 Nguyễn Biểu Nha Trang'),
('svd02', 'anfield', '02 Nguyễn Biểu Nha Trang'),
('svd03', 'old trafford', '03 Nguyễn Biểu Nha Trang');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tinh`
--

CREATE TABLE `tinh` (
  `ma_tinh` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ten_tinh` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tinh`
--

INSERT INTO `tinh` (`ma_tinh`, `ten_tinh`) VALUES
('KH', 'Khánh Hoà'),
('NT', 'Ninh Thuận'),
('PY', 'Phú Yên');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tran_dau`
--

CREATE TABLE `tran_dau` (
  `ma_tran` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `nam` int(5) NOT NULL,
  `vong` int(5) NOT NULL,
  `ngay_td` date NOT NULL,
  `ma_clb1` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ma_clb2` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ma_san` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ket_qua` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tran_dau`
--

INSERT INTO `tran_dau` (`ma_tran`, `nam`, `vong`, `ngay_td`, `ma_clb1`, `ma_clb2`, `ma_san`, `ket_qua`) VALUES
('td01', 2022, 1, '2022-01-28', 'realmadrid', 'barcelona', 'svd01', '1-3'),
('td02', 2022, 2, '2022-02-28', 'realmadrid', 'MC', 'svd01', '3-3'),
('td03', 2022, 3, '2022-03-28', 'liverpool', 'realmadrid', 'svd02', '2-5'),
('td04', 2022, 4, '2022-04-28', 'MU', 'realmadrid', 'svd03', '1-7'),
('td05', 2022, 5, '2022-05-28', 'realmadrid', 'napoli', 'svd01', '5-4');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `cau_lac_bo`
--
ALTER TABLE `cau_lac_bo`
  ADD PRIMARY KEY (`ma_clb`),
  ADD KEY `ma_tinh` (`ma_tinh`),
  ADD KEY `ma_san` (`ma_san`);

--
-- Chỉ mục cho bảng `cau_thu`
--
ALTER TABLE `cau_thu`
  ADD PRIMARY KEY (`ma_cau_thu`),
  ADD KEY `ma_clb` (`ma_clb`),
  ADD KEY `ma_qg` (`ma_qg`);

--
-- Chỉ mục cho bảng `hlv_clb`
--
ALTER TABLE `hlv_clb`
  ADD PRIMARY KEY (`ma_hlv`,`ma_clb`),
  ADD KEY `ma_clb` (`ma_clb`);

--
-- Chỉ mục cho bảng `huan_luyen_vien`
--
ALTER TABLE `huan_luyen_vien`
  ADD PRIMARY KEY (`ma_hlv`),
  ADD KEY `ma_qg` (`ma_qg`);

--
-- Chỉ mục cho bảng `quoc_gia`
--
ALTER TABLE `quoc_gia`
  ADD PRIMARY KEY (`ma_qg`);

--
-- Chỉ mục cho bảng `san_van_dong`
--
ALTER TABLE `san_van_dong`
  ADD PRIMARY KEY (`ma_san`);

--
-- Chỉ mục cho bảng `tinh`
--
ALTER TABLE `tinh`
  ADD PRIMARY KEY (`ma_tinh`);

--
-- Chỉ mục cho bảng `tran_dau`
--
ALTER TABLE `tran_dau`
  ADD PRIMARY KEY (`ma_tran`),
  ADD KEY `ma_san` (`ma_san`),
  ADD KEY `ma_clb1` (`ma_clb1`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cau_lac_bo`
--
ALTER TABLE `cau_lac_bo`
  ADD CONSTRAINT `cau_lac_bo_ibfk_1` FOREIGN KEY (`ma_tinh`) REFERENCES `tinh` (`ma_tinh`),
  ADD CONSTRAINT `cau_lac_bo_ibfk_2` FOREIGN KEY (`ma_san`) REFERENCES `san_van_dong` (`ma_san`);

--
-- Các ràng buộc cho bảng `cau_thu`
--
ALTER TABLE `cau_thu`
  ADD CONSTRAINT `cau_thu_ibfk_1` FOREIGN KEY (`ma_clb`) REFERENCES `cau_lac_bo` (`ma_clb`),
  ADD CONSTRAINT `cau_thu_ibfk_2` FOREIGN KEY (`ma_qg`) REFERENCES `quoc_gia` (`ma_qg`);

--
-- Các ràng buộc cho bảng `hlv_clb`
--
ALTER TABLE `hlv_clb`
  ADD CONSTRAINT `hlv_clb_ibfk_1` FOREIGN KEY (`ma_clb`) REFERENCES `cau_lac_bo` (`ma_clb`);

--
-- Các ràng buộc cho bảng `huan_luyen_vien`
--
ALTER TABLE `huan_luyen_vien`
  ADD CONSTRAINT `huan_luyen_vien_ibfk_1` FOREIGN KEY (`ma_hlv`) REFERENCES `hlv_clb` (`ma_hlv`),
  ADD CONSTRAINT `huan_luyen_vien_ibfk_2` FOREIGN KEY (`ma_qg`) REFERENCES `quoc_gia` (`ma_qg`);

--
-- Các ràng buộc cho bảng `tran_dau`
--
ALTER TABLE `tran_dau`
  ADD CONSTRAINT `tran_dau_ibfk_1` FOREIGN KEY (`ma_san`) REFERENCES `san_van_dong` (`ma_san`),
  ADD CONSTRAINT `tran_dau_ibfk_2` FOREIGN KEY (`ma_clb1`) REFERENCES `cau_lac_bo` (`ma_clb`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
