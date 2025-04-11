<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Single News</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="index.php">
							<h3 style="color:#F28123;">Fruit&Khoi</h3>
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="current-list-item"><a href="#">Home</a>
									<ul class="sub-menu">
										<li><a href="index.php">Static Home</a></li>
										<li><a href="index_2.php">Slider Home</a></li>
									</ul>
								</li>
								<li><a href="about.php">About</a></li>
								<li><a href="#">Pages</a>
									<ul class="sub-menu">
										<li><a href="404.php">404 page</a></li>
										<li><a href="about.php">About</a></li>
										<li><a href="cart.php">Cart</a></li>
										<li><a href="checkout.php">Check Out</a></li>
										<li><a href="contact.php">Contact</a></li>
										<li><a href="news.php">News</a></li>
										<li><a href="shop.php">Shop</a></li>
									</ul>
								</li>
								<li><a href="news.php">News</a>
									<ul class="sub-menu">
										<li><a href="news.php">News</a></li>
										<li><a href="single-news.php">Single News</a></li>
									</ul>
								</li>
								<li><a href="contact.php">Contact</a></li>
								<li><a href="shop.php">Shop</a>
									<ul class="sub-menu">
										<li><a href="shop.php">Shop</a></li>
										<li><a href="checkout.php">Check Out</a></li>
										<li><a href="single-product.php">Single Product</a></li>
										<li><a href="cart.php">Cart</a></li>
									</ul>
								</li>
								<li>
									<div class="header-icons">
									<div class="user_option">
              <!-- <a href="login_user.php" class="user_link">
                <i class="fa fa-user" aria-hidden="true"></i>
              </a> -->
              <?php
              if(!empty($_SESSION["UserName"])) {
                echo "<p style='color: white; margin: 0;'> Hello " . $_SESSION["UserName"] . "</p>";
                echo "<a href='logout.php' class='user_link'> <i class='fa-solid fa-right-from-bracket' aria-hidden='true'></i></a>";
              } else{
                echo "<a href='login_user.php' class='user_link'> <i class='fa fa-user' aria-hidden='true'></i></a>";
              }
              ?>
              <a class="cart_link" href="cart.php">
                
              </a>
										<span style="margin-right: 30px"><a class="shopping-cart" href="cart.php"><i class="fas fa-shopping-cart"></i></a></span>
										<a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
									</div>
								</li>
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->

	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search arewa -->
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Read the Details</p>
						<h1>Single Article</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->
	
	<!-- single article section -->
	<div class="mt-150 mb-150">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="single-article-section">
					<div class="single-article-text">
						<div class="single-artcile-bg"></div>
						<p class="blog-meta">
							<span class="author"><i class="fas fa-user"></i> Quản trị viên</span>
							<span class="date"><i class="fas fa-calendar"></i> 27 Tháng Mười Hai, 2019</span>
						</p>
						<h2>Quả lựu có thể ngăn ngừa bệnh tim</h2>
						<p>Quả lựu được biết đến với nhiều lợi ích sức khỏe, trong đó có khả năng ngăn ngừa bệnh tim. Chúng chứa các chất chống oxy hóa mạnh giúp cải thiện lưu thông máu, giảm huyết áp và ngăn ngừa xơ vữa động mạch. Nghiên cứu cho thấy việc sử dụng nước ép lựu thường xuyên có thể giảm nguy cơ mắc các bệnh tim mạch nghiêm trọng.</p>
						<p>Ngoài ra, quả lựu còn có tác dụng chống viêm, hỗ trợ kiểm soát cholesterol và làm chậm quá trình oxy hóa các tế bào. Các hợp chất tự nhiên trong lựu giúp bảo vệ thành mạch máu, giảm nguy cơ hình thành cục máu đông và hỗ trợ sức khỏe tim mạch toàn diện.</p>
						<p>Đặc biệt, quả lựu rất giàu vitamin C, K và kali – những chất dinh dưỡng thiết yếu giúp duy trì sức khỏe của hệ tim mạch. Việc bổ sung quả lựu vào chế độ ăn uống hằng ngày là một cách đơn giản nhưng hiệu quả để bảo vệ trái tim của bạn trước các nguy cơ bệnh lý.</p>
						<p>Tóm lại, quả lựu không chỉ là một loại trái cây ngon miệng mà còn là một "siêu thực phẩm" giúp tăng cường sức khỏe tim mạch và phòng ngừa bệnh tật hiệu quả.</p>
					</div>

					<div class="comments-list-wrap">
						<h3 class="comment-count-title">3 Bình luận</h3>
						<div class="comment-list">
							<div class="single-comment-body">
								<div class="comment-user-avater">
									<img src="assets/img/avaters/avatar1.png" alt="">
								</div>
								<div class="comment-text-body">
									<h4>Công <span class="comment-date">26 Tháng Tư, 2020</span> <a href="#">trả lời</a></h4>
									<p>Bài viết thật sự hữu ích! Mình đã từng nghe quả lựu rất tốt, nhưng không nghĩ là có nhiều lợi ích cho tim mạch đến vậy. Cảm ơn tác giả!</p>
								</div>
								<div class="single-comment-body child">
									<div class="comment-user-avater">
										<img src="assets/img/avaters/avatar3.png" alt="">
									</div>
									<div class="comment-text-body">
										<h4>Linh <span class="comment-date">27 Tháng Tư, 2020</span> <a href="#">trả lời</a></h4>
										<p>Đúng rồi, mình cũng đang uống nước ép lựu mỗi sáng. Từ khi dùng cảm thấy cơ thể khoẻ hơn và ít bị mệt mỏi.</p>
									</div>
								</div>
							</div>
							<div class="single-comment-body">
								<div class="comment-user-avater">
									<img src="assets/img/avaters/avatar2.png" alt="">
								</div>
								<div class="comment-text-body">
									<h4>Khánh <span class="comment-date">12 Tháng Năm, 2020</span> <a href="#">trả lời</a></h4>
									<p>Mình sẽ thử bổ sung quả lựu vào bữa ăn hằng ngày. Hy vọng sẽ cải thiện sức khỏe. Cảm ơn bài viết rất nhiều!</p>
								</div>
							</div>
						</div>
					</div>

					<div class="comment-template">
						<h4>Để lại bình luận</h4>
						<p>Nếu bạn có ý kiến, đừng ngần ngại chia sẻ với chúng tôi.</p>
						<form action="index.html">
							<p>
								<input type="text" placeholder="Tên của bạn">
								<input type="email" placeholder="Email của bạn">
							</p>
							<p><textarea name="comment" id="comment" cols="30" rows="10" placeholder="Nội dung bình luận của bạn"></textarea></p>
							<p><input type="submit" value="Gửi bình luận"></p>
						</form>
					</div>
				</div>
			</div>

				<div class="col-lg-4">
					<div class="sidebar-section">
						<div class="recent-posts">
							<h4>Recent Posts</h4>
							<ul>
								<li><a href="single-news.html">You will vainly look for fruit on it in autumn.</a></li>
								<li><a href="single-news.html">A man's worth has its season, like tomato.</a></li>
								<li><a href="single-news.html">Good thoughts bear good fresh juicy fruit.</a></li>
								<li><a href="single-news.html">Fall in love with the fresh orange</a></li>
								<li><a href="single-news.html">Why the berries always look delecious</a></li>
							</ul>
						</div>
						<div class="archive-posts">
							<h4>Archive Posts</h4>
							<ul>
								<li><a href="single-news.html">JAN 2019 (5)</a></li>
								<li><a href="single-news.html">FEB 2019 (3)</a></li>
								<li><a href="single-news.html">MAY 2019 (4)</a></li>
								<li><a href="single-news.html">SEP 2019 (4)</a></li>
								<li><a href="single-news.html">DEC 2019 (3)</a></li>
							</ul>
						</div>
						<div class="tag-section">
							<h4>Tags</h4>
							<ul>
								<li><a href="single-news.html">Apple</a></li>
								<li><a href="single-news.html">Strawberry</a></li>
								<li><a href="single-news.html">BErry</a></li>
								<li><a href="single-news.html">Orange</a></li>
								<li><a href="single-news.html">Lemon</a></li>
								<li><a href="single-news.html">Banana</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end single article section -->

	<!-- logo carousel -->
	<div class="logo-carousel-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="logo-carousel-inner">
						<div class="single-logo-item">
							<img src="assets/img/company-logos/1.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/2.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/3.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/4.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/5.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end logo carousel -->

	<!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">About us</h2>
						<p>Cần là có</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Get in Touch</h2>
						<ul>
							<li>792 Trương Định</li>
							<li>support@fruit&Khoi.com</li>
							<li>+00 111 222 3333</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Pages</h2>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="services.html">Shop</a></li>
							<li><a href="news.html">News</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
						<h2 class="widget-title">Subscribe</h2>
						<p>Subscribe to our mailing list to get the latest updates.</p>
						<form action="index.html">
							<input type="email" placeholder="Email">
							<button type="submit"><i class="fas fa-paper-plane"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->
	
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
				<p>Copyrights &copy; 2025 - <a href="">Tuấn Khôi</a>,  All Rights Reserved.</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->
	
	<!-- jquery -->
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="assets/js/main.js"></script>

</body>
</html>