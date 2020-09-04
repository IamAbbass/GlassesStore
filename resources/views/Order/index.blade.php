@extends('layouts.app')

@section('content')



<div class="container">

    {{-- Alert For Add Order  --}}

@if (\Session::has('added_order'))
<div class="alert alert-primary alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        <span class="sr-only">Close</span>
    </button>
    <strong>{!! \Session::get('added_order') !!}</strong> 
</div>
@endif

{{-- Alert For Delete Order --}}

@if (\Session::has('deleted_order'))
<div class="alert alert-primary alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        <span class="sr-only">Close</span>
    </button>
    <strong>{!! \Session::get('deleted_order') !!}</strong> 
</div>
@endif

{{-- Alert For Updated Order --}}

@if (\Session::has('updated_order'))
<div class="alert alert-primary alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        <span class="sr-only">Close</span>
    </button>
    <strong>{!! \Session::get('updated_order') !!}</strong> 
</div>
@endif

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('List of all Items') }}     

                    <a class="btn btn-primary text-white float-right" href="/order/create">Create</a>    
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
                            <th>Glass</th>
                            <th>Customer</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Image</th>
                            <th>Location</th>
                            <th>Notes</th>
                            <th>Gendere</th>
                            <th>Status</th>
                            <th>Verified</th>
                            <th>Options</th>
                        </thead>
                        <tbody>
                            @php
                                $sno = 0;
                            @endphp
                            @foreach($orders as $order)
                                @php
                                    $sno++;
                                @endphp
                                <tr>
                                    <td>{{ $sno }}</td>
                                    <th>
                                         @foreach ($glass as $item)
                                        @if ($item->id==$order->glass_id)
                                        {{$item->name}}
                                        @endif
                                    @endforeach
                                </th>
                                <th>
                                    @foreach ($customer as $item)
                                   @if ($item->id==$order->customer_id)
                                   {{$item->name}}
                                   @endif
                               @endforeach
                           </th>
                                   
                                   
                                    <td>{{ $order->name }}</td>
                                    <td>{{ $order->phone }}</td>
                                    <td>{{ $order->address }}</td>
                                <td><img src="{{URL::to('/')}}/Img/order/{{$order->image}}" height="100px" width="120px"  alt=""></td>
                                    <td>{{ $order->location }}</td>
                                    <td>{{ $order->notes }}</td>
                                    <td>{{ $order->gender }}</td>
                                    <td>{{ $order->status }}</td>
                                    

                                    <td>
                                        @if ($order->is_verified==0)
                                        {{$a="true"}}
                                            @else
                                            {{$a="false"}}
                                        @endif
                                 
                                    </td>
                                    

                                    <td align="center">
                                    <a class="btn btn-primary text-white" href="/order/{{$order->id}}/edit">Edit</a>
                                        <br>
                                    <form action="/order/{{$order->id}}" method="post">
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
