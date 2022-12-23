@extends('layouts.main')

@section('container')
    <div class="section-top-border mt-5 ">
      <h3 class="section_title text-center title_color">Form Registration</h3>
	  
      <center>
        <form action="/register" method="post">
                  @csrf
					<div class="field input-group-icon mt-10">
						<div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div>
						<input type="text" name="name" id="name" placeholder="Full Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'"  class="single-input @error('name') is-invalid @enderror " required value="{{ old('name') }}">
						@error('name')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
						@enderror
					</div>
					<div class="field input-group-icon mt-10">
						<div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div>
						<input type="text" name="username" id="username" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'"  class="single-input @error('username') is-invalid @enderror " required value="{{ old('username') }}">
						@error('username')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
						@enderror
					</div>
					<div class="field input-group-icon mt-10">
						<div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
						<input type="email" name="email" id="email" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'"  class="single-input @error('email') is-invalid @enderror " required value="{{ old('email') }}">
						@error('email')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
						@enderror
					</div>
                  	<div class="field input-group-icon mt-10">
						<div class="icon"><i class="fa fa-lock" aria-hidden="true"></i></div>
						<input type="password" name="password" id="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'"  class="single-input @error('password') is-invalid @enderror " required >
						{{-- @error('password')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
						@enderror --}}
					</div>
                    <div class="field input-group-icon mt-10">
                    	<div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
						<input type="number" name="phone" id="phone" placeholder="Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'"  class="single-input @error('phone') is-invalid @enderror " required value="{{ old('phone') }}">
						@error('phone')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
						@enderror
					</div>
					<div class="field input-group-icon mt-10">
                    	<div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
						<input type="text" name="address" placeholder="Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'"  class="single-input @error('address') is-invalid @enderror " required value="{{ old('address') }}">
						@error('address')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
						@enderror
					</div>
                    <button type="submit" name="submit" class="genric-btn success circle mt-3 mb-2">Register</button>
			</form>
            <p>Already have account? <span><a href="/login">Login here</a></span></p>
        </center>
    </div>
@endSection