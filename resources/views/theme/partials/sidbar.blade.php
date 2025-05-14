@php
    use App\Models\Blog;
    $blogs = Blog::latest()->take(6)->get();
@endphp
<div class="sidebar section-long order-lg-last">
    <section class="section-sidebar">
        <div class="section-head">
            <h2 class="section-title text-uppercase">Latest articles</h2>
        </div>
        @if (count($blogs) > 0)
            @foreach ($blogs as $blog)
                @php
                    $slug = Str::slug($blog->title);
                @endphp
                <div class="article-short-line-entity">
                    <a class="entity-preview" href="{{ route('blog.show', ['blog' => $slug]) }}">
                        <span class="embed-responsive embed-responsive-16by9">
                            <img class="embed-responsive-item" src="{{ asset("storage/blogs/$blog->image") }}"
                                alt="{{ $blog->title }}" />
                        </span>
                    </a>
                    <div class="entity-content">
                        <h4 class="entity-title">
                            <a class="content-link"
                                href="{{ route('blog.show', ['blog' => $slug]) }}">{{ $blog->title }}</a>
                        </h4>
                        <p class="entity-subtext">{{ $blog->created_at->format('d M Y') }}</p>
                    </div>
                </div>
            @endforeach
        @endif

    </section>
    <section class="section-sidebar">
        <a class="d-block" href="#">
            <img class="w-100" src="http://via.placeholder.com/350x197" alt="" />
        </a>
    </section>
</div>
