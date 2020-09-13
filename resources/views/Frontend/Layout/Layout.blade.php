<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>WebApp</title>
<!--Own Css-->
{{-- <link rel="stylesheet" href="{{Asset('css/Bootstrap/index.css')}}"/> --}}
        
<link rel="stylesheet" href="{{Asset('css/Bootstrap/animate.css')}}">
<link rel="icon" type="image/png" href="Icon/images.png" sizes="32x32" />
<link rel="stylesheet" href="{{Asset('css/Bootstrap/css/bootstrap.min.css')}}"/>
	<!-- jQuery library -->
<script src="{{Asset('css/Bootstrap/jquery-3.2.1.js')}}"></script>
	<!-- Latest compiled JavaScript -->
<script src="{{Asset('css/Bootstrap/js/bootstrap.min.js')}}"></script>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>

</head>
<style>

a{
   text-decoration: none;
}
a:hover{
   text-decoration: none;
}

.card-ancher-tag{
  width:250px;
  height:250px;
  text-decoration: none;
 
}
.main-card{
  /* position:reletive; */
  /* padding: 40px; */
  background-color: #ffee10;
  margin-top: 40px;
  width:100%;
  /* height:90%; */
    border: 1px solid black;
}
.cardbody img{
  width:80%;
  height: 120px;
   position:reletive;
}
.cardfooter p{
  
  color:black;
  
}
 
  ul li a:hover:before{
    transform:scale(1.1);
    box-shadow:0 0 30px #ffee34;
 }

 ul li a:hover{
    color:#ffee10;
    box-shadow:0 0 30px #ffee10;
}

body{
	background-color:#f7faff;}
 .navbar {
  min-height: 80px;
}

.navbar-brand {
  padding: 0 0px;
  margin-top:-37px;
  
}


.navbar-toggle {
  margin-top: 23px;
  padding: 9px 10px !important;
}

@media (min-width: 768px) {
  .navbar-nav > li > a {
    padding-top: 26.5px;
    padding-bottom: 26.5px;
    line-height: 27px;
  }
  }
</style>

















<body> 

@include('Frontend.Layout.Partials.Navbar')
@yield('Contant')


<!-- // Page Loader Script Start //-->
{{-- <script>
var overlay = document.getElementById("loader-wrapper");

window.addEventListener('load', function(){
  overlay.style.display = 'none';
})
</script> --}}
<!-- // Page Loader Script End // -->
<script src="{{Asset('css/Bootstrap/wow.min.js')}}"></script>
              {{-- <script>
              new WOW().init();
              </script> --}}
  
</body>
</html>