<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
		<form action="ceklogin.php" class="login-form" method="post" enctype="multipart/form-data">
			<h1>Login</h1>
			<div class="form-content">
				<div class="form-item">
					<label for="username">Masukan Username</label>
					<input type="text" name="username" id="username" placeholder="Username">
				</div>
			</div>
			<div class="form-content">
				<div class="form-item">
					<label for="pw">Masukan Password</label>
					<input type="password" name="pw" id="pw" placeholder="Password">
				</div>
			</div>
			<button type="submit" name="submit">Login</button>
			<a href="regis.php">Buat Akun Baru</a>
		</form>
	</div>	
</body>
</html>