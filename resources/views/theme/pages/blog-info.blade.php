@extends('theme.layout')

@section('contant')

@include('theme.partials.breadcrumb' ,['title' =>$blog->title])
  <div class="container">
      <div class="sidebar-container">
          <div class="content">
              <section class="section-long section-spaced">
                  <div class="section-line">
                      <article class="article-tape-entity">
                          <div class="entity-preview">
                              <div class="embed-responsive embed-responsive-16by9">
                                  <img class="embed-responsive-item"src="{{ asset("storage/blogs/$blog->image") }}" alt="{{ $blog->title }}"  />
                              </div>
                              <div class="entity-date">
                                  <div class="tape-block tape-horizontal tape-single bg-theme text-white">
                                      <div class="tape-dots"></div>
                                      <div class="tape-content m-auto">{{ $blog->created_at->format('d M Y') }}</div>
                                      <div class="tape-dots"></div>
                                  </div>
                              </div>
                          </div>
                          <div class="entity-content">
                              <h2 class="entity-title">{{ $blog->title }}</h2>
                              
                          </div>
                      </article>
                      <div class="section-description">
                          <p class="lead">{{ $blog->description }}</p>
                      </div>
                      <div class="section-bottom">
                          <div class="row">
                              <div class="mr-auto col-auto">
                                  <div class="entity-links">
                                      <div class="entity-list-title">Share:</div>
                                      <a class="content-link entity-share-link" href="#"><i class="fab fa-facebook-f"></i></a>
                                      <a class="content-link entity-share-link" href="#"><i class="fab fa-twitter"></i></a>
                                      <a class="content-link entity-share-link" href="#"><i class="fab fa-google-plus-g"></i></a>
                                      <a class="content-link entity-share-link" href="#"><i class="fab fa-pinterest-p"></i></a>
                                      <a class="content-link entity-share-link" href="#"><i class="fab fa-instagram"></i></a>
                                  </div>
                              </div>
                              <div class="col-auto">
                                  <div class="entity-links">
                                      <div class="entity-list-title">Tags:</div>
                                      <a class="content-link" href="#">family</a>,&nbsp;
                                      <a class="content-link" href="#">gaming</a>,&nbsp;
                                      <a class="content-link" href="#">historical</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="section-line">

                    @if (count($blog->comments) > 0)
                        @foreach ($blog->comments as $comment)
                            <div class="comment-entity">
                                <div class="entity-inner">
                                    <div class="entity-content">
                                        <h4 class="entity-title">{{ $comment->name }}</h4>
                                        <p class="entity-subtext">{{ $comment->created_at->format('d M Y') }}</p>
                                        <p class="entity-text">{{ $comment->review }}
                                        </p>
                                    </div>
                                    <div class="entity-extra">
                                        <div class="grid-md row">
                                            <div class="col-12 col-sm-auto">
                                                <div class="entity-rating">

                                                    @for ($i = 0; $i < 10; $i++)
                                                        @if ($i < $comment->rating)
                                                            <span class="entity-rating-icon text-theme"><i
                                                                    class="fas fa-star"></i></span>
                                                        @else
                                                            <span class="entity-rating-icon"><i
                                                                    class="fas fa-star"></i></span>
                                                        @endif
                                                    @endfor
                                                </div>
                                            </div>
                                            <div class="ml-sm-auto col-auto">
                                                <a class="content-link" href="#"><i
                                                        class="fas fa-reply"></i>&nbsp;&nbsp;reply</a>
                                            </div>
                                            <div class="col-auto">
                                                <a class="content-link" href="#"><i
                                                        class="fas fa-quote-left"></i>&nbsp;&nbsp;quote</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif

                </div>
                <div class="section-line">
                    <div class="section-head">
                        <h2 class="section-title text-uppercase">Add comment</h2>
                    </div>
                    @if (session('statusCreateComment'))
                        <div class="alert alert-success" role="alert">
                            {{ session('statusCreateComment') }}
                        </div>
                    @endif
                    <form action="{{ route('comment.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name='blog_id' value="{{ $blog->id }}">
                        <div class="row form-grid">
                            <div class="col-12 col-sm-6">
                                <div class="input-view-flat input-group">
                                    <input class="form-control" name="name" type="text" placeholder="Name" />
                                </div>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="input-view-flat input-group">
                                    <input class="form-control" name="email" type="email" placeholder="Email" />
                                </div>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="input-view-flat input-group">
                                    <textarea class="form-control" name="review" placeholder="Add your review"></textarea>
                                </div>
                                @error('review')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="rating-line">
                                    <label>Rating:</label>
                                    <div class="form-rating" name="rating">
                                        <input type="radio" id="rating-10" name="rating" value="10" />
                                        <label for="rating-10">
                                            <span class="rating-active-icon"><i class="fas fa-star"></i></span>
                                            <span class="rating-icon"><i class="far fa-star"></i></span>
                                        </label>
                                        <input type="radio" id="rating-9" name="rating" value="9" />
                                        <label for="rating-9">
                                            <span class="rating-active-icon"><i class="fas fa-star"></i></span>
                                            <span class="rating-icon"><i class="far fa-star"></i></span>
                                        </label>
                                        <input type="radio" id="rating-8" name="rating" value="8" />
                                        <label for="rating-8">
                                            <span class="rating-active-icon"><i class="fas fa-star"></i></span>
                                            <span class="rating-icon"><i class="far fa-star"></i></span>
                                        </label>
                                        <input type="radio" id="rating-7" name="rating" value="7" />
                                        <label for="rating-7">
                                            <span class="rating-active-icon"><i class="fas fa-star"></i></span>
                                            <span class="rating-icon"><i class="far fa-star"></i></span>
                                        </label>
                                        <input type="radio" id="rating-6" name="rating" value="6" />
                                        <label for="rating-6">
                                            <span class="rating-active-icon"><i class="fas fa-star"></i></span>
                                            <span class="rating-icon"><i class="far fa-star"></i></span>
                                        </label>
                                        <input type="radio" id="rating-5" name="rating" value="5" />
                                        <label for="rating-5">
                                            <span class="rating-active-icon"><i class="fas fa-star"></i></span>
                                            <span class="rating-icon"><i class="far fa-star"></i></span>
                                        </label>
                                        <input type="radio" id="rating-4" name="rating" value="4" />
                                        <label for="rating-4">
                                            <span class="rating-active-icon"><i class="fas fa-star"></i></span>
                                            <span class="rating-icon"><i class="far fa-star"></i></span>
                                        </label>
                                        <input type="radio" id="rating-3" name="rating" value="3" />
                                        <label for="rating-3">
                                            <span class="rating-active-icon"><i class="fas fa-star"></i></span>
                                            <span class="rating-icon"><i class="far fa-star"></i></span>
                                        </label>
                                        <input type="radio" id="rating-2" name="rating" value="2" />
                                        <label for="rating-2">
                                            <span class="rating-active-icon"><i class="fas fa-star"></i></span>
                                            <span class="rating-icon"><i class="far fa-star"></i></span>
                                        </label>
                                        <input type="radio" id="rating-1" name="rating" value="1" />
                                        <label for="rating-1">
                                            <span class="rating-active-icon"><i class="fas fa-star"></i></span>
                                            <span class="rating-icon"><i class="far fa-star"></i></span>
                                        </label>
                                    </div>
                                </div>
                                @error('rating')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <button class="px-5 btn btn-theme" type="submit">Send</button>
                            </div>
                        </div>
                    </form>
                </div>

              </section>
          </div>
         @include('theme.partials.sidbar')
      </div>
  </div>
@endsection