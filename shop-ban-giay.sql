-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 13, 2023 lúc 11:16 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shop-ban-giay`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(10) NOT NULL,
  `iduser` int(10) DEFAULT 0,
  `ngaydathang` varchar(50) NOT NULL,
  `total` int(10) NOT NULL DEFAULT 0,
  `bill_status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0.Chờ xác nhận\r\n1.Đang lấy hàng\r\n2.Đang giao hàng\r\n3.giao hàng thành công\r\n4.Hủy',
  `receive_name` varchar(255) DEFAULT NULL,
  `receive_address` varchar(255) DEFAULT NULL,
  `receive_tel` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `iduser`, `ngaydathang`, `total`, `bill_status`, `receive_name`, `receive_address`, `receive_tel`) VALUES
(177, 475, '2023DecMon140th', 1500000, 4, 'admin', 'ngx btl', '0338475943'),
(179, 475, '2023DecMon140th', 1500000, 4, 'admin', 'ngx btl', '0338475943'),
(180, 475, '2023DecMon140th', 1650000, 4, 'admin', 'ngx btl', '0338475943'),
(181, 475, '2023-12-04', 150000, 0, 'admin', 'ngx btl', '0338475943'),
(182, 475, '2023-12-04', 150000, 0, 'admin', 'ngx btl', '0338475943'),
(183, 475, '2023DecWed110th', 3150000, 0, 'admin', 'ngx btl', '0338475943');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_chitiet`
--

CREATE TABLE `bill_chitiet` (
  `id_bill_ct` int(11) NOT NULL,
  `idpro` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `id_bill` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bill_chitiet`
--

INSERT INTO `bill_chitiet` (`id_bill_ct`, `idpro`, `soluong`, `iduser`, `id_bill`) VALUES
(52, 40, 8, 475, 177),
(53, 42, 2, 475, 177),
(54, 39, 0, 475, 178),
(55, 40, 8, 475, 179),
(56, 42, 2, 475, 179),
(57, 40, 8, 475, 180),
(58, 42, 2, 475, 180),
(59, 39, 1, 475, 180),
(60, 39, 0, 475, 181),
(61, 42, 0, 475, 182),
(62, 38, 5, 475, 183),
(63, 42, 3, 475, 183),
(64, 39, 3, 475, 183),
(65, 41, 2, 475, 183),
(66, 40, 8, 475, 183);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idpro` int(11) NOT NULL,
  `ngaybinhluan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(31, 'Mlem giá quá rẻ', 474, 37, '08/11/2023'),
(37, 'Giao hàng chậm ghê', 468, 24, '09/11/2023'),
(40, 'giay dep', 474, 23, '10/11/2023'),
(41, 'giay ben', 468, 31, '11/11/2023'),
(42, 'xinj', 474, 31, '13/11/2023'),
(43, 'giải đáp thắc mặc liên hệ zalo :0338475954', 468, 37, ''),
(44, 'depvail', 468, 44, ''),
(45, 'xin', 468, 44, '2023DecFri'),
(46, 'xin vai l', 468, 44, '2023 Dec Fri'),
(47, 'xin vai l', 468, 44, '23-12-01'),
(48, 'cmt', 468, 44, '2023-12-01'),
(49, 'xin', 468, 40, '2023-12-01'),
(50, 'vio', 468, 42, '2023-12-01'),
(51, 'xịn', 468, 42, '2023-12-01'),
(52, 'cmt', 468, 44, '2023-12-01'),
(53, 'xịn', 468, 35, '2023-12-01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `size` int(11) DEFAULT NULL,
  `soluong` int(2) NOT NULL,
  `thanhtien` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `iduser`, `idpro`, `size`, `soluong`, `thanhtien`) VALUES
(248, 468, 42, 36, 1, 150000),
(267, 475, 40, 36, 8, 1200000),
(268, 475, 42, 36, 2, 300000),
(269, 475, 39, 36, 1, 150000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`, `img`) VALUES
(19, 'Adidas', 'adidas.jpg'),
(20, 'Nike', 'nike.jpg'),
(22, 'Jordan', 'jordan.jpg'),
(23, 'Gucci', 'guccu.jpg'),
(24, 'Puma', 'puma.jpg'),
(25, 'Vans', 'vans.jpg'),
(26, 'Asic', 'asics.jpg'),
(27, 'Reebok', 'reebok.jpg'),
(28, 'New Balance', 'newb.png'),
(29, 'converse', 'converse.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `id` int(11) NOT NULL,
  `name_km` varchar(255) NOT NULL,
  `price_km` int(11) NOT NULL,
  `ngaybatdau` date NOT NULL,
  `ngayketthuc` date NOT NULL,
  `trangthai_km` varchar(255) NOT NULL,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) DEFAULT 0,
  `img` varchar(255) DEFAULT NULL,
  `mota` text DEFAULT NULL,
  `luotxem` int(11) DEFAULT 0,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `mota`, `luotxem`, `iddm`) VALUES
(33, 'Giày Gucci Screene', 150000, 'adidas1.png', 'Description\r\n \r\n\r\nGiày Gucci Screener ‘Distressed Green Orange’ (W) là một đôi giày thể thao nữ được thiết kế với tông màu xanh lá cây và cam chủ đạo. Giày được làm từ chất liệu da tổng hợp và lưới, mang lại cảm giác thoải mái và thoáng khí khi sử dụng.', 0, 23),
(34, 'Giày Gucci Screene', 150000, 'adidas2.png', 'Giày Gucci Screener ‘Distressed Green Orange’ (W) là một đôi giày thể thao nữ được thiết kế với tông màu xanh lá cây và cam chủ đạo. Giày được làm từ chất liệu da tổng hợp và lưới, mang lại cảm giác thoải mái và thoáng khí khi sử dụng.', 0, 23),
(35, 'Giafy jodan off white', 150000, 'adidas3.png', 'qqq', 0, 23),
(36, 'Adidas4', 150000, 'adidas4.png', 'mô tả here', 0, 23),
(37, 'Giày Gucci Screene', 150000, 'adidas1.png', 'Description\r\n \r\n\r\nGiày Gucci Screener ‘Distressed Green Orange’ (W) là một đôi giày thể thao nữ được thiết kế với tông màu xanh lá cây và cam chủ đạo. Giày được làm từ chất liệu da tổng hợp và lưới, mang lại cảm giác thoải mái và thoáng khí khi sử dụng.', 0, 19),
(38, 'Giày Gucci Screene', 150000, 'adidas2.png', 'Giày Gucci Screener ‘Distressed Green Orange’ (W) là một đôi giày thể thao nữ được thiết kế với tông màu xanh lá cây và cam chủ đạo. Giày được làm từ chất liệu da tổng hợp và lưới, mang lại cảm giác thoải mái và thoáng khí khi sử dụng.', 0, 19),
(39, 'Giafy jodan off white', 150000, 'adidas3.png', 'qqq', 0, 19),
(40, 'Adidas4', 150000, 'adidas4.png', 'mô tả here', 0, 19),
(41, 'Giày Gucci Screene', 150000, 'adidas1.png', 'Description\r\n \r\n\r\nGiày Gucci Screener ‘Distressed Green Orange’ (W) là một đôi giày thể thao nữ được thiết kế với tông màu xanh lá cây và cam chủ đạo. Giày được làm từ chất liệu da tổng hợp và lưới, mang lại cảm giác thoải mái và thoáng khí khi sử dụng.', 0, 20),
(42, 'Giày Gucci Screene', 150000, 'adidas2.png', 'Giày Gucci Screener ‘Distressed Green Orange’ (W) là một đôi giày thể thao nữ được thiết kế với tông màu xanh lá cây và cam chủ đạo. Giày được làm từ chất liệu da tổng hợp và lưới, mang lại cảm giác thoải mái và thoáng khí khi sử dụng.', 0, 20),
(43, 'Giafy jodan off white', 150000, 'adidas3.png', 'qqq', 0, 20),
(44, 'Adidas4', 150000, 'adidas4.png', 'mô tả here', 0, 19),
(45, 'New Balance 01', 123213, 'balance.png', 'sịn', 0, 28),
(46, 'Giày asic 1', 240000, 'sp4.png', 'sịn', 0, 26),
(48, 'sadasd', 100000, 'abc.png', 'xịn vãi l\r\n', 0, 29);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(10) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0. Người dùng\r\n1.Admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(474, 'khachhang', '123', 'hieulqph36904@fpt.edu.vn', 'ngx btl', '0338475943', 0),
(475, 'admin', 'admin', 'lequyhieu1024@gmail.com', 'ngx btl', '0338475943', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bill_chitiet`
--
ALTER TABLE `bill_chitiet`
  ADD PRIMARY KEY (`id_bill_ct`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_sanpham_danhmuc` (`iddm`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;

--
-- AUTO_INCREMENT cho bảng `bill_chitiet`
--
ALTER TABLE `bill_chitiet`
  MODIFY `id_bill_ct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=270;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=476;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
