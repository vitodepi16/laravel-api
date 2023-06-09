@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="text-white">I tuoi progetti</h1>
        <div class="text-end p-3">
            <a class="btn btn-outline-success " href="{{ route('admin.projects.create') }}">Crea nuovo post</a>
        </div>

        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="row">
            @foreach ($projects as $project)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex  p-3 mt-4">
                    <div class="card" style="width: 18rem;">

                        <img class="img-thumbnail" src="{{ $project->image }}" alt="{{ $project->type->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $project->title }}</h5>
                            <p class="card-text">{{ $project->type->description }}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Progetto creato usando: <strong> {{ $project->type->name }}</strong>
                            </li>
                            <li class="list-group-item">Creato il: {{ $project->created_at }}</li>

                        </ul>
                        <div class="card-body d-flex ">

                            <form action="{{ route('admin.projects.destroy', $project->slug) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a class="btn-outline-primary btn
                            mx-auto"
                                    href="{{ route('admin.projects.show', $project->slug) }}"><i
                                        class="fa-solid fa-eye"></i></a>
                                <button type='submit' class=" mx-auto delete-button btn btn-outline-danger"
                                    data-item-title="{{ $project->title }}"> <i class="fa-solid  fa-trash"></i></button>
                            </form>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @include('partials.modal-delete-modal')
@endsection
