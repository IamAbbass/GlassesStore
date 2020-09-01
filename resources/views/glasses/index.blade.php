@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('List of all Items') }}     

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
                            <th>Price</th>
                            <th>Available</th>
                            <th>Is_Delete</th>
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
                                <td><img src="{{URL::to('/')}}/Img/{{$glass->image}}" height="100px" width="120px"  alt=""></td>
                                    <td>{{ $glass->color }}</td>
                                    <td>{{ $glass->price }}</td>

                                    <td>
                                        @if ($glass->is_available==0)
                                        {{$a="true"}}
                                            @else
                                            {{$a="false"}}
                                        @endif
                                    </td>

                                    <td>
                                        @if ($glass->is_deleted==0)
                                        {{$a="true"}}
                                            @else
                                            {{$a="false"}}
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
