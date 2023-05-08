<!DOCTYPE html>
<html>

<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

	<?php


	echo $this->fetch('meta');
	echo $this->fetch('css');
	//echo $this->fetch('script');
	//echo $this->Html->script('main.js');
	?>
		<?php
	 		echo $this->Html->css('personalizated'); 
		?>
	<link rel="stylesheet" type="text/css" href="<?php echo $this->webroot; ?>bootstrap/css/bootstrap.min.css" />


	<!-- Favicons -->
	<!-- <link href="assets/img/favicon.png" rel="icon">
	<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

	<!-- Google Fonts -->
	<link href="https://fonts.gstatic.com" rel="preconnect">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="<?php echo $this->webroot; ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo $this->webroot; ?>vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="<?php echo $this->webroot; ?>vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="<?php echo $this->webroot; ?>vendor/quill/quill.snow.css" rel="stylesheet">
	<link href="<?php echo $this->webroot; ?>vendor/quill/quill.bubble.css" rel="stylesheet">
	<link href="<?php echo $this->webroot; ?>vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="<?php echo $this->webroot; ?>vendor/simple-datatables/style.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<?php
	 echo $this->Html->css('style'); 
	?>



</head>

<body>
	<!-- ======= Header ======= -->
	<header id="header" class="header fixed-top d-flex align-items-center">

		<div class="d-flex align-items-center justify-content-between">
			<a href="/" class="logo d-flex align-items-center">
				<span class="d-none d-lg-block">AdmSystem</span>
			</a>
			<i class="bi bi-list toggle-sidebar-btn"></i>
		</div>
	</header>
	<!-- End Header -->




	<!-- ======= Sidebar ======= -->
	<aside id="sidebar" class="sidebar">

		<ul class="sidebar-nav" id="sidebar-nav">

			<li class="nav-item">
				<a class="nav-link " href="/">
					<i class="bi bi-grid"></i>
					<span>Dashboard</span>
				</a>
			</li>

			<li class="nav-item">
				<a class="nav-link collapsed" data-bs-target="#p" data-bs-toggle="collapse" href="#">
					<i class=" ri-group-line"></i><span>Prestadores</span><i class="bi bi-chevron-down ms-auto"></i>
				</a>
				<ul id="p" class="nav-content collapse " data-bs-parent="#sidebar-nav">
					<li>
						<a href="/prestadors/index">
							<i class="bi bi-circle"></i><span>Listar/Editar</span>
						</a>
					</li>
					<li>
						<a href="/prestadors/add">
							<i class="bi bi-circle"></i><span>Inserir Novo</span>
						</a>
					</li>
					
				</ul>
			</li>



			<li class="nav-item">
				<a class="nav-link collapsed" data-bs-target="#c" data-bs-toggle="collapse" href="#">
					<i class=" ri-account-box-line"></i><span>Clientes</span><i class="bi bi-chevron-down ms-auto"></i>
				</a>
				<ul id="c" class="nav-content collapse " data-bs-parent="#sidebar-nav">
					<li>
						<a href="/clientes/index">
							<i class="bi bi-circle"></i><span>Listar/Editar</span>
						</a>
					</li>
					<li>
						<a href="/clientes/add">
							<i class="bi bi-circle"></i><span>Inserir Novo</span>
						</a>
					</li>
					
				</ul>
			</li>



			<li class="nav-item">
				<a class="nav-link collapsed" data-bs-target="#s" data-bs-toggle="collapse" href="#">
					<i class=" ri-contacts-book-line"></i><span>Serviços</span><i class="bi bi-chevron-down ms-auto"></i>
				</a>
				<ul id="s" class="nav-content collapse " data-bs-parent="#sidebar-nav">
					<li>
						<a href="/servicos/index">
							<i class="bi bi-circle"></i><span>Listar/Editar</span>
						</a>
					</li>
					<li>
						<a href="/servicos/add">
							<i class="bi bi-circle"></i><span>Inserir Novo</span>
						</a>
					</li>
					
				</ul>
			</li>


			<li class="nav-item">
				<a class="nav-link collapsed" data-bs-target="#config" data-bs-toggle="collapse" href="#">
					<i class="ri-settings-5-line"></i><span>Configurações</span><i class="bi bi-chevron-down ms-auto"></i>
				</a>
				<ul id="config" class="nav-content collapse " data-bs-parent="#sidebar-nav">
					<li>
						<a href="/tiposervicos/index">
							<i class="bi bi-circle"></i><span>Tipo de Serviços</span>
						</a>
					</li>
					
				</ul>
			</li>



			



	</aside>




	<main id="main" class="main">
		
			<?php echo $this->Flash->render(); ?>
	

			<?php echo $this->fetch('content'); ?>
		
	</main>



	
	<script src="<?php echo $this->webroot; ?>vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?php echo $this->webroot; ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo $this->webroot; ?>vendor/chart.js/chart.umd.js"></script>
  <script src="<?php echo $this->webroot; ?>vendor/echarts/echarts.min.js"></script>
  <script src="<?php echo $this->webroot; ?>vendor/quill/quill.min.js"></script>
  <script src="<?php echo $this->webroot; ?>vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?php echo $this->webroot; ?>vendor/tinymce/tinymce.min.js"></script>
  <script src="<?php echo $this->webroot; ?>vendor/php-email-form/validate.js"></script>
  <script src="<?php echo $this->webroot; ?>js/main.js"></script>

</body>

</html>