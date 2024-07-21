@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col mt-4">
                <div class="card">
                    <div class="card-header bg-dark text-light">{{ __('Dashboard') }}</div>

                    <div class="card-body bg-dark text-light">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('Login effettuato!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
