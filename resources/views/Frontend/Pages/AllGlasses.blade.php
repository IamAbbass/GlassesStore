
@extends('Frontend.Layout.Layout')
@section('Contant')
    

<!-- men -->
<div class="container wow bounceInRight">
    <br><br><br>
  <center><strong style="font:signature; font-size:36px" id="Backpack" class="thumbnail">
    @foreach ($glasses as $item)
    @if ($item->gender=="Male")
    Men Glasses

    @elseif ($item->gender=="Female")
     Women Glasses   

     @elseif ($item->gender=="Kids")
     Kids Glasses   
    @endif

  
      
      @break
  @endforeach
</strong></center><br />
  <center><h6 style="font-size:18px">Prescription Eyeglasses Store | 50% Off Lenses and Add-Ons! Buy the web's best designer glasses frames, RX eye glasses, prescription glasses styles online.</h6></center></div>
  
<div class="container-fluid wow bounceInDown">
 <div class="row bz-head" >
 

<div class="container">
  <div class="row">
    @foreach ($glasses as $item)
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
 

 </div> <!--row end-->
 </div> <!--container end-->
</div> 
<!-- men end -->


                     @endsection
