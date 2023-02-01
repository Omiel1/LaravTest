@if(session()->has('message'))

<div class='fixed top-0 alert alert-success' id='alert-message' role="alert">
    {{session('message')}}
</div>

@endif