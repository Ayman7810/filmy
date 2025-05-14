@extends('theme.layout')



@section('contant')
    @include('theme.partials.breadcrumb', ['title' => 'Movies List'])
    <section class="section-long">
        <div class="container">
            <div class="section-pannel">
                <div class="grid row">
                    <div class="col-md-10">
                        <form autocomplete="off">
                            <div class="row form-grid">
                                <div class="col-sm-6 col-lg-3">
                                    <div class="input-view-flat input-group">
                                        @if (count($categories) > 0)
                                            <select class="form-control" name="genre">
                                                $@foreach ($categories as $category)
                                                    <option selected="true">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        @endif

                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="input-view-flat date input-group" data-toggle="datetimepicker"
                                        data-target="#release-year-field">
                                        <input class="datetimepicker-input form-control" id="release-year-field"
                                            name="releaseYear" type="text" placeholder="release year"
                                            data-target="#release-year-field" data-date-format="Y" />
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="input-view-flat input-group">
                                        <select class="form-control" name="sortBy">
                                            <option selected="true">sort by</option>
                                            <option>name</option>
                                            <option>release year</option>
                                            <option>rating</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-2 my-md-auto d-flex">
                        <span class="info-title d-md-none mr-3">Select view:</span>
                        <ul class="ml-md-auto h5 list-inline">
                            <li class="list-inline-item">
                                <a class="content-link transparent-link" href="movies-blocks.html"><i
                                        class="fas fa-th"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a class="content-link transparent-link active" href="movies-list.html"><i
                                        class="fas fa-th-list"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            @if (count($movies) > 0)
                @foreach ($movies as $movie)
                    @php
                        $slug = Str::slug($movie->name);
                    @endphp
                    <article class="movie-line-entity">
                        <div class="entity-poster" data-role="hover-wrap">
                            <div class="embed-responsive embed-responsive-poster">
                                <img class="embed-responsive-item" src="{{ asset("storage/movies/$movie->image") }}"
                                    alt="" />
                            </div>
                            <div class="d-over bg-theme-lighted collapse animated faster" data-show-class="fadeIn show"
                                data-hide-class="fadeOut show">
                                <div class="entity-play">
                                    <a class="action-icon-theme action-icon-bordered rounded-circle"
                                        href="https://www.youtube.com/watch?v=d96cjJhvlMA" data-magnific-popup="iframe">
                                        <span class="icon-content"><i class="fas fa-play"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="entity-content">
                            <h4 class="entity-title">
                                <a class="content-link"
                                    href="{{ route('movie.show', ['movie' => $slug]) }}">{{ $movie->name }}</a>
                            </h4>
                            <div class="entity-category">
                                <a class="content-link" href="movies-blocks.html">{{ $movie->category->name }}</a>
                            </div>
                            <div class="entity-info">
                                <div class="info-lines">
                                    <div class="info info-short">
                                        <span class="text-theme info-icon"><i class="fas fa-star"></i></span>
                                        <span class="info-text">{{ $movie->rating }}</span>
                                        <span class="info-rest">/10</span>
                                    </div>
                                    <div class="info info-short">
                                        <span class="text-theme info-icon"><i class="fas fa-clock"></i></span>
                                        <span class="info-text">{{ $movie->time }} </span>
                                    </div>
                                    <div class="info info-short">
                                        <span class="text-theme info-icon"><i class="fas fa-comment"></i></span>
                                        <span class="info-text">{{ count($movie->comments) }}</span>
                                    </div>
                                </div>
                            </div>
                            <p class="text-short entity-text">{{ $movie->description }}
                            </p>
                        </div>
                        <div class="entity-extra">
                            @if ($movie->status === 'Showtime')
                                <div class="text-uppercase entity-extra-title">Showtime</div>
                                <div class="entity-showtime">
                                    <div class="showtime-wrap">
                                        <div class="showtime-item">
                                            <span class="disabled btn-time btn" aria-disabled="true">11 : 30</span>
                                        </div>
                                        <div class="showtime-item">
                                            <a class="btn-time btn" aria-disabled="false" href="#">13 : 25</a>
                                        </div>
                                        <div class="showtime-item">
                                            <a class="btn-time btn" aria-disabled="false" href="#">16 : 07</a>
                                        </div>
                                        <div class="showtime-item">
                                            <a class="btn-time btn" aria-disabled="false" href="#">19 : 45</a>
                                        </div>
                                        <div class="showtime-item">
                                            <a class="btn-time btn" aria-disabled="false" href="#">21 : 30</a>
                                        </div>
                                        <div class="showtime-item">
                                            <a class="btn-time btn" aria-disabled="false" href="#">23 : 10</a>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="text-uppercase entity-extra-title">{{ $movie->status }}</div>
                            @endif
                        </div>
                    </article>
                @endforeach

                <div class="section-bottom">
                    <div class="paginator">
                        {{ $movies->render('pagination::bootstrap-4') }}
                    </div>
                </div>
            @endif


        </div>
    </section>
@endsection
