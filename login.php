<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Jurnal Prakerin</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body class="bg-info">

	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<!-- form login -->
			<div class="card p-3" style="margin-top: 80px">
				<div class="h-login text-center">
					<h5>Form Login</h5>
					<h3>Aplikasi Jurnal Prakerin</h3>
					<hr class="col-md-5 mx-auto mb-5">
				</div>
				<form action="cek_login.php" method="POST">
				  <div class="mb-3">
				    <label class="form-label">Username</label>
				    <input type="text" class="form-control" required="required" name="username">
				  </div>
				  <div class="mb-3">
				    <label class="form-label">Password</label>
				    <input type="password" class="form-control" required="required" name="password">
				  </div>
				  <button type="submit" class="btn btn-primary col-md-12">Login</button>
				</form>

				<div class="f-login text-center mt-5">
					Login With <br>
					<small>Google</small> | <small>Facebook</small>
				</div>
			</div>

		</div>
		<div class="col-md-4"></div>
	</div>

</body>
</html>


