﻿<?php
	require_once 'includes/library.php';
	session_start();
	$app = new AppLib();
	$is_login = $app->is_user();
	if (!$is_login) {
		header('location:login.php');
	}
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<meta name="description" content="Smarthr - Bootstrap Admin Template">
	<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
	<meta name="author" content="Dreamguys - Bootstrap Admin Template">
	<meta name="robots" content="noindex, nofollow">
	<title>Inbox - HRMS admin template</title>
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<!-- Lineawesome CSS -->
	<link rel="stylesheet" href="assets/css/line-awesome.min.css">
	<!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
</head>

<body>
	<!-- Main Wrapper -->
	<div class="main-wrapper">
		<!-- Header -->
		<?php 
		include_once 'includes/header.php';
		// <!-- /Header -->
		// <!-- Sidebar -->
		include_once 'includes/sidebar.php';
		// <!-- /Sidebar -->
		?>
		<!-- Page Wrapper -->
		<div class="page-wrapper">
			<!-- Page Content -->
			<div class="content container-fluid">
				<!-- Page Header -->
				<div class="page-header">
					<div class="row align-items-center">
						<div class="col">
							<h3 class="page-title">Inbox</h3>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
								<li class="breadcrumb-item active">Inbox</li>
							</ul>
						</div>
						<div class="col-auto float-right ml-auto">
							<a href="compose.php" class="btn add-btn"><i class="fa fa-plus"></i> Compose</a>
						</div>
					</div>
				</div>
				<!-- /Page Header -->
				<div class="row">
					<div class="col-md-12">
						<div class="card mb-0">
							<div class="card-body">
								<div class="email-header">
									<div class="row">
										<div class="col top-action-left">
											<div class="float-left">
												<div class="btn-group dropdown-action">
													<button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown">Select <i class="fa fa-angle-down "></i></button>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="#">All</a>
														<a class="dropdown-item" href="#">None</a>
														<div class="dropdown-divider"></div>
														<a class="dropdown-item" href="#">Read</a>
														<a class="dropdown-item" href="#">Unread</a>
													</div>
												</div>
												<div class="btn-group dropdown-action">
													<button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown">Actions <i class="fa fa-angle-down "></i></button>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="#">Reply</a>
														<a class="dropdown-item" href="#">Forward</a>
														<a class="dropdown-item" href="#">Archive</a>
														<div class="dropdown-divider"></div>
														<a class="dropdown-item" href="#">Mark As Read</a>
														<a class="dropdown-item" href="#">Mark As Unread</a>
														<div class="dropdown-divider"></div>
														<a class="dropdown-item" href="#">Delete</a>
													</div>
												</div>
												<div class="btn-group dropdown-action">
													<button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown"><i class="fa fa-folder"></i> <i class="fa fa-angle-down"></i></button>
													<div role="menu" class="dropdown-menu">
														<a class="dropdown-item" href="#">Social</a>
														<a class="dropdown-item" href="#">Forums</a>
														<a class="dropdown-item" href="#">Updates</a>
														<div class="dropdown-divider"></div>
														<a class="dropdown-item" href="#">Spam</a>
														<a class="dropdown-item" href="#">Trash</a>
														<div class="dropdown-divider"></div>
														<a class="dropdown-item" href="#">New</a>
													</div>
												</div>
												<div class="btn-group dropdown-action">
													<button type="button" data-toggle="dropdown" class="btn btn-white dropdown-toggle"><i class="fa fa-tags"></i> <i class="fa fa-angle-down"></i></button>
													<div role="menu" class="dropdown-menu">
														<a class="dropdown-item" href="#">Work</a>
														<a class="dropdown-item" href="#">Family</a>
														<a class="dropdown-item" href="#">Social</a>
														<div class="dropdown-divider"></div>
														<a class="dropdown-item" href="#">Primary</a>
														<a class="dropdown-item" href="#">Promotions</a>
														<a class="dropdown-item" href="#">Forums</a>
													</div>
												</div>
											</div>
											<div class="float-left d-none d-sm-block">
												<input type="text" placeholder="Search Messages" class="form-control search-message">
											</div>
										</div>
										<div class="col-auto top-action-right">
											<div class="text-right">
												<button type="button" title="Refresh" data-toggle="tooltip" class="btn btn-white d-none d-md-inline-block"><i class="fa fa-refresh"></i></button>
												<div class="btn-group">
													<a class="btn btn-white"><i class="fa fa-angle-left"></i></a>
													<a class="btn btn-white"><i class="fa fa-angle-right"></i></a>
												</div>
											</div>
											<div class="text-right">
												<span class="text-muted d-none d-md-inline-block">Showing 10 of 112 </span>
											</div>
										</div>
									</div>
								</div>
								<div class="email-content">
									<div class="table-responsive">
										<table class="table table-inbox table-hover">
											<thead>
												<tr>
													<th colspan="6">
														<input type="checkbox" class="checkbox-all">
													</th>
												</tr>
											</thead>
											<tbody>
												<tr class="unread clickable-row" data-href="mail-view.php">
													<td>
														<input type="checkbox" class="checkmail">
													</td>
													<td><span class="mail-important"><i class="fa fa-star starred"></i></span></td>
													<td class="name">John Doe</td>
													<td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
													<td><i class="fa fa-paperclip"></i></td>
													<td class="mail-date">13:14</td>
												</tr>
												<tr class="unread clickable-row" data-href="mail-view.php">
													<td>
														<input type="checkbox" class="checkmail">
													</td>
													<td><span class="mail-important"><i class="fa fa-star-o"></i></span></td>
													<td class="name">Envato Account</td>
													<td class="subject">Important account security update from Envato</td>
													<td></td>
													<td class="mail-date">8:42</td>
												</tr>
												<tr class="clickable-row" data-href="mail-view.php">
													<td>
														<input type="checkbox" class="checkmail">
													</td>
													<td><span class="mail-important"><i class="fa fa-star-o"></i></span></td>
													<td class="name">Twitter</td>
													<td class="subject">HRMS Bootstrap Admin Template</td>
													<td></td>
													<td class="mail-date">30 Nov</td>
												</tr>
												<tr class="unread clickable-row" data-href="mail-view.php">
													<td>
														<input type="checkbox" class="checkmail">
													</td>
													<td><span class="mail-important"><i class="fa fa-star-o"></i></span></td>
													<td class="name">Richard Parker</td>
													<td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
													<td></td>
													<td class="mail-date">18 Sep</td>
												</tr>
												<tr class="clickable-row" data-href="mail-view.php">
													<td>
														<input type="checkbox" class="checkmail">
													</td>
													<td><span class="mail-important"><i class="fa fa-star-o"></i></span></td>
													<td class="name">John Smith</td>
													<td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
													<td></td>
													<td class="mail-date">21 Aug</td>
												</tr>
												<tr class="clickable-row" data-href="mail-view.php">
													<td>
														<input type="checkbox" class="checkmail">
													</td>
													<td><span class="mail-important"><i class="fa fa-star-o"></i></span></td>
													<td class="name">me, Robert Smith (3)</td>
													<td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
													<td></td>
													<td class="mail-date">1 Aug</td>
												</tr>
												<tr class="unread clickable-row" data-href="mail-view.php">
													<td>
														<input type="checkbox" class="checkmail">
													</td>
													<td><span class="mail-important"><i class="fa fa-star-o"></i></span></td>
													<td class="name">Codecanyon</td>
													<td class="subject">Welcome To Codecanyon</td>
													<td></td>
													<td class="mail-date">Jul 13</td>
												</tr>
												<tr class="clickable-row" data-href="mail-view.php">
													<td>
														<input type="checkbox" class="checkmail">
													</td>
													<td><span class="mail-important"><i class="fa fa-star-o"></i></span></td>
													<td class="name">Richard Miles</td>
													<td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
													<td><i class="fa fa-paperclip"></i></td>
													<td class="mail-date">May 14</td>
												</tr>
												<tr class="unread clickable-row" data-href="mail-view.php">
													<td>
														<input type="checkbox" class="checkmail">
													</td>
													<td><span class="mail-important"><i class="fa fa-star-o"></i></span></td>
													<td class="name">John Smith</td>
													<td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
													<td></td>
													<td class="mail-date">11/11/16</td>
												</tr>
												<tr class="clickable-row" data-href="mail-view.php">
													<td>
														<input type="checkbox" class="checkmail">
													</td>
													<td><span class="mail-important"><i class="fa fa-star starred"></i></span></td>
													<td class="name">Mike Litorus</td>
													<td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
													<td></td>
													<td class="mail-date">10/31/16</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Page Content -->
		</div>
		<!-- /Page Wrapper -->
	</div>
	<!-- /Main Wrapper -->
	<!-- jQuery -->
	<script src="assets/js/jquery-3.2.1.min.js"></script>
	<!-- Bootstrap Core JS -->
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- Slimscroll JS -->
	<script src="assets/js/jquery.slimscroll.min.js"></script>
	<!-- Custom JS -->
	<script src="assets/js/app.js"></script>
</body>
</html>