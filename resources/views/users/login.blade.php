@extends("shared\_layout")

@section('content')

<div id="phone-box" class="position-absolute top-50 start-50 translate-middle">
    <h3 class="login-heading mb-4 my-4" id='head'>ContactOS - Login</h3>
    <hr>

    <div id="login-box">
        <form action="{{url('users/loginUser')}}" method="POST">
            @csrf
            <div class="row align-items-center my-4" id="login-panel">
                <div class="col-1 mx-3">
                    <img src="{{asset('/images/contact_mail_icon.png')}}" alt="" class="img-fluid">
                </div>
                <div class="col-2">
                    -Email-
                </div>
                <div class="form-label-group my-2 mx-1 col-8">
                    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" value="{{old('email')}}">
                
                    @if ($errors->has('email'))
                        <span class="error-message">{{ $errors->first('email') }}</span>
                    @endif  
                </div>
            </div>
    
            <div class="row align-items-center my-4">
                <div class="col-1 mx-3">
                    <img src="{{asset('/images/contact_user_icon.png')}}" alt="" class="img-fluid">
                </div>
                <div class="col-2">
                    -Password-
                </div>
                <div class="form-label-group my-2 mx-1 col-8">
                    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" value="{{old('password')}}">
                
                    @if ($errors->has('email'))
                        <span class="error-message">{{ $errors->first('email') }}</span>
                    @endif  
                </div>
            </div>
    
            
            <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" id="login-button" type="submit">Login</button>
    
            <div class="text-center">Don't you have an account?
                <a class="small" href="{{url('users/register')}}">Sign Up</a>
            </div>
        </form>
    </div>
    
</div>

@endsection