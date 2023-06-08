@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="text-white mt-3">Modifica il tuo progetto</h1>
        <form action="{{ route('admin.projects.update', $project->slug) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label text-white ">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                    aria-describedby="titleHelp" value="{{ $project->title }}">

                @error('title')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="thumb" class="form-label text-white">Immagine</label>
                <input type="text" class="form-control  @error('image') is-invalid @enderror" name="image"
                    id="thumb" aria-describedby="thumbHelp" value="{{ $project->image }}">
                <div id="thumbHelp" class="form-text text-white">Modifica l'immagine</div>
                @error('image')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <label for="thumb" class="form-label text-white">Seleziona tecologia</label>
            <select class="form-select " name="type_id" id="type_id">

                <option selected class="text-white">Seleziona tecnologia</option>
                @foreach ($types as $type)
                    <option value="{{ $type->id }} "
                        {{ $type->id == old('type_id', $project->type_id) ? 'selected' : '' }}>
                        {{ $type->name }}</option>
                @endforeach

            </select>

            <div class="p-3 d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-outline-success ms-0  m-3">Submit</button>
                <button type="reset" class="btn btn-outline-primary m-3">Reset</button>
            </div>

        </form>
    </div>
@endsection
