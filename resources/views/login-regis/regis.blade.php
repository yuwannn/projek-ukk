<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register</title>
	<link rel="stylesheet" href="{{ asset('asset/css/style_regis.css') }}">

	{{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<form action="{{ route('user.regisproses') }}" class="regis-form" method="POST">
			@csrf
			<h1>Registrasi</h1>
			<div class="form-content mt-4 mb-2">
				<div class="form-item">
					<label for="username">Masukan Username</label>
					<input type="text" name="username" id="username" placeholder="Username" required value="{{ old('username') }}">
				</div>
			</div>
			<div class="form-content mb-2">
				<div class="form-item">
					<label for="password">Masukan Password</label>
					<input type="password" name="password" id="password" placeholder="Password" required>
				</div>
			</div>
			<div class="form-content mb-2">
				<div class="form-item">
					<label for="email">Email</label>
					<input type="text" name="email" id="email" placeholder="email" required value="{{ old('email') }}">
				</div>
			</div>
			<div class="form-content mb-2">
				<div class="form-item">
					<label for="namalengkap">Nama Lengkap</label>
					<input type="text" name="namalengkap" id="namalengkap" placeholder="Nama Lengkap" required value="{{ old('namalengkap') }}">
				</div>
			</div>
			<div class="form-content mb-3">
				<div class="form-item">
					<label for="alamat">Alamat</label>
					<input type="text" name="alamat" id="alamat" placeholder="Alamat" required value="{{ old('alamat') }}">
				</div>
			</div>
			<button class="btn btn-outline-primary" type="submit" name="regis">Daftar</button>
			<a class="btn btn-outline-danger" href="{{ route('user.login') }}">Back</a>
			</div>
		</form>
	</div>
	
</body>
</html>