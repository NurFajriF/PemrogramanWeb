@extends('layouts.main')

@section('container')
    <div class="section-top-border mt-5 ">
      <h3 class="section_title text-center title_color">Form Login</h3>
	  <center>
		{{-- flash message if registration success --}}
	  @if(session()->has('success'))
	  <div class="alert alert-success alert-dismissible fade-show" role="alert">
		{{ session('success') }}
		<button type="button" class="btn-close" data-bs-miss="alert" aria-label="Close"></button>
	  </div>
	  @endif

	  {{-- flash message if login failed --}}
	  @if(session()->has('loginError'))
	  <div class="alert alert-danger alert-dismissible fade-show" role="alert">
		{{ session('loginError') }}
		<button type="button" class="btn-close" data-bs-miss="alert" aria-label="Close"></button>
	  </div>
	  @endif
        <form action="/login" method="post" enctype="multipart/form-data">
                @csrf
				<div class="field input-group-icon mt-10">
					<div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div>
					<input type="text" name="username" id="username" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'" class="single-input @error('username') is-invalid @enderror" required value="{{ old('username') }}" autofocus>
				</div>
				<div class="field input-group-icon mt-10">
					<div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
					<input type="email" name="email" id="email" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" class="single-input @error('email') is-invalid @enderror" required value="{{ old('email') }}">
				</div>
                <div class="field input-group-icon mt-10">
					<div class="icon"><i class="fa fa-lock" aria-hidden="true"></i></div>
					<input type="password" name="password" id="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" class="single-input " required>
					@error('password')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
					@enderror
				</div>
                <button type="submit" name="submit" class="genric-btn success circle mt-3 mb-2" >Login</button>
			</form>
            <p>Not yet a member? <span><a href="/register">Register here</a></span></p>
        </center>
    </div>
@endSection