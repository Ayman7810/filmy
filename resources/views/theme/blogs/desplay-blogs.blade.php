@extends('theme.layout')

@section('contant')
    @include('theme.partials.breadcrumb', ['title' => 'My Blogs'])

    <section>
        <div class="gmap-with-map">
            <div class="gmap" data-lat="-33.878897" data-lng="151.103737"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 ml-lg-auto">
                        <div class="gmap-form bg-white">
                            <h4 class="form-title text-uppercase text-center mb-4">My
                                <span class="text-theme">Blogs</span>
                            </h4>

                            @if (session('statusDeleteBlog'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('statusDeleteBlog') }}
                                </div>
                            @endif
                            @if (count($blogs) > 0)
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">title</th>
                                            <th scope="col" class="text-right">actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($blogs as $blog)

                                        @php
                                            $slug = Str::slug($blog->title)
                                        @endphp
                                            <tr>
                                                <th scope="row"><a href="{{ route('blog.show', ['blog' => $slug]) }}"
                                                        target="_blank" rel="noopener noreferrer">{{ $blog->title }}</a>
                                                </th>
                                            
                                                <td>
                                                    <div class="d-flex justify-content-end">
                                                        <a href="{{ route('blog.edit', ['blog' => $slug]) }}"
                                                            class="btn btn-warning btn-sm mr-3">Edite</a>

                                                            <form action="{{ route('blog.destroy',['blog' => $slug]) }}"
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
                                    {{ $blogs->render('pagination::bootstrap-4') }}
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
