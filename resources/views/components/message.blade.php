@if(session()->has('message'))
    <p class="top-0 center">
        {{session('message')}}
    </p>
@endif