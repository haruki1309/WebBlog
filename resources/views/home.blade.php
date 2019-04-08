<!DOCTYPE html>
<html>
<head>
	<title>BlogLichSu</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/index.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Alegreya+SC" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<script type="text/javascript">
		$(window).on('scroll', function(){
			if($(window).scrollTop()){
				$('nav').addClass('black');
			}
			else{
				$('nav').removeClass('black');
			}
		})
	</script>
</head>
<body>
	<div class="container">
		<nav>
			<input type="checkbox" id="nav" class="hidden">
			<label for="nav" class="nav-btn">
				<i></i>
				<i></i>
				<i></i>
			</label>
			<div class="logo">
				<a href="index.html">BLOGLICHSU</a>
			</div>

			<div class="nav-wrapper">
				<ul>
					<li><a href="index.html">Trang chủ</a></li>
					<li><a href="#">Sự kiện</a></li>
					<li><a href="#">Nhân vật</a></li>
				</ul>
			</div>
		</nav>

		<section class="background">
			<h1>Lịch Sử Việt Nam</h1>
			<h2>1858 - 1975</h2>
		</section>

		<section class="content">
			<section class="recent-news">
				<div class="wrapper">
					<h1 class="category">Bài viết mới nhất</h1>
					
					<div class="row">
						<div class="news-active">
							<div class="col-md-4">
								<a href="posts.html">
									<div class="lastest-news-wrap">
										<div class="news-img">
											<img src="Asset/1.jpg">

											<div class="date">
												<span>2</span>
												<span>Apr</span>
											</div>
										</div>

										<div class="title">
											<h1>Lorem Ipsum</h1>
										</div>

										<div class="sub-title">
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
										</div>
									</div>
								</a>
							</div>

							<div class="col-md-4">
								<a href="https:\\google.com">
									<div class="lastest-news-wrap">
										<div class="news-img">
											<img src="Asset/1.jpg">

											<div class="date">
												<span>2</span>
												<span>Apr</span>
											</div>
										</div>

										<div class="title">
											<h1>Lorem Ipsum</h1>
										</div>

										<div class="sub-title">
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
										</div>
									</div>
								</a>
							</div>

							<div class="col-md-4">
								<a href="https:\\google.com">
									<div class="lastest-news-wrap">
										<div class="news-img">
											<img src="Asset/1.jpg">

											<div class="date">
												<span>2</span>
												<span>Apr</span>
											</div>
										</div>

										<div class="title">
											<h1>Lorem Ipsum</h1>
										</div>

										<div class="sub-title">
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
										</div>
									</div>
								</a>
							</div>

						</div>
					</div>
				</div>
			</section>

			<section class="timeline-events">
				<div class="wrapper">
					<h1 class="category">Các giai đoạn lịch sử</h1>

					<div class="row">
						<div class="col-md-3">
							<a href="#">
								<div class="event-wrapper">
									<div class="img-wrapper">
										<img src="Asset/1885.jpg">
									</div>

									<div class="text-wrapper">
										<div class="text-wrapper-inside">
											<div class="year">1858 - 1884</div>

											<div class="title-wrapper">
													<div class="title">Chiến tranh Pháp - Đại Nam</div>
													<div class="sub-title">
														Cuộc chiến giữa nhà Nguyễn của Đại Nam và Đế quốc thực dân Pháp, diễn ra từ năm 1858 đến năm 1884
													</div>	
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>

						<div class="col-md-3">
							<a href="#">
								<div class="event-wrapper">
									<div class="img-wrapper">
										<img src="Asset/1954.jpg">
									</div>

									<div class="text-wrapper">
										<div class="text-wrapper-inside">
											<div class="year">1884 - 1954</div>

											<div class="title-wrapper">
													<div class="title">Kháng chiến chống thực dân Pháp</div>
													<div class="sub-title">
														Giai đoạn kháng chiến chống thực dân pháp xâm lược, nhà nước Việt Nam Dân chủ Cộng hòa được khai sinh, miền Bắc được giải phóng.
													</div>	
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>

						<div class="col-md-3">
							<a href="#">
								<div class="event-wrapper">
									<div class="img-wrapper">
										<img src="Asset/1975.jpg">
									</div>

									<div class="text-wrapper">
										<div class="text-wrapper-inside">
											<div class="year">1954 - 1975</div>

											<div class="title-wrapper">
													<div class="title">Kháng chiến chống Đế quốc Mỹ</div>
													<div class="sub-title">
														Giai đoạn miền Bắc xây dựng chủ nghĩa xã hội, cả nước hướng đến giải phóng miền Nam, thống nhất 2 miền bị chia cắt, tiêu biểu là chiến dịch HCM lịch sử
													</div>	
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>

						<div class="col-md-3">
							<a href="#">
								<div class="event-wrapper">
									<div class="img-wrapper">
										<img src="Asset/1978.jpg">
									</div>

									<div class="text-wrapper">
										<div class="text-wrapper-inside">
											<div class="year">1978	 - 1984</div>

											<div class="title-wrapper">
													<div class="title">Chiến tranh biên giới Việt Nam - Trung Quốc</div>
													<div class="sub-title">
														Chiến tranh biên giới Việt - Trung bắt nguồn từ quan hệ căng thẳng kéo dài giữa hai quốc gia, là một cuộc chiến ngắn nhưng khốc liệt, hơn 5 vạn chiến sĩ chết và bị thương.
													</div>	
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>

						
					</div>

				</div>
			</section>

			<section class="historical-figures">
				<div class="wrapper">
					<h1 class="category">Anh hùng dân tộc</h1>

					<div class="img-grid">
						<div class="img-t1">
							<a href="#">
								<div class="img-wrapper">
									<img src="Asset\hochiminh.jpg" class="figures-img">
								</div>
								<div class="title-wrapper">
									<h1 class="title">Hồ Chí Minh</h1>
									<h3 class="sub-title">1890 - 1969</h3>
								</div>
							</a>
						</div>

						<div class="img-t1">
							<a href="#">
								<div class="img-wrapper">
									<img src="Asset\hochiminh.jpg" class="figures-img">
								</div>
								<div class="title-wrapper">
									<h1 class="title">Hồ Chí Minh</h1>
									<h3 class="sub-title">1890 - 1969</h3>
								</div>
							</a>
						</div>

						<div class="img-t1">
							<a href="#">
								<div class="img-wrapper">
									<img src="Asset\hochiminh.jpg" class="figures-img">
								</div>
								<div class="title-wrapper">
									<h1 class="title">Hồ Chí Minh</h1>
									<h3 class="sub-title">1890 - 1969</h3>
								</div>
							</a>
						</div>

						<div class="img-t1">
							<a href="#">
								<div class="img-wrapper">
									<img src="Asset\hochiminh.jpg" class="figures-img">
								</div>
								<div class="title-wrapper">
									<h1 class="title">Hồ Chí Minh</h1>
									<h3 class="sub-title">1890 - 1969</h3>
								</div>
							</a>
						</div>

						<div class="img-t1">
							<a href="#">
								<div class="img-wrapper">
									<img src="Asset\hochiminh.jpg" class="figures-img">
								</div>
								<div class="title-wrapper">
									<h1 class="title">Hồ Chí Minh</h1>
									<h3 class="sub-title">1890 - 1969</h3>
								</div>
							</a>
						</div>

						<div class="img-t1">
							<a href="#">
								<div class="img-wrapper">
									<img src="Asset\hochiminh.jpg" class="figures-img">
								</div>
								<div class="title-wrapper">
									<h1 class="title">Hồ Chí Minh</h1>
									<h3 class="sub-title">1890 - 1969</h3>
								</div>
							</a>
						</div>

						<div class="img-t1">
							<a href="#">
								<div class="img-wrapper">
									<img src="Asset\hochiminh.jpg" class="figures-img">
								</div>
								<div class="title-wrapper">
									<h1 class="title">Hồ Chí Minh</h1>
									<h3 class="sub-title">1890 - 1969</h3>
								</div>
							</a>
						</div>
						
						<div class="img-t1">
							<a href="#">
								<div class="img-wrapper">
									<img src="Asset\hochiminh.jpg" class="figures-img">
								</div>
								<div class="title-wrapper">
									<h1 class="title">Hồ Chí Minh</h1>
									<h3 class="sub-title">1890 - 1969</h3>
								</div>
							</a>
						</div>
					</div>
				</div>
			</section>
		</section>

		<section class="footer"></section>
	</div>
</body>
</html>