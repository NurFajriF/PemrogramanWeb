@extends('admin.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Reservation Chart</h1>
    
    </div>

    disini nanti chart

    <div class="table-responsive">
        <table class="table table-striped table-sm" id="admins_table">
        </table>
    </div>
    
    
    <script type="text/javascript">
        $(document).ready(function(){
            $("#admins_table").DataTable();
        });
    </script>
@endsection

