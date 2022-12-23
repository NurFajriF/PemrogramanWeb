@extends('admin.layouts.main')
<style>
    .form-signin {
  max-width: 330px;
  padding: 15px;
}

.form-login .form-floating:focus-within {
  z-index: 2;
}

.form-login input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-login input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

</style>
@section('container')
    <div class="wrap col-lg-6 offset-1 mt-3">
    <h1 class="h3 mb-3 fw-normal text-center">Login Admin</h1>
    <form class="login" action="" method="POST">
        @csrf
        <div class="form-floating">
          <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="floatingInput" placeholder="Username" value="{{ old('username') }}" required>
          <label for="floatingInput">Username</label>
        </div>
        <div class="form-floating">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="Email" value="{{ old('email') }}" required>
          <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control @error('username') is-invalid @enderror" id="floatingPassword" placeholder="Password" required>
          <label for="floatingPassword">Password</label>
          @error('password')
			<div class="invalid-feedback">
				{{ $message }}
			</div>
		  @enderror
        </div>
        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit" name="submit">Log in</button>
      </form>
    </div>
@endsection