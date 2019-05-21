<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-widht, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="tambah.css" rel="stylesheet" type="text/css" >
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container-fluid bg">
		<div class="row">
			<div class="col-md-3 col-sm-12 col-xs-12"--></div>
			<div class="col-md-6 col-sm-12 col-xs-12">
				<!--form start-->
				<form class="form-container" action="regis.php" method="post">
					<h1>TAMBAH ANGGOTA</h1>

					<div class="form-group">
						<label for="exampleInputEmail1">Username</label>
						<input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Enter Username" name="username">
				  	</div>

				  	<div class="form-group">
				    	<label for="exampleInputPassword1">Password</label>
				    	<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
				  	</div>

				  	<div class="form-group">
				  		<label>Pilih Jabatan</label>
				  		<select class="custom-select" name="jabatan">
				  			<option selected>Pilih Jabatan</option>
				  			<option value="1">Mahasiswa</option>
				  			<option value="2">Staff</option>
				  			<option value="3">Dosen</option>
				  			<option value="3">Admin</option>
						</select>
				  	</div>

				  	<div class="form-group">
				  		<label for="start">Start date:</label>
				  		<input type="date" id="start" name="tanggal" value="2018-07-22" min="1999-01-01" max="2018-12-31">
				  	</div>
				  	<button type="submit" class="btn btn-success btn-block">Tambah</button>
				</form>
				<!--form end-->
			</div>
			<div class="col-md-3 col-sm-12 col-xs-12"></div>
		</div>
	</div>
</body>
</html>