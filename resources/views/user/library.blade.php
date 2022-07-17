<x-layout>

@include('user.user_nav')


@php
    $bookLen = count($books);
@endphp

{{-- Searchbar --}}

<form class="d-flex p-3 px-5" role="search">
    <input class="form-control me-2" type="search" placeholder="Search for Books" aria-label="Search">
    <button class="btn btn-success" type="submit">Search</button>
</form>



<div class="container justify-center">
    @for($i = 0; $i<$bookLen; $i++)
        @if($i%2 === 0) 
            @unless($i===0)
                </div>
            @endunless
            @unless($i===$bookLen-1)
                <div class="row g-5">
            @endunless
        @endif
            <div class="col-md-6">
                <div class="card mb-3 row" style="max-width: 540px;">
                    <div class="row g-0 align-items-center">
                    <div class="col-md-4">
                        <img src="{{asset('./images/1984.jpg')}}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{$books[$i]->title}}</h5>
                            <h6>{{$books[$i]->author}}</h5>
                            <p class="card-text">
                                <i class="fa fa-star" title="Edit" style="color:orange;"></i> 
                                <small class="text-muted">{{$books[$i]->rating}}/5({{$books[$i]->borrow_count}})</small>
                            </p>
                            <p class="fs-6">{{$books[$i]->short_des}}</p>
                            <a class="btn btn-success" href="/library/borrow/{{$books[$i]->id}}">Borrow</a>
                            <a class="btn btn-outline-success" href="/library/{{$books[$i]->id}}">Details</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        @if($i===$bookLen-1) 
            </div>
        @endif
    @endfor
    <div class="row g-5">
        <div class="col-md-6">
            <div class="card mb-3 row" style="max-width: 540px;">
                <div class="row g-0 align-items-center">
                <div class="col-md-4">
                    <img src="{{asset('./images/1984.jpg')}}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">1984</h5>
                        <h6>George Orwell</h5>
                        <p class="card-text">
                            <i class="fa fa-star" title="Edit" style="color:orange;"></i> 
                            <small class="text-muted">4.6/5(2350)</small>
                        </p>
                        <p class="fs-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur obcaecati exercitationem.</p>
                        <button class="btn btn-success">Borrow</button>
                        <button class="btn btn-outline-success">Details</button>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-3 row" style="max-width: 540px;">
                <div class="row g-0 align-items-center">
                <div class="col-md-4">
                    <img src="{{asset('./images/1984.jpg')}}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">1984</h5>
                        <h6>George Orwell</h5>
                        <p class="card-text">
                            <i class="fa fa-star" title="Edit" style="color:orange;"></i> 
                            <small class="text-muted">4.6/5(2350)</small>
                        </p>
                        <p class="fs-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur obcaecati exercitationem.</p>
                        <button class="btn btn-success">Borrow</button>
                        <button class="btn btn-outline-success">Details</button>
                    </div>
                </div>
                </div>
            </div>
        </div>  
    </div>

</div>

</x-layout>