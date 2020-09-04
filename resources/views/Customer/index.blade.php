@extends('layouts.app')

@section('content')
<div class="container">

    {{-- Alert For Add Customer --}}

    @if (\Session::has('added_customer'))
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
        <strong>{!! \Session::get('added_customer') !!}</strong> 
    </div>
    @endif

    {{-- Alert For Delete Customer --}}

    @if (\Session::has('deleted_customer'))
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
        <strong>{!! \Session::get('deleted_customer') !!}</strong> 
    </div>
    @endif

    {{-- Alert For Update Customer --}}
    
    @if (\Session::has('update_customer'))
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
        <strong>{!! \Session::get('update_customer') !!}</strong> 
    </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('List Of All Customer') }}     

                    <a class="btn btn-primary text-white float-right" href="/customer/create">Create</a>    
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
                            <th>phone</th>
                            <th>Varified</th>
                            <th>Address</th>
                            <th>Location</th>
                            <th>FCM Token</th>
                            <th>Notes</th>
                            <th>Gender</th>
                            <th>Blocked</th>
                            <th>Options</th>
                        </thead>
                        <tbody>
                            @php
                                $sno = 0;
                            @endphp
                            @foreach($customer as $customers)
                                @php
                                    $sno++;
                                @endphp
                                <tr>
                                    <td>{{ $sno }}</td>
                                    
                                    <td>{{ $customers->name }}</td>
                                    <td>{{ $customers->phone }}</td>
                                    <td>
                                        @if ($customers->is_verified==0)
                                        {{$a="true"}}
                                            @else
                                            {{$a="false"}}
                                        @endif
                                   
                                    </td>
                                    <td>{{ $customers->address }}</td>
                                    <td>{{ $customers->location }}</td>
                                    <td>{{ $customers->fcm_token }}</td>
                                    <td>{{ $customers->notes }}</td>
                                    <td>{{ $customers->gender }}</td>
                                    <td>
                                        @if ($customers->is_blocked==0)
                                        {{$a="true"}}
                                            @else
                                            {{$a="false"}}
                                        @endif
                                   
                                    </td>
                             

                                    <td align="center">
                                    <a class="btn btn-primary text-white" href="/customer/{{$customers->id}}/edit">Edit</a>
                                        <br>
                                    <form action="/customer/{{$customers->id}}" method="post">
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
