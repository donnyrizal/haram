<!-- Loader -->
<!-- <div id="loader-wrapper">
	<div id="loader">
		<div class="loader-ellips">
			<span class="loader-ellips__dot"></span>
			<span class="loader-ellips__dot"></span>
			<span class="loader-ellips__dot"></span>
			<span class="loader-ellips__dot"></span>
		</div>
	</div>
</div> -->
<!-- /Loader -->
<div class="header">
	<!-- Logo -->
	<div class="header-left">
		<a href="index.php" class="logo">
			<img src="assets/img/logo.png" width="40" height="40" alt="">
		</a>
	</div>
	<!-- /Logo -->
	<a id="toggle_btn" href="javascript:void(0);">
		<span class="bar-icon">
			<span></span>
			<span></span>
			<span></span>
		</span>
	</a>
	<!-- Header Title -->
	<div class="page-title-box">
		<h3>HaRaM</h3>
	</div>
	<!-- /Header Title -->
	<a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>
	<!-- Header Menu -->
	<ul class="nav user-menu">
		<!-- Search -->
		<li class="nav-item">
			<div class="top-nav-search">
				<a href="javascript:void(0);" class="responsive-search">
					<i class="fa fa-search"></i>
				</a>
				<form action="search.php">
					<input class="form-control" type="text" placeholder="Search here">
					<button class="btn" type="submit"><i class="fa fa-search"></i></button>
				</form>
			</div>
		</li>
		<!-- /Search -->
		<li class="nav-item dropdown has-arrow main-drop">
			<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
				<span class="user-img"><img src="uploads/profiles/<?php echo $_SESSION['photo'] ?>" alt="avatar">
					<span class="status online"></span></span>
				<span><?php $app->logged_user(); ?></span>
			</a>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="profile.php">My Profile</a>
				<a class="dropdown-item" href="settings.php">Settings</a>
				<a class="dropdown-item" href="logout.php">Logout</a>
			</div>
		</li>
	</ul>
	<!-- /Header Menu -->
	<!-- Mobile Menu -->
	<div class="dropdown mobile-user-menu">
		<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		<div class="dropdown-menu dropdown-menu-right">
			<a class="dropdown-item" href="profile.php">My Profile</a>
			<a class="dropdown-item" href="settings.php">Settings</a>
			<a class="dropdown-item" href="logout.php">Logout</a>
		</div>
	</div>
	<!-- /Mobile Menu -->
</div>