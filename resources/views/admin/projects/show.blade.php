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
                        <div class="d-grid gap-2  d-flex">
                            <a href="{{ route('admin.projects.edit', $project->slug) }}"><i
                                    class="fa-solid fa-pencil"></i></a>
                            <form action="{{ route('admin.projects.destroy', $project->slug) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type='submit' class="delete-button btn" data-item-title="{{ $project->title }}"> <i
                                        class="fa-solid  fa-trash"></i></button>
                            </form>
                        </div>

                    </div>

                </div>


            </div>
        </div>
    </main>
@endsection
