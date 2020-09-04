@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('Add New Glass') }}     

                    <a class="btn btn-primary text-white float-right" href="/glass">Glasses List</a>    
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <div class="container">
                        <form action="/glass" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                              <label for="">Name</label>
                              <input type="text"
                                class="form-control" name="name" value="{{old('name')}}" id="" required aria-describedby="helpId" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="">Brand</label>
                                <input type="text"
                                  class="form-control" name="brand" value="{{old('brand')}}" id="" required aria-describedby="helpId" placeholder="">
                            </div>
                            
                            <div class="form-group">
                                <label for="">Color</label>
                                <input type="text"
                                  class="form-control" name="color" value="{{old('color')}}" id="" required aria-describedby="helpId" placeholder="">
                              </div>

                              <div class="form-group">
                                <label for="">Price</label>
                                <input type="number"
                                  class="form-control" name="price" value="{{old('price')}}" id="" required aria-describedby="helpId" placeholder="">
                                </div>

                            <div class="form-group">
                              <label for="">Description</label>
                              <textarea class="form-control" name="description" id="" rows="3" required>{{old('description')}}</textarea>
                            </div>


                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="is_available" id=""  value="1"  >
                             Available
                              </label>
                            </div>
<br>
                            <div class="form-group">
                              <label for="">Select Image</label>
                              <input type="file" class="form-control-file" value="{{old('image')}}" name="image" required id="" placeholder="" aria-describedby="fileHelpId">
                            </div>


                            <button type="submit" class="btn btn-primary">Save</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
