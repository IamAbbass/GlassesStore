@extends('layouts.app')

@section('content')
<div class="container">

   
    {{-- Alert For Insert Glass --}}

    @if (\Session::has('glass_added'))
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
        <strong>{!! \Session::get('glass_added') !!}</strong> 
    </div>
    @endif

    {{-- Alert For Delete --}}

    @if (\Session::has('glass_deleted'))
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
        <strong>{!! \Session::get('glass_deleted') !!}</strong> 
    </div>
    @endif
       
  {{-- Alert For Update --}}

  @if (\Session::has('glass_updated'))
  <div class="alert alert-primary alert-dismissible fade show" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
      </button>
      <strong>{!! \Session::get('glass_updated') !!}</strong> 
  </div>
  @endif


    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('List of all Glass') }}     

                    <a class="btn btn-primary text-white float-right" href="/glass/create">Create</a>    
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    <table class="table table-bordered table-striped">
                        <thead>
                            <th>#</th>
                            <th>Name</th>
                            <th>Brand</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Color</th>
                            <th>Gender</th>
                            <th>Price</th>
                            <th>Available</th>
                            {{-- <th>Is_Delete</th> --}}
                            <th>Options</th>
                        </thead>
                        <tbody>
                            @php
                                $sno = 0;
                            @endphp
                            @foreach($glasses as $glass)
                                @php
                                    $sno++;
                                @endphp
                                <tr>
                                    <td>{{ $sno }}</td>  
                                    <td>{{ $glass->name }}</td>
                                    <td>{{ $glass->brand }}</td>
                                    <td>{{ $glass->description }}</td>
                                    <td>
                                        <img src="{{URL::to('/')}}/Img/{{$glass->image}}" height="100px" width="120px"  alt="">
                                    </td>
                                    <td>{{ $glass->color }}</td>
                                    <td>{{ $glass->gender }}</td>

                                    <td>{{ $glass->price }}</td>
                                    <td>
                                        @if ($glass->is_available==0)
                                        {{$a="True"}}
                                            @else
                                            {{$a="False"}}
                                        @endif
                                    </td>

                                    <td align="center">
                                        <a class="btn btn-primary text-white" href="/glass/{{ $glass->id }}/edit">Edit</a>
                                        <br>
                                        <form action="/glass/{{$glass->id}}" method="post">
                                         @csrf
                                         @method('DELETE')
                                        <button  type="submit" class="btn btn-warning">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
