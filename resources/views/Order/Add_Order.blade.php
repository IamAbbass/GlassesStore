@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('List of all Items') }}     

                    <a class="btn btn-primary text-white float-right" href="/order">Glasses List</a>    
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <div class="container">
                        <form action="/order" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                              <label for="">Select Glass</label>
                              <select class="form-control" name="glass_id" id="">
                                  @foreach ($glasses as $item)
                              <option value="{{$item->id}}">{{$item->name}}</option>      
                                  @endforeach
                              </select>
                            </div>

                            <div class="form-group">
                                <label for="">Select Customer</label>
                                <select class="form-control" name="customer_id" id="">
                                    @foreach ($customers as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>      
                                    @endforeach
                                  
                                </select>
                              </div>


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
                                <label for="">location</label>
                                <input type="text"
                                  class="form-control" name="location" value="{{old('location')}}" id="" required aria-describedby="helpId" placeholder="">
                                  @error('location')
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
                                <option>male</option>
                                <option>female</option>
                                <option>other</option>
                              </select>
                            </div>

                            <div class="form-group">
                                <label for="">Status</label>
                                <input type="text"
                                  class="form-control" name="status" value="{{old('status')}}" id="" required aria-describedby="helpId" placeholder="">
                                  @error('status')
                                  <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                                </div>

                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="is_verified"  id="" value="1"  >
                             is_verified
                              </label>
                            </div>
<br>
                            <div class="form-group">
                              <label for="">select Image</label>
                              <input type="file" class="form-control-file" name="image" value="{{old('image')}}" id="" required placeholder="" aria-describedby="fileHelpId">
                              @error('image')
                              <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
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
