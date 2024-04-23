@extends('layouts.app')

@section('content')
    <div class="container py-5">
        
        <h1>Inserisci un nuovo progetto</h1>

        <form action="{{route('admin.types.store')}}" method="POST">

            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Tipo</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name')}}">
                @error('name')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description">
                    {{old('description')}}
                </textarea>
                @error('description')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Salva</button>
            <button type="submit" class="btn btn-warning">
                <a href="/admin/types" class="text-white text-decoration-none">Annulla</a>
            </button>

        </form>

    </div>
@endsection