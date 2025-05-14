@extends('theme.layout')

@section('contant')
    @include('theme.partials.breadcrumb', ['title' => 'Edit Movie'])
    <section>
        <div class="gmap-with-map">
            <div class="gmap" data-lat="-33.878897" data-lng="151.103737"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 ml-lg-auto">
                        <div class="gmap-form bg-white">
                            <h4 class="form-title text-uppercase">Edit
                                <span class="text-theme">Movie</span>
                            </h4>
                            <p class="form-text">We understand your requirement and provide quality works</p>
                            @if (session('status-edit-movie'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status-edit-movie') }}
                                </div>
                            @endif
                            @php
                                $slug = Str::slug($movie->name);
                            @endphp
                            <form method="POST" action="{{ route('movie.update', ['movie' => $slug]) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <input class="form-control" name="status" type="hidden" value="0" />
                                <div class="row form-grid">
                                    <div class="col-sm-6">
                                        <div class="input-view-flat input-group">
                                            <input class="form-control" name="name" type="text"
                                                placeholder="Enter Your Name" value="{{ $movie->name }}" />
                                        </div>
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-view-flat input-group">
                                            <select class="form-control" name="category_id">
                                                <option>select category</option>
                                                @if (count($categories) > 0)
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}"
                                                            @if ($category->id === $movie->category_id) selected @endif>
                                                            {{ $category->name }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                        @error('category_id')
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

                                    <div class="col-sm-6">
                                        <div class="input-view-flat input-group">
                                            <select class="form-control" name='status' id="status">
                                                <option value="{{ null }}">Select status movie </option>
                                                @if ($movie->status === 'Showtime')
                                                    <option value="Showtime" selected>Showtime</option>
                                                    <option value="Comming soon">Comming soon</option>
                                                    <option value="In archive" selected>In archive</option>
                                                @elseif ($movie->status === 'Comming soon')
                                                    <option value="Showtime">Showtime</option>
                                                    <option value="Comming soon" selected>Comming soon</option>
                                                    <option value="In archive">In archive</option>
                                                @elseif ($movie->status === 'In archive')
                                                    <option value="Showtime">Showtime</option>
                                                    <option value="Comming soon">Comming soon</option>
                                                    <option value="In archive" selected>In archive</option>
                                                @endif
                                            </select>
                                        </div>
                                        @error('status')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-view-flat input-group">

                                            <input class="form-control" name="rating" type="number"
                                                placeholder="Enter rating moive" value="{{ $movie->rating }}" />



                                        </div>
                                        @error('rating')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-view-flat input-group">
                                            <input class="form-control" name="time" type="text"
                                                placeholder="Enter time moive" value="{{ $movie->time }}" />

                                        </div>
                                        @error('time')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control" name="description" rows="3" placeholder="Enter description moive">{{ $movie->description }}</textarea>
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
