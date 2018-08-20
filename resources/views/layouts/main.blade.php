<!DOCTYPE html>
<html lang="en">
<head>
    <title>Comprehensive Community Based Rehabilitation in Tanzania ~ Queue Management System</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Virtualization">
    <meta name="author" content="David Nyangi">
    <meta name="keywords" content="TIF">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="icon" type="image/png" href="{{asset('images/icons/favicon.ico') }}"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link type="text/css" href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor1/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor1/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor1/css-hamburgers/hamburgers.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor1/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css') }}">
</head>

<body id="page">
        <ul class="cb-slideshow">
            <li><span></span><div><h3> ~ Comprehensive Community Based Rehabilitation in Tanzania ~</h3></div></li>
            <li><span></span><div><h3> ~ Comprehensive Community Based Rehabilitation in Tanzania ~</h3></div></li>
            <li><span></span><div><h3> ~ Comprehensive Community Based Rehabilitation in Tanzania ~</h3></div></li>
            <li><span></span><div><h3> ~ Comprehensive Community Based Rehabilitation in Tanzania ~</h3></div></li>
            <li><span></span><div><h3> ~ Comprehensive Community Based Rehabilitation in Tanzania ~</h3></div></li>
            <li><span></span><div><h3> ~ Comprehensive Community Based Rehabilitation in Tanzania ~</h3></div></li>
        </ul>
        <header>
        </header>
            @yield('contents')
  <script src="{{asset('vendor1/jquery/jquery-3.2.1.min.js') }}"></script>
  <script src="{{asset('vendor1/bootstrap/js/popper.js') }}"></script>
  <script src="{{asset('vendor1/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{asset('vendor1/select2/select2.min.js') }}"></script>
  <script src="{{asset('vendor1/tilt/tilt.jquery.min.js') }}"></script>
  <script>
    $('.js-tilt').tilt({
      scale: 1.1
    })
  </script>
  <script src="js/main.js"></script>
<script type="text/javascript">
$(document).ready(function(){

   $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      } 
  });
  $(function(){ 
      $('#email').keyup(function() {
        removeError();
      });
      $('#password').keyup(function() {
        removeError();
      });
  });
  function removeError(){
      var div = ".isa_error";
      $(div).slideUp('slow','swing');
  }
   function loader(v){
      if(v=='on'){
            $('#loader').show();
          }else{
            $('#loginform').css({
              opacity:1
            });
            $('#loader').hide();
        }
      }
   $('#loginbtn').on('click',function(e){
    e.preventDefault();
           var loginform = $('#loginform').serializeArray();
        var url = $('#loginform').attr('action');
        loader('on');
        if(($('#email').val()=='') || ($('#password').val()=='')){
          loader('off');
            $('.isa_error').text('Fields CAN NOT be EMPTY!')
            $('.isa_error').slideDown("slow");
        }else{
          $.ajax({
                type: 'post',
                url : url,
                data: loginform,
                success:function(response){
                  loader('off');
                  window.location.href = response.redirect
                 },error:function(response){
                  loader('off');
                      $('.isa_error').text(response.responseJSON.error)

                      $('.isa_error').slideDown("slow");
                }
            });
        }
        
      });
});
 </script>      

</body>

</html>