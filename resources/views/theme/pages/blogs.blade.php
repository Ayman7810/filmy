@extends('theme.layout')

@section('contant')
    @include('theme.partials.breadcrumb', ['title' => 'News blocks'])
    <div class="container">
        <div class="sidebar-container">
            <div class="content">
                <section class="section-long">
                    @if (count($blogs) > 0)
                        @foreach ($blogs as $blog)
                        @php
                            $slug = Str::slug($blog->title);
                        @endphp
                            <article class="article-tape-entity">
                                <a class="entity-preview" href="{{ route('blog.show',['blog' => $slug]) }}" data-role="hover-wrap">
                                    <span class="embed-responsive embed-responsive-16by9">
                                        <img class="embed-responsive-item" src="{{ asset("storage/blogs/$blog->image") }}"
                                            alt="" />
                                    </span>
                                    <span class="entity-date">
                                        <span class="tape-block tape-horizontal tape-single bg-theme text-white">
                                            <span class="tape-dots"></span>
                                            <span
                                                class="tape-content m-auto">{{ $blog->created_at->format('d M Y') }}</span>
                                            <span class="tape-dots"></span>
                                        </span>
                                    </span>
                                    <span class="d-over bg-black-80 collapse animated faster" data-show-class="fadeIn show"
                                        data-hide-class="fadeOut show">
                                        <span class="m-auto"><i class="fas fa-search"></i></span>
                                    </span>
                                </a>
                                <div class="entity-content">
                                    <h4 class="entity-title">
                                        <a class="content-link"
                                        href="{{ route('blog.show',['blog' => $slug]) }}">{{ $blog->title }}</a>
                                    </h4>
                                    <p class="text-short entity-text">{{ $blog->description }}
                                    </p>
                                    <div class="entity-actions d-flex     justify-content-between">
                                        <a class="text-uppercase"href="{{ route('blog.show',['blog' => $slug]) }}">Read
                                            More</a>
                                        <div class="info info-short">
                                            <span class="text-theme info-icon"><i class="fas fa-comment"></i></span>
                                            <span class="info-text">{{ count($blog->comments) }}</span>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endforeach

                        <div class="section-bottom">
                            <div class="paginator">
                                {{ $blogs->render('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    @endif

                </section>
            </div>
            @include('theme.partials.sidbar')
        </div>
    </div>
@endsection
