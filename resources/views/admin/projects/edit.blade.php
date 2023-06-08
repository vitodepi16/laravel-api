@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="">Modifica il tuo progetto</h1>
        <form action="{{ route('admin.projects.update', $project->slug) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label ">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                    aria-describedby="titleHelp" value="{{ $project->title }}">
                <div id="titleHelp" class="form-text">Modifica il nome del proggetto</div>
                @error('title')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="thumb" class="form-label ">Immagine</label>
                <input type="text" class="form-control  @error('image') is-invalid @enderror" name="image"
                    id="thumb" aria-describedby="thumbHelp" value="{{ $project->image }}">
                <div id="thumbHelp" class="form-text">Modifica l'immagine</div>
                @error('image')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <select class="form-select" name="type_id" id="type_id">
                <option selected>Seleziona tecnologia</option>
                @foreach ($types as $type)
                    <option value="{{ $type->id }} "
                        {{ $type->id == old('type_id', $project->type_id) ? 'selected' : '' }}>
                        {{ $type->name }}</option>
                @endforeach

            </select>


            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
    </div>
@endsection
