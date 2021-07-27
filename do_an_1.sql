-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 27, 2021 lúc 04:41 PM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `do_an_1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `maytinh`
--

CREATE TABLE `maytinh` (
  `MaMT` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BanPhim` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Chuot` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ManHinh` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ThungMay` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NamLD` date DEFAULT NULL,
  `TinhTrang` int(11) NOT NULL,
  `MaPMT` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `maytinh`
--

INSERT INTO `maytinh` (`MaMT`, `BanPhim`, `Chuot`, `ManHinh`, `ThungMay`, `NamLD`, `TinhTrang`, `MaPMT`) VALUES
('MT101', 'Dell', 'Logitech', 'Dell', 'Dell', '0000-00-00', 1, 'PMT01'),
('MT102', 'Dell', 'Logitech', 'Dell', 'Dell', '0000-00-00', 0, 'PMT01'),
('MT201', 'Dell', 'Logitech', 'Dell', 'Dell', '0000-00-00', 1, 'PMT02'),
('MT202', 'Dell', 'Logitech', 'Dell', 'Dell', '0000-00-00', 0, 'PMT02'),
('MT301', 'Dell', 'Logitech', 'Dell', 'Dell', '0000-00-00', 1, 'PMT03'),
('MT302', 'Dell', 'Logitech', 'Dell', 'Dell', '0000-00-00', 0, 'PMT03'),
('MT401', 'Dell', 'Logitech', 'Dell', 'Dell', '0000-00-00', 1, 'PMT04'),
('MT402', 'Dell', 'Logitech', 'Dell', 'Dell', '0000-00-00', 1, 'PMT04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `MaND` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MatKhau` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenND` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GioiTinh` bit(1) DEFAULT NULL,
  `NgaySinh` date DEFAULT NULL,
  `Quyen` char(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`MaND`, `MatKhau`, `TenND`, `GioiTinh`, `NgaySinh`, `Quyen`) VALUES
('1811505310310', '123456789', 'Nguyễn Văn Doanh', b'1', '0000-00-00', 'SV'),
('1811505310351', '123456789', 'Hoàng Thị Cẩm Vân', b'0', '0000-00-00', 'SV'),
('GV50531011', '123456789', 'Nguyễn Thị Hà Quyên', b'0', '0000-00-00', 'GV'),
('GV50531012', '123456789', 'Nguyễn Thị Thúy Hoài', b'0', '0000-00-00', 'GV'),
('GV50531013', '123456789', 'Nguyễn Văn Phát', b'1', '0000-00-00', 'GV'),
('GV50531014', '123456789', 'Hoàng Thị Mỹ Lệ', b'0', '0000-00-00', 'GV');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieudkmuonphong`
--

CREATE TABLE `phieudkmuonphong` (
  `MaDK` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaND` varchar(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MaPMT` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SLSV` int(11) DEFAULT NULL,
  `TenPMT` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LyDo` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NgaySD` date NOT NULL,
  `TietBD` int(11) NOT NULL,
  `TietKT` int(11) NOT NULL,
  `TinhTrang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phieudkmuonphong`
--

INSERT INTO `phieudkmuonphong` (`MaDK`, `MaND`, `MaPMT`, `SLSV`, `TenPMT`, `LyDo`, `NgaySD`, `TietBD`, `TietKT`, `TinhTrang`) VALUES
('MDK111', 'GV50531011', 'PMT01', 20, 'Phòng máy tính số 1', 'Dạy bù', '0000-00-00', 1, 3, 0),
('MDK112', 'GV50531013', 'PMT01', 20, 'Phòng máy tính số 1', 'Dạy bù', '0000-00-00', 1, 3, 0),
('MDK113', 'GV50531014', 'PMT03', 30, 'Phòng máy tính số 3', 'Dạy bù', '0000-00-00', 1, 3, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phongmay`
--

CREATE TABLE `phongmay` (
  `MaPMT` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenPMT` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SLMay` int(11) NOT NULL,
  `TinhTrang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phongmay`
--

INSERT INTO `phongmay` (`MaPMT`, `TenPMT`, `SLMay`, `TinhTrang`) VALUES
('PMT01', 'Phòng máy tính số 1', 30, 1),
('PMT02', 'Phòng máy tính số 2', 20, 1),
('PMT03', 'Phòng máy tính số 3', 30, 1),
('PMT04', 'Phòng máy tính số 4', 40, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `suco`
--

CREATE TABLE `suco` (
  `MaSC` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaND` varchar(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MaPMT` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MaMT` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SuCo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgayBC` date DEFAULT NULL,
  `GioBC` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `suco`
--

INSERT INTO `suco` (`MaSC`, `MaND`, `MaPMT`, `MaMT`, `SuCo`, `NgayBC`, `GioBC`) VALUES
('SC111', 'GV50531011', 'PMT01', 'MT101', 'Chuột hỏng', '0000-00-00', NULL),
('SC112', 'GV50531011', 'PMT01', 'MT102', 'Bàn phím hỏng', '0000-00-00', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thoikhoabieu`
--

CREATE TABLE `thoikhoabieu` (
  `MaTKB` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HocKy` int(11) NOT NULL,
  `MonHoc` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenGV` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Thu` int(11) NOT NULL,
  `TuTiet` int(11) NOT NULL,
  `DenTiet` int(11) NOT NULL,
  `NgayBD` date DEFAULT NULL,
  `SoLuongSV` int(11) NOT NULL,
  `MaND` varchar(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MaPMT` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thoikhoabieu`
--

INSERT INTO `thoikhoabieu` (`MaTKB`, `HocKy`, `MonHoc`, `TenGV`, `Thu`, `TuTiet`, `DenTiet`, `NgayBD`, `SoLuongSV`, `MaND`, `MaPMT`) VALUES
('123', 123, '123', '123', 123, 123, 123, NULL, 4, '1811505310310', 'PMT01'),
('220CCSDL01', 220, 'Chuyên đề cơ sở dữ liệu', 'Nguyễn Thị Thúy Hoài', 2, 1, 3, '0000-00-00', 50, 'GV50531012', 'PMT01'),
('220DAPM01', 220, 'Đồ án phần mềm', 'Hoàng Thị Mỹ Lệ', 3, 1, 3, '0000-00-00', 60, 'GV50531014', 'PMT02'),
('220TQTM01', 220, 'TH Quản trị mạng', 'Nguyễn Văn Phát', 3, 9, 10, '0000-00-00', 30, 'GV50531013', 'PMT02'),
('220TTHVP', 220, 'THtin học văn phòng', 'Nguyễn Thị Hà Quyên', 2, 4, 5, '0000-00-00', 35, 'GV50531011', 'PMT01');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `maytinh`
--
ALTER TABLE `maytinh`
  ADD PRIMARY KEY (`MaMT`),
  ADD KEY `MaPMT` (`MaPMT`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`MaND`);

--
-- Chỉ mục cho bảng `phieudkmuonphong`
--
ALTER TABLE `phieudkmuonphong`
  ADD PRIMARY KEY (`MaDK`),
  ADD KEY `MaND` (`MaND`),
  ADD KEY `MaPMT` (`MaPMT`);

--
-- Chỉ mục cho bảng `phongmay`
--
ALTER TABLE `phongmay`
  ADD PRIMARY KEY (`MaPMT`);

--
-- Chỉ mục cho bảng `suco`
--
ALTER TABLE `suco`
  ADD PRIMARY KEY (`MaSC`),
  ADD KEY `MaND` (`MaND`),
  ADD KEY `MaMT` (`MaMT`);

--
-- Chỉ mục cho bảng `thoikhoabieu`
--
ALTER TABLE `thoikhoabieu`
  ADD PRIMARY KEY (`MaTKB`),
  ADD KEY `MaND` (`MaND`),
  ADD KEY `MaPMT` (`MaPMT`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `maytinh`
--
ALTER TABLE `maytinh`
  ADD CONSTRAINT `maytinh_ibfk_1` FOREIGN KEY (`MaPMT`) REFERENCES `phongmay` (`MaPMT`);

--
-- Các ràng buộc cho bảng `phieudkmuonphong`
--
ALTER TABLE `phieudkmuonphong`
  ADD CONSTRAINT `phieudkmuonphong_ibfk_1` FOREIGN KEY (`MaND`) REFERENCES `nguoidung` (`MaND`),
  ADD CONSTRAINT `phieudkmuonphong_ibfk_2` FOREIGN KEY (`MaPMT`) REFERENCES `phongmay` (`MaPMT`);

--
-- Các ràng buộc cho bảng `suco`
--
ALTER TABLE `suco`
  ADD CONSTRAINT `suco_ibfk_1` FOREIGN KEY (`MaND`) REFERENCES `nguoidung` (`MaND`),
  ADD CONSTRAINT `suco_ibfk_2` FOREIGN KEY (`MaMT`) REFERENCES `maytinh` (`MaMT`);

--
-- Các ràng buộc cho bảng `thoikhoabieu`
--
ALTER TABLE `thoikhoabieu`
  ADD CONSTRAINT `thoikhoabieu_ibfk_1` FOREIGN KEY (`MaND`) REFERENCES `nguoidung` (`MaND`),
  ADD CONSTRAINT `thoikhoabieu_ibfk_2` FOREIGN KEY (`MaPMT`) REFERENCES `phongmay` (`MaPMT`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
