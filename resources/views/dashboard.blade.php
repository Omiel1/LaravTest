@extends('_layout')

@section('content')

<?php $lastLetter = '-'; ?>
<h2> Welcome to the contacts pannel mr.X</h2>
<hr>
<!-- Section for user panel - Add/Logout -->
<div class="row w-100 border">
    <div class="col-6 m-0 px-0">
        <form action="{{url('contacts/create')}}" method="GET">
            @csrf
            <button class="btn btn-lg btn-primary text-uppercase font-weight-bold w-100 rounded-0" type="submit">Add User</button>
        </form>
    </div>
    <div class="col-6 m-0 px-0">
        <form action="{{url('logout')}}" method="POST">
            @csrf
            <button class="btn btn-lg btn-danger text-uppercase font-weight-bold w-100 rounded-0" type="submit">Logout</button>
        </form>
    </div>
</div>

@if(count($contacts) == 0)
    <p>No listings found</p>
@endif

<h2 class='my-3'>Contact List</h2>

<!-- Search for contact  -->
<div class="row my-3">
    <div class="col-12">
        <form id="form">
            <input type="text" class="form-control" size="30" id="searchField" placeholder="Search for contact...">
        </form>
    </div>
</div>

<!-- Generate list of contacts -->
<div class="row align-items-center h-100">
    @foreach($contacts as $contact)

    @if($lastLetter != substr($contact->name, 0, 1))
    <div class="col-12">
        <h3 style="width: 100%; text-align: center; border-bottom: 1px solid #000; line-height: 0.1em; margin: 10px 0 20px;">
            <span style="background:#fff; padding:0 10px; ">{{substr($contact->name, 0, 1)}}</span>
        </h3>
    </div>
    @endif

    <div class="col-2">
        <h4>
            {{$contact->name}}
        </h4>
    </div>
    <div class="col-2">
        <span>
            {{$contact->phone}}
        </span>
    </div>
    <div class="col-8">
        <p>
            <form action="{{url('contacts/details')}}" method="POST">
                @csrf
                <input type="number" name='contactId' id='contactId' value="{{$contact->id}}" hidden>
                <button class="btn btn-lg btn-primary btn-block text-uppercase font-weight-bold w-75" type="submit">Details</button>
            </form>
        </p>
    </div>
    <br>
    @endforeach
</div>


<hr>
@endsection