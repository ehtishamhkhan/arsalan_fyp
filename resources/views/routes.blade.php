@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
    <div class="header bg-gradient-primary py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mt-4 mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-12">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col-1">
                                    <h3 class="mb-0">Routes</h3>
                                </div>
                                <div class="col-11 text-right">
                                    <a href="addroutes" class="btn btn-sm btn-primary">Add New Route</a>
                                </div>
                            </div>
                            <div class="row align-items-center mt-4">

                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col">Alias</th>
                                                <th scope="col">View</th>
                                                <th scope="col"></th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($routes as $route)
                                                <tr>
                                                    <td>{{$route->alias}}</td>
                                                    <td>
                                                        <a class="nav-link" href="{{ $route->url }}" target="_blank">
                                                            <i class="ni ni-pin-3 text-red"></i> {{ __('') }}
                                                        </a>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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
