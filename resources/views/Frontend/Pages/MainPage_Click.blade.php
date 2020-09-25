@extends('Frontend.Layout.Layout')
@section('Contant')
<script>
// $(document).ready(function(){
//   $("#ordernow").click(function(){
//     var pro_id=$("#product_id").val();
//     alert( pro_id);
//   });
// });

</script>





    
<br><br>
    <div class="container">
      <div class="row"><br><br>
        <div class="col-md-5 col-sm-5 col-lg-6 col-xs-12">
          <div style="float: left;padding: 30px;" >
            
          <img height="200px" width="100%" src="{{URL::to('/')}}/Img/{{$find->image}}"/>
              <br>
              
              <div style="margin-top: 0px;width: 100%" align="center">
               <br><br><br><br>
               
              <a href=""  style="width: 80%" id="ordernow" class="btn btn-success">Order Now</a>
              <form action="" method="post">
                <div class="form-group">
                  <label for=""></label>
                <input type="text" class="form-control" hidden value="{{$find->id}}" name="product_id" id="product_id" aria-describedby="helpId" placeholder="">
                  <small id="helpId" class="form-text text-muted">Help text</small>
                </div>
              </form>
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