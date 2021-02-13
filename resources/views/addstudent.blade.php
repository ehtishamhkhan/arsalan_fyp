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
                                    <h3 class="mb-0">Add Student</h3>
                                </div>
                            </div>
                            <div class="row align-items-center col-lg-12 col-md-12">
                                <div class="card-body px-lg-5 py-lg-5">
                                    <div class="text-center text-muted mb-4">
                                        <small>{{ __('Input student information') }}</small>
                                    </div>
                                    <form role="form" method="POST" action="{{ route('addnewstudent') }}">
                                        @csrf

                                        <div class="form-group{{ $errors->has('user_id') ? ' has-danger' : '' }}">
                                            <div class="input-group input-group-alternative mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-badge"></i></span>
                                                </div>
                                                <input class="form-control{{ $errors->has('user_id') ? ' is-invalid' : '' }}" placeholder="{{ __('Student Id') }}" type="number" name="user_id" value="{{ old('user_id') }}" required autofocus>
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                            <div class="input-group input-group-alternative mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                                                </div>
                                                <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" type="text" name="name" value="{{ old('name') }}" required autofocus>
                                            </div>
                                        </div>

                                         <div class="form-group{{ $errors->has('contact') ? ' has-danger' : '' }}">
                                            <div class="input-group input-group-alternative mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-mobile-button"></i></span>
                                                </div>
                                                <input class="form-control{{ $errors->has('contact') ? ' is-invalid' : '' }}" placeholder="{{ __('Contact No.') }}" type="text" name="contact" value="{{ old('contact') }}" required autofocus>
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                            <div class="input-group input-group-alternative">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                                </div>
                                                <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Password') }}" type="password" name="password" required>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary mt-4">{{ __('Add Student') }}</button>
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
