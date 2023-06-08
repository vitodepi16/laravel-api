@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4">
            {{ __('Dashboard') }}
        </h2>
        <div class="row justify-content-center">
            <div class="col">
                <div class="card p-3">
                    <div class="card-header">{{ __('Benvenuto!') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('Ti sei loggato con successo!') }}
                    </div>
                    <div class="d-flex ">
                        <a class="btn btn-outline-success mx-auto" href="{{ route('admin.projects.index') }}">Vai ai tuoi
                            progetti</a>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
