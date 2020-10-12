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
                                    <h3 class="mb-0">Add New Point</h3>
                                </div>
                            </div>
                            <div class="row align-items-center col-lg-12 col-md-12">
                                <div class="card-body px-lg-5 py-lg-5">
                                    <div class="text-center text-muted mb-4">
                                        <small>{{ __('Input driver information') }}</small>
                                    </div>
                                    <form role="form" method="POST" action="{{ route('addnewpoint') }}">
                                        @csrf

                                        <div class="form-group">
                                            <div class="input-group input-group-alternative mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-badge"></i></span>
                                                </div>
                                                <select class="form-control" placeholder="{{ __('Driver') }}" name="driver_id" required>
                                                    @foreach($drivers as $driver)
                                                        <option value="{{ $driver->id }}">
                                                            {{ $driver->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group input-group-alternative mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-badge"></i></span>
                                                </div>
                                                <select class="form-control" placeholder="{{ __('Route') }}" name="route_id" required>
                                                    @foreach($routes as $route)
                                                        <option value="{{ $route->id }}">
                                                            {{ $route->alias }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group input-group-alternative mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-badge"></i></span>
                                                </div>
                                                <input class="form-control" placeholder="{{ __('Vehicle Registration No') }}" type="text" name="vehicle_reg_no" required autofocus>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary mt-4">{{ __('Add Point') }}</button>
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
