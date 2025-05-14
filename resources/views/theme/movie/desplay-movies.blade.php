@extends('theme.layout')

@section('contant')
    @include('theme.partials.breadcrumb', ['title' => 'My Movies'])

    <section>
        <div class="gmap-with-map">
            <div class="gmap" data-lat="-33.878897" data-lng="151.103737"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 ml-lg-auto">
                        <div class="gmap-form bg-white">
                            <h4 class="form-title text-uppercase text-center mb-4">My
                                <span class="text-theme">Movis</span>
                            </h4>

                            @if (session('status-delete-movie'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status-delete-movie') }}
                                </div>
                            @endif
                            @if (count($movies) > 0)
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">title</th>
                                            <th scope="col">category</th>
                                            <th scope="col">rating</th>
                                            <th scope="col">time</th>
                                            <th scope="col" class="text-right">actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($movies as $movie)
                                        @php
                                          $slug =  Str::slug($movie->name);
                                        @endphp
                                            <tr>
                                                <th scope="row"><a href="{{ route('movie.show', ['movie' => $slug]) }}"
                                                        target="_blank" rel="noopener noreferrer">{{ $movie->name }}</a>
                                                </th>
                                                <td>{{ $movie->category->name }}</td>
                                                <td>{{ $movie->rating }}</td>
                                                <td>{{ $movie->time }}</td>
                                                <td>
                                                    <div class="d-flex justify-content-end">


                                                        <a href="{{ route('movie.edit', ['movie' => $slug]) }}"
                                                            class="btn btn-warning btn-sm mr-3">Edite</a>

                                                            <form action="{{ route('movie.destroy', ['movie' => $slug]) }}"
                                                            method="post" class="mt-0">
                                                            @csrf @method('delete')
                                                            <a type="submit"
                                                                onclick="event.preventDefault();
                                                                    this.closest('form').submit();"
                                                                class="btn btn-danger btn-sm">Delete</a>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-center mt-4 pt-3">
                                    {{ $movies->render('pagination::bootstrap-4') }}
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
