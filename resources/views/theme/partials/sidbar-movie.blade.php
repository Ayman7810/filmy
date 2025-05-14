@php
    use App\Models\Movie;
    use App\Models\Category;
    $movies = Movie::take(3)->latest()->get();
    $categories = Category::all();
@endphp

<div class="sidebar section-long order-lg-last">
    <section class="section-sidebar">
        <div class="section-head">
            <h2 class="section-title text-uppercase">Latest movies</h2>
        </div>
        @if (count($movies) > 0)
            @foreach ($movies as $movie)
                @php
                    $slug = Str::slug($movie->name);
                @endphp
                <div class="movie-short-line-entity">
                    <a class="entity-preview" href="{{ route('movie.show', ['movie' => $slug]) }}">
                        <span class="embed-responsive embed-responsive-16by9">
                            <img class="embed-responsive-item" src='{{ asset("storage/movies/$movie->image") }}'
                                alt="{{ $movie->name }}" />
                        </span>
                    </a>
                    <div class="entity-content">
                        <h4 class="entity-title">
                            <a class="content-link"
                                href="{{ route('movie.show', ['movie' => $slug]) }}">{{ $movie->name }}</a>
                        </h4>
                        <p class="entity-subtext">{{ $movie->created_at->format('d M Y') }}</p>
                    </div>
                </div>
            @endforeach
        @endif

    </section>

    @if (count($categories) > 0)

        <section class="section-sidebar">
            <div class="section-head">
                <h2 class="section-title text-uppercase">Categories</h2>
            </div>
            <ul class="list-unstyled list-wider list-categories">
                @foreach ($categories as $category)
                    <li>
                        <a class="content-link text-uppercase"
                            href="{{ route('theme.moviesID', ['id' => $category->id]) }}">{{ $category->name }}</a>
                    </li>
                @endforeach
            </ul>
        </section>
    @endif

    <section class="section-sidebar">
        <a class="d-block" href="#">
            <img class="w-100" src="http://via.placeholder.com/350x197" alt="" />
        </a>
    </section>
</div>
