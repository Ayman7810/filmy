@extends('theme.layout')

@section('contant')
    {{-- @include('theme.partials.breadcrumb', ['title' => 'Not Found Page']) --}}
    <section class="section-long">
        <div class="container">
            <div class="status-entity">
                <div class="entity-icon">4<span class="text-theme">0</span>4</div>
                <h4 class="entity-title">Sorry!</h4>
                <p class="entity-text">It looks like this page no longer exists</p>
                <div class="entity-actions">
                    <a class="btn btn-theme" href="{{ route('theme.index') }}">Back To Home</a>
                </div>
            </div>
        </div>
    </section>
@endsection
