@extends('shared/_layout')

@section('content')

<div id="phone-box" class="position-absolute top-50 start-50 translate-middle">
    <div class="row p-0 m-0">
        <div class="col-12 my-3 border-bottom ">
            <h2> Create new contact</h2>
        </div>
        <form action="{{url('contacts/createContact')}}" method="POST">
            @csrf
            <div class="row align-items-center my-4">
                <div class="col-1 mx-3">
                    <img src="{{asset('/images/contact_user_icon.png')}}" alt="" class="img-fluid">
                </div>
                <div class="col-3">
                    Name
                </div>
                <div class="form-label-group my-2 col-6">
                    <input type="text" name="name" class="form-control rounded-0" value="{{old('name')}}" autofocus>
                
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror 
                </div>
            </div>

            <div class="row align-items-center my-4">
                <div class="col-1 mx-3">

                </div>
                <div class="col-3">
                    Surname
                </div>
                <div class="form-label-group my-2 col-6">
                    <input type="text" name="surname" class="form-control rounded-0" value="{{old('surname')}}" autofocus>
                
                </div>
            </div>

            <div class="row align-items-center my-4">
                <div class="col-1 mx-3">
                    <img src="{{asset('/images/contact_address_icon.png')}}" alt="" class="img-fluid">
                </div>
                <div class="col-3"> 
                    -Address-
                </div>
                <div class="form-label-group my-2 col-6">
                    <input type="text" name="address" class="form-control rounded-0" value="{{old('address')}}">
                
                </div> 
            </div>

            <div class="row align-items-center my-4">
                <div class="col-1 mx-3">
                    <img src="{{asset('/images/contact_mail_icon.png')}}" alt="" class="img-fluid">
                </div>
                <div class="col-3">
                    -Email-
                </div>
                <div class="form-label-group my-2 col-6">
                    <input type="text" name="email" class="form-control rounded-0" value="{{old('email')}}">
                
                </div> 
            </div>

            <div class="row align-items-center my-4">
                <div class="col-1 mx-3">
                    <img src="{{asset('/images/contact_phone_icon.png')}}" alt="" class="img-fluid">
                </div>
                <div class="col-3">
                   -Phone-
                </div>
                <div class="form-label-group my-2 col-6">
                    <input type="text" name="phone" class="form-control rounded-0" value="{{old('phone')}}">
                
                    @error('phone')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror   
                </div> 
            </div>
        
            <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2 my-2" type="submit">Create</button>
        </form>

        <div class="row border p-0 m-0" id='selection-box'>
            <div class="col-12 m-0 px-0">
                <form action="{{url('dashboard')}}" method="GET">
                    @csrf
                    <button class="btn btn-lg btn-primary text-uppercase font-weight-bold w-100 rounded-0" type="submit">Go Back</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

