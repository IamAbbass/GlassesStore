@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('List of all Items') }}     

                    <a class="btn btn-primary text-white float-right" href="/glass">Glasses List</a>    
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <div class="container">
                    <form action="/order/{{$order_edit->id}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                              <label for="">Select Glass</label>
                              <select class="form-control" name="glass_id" id="">
                                  @foreach ($glasses as $item)
                              <option value="{{$item->id}}">{{$item->name}}</option>      
                                  @endforeach
                              </select>
                              @foreach ($glasses as $item)
                                  @if ($order_edit->glass_id==$item->id)
                                  
                                  <h5> &nbsp; Current Glass : ( {{$item->name}} )</h5>
                                      
                                  @endif
                              @endforeach
                            </div>

                            <div class="form-group">
                                <label for="">Select Customer</label>
                                <select class="form-control" name="customer_id" id="">
                                    @foreach ($customers as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>      
                                    @endforeach
                                </select>

                                @foreach ($customers as $item)
                                  @if ($order_edit->customer_id==$item->id)
                                  
                                  <h5> &nbsp; Current Customer  : ( {{$item->name}} )</h5>
                                      
                                  @endif
                              @endforeach

                              </div>


                            <div class="form-group">
                              <label for="">Name</label>
                              <input type="text"
                            class="form-control" value="{{$order_edit->name}}" name="name" id="" aria-describedby="helpId" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="text"
                            class="form-control" name="phone" value="{{$order_edit->phone}}" id="" aria-describedby="helpId" placeholder="">
                            </div>
                            
                            <div class="form-group">
                                <label for="">Address</label>
                                <input type="text"
                                  class="form-control" name="address" value="{{$order_edit->address}}" id="" aria-describedby="helpId" placeholder="">
                              </div>

                              <div class="form-group">
                                <label for="">Location</label>
                                <input type="text"
                                  class="form-control" name="location" value="{{$order_edit->location}}" id="" aria-describedby="helpId" placeholder="">
                              </div>

                            <div class="form-group">
                              <label for="">Notes</label>
                            <textarea class="form-control" name="notes" id="" rows="3">{{$order_edit->notes}}</textarea>
                            </div>

                            <div class="form-group">
                              <label for="">Gender</label>
                              <select class="form-control" name="gender" id="">
                                <option>Male</option>
                                <option>Female</option>
                                <option>Other</option>
                              </select>

                            <h5>Current Gender ( {{$order_edit->gender}} )</h5>

                            </div>

                            <div class="form-group">
                                <label for="">Status</label>
                                <input type="text"
                                  class="form-control" name="status" value="{{$order_edit->status}}" id="" aria-describedby="helpId" placeholder="">
                              </div>

                              @if ($order_edit->is_verified==0)
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input" name="is_verified" id="" value="1" checked >
                               Verified
                                </label>
                              </div>
                              <br>
                              @else
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input" name="is_verified" id="" value="1"  >
                             Verified
                                </label>
                              </div>
                              @endif
                              
                              <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="image">
                            <img src="{{URL::to('/')}}/Img/order/{{$order_edit->image}}" height="100px" width="100px;" alt="">
                            
                            <input type="hidden" name="hidden_image" value="{{$order_edit->image}}">
                              
                            </div>
<br>


                            <button type="submit" class="btn btn-primary">Save</button>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
