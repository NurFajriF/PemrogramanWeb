@php
    $admin =  Auth::user()
@endphp
@extends('admin.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Payment List</h1>
</div>    
<div class="table-responsive">
    <table class="table table-striped table-sm" id="payment_table">
        <thead>
            <th>No</th>
            <th></th>
            <th></th>
            <th></th>
        </thead>
            
        <tbody>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <a href="/admin/print" class="btn btn-info"><i class="fa fa-print" aria-hidden="true"></i>Print</a>
            </td>
        </tbody>
    </table>
</div>


<script type="text/javascript">
    $(document).ready(function(){
        $("#payment_table").DataTable({
            responsive: true,
        });
    });
</script>
@endsection