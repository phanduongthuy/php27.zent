/*
 Navicat Premium Data Transfer

 Source Server         : php_27
 Source Server Type    : MySQL
 Source Server Version : 100417
 Source Host           : localhost:3306
 Source Schema         : movie_mvc

 Target Server Type    : MySQL
 Target Server Version : 100417
 File Encoding         : 65001

 Date: 22/04/2021 17:03:59
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `parent_id` int NULL DEFAULT NULL COMMENT 'danh mục cha',
  `slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `description` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT 'Mô tả thể loại',
  `created_at` timestamp NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP COMMENT 'Ngày tạo',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `parent_id`(`parent_id`) USING BTREE,
  CONSTRAINT `categories_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 23 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES (1, 'Phim hành động', NULL, 'phim-hanh-dong', 'Ở đây toàn phim hành động', '2021-04-17 15:46:31');
INSERT INTO `categories` VALUES (6, 'Phim khoa học viễn tưởng', NULL, 'phim-khoa-hoc-vien-tuong', 'Nếu bạn yêu thích khoa học này thì hãy chọn dòng phim này', '2021-04-17 18:01:57');
INSERT INTO `categories` VALUES (7, 'Phim hoạt hình', NULL, 'phim-hoat-hinh', 'Phù hợp với cả các em nhỏ cho đến những người lớn tuổi', '2021-04-17 23:09:03');
INSERT INTO `categories` VALUES (8, 'Phim hành động hài hước', 1, 'phim-hanh-dong-hai-huoc', 'Là phim hành động nhưng cũng không kém phần hài hước.', '2021-04-20 22:55:15');
INSERT INTO `categories` VALUES (12, 'Phim cổ trang', NULL, 'phim-co-trang', 'Ai thích xem kiếm hiệp thì có thể chọn danh mục này', '2021-04-21 01:15:42');
INSERT INTO `categories` VALUES (14, 'Phim cổ trang thần thoại', 12, 'phim-co-trang-than-thoai', 'Bao gồm cả yến tố cổ trang lẫn thần thoại.', '2021-04-21 01:18:22');
INSERT INTO `categories` VALUES (15, 'Phim thần thoại viễn tưởng', 6, 'phim-than-thoai-vien-tuong', 'Phim này coi thì bá cháy', '2021-04-21 08:05:53');
INSERT INTO `categories` VALUES (16, 'Phim cổ trang võ thuật', 12, 'phim-co-trang-vo-thuat', 'Đã cổ trang thì khó mà thiếu võ thuật', '2021-04-21 08:14:13');
INSERT INTO `categories` VALUES (20, 'Phim hành động hình sự', 1, 'phim-hanh-dong-hinh-su', 'Hành động mà lại còn hình sự nữa thì không còn gì để nói thêm.', '2021-04-21 17:56:13');
INSERT INTO `categories` VALUES (22, 'Phim tâm lý', NULL, 'phim-tam-ly', 'Sự đồng cảm tâm lý giữa cả người trong phim  và người xem phim', '2021-04-21 20:26:57');

-- ----------------------------
-- Table structure for movies
-- ----------------------------
DROP TABLE IF EXISTS `movies`;
CREATE TABLE `movies`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `user_id` int NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `type` tinyint NULL DEFAULT 0 COMMENT '0-movie\n1-tv series ',
  `category_id` int NULL DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `view_count` bigint NULL DEFAULT NULL COMMENT 'View',
  `age` int NULL DEFAULT NULL COMMENT 'Giới hạn độ tuổi',
  `quality` int NULL DEFAULT NULL COMMENT 'Độ phân giải',
  `time` int NULL DEFAULT NULL COMMENT 'Thời lượng',
  `created_at` timestamp NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP COMMENT 'Ngày tạo',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 36 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of movies
-- ----------------------------
INSERT INTO `movies` VALUES (1, 'Raya và rồng thần cuối cùng', 'Raya và Rồng Thần Cuối Cùng kể về một vương quốc huyền bí có tên là Kumandra – vùng đất mà loài rồng và con người sống hòa thuận với nhau. Nhưng rồi một thế lực đen tối bỗng đe dọa bình yên nơi đây, loài rồng buộc phải hi sinh để cứu lấy loài người. 500 năm sau, thế lực ấy bỗng trỗi dậy và một lần nữa, Raya là chiến binh duy nhất mang trong mình trọng trách đi tìm Rồng Thần cuối cùng trong truyền thuyết nhằm hàn gắn lại khối ngọc đã vỡ để cứu lấy vương quốc. Thông qua cuộc hành trình, Raya nhận ra loài người cần nhiều hơn những gì họ nghĩ, đó chính là lòng tin và sự đoàn kết.', 1, '/raya-va-rong-than-cuoi-cung-825-250x350.jpg', 0, 7, 'raya-va-rong-than-cuoi-cung', 235000, 0, 2, 114, '2021-04-21 17:13:14');
INSERT INTO `movies` VALUES (10, 'Vụ Án Bắt Dê (Get the Goat-2021)', 'Vụ Án Bắt Dê kể về hai cảnh sát xui xẻo nhận ra họ ngập trong rắc rối khi vô tình chạm trán với bọn tội phạm nguy hiểm trong lúc tìm kiếm Celestina – linh vật dê được yêu mến.', 1, '/vu-an-bat-de-1026-250x350.jpg', 0, 8, 'vu-an-bat-de-get-the-goat-2021', 235002, 0, 0, 97, '2021-04-22 01:20:10');
INSERT INTO `movies` VALUES (12, ' Bạch Xà: Tình Kiếp', 'Bạch Xà: Tình Kiếp kể về nữ xà yêu Bạch Tố Tố mang trong mình linh huyết – thứ máu thần có thể làm tăng sức mạnh của pháp sư trừ yêu lên gấp bội. Bị dã tâm và tham vọng làm mờ mắt, những pháp sư trừ yêu liền truy bắt cô để làm lợi cho mình. Hứa Tiên – chàng pháp sư xuất thân từ một gia tộc trừ yêu thất thế, đã bắt được Bạch Tố Tố. Chàng vốn định bán nàng đi để thu về cả một gia tài, dùng số của cải đó để khôi phục danh dự và tiếng tăm cho gia đình. Nhưng trớ trêu thay, Hứa Tiên lại phải lòng Bạch Tố Tố. Giữa tình yêu và gia tộc, Hứa Tiên sẽ chọn gì?', 1, '/bach-xa-tinh-kiep-1048.jpg', 0, 14, 'bach-xa-tinh-kiep', 26349, 0, 0, 90, '2021-04-22 01:20:23');
INSERT INTO `movies` VALUES (13, 'Godzilla Đại Chiến Kong (2021)', 'Godzilla Đại Chiến Kong (Godzilla Vs. Kong) lấy bối cảnh sau các sự kiện diễn ra ở “Godzilla: King of the Monsters”, trong thời đại mà các Titans đòi lại quyền làm chủ hành tinh, cuộc đấu tranh sinh tồn giữa loài người với chúng đã dẫn đến một cuộc chiến không thể tránh khỏi giữa Godzilla và Kong. Trong khi Monarch cố gắng làm sáng tỏ nguồn gốc của Titans, thì vẫn còn đó một âm mưu đen tối với mục đích là tiêu diệt tất cả các Titan và toàn bộ các sinh vật trên Trái Đất …', 1, '/publicpreview.jpg', 0, 15, 'godzilla-dai-chien-kong-2021', 2256351, 0, 2, 113, '2021-04-22 01:20:37');
INSERT INTO `movies` VALUES (14, 'Thợ Rèn Kiếm Vĩ Đại', 'Thợ Rèn Kiếm Vĩ Đại kể về mối họa diệt môn đến từ gian thần triều đình Triệu Hàm đã ập tới gia đình thợ rèn kiếm số một thiên hạ Mông Dã Tử vì ông rèn ra thanh kiếm nổi danh Hàm Quang, ông liều mạng bảo toàn tính mạng cho Mông Dương và để lại thanh kiếm Thừa Ảnh đang rèn dang dở. Hai mươi năm sau Mông Dương khôn lớn thành người, lên kế hoạch báo thù cho cha, nhưng thanh kiếm Thừa Ảnh có thể khắc chế được thanh kiếm Hàm Quang lại vẫn mãi chưa đúc thành. Hoàng đế bệnh tình nguy kịch, vừa hay cơ duyên đến, Mông Dương nhận được nhiệm vụ hộ tống Thái tử Công Tử Đô về cung kế vị. Để điều tra chân tướng vụ Mông phủ bị diệt môn và báo thù cho cha, Mông Dương đã tiếp nhận nhiệm vụ, lần nữa kéo về mối họa sát thân.', 1, '/tho-ren-kiem-vi-dai-1117.jpg', 0, 16, 'tho-ren-kiem-vi-dai', 18932, 0, 0, 91, '2021-04-22 01:20:50');
INSERT INTO `movies` VALUES (15, 'Tiệc Trăng Máu', 'Tiệc Trăng Máu là bộ phim xoay quanh một bữa tiệc “đẫm máu” của nhóm bạn chơi thân 40 năm với nhau. Bữa tiệc tân gia diễn ra vui vẻ cho tới khi Nguyệt Ánh (Hồng Ánh đóng) đề nghị tất cả chơi một trò chơi công khai những tin nhắn và điện thoại gọi tới. Và rồi hàng loạt bí mật dần hé lộ, cả 4 gia đình và cả nhóm bạn đều có những bí mật động trời, cho tới khi lộ ra họ đã không còn giữ được trọn vẹn một mối quan hệ nào cả.', 1, '/tiec-trang-mau-612-250x350.jpg', 0, 22, 'tiec-trang-mau', 65289, 0, 2, 118, '2021-04-22 01:21:33');
INSERT INTO `movies` VALUES (16, 'Bàn Tay Diệt Quỷ', 'Bàn Tay Diệt Quỷ – Evil Expeller (2021) là một bộ phim kinh dị hành động Hàn Quốc được viết và đạo diễn bởi Kim Joo-hwan. Phim có sự tham gia của Park Seo-joon, Ahn Sung-ki và Woo Do-hwan. Bộ phim được phát hành vào ngày 31 tháng 7 năm 2019. Sau khi bản thân bỗng nhiên sở hữu “Bàn tay diệt quỷ”, võ sĩ MMA Yong Hoo (Park Seo Joon thủ vai) đã dấn thân vào hành trình trừ tà, trục quỷ đối đầu với Giám Mục Bóng Tối (Woo Do Hwan) – tên quỷ Satan đột lốt người. Từ đó sự thật về cái chết của cha Yong Hoo cũng dần được hé lộ cũng như nguyên nhân anh trở thành “người được chọn”.', 1, '/ban-tay-diet-quy-1128-250x350.jpg', 0, 1, 'ban-tay-diet-quy', 147692, 0, 0, 128, '2021-04-21 20:18:24');
INSERT INTO `movies` VALUES (17, 'Tân Phong Thần: Na Tra Trùng Sinh', 'Tân Phong Thần: Na Tra Trùng Sinh là một bộ phim hành động giả tưởng 3D hoạt hình Trung Quốc năm 2021 do Zhao Ji đạo diễn và Mu Chuan viết kịch bản, dựa trên nhân vật Nezha trong cuốn tiểu thuyết Investiture of the Gods của triều đại nhà Minh. Tân Phong Thần: Na Tra Trùng Sinh xoay quanh mối quan hệ phức tạp giữa hai kỳ phùng địch thủ là Na Tra và Ngao Bính, nhưng bộ phim không phải là phần tiếp theo của Na Tra: Ma Đồng Giáng Thế năm 2019. Trong cuộc sống của một người giao hàng bình thường kiêm tín đồ đua xe, Na Tra chạm trán những kẻ thù cũ và phải tìm lại năng lực của mình để bảo vệ những người thân yêu.', 1, '/tan-phong-than-na-tra-trung-sinh-1137-250x350.jpg', 0, 15, 'tan-phong-than-na-tra-trung-sinh', 1475264, 0, 0, 117, '2021-04-22 01:21:51');
INSERT INTO `movies` VALUES (18, 'Đêm Nơi Thiên Đường', 'Đêm Nơi Thiên Đường – Night in Paradise là bộ phim truyền hình Hàn Quốc được phát hành vào năm 2020 do Park Hoon-jung viết kịch bản và đạo diễn. Bộ phim có sự tham gia của các diễn viên Uhm Tae-goo, Jeon Yeo-be và Cha Seung-won. Tác phẩm đã có buổi ra mắt lần đầu trên thế giới vào ngày 3 tháng 9 năm 2020 tại liên hoan phim quốc tế Venice lần thứ 77 và được phát sóng trực tuyến trên Netflix vào ngày 9 tháng 4 năm 2021.Đêm Nơi Thiên Đường kể về một tay xã hội đen chịu bất công và bị truy đuổi, hắn phải trốn trên đảo Jeju sau một bi kịch thảm khốc. Sau đó, hắn tìm được sự kết nối với một người phụ nữ, và cô cũng có những mặt tối riêng.', 1, '/dem-noi-thien-duong-1154-250x350.jpg', 0, 1, 'dem-noi-thien-duong', 14067, 0, 1, 131, '2021-04-22 01:22:13');
INSERT INTO `movies` VALUES (19, 'Kẻ Vô Danh', 'Kẻ Vô Danh – Nobody (2021): Đôi khi người đàn ông mà bạn không để ý lại là người nguy hiểm nhất. Hutch Mansell, một người cha và người chồng bị đánh giá thấp và bị coi thường, luôn coi thường sự phẫn nộ của cuộc đời và không bao giờ lùi bước. Một kẻ vô danh.', 1, '/ke-vo-danh-1168-250x350.jpg', 0, 1, 'ke-vo-danh', 35469, 0, 0, 92, '2021-04-22 01:22:24');
INSERT INTO `movies` VALUES (20, 'Ám Sát Tiểu Thuyết Gia', 'Ám Sát Tiểu Thuyết Gia là một bộ phim phiêu lưu hành động giả tưởng của Trung Quốc năm 2021 do Lu Yang đạo diễn và viết kịch bản và Ning Hao sản xuất. Phim được khởi chiếu từ ngày 12 tháng 2 năm 2021, nhằm vào dịp Tết Nguyên đán. Bộ phim dựa trên tiểu thuyết cùng tên của Shuang Xuetao, và phần tiếp theo là Godslayer.Ám Sát Tiểu Thuyết Gia kể về một người cha (Lei Jiayin) vì mong muốn tìm con gái mất tích của mình, đã đồng ý giúp đỡ một người phụ nữ bí ẩn (Yang Mi) ám sát một tiểu thuyết gia (Dong Zijian). Đồng thời, người anh hùng trẻ tuổi trong vũ trụ thay thế của cuốn sách cũng đã đưa kế hoạch trả thù của mình vào hành động, và hành động của anh ta bắt đầu ảnh hưởng đến thế giới thực.Ám Sát Tiểu Thuyết Gia (Assassin in Red): Có thể thấy từ poster, ngoài thế giới thực, có một thế giới giả tưởng khác trong phim, có đèn lồng bay và những người lính dưới ánh đèn toàn chiến đấu, như một trận chiến đang diễn ra. Hai thế giới phát triển bài hát song và đặt cánh cửa cho nhau, tạo cho câu chuyện một trí tưởng tượng lớn hơn. Chỉ xuất hiện thoáng qua trong trailer nhưng Dương Mịch gây ấn tượng nhờ màn xoay người, đá chân, nhào lộn rất chuyên nghiệp khi cận chiến cùng một người. Cư dân mạng khen ngợi tác động tuyệt vời và biểu cảm tốt của nữ diễn viên khi thực hiện tổng hợp ngược lại. Bên cạnh đó, cách đọc thoại của cô ấy cũng tiến bộ hơn với các bộ phim trước.', 1, '/am-sat-tieu-thuyet-gia-749-250x350.jpg', 0, 1, 'am-sat-tieu-thuyet-gia', 962, 0, 0, 130, '2021-04-22 01:22:40');
INSERT INTO `movies` VALUES (21, 'Vincenzo Cassano  (2021)', 'Vincenzo (2021) Full HD Vietsub - Thuyết MinhVincenzo (2021) kể về Vincenzo Cassano (Song Joong Ki thủ vai) là một người Hàn Quốc được gia đình Ý nhận nuôi từ bé. Anh vốn sở hữu sức hút vô song cùng kỹ năng đàm phán tuyệt đỉnh, mục đích duy nhất của anh là trả thù dưới danh nghĩa trùm Mafia Ý. Vốn dĩ Vincenzo không muốn trở lại đất nước Hàn Quốc, quê hương với những quá khứ đẫm máu, đau khổ nhưng anh buộc phải về khi phát hiện ra một băng đảng độc ác, có nguồn gốc sâu xa đến từ Hàn Quốc. Tại đây anh cùng với nữ luật sư tài giỏi Hong Cha Young (Jeon Yeo Bin thủ vai) và thực tập sinh Jang Joon Woo (Taecyeon đảm nhận) kết hợp điều tra những vụ án bí ẩn chưa có lời giải đáp trong khoảng thời gian dài.Nhìn chung phim Vincenzo sở hữu nội dung được đánh giá khá cao và hơn hết đây là bộ phim đánh dấu sự trở lại của nam diễn viên nổi tiếng Song Joong Ki sau cú ngã ngựa ở Biên niên sử Arthdal. Theo như nhà sản xuất tiết lộ thì kinh phí cho mỗi tập Vincenzo lên đến 4 tỷ đồng (khoảng 200 triệu won).', 1, '/vincenzo-2021-704-250x350.jpg', 1, 20, 'vincenzo-cassano-2021', 3576944, 0, 2, 60, '2021-04-22 14:15:22');
INSERT INTO `movies` VALUES (22, 'Chim Ưng Và Chiến Binh Mùa Đông', 'Chim Ưng Và Chiến Binh Mùa Đông (The Falcon and the Winter Soldier 2021) là bộ phim truyền hình Mỹ thuộc thể loại viễn tưởng, hành động do Malcolm Spellman tạo ra cho dịch vụ phát trực tuyến Disney+. Là một miniseries dựa trên các nhân vật Marvel Comics Sam Wilson/ Falcon và Bucky Barnes/ Winter Soldier.  Sau các sự kiện trong Avengers: Endgame, Sam Wilson/ Chim Ưng và Bucky Barnes/ Chiến Binh Mùa Đông cùng hợp tác chống lại mối nguy hiểm mang quy mô quốc tế nhằm thử thách khả năng và sự kiên nhẫn của hai nhân vật này. The Falcon & the Winter Soldier sẽ là một bộ phim mang đến cho người xem những pha hành động mãn nhãn không thua kém các dự án trước đó mà Marvel đã thành công. Đặc biệt, phim còn mang nhiều sắc thái hơn và khám phá sâu hơn về các nhân vật của nó so với các bộ phim khác của MCU.', 1, '/chim-ung-va-chien-binh-mua-dong-1062-250x350.jpg', 1, 1, 'chim-ung-va-chien-binh-mua-dong', 3795436, 0, 3, 50, '2021-04-22 01:23:11');
INSERT INTO `movies` VALUES (24, 'QUẢN GIA NGƯỜI DƠI (PHẦN 2)', 'Pennyworth là serie phim tiền truyện của Batman kể về Alfred Pennyworth, quản gia tại Dinh Thự nhà Wayne, không chỉ thế, Alfred còn được xem như một người thầy, người anh, người cha, và là một trong những trợ thủ đắc lực nhất của Kỵ Sĩ Bóng Đêm. Ông là một con người đa tài - không chỉ giỏi giang trong những việc nhỏ nhắn như bếp núc mà còn thành thạo trong việc chữa thương (vốn là sở trường của ông).Không những thế, điều khiến Alfred nổi bật hơn cả chính quá khứ khá là huy hoàng của ông. Alfred từng là một điệp viên của MI-5 trước khi ông quyết định nghỉ hưu và theo đuổi nghiệp Sân Khấu Điện Ảnh. Sau đó, khi cha ông qua đời, Alfred đã đến Dinh Thự Wayne để nối nghiệp bố trở thành Quản Gia của gia đình nhà Wayne, lúc này Bruce Wayne vẫn chỉ còn là một đứa trẻ.', 1, '/poster.medium (2).jpg', 1, 1, 'quan-gia-nguoi-doi-phan-2', 6583, 0, 2, 60, '2021-04-22 14:15:40');
INSERT INTO `movies` VALUES (25, 'The Flash (season 7) (2021)', 'The Flash phần 7 tiếp tục tập trung vào khoa học Barry Allen, người trở thành siêu anh hùng với sức mạnh và tốc độ đáng kinh ngạc sau khi bị sét đánh do vụ nổ máy gia tốc Harrison Wells.', 1, '/poster.medium (3).jpg', 1, 6, 'the-flash-season-7-2021', 4259, 0, 2, 43, '2021-04-22 01:23:44');
INSERT INTO `movies` VALUES (30, 'Thợ Săn Quái Vật Monster Hunter (2020)', 'Monster Hunter được chuyển thể từ series game nổi tiếng cùng tên của Capcom. Trong phim, đội trưởng Artemis của nữ diễn viên Milla Jovovich và đồng đội đã vô tình bước qua một cánh cửa bí ẩn dẫn tới thế giới khác. Tại đây, họ phải chiến đấu với nhiều loài quái vật khổng lồ trong hành trình trở về thế giới. Đồng hành với họ trong trận chiến là nhân vật “Thợ săn” của nam diễn viên Tony Jaa. Monster Hunter hứa hẹn sẽ là bom tấn hành động với những màn săn quái vật khổng lồ hoành tráng nhất năm 2020.', 1, '/postere.jpg', 0, 6, 'tho-san-quai-vat-monster-hunter-(2020)', 1359724, 0, 0, 99, '2021-04-21 16:18:38');
INSERT INTO `movies` VALUES (31, 'Avengers 4: Endgame (2019)', 'Biệt Đội Siêu Anh Hùng 4: Tàn Cuộc (Avengers 4: Endgame) ra mắt vào tháng 4/2019 sẽ giải quyết triệt để những khúc mắc đã vạch ra suốt 22 bộ phim trước đó của Vụ trụ điện ảnh Marvel (MCU). Hai tháng sau đó, Người Nhện 2 là khởi đầu hoàn toàn mới dành cho MCU.\r\n\r\nSau sự kiện Thanos làm cho một nửa vũ trụ tan biến và khiến cho biệt đội Avengers thảm bại, những siêu anh hùng sống sót phải tham gia trận chiến cuối cùng trong Avengers: Endgame.', 1, '/avenger.jpg', 0, 6, 'avengers-4:-endgame-(2019)', 32896647, 0, 3, 181, '2021-04-21 16:18:54');
INSERT INTO `movies` VALUES (32, 'Sát Thủ Vô Cùng Cực (2020)', 'Xoay quanh Joon, chàng cựu điệp viên của NIS, ', 1, '/jw.jpg', 0, 8, 'sat-thu-vo-cung-cuc-2020', 9328451, 0, 2, 110, '2021-04-22 01:24:01');
INSERT INTO `movies` VALUES (33, 'Âm Dương Sư: Thị Thần Lệnh', 'Âm Dương Sư: Thị Thần Lệnh kể về một cuộc tranh đấu nổ ra giữa các cõi, và Âm Dương Sư Tình Minh bắt tay với hộ vệ bị thất sủng Viên Bác Nhã để chế ngự mối đe dọa ma quỷ khi một âm mưu dần triển khai.', 1, '/am-duong-su-thi-than-lenh-981.jpg', 0, 16, 'am-duong-su-thi-than-lenh', 3795023, 0, 2, 120, '2021-04-22 14:18:26');
INSERT INTO `movies` VALUES (34, 'Phương Thế Ngọc Mình Đồng Da Sắt', 'Phương Thế Ngọc Mình Đồng Da Sắt kể về Phương Thế Ngọc luyện võ vừa mới trở về thành Triệu Khánh liền dây dưa phải một vụ án tham ô. Ngạc Nhĩ Đa phụng mệnh dẫn người đi giết người diệt khẩu và tiêu hủy chứng cứ. Bạn tốt gặp nạn, người thân bị bắt, đối diện với muôn trùng khó khăn và nguy hiểm, Phương Thế Ngọc và Lôi Đình Đình quyết tâm phản kháng đến cùng, sống mái với thế ực ác bá.', 1, '/phuong-the-ngoc-minh-dong-da-sat-877.jpg', 0, 16, 'phuong-the-ngoc-minh-dong-da-sat', 1153, 0, 0, 89, '2021-04-22 14:17:56');
INSERT INTO `movies` VALUES (35, 'Zack Snyder’s Liên Minh Công Lý', 'Zack Snyder’s Liên Minh Công Lý (Zack Snyder’s Justice League), thường được gọi là “Snyder Cut”, là phần cắt của đạo diễn năm 2021 về bộ phim siêu anh hùng Mỹ năm 2017 Justice League. Liên Minh Công Lý: Phiên bản của Zack Snyder lấy bối cảnh sau cái chết của Siêu Nhân, Người Dơi cùng Nữ thần Chiến binh lên kế hoạch chiêu mộ một nhóm người cường hóa để bảo vệ thế giới khỏi mối đe dọa khủng khiếp sắp tới.', 1, '/zack-snyders-lien-minh-cong-ly-966-250x350.jpg', 0, 6, 'zack-snyder’s-lien-minh-cong-ly', 4895124, 0, 3, 242, '2021-04-21 16:20:10');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `birdth` date NULL DEFAULT NULL COMMENT 'Ngày sinh',
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'Địa chỉ',
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `avatar` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT 'Đường dẫn ảnh',
  `created_at` timestamp NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP COMMENT 'Ngày tạo',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Phan Dương Thùy', '2001-11-11', 'Vĩnh Tường - Vĩnh Phúc', 'thuypd.hubt@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '/IMG_0288.JPEG', '2021-04-21 01:14:16');

-- ----------------------------
-- Table structure for videos
-- ----------------------------
DROP TABLE IF EXISTS `videos`;
CREATE TABLE `videos`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `movie_id` int NULL DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `source` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `user_id` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 33 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of videos
-- ----------------------------
INSERT INTO `videos` VALUES (1, 'Avenger', 31, 'Nguồn từ youtube', 'https://www.youtube.com/watch?v=TcMBFSGVi1c', 1);
INSERT INTO `videos` VALUES (3, 'Sát Thủ Vô Cùng Cực', 32, '', 'https://www.youtube.com/watch?v=i8X6Snxa65U&t=4s', 1);
INSERT INTO `videos` VALUES (4, 'Raya và rồng thần cuối cùng', 1, 'Nguồn từ youtube', 'https://www.youtube.com/watch?v=A-5RUmopVqA', 1);
INSERT INTO `videos` VALUES (5, 'Vụ Án Bắt Dê', 10, 'Nguồn từ youtube', 'https://www.youtube.com/watch?v=_MI4dxn26Xo', 1);
INSERT INTO `videos` VALUES (6, 'Zack Snyder’s Liên Minh Công Lý', 35, 'Nguồn từ youtube', 'https://www.youtube.com/watch?v=vM-Bja2Gy04', 1);
INSERT INTO `videos` VALUES (7, 'Thợ Săn Quái Vật', 30, 'Nguồn từ youtube', 'https://www.youtube.com/watch?v=puQyZsaTtqY', 1);
INSERT INTO `videos` VALUES (9, 'Bạch Xà: Tình Kiếp', 12, 'Nguồn từ youtube', 'https://www.youtube.com/watch?v=dIsElV5oe_w', 1);
INSERT INTO `videos` VALUES (10, 'Godzilla Đại Chiến Kong', 13, 'Nguồn từ youtube', 'https://www.youtube.com/watch?v=odM92ap8_c0', 1);
INSERT INTO `videos` VALUES (11, 'Thợ Rèn Kiếm Vĩ Đại', 14, 'Nguồn từ youtube', 'https://www.youtube.com/watch?v=y7St2fpX69A', 1);
INSERT INTO `videos` VALUES (12, 'Tiệc Trăng Máu', 15, 'Nguồn từ youtube', 'https://www.youtube.com/watch?v=nh0BklwPN9Q', 1);
INSERT INTO `videos` VALUES (13, 'Bàn Tay Diệt Quỷ', 16, 'Nguồn từ youtube', 'https://www.youtube.com/watch?v=OuIxS_LlnQs', 1);
INSERT INTO `videos` VALUES (14, 'Tân Phong Thần: Na Tra Trùng Sinh', 17, 'Nguồn từ youtube', 'https://www.youtube.com/watch?v=tSdqxzjLIlE', 1);
INSERT INTO `videos` VALUES (15, 'Đêm Nơi Thiên Đường', 18, 'Nguồn từ youtube', 'https://www.youtube.com/watch?v=9M5tgSwoJPc', 1);
INSERT INTO `videos` VALUES (16, 'Kẻ Vô Danh', 19, 'Nguồn youtube', 'https://www.youtube.com/watch?v=65pavfi1XTs', 1);
INSERT INTO `videos` VALUES (17, 'Ám Sát Tiểu Thuyết Gia', 20, 'Nguồn từ youtube', 'https://www.youtube.com/watch?v=7Khk9dSEZnA', 1);
INSERT INTO `videos` VALUES (18, 'Vincenzo (2021) - tập 1', 21, 'nguồn từ Youtube', 'https://www.youtube.com/watch?v=S12-4mXCNj4', 1);
INSERT INTO `videos` VALUES (19, 'Vincenzo (2021) - tập 2', 21, 'Nguồn youtube', 'https://www.youtube.com/watch?v=jGVYdtaF3BU', 1);
INSERT INTO `videos` VALUES (20, 'Vincenzo (2021) - tập 3', 21, 'Nguồn từ youtube', 'https://www.youtube.com/watch?v=BrzmBL3Nu38', 1);
INSERT INTO `videos` VALUES (21, 'Chim Ưng Và Chiến Binh Mùa Đông - tập 1', 22, 'Nguồn từ youtube', 'https://youtu.be/watch?v=IWBsDaFWyTE', 1);
INSERT INTO `videos` VALUES (22, 'Chim Ưng Và Chiến Binh Mùa Đông - tập 2', 22, 'Nguồn từ youtube', 'https://www.youtube.com/watch?v=dVHUltkCWvg', 1);
INSERT INTO `videos` VALUES (23, 'Chim Ưng Và Chiến Binh Mùa Đông - tập 3', 22, 'Nguồn từ youtube', 'https://www.youtube.com/watch?v=HMlv-VXzb6A', 1);
INSERT INTO `videos` VALUES (24, 'Chim Ưng Và Chiến Binh Mùa Đông - tập 4', 22, 'Nguồn từ youtube', 'https://www.youtube.com/watch?v=shBRw_XaE0c', 1);
INSERT INTO `videos` VALUES (25, 'Chim Ưng Và Chiến Binh Mùa Đông - tập 5', 22, 'Nguồn từ youtube', 'https://www.youtube.com/watch?v=iQSHrgjayz8', 1);
INSERT INTO `videos` VALUES (26, 'Âm Dương Sư: Thị Thần Lệnh', 33, 'Nguồn từ youtube', 'https://www.youtube.com/watch?v=O7jlMis4-s4', 1);
INSERT INTO `videos` VALUES (28, 'Phương Thế Ngọc Mình Đồng Da Sắt', 34, 'Nguồn từ youtube', 'https://www.youtube.com/watch?v=sR0wehfSAFE', 1);
INSERT INTO `videos` VALUES (29, 'The Flash (season 7) - Tập 1', 25, 'Nguồn từ youtube', 'https://www.youtube.com/watch?v=6cWWeJl_OSI', 1);
INSERT INTO `videos` VALUES (30, 'The Flash (season 7) - Tập 2', 25, 'Nguồn từ youtube', 'https://www.youtube.com/watch?v=oAou9euZ_0w', 1);
INSERT INTO `videos` VALUES (31, 'QUẢN GIA NGƯỜI DƠI PHẦN 2 tập 1', 24, 'Nguồn từ youtube', 'https://www.youtube.com/watch?v=cIvOHGIzCd0', 1);
INSERT INTO `videos` VALUES (32, 'QUẢN GIA NGƯỜI DƠI PHẦN 2 tập 2', 24, 'Nguồn từ youtube', 'https://www.youtube.com/watch?v=XHxdo3xbwiQ', 1);

SET FOREIGN_KEY_CHECKS = 1;
