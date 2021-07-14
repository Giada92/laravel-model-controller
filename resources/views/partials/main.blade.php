@section('main-film')
    <main>
        <div class="container">
            <div class="cards">
                @foreach ($movies as $movie)
                    <div class="flip-card">
                        <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <p>Ci andrebbe la locandina</p>
                        </div>
                        <div class="flip-card-back">
                            <h2>{{ $movie->title }}</h2>
                            <h3>{{ $movie->original_title }}</h3>
                            <small>{{ $movie->vote }}</small>
                        </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection


{{-- <div class="cards">
    @foreach ($movies as $movie)
        <div class="card">
            <h2>{{ $movie->title }}</h2>
            <h3>{{ $movie->original_title }}</h3>
            <small>{{ $movie->vote }}</small>
        </div>
    @endforeach
</div> --}}