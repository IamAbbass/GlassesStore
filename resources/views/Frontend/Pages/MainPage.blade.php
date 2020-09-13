
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
 

{{--     


<div class="col-md-3 fa-border">
<div class="col-md-12">
<div class="main" align="center">
    <a href="#">
      <br>
  <img class="img-responsive" style="height: 130px; width: 230px" src="{{URL::to('/')}}/Img/{{$item->image}}"  >
  
  <div class="middle">
    <h5 class="">Name : {{$item->name}}</h5>
    <h5 class="">Color : {{$item->color}}</h5>
    <div class="text ">Price:PKR; {{$item->price}}</div>
  </div>
  </a>

  
  <br>
</div>
</div>
</div> --}}
{{-- <div class="col-md-3 col-sm-6 col-lg-2 ">
jnjn
</div> --}}
<div class="container">
  <div class="row">
    @foreach ($menglasses as $item)
   <div class="col-md-3 col-sm-6 col-lg-3 colums"><a class="card-ancher-tag" href="">
    <div class="main-card">
      <div class="cardbody">
        <img src="{{URL::to('/')}}/Img/{{$item->image}}" alt="">
      </div>
      <div class="cardfooter">
      <p>Name:{{$item->name}}</p>
      <p>Color{{$item->color}}</p>
      <p>Price {{$item->price}}</p>
  
      {{-- bro i am waiting for u --}}

      </div>
      
    </div>
      </a>
  </div>

  @endforeach
   {{-- <div class="col-md-4 col-sm-6 col-lg-2"><a class="card-ancher-tag" href="">
    <div class="main-card">
      <div class="cardbody">
        <img src="" alt="">
      </div>
      <div class="cardfooter">
        <p>Name</p>
        <p>Color</p>
         <p>Price</p>
    
      </div>
      
    </div>
      </a>
  </div> --}}
   {{-- <div class="col-md-4 col-sm-6 col-lg-2"><a class="card-ancher-tag" href="">
  <div class="main-card">
    <div class="cardbody">
      <img src="" alt="">
    </div>
    <div class="cardfooter">
      <p>Name</p>
      <p>Color</p>
       <p>Price</p>
  
    </div>
    
  </div>
    </a>
</div> --}}
  </div>
</div>



  
 </div> <!--row end-->
 </div> <!--container end-->
</div> 
<!-- men end -->


<!-- women -->
<div class="container wow bounceInRight">
  <center><strong style="font:signature; font-size:36px" id="Backpack" class="thumbnail">Glasses For women</strong></center><br />
  <center><h6 style="font-size:18px">Prescription Eyeglasses Store | 50% Off Lenses and Add-Ons! Buy the web's best designer glasses frames, RX eye glasses, prescription glasses styles online.</h6></center></div>
  
<div class="container-fluid wow bounceInDown">
 <div class="row bz-head" >
 
@foreach ($womenglasses as $item)
    


<div class="col-md-3 fa-border">
<div class="col-md-12">
<div class="main" align="center">
    <a href="#">
      <br>
  <img class="img-responsive" style="height:250px;  width: 250px" src="{{URL::to('/')}}/Img/{{$item->image}}"  >
  
  <div class="middle">
    <h5 class="">Name : {{$item->name}}</h5>
    <h5 class="">Color : {{$item->color}}</h5>
    <div class="text ">Price:PKR; {{$item->price}}</div>
  </div>
  </a>

  
  <br>
</div>
</div>



</div>

@endforeach

  
 </div> <!--row end-->
 <button class="btn btn-primery"><a href="">Show More...</a></button>
 </div> <!--container end-->
</div> 
<!-- women -->



<!-- kids -->
<div class="container wow bounceInRight">
  <center><strong style="font:signature; font-size:36px" id="Backpack" class="thumbnail">Glasses For Kids</strong></center><br />
  <center><h6 style="font-size:18px">Prescription Eyeglasses Store | 50% Off Lenses and Add-Ons! Buy the web's best designer glasses frames, RX eye glasses, prescription glasses styles online.</h6></center></div>
  
<div class="container-fluid wow bounceInDown">
 <div class="row bz-head" >
 
@foreach ($menglasses as $item)
    


<div class="col-md-3 fa-border">
<div class="col-md-12">
<div class="main" align="center">
    <a href="#">
      <br>
  <img class="img-responsive" style="height: 130px; width: 230px" src="{{URL::to('/')}}/Img/{{$item->image}}"  >
  
  <div class="middle">
    <h5 class="">Name : {{$item->name}}</h5>
    <h5 class="">Color : {{$item->color}}</h5>
    <div class="text ">Price:PKR; {{$item->price}}</div>
  </div>
  </a>

  
  <br>
</div>
</div>
</div>

@endforeach

  
 </div> <!--row end-->
 </div> <!--container end-->
</div> 
<!-- Kids -->
 


<!--footer-->
        <section class="contact" id="contact">
            <div class="contact-content">
                <div class="wrapper">
                    <div class="container">
                        <h2 class="section-title wow bounceInRight animated custom-black">contact with us</h2>
                        <div class="row">
                            <div class="col-sm-6 clearfix">
                                <p class="address wow pulse animated">
                                    APWA Complex, 1st Floor, Agha Khan 3 Rd, Garden East, Saddar Town, Karachi,, Sindh, Karachi 74400 <br>
                                    <strong>Call: </strong>(021) 32237040 <br>
                                    <strong>Fax: </strong>+9222222222 <br>
                                    <strong>E-mail: </strong>raees1708a@aptechgdn.net <br>
                                    <strong>Web: </strong><a href="#">www.example.com</a>
                                </p>
                                <ul class="social-icons text-center">
                                    <li class="wow animated fadeInLeft facebook animated">
                                        <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li class="wow animated fadeInRight twitter animated">
                                        <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li class="wow animated fadeInLeft linkedin animated">
                                        <a href="https://www.linkedin.com/uas/login"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li class="wow animated fadeInRight googleplus animated">
                                        <a href="https://www.google.com.pk/"><i class="fa fa-google-plus"></i></a>
                                    </li>
                                    <li class="wow animated fadeInLeft github animated">
                                        <a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <form class="_form-inline row" id="contact-form" name="contact" method="post" action="Pannel.html">
                                    <div class="form-group custom-form-group col-sm-6">
                                        <label class="sr-only" for="name" id="name"><span class="required">*</span>Name</label>
                                        <input type="text" class="form-control custom-form-control wow bounceInLeft animated" name="name" id="name" placeholder="Enter your name" required>
                                    </div>
                                    
                                    <div class="form-group custom-form-group col-sm-6">
                                        <label class="sr-only" for="email" id="email"><span class="required">*</span>Email</label>
                                        <input type="email" class="form-control custom-form-control wow bounceInRight animated" id="email" name="email" placeholder="Enter your email" required>
                                    </div>
                                    <div class="form-group custom-form-group col-sm-12">
                                        <label class="sr-only" for="text-massage"><span class="required">*</span>Massage</label>
                                        <textarea  class="form-control custom-form-control wow bounceInUp animated" id="text-massage" name="text-massage" rows="3" placeholder="Write something" required></textarea>
                                    </div>

                                    <button type="submit" class="pull-right btn btn-success submit-button custom-white wow bounceInLeft animated" id="submit" name="submit" value="Send">Submit</button>
                                </form>
                                <div id="success">
                                    <span>
                                        <p>Your message was sent succssfully! I will be in touch as soon as I can.</p>
                                    </span>
                                </div>

                                <div id="error">
                                    <span>
                                        <p>Something went wrong, try refreshing and submitting the form again.</p>
                                     </span>
                                </div>
                            </div> 
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->
                </div> <!-- /.wrapper -->
                <footer class="custom-red text-center wow flip animated">
                    &copy;Copyright <a href="#"><strong>Your Website Link</strong></a> 2017. Theme by <a href="#"><strong>zeddevelopers</strong></a>
                </footer>
            </div> 
        </section> 
                     <!-- end footer -->

                     @endsection
