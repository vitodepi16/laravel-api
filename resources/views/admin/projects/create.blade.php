@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="text-white fs-1 mt-4 mb-4">Crea il tuo Post</h1>
        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="text-white  mb-2" for="title">Titolo</label>
                <input type="text" class="form-control @error('title')
                is-invalid
            @enderror"
                    name="title" id="title" required maxlength="150" minlength="3">
                @error('title')
                    <div class="invalid-feedback ">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="text-white  mb-2" for="image">Carica l'url della tua immagine</label>
                <input type="url" class="form-control @error('image')
                is-invalid
            @enderror"
                    name="image" id="image" required maxlength="255">
                @error('image')
                    {{ $message }}
                @enderror
            </div>
            <div class="mb-3">
                <label class="text-white mb-2" for="body">Scrivi la descrizione del tuo testo</label>
                <textarea name="body" id="body" rows="10"
                    class="form-control  @error('body')
                is-invalid
            @enderror"></textarea>
                @error('body')
                    {{ $message }}
                @enderror
            </div>
            <label class="text-white mb-2">Seleziona tecnologia</label>
            <select class="form-select" name="type_id" id="type_id" aria-label="Default select example">

                <option selected></option>
                @foreach ($types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach

            </select>
            <div class="form-group">
                <p class="text-white mt-3">Seleziona i Tag:</p>
                @foreach ($tags as $tag)
                    <div>
                        <input type="checkbox" name="tags[]" value="{{ $tag->id }}" class="form-check-input"
                            {{ in_array($tag->id, old('tags', [])) ? 'checked' : '' }}>
                        <label for="" class="text-white form-check-label">{{ $tag->name }}</label>
                    </div>
                @endforeach
                @error('tags')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mt-3 d-grid gap-2 d-md-block">
                <button type="submit" class="btn btn-outline-success">Save</button>
                <button type="reset" class="btn btn-outline-light">Reset</button>
            </div>

        </form>
        <div class="d-grid gap-2 d-md-block">
            <a class="btn mt-3 btn-outline-primary btn-lg mx-auto" href="{{ route('admin.projects.index') }}">Torna ai
                tuoi
                progetti</a>
        </div>

    </div>
    </div>
    <script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">
        bkLib.onDomLoaded(nicEditors.allTextAreas);
    </script>
    </div>
@endsection
