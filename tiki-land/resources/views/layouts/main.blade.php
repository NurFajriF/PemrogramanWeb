<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Stylesheet & icons --}}
    {{-- icon --}}
    <link rel="icon" href="image/icon.jpg" type="image/x-icon">
    {{--  Bootstrap CSS  --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="css/bootstrap.css"> --}}
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    {{-- Fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/fontawesome.css" integrity="sha512-/Jsoj+nRoCkEHw4HnymLk48dWblqtN+0rW+UMAanfbHZjzgphJipQOEuuOEdZ0IzSEYgK0NXCNda8r+4juGbPg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    
    {{-- Datatables bs5 --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.13.1/datatables.min.css"/>
    {{-- JQuery --}}
    
    
    
    <title>Tiki Land | {{ $title }}</title>
    
</head>
<body>     
        <!-- Page preloader-->
        {{-- <div class="page-loader">
            <div>
                <div class="page-loader-body">
                    <div class="loader">
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="door"></div>
                        <div class="hotel-sign"><span>H</span><span>O</span><span>T</span><span>E</span><span>L</span></div>
                    </div>
                </div>
            </div>
        </div> --}}


@include('partials.navbar')

    <main>
        
            @yield('container')
        
    </main>


@include('partials.footer')

{{-- Jquery --}}
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
{{-- Scripts --}}
{{-- main script --}}
<script src="js/popper.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="js/script.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
<script src="vendors/nice-select/js/jquery.nice-select.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/stellar.js"></script>
<script src="vendors/lightbox/simpleLightbox.min.js"></script>


{{-- Bootstrap JS --}}

{{-- Datatables bs5 --}}
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.13.1/datatables.min.js"></script>

</body>
</html>