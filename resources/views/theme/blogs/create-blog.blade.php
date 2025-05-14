@extends('theme.layout')

@section('contant')
    @include('theme.partials.breadcrumb', ['title' => 'Create blog'])
    <section>
        <div class="gmap-with-map">
            <div class="gmap" data-lat="-33.878897" data-lng="151.103737"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 ml-lg-auto">
                        <div class="gmap-form bg-white">
                            <h4 class="form-title text-uppercase">Create
                                <span class="text-theme">blog</span>
                            </h4>
                            <p class="form-text">We understand your requirement and provide quality works</p>
                            @if (session('statusCreateBlog'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('statusCreateBlog') }}
                                </div>
                            @endif
                            <form method="POST" action="{{ route('blog.store') }}" enctype="multipart/form-data">
                                @csrf
                                <input class="form-control" name="status" type="hidden" value="0" />
                                <div class="row form-grid">
                                    <div class="col-sm-6">
                                        <div class="input-view-flat input-group">
                                            <input class="form-control" name="title" type="text"
                                                placeholder="Enter the Title" value="{{ old('title') }}" />
                                        </div>
                                        @error('title')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-view-flat input-group">
                                            <input class="form-control" name="image" type="file"
                                                value="{{ old('image') }}">
                                        </div>
                                        @error('image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                 
                                    <div class="col-12">
                                        <textarea class="form-control" name="description" rows="3" placeholder="Enter description moive">{{ old('description') }}</textarea>
                                        @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <button class="px-5 btn btn-theme w-100" type="submit">Send</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
