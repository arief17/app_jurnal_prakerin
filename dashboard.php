<!DOCTYPE html>
<html>
<head>
	<title>Dashboard Aplikasi Prakerin</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-sm-3 bg-info" style="height: 630px">

				<ul class="nav flex-column mt-5">
				  <li class="nav-item">
				    <a class="nav-link active text-white fw-bold" aria-current="page" href="dashboard.php?page=dashboard">Dashboard</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link text-white fw-bold" href="dashboard.php?page=datasiswa">Data Siswa</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link text-white fw-bold" href="dashboard.php?page=inputkeg">Input Kegiatan</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link text-white fw-bold" href="dashboard.php?page=nilaiprak">Nilai Prakerin</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link text-white fw-bold" href="dashboard.php?page=monitoring">Monitoring</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link text-white fw-bold" href="dashboard.php?page=validasikeg">Validasi Kegiatan</a>
				  </li>
				</ul>

			</div>

			<div class="col-sm-9 mb-3">
				<!-- content -->
				<?php
					if (isset($_GET['page'])) {
						$page = $_GET['page'];

						switch ($page) {
							case 'dashboard':
								include "page/dashboard_home.php";
								break;
							case 'datasiswa':
								include "page/datasiswa.php";
								break;
							case 'inputkeg':
								include "page/inputkeg.php";
								break;
							case 'nilaiprak':
								include "page/nilaiprak.php";
								break;
							case 'monitoring':
								include "page/monitoring.php";
								break;
							case 'validasikeg':
								include "page/validasikeg.php";
								break;


							default:
								echo "<center><h3>Maaf Halaman Tidak ditemukan</h3></center>";
								break;
						}
					}else{
						include "page/dashboard_home.php";
					}
				?>
			</div>

		</div>
	</div>




	<!-- cara buat komen CTRL + / -->

	<!-- JQUERY DAN JS -->
	<script type="text/javascript" src="assets/js/jquery-3.6.0.min"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

</body>
</html>




