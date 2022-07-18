@if(session()->has('message'))
    <p class="top-0 center bg-success" id="notiMsg">
        {{session('message')}}
    </p>
    <script>
        document.querySelector('#notiMsg').style.display = 'block'
        setTimeout(() => {
            document.querySelector('#notiMsg').style.display = 'none'
        }, 1000);
    </script>
@endif