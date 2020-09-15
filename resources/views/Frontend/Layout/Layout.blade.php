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

  /* template style  */

  
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
  margin-top:-45px;
  
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
	.container{
		margin: 2% auto;
	}
	h3{
		font-size:45px;
		font-weight:bold;
		}
		.carousel-caption{
			color:#FFF;
			position:absolute;
			top:20%;
			left:-20px;
			}
	.img1 img{
		width:100%;}
.logo img{
	margin-top:-20%;}

.fa-border{
	border:1px solid lightgray;
	border-radius:2px;
	box-shadow:2px 2px 6px lightgray;
	padding:15px;
	overflow:hidden;}
	
	
	.main {
    position: relative;
    width: 50%;
}

.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 120px;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%)
}

.main:hover .image {
  opacity: 0.3;
}

.main:hover .middle {
  opacity: 1;
}

.text {
  background-color:#069;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}
.bz-head .col-md-12
{
	
	padding:15px;
}
img
{
	/* border-radius:20px; */
}

/*Page Loader Start*/
#loader-wrapper { 
   position: fixed; top: 0; 
   left: 0; 
   width: 100%;
   height: 100%; 
   z-index: 1000; 
   }
   
#loader { 
 	display: block;
	position: relative;
	left: 50%; 
	top: 50%; 
	width: 150px; 
	height: 150px; 
	margin: -75px 0 0 -75px; 
	border-radius: 50%; 
	border: 3px solid transparent; 
	border-top-color: #3498db; 
	-webkit-animation: spin 2s linear infinite;
   	animation: spin 2s linear infinite; 
	z-index: 1001; 
	}
#loader:before { 
	content: ""; 
	position: absolute; 
	top: 5px; 
	left: 5px; 
	right: 5px; 
	bottom: 5px; 
	border-radius: 50%; 
	border: 3px solid transparent;
   	border-top-color: #e74c3c; 
	-webkit-animation: spin 3s linear infinite;
   animation: spin 3s linear infinite; 
   }
#loader:after { 
	content: ""; 
	position: absolute; 
	top: 15px; 
	left: 15px; 
	right: 15px; 
	bottom: 15px; 
	border-radius: 50%; 
	border: 3px solid transparent;
	border-top-color: #f9c922; 
	-webkit-animation: spin 1.5s linear infinite; 
	animation: spin 1.5s linear infinite; 
	 }

@-webkit-keyframes spin {
	0%   { 
		-webkit-transform: rotate(0deg);
		transform: rotate(0deg);  
	}
	100% {
		-webkit-transform: rotate(360deg);
		transform: rotate(360deg);  
	}
}
@keyframes spin {
	0%   { 
		-webkit-transform: rotate(0deg); 
		transform: rotate(0deg);  
	}
	100% {
		-webkit-transform: rotate(360deg);  
		transform: rotate(360deg); 
	}
}

#loader-wrapper .loader-section { 
	position: fixed; 
	top: 0; 
	width: 51%; 
	height: 100%; 
	background: #222222; 
	z-index: 1000; 
	-webkit-transform: translateX(0); 
	transform: translateX(0);
}

#loader-wrapper .loader-section.section-left {
	left: 0;
}

#loader-wrapper .loader-section.section-right {
	right: 0;
}

/* Loaded */
.loaded #loader-wrapper .loader-section.section-left {
	-webkit-transform: translateX(-100%); 
	transform: translateX(-100%);    
	transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1.000);
}

.loaded #loader-wrapper .loader-section.section-right {
	-webkit-transform: translateX(100%); 
	transform: translateX(100%);    
	transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1.000);
}

.loaded #loader {
	opacity: 0;  
	transition: all 0.3s ease-out;
}
.loaded #loader-wrapper {
	visibility: hidden;

	-webkit-transform: translateY(-100%); 
	transform: translateY(-100%);  
	transition: all 0.3s 1s ease-out;
}

/* JavaScript Turned Off */
.no-js #loader-wrapper {
	display: none;
}
/*Page Loader End*/





/*=================================
||			10. Contact With Us
==================================*/
.contact
{
	/* background-image:url(new%20img/slider/4.jpg); no-repeat; */
    background-position: center center;
    background-size: cover;
}
.contact-content
{

    background-color: rgba(255, 255, 255, 0.85);
}
.address
{
	line-height: 26px;
}
.address a
{
	color: #221e2d;
}
ul.social-icons
{
	padding: 0;
	margin-top: 30px;
	float: left;
}
ul.social-icons li
{
    display:inline-block;
    margin:5px;
    font-size:35px;
}
ul.social-icons i
{
    color: rgb(230, 77, 105);
    display:block;
    width: 50px;
    height: 50px;
    padding: 9px;
    border: 1px solid rgba(230, 77, 105, .5);
}
ul.social-icons i:hover
{
    border: 1px solid transparent;
}
ul.social-icons li a
{
    display:block;
    text-decoration: none;
}
.footer-logo h1
{
    color: white;
}
.social-icons ul li a 
{
	color: white;
	border-color: white;
}
.facebook a:hover i
{
	transition: all .4s;
    color:#fff;
    background-color:#3B5998;
}
.twitter a:hover i
{
	transition: all .4s;
    color:#fff;
    background-color: #2A80BA;
}
.linkedin a:hover i
{
	transition: all .4s;
    color:#fff;
    background-color:#007bb6;
}
.googleplus a:hover i
{
	transition: all .4s;
    color:#fff;
    background-color:#dd4b39;
}
.github a:hover i
{
	transition: all .4s;
    color:#fff;
    background-color: #444;
}
.custom-form-control
{
	border-radius: 0px;
	padding: 20px 15px;
}
.custom-form-group
{
	padding: 0px 8px;
}
.submit-button
{
	margin-right: 8px;
	border-radius: 0px;
	padding: 12px 20px;
	background: #e64d69;
	border: 1px solid #e64d69;
}
.submit-button:hover
{
	background: #000;
	border: 1px solid #000;
	color: #fff;
	transition: all .6s;
}
.form-control:focus

{
  border-color: #e64e4e;
  outline: 0;
  box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(230, 78, 78,.6);
}
.required {
    color:#e9266d;
}
#success, #error {
    display:none;
}
#success span, #erro span {
    display:block;
    position:absolute;
    top:0;
    width:100%;
}
#success span p, #error span p {
    margin-top:6em;
}
#success span p {
  color:#9bd32d;
}
#error span p {
  color:#c0392b;
}
.top{
    display: none;
    background: #e64d69;
    color: #fff;
    padding: 5px 10px;
    font-size: 22px;
    position: fixed;
    bottom: 45px;
    right: 35px;
}
.show-top{
    display: block;
    z-index: 99;
    transition: all .8s;
}
.top:hover{
    background: rgb(58, 36, 52);
    color: #fff;
}
footer
{
	padding: 20px 0px;
}
footer a
{
	color: #e64e4e;
}
}

.btn-showmore a{
  float: right;
  
}

.colom6{
  width: 50%;
align-items: center;
/* background-color: #000; */

}
.colums{
  text-align: center;

  
}
.colom6 h2{
color: #007bb6;
width: auto;
}

.colom6 h2 span{
color: rgb(177, 174, 33);
font-size: 20px;
bold
}

.single-contant{
  /* background-color: #007bb6 */
}

</style>

















<body> 

@include('Frontend.Layout.Partials.Navbar')
@yield('Contant')

@include('Frontend.Layout.Partials.Footer')
<!-- // Page Loader Script Start //-->
{{-- <script>
var overlay = document.getElementById("loader-wrapper");

window.addEventListener('load', function(){
  overlay.style.display = 'none';
})
</script> --}}
<!-- // Page Loader Script End // -->
<script src="{{Asset('css/Bootstrap/wow.min.js')}}"></script>
              <script>
              new WOW().init();
              </script>
  
</body>
</html>