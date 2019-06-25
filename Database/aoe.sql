SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `aoe`
--
CREATE DATABASE aoe;
USE aoe;
-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `clan`
--

CREATE TABLE `clan` (
  `Maclan` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `tenclan` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `Sothanhvien` int(11) DEFAULT NULL,
  `Diachi` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `clan`
--

INSERT INTO `clan` (`Maclan`, `tenclan`, `Sothanhvien`, `Diachi`) VALUES
('BBC', 'BiBiClub', 5, 'so90NguyenChanh,tpHaNoi'),
('GTV', 'GameTV', 6, 'so210TrungKinh,tpHaNoi'),
('TB', 'ThaiBinh', 5, 'so25QuanNhan,tpHaNoi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `developer`
--

CREATE TABLE `developer` (
  `taikhoan` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `matkhau` varchar(30) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `diachi` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `hoten` varchar(40) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `trangthai` varchar(1) COLLATE utf8mb4_vietnamese_ci DEFAULT '0',
  `quyen` int(1) NOT NULL DEFAULT '0',
  `avatar` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `developer`
--

INSERT INTO `developer` (`taikhoan`, `matkhau`, `email`, `diachi`, `hoten`, `trangthai`, `quyen`, `avatar`) VALUES
('hoanghung', 'hoanghung', 'hungkio16.9.98@gmail.com', 'Hà Nội', 'Hoàng Văn Hùng', '1', 1, 'image/admin.jpg'),
('hung', 'hung', 'email', 'hung', 'hung', '1', 0, 'image/member.jpg'),
('hungkio', 'hungkio', 'email', 'ha noi', 'hoanghung', '0', 0, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gamer`
--

CREATE TABLE `gamer` (
  `Nickname` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Hoten` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `Ngaysinh` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `Quequan` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `Maclan` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `gamer`
--

INSERT INTO `gamer` (`Nickname`, `Hoten`, `Ngaysinh`, `Quequan`, `Maclan`) VALUES
('bibi', 'Nguyễn Văn hùng', '1996-02-11', 'HaNoi', 'BBC'),
('chimsedinang', 'Nguyễn Đức Bình', '1996-01-06', 'HaNoi', 'GTV'),
('honganh', 'Đinh Đăng Hiếu', '1996-01-06', 'PhuTho', 'TB');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `tentheloai` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`tentheloai`) VALUES
('2vs2'),
('3vs3'),
('solo');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `video`
--

CREATE TABLE `video` (
  `id` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `tieude` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `luotxem` int(11) DEFAULT NULL,
  `nguoichoi` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `thoigian` date DEFAULT NULL,
  `link` varchar(100) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `theloai` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `video`
--

INSERT INTO `video` (`id`, `tieude`, `luotxem`, `nguoichoi`, `thoigian`, `link`, `theloai`) VALUES
('bibi01', 'BIBI, DƯƠNG CÒI --VS-- HOÀNG MAI NHI, TÝ', 9, 'bibi', '2018-12-27', 'https://www.youtube.com/embed/RcMVPjqBZXY', '2vs2'),
('chim02', 'Liên Quân vs GameTV', 3, 'chimsedinang', '2018-12-27', 'https://www.youtube.com/embed/JE_oXtJRdsE', 'solo'),
('chim03', ' CHIM SẺ,HỒNG ANH,BIBI AOE TRUNG VIỆT 2018- THỂ LO', 2, 'chimsedinang', '2018-07-06', 'https://www.youtube.com/embed/tPxgPW3oNi4', '3vs3'),
('chim05', ' CÚ ĐÚP CHÉM HAI NHÀ SIÊU HAY CỦA CHIM SẺ ĐI NẮNG', 0, 'chimsedinang', '2018-12-26', 'https://www.youtube.com/embed/yxGgCMGs0wU', 'solo'),
('chim1', 'Chim vs Shenlong', 0, 'chimsedinang', '2017-09-29', 'https://www.youtube.com/embed/cYuDCo1Pi8M', 'solo'),
('chimse03', 'CHÉM CHUYỂN CUNG A ĐI VÀO LỊCH SỬ AOE CỦA CHIM SẺ ', 1, 'chimsedinang', '2018-12-27', 'https://www.youtube.com/embed/yhwxV0TTrNk', 'solo'),
('honganh01', 'HỒNG ANH --VS-- HEHE', 0, 'honganh', '0000-00-00', 'https://www.youtube.com/embed/P-bek8O_Bes', 'solo');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `clan`
--
ALTER TABLE `clan`
  ADD PRIMARY KEY (`Maclan`);

--
-- Chỉ mục cho bảng `developer`
--
ALTER TABLE `developer`
  ADD PRIMARY KEY (`taikhoan`);

--
-- Chỉ mục cho bảng `gamer`
--
ALTER TABLE `gamer`
  ADD PRIMARY KEY (`Nickname`),
  ADD KEY `Maclan` (`Maclan`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`tentheloai`);

--
-- Chỉ mục cho bảng `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nguoichoi` (`nguoichoi`),
  ADD KEY `theloai` (`theloai`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `gamer`
--
ALTER TABLE `gamer`
  ADD CONSTRAINT `gamer_ibfk_1` FOREIGN KEY (`Maclan`) REFERENCES `clan` (`Maclan`);

--
-- Các ràng buộc cho bảng `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `video_ibfk_1` FOREIGN KEY (`nguoichoi`) REFERENCES `gamer` (`Nickname`),
  ADD CONSTRAINT `video_ibfk_2` FOREIGN KEY (`theloai`) REFERENCES `theloai` (`tentheloai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
