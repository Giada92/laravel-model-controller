<main>
    <div class="container">
        <div class="cards">
            @foreach ($movies as $movie)
                <div class="card">
                    <h2>{{ $movie->title }}</h2>
                    <h3>{{ $movie->original_title }}</h3>
                    <small>{{ $movie->vote }}</small>
                </div>
            @endforeach
        </div>
    </div>
</main>
