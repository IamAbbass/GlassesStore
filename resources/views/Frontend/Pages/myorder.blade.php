@extends('Frontend.Layout.Layout')
@section('Contant')

<br><br><br><br><br>

<div align="center">
<h2>My Order List</h2>
<br>

@if ($order->count()<=0)
    <h4>there is no order </h4>


{{-- {{$order->count()}} --}}
</div>
@else
    

<div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Glass name</th>
          <th>Glass image</th>
          <th>eye sight image</th>
          <th scope="col">brand</th>
          <th scope="col">color</th>
          <th scope="col">price</th>
          <th scope="col">status</th>
        </tr>
      </thead>
      <tbody>

        

          @foreach ($order as $item)
             
         
          
          <tr>
          <th scope="row">
              @foreach ($glass as $glasses)
              @if ($item->glass_id==$glasses->id)
                  {{$glasses->name}}
              @endif
          @endforeach
        </th>

        
            <th scope="row">
                @foreach ($glass as $glasses)
                @if ($item->glass_id==$glasses->id)
                <img src="{{URL::to('/')}}/Img/glass/{{$glasses->image}}" height="100px" width="120px"  alt="">
                @endif
            @endforeach
          </th>

          <th>
              @if ($item->image=='null')
                  no image
                  @else
                  <img src="{{URL::to('/')}}/Img/order/{{$item->image}}" height="100px" width="120px"  alt="">
              @endif

          </th>

        <th scope="row">
            @foreach ($glass as $glasses)
            @if ($item->glass_id==$glasses->id)
                {{$glasses->brand}}
            @endif
        @endforeach
      </th>

      <th scope="row">
        @foreach ($glass as $glasses)
        @if ($item->glass_id==$glasses->id)
            {{$glasses->color}}
        @endif
    @endforeach
  </th>

  <th scope="row">
    @foreach ($glass as $glasses)
    @if ($item->glass_id==$glasses->id)
        {{$glasses->price}}
    @endif
@endforeach
</th>


    <td>{{$item->status}}</td>
      </tr>
      @endforeach
      </tbody>
    </table>
  </div>
  
  @endif
    
@endsection