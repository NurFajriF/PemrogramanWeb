@php
    $user = Auth::user()
@endphp
@extends('layouts.main')
<link rel="stylesheet" href="/css/account.css">

@section('container')
    {{-- flash message if reservation success --}}
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade-show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-miss="alert" aria-label="Close"></button>
    </div>
    @endif
    
    {{-- flash message if reservation failed --}}
	  @if(session()->has('error'))
	  <div class="alert alert-danger alert-dismissible fade-show" role="alert">
		{{ session('error') }}
		<button type="button" class="btn-close" data-bs-miss="alert" aria-label="Close"></button>
	  </div>
	  @endif
    <div class="main-content">
        <div class="container mt-7 bg-white mb-5">
          <!-- Table -->
          <div class="row">
            <div class="col-xl-8 m-auto order-xl-1">
              <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                  <div class="row align-items-center">
                    <div class="col-8">
                      <h3 class="mb-0">Reservation</h3>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <form action="/reservation" method="post">
                    @csrf
                    <h6 class="heading-small text-muted mb-4">User information</h6>
                    <div class="pl-lg-4">
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group focused">
                            <label class="form-control-label" for="input-username">Username</label>
                            <input type="text" id="input-username" class="form-control form-control-alternative" value="{{ $user->username }}">
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-control-label" for="input-email">Email address</label>
                            <input type="email" id="input-email" class="form-control form-control-alternative" value="{{ $user->email }}">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group focused">
                            <label class="form-control-label" for="input-first-name">Full name</label>
                            <input type="text" id="input-first-name" class="form-control form-control-alternative" value="{{ $user->name }}">
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group focused">
                            <label class="form-control-label" for="input-last-name">Phone Number</label>
                            <input type="text" id="input-last-name" class="form-control form-control-alternative" value="{{ $user->phone }}">
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr class="my-4">
                    <!-- Address -->
                    <div class="pl-lg-4">
                      <div class="row">
                        <div class="col-md-12">
                            <div class="form-group focused">
                              <label class="form-control-label" for="roomcategory">Room Category</label>
                              <select name="roomcategory" id="roomcategory">
                              @foreach ($roomcategories as $roomcategory)
                                  <option value="{{ $roomcategory->id }}">{{ $roomcategory->name }}</option>
                              @endforeach
                              </select>
                            </div>
                          <div class="form-group focused">
                            <label class="form-control-label" for="room_num">Room Number</label>
                            <select name="room_id" id="roomcategory" >
                                @foreach ($rooms as $room)
                                    <option value="{{ $room->id }}">{{ $room->room_num }}</option>
                                @endforeach
                                </select>
                          </div>
                          <div class="form-group focused">
                            <label for="" class="form-control-label">Total Price</label>
                            <div class="form-control">${{ $roomcategory->price }}</div>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-info mx-auto">Reserve</button>
                      </div>
                      </div>
                    </div>
                    <hr class="my-4">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <script>
        
      </script>
@endsection