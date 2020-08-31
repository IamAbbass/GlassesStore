@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('Update Customer') }}     

                    <a class="btn btn-primary text-white float-right" href="/customer">Customer List</a>    
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <div class="container">
                    <form action="/customer/{{$customer_edit->id}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                              <label for="">Name</label>
                              <input type="text"
                            class="form-control" name="name" value="{{$customer_edit->name}}" id="" aria-describedby="helpId" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="text"
                            class="form-control" name="phone" value="{{$customer_edit->phone}}" id="" aria-describedby="helpId" placeholder="">
                            </div>
                            
                          

                              <div class="form-group">
                                <label for="">Address</label>
                                <input type="text"
                                  class="form-control" name="address" value="{{$customer_edit->address}}" id="" aria-describedby="helpId" placeholder="">
                              </div>

                              <div class="form-group">
                                <label for="">Location</label>
                                <input type="text"
                                  class="form-control" name="location" value="{{$customer_edit->location}}" id="" aria-describedby="helpId" placeholder="">
                              </div>

                              <div class="form-group">
                                <label for="">FCM_token</label>
                                <input type="text"
                                  class="form-control" name="fcm_token" value="{{$customer_edit->fcm_token}}" id="" aria-describedby="helpId" placeholder="">
                              </div>

                              
                              <div class="form-group">
                              <label for="">Notes</label>
                              <textarea class="form-control" name="notes"  id="" rows="3">{{$customer_edit->notes}}</textarea>
                            </div>

                            <div class="form-group">
                              <label for="">Gender</label>
                              <select class="form-control" name="gender" id="">
                              <option value="{{$customer_edit->gender}}">{{$customer_edit->gender}}</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Other</option>
                              </select>
                            </div>

                            @if ($customer_edit->is_blocked==0)

                            <div class="form-check">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input" name="is_blocked" id="" value="0" checked >
                                   is blocked
                                </label>
                              </div>

                            @else

                            <div class="form-check">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input" name="is_blocked" value="1" id="" >
                                   is blocked
                                </label>
                              </div>

                            @endif
 <br>
                            @if ($customer_edit->is_verified==0)

                            <div class="form-check">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input" value="0" name="is_verified" id="" checked >
                                   is Varified
                                </label>
                              </div>
                                
                            @else
                            
                            <div class="form-check">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input" value="1" name="is_verified" id="" >
                                   is Varified
                                </label>
                              </div>

                            @endif
<br>
                             

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
