@extends("shared\_layout")

@section('content')

<?php $lastLetter = '-'; ?>

<div id="phone-box" class="position-absolute top-50 start-50 translate-middle">
    <div id='contact-box'>
        
        <h2 class='my-3' id='head'>ContactOS - Contact List</h2>
        <hr>
        <!-- Alert -->
        <x-alert-message />

        <!-- Search for contact  -->
        <div class="row my-4" style='height:30px;'>
            <div class="col-12">
                <form id="form">
                    <input type="text" class="form-control" size="30" id="searchField" oninput="searchContacts()" placeholder="Search for contact...">
                </form>
            </div>
        </div>
        
        <!-- Generate list of contacts -->
        <div id="target">
            <div class="row align-items-center h-100">
                @if(count($contacts) == 0)
                    <p>No listings found</p>
                @endif

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
        </div>
        
    </div>

    <!-- Section for user panel - Add/Logout -->
    <div class="row border p-0 m-0" id='selection-box'>
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
    
</div>

<input type="text" id="target-url" value="{{url('contacts/getContacts')}}" hidden>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script>
    $('#alert-message').delay(1500).fadeOut(400);

    function searchContacts(){
        $_token = "{{ csrf_token() }}";
        var userInput = $('#searchField').val();
        var targetUrl = $('#target-url').val();
        //alert(targetUrl);

        $.ajax({
            headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') },
            url: targetUrl,
            type: 'GET',
            cache: false,
            data: {'searchValue': userInput},
            datatype: "json",
            success: function(data) {
                //Change data according to user input
                if(data.success == true){
                    //alert(data.html);
                    $('#target').html(data.html);
                } else {
                    alert("Something went wrong :C");
                }
            },
            error: function(xhr, textStatus, thrownError) {
                alert(xhr + "\n" + textStatus + "\n" + thrownError);
            }
        });
    }
    //So good so far
</script>
@endsection