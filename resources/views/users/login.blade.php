@extends("shared\_layout")

@section('content')

<h3 class="login-heading mb-4">ContactOS login page!</h3>

<form action="{{url('users/loginUser')}}" method="POST">
    @csrf
    
    <div class="form-label-group">
        <label for="inputEmail">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" >
        
        @if ($errors->has('email'))
        <span class="error">{{ $errors->first('email') }}</span>
        @endif    
    </div> 
    <div class="form-label-group">
        <label for="inputPassword">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">
        
        
    </div>
        <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold my-2 mb-2" type="submit">Login</button>
    <div class="text-center">If you have an account?
        <a class="small" href="{{url('users/register')}}">Sign Up</a>
    </div>
</form>

@endsection