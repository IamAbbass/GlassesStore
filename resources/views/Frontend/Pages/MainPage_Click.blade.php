@extends('Frontend.Layout.Layout')
@section('Contant')

<div class="container-fluid" style="background-image: url('/Images/background/1.jpg'); background-repeat: no-repeat ; background-size: cover">
    <br><br>

    <section id="" class="" align="center">
        <div class="row">
            
            <div class="col-md-8">
    
    
        <div class="row">
           
          <div class="col-md-6">
            
            <br>
            <br>
                {{-- @foreach ($find as $item) --}}
          <img height="220px" width="250px" src="{{URL::to('/')}}/Img/{{$find->image}}"/>

          <br>
          <br>
          <a href="" class="btn btn-success">Order Now</a>
          
              {{-- @endforeach --}}
        </div> <!-- col-md-4 -->
        
          <div class="col-md-6" >
          <br><br>
            {{-- @foreach ($find as $item) --}}
          <h4 >Glass Name  !! <span style="font-size: 19px;">&nbsp; {{$find->name}}</span> </h4>
          <h4 >Color  !!   <span style="font-size: 19px;">&nbsp; {{$find->color}}</span> </h4>
            {{-- @endforeach --}}
           
            {{-- @foreach ($find as $item) --}}
          {{-- <div class="price" style="color: aliceblue">Release Date {{$item->ReleaseDate}}</div> --}}
            {{-- @endforeach --}}
    <br>
            {{-- @foreach ($find as $item) --}}
            {{-- <div class="price" style="color: aliceblue">Category  {{$item->Category}}</div> --}}
              {{-- @endforeach --}}
    
            <hr/>
           {{-- @foreach ($find as $item) --}}
          
            {{-- @endforeach  --}}
           
            <div  class="panel-group"  id="accordion" role="tablist" aria-multiselectable="true" >
          <div class="panel panel-default">
            <div class="panel-heading" style=";" role="tab" id="headingOne">
              <h4 class="panel-title" >
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Description
                </a>
            
              </h4>
              
            </div>
            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
              <div class="panel-body" style="background-color: hsl(192, 5%, 79%);">
            {{$find->description}}
              </div>
            </div>
          </div>
          
            </div>
          </div> <!-- col-md-8 -->
        </div> <!-- row -->
      </div> <!-- col-md-8 -->
      
        </div> <!-- row -->
      </section>
    <br><br><br><br>
    </div>
@endsection