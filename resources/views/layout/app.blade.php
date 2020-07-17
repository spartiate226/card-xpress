<!Doctype html>
<html class="h-100">
    <head>
        <title></title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{asset('css/font-awesome/font-awesome.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
<body class="h-100">
   <header>
       <nav class="nav navbar  border-bottom">
           <ul class="">
               <li class="list-unstyled"><a href="">Cards Xpress</a></li>
           </ul>
           <ul class="d-flex">
               
           </ul>
       </nav>
   </header>
   <div class="row m-0 h-100">
       @yield('sidebare')
       <div class="col-md-11 bg-light">
           @yield('contenue')
       </div>
   </div>

<script src="{{asset('js/jquery-3.3.1.js')}}"></script>
   <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>
