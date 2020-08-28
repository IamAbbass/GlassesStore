@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('List of all Items') }}     

                    <a class="btn btn-primary text-white float-right" href="/home">Glasses List</a>    
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <div class="container">
                    <form action="/home/{{$glasses->id}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                              <label for="">Name</label>
                              <input type="text"
                            class="form-control" value="{{$glasses->name}}" name="name" id="" aria-describedby="helpId" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="">Brand</label>
                                <input type="text"
                            class="form-control" value="{{$glasses->brand}}" name="brand" id="" aria-describedby="helpId" placeholder="">
                            </div>
                            
                            <div class="form-group">
                                <label for="">Color</label>
                                <input type="text"
                            class="form-control" value="{{$glasses->color}}" name="color" id="" aria-describedby="helpId" placeholder="">
                              </div>

                              <div class="form-group">
                                <label for="">Price</label>
                                <input type="number"
                              class="form-control" value="{{$glasses->price}}" name="price" id="" aria-describedby="helpId" placeholder="">
                              </div>

                            <div class="form-group">
                              <label for="">description</label>
                            <textarea class="form-control"  name="description" id="" rows="3">{{$glasses->description}}</textarea>
                            </div>


                            @if ($glasses->is_available==0)
                                
                         

                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="is_available" id="" value="0" checked  >
                             is_available
                              </label>
                            </div>

                            @else
                            <div class="form-check">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input" name="is_available" id="" value="1"   >
                               is_available
                                </label>
                              </div>
                            @endif
<br>
<div class="form-group">
    <label>Image</label>
    <input type="file" name="image">
<img src="{{URL::to('/')}}/Img/{{$glasses->image}}" height="100px" width="100px;" alt="">

<input type="hidden" name="hidden_image" value="{{$glasses->image}}">
  
</div>


                            <button type="submit" class="btn btn-primary">Save</button>

                        </form>
                    </div>

{{--                     
                    <table class="table table-bordered table-striped">
                        <thead>
                            <th>#</th>
                            <th>Name</th>
                            <th>Brand</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Color</th>
                            <th>Price</th>
                            <th>Available</th>
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
                                    <td>{{ $glass->image }}</td>
                                    <td>{{ $glass->color }}</td>
                                    <td>{{ $glass->price }}</td>
                                    <td>{{ $glass->is_available }}</td>
                                    <td>
                                        <a class="btn btn-primary text-white" href="/home/{{ $glass->id }}">Edit</a>    
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
