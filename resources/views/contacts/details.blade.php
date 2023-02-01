@extends('shared/_layout')

@section('content')
<!-- {{$contact->name}} -->

<div id="phone-box" class="position-absolute top-50 start-50 translate-middle">
    <h2 id='head' class='my-3'>ContactOS - Contact Details</h2>
    <hr>
    <div id="details-box">
        <!-- Contact detail -->
        <div class="my-2">
            <div class="row ">
                <form action="{{url('contacts/editContact')}}" method="POST">
                    @csrf
                    <div class="row align-items-center my-4">
                        <div class="col-1 mx-3">
                            <img src="{{asset('/images/contact_user_icon.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="col-3">
                            Name
                        </div>
                        <div class="form-label-group my-2 col-6">
                            <input type="text" name="name" class="form-control rounded-0" value="{{$contact->name}}" autofocus>
                                
                            @error('name')
                            <span class="error-message">{{$message}}</span>
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
                            <input type="text" name="surname" class="form-control rounded-0" value="{{$contact->surname}}" autofocus>
                        
                            @error('surname')
                                <p class="error-message">{{$message}}</p>
                            @enderror 
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
                            <input type="text" name="address" class="form-control rounded-0" value="{{$contact->address}}">
                        
                            @error('address')
                                <p class="error-message">{{$message}}</p>
                            @enderror 
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
                            <input type="text" name="email" class="form-control rounded-0" value="{{$contact->email}}">
                        
                            @error('email')
                                <p class="error-message">{{$message}}</p>
                            @enderror 
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
                            <input type="text" name="phone" class="form-control rounded-0" value="{{$contact->phone}}">
                        
                            @error('phone')
                                <p class="error-message">{{$message}}</p>
                            @enderror   
                        </div> 
                    </div>

                    <input type="number" name='id' id='contactId' value="{{$contact->id}}" hidden>
                    <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mx-0 my-2" type="submit">Make Changes</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Selection page -->
    <div class="row border p-0 m-0" id='selection-box'>
        <div class="col-6 m-0 px-0">
            <form action="{{url('dashboard')}}" method="GET">
                @csrf
                <button class="btn btn-lg btn-primary text-uppercase font-weight-bold w-100 rounded-0" type="submit">Go Back</button>
            </form>
        </div>

        <div class="col-6 m-0 px-0">
            <form action="{{url('contacts/delete')}}" method="POST">
                @csrf
                <button class="btn btn-lg btn-danger text-uppercase font-weight-bold w-100 rounded-0" type="submit">Delete</button>
            </form>
        </div>
    </div>

</div>








@endsection