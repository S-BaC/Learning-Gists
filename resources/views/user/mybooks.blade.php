<x-layout>

    @include('user.user_nav')

    <div class="container">

        @foreach($borrowedBooks as $book)
        
        <div class="row w-50 g-5 m-auto mb-5" >
            <div class="col-md-4">
                <img src="{{asset('./images/1984.jpg')}}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title fs-2">{{$book->bookDetails[0]->title}}</h5>
                    <p class="fs-4 my-2">{{$book->bookDetails[0]->author}}</p>
                    
                    @if(isset($book->returned_at))
                        <p class="fst-italic text-success">Returned</p>
                    @else
                        <p class="fst-italic text-info">Not Returned</p>
                        <p>To be returned at: <span class="fw-semibold text-info">{{$book->to_be_returned_at}}</span> </p>

                    @endif
                    
                    <a class="btn btn-outline-success" href="/mybooks/return/{{$book->bookDetails[0]->id}}">Return</a>
                </div>
            </div>
        </div>
        
        @endforeach
        
    </div>


</x-layout>