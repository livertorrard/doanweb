<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(TinTucTableSeeder::class);
    	$this->call(CommentTableSeeder::class);
    }
}

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i = 1; $i <= 10;$i++)
        {
        	DB::table('Users')->insert(
	        	[
	        		'name' => 'User_'.$i,
	            	'email' => 'user_'.$i.'@mymail.com',
	            	'password' => password_hash('123456',PASSWORD_BCRYPT),
	            	'level'=> 0,
	            	'created_at' => new DateTime(),
	        	]
        	);
        }
    }
}

class LoaiTinTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('loaitin')->insert([
        	['id_theloai'=>'1','ten' => 'Giáo Dục','tenkhongdau' => 'Giao-Duc'],
        	['id_theloai'=>'1','ten' => 'Nhịp Điệu Trẻ','tenkhongdau' => 'Nhip-Dieu-Tre'],
        	['id_theloai'=>'1','ten' => 'Du Lịch','tenkhongdau' => 'Du-Lich'],
        	['id_theloai'=>'1','ten' => 'Du Học','tenkhongdau' => 'Du-Hoc'],
        	['id_theloai'=>'2','ten' => 'Cuộc Sống Đó Đây','tenkhongdau' => 'Cuoc-Song-Do-Day'],
        	['id_theloai'=>'2','ten' => 'Ảnh','tenkhongdau' => 'Anh'],
        	['id_theloai'=>'2','ten' => 'Người Việt 5 Châu','tenkhongdau' => 'Nguoi-Viet-5-Chau'],
        	['id_theloai'=>'2','ten' => 'Phân Tích','tenkhongdau' => 'Phan-Tich'],
        	['id_theloai'=>'3','ten' => 'Chứng Khoán','tenkhongdau' => 'Chung-Khoan'],
        	['id_theloai'=>'3','ten' => 'Bất Động Sản','tenkhongdau' => 'Bat-Dong-San'],
        	['id_theloai'=>'3','ten' => 'Doanh Nhân','tenkhongdau' => 'Doanh-Nhan'],
        	['id_theloai'=>'3','ten' => 'Quốc Tế','tenkhongdau' => 'Quoc-Te'],
        	['id_theloai'=>'3','ten' => 'Mua Sắm','tenkhongdau' => 'Mua-Sam'],
        	['id_theloai'=>'3','ten' => 'Doanh Nghiệp Viết','tenkhongdau' => 'Doanh-Nghiep-Viet'],
        	['id_theloai'=>'4','ten' => 'Hoa Hậu','tenkhongdau' => 'Hoa-Hau'],
        	['id_theloai'=>'4','ten' => 'Nghệ Sỹ','tenkhongdau' => 'Nghe-Sy'],
        	['id_theloai'=>'4','ten' => 'Âm Nhạc','tenkhongdau' => 'Am-Nhac'],
        	['id_theloai'=>'4','ten' => 'Thời Trang','tenkhongdau' => 'Thoi-Trang'],
        	['id_theloai'=>'4','ten' => 'Điện Ảnh','tenkhongdau' => 'Dien-Anh'],
        	['id_theloai'=>'4','ten' => 'Mỹ Thuật','tenkhongdau' => 'My-Thuat'],
        	['id_theloai'=>'5','ten' => 'Bóng Đá','tenkhongdau' => 'Bong-Da'],
        	['id_theloai'=>'5','ten' => 'tennis','tenkhongdau' => 'tennis'],
        	['id_theloai'=>'5','ten' => 'Chân Dung','tenkhongdau' => 'Chan-Dung'],
        	['id_theloai'=>'5','ten' => 'Ảnh','tenkhongdau' => 'Anh-TT'],
        	['id_theloai'=>'6','ten' => 'Hình Sự','tenkhongdau' => 'Hinh-Su']
    	]);
    }
}

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	$NoiDung = array(
    		'Bài viết rất hay',
    		'Tôi rất thích bài viết này',
    		'Bài viết này tạm ổn',
    		'Hay quá trời',
    		'Tôi sẽ học thèo bài viết này',
    		'Bài viết này chưa được hay lắm',
    		'Ý kiến của tôi khác so với bài này',
    		'Bài viết này được',
    		'Không thích bài viết này',
    		'Tôi chưa có ý kiến gì'
    	);

    	for($i=1;$i<=30;$i++)
    	{
	        DB::table('comment')->insert(
	        	[
	        		'id_user' => rand(1,10),
	            	'id_tintuc' => rand(1,90),
	            	'noidung' => $NoiDung[rand(0,9)],
	            	'created_at' => new DateTime()
	        	]
	    	);
    	}
    }
}

class TheLoaiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	DB::table('TheLoai')->insert([
        	['ten' => 'Xã Hội','tenkhongdau' => 'Xa-Hoi'],
        	['ten' => 'Thế Giới','tenkhongdau' => 'The-Gioi'],
        	['ten' => 'Kinh Doanh','tenkhongdau' => 'Kinh-Doanh'],
        	['ten' => 'Văn Hoá','tenkhongdau' => 'Van-Hoa'],
        	['ten' => 'Thể Thao','tenkhongdau' => 'The-Thao'],
        	['ten' => 'Pháp Luật','tenkhongdau' => 'Phap-Luat'],
        	['ten' => 'Đời Sống','tenkhongdau' => 'Doi-Song'],
        	['ten' => 'Khoa Học','tenkhongdau' => 'Khoa-Hoc'],
        	['ten' => 'Vi Tính','tenkhongdau' => 'Vi-Tinh']
    	]);

    }
}



class TinTucTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$noidung = "
    	</h3>Nội dung tin tức: Khoá học Lập trình PHP tại trung tâm đào tạo tin học khoa phạm</h3>
    	<p>
    	<b>Hotline kỹ thuật <b>: <br>
    	<b>Hotline tư vấn kháo học <b>: <br>
    	<b>Địa chỉ </b>: 90 Lê Thị Riêng, P.Bến Thành, Q1, TPHCM<br>
    	<b>Website</b>: <br>
    	<b>Học Online tại :</b>online.khoapham.vn<br>
    	</p>
    	";
        DB::table('tintuc')->insert([
        	['id_loaitin'=>'1','tieude' => 'Lần đầu ĐH FPT cấp học bổng tiến sĩ ','tieudekhongdau' => 'Lan-Dau-Dh-Fpt-Cap-Hoc-Bong-Tien-Si','tomtat' => 'Bên cạnh 400 suất học bổng Nguyễn Văn Đạo, ĐH FPT lần đầu tiên chọn ra 30 học sinh xuất sắc nhất để cấp học bổng toàn phần đào tạo từ cử nhân lên thẳng tiến sĩ, với tổng giá trị quỹ lên tới 5 triệu USD.','noidung' => $noidung,'hinh' => 'FPT-2.jpg','noibat' => 1],
            ['id_loaitin'=>'1','tieude' => '300 tỷ đồng phát triển giáo dục mầm non ','tieudekhongdau' => '300-Ty-Dong-Phat-Trien-Giao-Duc-Mam-Non','tomtat' => 'Bộ Giáo dục và Đào tạo đang xây dựng chương trình, mục tiêu quốc gia về giáo dục giai đoạn 2011-2015, trong đó dự kiến chi 300 tỷ đồng để phát triển giáo dục mầm non năm 2011. ','noidung' => $noidung,'hinh' => 'tre_em_set_sub.jpg','noibat' => 1],
            ['id_loaitin'=>'1','tieude' => 'Nợ giáo viên tiền tỷ chi phí phổ cập giáo dục ','tieudekhongdau' => 'No-Giao-Vien-Tien-Ty-Chi-Phi-Pho-Cap-Giao-Duc','tomtat' => 'Ba năm qua, nhiều giáo viên ở Khánh Hòa bỏ công sức, kể cả tiền bạc để thực hiện phổ cập giáo dục cho học sinh trên địa bàn tỉnh, song đến nay vẫn chưa nhận được tiền chính quyền chi trả. ','noidung' => $noidung,'hinh' => 'pho-cap-giao-duc-nho-2.jpg','noibat' => 1],
            ['id_loaitin'=>'1','tieude' => 'Đón và chăm sóc trẻ sau giờ tan trường qua dịch vụ ','tieudekhongdau' => 'Don-Va-Cham-Soc-Tre-Sau-Gio-Tan-Truong-Qua-Dich-Vu','tomtat' => 'Các bé sẽ được chăm sóc bữa ăn, tắm rửa sạch sẽ, vui chơi và học tập cùng cô giáo theo các nội dung trong sổ báo bài, mở rộng hoặc đào sâu kiến thức theo yêu cầu của phụ huynh. ','noidung' => $noidung,'hinh' => 'be-2.jpg','noibat' => 1],
            ['id_loaitin'=>'1','tieude' => '7 học sinh rơi từ tầng hai xuống đất vì gãy lan can ','tieudekhongdau' => '7-Hoc-Sinh-Roi-Tu-Tang-Hai-Xuong-Dat-Vi-Gay-Lan-Can','tomtat' => 'Đang giờ ra chơi, bất ngờ toàn bộ lan can tầng hai của Trường THCS thị trấn Chợ Rã (Bắc Kạn) gãy đổ ra ngoài, kéo theo 7 học sinh lớp 6A rơi xuống đất. ','noidung' => $noidung,'hinh' => 'tai_nan_set_top.gif','noibat' => 1],
            ['id_loaitin'=>'1','tieude' => 'Giáo viên TP HCM được thưởng tết tối thiểu 700.000 đồng ','tieudekhongdau' => 'Giao-Vien-Tp-Hcm-Duoc-Thuong-Tet-Toi-Thieu-700.000-Dong','tomtat' => 'Sở GD&ĐT TP HCM vừa có thông báo về việc UBND thành phố chấp thuận đề nghị hỗ trợ mức quà tết cho cán bộ công chức trong ngành tối thiểu là 700.000 đồng. Mức thưởng này cao hơn năm ngoái 100.000 đồng. ','noidung' => $noidung,'hinh' => 'thuong-tet-3.jpg','noibat' => 1],
            ['id_loaitin'=>'1','tieude' => 'Mức sinh hoạt phí tối đa cho lưu học sinh là 1.200 USD ','tieudekhongdau' => 'Muc-Sinh-Hoat-Phi-Toi-Da-Cho-Luu-Hoc-Sinh-La-1.200-Usd','tomtat' => 'Đối với lưu học sinh tại Ba Lan, Bungary, Nga..., mức sinh hoạt phí sẽ tăng từ 400 USD lên 480 USD; tại Australia, New Zealand tăng từ 860 USD lên 1.032 USD và tại Mỹ, Canada, Anh, Nhật Bản tăng từ 1.000 lên 1.200 USD một người một tháng... ','noidung' => $noidung,'hinh' => 'du_hoc_sinh_set_sub.jpg','noibat' => 1],
            ['id_loaitin'=>'1','tieude' => 'Học sinh Hà Nội được nghỉ 11 ngày Tết ','tieudekhongdau' => 'Hoc-Sinh-Ha-Noi-Duoc-Nghi-11-Ngay-Tet','tomtat' => 'UBND thành phố Hà Nội vừa đồng ý với đề xuất của Sở Giáo dục và Đào tạo về việc cho học sinh nghỉ tết Tết Nguyên đán Tân Mão 11 ngày. ','noidung' => $noidung,'hinh' => 't2.jpg','noibat' => 1],
			['id_loaitin'=>'3','tieude' => 'Huế lung linh sắc màu đón Giáng sinh','tieudekhongdau' => 'Hue-Lung-Linh-Sac-Mau-Don-Giang-Sinh','tomtat' => 'Không khí Giáng sinh đến Huế muộn hơn Sài Gòn, Hà Nội, nhưng không vì thế mà làm giảm đi sắc màu lung linh. Khắp các ngả đường của cố đô ngập tràn ánh đèn điện trang hoàng cho đêm Noel đang cận kề.','noidung' => $noidung,'hinh' => 'doi.jpg','noibat' => 1],
            ['id_loaitin'=>'3','tieude' => 'Ana Mandara Villas Dalat lưu giữ kiến trúc Pháp cổ','tieudekhongdau' => 'Ana-Mandara-Villas-Dalat-Luu-Giu-Kien-Truc-Phap-Co','tomtat' => 'Khu nghỉ Ana Mandara Villas Dalat được trùng tu nguyên vẹn kiến trúc cổ biệt thự Pháp, đan xen trang trí vật dụng xưa làm toát lên vẻ quyền uy của giới thượng lưu.','noidung' => $noidung,'hinh' => 'du-lich1 (1).jpg','noibat' => 1],
            ['id_loaitin'=>'3','tieude' => 'Khám phá Đài Loan','tieudekhongdau' => 'Kham-Pha-Dai-Loan','tomtat' => 'Tòa tháp cao thứ hai thế giới, sông tình yêu, hội chợ hoa quốc tế, Nhật Nguyệt Đàm hay những điểm vui chơi được xem là hiện đại bậc nhất trong khu vực đã hút một lượng khách khá lớn đến Đài Loan.','noidung' => $noidung,'hinh' => 'canh.jpg','noibat' => 1],
			['id_loaitin'=>'2','tieude' => 'Cô hoa khôi giỏi giang của Học viện Ngoại giao','tieudekhongdau' => 'Co-Hoa-Khoi-Gioi-Giang-Cua-Hoc-Vien-Ngoai-Giao','tomtat' => 'Là Miss ứng xử của cuộc thi hoa khôi sinh viên Hà Nội, Ngụy Hải An gây ấn tượng với người tiếp xúc bởi sự sắc sảo và bảng thành tích học tập, hoạt động ngoại khóa đáng nể.','noidung' => $noidung,'hinh' => 'Hai_An_3.jpg','noibat' => 1],
            ['id_loaitin'=>'2','tieude' => '10 gương mặt trẻ tiêu biểu của thủ đô','tieudekhongdau' => '10-Guong-Mat-Tre-Tieu-Bieu-Cua-Thu-Do','tomtat' => 'Trở thành phó giáo sư, tiến sĩ khoa học khi mới 34 tuổi, mới học lớp 4 đã là kiện tướng cờ vua hay liên tiếp giành giải nhất các cuộc thi piano quốc tế và châu Á là những thành tích nổi bật của các gương mặt trẻ thủ đô tiêu biểu.','noidung' => $noidung,'hinh' => 'tran_van_tan.jpg','noibat' => 1],
            ['id_loaitin'=>'2','tieude' => 'Thử tài thiết kế thời trang của sinh viên','tieudekhongdau' => 'Thu-Tai-Thiet-Ke-Thoi-Trang-Cua-Sinh-Vien','tomtat' => 'Mới lạ, độc đáo và mang tính ứng dụng cao là tiêu chí dành cho các tác phẩm dự thi "Hutech Designer 2011". Năm nay cuộc thi được mở rộng trong phạm vi toàn quốc.','noidung' => $noidung,'hinh' => 'thiet-ke-5.jpg','noibat' => 1],
            ['id_loaitin'=>'2','tieude' => 'Hải Yến đoạt giải hoa khôi sinh viên Hà Nội','tieudekhongdau' => 'Hai-Yen-Doat-Giai-Hoa-Khoi-Sinh-Vien-Ha-Noi','tomtat' => 'Không chỉ được Ban giám khảo trao danh hiệu Hoa khôi sinh viên Hà Nội 2010, Hải Yến - sinh viên CĐ Cộng đồng Hà Nội còn là thí sinh được khán giả bình chọn nhiều nhất qua mạng.','noidung' => $noidung,'hinh' => 'hoakhoi19.jpg','noibat' => 1],
            ['id_loaitin'=>'2','tieude' => 'Đại biểu nhỏ tuổi nhất dự đại hội thi đua yêu nước','tieudekhongdau' => 'Dai-Bieu-Nho-Tuoi-Nhat-Du-Dai-Hoi-Thi-Dua-Yeu-Nuoc','tomtat' => '4 năm liền là học sinh giỏi, là lớp trưởng, sở hữu bộ huy chương vàng, bạc các môn năng khiếu trong và ngoài nước, Trần Ngọc Diễm Huyền, học sinh lớp 5 trường tiểu học Nam Thành Công (Hà Nội) là đại biểu nhỏ tuổi nhất dự đại hội thi đua yêu nước toàn quốc.','noidung' => $noidung,'hinh' => 'huyen01.jpg','noibat' => 1],
            ['id_loaitin'=>'2','tieude' => 'Ông già Noel trượt patin tặng quà trẻ em','tieudekhongdau' => 'Ong-Gia-Noel-Truot-Patin-Tang-Qua-Tre-Em','tomtat' => 'Vác bịch quà trên vai, ông già Noel trượt vèo vèo trên phố tặng quà cho các em nhỏ trong đêm Giáng sinh tại Sài Gòn. Phương tiện di chuyển đặc biệt của ông gây chú ý cho đông đảo người đi đường.','noidung' => $noidung,'hinh' => 'ong-gia-noel-patin-3.jpg','noibat' => 1],
            ['id_loaitin'=>'4','tieude' => 'Hội thảo ĐH Quản trị Khách sạn Du lịch Thụy Sĩ - SHMS','tieudekhongdau' => 'Hoi-Thao-Dh-Quan-Tri-Khach-San-Du-Lich-Thuy-Si---Shms','tomtat' => 'Chương trình hội thảo được tổ chức ngày 17h30 ngày 25/2 tại khách sạn Movenpick, 83A Lý Thường Kiệt, Hà Nội và 17h30 ngày 26/2 tại khách sạn Hoàng Anh Gia Lai, số 1 Nguyễn Văn Linh, Đà Nẵng.','noidung' => $noidung,'hinh' => 'duhoc.jpg','noibat' => 1],
            ['id_loaitin'=>'4','tieude' => 'Học bổng tại đại học Monash, Australia','tieudekhongdau' => 'Hoc-Bong-Tai-Dai-Hoc-Monash,-Australia','tomtat' => 'Đại diện trường, tiến sĩ Hoa Levitas sẽ giới thiệu nội dung học bổng tại hội thảo tổ chức từ 16h đến 18h ngày 18/1 tại 32F Điện Biên Phủ, Hải Phòng và từ 16h đến 18h ngày 20/1 tại 96 Lò Đúc, Hà Nội.','noidung' => $noidung,'hinh' => 'monash.jpg','noibat' => 1],
            ['id_loaitin'=>'4','tieude' => 'UK Alumni Talk đầu năm của Hội đồng Anh','tieudekhongdau' => 'Uk-Alumni-Talk-Dau-Nam-Cua-Hoi-Dong-Anh','tomtat' => 'Alumni Talk tháng 1 chủ đề “Bí quyết học tập và trau dồi các kỹ năng phát triển nghề nghiệp qua các bậc học tại Anh”.','noidung' => $noidung,'hinh' => 'HDA-250.jpg','noibat' => 1],
            ['id_loaitin'=>'4','tieude' => 'Chương trình đào tạo mới của MDIS, Singapore','tieudekhongdau' => 'Chuong-Trinh-Dao-Tao-Moi-Cua-Mdis,-Singapore','tomtat' => 'Tiến sĩ Eric Kuan, hiệu trưởng MDIS sẽ trực tiếp giới thiệu về các chương trình đào tạo mới, ký túc xá mới và các chính sách học bổng khuyến học dành cho sinh viên quốc tế trong hai ngày 15 và 16 tại Hà Nội và TP HCM.','noidung' => $noidung,'hinh' => 'MDIS (1).jpg','noibat' => 1],
            ['id_loaitin'=>'4','tieude' => 'Học bổng 2011 tại học viện ERC Singapore','tieudekhongdau' => 'Hoc-Bong-2011-Tai-Hoc-Vien-Erc-Singapore','tomtat' => 'Sinh viên có điểm trung bình toàn khoá học tại ERC đạt 7,5 trở lên được nhận học bổng lên đến 70% học phí cho khoá học cử nhân (trường hoàn trả 10.000 SGD) và thạc sĩ (trường hoàn trả 6.500 SGD).','noidung' => $noidung,'hinh' => 'UK.jpg','noibat' => 1],
            ['id_loaitin'=>'4','tieude' => 'Chương trình du học hè của ILA 2011','tieudekhongdau' => 'Chuong-Trinh-Du-Hoc-He-Cua-Ila-2011','tomtat' => 'ILA giới thiệu 10 chương trình du học hè dành cho học sinh từ 8 đến 18 tuổi tại các nước Anh, Mỹ, Canada, Australia và Singapore.','noidung' => $noidung,'hinh' => 'H1_400.jpg','noibat' => 1],
            ['id_loaitin'=>'4','tieude' => 'Triển lãm du học Anh 2011','tieudekhongdau' => 'Trien-Lam-Du-Hoc-Anh-2011','tomtat' => 'Đại diện 20 trường cao đẳng, đại học và các tổ chức giáo dục đến từ Anh sẽ tham gia triển lãm du học bậc sau phổ thông và dự bị đại học do Hội đồng Anh tổ chức ngày 15/1 tại Hà Nội và ngày 16/1 tại TP HCM.','noidung' => $noidung,'hinh' => 'anh-2.jpg','noibat' => 1],
            ['id_loaitin'=>'4','tieude' => 'Tháng tư vấn du học của VNPC','tieudekhongdau' => 'Thang-Tu-Van-Du-Hoc-Cua-Vnpc','tomtat' => 'Từ ngày 1 đến 31/1, VNPC tổ chức “Tháng tư vấn du học Anh, Australia, Mỹ, Canada, New Zealand, Trung Quốc và Singapore” nhằm mang lại những thông tin mới, hữu ích nhất giúp định hướng mục tiêu du học của học sinh.','noidung' => $noidung,'hinh' => 'VNPC.JPG','noibat' => 1],
            ['id_loaitin'=>'4','tieude' => 'Luật visa mới cho cao đẳng chuyển tiếp tại Australia','tieudekhongdau' => 'Luat-Visa-Moi-Cho-Cao-Dang-Chuyen-Tiep-Tai-Australia','tomtat' => 'Từ ngày 1/1, du học sinh Việt Nam học các chương trình cao đẳng liên thông vào đại học của Navitas sẽ được hưởng mức xét cấp visa 2 (như đối với du học sinh vào thẳng đại học tại Australia).','noidung' => $noidung,'hinh' => '400x180.jpg','noibat' => 1],
           ['id_loaitin'=>'5','tieude' => 'Quân đội Ai Cập giải tán quốc hội','tieudekhongdau' => 'Quan-Doi-Ai-Cap-Giai-Tan-Quoc-Hoi','tomtat' => 'Hội đồng Tối cao quân đội Ai Cập hôm qua tuyên bố họ sẽ giải tán quốc hội và đình chỉ Hiến pháp, hai trong số các yêu cầu chủ yếu của những người biểu tình.','noidung' => $noidung,'hinh' => 'cyo.jpg','noibat' => 1],
            ['id_loaitin'=>'5','tieude' => 'Sốt nhà nghỉ vì Valentine','tieudekhongdau' => '','tomtat' => 'Đi nhà hàng, mua sắm hoặc xem phim dường như đã lỗi mốt khi ngày càng nhiều đôi tình nhân Trung Quốc rủ nhau đến nhà nghỉ trong đêm 14/2.','noidung' => $noidung,'hinh' => 't1.jpg','noibat' => 1],
            ['id_loaitin'=>'5','tieude' => 'Nữ phóng viên xinh đẹp Nga mê hoặc Trung Quốc','tieudekhongdau' => 'Nu-Phong-Vien-Xinh-Dep-Nga-Me-Hoac-Trung-Quoc','tomtat' => 'Hơn 1 triệu lượt người truy cập mỗi tháng để xem nữ phóng viên người Nga đưa tin trực tiếp bằng tiếng Trung Quốc.','noidung' => $noidung,'hinh' => 'pv.jpg','noibat' => 1],
            ['id_loaitin'=>'5','tieude' => 'Thoát nanh vuốt báo nhờ xe đạp','tieudekhongdau' => 'Thoat-Nanh-Vuot-Bao-Nho-Xe-Dap','tomtat' => 'Gặp báo gấm khi đang đạp xe đi làm, người đàn ông ở Nam Phi dùng xe đạp để chống cự.','noidung' => $noidung,'hinh' => 'Leopard-Attack.jpg','noibat' => 1],
            ['id_loaitin'=>'5','tieude' => 'Người khổng lồ bị đốn ngã','tieudekhongdau' => '','tomtat' => 'Một bức tượng người sải chân khổng lồ do nghệ sĩ lừng Andy Scott tại Scotland tạo ra đã bị sụp đổ, do một xe hơi húc ngã.','noidung' => $noidung,'hinh' => 'tuong.jpg','noibat' => 1],
            ['id_loaitin'=>'5','tieude' => 'Tuyết rơi muộn tại Bắc Kinh','tieudekhongdau' => 'Tuyet-Roi-Muon-Tai-Bac-Kinh','tomtat' => 'Tuyết đổ xuống Bắc Kinh đêm qua và tiếp tục rơi trong sáng nay. Đây là đợt tuyết đổ xuống muộn nhất tại thành phố này trong 60 năm.','noidung' => $noidung,'hinh' => 'tuyet1.jpg','noibat' => 1],
            ['id_loaitin'=>'5','tieude' => 'Buôn ma túy bằng máy lăng đá','tieudekhongdau' => 'Buon-Ma-Tuy-Bang-May-Lang-Da','tomtat' => 'Những phần tử buôn ma túy dùng một phát minh từ thời cổ đại để đưa cần sa từ Mexico sang Mỹ. ','noidung' => $noidung,'hinh' => 'catapult2.jpg','noibat' => 1],
            ['id_loaitin'=>'6','tieude' => 'Lũ lụt kinh hoàng ở Australia','tieudekhongdau' => 'Lu-Lut-Kinh-Hoang-O-Australia','tomtat' => 'Lũ quét tràn qua các tỉnh đông bắc Australia hôm qua, làm chết ít nhất 8 người, xe cộ bị trôi tuột trong dòng nước cuốn, cây cối đổ nghiêng ngả và đường phố ngập chìm trong biển nước.','noidung' => $noidung,'hinh' => 'flood1.jpg','noibat' => 1],
            ['id_loaitin'=>'6','tieude' => 'Lễ hội tuổi 20 của thiếu nữ Nhật Bản','tieudekhongdau' => 'Le-Hoi-Tuoi-20-Cua-Thieu-Nu-Nhat-Ban','tomtat' => 'Ngày hội trưởng thành được tổ chức hằng năm tại Nhật Bản vào ngày thứ Hai thứ 2 trong tháng một để chúc mừng những cô cậu tròn 20 tuổi.','noidung' => $noidung,'hinh' => 'girl1.jpg','noibat' => 1],
            ['id_loaitin'=>'6','tieude' => 'New York ngập chìm trong tuyết','tieudekhongdau' => 'New-York-Ngap-Chim-Trong-Tuyet','tomtat' => 'Thành phố New York ngập trong lớp tuyết cao nhất trong vòng 60 năm trở lại đây, hàng nghìn chuyến bay bị hủy trong đợt cao điểm du lịch trước thềm năm mới.','noidung' => $noidung,'hinh' => '01.jpg','noibat' => 1],
            ['id_loaitin'=>'6','tieude' => 'Chụp ảnh cưới ở Trung Quốc','tieudekhongdau' => 'Chup-Anh-Cuoi-O-Trung-Quoc','tomtat' => 'Các cặp tình nhân Trung Quốc tốn từ 450 USD tới 15.000 USD cho bộ ảnh cưới hoàn hảo giống như trang bìa của tạp chí thời trang.','noidung' => $noidung,'hinh' => 'wedding1.jpg','noibat' => 1],
            ['id_loaitin'=>'6','tieude' => 'Thi hôn ở Trung Quốc','tieudekhongdau' => 'Thi-Hon-O-Trung-Quoc','tomtat' => 'Hàng trăm đôi từ các bạn trẻ đến các cặp đôi cao tuổi đã thể hiện màn hôn nhau tập thể ở đông bắc Trung Quốc hôm qua.','noidung' => $noidung,'hinh' => '02.jpg','noibat' => 1],
            ['id_loaitin'=>'6','tieude' => '10 ảnh hài hước nhất năm 2010','tieudekhongdau' => '10-Anh-Hai-Huoc-Nhat-Nam-2010','tomtat' => 'Ruồi đậu trên mép Tổng thống Mỹ Barack Obama, đầu cầu thủ bốc khói, cà rốt có hình robot. Dưới đây là những hình ảnh hài hước nhất năm qua.','noidung' => $noidung,'hinh' => 'hh1.jpg','noibat' => 1],
           ['id_loaitin'=>'7','tieude' => 'Bộ trưởng Canada chúc tết Việt kiều','tieudekhongdau' => 'Bo-Truong-Canada-Chuc-Tet-Viet-Kieu','tomtat' => 'Một thành viên nội các Canada đã tham dự ngày lễ chào đón Tết Nguyên đán của cộng động người Việt ở Toronton hôm qua.','noidung' => $noidung,'hinh' => 'cho4.jpg','noibat' => 1],
            ['id_loaitin'=>'7','tieude' => 'Cảm nhận về văn hóa ứng xử ở Mỹ','tieudekhongdau' => 'Cam-Nhan-Ve-Van-Hoa-Ung-Xu-O-My','tomtat' => 'Ăn xin cũng có văn hóa ứng xử của người ăn xin. Họ không bao giờ đeo bám, kể lể hay chìa tay trước mặt người đi đường, mà thường đứng ở ngã tư đông người giơ tấm biển "cần giúp đỡ".','noidung' => $noidung,'hinh' => 'top (1).jpg','noibat' => 1],
            ['id_loaitin'=>'7','tieude' => 'Hòa nhạc kỷ niệm Quốc khánh Australia','tieudekhongdau' => 'Hoa-Nhac-Ky-Niem-Quoc-Khanh-Australia','tomtat' => 'Các nghệ sĩ Australia và Việt Nam hôm nay trình diễn một chương trình hoà nhạc đặc biệt để chào mừng quan hệ song phương nhân ngày quốc khánh Australia.','noidung' => $noidung,'hinh' => 'va.jpg','noibat' => 1],
            ['id_loaitin'=>'7','tieude' => 'Hoa xuân ở Little Saigon','tieudekhongdau' => 'Hoa-Xuan-O-Little-Saigon','tomtat' => 'Người Việt nô nức đến chợ hoa ở thương xá Phước Lộc Thọ, California, để chọn những nhành mai, đào, hay phong lan cho ngày Tết. ','noidung' => $noidung,'hinh' => 'ls3.jpg','noibat' => 1],
            ['id_loaitin'=>'7','tieude' => 'Cần tư vấn khi kết hôn với Việt kiều Pháp','tieudekhongdau' => 'Can-Tu-Van-Khi-Ket-Hon-Voi-Viet-Kieu-Phap','tomtat' => 'Em đang sống ở TP HCM. Em 22 tuổi và bạn trai em 25 tuổi. Em và bạn trai quen nhau trên mạng. Thú thực là tụi em chưa gặp nhau mà yêu nhau và kết hôn, em cũng run lắm nhưng lỡ yêu nhau và em tin vào duyên số nên em đồng ý.','noidung' => $noidung,'hinh' => 'top (2)_1.jpg','noibat' => 1],
                    ['id_loaitin'=>'8','tieude' => 'Thế khó của Hàn Quốc sau khi bị đánh','tieudekhongdau' => '','tomtat' => 'Bán đảo Triều Tiên vốn căng thẳng hơn nửa thế kỷ, nhưng vụ tấn công hôm qua của miền bắc có thể coi là "lịch sử" qua quy mô của nó và sự kiện này đang đặt Hàn Quốc vào thế khó vì họ có quá nhiều thứ để mất.','noidung' => $noidung,'hinh' => 'Yeon.jpg','noibat' => 1],
            ['id_loaitin'=>'8','tieude' => 'Tại sao Triều Tiên khai hỏa?','tieudekhongdau' => 'Tai-Sao-Trieu-Tien-Khai-Hoa-','tomtat' => 'Quá trình chuyển giao quyền lực tại Triều Tiên và các cuộc tập trận của Hàn Quốc có thể là nguyên nhân châm ngòi vụ giao tranh bằng pháo hôm qua.','noidung' => $noidung,'hinh' => 'Yeo.jpg','noibat' => 1],
            ['id_loaitin'=>'8','tieude' => 'Triều Tiên tấn công: Không hoàn toàn bất ngờ','tieudekhongdau' => 'Trieu-Tien-Tan-Cong:-Khong-Hoan-Toan-Bat-Ngo','tomtat' => 'Giới theo dõi tình hình bán đảo Triều Tiên vẫn dự đoán miền bắc có thể sắp "động thủ", nhưng việc họ bất ngờ bắn phá một hòn đảo của Hàn Quốc một cách dữ dội như hôm nay vẫn khiến nhiều người sốc.','noidung' => $noidung,'hinh' => 'Han (1).jpg','noibat' => 1],
            ['id_loaitin'=>'10','tieude' => 'Chung cư mini đầu tiên ở TP HCM rao bán','tieudekhongdau' => 'Chung-Cu-Mini-Dau-Tien-O-Tp-Hcm-Rao-Ban','tomtat' => 'Ngày 15/2, Công ty TNHH Tổ hợp Vina và Công ty Địa ốc Hoàng Anh Sài Gòn bắt đầu bán 19 căn hộ của tòa nhà Vinacomplex III gây xôn xao giới buôn địa ốc. Bởi lẽ, đây là loại hình chung cư mini đầu tiên tại TP HCM.','noidung' => $noidung,'hinh' => 'a-tb-chung-cu-mini.jpg','noibat' => 1],
            ['id_loaitin'=>'10','tieude' => 'Đề xuất sở hữu chung cư có thời hạn gây nhiều tranh cãi','tieudekhongdau' => 'De-Xuat-So-Huu-Chung-Cu-Co-Thoi-Han-Gay-Nhieu-Tranh-Cai','tomtat' => 'Bộ Xây dựng cho rằng, sở hữu nhà chung cư có thời hạn sẽ thuận tiện cho việc nâng cấp, cải tạo đồng thời làm giảm giá chung cư. Tuy nhiên, nhiều ý kiến lo ngại, người dân có thể bị sốc và quay lưng lại với mô hình này.','noidung' => $noidung,'hinh' => 'chung1.jpg','noibat' => 1],
                   ['id_loaitin'=>'9','tieude' => 'Tàu chở hàng của Vinalines nợ gần nửa tỷ phí hàng hải','tieudekhongdau' => 'Tau-Cho-Hang-Cua-Vinalines-No-Gan-Nua-Ty-Phi-Hang-Hai','tomtat' => 'Tàu Hoa Sen chiều 14/2 đã được Cảng vụ Nha Trang cho phép rời cảng sau nhiều ngày lưu bến vì nợ hàng trăm triệu đồng phí neo đậu, bảo đảm hàng hải, lệ phí ra vào cảng...','noidung' => $noidung,'hinh' => 'Tau-Hoa-Sen-to.jpg','noibat' => 1],
            ['id_loaitin'=>'9','tieude' => 'Vn-Index kết thúc 3 phiên giảm nhờ cổ phiếu lớn','tieudekhongdau' => 'Vn-Index-Ket-Thuc-3-Phien-Giam-Nho-Co-Phieu-Lon','tomtat' => 'Thị trường vàng, USD không ngừng nổi sóng, trong khi nhiều cổ phiếu lại liên tục mất điểm và sau mỗi phiên giao dịch đã xuống mức thấp hơn. Tuy nhiên, nhà đầu tư vẫn lưỡng lự gom vào.','noidung' => $noidung,'hinh' => 'ck-490x322 (4).jpg','noibat' => 1],
            ['id_loaitin'=>'9','tieude' => 'Hàng quán hốt bạc trong tối Valentine','tieudekhongdau' => 'Hang-Quan-Hot-Bac-Trong-Toi-Valentine','tomtat' => 'Không có chỗ để xe, không có bàn ngồi… nhân viên đành đuổi khéo: “Anh chị đi đâu tâm sự, lát quay về đây em xếp bàn”. Rất nhiều quán ăn vỉa hè, quán lẩu, nướng, đồ ăn nhanh… được dịp hốt bạc vào tối Valentine.','noidung' => $noidung,'hinh' => 'valen_tine12.JPG','noibat' => 1],
           ['id_loaitin'=>'14','tieude' => 'Seoul Garden kết thúc chương trình trúng thưởng cuối năm','tieudekhongdau' => 'Seoul-Garden-Ket-Thuc-Chuong-Trinh-Trung-Thuong-Cuoi-Nam','tomtat' => 'Chương trình “Bốc thăm trúng thưởng” của Seoul Garden vừa kết thúc sau 3 tháng triển khai. Hàng trăm khách hàng đã nhận được những phần quà giá trị và ý nghĩa. Đặc biệt, nhiều người đã may mắn nhận được iPad và iPhone…','noidung' => $noidung,'hinh' => 'DSC00687.JPG','noibat' => 1],
            ['id_loaitin'=>'14','tieude' => 'VTC bứt phá trở thành Tập đoàn Truyền thông','tieudekhongdau' => '','tomtat' => 'Trước yêu cầu phát triển mạnh mẽ về công nghệ thông tin và truyền thông, việc VTC thành lập Tập đoàn Truyền thông đa phương tiện Việt Nam là sự phát triển tất yếu, phù hợp với điều kiện nền kinh tế phát triển của đất nước.','noidung' => $noidung,'hinh' => '10_1.JPG','noibat' => 1],
            ['id_loaitin'=>'14','tieude' => 'Chai Coca-Cola khổng lồ tại Diamond Plaza','tieudekhongdau' => 'Chai-Coca-Cola-Khong-Lo-Tai-Diamond-Plaza','tomtat' => 'Ngay trong ngày đầu khai trương, chai Coca-Cola khổng lồ mang thông điệp chia sẻ “Dành Coca-Cola đầu năm cho người bạn yêu thương” tại Diamond Plaza, TP HCM đã thu hút sự chú ý của rất nhiều bạn trẻ.','noidung' => $noidung,'hinh' => '1 (1)_1.JPG','noibat' => 1],
             ['id_loaitin'=>'11','tieude' => 'Chủ tịch Sacomreal: Tôi thành công nhờ văn hóa gia đình','tieudekhongdau' => '','tomtat' => 'Với Chủ tịch HĐQT Công ty cổ phần địa ốc Sài Gòn thương tín (Sacomreal) Đặng Hồng Anh, thành công mà anh gặt hái được là nhờ sức mạnh của văn hóa gia đình mà bố mẹ đã xây dựng, vun đắp và truyền dạy cho con. ','noidung' => $noidung,'hinh' => 'a--thanh-cong-nho-van-hoa-g.jpg','noibat' => 1],
            ['id_loaitin'=>'11','tieude' => 'Ông chủ đầm tôm thích bay','tieudekhongdau' => 'Ong-Chu-Dam-Tom-Thich-Bay','tomtat' => 'Nuôi tôm công nghệ cao vì Việt Nam chưa có ai làm, thành lập Air Mekong bởi thấy việc đi lại bằng đường hàng không còn nhiều bất cập… Tiến sĩ Đoàn Quốc Việt khiến nhiều người bất ngờ vì những quyết định của mình.','noidung' => $noidung,'hinh' => 'Anh-Viet.jpg','noibat' => 1],
            ['id_loaitin'=>'11','tieude' => 'Bộ trưởng Võ Hồng Phúc: ‘Tôi chỉ nói đúng, nói đủ’','tieudekhongdau' => 'Bo-Truong-Vo-Hong-Phuc:-‘Toi-Chi-Noi-Dung,-Noi-Du’','tomtat' => 'Năm 2010, Bộ trưởng Bộ Kế hoạch và Đầu tư Võ Hồng Phúc được xem là lãnh đạo ấn tượng của nghị trường dù trong suốt năm này, ông chưa lần nào đăng đàn trả lời chất vấn.','noidung' => $noidung,'hinh' => 'Hong-Phuc.jpg','noibat' => 1],
          ['id_loaitin'=>'13','tieude' => 'Khuyến mại mừng xuân tại Phúc Anh Computer World','tieudekhongdau' => 'Khuyen-Mai-Mung-Xuan-Tai-Phuc-Anh-Computer-World','tomtat' => 'Mừng xuân Tân Mão 2011, từ ngày 11 đến 19/1, Phúc Anh Computer World tổ chức chương trình khuyến mại dành cho người tiêu dùng cuối cùng với chủ đề "Tiễn cũ nghinh tân - Rinh hàng mới tới Phúc Anh".','noidung' => $noidung,'hinh' => 'muasam1 (2).jpg','noibat' => 1],
            ['id_loaitin'=>'13','tieude' => 'Đổi điện thoại cũ, nhận quà tặng tại Thegioidientu.com','tieudekhongdau' => 'Doi-Dien-Thoai-Cu,-Nhan-Qua-Tang-Tai-Thegioidientu.Com','tomtat' => 'Từ ngày 14/1 đến 2/2, siêu thị điện thoại - điện máy Thegioidientu.com, số 563 Xô Viết Nghệ Tĩnh, quận Bình Thạnh, TP HCM áp dụng chương trình đổi điện thoại cũ mua mới tặng nồi cơm điện, mua điện thoại tặng bàn ủi...','noidung' => $noidung,'hinh' => 'uudai1.jpg','noibat' => 1],
            ['id_loaitin'=>'13','tieude' => 'Parkson Paragon - thiên đường thời trang và phong cách','tieudekhongdau' => 'Parkson-Paragon---Thien-Duong-Thoi-Trang-Va-Phong-Cach','tomtat' => 'Trung tâm Thương mại Parkson Paragon khu đô thị mới Phú Mỹ Hưng (quận 7, TP HCM) sắp ra mắt vào ngày 15/1 sẽ giới thiệu thời trang, dịch vụ, giải trí và phong cách sống mang đẳng cấp quốc tế ngay tại Việt Nam.','noidung' => $noidung,'hinh' => 'Paragon1.jpg','noibat' => 1],
            ['id_loaitin'=>'13','tieude' => 'Chương trình may mắn của VinaPhone dịp năm mới','tieudekhongdau' => 'Chuong-Trinh-May-Man-Cua-Vinaphone-Dip-Nam-Moi','tomtat' => 'Từ ngày 11/1 đến 24h ngày 12/2, VinaPhone tổ chức chương trình vui chơi có thưởng mang tên "Cầu tài phúc, trúng ngay iPhone" với nhiều giải thưởng hấp dẫn dành cho khách hàng là điện thoại iPhone 4.','noidung' => $noidung,'hinh' => 'vinaphone.jpg','noibat' => 1],
            ['id_loaitin'=>'12','tieude' => 'Mỹ thắt hầu bao nhưng vẫn mạnh tay xây đường sắt cao tốc','tieudekhongdau' => 'My-That-Hau-Bao-Nhung-Van-Manh-Tay-Xay-Duong-Sat-Cao-Toc','tomtat' => 'Kế hoạch ngân sách vừa được Tổng thống Barack Obama công bố cho thấy nước Mỹ sẽ giảm chi khoảng 2,4% cho năm 2011. Tuy nhiên, Chính phủ nước này vẫn dành một khoản tiền kếch xù để đầu tư cho giao thông.','noidung' => $noidung,'hinh' => 'obama-0.jpg','noibat' => 1],
            ['id_loaitin'=>'12','tieude' => 'Lạm phát Trung Quốc tăng 4,9%','tieudekhongdau' => 'Lam-Phat-Trung-Quoc-Tang-4,9-','tomtat' => 'Số liệu của cơ quan thống kê Trung Quốc vừa đưa ra sáng nay cho thấy chỉ số giá tiêu dùng tháng 1 nước này tăng 4,9% so với cùng kỳ năm ngoái.','noidung' => $noidung,'hinh' => 'China-inflatio.jpg','noibat' => 1],
            ['id_loaitin'=>'25','tieude' => 'Đôi vợ chồng sát hại hàng xóm để cướp vàng','tieudekhongdau' => 'Doi-Vo-Chong-Sat-Hai-Hang-Xom-De-Cuop-Vang','tomtat' => 'Thấy chị Lan đeo nhẫn vàng, vợ chồng Tâm vờ tổ chức tiệc sinh nhật, chuốc rượu bà hàng xóm rồi rủ vào nhà nghỉ để thực hiện mưu đồ giết người, cướp của. Đôi vợ chồng sát nhân vừa bị cảnh sát bắt.','noidung' => $noidung,'hinh' => '2kegietnguoi.jpg','noibat' => 1],
            ['id_loaitin'=>'25','tieude' => 'Học sinh lớp 10 đi cướp lấy tiền mua xăng','tieudekhongdau' => 'Hoc-Sinh-Lop-10-Di-Cuop-Lay-Tien-Mua-Xang','tomtat' => 'Không tiền đổ xăng dọc đường, hai thanh niên bàn nhau đi cướp cửa hàng điện thoại di động. Ngày 29/11, một người trong số này đã phải nhận án tù khi đang ngồi ghế học sinh.','noidung' => $noidung,'hinh' => 'cuop (1).jpg','noibat' => 1],
            ['id_loaitin'=>'25','tieude' => 'Hãm hại mẹ nuôi lấy tiền mua ma túy','tieudekhongdau' => 'Ham-Hai-Me-Nuoi-Lay-Tien-Mua-Ma-Tuy','tomtat' => 'Lợi dụng lúc mẹ nuôi nằm quay mặt vào tường ngủ, Cương đã vung dao đâm bà lão 75 tuổi.','noidung' => $noidung,'hinh' => 'cuong-1.jpg','noibat' => 1],
            ['id_loaitin'=>'25','tieude' => 'Nổ súng sát hại hàng xóm','tieudekhongdau' => 'No-Sung-Sat-Hai-Hang-Xom','tomtat' => 'Tối 28/11, sau tiếng súng nổ, người đàn ông gục ngã trước cổng nhà. Vụ án mạng khiến người dân trong ngõ nhỏ trên phố Kim Giang (Hà Nội) hoảng sợ.','noidung' => $noidung,'hinh' => 'no-sung.jpg','noibat' => 1],
            ['id_loaitin'=>'25','tieude' => 'Trốn cảnh sát, con bạc nhảy xuống hồ chết đuối','tieudekhongdau' => 'Tron-Canh-Sat,-Con-Bac-Nhay-Xuong-Ho-Chet-Duoi','tomtat' => 'Thấy đồng bọn chạy tán loạn khi cảnh sát hình sự ập đến, nam thanh niên liều mình nhảy xuống hồ Ba Mẫu (Hà Nội) tìm đường thoát thân. Sau hơn hai tiếng, xác người này mới được tìm thấy.','noidung' => $noidung,'hinh' => 'bac.jpg','noibat' => 1],
              ['id_loaitin'=>'17','tieude' => 'Mai Hương Idol hướng dẫn sinh viên hát','tieudekhongdau' => 'Mai-Huong-Idol-Huong-Dan-Sinh-Vien-Hat','tomtat' => 'Á quân Vietnam Idol sẽ giúp các bạn trẻ ở Đà Nẵng thể hiện tiết mục ca nhạc dự thi. Đây cũng là lần đầu tiên Văn Mai Hương đến với khán giả của thành phố biển này.','noidung' => $noidung,'hinh' => 'mai-huong-phuong-vy.jpg','noibat' => 1],
            ['id_loaitin'=>'17','tieude' => 'Lady Gaga xoa dịu lời chỉ trích đạo nhạc Madonna','tieudekhongdau' => 'Lady-Gaga-Xoa-Diu-Loi-Chi-Trich-Dao-Nhac-Madonna','tomtat' => 'Gaga quả quyết đàn chị Madonna yêu thích và ủng hộ ca khúc mới ‘Born This Way’ của cô chứ không hề cáo buộc cô sao chép ‘Express Yourself’, bài hát thành công năm 1989 của Nữ hoàng nhạc pop.','noidung' => $noidung,'hinh' => 'Lady_Gaga_1.jpg','noibat' => 1],
            ['id_loaitin'=>'17','tieude' => 'Nathan Lee dùng âm nhạc tâm sự về tình yêu','tieudekhongdau' => 'Nathan-Lee-Dung-Am-Nhac-Tam-Su-Ve-Tinh-Yeu','tomtat' => 'Sau thành công của “H”, chàng nghệ sĩ đa năng gấp rút ra abum vào đúng dịp Valentine với tên “Thức” - lấy ý tưởng từ sự tỉnh thức sau những ngỡ ngàng, thăng hoa và cả đổ vỡ trong tình yêu.','noidung' => $noidung,'hinh' => 'nathan-1.jpg','noibat' => 1],
            ['id_loaitin'=>'18','tieude' => 'Lady Gaga uống nhiều rượu và hút thuốc khi viết nhạc','tieudekhongdau' => 'Lady-Gaga-Uong-Nhieu-Ruou-Va-Hut-Thuoc-Khi-Viet-Nhac','tomtat' => 'Nữ ca sĩ vừa giành 3 giải Grammy hôm 13/2 thú nhận rằng cô sử dụng rất nhiều chất gây nghiện trong quá trình sáng tác để có thể thăng hoa trong âm nhạc. ','noidung' => $noidung,'hinh' => 'Lady_gaga_(10).jpg','noibat' => 1],
            ['id_loaitin'=>'19','tieude' => 'Mỹ Tâm đem liveshow ra Hà Nội','tieudekhongdau' => 'My-Tam-Dem-Liveshow-Ra-Ha-Noi','tomtat' => 'Sau thành công tại TP HCM, Họa mi tóc nâu tiếp tục đưa đêm nhạc Kỷ niệm 10 năm ca hát đến với khán giả thủ đô vào tháng 3.','noidung' => $noidung,'hinh' => 'my-tam-1.jpg','noibat' => 1],
            ['id_loaitin'=>'20','tieude' => 'Fan tức giận khi Justin Bieber không giành Grammy','tieudekhongdau' => 'Fan-Tuc-Gian-Khi-Justin-Bieber-Khong-Gianh-Grammy','tomtat' => 'Người hâm mộ của Hoàng tử Pop 17 tuổi trở nên quá khích và tấn công trang thông tin của nữ ca sĩ nhạc Jazz Esperanza Spalding vì cho rằng cô nẫng tay trên giải Best New Artist từ tay Justin. ','noidung' => $noidung,'hinh' => 'w0010405.jpg','noibat' => 1],
            ['id_loaitin'=>'21','tieude' => 'Tùng Dương đoạt giải Album Vàng','tieudekhongdau' => 'Tung-Duong-Doat-Giai-Album-Vang','tomtat' => 'Li ti - album nhạc điện tử của nam ca sĩ Con cò - được giám khảo đánh giá là xuất sắc. Chương trình trao giải Album Vàng đầu tiên của năm 2011 diễn ra tối 14/2 tại Nhà hát truyền hình TP HCM.','noidung' => $noidung,'hinh' => 'tung-duong-10.jpg','noibat' => 1],
            ['id_loaitin'=>'22','tieude' => 'Hai Lady và nhạc rock nổi bật tại Grammy 201','tieudekhongdau' => '','tomtat' => 'Nhóm nhạc đồng quê Lady Antebellum chiến thắng vang dội nhất với 5 giải, nữ ca sĩ Lady Gaga về nhì với 3 giải. Tuy nhiên, giải thưởng lớn nhất - Album của năm - thuộc về nhóm rock người Canada Arcade Fire. ','noidung' => $noidung,'hinh' => '000_Was3710642.jpg','noibat' => 1],
            ['id_loaitin'=>'23','tieude' => 'Nhóm 365 hát ca khúc quốc tế mừng Valentine','tieudekhongdau' => 'Nhom-365-Hat-Ca-Khuc-Quoc-Te-Mung-Valentine','tomtat' => 'Những chàng trai của Ngô Thanh Vân hát lại một số bài hát nổi tiếng của các boyband thế giới nhân dịp Lễ tình yêu. Nhóm 365 cũng hát lại Khi nào em buồn - hit một thời của đả nữ.','noidung' => $noidung,'hinh' => 'valentine_1.jpg','noibat' => 1],
            ['id_loaitin'=>'25','tieude' => 'Phú Quang song ca với Đàm Vĩnh Hưng','tieudekhongdau' => 'Phu-Quang-Song-Ca-Voi-Dam-Vinh-Hung','tomtat' => 'Vị nhạc sĩ của những bản tình ca tạo nên bất ngờ trong đêm nhạc "Biển, nỗi nhớ và em" tại Nhà hát Lớn HN tối 11/2, khi hát cùng Quý ông nhạc Việt bài ca say đắm "Mơ về nơi xa lắm".','noidung' => $noidung,'hinh' => '01_1.jpg','noibat' => 1],
            ['id_loaitin'=>'16','tieude' => 'Uyên Linh, Nam Cường xuất ngoại đầu năm','tieudekhongdau' => 'Uyen-Linh,-Nam-Cuong-Xuat-Ngoai-Dau-Nam','tomtat' => 'Chàng trai Bay giữa ngân hà cùng quán quân Vietnam Idol 2010 góp mặt trong chương trình Music Revolution 2011 của Học viện quản lý Singapore dành cho du học sinh, tổ chức ngày 18/2. ','noidung' => $noidung,'hinh' => 'linh-12.jpg','noibat' => 1],
            ['id_loaitin'=>'17','tieude' => 'Trang Nhung khoe giọng hát trong Lễ tình nhân','tieudekhongdau' => 'Trang-Nhung-Khoe-Giong-Hat-Trong-Le-Tinh-Nhan','tomtat' => 'Á hậu Phụ nữ qua ảnh 2005 thử sức trong lĩnh vực ca hát bằng single đầu tay trong dịp lễ Valentine. Hình tượng của Trang Nhung được xây dựng khá đẹp và ấn tượng, như một nữ hoàng của tình yêu.','noidung' => $noidung,'hinh' => 'trang-nhung-4.jpg','noibat' => 1],
            ['id_loaitin'=>'17','tieude' => 'Eminem nghĩ mình sẽ trắng tay tại Grammy','tieudekhongdau' => 'Eminem-Nghi-Minh-Se-Trang-Tay-Tai-Grammy','tomtat' => 'Mặc dù dẫn đầu với 10 đề cử quan trọng nhất, rapper da trắng nổi tiếng không tin vào cơ hội chiến thắng của anh tại giải Grammy sắp diễn ra cuối tuần này. ','noidung' => $noidung,'hinh' => 'eminem-rihanna-love-the-way-you-lie.jpg','noibat' => 1],
            ['id_loaitin'=>'17','tieude' => 'Hồ Ngọc Hà hạnh phúc bên các hot boy','tieudekhongdau' => 'Ho-Ngoc-Ha-Hanh-Phuc-Ben-Cac-Hot-Boy','tomtat' => 'Nhân dịp lễ Valentine, nữ ca sĩ xinh đẹp cùng các chàng trai của nhóm V.Music cho ra mắt video clip "Ngày hạnh phúc". Đây cũng là sản phẩm kỷ niệm ngày nhóm nhạc nam này tròn 1 tuổi.','noidung' => $noidung,'hinh' => 'ho-ngoc-ha-2.jpg','noibat' => 1],
            ['id_loaitin'=>'17','tieude' => 'Uyên Linh hát trong Đêm Valentine thế kỷ','tieudekhongdau' => '','tomtat' => 'Thần tượng âm nhạc Việt Nam 2010 trình bày những ca khúc say đắm tại đêm tiệc tình yêu lãng mạn, quy tụ nhiều nghệ sĩ và 100 cặp tình nhân trẻ, diễn ra tối 13/2 tại TP HCM.','noidung' => $noidung,'hinh' => 'uyen-linh-16.jpg','noibat' => 1],
            ['id_loaitin'=>'17','tieude' => 'Pianist Trang Trịnh lần đầu về nước biểu diễn','tieudekhongdau' => 'Pianist-Trang-Trinh-Lan-Dau-Ve-Nuoc-Bieu-Dien','tomtat' => 'Một trong những tài năng piano triển vọng nhất Việt Nam sẽ tri ân khán giả trong nước bằng buổi độc tấu mang tên “Nhật ký dương cầm” diễn ra 23/2 tại Nhà hát Lớn Hà Nội và tháng 4 tại TP HCM.','noidung' => $noidung,'hinh' => '_MG_8802.jpg','noibat' => 1],
            ['id_loaitin'=>'17','tieude' => 'Backstreet Boys háo hức đến Việt Nam','tieudekhongdau' => 'Backstreet-Boys-Hao-Huc-Den-Viet-Nam','tomtat' => 'Những tay lãng tử đường phố bày tỏ cảm xúc trước chuyến lưu diễn tại đất nước hình chữ S. A.J. McLean - thành viên đang cai nghiện - cũng tỏ ra mong chờ sự kiện này.','noidung' => $noidung,'hinh' => '01 (1).jpg','noibat' => 1],
            ['id_loaitin'=>'17','tieude' => 'Album ồ ạt ra mắt đầu năm','tieudekhongdau' => 'Album-O-At-Ra-Mat-Dau-Nam','tomtat' => 'Ngay trong tháng 1, các ca sĩ trẻ nhanh chóng ra mắt sản phẩm riêng để gây chú ý cho khán giả. Nhiều album được đầu tư kỹ trở thành tín hiệu tốt cho một năm sôi động của nhạc Việt.','noidung' => $noidung,'hinh' => 'thuy-tien-em-da-quen.jpg','noibat' => 1],
            ['id_loaitin'=>'17','tieude' => 'Quang Vinh song ca cùng Don Nguyễn','tieudekhongdau' => 'Quang-Vinh-Song-Ca-Cung-Don-Nguyen','tomtat' => 'Lần đầu tiên Hoàng tử sơn ca cộng tác với hiện tượng cộng đồng mạng trong một ca khúc vui nhộn. Quang Vinh còn diện chiếc áo truyền thống cười rạng rỡ trong bộ ảnh mừng xuân Tân Mão.','noidung' => $noidung,'hinh' => 'quang-vinh-2.jpg','noibat' => 1],
            ['id_loaitin'=>'17','tieude' => 'Uyên Linh chạy sô giáp Tết','tieudekhongdau' => 'Uyen-Linh-Chay-So-Giap-Tet','tomtat' => 'Thần tượng Âm nhạc 2010 liên tục được mời hát trong các sự kiện cuối năm của nhiều doanh nghiệp. Cảm ơn tình yêu và Take me to the river là 2 bài hit giúp Uyên Linh khuấy động đêm tiệc vào tối 28/1 tại bán đảo Kim Cương, TP HCM.','noidung' => $noidung,'hinh' => 'linh-11.jpg','noibat' => 1],
            ['id_loaitin'=>'17','tieude' => 'Xuân Bắc làm ‘mỹ nhân’ Ấn Độ','tieudekhongdau' => 'Xuan-Bac-Lam-‘My-Nhan’-An-Do','tomtat' => 'Chàng giám khảo vui tính khoác lên người bộ sari nhảy múa tưng bừng trong chương trình “Du lịch vòng quanh thế giới cùng Đồ Rê Mí” - món quà âm nhạc dành cho thiếu nhi được phát sóng chiều 3/2 (tức mùng 1 Tết âm lịch) trên VTV3.','noidung' => $noidung,'hinh' => 'Xuan-Bac-Chau-Anh.jpg','noibat' => 1],
            ['id_loaitin'=>'17','tieude' => 'Bản quyền âm nhạc năm qua thu về 32,5 tỷ đồng','tieudekhongdau' => 'Ban-Quyen-Am-Nhac-Nam-Qua-Thu-Ve-32,5-Ty-Dong','tomtat' => 'Năm 2010, các hình thức nhạc chuông điện thoại, karaoke và trang web tải nhạc còn thu về nhiều tiền bản quyền hơn các chương trình biểu diễn chuyên nghiệp. Thực trạng này tồn tại một phần do bất cập về luật sở hữu trí tuệ.','noidung' => $noidung,'hinh' => 'pho_duc_phuong.JPG','noibat' => 1],
            ['id_loaitin'=>'17','tieude' => 'Lê Xuân Hảo ra album nhờ bà xã','tieudekhongdau' => 'Le-Xuan-Hao-Ra-Album-Nho-Ba-Xa','tomtat' => 'Giải nhất Thính phòng Sao Mai 2009 nhận được sự hỗ trợ đắc lực của vợ không chỉ trong cuộc sống mà cả trong âm nhạc. Cô giáo Ngọc Diệp chính là người biên tập cho sản phẩm đầu tay của anh.','noidung' => $noidung,'hinh' => 'le-xuan-hao-1.jpg','noibat' => 1]
           
    	]);
    }
}










