@php
    $admin =  Auth::user()
@endphp
@extends('admin.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Room List</h1>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-sm" id="rooms_table">
            <thead>
                <th>No</th>
                <th>Room Category</th>
                <th>Room Number</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($rooms as $room)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $room->roomcategory_id }}</td>
                    <td>{{ $room->room_num }}</td>
                    <td><a href="/admin/rooms/update" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a> 
                        <a href="/admin/rooms/delete" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</a>
                    </td>
                    @endforeach
                </tr>
                </tbody>
        </table>
    </div>
    
    
    <script type="text/javascript">
        $(document).ready(function(){
            $("#rooms_table").DataTable();
        });
    </script>
@endsection

