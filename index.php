	<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Bán xe giá rẻ</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
      <li class="active"><a href="#">Trang chủ</a></li>
      <li><a href="#"></a></li>
      <li><a href="#">Giới thiệu</a></li>
      <li><a href="#"></a></li>
      <li><a href="#">Xe đạp</a></li>
      <li><a href="#"></a></li>
      <li><a href="#">Xe đạp điến</a></li>
      <li><a href="#"></a></li>
      <li><a href="#">Bảo hành</a></li>
      <li><a href="#"></a></li>
      <li><a href="#">Mạng lưới phân bố</a></li>
      <li><a href="#"></a></li>
      <li><a href="#">Tin tức</a></li>
      <li><a href="#"></a></li>
      <li><a href="#">Liên hệ</a></li>
    </ul>
  </div>
</nav>
  <div class="container">
  <img style="size: 50%;" src="http://xedapdienonline.com/upload/images/viet-thanh-showroom1.jpg">
  <hr>
</div>
<div class="container-fluid text-center">    
  <div class="row content">
     <div class="leftmenu col-md-2">
				<div class="titlemenu">
					<div>DANH MỤC SẢN PHẨM</div>
				</div>
					<div class="smallmenu">
						<a style="color: black;" href="http://localhost:8080/Laravel/blog/public/name={{ $list->listname }}"><p>Xe đạp điện</p></a>
						<a style="color: black;" href="http://localhost:8080/Laravel/blog/public/name={{ $list->listname }}"><p>Xe đạp điện</p></a>
						<a style="color: black;" href="http://localhost:8080/Laravel/blog/public/name={{ $list->listname }}"><p>Xe đạp điện</p></a>
						<a style="color: black;" href="http://localhost:8080/Laravel/blog/public/name={{ $list->listname }}"><p>Xe đạp điện</p></a>
					</div>
			</div>
    <div class="col-md-10 text-left"> 
      <div class="body row">
      	<div class="post col-md-10">
				<div class="titlepost">
					<p>SẢN PHẨM MỚI</p>
				</div>
				<hr>
				<div class="mainpost">
					<div class="row">
						    <div class="col-md-4">
								<div class="smallpost">
									<div class="img">
										<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRn5sSO0ewN49kIqELIxMHWO53ROlAjsXphDLVgtAjC9VtZbuZ-">
										<p>Xe đạp điện Nijia phanh đĩa – 2015</p>
									</div>
									<div class="row">
										<div class="col-md-9 price">
											<p>9,800,000₫ VNĐ</p>
										</div>
										<div class="col-md-3 details">
											<p><a href="http://localhost:8080/Laravel/blog/public/detail_id={{ $product->id }}">Chi tiết</a><p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="smallpost">
									<div class="img">
										<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRn5sSO0ewN49kIqELIxMHWO53ROlAjsXphDLVgtAjC9VtZbuZ-">
										<p>Xe đạp điện Nijia phanh đĩa – 2015</p>
									</div>
									<div class="row">
										<div class="col-md-9 price">
											<p>9,800,000₫ VNĐ</p>
										</div>
										<div class="col-md-3 details">
											<p><a href="http://localhost:8080/Laravel/blog/public/detail_id={{ $product->id }}">Chi tiết</a><p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="smallpost">
									<div class="img">
										<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRn5sSO0ewN49kIqELIxMHWO53ROlAjsXphDLVgtAjC9VtZbuZ-">
										<p>Xe đạp điện Nijia phanh đĩa – 2015</p>
									</div>
									<div class="row">
										<div class="col-md-9 price">
											<p>9,800,000₫ VNĐ</p>
										</div>
										<div class="col-md-3 details">
											<p><a href="http://localhost:8080/Laravel/blog/public/detail_id={{ $product->id }}">Chi tiết</a><p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="smallpost">
									<div class="img">
										<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRn5sSO0ewN49kIqELIxMHWO53ROlAjsXphDLVgtAjC9VtZbuZ-">
										<p>Xe đạp điện Nijia phanh đĩa – 2015</p>
									</div>
									<div class="row">
										<div class="col-md-9 price">
											<p>9,800,000₫ VNĐ</p>
										</div>
										<div class="col-md-3 details">
											<p><a href="http://localhost:8080/Laravel/blog/public/detail_id={{ $product->id }}">Chi tiết</a><p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="smallpost">
									<div class="img">
										<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRn5sSO0ewN49kIqELIxMHWO53ROlAjsXphDLVgtAjC9VtZbuZ-">
										<p>Xe đạp điện Nijia phanh đĩa – 2015</p>
									</div>
									<div class="row">
										<div class="col-md-9 price">
											<p>9,800,000₫ VNĐ</p>
										</div>
										<div class="col-md-3 details">
											<p><a href="http://localhost:8080/Laravel/blog/public/detail_id={{ $product->id }}">Chi tiết</a><p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="smallpost">
									<div class="img">
										<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRn5sSO0ewN49kIqELIxMHWO53ROlAjsXphDLVgtAjC9VtZbuZ-">
										<p>Xe đạp điện Nijia phanh đĩa – 2015</p>
									</div>
									<div class="row">
										<div class="col-md-9 price">
											<p>9,800,000₫ VNĐ</p>
										</div>
										<div class="col-md-3 details">
											<p><a href="http://localhost:8080/Laravel/blog/public/detail_id={{ $product->id }}">Chi tiết</a><p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="smallpost">
									<div class="img">
										<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRn5sSO0ewN49kIqELIxMHWO53ROlAjsXphDLVgtAjC9VtZbuZ-">
										<p>Xe đạp điện Nijia phanh đĩa – 2015</p>
									</div>
									<div class="row">
										<div class="col-md-9 price">
											<p>9,800,000₫ VNĐ</p>
										</div>
										<div class="col-md-3 details">
											<p><a href="http://localhost:8080/Laravel/blog/public/detail_id={{ $product->id }}">Chi tiết</a><p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="smallpost">
									<div class="img">
										<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRn5sSO0ewN49kIqELIxMHWO53ROlAjsXphDLVgtAjC9VtZbuZ-">
										<p>Xe đạp điện Nijia phanh đĩa – 2015</p>
									</div>
									<div class="row">
										<div class="col-md-9 price">
											<p>9,800,000₫ VNĐ</p>
										</div>
										<div class="col-md-3 details">
											<p><a href="http://localhost:8080/Laravel/blog/public/detail_id={{ $product->id }}">Chi tiết</a><p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="smallpost">
									<div class="img">
										<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRn5sSO0ewN49kIqELIxMHWO53ROlAjsXphDLVgtAjC9VtZbuZ-">
										<p>Xe đạp điện Nijia phanh đĩa – 2015</p>
									</div>
									<div class="row">
										<div class="col-md-9 price">
											<p>9,800,000₫ VNĐ</p>
										</div>
										<div class="col-md-3 details">
											<p><a href="http://localhost:8080/Laravel/blog/public/detail_id={{ $product->id }}">Chi tiết</a><p>
										</div>
									</div>
								</div>
							</div>

							</div>
					</div>
				</div>
			</div>
			<!-- <div class="leftmenu col-md-2">
				<div class="titlemenu">
					<div>DANH MỤC SẢN PHẨM</div>
				</div>
				@foreach ($listproduct as $list)
					<div class="smallmenu">
						<a style="color: black;" href="http://localhost:8080/Laravel/blog/public/name={{ $list->listname }}"><p>Xe đạp điện {{ $list->listname }}</p></a>
					</div>  
				@endforeach
			</div>
			<div class="post col-md-10">
				<div class="titlepost">
					<p>SẢN PHẨM MỚI</p>
				</div>
				<hr>
				<div class="mainpost">
					<div class="row">
						@foreach ($products as $product)
						    <div class="col-md-4">
								<div class="smallpost">
									<div class="img">
										<img src="{{ $product->thumbnail }}">
										<p>{{ $product->title }}</p>
									</div>
									<div class="row">
										<div class="col-md-9 price">
											<p>{{ $product->price }} VNĐ</p>
										</div>
										<div class="col-md-3 details">
											<p><a href="http://localhost:8080/Laravel/blog/public/detail_id={{ $product->id }}">Chi tiết</a><p>
										</div>
									</div>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</div> -->
    </div>
  </div>
</div>
</body>
</html>

