<?php $lastLetter = "" ?>
<div class="row align-items-center h-100">
    @foreach($contacts as $contact)

    <!-- Seperate contacts by letter -->
    @if($lastLetter != substr($contact->name, 0, 1))

    <?php $lastLetter = substr($contact->name, 0, 1) ?>
    <div class="col-12">
        <h3 style="width: 100%; text-align: center; border-bottom: 1px solid #000; line-height: 0.1em; margin: 10px 0 20px;">
            <span style="background:rgb(194, 193, 193); padding:0 10px; ">{{substr($contact->name, 0, 1)}}</span>
        </h3>
    </div>

    @endif

    <div class="col-2 mx-1">
        <h4>
            {{$contact->name}}
        </h4>
    </div>
    <div class="col-5">
        <span>
            {{$contact->phone}}
        </span>
    </div>
    <div class="col-4">
        <p>
            <form action="{{url('contacts/details')}}" method="POST">
                @csrf
                <input type="number" name='contactId' id='contactId' value="{{$contact->id}}" hidden>
                <button class="btn btn-lg btn-primary btn-block text-uppercase font-weight-bold w-100" type="submit">Details</button>
            </form>
        </p>
    </div>
    <br>
    @endforeach
</div>