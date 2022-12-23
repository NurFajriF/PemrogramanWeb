@php
    $admin =  Auth::user()
@endphp
@extends('admin.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Reservation List</h1>
    
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-sm" id="admins_table">
            <thead>
                <th>No</th>
                <th>Atas Nama</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($reservations as $reservation)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $reservation->name }}</td>
                    <td>
                        <a href="#" class="btn btn-info"><i class="fa fa-check">Check</i></a>
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

