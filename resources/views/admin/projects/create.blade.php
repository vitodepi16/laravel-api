@extends('layouts.admin')

@section('content')
    <h1>Create Post</h1>
    <form action="{{ route('admin.projects.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title">Title</label>
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
            <label for="image">Image url</label>
            <input type="url" class="form-control @error('image')
                is-invalid
            @enderror"
                name="image" id="image" required maxlength="255">
            @error('image')
                {{ $message }}
            @enderror
        </div>
        <div class="mb-3">
            <label for="body">Body</label>
            <textarea name="body" id="body" rows="10"
                class="form-control @error('body')
                is-invalid
            @enderror"></textarea>
            @error('body')
                {{ $message }}
            @enderror
        </div>
        <select class="form-select" name="type_id" id="type_id" aria-label="Default select example">
            <option selected>Seleziona tecnologia</option>
            @foreach ($types as $type)
                <option value="{{ $type->id }}">{{ $type->name }}</option>
            @endforeach

        </select>
        <button type="submit" class="btn btn-success">Save</button>
        <button type="reset" class="btn btn-primary">Reset</button>
    </form>
    <script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">
        bkLib.onDomLoaded(nicEditors.allTextAreas);
    </script>
@endsection
