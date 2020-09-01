@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('List of all Items') }}     

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
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                              </div>

                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="text"
                                  class="form-control" name="phone" value="{{old('phone')}}" id="" required aria-describedby="helpId" placeholder="">
                                  @error('phone')
                                  <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                                </div>
                            
                          

                              <div class="form-group">
                                <label for="">Address</label>
                                <input type="text"
                                  class="form-control" name="address" value="{{old('address')}}" id="" required aria-describedby="helpId" placeholder="">
                                  @error('address')
                                  <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                                </div>

                              <div class="form-group">
                                <label for="">Location</label>
                                <input type="text"
                                  class="form-control" name="location" value="{{old('location')}}" id="" required aria-describedby="helpId" placeholder="">
                                  @error('location')
                                  <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                                </div>

                              <div class="form-group">
                                <label for="">FCM_token</label>
                                <input type="text"
                                  class="form-control" name="fcm_token" value="{{old('fcm_token')}}" id="" required aria-describedby="helpId" placeholder="">
                                  @error('fcm_token')
                                  <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                                </div>

                              
                              <div class="form-group">
                              <label for="">Notes</label>
                              <textarea class="form-control" name="notes" id="" rows="3" required>{{old('notes')}}</textarea>
                              @error('notes')
                              <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
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
                                   is blocked
                                </label>
                              </div>
<br>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input" name="is_verified" id="" >
                                   is Varified
                                </label>
                              </div>
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
