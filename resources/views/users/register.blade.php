@extends('shared/_layout')

@section('content')
<div>
    <form action="{{url('postRegister')}}" method="POST">
        @csrf
        <div class="form-label-group">
            <label for="inputName">Username</label>
            <input type="text" id="inputName" name="name" class="form-control" placeholder="ex. User1999" value="{{old('name')}}" autofocus>
    
            @error('name')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror   
        </div> 
        <div class="form-label-group">
            <label for="inputEmail">Email address</label>
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="example.email@mail.pl" value="{{old('email')}}">
    
            @error('email')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror 
        </div> 
        <div class="form-label-group">
            <label for="inputPassword">Password</label>
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" value="{{old('password')}}">
    
            @error('password')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
    
        <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2 my-2" type="submit">Sign Up</button>
        <div class="text-center">
            Do you have an account already?
            <a class="small" href="{{url('/')}}">Try to login</a>
        </div>
    </form>
</div>


@endsection

