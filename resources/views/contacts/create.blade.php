@extends('_layout')

@section('content')
<div class='border my-5'>
    <div class="row p-0 m-0">
        <div class="col-12 my-3 border-bottom ">
            <h2> Create new contact</h2>
        </div>
        <form action="{{url('contacts/createContact')}}" method="POST">
            @csrf
            <div class="col-12">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6"><label for="inputName">Name</label>
                            <input type="text" id="inputName" name="name" class="form-control rounded-0" value="{{old('name')}}" autofocus>
                    
                            @error('name')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror 
                        </div>
                        <div class="col-6">
                            <label for="inputSurname">Surname</label>
                            <input type="text" id="inputSurname" name="surname" class="form-control rounded-0" value="{{old('surname')}}" autofocus>

                        </div>
                    </div>
                </div>
            </div>
    
            <div class="form-label-group my-2 col-12">
                <label for="inputAddress">Address</label>
                <input type="text" name="address" id="inputAddress" class="form-control rounded-0" value="{{old('address')}}">
        
            </div> 

            <div class="form-label-group my-2 col-12">
                <label for="inputEmail">Email</label>
                <input type="text" name="email" id="inputEmail" class="form-control rounded-0" value="{{old('email')}}">
        
            </div> 
    
            <div class="form-label-group my-2 col-12">
                <label for="inputPhone">Phone</label>
                <input type="text" id="inputPhone" name="phone" class="form-control rounded-0" value="{{old('phone')}}" autofocus>
        
                @error('phone')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror   
            </div>
        
            <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2 my-2" type="submit">Create</button>
        </form>
    </div>
</div>



@endsection

