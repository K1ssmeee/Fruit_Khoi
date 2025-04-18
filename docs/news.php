<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>News</title>

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
						<p>Organic Information</p>
						<h1>News Article</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- latest news -->
	<div class="latest-news mt-150 mb-150">
		<div class="container">
		<div class="row">
	<div class="col-lg-4 col-md-6">
		<div class="single-latest-news">
			<a href="single-news.php"><div class="latest-news-bg news-bg-1"></div></a>
			<div class="news-text-box">
				<h3><a href="single-news.php">Bạn sẽ vô ích tìm kiếm trái cây trên nó vào mùa thu.</a></h3>
				<p class="blog-meta">
					<span class="author"><i class="fas fa-user"></i> Quản trị viên</span>
					<span class="date"><i class="fas fa-calendar"></i> 27 Tháng Mười Hai, 2019</span>
				</p>
				<p class="excerpt">Trái cây không phải lúc nào cũng có sẵn, đặc biệt là vào mùa thu. Hãy trân trọng từng mùa mà thiên nhiên ban tặng.</p>
				<a href="single-news.php" class="read-more-btn">đọc thêm <i class="fas fa-angle-right"></i></a>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-md-6">
		<div class="single-latest-news">
			<a href="single-news.php"><div class="latest-news-bg news-bg-2"></div></a>
			<div class="news-text-box">
				<h3><a href="single-news.php">Giá trị của một người đàn ông cũng có mùa, như cà chua vậy.</a></h3>
				<p class="blog-meta">
					<span class="author"><i class="fas fa-user"></i> Quản trị viên</span>
					<span class="date"><i class="fas fa-calendar"></i> 27 Tháng Mười Hai, 2019</span>
				</p>
				<p class="excerpt">Mỗi người đều có thời điểm tỏa sáng riêng, giống như cà chua chỉ ngon vào đúng mùa của nó.</p>
				<a href="single-news.php" class="read-more-btn">đọc thêm <i class="fas fa-angle-right"></i></a>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-md-6">
		<div class="single-latest-news">
			<a href="single-news.php"><div class="latest-news-bg news-bg-3"></div></a>
			<div class="news-text-box">
				<h3><a href="single-news.php">Suy nghĩ tốt mang đến trái cây tươi ngon.</a></h3>
				<p class="blog-meta">
					<span class="author"><i class="fas fa-user"></i> Quản trị viên</span>
					<span class="date"><i class="fas fa-calendar"></i> 27 Tháng Mười Hai, 2019</span>
				</p>
				<p class="excerpt">Tâm trí tích cực sẽ tạo ra những điều tốt đẹp, giống như cây lành cho ra quả ngọt.</p>
				<a href="single-news.php" class="read-more-btn">đọc thêm <i class="fas fa-angle-right"></i></a>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-md-6">
		<div class="single-latest-news">
			<a href="single-news.php"><div class="latest-news-bg news-bg-4"></div></a>
			<div class="news-text-box">
				<h3><a href="single-news.php">Yêu trái cam tươi mới từ cái nhìn đầu tiên.</a></h3>
				<p class="blog-meta">
					<span class="author"><i class="fas fa-user"></i> Quản trị viên</span>
					<span class="date"><i class="fas fa-calendar"></i> 27 Tháng Mười Hai, 2019</span>
				</p>
				<p class="excerpt">Sắc cam tươi sáng và hương vị ngọt ngào khiến bạn phải say mê ngay lập tức.</p>
				<a href="single-news.php" class="read-more-btn">đọc thêm <i class="fas fa-angle-right"></i></a>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-md-6">
		<div class="single-latest-news">
			<a href="single-news.php"><div class="latest-news-bg news-bg-5"></div></a>
			<div class="news-text-box">
				<h3><a href="single-news.php">Tại sao quả mọng luôn trông ngon mắt?</a></h3>
				<p class="blog-meta">
					<span class="author"><i class="fas fa-user"></i> Quản trị viên</span>
					<span class="date"><i class="fas fa-calendar"></i> 27 Tháng Mười Hai, 2019</span>
				</p>
				<p class="excerpt">Vẻ ngoài mọng nước và màu sắc bắt mắt khiến quả mọng luôn hấp dẫn mọi ánh nhìn.</p>
				<a href="single-news.php" class="read-more-btn">đọc thêm <i class="fas fa-angle-right"></i></a>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-md-6">
		<div class="single-latest-news">
			<a href="single-news.php"><div class="latest-news-bg news-bg-6"></div></a>
			<div class="news-text-box">
				<h3><a href="single-news.php">Tình yêu với trái cây của John Doe là chân thật.</a></h3>
				<p class="blog-meta">
					<span class="author"><i class="fas fa-user"></i> Quản trị viên</span>
					<span class="date"><i class="fas fa-calendar"></i> 27 Tháng Mười Hai, 2018</span>
				</p>
				<p class="excerpt">John Doe không chỉ ăn trái cây mỗi ngày, mà còn chia sẻ sự yêu thích này với mọi người xung quanh.</p>
				<a href="single-news.php" class="read-more-btn">đọc thêm <i class="fas fa-angle-right"></i></a>
			</div>
		</div>
	</div>
</div>


			<div class="row">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">
							<div class="pagination-wrap">
								<ul>
									<li><a href="#">Prev</a></li>
									<li><a href="#">1</a></li>
									<li><a class="active" href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">Next</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end latest news -->

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