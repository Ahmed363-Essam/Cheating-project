<?php

require('../code/connect.php');

$sel2 = $con->prepare("SELECT * FROM `exam`");
$sel2->execute();

$Exams = $sel2->fetchAll();

?>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {


	if (isset($_POST["delete"])) {

		try {
			// Prepare the delete statement
			$delete = $con->prepare("DELETE FROM `exam` WHERE `id` = :id");

			// Bind the section ID parameter
			$delete->bindParam(':id', $_POST["section_id"]);

			// Execute the delete statement
			if ($delete->execute()) {
				header('Location: ShowSection.php');
			}
		} catch (\Exception $e) {
			//throw $th;

			echo $e->getMessage();
		}
	}
}



?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
	<meta name="Author" content="Spruko Technologies Private Limited">
	<meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4" />

	<!-- Title -->
	<title> Valex - Premium dashboard ui bootstrap rwd admin html5 template </title>

	<!-- Favicon -->
	<link rel="icon" href="assets/img/brand/favicon.png" type="image/x-icon" />

	<!-- Icons css -->
	<link href="assets/css/icons.css" rel="stylesheet">

	<!-- Internal Data table css -->
	<link href="assets/plugins/datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
	<link href="assets/plugins/datatable/css/buttons.bootstrap4.min.css" rel="stylesheet">
	<link href="assets/plugins/datatable/css/responsive.bootstrap4.min.css" rel="stylesheet" />
	<link href="assets/plugins/datatable/css/jquery.dataTables.min.css" rel="stylesheet">
	<link href="assets/plugins/datatable/css/responsive.dataTables.min.css" rel="stylesheet">
	<link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet">

	<!--  Right-sidemenu css -->
	<link href="assets/plugins/sidebar/sidebar.css" rel="stylesheet">

	<!--  Custom Scroll bar-->
	<link href="assets/plugins/mscrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" />

	<!--  Left-Sidebar css -->
	<link rel="stylesheet" href="assets/css/sidemenu.css">

	<!--- Style css --->
	<link href="assets/css/style.css" rel="stylesheet">

	<!--- Dark-mode css --->
	<link href="assets/css/style-dark.css" rel="stylesheet">

	<!---Skinmodes css-->
	<link href="assets/css/skin-modes.css" rel="stylesheet" />

	<!--- Animations css-->
	<link href="assets/css/animate.css" rel="stylesheet">

</head>

<body class="main-body app sidebar-mini">

	<!-- Loader -->
	<div id="global-loader">
		<img src="assets/img/loader.svg" class="loader-img" alt="Loader">
	</div>
	<!-- /Loader -->

	<!-- Page -->
	<div class="page">

		<!-- main-sidebar -->
		<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
		<aside class="app-sidebar sidebar-scroll">
			<div class="main-sidebar-header active">
				<a class="desktop-logo logo-light active" href="index.html"><img src="assets/img/brand/logo.png" class="main-logo" alt="logo"></a>
				<a class="desktop-logo logo-dark active" href="index.html"><img src="assets/img/brand/logo-white.png" class="main-logo dark-theme" alt="logo"></a>
				<a class="logo-icon mobile-logo icon-light active" href="index.html"><img src="assets/img/brand/favicon.png" class="logo-icon" alt="logo"></a>
				<a class="logo-icon mobile-logo icon-dark active" href="index.html"><img src="assets/img/brand/favicon-white.png" class="logo-icon dark-theme" alt="logo"></a>
			</div>
			<div class="main-sidemenu">
				<div class="app-sidebar__user clearfix">
					<div class="dropdown user-pro-body">
						<div class="">
							<img alt="user-img" class="avatar avatar-xl brround" src="assets/img/faces/6.jpg"><span class="avatar-status profile-status bg-green"></span>
						</div>
						<div class="user-info">
							<h4 class="font-weight-semibold mt-3 mb-0">Petey Cruiser</h4>
							<span class="mb-0 text-muted">Premium Member</span>
						</div>
					</div>
				</div>
				<ul class="side-menu">


					<?php include('./latouts/sidebar.php') ?>

				</ul>
			</div>
		</aside>
		<!-- main-sidebar -->

		<!-- main-content -->
		<div class="main-content app-content">

			<!-- main-header -->
			<div class="main-header sticky side-header nav nav-item">
				<div class="container-fluid">
					<div class="main-header-left ">
						<div class="responsive-logo">
							<a href="index.html"><img src="assets/img/brand/logo.png" class="logo-1" alt="logo"></a>
							<a href="index.html"><img src="assets/img/brand/logo-white.png" class="dark-logo-1" alt="logo"></a>
							<a href="index.html"><img src="assets/img/brand/favicon.png" class="logo-2" alt="logo"></a>
							<a href="index.html"><img src="assets/img/brand/favicon.png" class="dark-logo-2" alt="logo"></a>
						</div>
						<div class="app-sidebar__toggle" data-toggle="sidebar">
							<a class="open-toggle" href="#"><i class="header-icon fe fe-align-left"></i></a>
							<a class="close-toggle" href="#"><i class="header-icons fe fe-x"></i></a>
						</div>
						<div class="main-header-center ml-3 d-sm-none d-md-none d-lg-block">
							<input class="form-control" placeholder="Search for anything..." type="search"> <button class="btn"><i class="fas fa-search d-none d-md-block"></i></button>
						</div>
					</div>

				</div>
			</div>
			<!-- /main-header -->

			<!-- container -->
			<div class="container-fluid">

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Tables</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Data Tables</span>
						</div>
					</div>
					<div class="d-flex my-xl-auto right-content">

					</div>
				</div>
				<!-- breadcrumb -->

				<!-- row opened -->
				<div class="row row-sm">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-header pb-0">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mg-b-0">Section Table</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table text-md-nowrap example1" id="example1">
										<thead>
											<tr>
												<th class="wd-15p border-bottom-0">Doctor Name</th>
												<th class="wd-15p border-bottom-0">Doctor Subject</th>
												<th class="wd-20p border-bottom-0">Doctor Email</th>
												<th class="wd-15p border-bottom-0">Section Name</th>
												<th class="wd-10p border-bottom-0">Exam Name</th>
												<th class="wd-10p border-bottom-0">Actions</th>
											</tr>
										</thead>
										<tbody>
											<?php
											foreach ($Exams as $Exam) {
											?>
												<tr>
													<td><?php echo $Exam["doctor_name"]; ?></td>
													<td><?php echo $Exam["doctor_subject"]; ?></td>
													<td><?php echo $Exam["doctor_email"]; ?> </td>
													<td><?php echo $Exam["section_name"]; ?></td>
													<td><?php echo $Exam["exam_name"]; ?></td>



													<td>
														<div class="dropdown">
															<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-primary btn-sm" data-toggle="dropdown" type="button"><i class="si si-options"></i></button>


															<div class="dropdown-menu tx-13">

																<a class="dropdown-item text-danger delete btn ripple btn-danger" data-target="#modaldemo<?= $Exam["id"] ?>" data-toggle="modal" href=""><i class="text-danger fas fa-trash-alt"></i>&nbsp;&nbsp;Delete
																	Section</a>
																<a class="dropdown-item text-info info btn ripple btn-info" href="Upload.php?id=<?= $Exam["id"] ?>"><i class="text-info typcn typcn-arrow-back-outline"></i>&nbsp;&nbsp; Upload Report </a>


																<a class="dropdown-item text-success delete btn ripple btn-success" href="attendenceReport.php?id=<?= $Exam["id"] ?>"><i class="text-success far fa-bookmark"></i>&nbsp;&nbsp;Attendence Report</a>
																<a class="dropdown-item text-danger delete btn ripple btn-danger" href="cheatingReport.php?id=<?= $Exam["id"] ?>"><i class="typcn typcn-arrow-back-outline"></i>&nbsp;&nbsp;Cheating Report</a>

															</div>
														</div>
													</td>


												</tr>
												<div class="modal" id="modaldemo<?= $Exam["id"] ?>">
													<div class="modal-dialog modal-dialog-centered" role="document">
														<div class="modal-content tx-size-sm">
															<div class="modal-body tx-center pd-y-20 pd-x-20">
																<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button> <i class="icon icon ion-ios-close-circle-outline tx-100 tx-danger lh-1 mg-t-20 d-inline-block"></i>
																<h4 class="tx-danger mg-b-20">Are You Sure You Want To Delete Your Section ?</h4>


																<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">

																	<div class="row">
																		<input type="hidden" name="section_id" value="<?= $Exam["id"] ?>">
																		<div class="col-lg-12 mb-10">
																			<div class="form-group">
																				<div class="form-group has-success mg-b-0" style="text-align: left">
																					<label for="exampleInputEmail1">Section Title</label>

																					<input class="form-control" placeholder="Type Your Section Name" type="text" name="title" value="<?= $Exam["section_name"] ?>" id="title" readonly>
																				</div>
																			</div>
																		</div>
																	</div>
																	<br>
																	<button class="btn ripple btn-danger pd-x-25" type="submit" name="delete">Submit</button>
																</form>
															</div>
														</div>
													</div>
												</div>


											<?php
											}

											?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!--/div-->

					<!--div-->

					<!--/div-->


				</div>
				<!-- /row -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->

		<!-- Sidebar-right-->
		<div class="sidebar sidebar-right sidebar-animate">
			<div class="panel panel-primary card mb-0 box-shadow">
				<div class="tab-menu-heading border-0 p-3">
					<div class="card-title mb-0">Notifications</div>
					<div class="card-options ml-auto">
						<a href="#" class="sidebar-remove"><i class="fe fe-x"></i></a>
					</div>
				</div>
				<div class="panel-body tabs-menu-body latest-tasks p-0 border-0">
					<div class="tabs-menu ">
						<!-- Tabs -->
						<ul class="nav panel-tabs">
							<li class=""><a href="#side1" class="active" data-toggle="tab"><i class="ion ion-md-chatboxes tx-18 mr-2"></i> Chat</a></li>
							<li><a href="#side2" data-toggle="tab"><i class="ion ion-md-notifications tx-18  mr-2"></i> Notifications</a></li>
							<li><a href="#side3" data-toggle="tab"><i class="ion ion-md-contacts tx-18 mr-2"></i> Friends</a></li>
						</ul>
					</div>
					<div class="tab-content">
						<div class="tab-pane active " id="side1">
							<div class="list d-flex align-items-center border-bottom p-3">
								<div class="">
									<span class="avatar bg-primary brround avatar-md">CH</span>
								</div>
								<a class="wrapper w-100 ml-3" href="#">
									<p class="mb-0 d-flex ">
										<b>New Websites is Created</b>
									</p>
									<div class="d-flex justify-content-between align-items-center">
										<div class="d-flex align-items-center">
											<i class="mdi mdi-clock text-muted mr-1"></i>
											<small class="text-muted ml-auto">30 mins ago</small>
											<p class="mb-0"></p>
										</div>
									</div>
								</a>
							</div>
							<div class="list d-flex align-items-center border-bottom p-3">
								<div class="">
									<span class="avatar bg-danger brround avatar-md">N</span>
								</div>
								<a class="wrapper w-100 ml-3" href="#">
									<p class="mb-0 d-flex ">
										<b>Prepare For the Next Project</b>
									</p>
									<div class="d-flex justify-content-between align-items-center">
										<div class="d-flex align-items-center">
											<i class="mdi mdi-clock text-muted mr-1"></i>
											<small class="text-muted ml-auto">2 hours ago</small>
											<p class="mb-0"></p>
										</div>
									</div>
								</a>
							</div>
							<div class="list d-flex align-items-center border-bottom p-3">
								<div class="">
									<span class="avatar bg-info brround avatar-md">S</span>
								</div>
								<a class="wrapper w-100 ml-3" href="#">
									<p class="mb-0 d-flex ">
										<b>Decide the live Discussion</b>
									</p>
									<div class="d-flex justify-content-between align-items-center">
										<div class="d-flex align-items-center">
											<i class="mdi mdi-clock text-muted mr-1"></i>
											<small class="text-muted ml-auto">3 hours ago</small>
											<p class="mb-0"></p>
										</div>
									</div>
								</a>
							</div>
							<div class="list d-flex align-items-center border-bottom p-3">
								<div class="">
									<span class="avatar bg-warning brround avatar-md">K</span>
								</div>
								<a class="wrapper w-100 ml-3" href="#">
									<p class="mb-0 d-flex ">
										<b>Meeting at 3:00 pm</b>
									</p>
									<div class="d-flex justify-content-between align-items-center">
										<div class="d-flex align-items-center">
											<i class="mdi mdi-clock text-muted mr-1"></i>
											<small class="text-muted ml-auto">4 hours ago</small>
											<p class="mb-0"></p>
										</div>
									</div>
								</a>
							</div>
							<div class="list d-flex align-items-center border-bottom p-3">
								<div class="">
									<span class="avatar bg-success brround avatar-md">R</span>
								</div>
								<a class="wrapper w-100 ml-3" href="#">
									<p class="mb-0 d-flex ">
										<b>Prepare for Presentation</b>
									</p>
									<div class="d-flex justify-content-between align-items-center">
										<div class="d-flex align-items-center">
											<i class="mdi mdi-clock text-muted mr-1"></i>
											<small class="text-muted ml-auto">1 days ago</small>
											<p class="mb-0"></p>
										</div>
									</div>
								</a>
							</div>
							<div class="list d-flex align-items-center border-bottom p-3">
								<div class="">
									<span class="avatar bg-pink brround avatar-md">MS</span>
								</div>
								<a class="wrapper w-100 ml-3" href="#">
									<p class="mb-0 d-flex ">
										<b>Prepare for Presentation</b>
									</p>
									<div class="d-flex justify-content-between align-items-center">
										<div class="d-flex align-items-center">
											<i class="mdi mdi-clock text-muted mr-1"></i>
											<small class="text-muted ml-auto">1 days ago</small>
											<p class="mb-0"></p>
										</div>
									</div>
								</a>
							</div>
							<div class="list d-flex align-items-center border-bottom p-3">
								<div class="">
									<span class="avatar bg-purple brround avatar-md">L</span>
								</div>
								<a class="wrapper w-100 ml-3" href="#">
									<p class="mb-0 d-flex ">
										<b>Prepare for Presentation</b>
									</p>
									<div class="d-flex justify-content-between align-items-center">
										<div class="d-flex align-items-center">
											<i class="mdi mdi-clock text-muted mr-1"></i>
											<small class="text-muted ml-auto">45 mintues ago</small>
											<p class="mb-0"></p>
										</div>
									</div>
								</a>
							</div>
							<div class="list d-flex align-items-center p-3">
								<div class="">
									<span class="avatar bg-blue brround avatar-md">U</span>
								</div>
								<a class="wrapper w-100 ml-3" href="#">
									<p class="mb-0 d-flex ">
										<b>Prepare for Presentation</b>
									</p>
									<div class="d-flex justify-content-between align-items-center">
										<div class="d-flex align-items-center">
											<i class="mdi mdi-clock text-muted mr-1"></i>
											<small class="text-muted ml-auto">2 days ago</small>
											<p class="mb-0"></p>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="tab-pane  " id="side2">
							<div class="list-group list-group-flush ">
								<div class="list-group-item d-flex  align-items-center">
									<div class="mr-3">
										<span class="avatar avatar-lg brround cover-image" data-image-src="assets/img/faces/12.jpg"><span class="avatar-status bg-success"></span></span>
									</div>
									<div>
										<strong>Madeleine</strong> Hey! there I' am available....
										<div class="small text-muted">
											3 hours ago
										</div>
									</div>
								</div>
								<div class="list-group-item d-flex  align-items-center">
									<div class="mr-3">
										<span class="avatar avatar-lg brround cover-image" data-image-src="assets/img/faces/1.jpg"></span>
									</div>
									<div>
										<strong>Anthony</strong> New product Launching...
										<div class="small text-muted">
											5 hour ago
										</div>
									</div>
								</div>
								<div class="list-group-item d-flex  align-items-center">
									<div class="mr-3">
										<span class="avatar avatar-lg brround cover-image" data-image-src="assets/img/faces/2.jpg"><span class="avatar-status bg-success"></span></span>
									</div>
									<div>
										<strong>Olivia</strong> New Schedule Realease......
										<div class="small text-muted">
											45 mintues ago
										</div>
									</div>
								</div>
								<div class="list-group-item d-flex  align-items-center">
									<div class="mr-3">
										<span class="avatar avatar-lg brround cover-image" data-image-src="assets/img/faces/8.jpg"><span class="avatar-status bg-success"></span></span>
									</div>
									<div>
										<strong>Madeleine</strong> Hey! there I' am available....
										<div class="small text-muted">
											3 hours ago
										</div>
									</div>
								</div>
								<div class="list-group-item d-flex  align-items-center">
									<div class="mr-3">
										<span class="avatar avatar-lg brround cover-image" data-image-src="assets/img/faces/11.jpg"></span>
									</div>
									<div>
										<strong>Anthony</strong> New product Launching...
										<div class="small text-muted">
											5 hour ago
										</div>
									</div>
								</div>
								<div class="list-group-item d-flex  align-items-center">
									<div class="mr-3">
										<span class="avatar avatar-lg brround cover-image" data-image-src="assets/img/faces/6.jpg"><span class="avatar-status bg-success"></span></span>
									</div>
									<div>
										<strong>Olivia</strong> New Schedule Realease......
										<div class="small text-muted">
											45 mintues ago
										</div>
									</div>
								</div>
								<div class="list-group-item d-flex  align-items-center">
									<div class="mr-3">
										<span class="avatar avatar-lg brround cover-image" data-image-src="assets/img/faces/9.jpg"><span class="avatar-status bg-success"></span></span>
									</div>
									<div>
										<strong>Olivia</strong> Hey! there I' am available....
										<div class="small text-muted">
											12 mintues ago
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane  " id="side3">
							<div class="list-group list-group-flush ">
								<div class="list-group-item d-flex  align-items-center">
									<div class="mr-2">
										<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/9.jpg"><span class="avatar-status bg-success"></span></span>
									</div>
									<div class="">
										<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Mozelle Belt</div>
									</div>
									<div class="ml-auto">
										<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
									</div>
								</div>
								<div class="list-group-item d-flex  align-items-center">
									<div class="mr-2">
										<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/11.jpg"></span>
									</div>
									<div class="">
										<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Florinda Carasco</div>
									</div>
									<div class="ml-auto">
										<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
									</div>
								</div>
								<div class="list-group-item d-flex  align-items-center">
									<div class="mr-2">
										<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/10.jpg"><span class="avatar-status bg-success"></span></span>
									</div>
									<div class="">
										<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Alina Bernier</div>
									</div>
									<div class="ml-auto">
										<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
									</div>
								</div>
								<div class="list-group-item d-flex  align-items-center">
									<div class="mr-2">
										<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/2.jpg"><span class="avatar-status bg-success"></span></span>
									</div>
									<div class="">
										<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Zula Mclaughin</div>
									</div>
									<div class="ml-auto">
										<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
									</div>
								</div>
								<div class="list-group-item d-flex  align-items-center">
									<div class="mr-2">
										<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/13.jpg"></span>
									</div>
									<div class="">
										<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Isidro Heide</div>
									</div>
									<div class="ml-auto">
										<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
									</div>
								</div>
								<div class="list-group-item d-flex  align-items-center">
									<div class="mr-2">
										<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/12.jpg"><span class="avatar-status bg-success"></span></span>
									</div>
									<div class="">
										<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Mozelle Belt</div>
									</div>
									<div class="ml-auto">
										<a href="#" class="btn btn-sm btn-light"><i class="fab fa-facebook-messenger"></i></a>
									</div>
								</div>
								<div class="list-group-item d-flex  align-items-center">
									<div class="mr-2">
										<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/4.jpg"></span>
									</div>
									<div class="">
										<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Florinda Carasco</div>
									</div>
									<div class="ml-auto">
										<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
									</div>
								</div>
								<div class="list-group-item d-flex  align-items-center">
									<div class="mr-2">
										<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/7.jpg"></span>
									</div>
									<div class="">
										<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Alina Bernier</div>
									</div>
									<div class="ml-auto">
										<a href="#" class="btn btn-sm btn-light"><i class="fab fa-facebook-messenger"></i></a>
									</div>
								</div>
								<div class="list-group-item d-flex  align-items-center">
									<div class="mr-2">
										<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/2.jpg"></span>
									</div>
									<div class="">
										<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Zula Mclaughin</div>
									</div>
									<div class="ml-auto">
										<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
									</div>
								</div>
								<div class="list-group-item d-flex  align-items-center">
									<div class="mr-2">
										<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/14.jpg"><span class="avatar-status bg-success"></span></span>
									</div>
									<div class="">
										<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Isidro Heide</div>
									</div>
									<div class="ml-auto">
										<a href="#" class="btn btn-sm btn-light"><i class="fab fa-facebook-messenger"></i></a>
									</div>
								</div>
								<div class="list-group-item d-flex  align-items-center">
									<div class="mr-2">
										<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/11.jpg"></span>
									</div>
									<div class="">
										<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Florinda Carasco</div>
									</div>
									<div class="ml-auto">
										<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
									</div>
								</div>
								<div class="list-group-item d-flex  align-items-center">
									<div class="mr-2">
										<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/9.jpg"></span>
									</div>
									<div class="">
										<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Alina Bernier</div>
									</div>
									<div class="ml-auto">
										<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
									</div>
								</div>
								<div class="list-group-item d-flex  align-items-center">
									<div class="mr-2">
										<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/15.jpg"><span class="avatar-status bg-success"></span></span>
									</div>
									<div class="">
										<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Zula Mclaughin</div>
									</div>
									<div class="ml-auto">
										<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
									</div>
								</div>
								<div class="list-group-item d-flex  align-items-center">
									<div class="mr-2">
										<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/4.jpg"></span>
									</div>
									<div class="">
										<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Isidro Heide</div>
									</div>
									<div class="ml-auto">
										<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/Sidebar-right-->

		<!-- Message Modal -->
		<div class="modal fade" id="chatmodel" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-right chatbox" role="document">
				<div class="modal-content chat border-0">
					<div class="card overflow-hidden mb-0 border-0">
						<!-- action-header -->
						<div class="action-header clearfix">
							<div class="float-left hidden-xs d-flex ml-2">
								<div class="img_cont mr-3">
									<img src="assets/img/faces/6.jpg" class="rounded-circle user_img" alt="img">
								</div>
								<div class="align-items-center mt-2">
									<h4 class="text-white mb-0 font-weight-semibold">Daneil Scott</h4>
									<span class="dot-label bg-success"></span><span class="mr-3 text-white">online</span>
								</div>
							</div>
							<ul class="ah-actions actions align-items-center">
								<li class="call-icon">
									<a href="" class="d-done d-md-block phone-button" data-toggle="modal" data-target="#audiomodal">
										<i class="si si-phone"></i>
									</a>
								</li>
								<li class="video-icon">
									<a href="" class="d-done d-md-block phone-button" data-toggle="modal" data-target="#videomodal">
										<i class="si si-camrecorder"></i>
									</a>
								</li>
								<li class="dropdown">
									<a href="" data-toggle="dropdown" aria-expanded="true">
										<i class="si si-options-vertical"></i>
									</a>
									<ul class="dropdown-menu dropdown-menu-right">
										<li><i class="fa fa-user-circle"></i> View profile</li>
										<li><i class="fa fa-users"></i>Add friends</li>
										<li><i class="fa fa-plus"></i> Add to group</li>
										<li><i class="fa fa-ban"></i> Block</li>
									</ul>
								</li>
								<li>
									<a href="" class="" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true"><i class="si si-close text-white"></i></span>
									</a>
								</li>
							</ul>
						</div>
						<!-- action-header end -->

						<!-- msg_card_body -->

						<!-- msg_card_body end -->
						<!-- card-footer -->
						<div class="card-footer">
							<div class="msb-reply d-flex">
								<div class="input-group">
									<input type="text" class="form-control " placeholder="Typing....">
									<div class="input-group-append ">
										<button type="button" class="btn btn-primary ">
											<i class="far fa-paper-plane" aria-hidden="true"></i>
										</button>
									</div>
								</div>
							</div>
						</div><!-- card-footer end -->
					</div>
				</div>
			</div>
		</div>

		<!--Video Modal -->
		<div id="videomodal" class="modal fade">
			<div class="modal-dialog" role="document">
				<div class="modal-content bg-dark border-0 text-white">
					<div class="modal-body mx-auto text-center p-7">
						<h5>Valex Video call</h5>
						<img src="assets/img/faces/6.jpg" class="rounded-circle user-img-circle h-8 w-8 mt-4 mb-3" alt="img">
						<h4 class="mb-1 font-weight-semibold">Daneil Scott</h4>
						<h6>Calling...</h6>
						<div class="mt-5">
							<div class="row">
								<div class="col-4">
									<a class="icon icon-shape rounded-circle mb-0 mr-3" href="#">
										<i class="fas fa-video-slash"></i>
									</a>
								</div>
								<div class="col-4">
									<a class="icon icon-shape rounded-circle text-white mb-0 mr-3" href="#" data-dismiss="modal" aria-label="Close">
										<i class="fas fa-phone bg-danger text-white"></i>
									</a>
								</div>
								<div class="col-4">
									<a class="icon icon-shape rounded-circle mb-0 mr-3" href="#">
										<i class="fas fa-microphone-slash"></i>
									</a>
								</div>
							</div>
						</div>
					</div><!-- modal-body -->
				</div>
			</div><!-- modal-dialog -->
		</div><!-- modal -->

		<!-- Audio Modal -->
		<div id="audiomodal" class="modal fade">
			<div class="modal-dialog" role="document">
				<div class="modal-content border-0">
					<div class="modal-body mx-auto text-center p-7">
						<h5>Valex Voice call</h5>
						<img src="assets/img/faces/6.jpg" class="rounded-circle user-img-circle h-8 w-8 mt-4 mb-3" alt="img">
						<h4 class="mb-1  font-weight-semibold">Daneil Scott</h4>
						<h6>Calling...</h6>
						<div class="mt-5">
							<div class="row">
								<div class="col-4">
									<a class="icon icon-shape rounded-circle mb-0 mr-3" href="#">
										<i class="fas fa-volume-up bg-light"></i>
									</a>
								</div>
								<div class="col-4">
									<a class="icon icon-shape rounded-circle text-white mb-0 mr-3" href="#" data-dismiss="modal" aria-label="Close">
										<i class="fas fa-phone text-white bg-success"></i>
									</a>
								</div>
								<div class="col-4">
									<a class="icon icon-shape  rounded-circle mb-0 mr-3" href="#">
										<i class="fas fa-microphone-slash bg-light"></i>
									</a>
								</div>
							</div>
						</div>
					</div><!-- modal-body -->
				</div>
			</div><!-- modal-dialog -->
		</div><!-- modal -->

		<!-- Footer opened -->
		<div class="main-footer ht-40">
			<div class="container-fluid pd-t-0-f ht-100p">
				<span>Copyright © 2020 <a href="#">Valex</a>. Designed by <a href="https://www.spruko.com/">Spruko</a> All rights reserved.</span>
			</div>
		</div>
		<!-- Footer closed -->

	</div>
	<!-- End Page -->

	<!-- Back-to-top -->
	<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

	<!-- JQuery min js -->
	<script src="assets/plugins/jquery/jquery.min.js"></script>

	<!-- Bootstrap Bundle js -->
	<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Ionicons js -->
	<script src="assets/plugins/ionicons/ionicons.js"></script>

	<!-- Moment js -->
	<script src="assets/plugins/moment/moment.js"></script>

	<!-- P-scroll js -->
	<script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/p-scroll.js"></script>

	<!-- Internal Data tables -->
	<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script src="assets/plugins/datatable/js/dataTables.dataTables.min.js"></script>
	<script src="assets/plugins/datatable/js/dataTables.responsive.min.js"></script>
	<script src="assets/plugins/datatable/js/responsive.dataTables.min.js"></script>
	<script src="assets/plugins/datatable/js/jquery.dataTables.js"></script>
	<script src="assets/plugins/datatable/js/dataTables.bootstrap4.js"></script>
	<script src="assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
	<script src="assets/plugins/datatable/js/buttons.bootstrap4.min.js"></script>
	<script src="assets/plugins/datatable/js/jszip.min.js"></script>
	<script src="assets/plugins/datatable/js/pdfmake.min.js"></script>
	<script src="assets/plugins/datatable/js/vfs_fonts.js"></script>
	<script src="assets/plugins/datatable/js/buttons.html5.min.js"></script>
	<script src="assets/plugins/datatable/js/buttons.print.min.js"></script>
	<script src="assets/plugins/datatable/js/buttons.colVis.min.js"></script>
	<script src="assets/plugins/datatable/js/dataTables.responsive.min.js"></script>
	<script src="assets/plugins/datatable/js/responsive.bootstrap4.min.js"></script>

	<!--Internal  Datatable js -->
	<script src="assets/js/table-data.js"></script>

	<!-- Rating js-->
	<script src="assets/plugins/rating/jquery.rating-stars.js"></script>
	<script src="assets/plugins/rating/jquery.barrating.js"></script>

	<!-- Custom Scroll bar Js-->
	<script src="assets/plugins/mscrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

	<!-- Sidebar js -->
	<script src="assets/plugins/side-menu/sidemenu.js"></script>

	<!-- Right-sidebar js -->
	<script src="assets/plugins/sidebar/sidebar.js"></script>
	<script src="assets/plugins/sidebar/sidebar-custom.js"></script>

	<!-- Sticky js -->
	<script src="assets/js/sticky.js"></script>

	<!-- eva-icons js -->
	<script src="assets/js/eva-icons.min.js"></script>

	<!-- custom js -->
	<script src="assets/js/custom.js"></script>

</body>

</html>