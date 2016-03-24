<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>GPS Tracker</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="{!! asset('css/materialize.css') !!}" type="text/css" rel="stylesheet" media="screen,projection"/>
   <link href="{!! asset('css/style2.min.css') !!}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{!! asset('css/style.css') !!}" type="text/css" rel="stylesheet" media="screen,projection"/>

   <link href="{!! asset('css/mainStyle.css') !!}" type="text/css" rel="stylesheet" media="screen,projection"/>
   <link href="{!! asset('css/jquery.dataTables.css') !!}" type="text/css" rel="stylesheet" media="screen,projection"/>
   <link href="{!! asset('css/buttons.dataTables.css') !!}" type="text/css" rel="stylesheet" media="screen,projection"/>

    <script src="{!! asset('js/jquery-1.12.0.min.js') !!}"></script>
    <script src="{!! asset('js/jquery.dataTables.js') !!}"></script>
    
  @if(Session::has('adminId'))
  <nav class=" white lighten-5">
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo"><img src="{!! asset('img/title.png') !!}" width="50%" height="30%" style="margin-top: 10px;"></a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="{!! url('admin') !!}" class="green-text text-darken-4">Admin</a></li>
          <li><a href="{!! url('client') !!}" class="green-text text-darken-4">Client</a></li>
          <li><a href="{!! url('monitor') !!}" class="green-text text-darken-4"><i class="material-icons left green-text text-darken-4">find_in_page</i>Monitor</a></li>
          <li><a href="{!! url('statistics') !!}" class="green-text text-darken-4"><i class="material-icons left green-text text-darken-4">assessment</i>Statistics</a></li>
          <li><a href="{!! url('product') !!}" class="green-text text-darken-4"><i class="material-icons left green-text text-darken-4">shopping_cart</i>Product</a></li>
          <li><a href="{!! url('product') !!}" class="white-text btn green darken-3">Log out</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
          <li class="active"><a href="{{ URL::to('monitor') }}" class="green-text text-darken-5 waves-effect waves-light">Monitor</a></li>
          <li><a href="{{ URL::to('statistics') }}" class="green-text text-darken-5">Statistics</a></li>
          <li><a href="{!! url('product') !!}" class="green-text text-darken-5">Product</a></li>
        </ul>
      </div>
    </nav>
  @endif

</head>

<body class="green darken-3">
  <div class="wrapper">
     @yield('body')
     
 
  <footer class="page-footer green darken-3">
  <img src="{!! asset('img/bg.png') !!}" width="100%" style="margin-left: 0; margin-right: 0;">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="green-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>
   </div>


   
   <script src="{!! asset('js/materialize.js') !!}"></script>
   <script src="{!! asset('js/init.js') !!}"></script>

   <script src="{!! asset('js/dataTables.buttons.js') !!}"></script>
   <script src="{!! asset('js/buttons.html5.min.js') !!}"></script>

   <script src="{!! asset('js/jszip.min.js') !!}"></script>
   <script src="{!! asset('js/pdfmake.min.js') !!}"></script>
   <script src="{!! asset('js/vfs_fonts.js') !!}"></script>

   <script type="text/javascript">
     $(document).ready(function(){
         // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
         $('.modal-trigger').leanModal();
       });
           
   </script>

   <script type="text/javascript">
     $(document).ready(function() {
       $('select').material_select();
     });
            
   </script>
</body>

  
</html>
