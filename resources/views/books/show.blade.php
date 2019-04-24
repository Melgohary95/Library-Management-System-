<!DOCTYPE html>

<head>
    <title>This is book page</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('css/book.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <img width="190" src="{{ asset('imgs/cover.jpg') }}" alt="" class="bookCover">
            </div>
            <div class="col-7">
                <h3 class="bookTitle">{{ $book->title }}</h3>
                <p class="bookDescription">{{ $book->description }}</p>
                @if($isAvailable)
                <p class="availableMsg">{{$availabilityMessage}}</p>
                @else
                <p class="unavailableMsg">No books are available</p>
                @endif
            </div>
            <div class="col-2">
            </div>
        </div>
        @if($canComment)
        <form method="post" action="{{ route('comments.store') }}">
            <div class="row">

                <div class="col-8">
                    @csrf
                    <div class="form-group">
                        <div class="input-field">
                            <textarea name="Comment" id="textarea1" class="materialize-textarea"></textarea>
                            <label for="textarea1">Enter your comment</label>
                        </div>
                    </div>
                    <input id="comment" type="submit" class="waves-light btn btn-block indigo lighten-1"
                        value="comment" />

                </div>
                <div class="col-4">
                    <ul class="rate-area">
                        <input disable type="radio" id="5-star" name="rating" value="5" /><label for="5-star"
                            title="Amazing">5
                            stars</label>
                        <input disable type="radio" id="4-star" name="rating" value="4" /><label for="4-star"
                            title="Good">4
                            stars</label>
                        <input disable type="radio" id="3-star" name="rating" value="3" /><label for="3-star"
                            title="Average">3
                            stars</label>
                        <input disable type="radio" id="2-star" name="rating" value="2" /><label for="2-star"
                            title="Not Good">2
                            stars</label>
                        <input disable type="radio" id="1-star" name="rating" value="1" /><label for="1-star"
                            title="Bad">1
                            star</label>
                    </ul>
                </div>
            </div>
        </form>
        @endif
        <div class="row justify-content-center">
            @foreach ($comments as $comment)
            <div class="col-12">
                <div class="card">
                    <div style="height:50px" class="d-flex  blue darken-1">
                        <h3 class="align-self-center ml-3 text-white ">{{ $comment["name"] }}</h3>
                        <div class="rating align-self-center ml-5">
                            @for ($i=0;$i<$comment['rate'];$i++)
                             <span class="star yellow-text text-darken-2">★</span>
                            @endfor
                            @for ($i=0;$i<(5-$comment['rate']);$i++)
                                 <span class="star">☆</span>
                            @endfor
                        </div>
                    </div>
                    <div class=" card-content light-green lighten-4">
                        <p>{{ $comment["dicription"] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>



    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
