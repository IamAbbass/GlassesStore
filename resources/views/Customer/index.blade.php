@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('List of all Items') }}     

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
                            <th>Is_Varified</th>
                            <th>Address</th>
                            <th>location</th>
                            <th>FCM_Token</th>
                            <th>Notes</th>
                            <th>gender</th>
                            <th>Is_Blocked</th>
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
