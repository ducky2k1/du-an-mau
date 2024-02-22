-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th1 22, 2024 lúc 04:11 PM
-- Phiên bản máy phục vụ: 8.0.31
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `xsshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_bl` int NOT NULL COMMENT 'mã bình luận',
  `noi_dung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'nội dung bình luận',
  `ma_hh` int NOT NULL COMMENT 'mã hàng hoá được bình luận',
  `ma_kh` int NOT NULL COMMENT 'mã người bình luận',
  `ngay_bl` date NOT NULL COMMENT 'thời gian bình luận',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'chưa duyệt'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`ma_bl`, `noi_dung`, `ma_hh`, `ma_kh`, `ngay_bl`, `status`) VALUES
(5, 'đẹp', 13, 3, '2023-06-01', 'đã duyệt'),
(6, 'hay', 13, 5, '2023-06-20', 'đã duyệt'),
(7, 'ok đó', 13, 4, '2023-06-11', 'đã duyệt'),
(13, 'haha', 13, 4, '2023-06-11', 'đã duyệt'),
(14, 'đẹp quá', 24, 4, '2023-06-11', 'chưa duyệt'),
(17, 'Máy ảnh đẹp quá\r\nhihi', 26, 1, '2023-06-11', 'chưa duyệt'),
(18, 'Xin chào', 26, 4, '2023-06-11', 'đã duyệt'),
(19, 'Sản phẩm tuyệt vời', 14, 1, '2023-06-12', 'chưa duyệt'),
(20, 'Hay', 14, 8, '2023-06-12', 'chưa duyệt'),
(21, 'hahahxx', 13, 1, '2023-06-15', 'chưa duyệt'),
(23, 'sản phẩm tuyệt vời', 13, 1, '2023-10-17', 'đã duyệt'),
(28, 'okok', 26, 8, '2023-10-19', 'đã duyệt'),
(29, 'sản phẩm tuyệt vời', 13, 1, '2023-10-19', 'đã duyệt'),
(30, 'sản phẩm tốt', 13, 1, '2023-10-19', 'đã duyệt');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang_hoa`
--

CREATE TABLE `hang_hoa` (
  `ma_hh` int NOT NULL COMMENT 'mã hàng hoá',
  `ten_hh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'tên hàng hoá',
  `don_gia` double(10,2) NOT NULL COMMENT 'đơn giá',
  `giam_gia` double(10,2) NOT NULL COMMENT 'mức giảm giá',
  `hinh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'hình ảnh',
  `ngay_nhap` date DEFAULT NULL COMMENT 'ngày nhập hàng',
  `mo_ta` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'mô tả hàng hoá',
  `dac_biet` tinyint(1) NOT NULL COMMENT 'tràng thái đặc biệt',
  `so_luot_xem` int NOT NULL DEFAULT '0' COMMENT 'số lượt xem',
  `ma_loai` int NOT NULL COMMENT 'mã loại'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hang_hoa`
--

INSERT INTO `hang_hoa` (`ma_hh`, `ten_hh`, `don_gia`, `giam_gia`, `hinh`, `ngay_nhap`, `mo_ta`, `dac_biet`, `so_luot_xem`, `ma_loai`) VALUES
(13, 'Đồng hồ MVW', 150.00, 1.00, 'dh1.jpg', '2023-06-05', 'Màu vàng, xanh', 1, 189, 25),
(14, 'Đồng hồ Cover 2', 150.00, 1.00, 'cover-coa9-01-nu-2.jpg', '2023-06-05', 'Màu bạc', 0, 8, 25),
(16, 'Đồng hồ MVW 3', 150.00, 4.00, 'mvw-star-msa004-01-nam-2.jpg', '2023-06-05', 'Màu bạc, đen', 0, 2, 25),
(17, 'Điện thoại Iphone 14 Pro Max 128GB', 1000.00, 10.00, 'iphone-14-pro.jpg', '2023-06-02', 'Màu đen', 0, 0, 28),
(18, 'Điện thoại Samsung Galaxy S21 FE', 450.00, 10.00, 'samsung-galaxy-s21.jpg', '2023-05-31', 'Màu xanh ', 0, 0, 28),
(19, 'Laptop Apple MacBook Air 13 inch', 1300.00, 10.00, 'grey-1-org.jpg', '2023-06-02', 'Màu bạc', 0, 36, 26),
(20, 'Laptop Lenovo IdeaPad 1', 1000.00, 5.00, 'lenovo-ideapad-1.jpg', '2023-05-29', 'Màu bạc', 0, 1, 26),
(21, 'MÁY ẢNH SONY ALPHA A6400', 1100.00, 15.00, 'may-anh-sony-alpha.jpg', '2023-06-03', 'Màn hình cảm ứng, lật 180° 3.0\" 921.6k-Dot', 0, 2, 27),
(23, 'Điện thoại Samsung Galaxy A14 6GB', 250.00, 10.00, 'samsung-galaxy-a14-4g-den-1-1.jpg', '2023-06-01', 'Màu đen', 0, 0, 28),
(24, 'Laptop Asus TUF Gaming F15', 1000.00, 5.00, 'asus-tuf-gaming-fx506lhb-i5-hn188w-1.jpg', '2023-06-02', 'Màu đen', 0, 40, 26),
(25, 'Máy ảnh Canon EOS R6', 2500.00, 0.00, 'canon-eos-r6-1-500x500.jpg', '2023-06-01', 'Màu đen', 0, 0, 27),
(26, 'Máy ảnh Nikon Z5', 2000.00, 0.00, 'nikon-z5-with-lens-24-200-1-500x500.jpg', '2023-06-02', 'Màu đen', 0, 31, 27);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `ma_loai` int NOT NULL COMMENT 'mã loại hàng',
  `ten_loai` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'tên loại hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`ma_loai`, `ten_loai`) VALUES
(25, 'Đồng hồ'),
(26, 'Máy tính'),
(27, 'Máy ảnh'),
(28, 'Điện thoại');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `ma_us` int NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hinh` varchar(100) NOT NULL,
  `location` varchar(50) NOT NULL,
  `role` varchar(15) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`ma_us`, `fullname`, `email`, `password`, `hinh`, `location`, `role`) VALUES
(1, '      Trịnh Việt Đức      ', 'admin', '      admin      ', '1111.png', '      Hải dương      ', 'admin'),
(3, 'Trần Văn D', '123@gmail.com', '123', 'nikon-z5-with-lens-24-200-1-500x500.jpg', 'Hải Dương', 'user'),
(4, 'Trịnh Việt Đức 222', 'ab12@gmail.com', '123', 'avt.jpg', 'Nam Định', 'user'),
(5, 'abca12', 'duc15@gmail.com', '123', 'avt.jpg', 'Nam Định', 'user'),
(8, 'Phạm Bá Tuấn', 'tuan1@gmail.com', '1234567', '950299.png', 'Nghệ An', 'user');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_bl`),
  ADD KEY `ma hh` (`ma_hh`),
  ADD KEY `ma_kh_bl` (`ma_kh`);

--
-- Chỉ mục cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD PRIMARY KEY (`ma_hh`),
  ADD KEY `ma loai` (`ma_loai`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`ma_loai`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ma_us`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_bl` int NOT NULL AUTO_INCREMENT COMMENT 'mã bình luận', AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  MODIFY `ma_hh` int NOT NULL AUTO_INCREMENT COMMENT 'mã hàng hoá', AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `ma_loai` int NOT NULL AUTO_INCREMENT COMMENT 'mã loại hàng', AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `ma_us` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `ma hh` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`ma_hh`),
  ADD CONSTRAINT `ma_kh_bl` FOREIGN KEY (`ma_kh`) REFERENCES `user` (`ma_us`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD CONSTRAINT `ma loai` FOREIGN KEY (`ma_loai`) REFERENCES `loai` (`ma_loai`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
