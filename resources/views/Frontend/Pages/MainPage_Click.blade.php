@extends('Frontend.Layout.Layout')
@section('Contant')





    
<br><br>
    <div class="container">
      <div class="row"><br><br>
        <div class="col-md-5 col-sm-5 col-lg-6 col-xs-12">
          <div style="float: left;padding: 30px;" >
            
          <img height="170px" width="100%" src="{{URL::to('/')}}/Img/{{$find->image}}"/>
              <br>
              
              <div style="margin-top: 0px;width: 100%" align="center">
               <br><br><br><br>
               
              <a href=""  style="width: 80%" class="btn btn-success">Order Now</a>
</div>
          
          </div>
        </div>
        <div class="col-md-5 col-sm-6 col-lg-6 colom6"> 
         <div class="single-contant">
         <h2>Name  : <span ><b>{{$find->name}}</b></span></h2>
         <h2>Price : <span><b>{{$find->price}}</b></span></h2>
         <h2>Brand : <span> <b>{{$find->brand}}<b></span></h2>
         <h2>Description : <span> <b>{{$find->description}}<b></span></h2>
          

         </div>   
         
       



     
        </div>
      </div>
    </div>





    
  
@endsection