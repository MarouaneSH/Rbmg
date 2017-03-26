<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="" href="{{asset('css/admin.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('font-awesome-4.7.0/css/font-awesome.min.css')}}">
    @yield('style')
</head>
<body>
     <div class="col-md-2 navigation">
        <ul>
            <li><a href="{{route('general')}}"><i class="fa fa-dashcube" aria-hidden="true"></i>General</a></li>
            <li><a href="{{route('slider')}}"><i class="fa fa-sliders" aria-hidden="true"></i>Slider</a></li>
             <li><a href="{{route('temoignage')}}"><i class="fa fa-comments-o" aria-hidden="true"></i>Temoignages</a></li>
             <li><a href="{{route('evenment')}}"><i class="fa fa-calendar" aria-hidden="true"></i>Evenment</a></li>
             <li><a href="{{route('footer')}}"><i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i>Bas de page</a></li>

        </ul>
     </div>
     <div class="container">
        <div class="col-md-2"></div>
        <div class="col-md-10">
               
                    @yield('content')
              
        </div>
     </div>
     <script src="{{asset('js/jquery-3.2.0.min.js')}}"></script>
     <script>
     $(".exit").click(function(){
         $(this).parent().slideUp();
     })
     </script>
         <script src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
     @yield('script')
</body>
</html>