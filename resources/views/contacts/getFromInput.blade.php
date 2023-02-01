<?php $lastLetter = "" ?>
<div class="row align-items-center h-100">
    <?php $count = 0; ?>
    @foreach($contacts as $contact)
    <?php $count++ ?>
    <!-- Seperate contacts by letter -->
    @if($lastLetter != substr($contact->name, 0, 1))

    <?php $lastLetter = substr($contact->name, 0, 1) ?>
    <div class="col-12">
        <h3 style="width: 100%; text-align: center; border-bottom: 1px solid #000; line-height: 0.1em; margin: 10px 0 20px;">
            <span style="background:rgb(221, 216, 216); padding:0 10px; ">{{substr($contact->name, 0, 1)}}</span>
        </h3>
    </div>

    @endif

    <div class="col-3">
        <h4>
            <b>
                {{$contact->name}}
            </b>
        </h4>
    </div>
    <div class="col-4">
        <span>
            {{$contact->phone}}
        </span>
    </div>
    <div class="col-4">
        <p>
            <form action="{{url('contacts/details')}}" method="GET">
                @csrf
                <input type="number" name='contactId' id='contactId' value="{{$contact->id}}" hidden>
                <button class="btn btn-lg btn-primary btn-block text-uppercase font-weight-bold w-100" type="submit">Details</button>
            </form>
        </p>
    </div>
    <br>
    <!-- Space for displaying buttons -->
    @if(count($contacts) == $count)
        <div class="my-4"></div>
    @endif
    @endforeach
</div>