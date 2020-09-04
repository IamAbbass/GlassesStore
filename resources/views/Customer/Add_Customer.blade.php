@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('Add New Customer') }}     

                    <a class="btn btn-primary text-white float-right" href="/customer">Customer List</a>    
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <div class="container">
                        <form action="/customer" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                              <label for="">Name</label>
                              <input type="text"
                                class="form-control" name="name" value="{{old('name')}}" id="" required aria-describedby="helpId" placeholder="">
                              </div>

                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="text"
                                  class="form-control" name="phone" value="{{old('phone')}}" id="" required aria-describedby="helpId" placeholder="">
                                </div>
                            
                          

                              <div class="form-group">
                                <label for="">Address</label>
                                <input type="text"
                                  class="form-control" name="address" value="{{old('address')}}" id="" required aria-describedby="helpId" placeholder="">
                                </div>

                              <div class="form-group">
                                <label for="">Location</label>
                                <input type="text"
                                  class="form-control" name="location" value="{{old('location')}}" id="" required aria-describedby="helpId" placeholder="">
                                </div>

                              <div class="form-group">
                                <label for="">FCM_token</label>
                                <input type="text"
                                  class="form-control" name="fcm_token" value="{{old('fcm_token')}}" id="" required aria-describedby="helpId" placeholder="">
                                </div>

                              
                              <div class="form-group">
                              <label for="">Notes</label>
                              <textarea class="form-control" name="notes" id="" rows="3" required>{{old('notes')}}</textarea>
                            </div>

                            <div class="form-group">
                              <label for="">Gender</label>
                              <select class="form-control" name="gender" id="">
                                <option>Male</option>
                                <option>Female</option>
                                <option>Other</option>
                              </select>
                            </div>

 
                            <div class="form-check">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input" name="is_blocked" id="" >
                                 Blocked
                                </label>
                              </div>
<br>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input" name="is_verified" id="" >
                                   Verified
                                </label>
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
