<x-layout>

    @include('user.user_nav')

    <p class="display-6 mt-5 ms-5">
        Currently Reading
    </p>
    
    <div class="book-flex">
        @foreach($borrowedBooks as $book)
            <div class="container">
                <div class="row w-100 g-5 m-auto mb-5" >
                    <div class="col-md-4">
                        <img src="{{asset('./images/1984.jpg')}}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fs-2">{{$book->bookDetails[0]->title}}</h5>
                            <p class="fs-4 my-2">{{$book->bookDetails[0]->author}}</p>
                            <p class="fst-italic text-info">Not Returned</p>
                            <p>To be returned at: <span class="fw-semibold text-info">{{$book->to_be_returned_at}}</span> </p>
                            <a class="btn btn-outline-success" href="/mybooks/return/{{ $book->bookDetails[0]->id . "," . $book->id }}">Return</a>
                            <a class="btn btn-outline-success" href="/library/{{$book->bookDetails[0]->id}}">Details</a>
                        </div>
                    </div>
                </div>    
            </div>   
        @endforeach
    </div>
    <div class="d-flex justify-content-center">
        <a href="/library" class="btn btn-lg btn-success">To Library</a>
    </div>

    <div class="pagination">
        {{$borrowedBooks->links()}}
    </div>

    <hr>

    <p class="display-6 mt-5 ms-5">
        Records
    </p>

    <div class="book-flex">
    @foreach ($records as $book)
        <div class="container">
            <div class="row w-100 g-5 m-auto mb-5" >
                <div class="col-md-4">
                    <img src="{{asset('./images/1984.jpg')}}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title fs-2">{{$book->bookDetails[0]->title}}</h5>
                        <p class="fs-4 my-2">{{$book->bookDetails[0]->author}}</p>
                        <p class="fst-italic text-success">Returned</p>
                        <p class="text-success">Borrowed from {{$book->borrowed_at}} to {{$book->returned_at}} </p>
                        <a class="btn btn-outline-success" href="/library/{{$book->bookDetails[0]->id}}">Details</a>
                    </div>
                </div>
            </div>    
        </div>
    @endforeach
</div>
    <div class="pagination">
        {{$records->links()}}
    </div>

</x-layout>