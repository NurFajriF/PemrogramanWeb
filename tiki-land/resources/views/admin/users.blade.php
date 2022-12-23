@extends('admin.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Users List</h1>
    </div>
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade-show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-miss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if(session()->has('failedd'))
    <div class="alert alert-danger alert-dismissible fade-show" role="alert">
      {{ session('failed') }}
      <button type="button" class="btn-close" data-bs-miss="alert" aria-label="Close"></button>
    </div>
    @endif
    <a href="/admin/users/create" class="btn btn-success  mb-5'"><i class="fa fa-plus" aria-hidden="true"></i> Add New User</a>
    <div class="table-responsive">
        <table class="table table-striped table-sm" id="users_table">
            <thead>
                <th>No</th>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Created_at</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->address }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td><a href="/admin/users/update" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a> 
                        <a href="/admin/users/delete" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    
    <script type="text/javascript">
        $(document).ready(function(){
            $("#users_table").DataTable({
                responsive: true,
            });
        });
    </script>
@endsection

