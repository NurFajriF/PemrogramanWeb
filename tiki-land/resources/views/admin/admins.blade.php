@php
    $admin =  Auth::user()
@endphp
@extends('admin.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Admin List</h1>
    
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-sm" id="admins_table">
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
                @foreach ($admins as $admin)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $admin->name }}</td>
                    <td>{{ $admin->username }}</td>
                    <td>{{ $admin->email }}</td>
                    <td>{{ $admin->phone }}</td>
                    <td>{{ $admin->address }}</td>
                    <td>{{ $admin->created_at }}</td>
                    <td><a href="/users/update" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a> 
                        <a href="/users/delete" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    
    <script type="text/javascript">
        $(document).ready(function(){
            $("#admins_table").DataTable({
                responsive: true,
            });
        });
    </script>
@endsection

