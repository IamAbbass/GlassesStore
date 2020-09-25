
@extends('Frontend.Layout.Layout')
@section('Contant')

<br><br><br><br><br>



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
             <h4>   <div class="card-header">{{ __('Register') }}</div></h4>

                <div class="card-body">
                <form method="POST" action="/profile/{{$customer->user_id}}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                            <input id="name" type="text" class="form-control " name="name" value="{{$user->name}}" required autocomplete="name" >

                               
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control " name="email" value="{{ $user->email }}" required autocomplete="email">

                              
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control"  name="password" >

                              
                            </div>
                        </div>

                        {{-- <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div> --}}

                         {{-- <div class="form-group row">
                              <label for="" class="col-md-4 col-form-label text-md-right">Name</label>
                              <div class="col-md-6">
                              <input type="text"
                                class="form-control" name="name" value="{{old('name')}}" id="" required aria-describedby="helpId" placeholder="">
                              </div>
                              </div>  --}}

                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label text-md-right">Phone</label>
                                <div class="col-md-6">
                                <input type="text"
                                  class="form-control" name="phone" value="{{$customer->phone}}" id="" required aria-describedby="helpId" placeholder="">
                                </div>
                                </div>
                            
                          

                              <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label text-md-right">Address</label>
                                <div class="col-md-6">
                                <input type="text"
                                  class="form-control" name="address" value="{{$customer->address}}" id="" required aria-describedby="helpId" placeholder="">
                                  </div>
                                </div>



                              <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label text-md-right">Location</label>
                                <div class="col-md-6">
                                <input type="text"
                                  class="form-control" name="location" value="{{$customer->location}}" id="" required aria-describedby="helpId" placeholder="">
                                </div>
                                </div>


                            <div class="form-group row">
                              <label for="" class="col-md-4 col-form-label text-md-right">Gender</label>
                              <div class="col-md-6">
                              <select class="form-control" name="gender" id="">
                              <option>{{$customer->gender}}</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Other</option>
                              </select>
                              </div>
                            </div>

 

                              

                          

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Update profile
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


    
@endsection