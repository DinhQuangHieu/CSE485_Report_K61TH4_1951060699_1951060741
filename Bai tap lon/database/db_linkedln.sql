-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 18, 2022 lúc 09:25 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_linkedln`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet`
--

CREATE TABLE `baiviet` (
  `MaBaiViet` int(10) NOT NULL,
  `MaNguoiDung` int(10) NOT NULL,
  `Tieude` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NoiDung` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AnhBaiViet` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `baiviet`
--

INSERT INTO `baiviet` (`MaBaiViet`, `MaNguoiDung`, `Tieude`, `NoiDung`, `AnhBaiViet`) VALUES
(1, 1, NULL, 'Taken online at home the TOEFL® Essentials™ test is now accepted by hundreds of programs as a convenient and credible English exam.\r\n', 'https://www.ets.org/s/toefl-essentials/rsc/img/image-test-features-right.png'),
(2, 3, NULL, 'Mikhail \"Miker\" Mirchuk (born March 6, 1984) is a retired Russian Night Elf player. After his retirement, he became a streamer and a caster', 'https://liquipedia.net/commons/images/4/4a/Miker_WC3.jpg'),
(3, 2, NULL, 'Vlahovic up front, Partey return - How Arsenal could line up in rearranged Tottenham clash\r\n', 'https://i2-prod.football.london/incoming/article22439750.ece/ALTERNATES/s615b/1_GettyImages-1165495602.jpg'),
(4, 4, NULL, 'Kappa áo khoác thun nữ 341989W A63', 'https://cdn.hoang-phuc.com/media/catalog/product/cache/911a4dad289f521f5a511212882e4276/3/4/341989w-a63-3.jpg'),
(5, 5, NULL, 'How will you use the new year to move forward?', 'https://media-exp1.licdn.com/dms/image/C5622AQEdV790V3Otew/feedshare-shrink_1280/0/1642007289746?e=1645660800&v=beta&t=LTP_qiRah3ecI3P4ShMwrQZN6lz7xlVmAFkkKF5tSQI');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `MaBaiViet` int(10) NOT NULL,
  `MaNguoiDung` int(10) NOT NULL,
  `NoiDung` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `TenDangNhap` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MatKhau` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaNguoiDung` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`TenDangNhap`, `Email`, `MatKhau`, `MaNguoiDung`) VALUES
('Arteta', 'arteta@gmail.com', 'arteta1234', 5),
('NgocHung', 'ngochung@gmail.com', 'hung123', 2),
('QuangHieu', 'hieujanuzaj@gmail.com', 'hieu123', 1),
('Ragnick', 'ragnick@gmail.com', 'nick123', 3),
('Solsa', 'solsa@gmail.com', 'solsa123', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thich`
--

CREATE TABLE `thich` (
  `MaBaiViet` int(10) NOT NULL,
  `MaNguoiDung` int(10) NOT NULL,
  `Thich` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtinnguoidung`
--

CREATE TABLE `thongtinnguoidung` (
  `MaNguoiDung` int(10) NOT NULL,
  `TenNguoiDung` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgaySinh` date NOT NULL,
  `QuocTich` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Anh` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thongtinnguoidung`
--

INSERT INTO `thongtinnguoidung` (`MaNguoiDung`, `TenNguoiDung`, `NgaySinh`, `QuocTich`, `Anh`) VALUES
(1, 'Quang Hieu', '2001-03-27', 'Việt Nam', 'https://upload.wikimedia.org/wikipedia/vi/5/53/Arsenal_FC.svg'),
(2, 'Ngoc Hung', '2001-02-23', 'Việt Nam', 'https://cdn.bongdaplus.vn/Assets/Media/2022/01/16/8/Messi-pSG.jpg'),
(3, 'Ragnick', '1958-06-29', 'Đức', 'https://i1-thethao.vnecdn.net/2021/12/06/rang-3435-1638755233.jpg?w=680&h=0&q=100&dpr=1&fit=crop&s=BcoUE-poPzjWNQglxVtdlw'),
(4, 'Solsa', '1973-02-26', 'Anh', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3AgfXtOPfNpli8S4vpu8f42OA6tWjf31L7q-xoFrD_lcYwREH'),
(5, 'Arteta', '1982-03-26', 'Tây Ban Nha', 'https://media.bongda.com.vn/files/nam.tan/2021/12/26/11-0811.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`MaBaiViet`),
  ADD UNIQUE KEY `MaNguoiDung` (`MaNguoiDung`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD UNIQUE KEY `MaBaiViet` (`MaBaiViet`),
  ADD UNIQUE KEY `MaNguoiDung` (`MaNguoiDung`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`TenDangNhap`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `MaNguoiDung` (`MaNguoiDung`);

--
-- Chỉ mục cho bảng `thich`
--
ALTER TABLE `thich`
  ADD UNIQUE KEY `MaBaiViet` (`MaBaiViet`),
  ADD UNIQUE KEY `MaNguoiDung` (`MaNguoiDung`);

--
-- Chỉ mục cho bảng `thongtinnguoidung`
--
ALTER TABLE `thongtinnguoidung`
  ADD PRIMARY KEY (`MaNguoiDung`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `MaBaiViet` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `thongtinnguoidung`
--
ALTER TABLE `thongtinnguoidung`
  MODIFY `MaNguoiDung` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD CONSTRAINT `baiviet_ibfk_1` FOREIGN KEY (`MaNguoiDung`) REFERENCES `thongtinnguoidung` (`MaNguoiDung`);

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`MaBaiViet`) REFERENCES `baiviet` (`MaBaiViet`),
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`MaNguoiDung`) REFERENCES `thongtinnguoidung` (`MaNguoiDung`);

--
-- Các ràng buộc cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `taikhoan_ibfk_1` FOREIGN KEY (`MaNguoiDung`) REFERENCES `thongtinnguoidung` (`MaNguoiDung`);

--
-- Các ràng buộc cho bảng `thich`
--
ALTER TABLE `thich`
  ADD CONSTRAINT `thich_ibfk_1` FOREIGN KEY (`MaBaiViet`) REFERENCES `baiviet` (`MaBaiViet`),
  ADD CONSTRAINT `thich_ibfk_2` FOREIGN KEY (`MaNguoiDung`) REFERENCES `thongtinnguoidung` (`MaNguoiDung`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
