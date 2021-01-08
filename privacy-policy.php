﻿<?php
require_once 'includes/library.php';
session_start();
$app = new AppLib();
$is_login = $app->is_user();
if (!$is_login) {
	header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<meta name="description" content="Smarthr - Bootstrap Admin Template">
	<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
	<meta name="author" content="Dreamguys - Bootstrap Admin Template">
	<meta name="robots" content="noindex, nofollow">
	<title>Privacy Policy - HaRaM</title>
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<!-- Lineawesome CSS -->
	<link rel="stylesheet" href="assets/css/line-awesome.min.css">
	<!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/style.css" id="theme-link">
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
		// <!-- Header -->
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
					<div class="row">
						<div class="col-sm-12">
							<h3 class="page-title">Privacy Policy</h3>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
								<li class="breadcrumb-item active">Privacy Policy</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /Page Header -->
				<div class="row">
					<div class="col-sm-12">
						<p>HaRaM. ("we." "our." or "us") is committed to protecting your privacy. This Privacy Policy explains how your personal information is collected. used, and disclosed by HaRaM. This Privacy Policy applies to our website. haram.com . and its associated subdomains (collectively. our "Service). By accessing or using our Service. you signify that you have read. understood, and agree to our collection. storage, use. and disclosure of your personal information as described in this Privacy Policy and our Terms of Service.</p>
						<h3>Definitions and key terms </h3>
						<p>For this Privacy Policy: </p>
						<p>• Cookie: small amount of data generated by a website and saved by your web browser. It is used to identify your browser provide analytics. remember information about you such as your language preference or login information. </p>
						<p>• Company: when this policy mentions tompany."we:' "us.' or "our,' it refers to HaRaM. 66 Devic Stanic. Unhalal District that is responsible for your information under this Privacy Policy. </p>
						<p>• Country: where HaRaM or the owners/founders of HaRaM are based. in this case is Indonesia. </p>
						<p>• Customer refers to the company. organization or person that signs up to use the HaRaM Service to manage the relationships with your consumers or service users. </p>
						<p>• Device: any internet connected device such as a phone. tablet, computer or any other device that can be used to visit HaRaM and use the services. </p>
						<p>• IP address: Every device connected to the Internet is assigned a number known as an Internet protocol (IP) address. These numbers are usually assigned in geographic blocks. An IP address can often be used to identify the location from which a device is connecting to the Internet. </p>
						<p>• Personnel: refers to those individuals who are employed by HaRaM or are under contract to perform a service on behalf of one of the parties. </p>
						<p>• Personal Data: any information that directly. indirectly. or in connection with other information — including a personal identification number—allows for the identification or identifiability of a natural person. </p>
						<p>• Service: refers to the service provided by HaRaM as described in the relative terms (if available) and on this platform. </p>
						<p>• Third-party service: refers to advertisers. contest sponsors. promotional and marketing partners, and others who provide our content or whose products or services we think may interest you. </p>
						<p>• Website: HaRaM's site. which can be accessed via this URL: haram.com. </p>
						<p>• You: a person or entity that is registered with HaRaM to use the Services. </p>
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