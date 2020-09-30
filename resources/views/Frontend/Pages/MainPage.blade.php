
@extends('Frontend.Layout.Layout')
@section('Contant')
    
        <!--Slide Show--> 
<div style="margin-top:50px" id="myCarousel" class="carousel slide slider2" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="/Img/slider/1.jpeg" alt="Slide 1" style="width:100%; margin-top:30px; height: 520px;">
       
      </div>

      <div class="item">
        <img src="/Img/slider/2.jpeg" alt="Slide 2" style="width:100%; height: 520px; margin-top:30px;">
        
      </div>
    
      <div class="item">
        <img src="/Img/slider/3.jpeg" alt="Slide 3" style="width:100%; height: 520px; margin-top:30px;">
        
      </div>

      <div class="item">
        <img src="/Img/slider/4.jpg" alt="Slide 4" style="width:100%; height: 520px; margin-top:30px;">
        
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!--Slideshow Code END -->

<!-- men -->
<div class="container wow bounceInRight">
  <center><strong style="font:signature; font-size:36px" id="Backpack" class="thumbnail">Glasses For Men</strong></center><br />
  <center><h6 style="font-size:18px">Prescription Eyeglasses Store | 50% Off Lenses and Add-Ons! Buy the web's best designer glasses frames, RX eye glasses, prescription glasses styles online.</h6></center></div>
  
<div class="container-fluid wow bounceInDown">
 <div class="row bz-head" >
 

<div class="container">
  <div class="row">
    @foreach ($menglasses as $item)
     <div class="col-md-3 col-sm-6 col-lg-3 colums">
       <a class="card-ancher-tag" href="/webapp/{{$item->id}}">
       <div class="main-card">
          <div class="cardbody">
            <br>
            <img src="{{URL::to('/')}}/Img/glass/{{$item->image}}" alt="">
          </div>
            
          <div class="cardfooter">
             <p>Name:{{$item->name}}</p>
              <p>Color{{$item->color}}</p>
              <p>Price {{$item->price}}</p>
          </div>
      
         </div>
        </a>
      </div>
      @endforeach
   </div>
</div>
   <div class="container btn-showmore">
     <@php
         $male=1;
     @endphp
    <a href="/allglasses/{{$male}}" class="btn btn-warning">Show more...</a>
    </div>

 </div> <!--row end-->
 </div> <!--container end-->
</div> 
<!-- men end -->

<!-- women -->
<div class="container wow bounceInRight">
  <center><strong style="font:signature; font-size:36px" id="Backpack" class="thumbnail">Glasses For Women</strong></center><br />
  <center><h6 style="font-size:18px">Prescription Eyeglasses Store | 50% Off Lenses and Add-Ons! Buy the web's best designer glasses frames, RX eye glasses, prescription glasses styles online.</h6></center></div>
  
<div class="container-fluid wow bounceInDown">
 <div class="row bz-head" >
 

<div class="container">
  <div class="row">
    @foreach ($womenglasses as $item)
     <div class="col-md-3 col-sm-6 col-lg-3 colums">
       <a class="card-ancher-tag" href="/webapp/{{$item->id}}">
       <div class="main-card">
          <div class="cardbody">
            <br>
            <img src="{{URL::to('/')}}/Img/{{$item->image}}" alt="">
          </div>
            
          <div class="cardfooter">
             <p>Name:{{$item->name}}</p>
              <p>Color{{$item->color}}</p>
              <p>Price {{$item->price}}</p>
          </div>
      
         </div>
        </a>
      </div>
      @endforeach
   </div>
</div>
   <div class="container btn-showmore">
    <@php
         $female=2;
     @endphp
    <a href="/allglasses/{{$female}}" class="btn btn-warning">Show more...</a>
    </div>

 </div> <!--row end-->
 </div> <!--container end-->
</div> 
<!-- women end -->


<!-- kids -->
<div class="container wow bounceInRight">
  <center><strong style="font:signature; font-size:36px" id="Backpack" class="thumbnail">Glasses For Kids</strong></center><br />
  <center><h6 style="font-size:18px">Prescription Eyeglasses Store | 50% Off Lenses and Add-Ons! Buy the web's best designer glasses frames, RX eye glasses, prescription glasses styles online.</h6></center></div>
  
<div class="container-fluid wow bounceInDown">
 <div class="row bz-head" >
 

<div class="container">
  <div class="row">
    @foreach ($kidsglasses as $item)
     <div class="col-md-3 col-sm-6 col-lg-3 colums">
       <a class="card-ancher-tag" href="/webapp/{{$item->id}}">
       <div class="main-card">
          <div class="cardbody">
            <br>
            <img src="{{URL::to('/')}}/Img/{{$item->image}}" alt="">
          </div>
            
          <div class="cardfooter">
             <p>Name:{{$item->name}}</p>
              <p>Color{{$item->color}}</p>
              <p>Price {{$item->price}}</p>
          </div>
      
         </div>
        </a>
      </div>
      @endforeach
   </div>
</div>
   <div class="container btn-showmore">
    <@php
    $kids=3;
@endphp
<a href="/allglasses/{{$kids}}" class="btn btn-warning">Show more...</a>
</div>

 </div> <!--row end-->
 </div> <!--container end-->
</div> 
<!-- Kids end -->


                     @endsection
