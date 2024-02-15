<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login User</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <div class="col-lg-4 mx-auto mt-4">

		@if (session()->has('loginError'))
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				{{ session('loginError') }}
				<button type="button" class="btn-close" data-bs-dismiss='alert' aria-label="Close"></button>
			</div>
		@endif

		@if (session()->has('LoginError'))
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				{{ session('LoginError') }}
				<button type="button" class="btn-close" data-bs-dismiss='alert' aria-label="Close"></button>
			</div>
		@endif

		<form action="{{ route('user.loginproses') }}" class="login-form" method="post" enctype="multipart/form-data">
			@csrf
			<h1>Login Sir/Sis</h1>
			<div class="form-content">
				<div class="form-item @error('username') is-invalid @enderror"> 
					<label for="username">Masukan username</label>
					<input type="text" name="username" id="username" placeholder="username" required value="{{ old('username') }}">
				</div>
			</div>
			@error ('username')
			<div class="is-invalid">
				{{ $message }}
			</div>
			@enderror
			<div class="form-content mb-3">
				<div class="form-item">
					<label for="password">Masukan Password</label>
					<input type="password" name="password" id="password" placeholder="Password" required>
				</div>
			</div>
            <button class="btn btn-primary" type="submit" name="login">Login</button>
			<a class="btn btn-outline-success" href="{{ route('user.regis') }}">Buat Akun Baru</a>
		</form>
	</div>	
</body>
</html>