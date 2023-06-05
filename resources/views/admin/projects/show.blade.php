@extends('layouts.admin')

@section('content')
    <main>
        <div class="container">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4 col-lg-3  d-flex p-3 mb-4 mt-4">
                    <div class="card d-flex">
                        <div class="card-img-top">
                            <img class="img-fluid" src="{{ $project->image }}" alt="{{ $project->title }}">
                        </div>
                        <div class="card-body">
                            <h2>{{ $project->title }}</h2>
                            <p>{{ $project->description }}</p>
                        </div>

                    </div>

                </div>
                <div class="d-grid gap-2 d-md-block">

                    {{-- <form action="{{ route('admin.projects.destroy', $project) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger delete-button">Elimina il
                            progetto</button>
                    </form> --}}
                </div>

            </div>
        </div>
    </main>
@endsection
