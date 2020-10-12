@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
    <div class="header bg-gradient-primary py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mt-4 mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-8">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col-lg-4 col-md-4 text-left">
                                    <h3 class="mb-0">Add New Route</h3>
                                </div>
                            </div>
                            <div class="row align-items-center col-lg-12 col-md-12">
                                <div class="card-body px-lg-5 py-lg-5">
                                    <div class="text-center text-muted mb-4">
                                        <small>{{ __('Input driver information') }}</small>
                                    </div>
                                    <form role="form" method="POST" action="{{ route('addnewroute') }}">
                                        @csrf

                                        <div class="form-group{{ $errors->has('alias') ? ' has-danger' : '' }}">
                                            <div class="input-group input-group-alternative mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-badge"></i></span>
                                                </div>
                                                <input class="form-control{{ $errors->has('alias') ? ' is-invalid' : '' }}" placeholder="{{ __('Alias') }}" type="textarea" name="alias" value="{{ old('alias') }}" required autofocus>
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('url') ? ' has-danger' : '' }}">
                                            <div class="input-group input-group-alternative mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-badge"></i></span>
                                                </div>
                                                <input class="form-control{{ $errors->has('url') ? ' is-invalid' : '' }}" placeholder="{{ __('URL') }}" type="text" name="url" value="{{ old('url') }}" required autofocus>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary mt-4">{{ __('Add Route') }}</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div> --}}
    </div>

    <div class="container mt--10 pb-5"></div>
@endsection
