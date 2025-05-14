@extends('theme.layout')

@section('contant')
    @include('theme.partials.breadcrumb', ['title' => 'Login Acount'])
    <section>
        <div class="gmap-with-map">
            <div class="gmap" data-lat="-33.878897" data-lng="151.103737"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 ml-lg-auto">
                        <div class="gmap-form bg-white">
                            <h4 class="form-title text-uppercase">Login
                                <span class="text-theme">Acount</span>
                            </h4>
                            <p class="form-text">We understand your requirement and provide quality works</p>
                            <form autocomplete="off" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="row form-grid">
                                    <div class="col-sm-6">
                                        <div class="input-view-flat input-group">
                                            <input class="form-control" name="email" type="email" placeholder="Email" value="{{ old('email') }}" />
                                        </div>
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-view-flat input-group">
                                            <input class="form-control" name="password" type="password" placeholder="Password"  />
                                        </div>
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>
                                   
                                    <div class="col-6">
                                        <button class="px-5 btn btn-theme" type="submit">Send</button>
                                    </div>
                                    <div class="col-6">
                                        <span>New customer ? <a href="{{ route('register') }}">Sign up for an account</a></span>
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
