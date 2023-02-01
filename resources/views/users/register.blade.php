@extends('shared/_layout')

@section('content')

<div id="phone-box" class="position-absolute top-50 start-50 translate-middle">
    <h2 id='head' class='my-3'> ContactOS - Registration</h2>
    <hr>

    <form action="{{url('users/postRegister')}}" method="POST">
        @csrf
        <div class="row align-items-center my-4">
            <div class="col-1 mx-3">
                <img src="{{asset('/images/contact_user_icon.png')}}" alt="" class="img-fluid">
            </div>
            <div class="col-3">
                Username
            </div>
            <div class="form-label-group my-2 col-6">
                <input type="text" name="name" class="form-control rounded-0" value="{{old('name')}}" autofocus>
            
                @error('name')
                    <p class="error-message">{{$message}}</p>
                @enderror 
            </div>
        </div>

        <div class="row align-items-center my-4">
            <div class="col-1 mx-3">
                <img src="{{asset('/images/contact_mail_icon.png')}}" alt="" class="img-fluid">
            </div>
            <div class="col-3">
                Email
            </div>
            <div class="form-label-group my-2 col-6">
                <input type="text" name="email" class="form-control rounded-0" value="{{old('email')}}" autofocus>
            
                @error('email')
                    <p class="error-message">{{$message}}</p>
                @enderror 
            </div>
        </div>

        <div class="row align-items-center my-4">
            <div class="col-1 mx-3">
                <img src="{{asset('/images/user_password_icon.png')}}" alt="" class="img-fluid">
            </div>
            <div class="col-3">
                Password
            </div>
            <div class="form-label-group my-2 col-6">
                <input type="text" name="password" class="form-control rounded-0" value="{{old('password')}}" autofocus>
            
                @error('password')
                    <p class="error-message">{{$message}}</p>
                @enderror 
            </div>
        </div>

        <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2 my-2" type="submit">Sign Up</button>

        <div class="text-center">
            Do you have an account already?
            <a class="small" href="{{url('/')}}">Try to login</a>
        </div>
    </form>

    <div class="row border p-0 m-0" id='selection-box'>
        <div class="col-12 m-0 px-0">
            <form action="{{url('/')}}" method="GET">
                @csrf
                <button class="btn btn-lg btn-primary text-uppercase font-weight-bold w-100 rounded-0" type="submit">Go Back To Login Screen</button>
            </form>
        </div>
    </div>
</div>


@endsection

