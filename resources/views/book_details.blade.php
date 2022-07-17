<x-layout>


    @include('user.user_nav')

    <div class="container-fluid">
        <div class="row w-75 g-5 m-auto mb-5" >
            <div class="col-md-4">
                <img src="{{asset('./images/1984.jpg')}}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title fs-2">{{$book->title}}</h5>
                    <p class="fs-4 my-2">{{$book->author}}</p>
                    <p class="card-text">
                        <i class="fa fa-star" title="Edit" style="color:orange;"></i> 
                        <small class="text-muted">{{$book->rating}}/5({{$book->borrow_count}})</small>
                    </p>
                    <p class="fs-6">{{$book->long_des}}</p>
                    <a class="btn btn-success" href="/library/borrow/{{$book->id}}">Borrow</a>
                    <a class="btn btn-outline-success" href="/library">Back</a>
                </div>
            </div>
        </div>

        <hr>

        <div class="row m-auto"  style="max-width:900px;">
            <p class="display-6 mb-5">Reviews</p>

            @foreach($reviews as $review)
            <div> 
                <p class="fw-semibold">{{$review->user[0]->name}}</p>
                <p class="fw-semibold">
                    <i class="fa fa-star" title="Edit" style="color:orange;"></i>
                    {{$review->rating}}/5
                </p>
                <p>{{$review->review}}</p>
            </div>
            @endforeach
        </div>

</x-layout>