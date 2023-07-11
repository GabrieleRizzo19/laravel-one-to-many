@extends('layouts.admin')

@section('content')
    
    <div class="container my-3">
        <div class="row">

            <h1 class="text-center">MODIFICA IL PROGETTO</h1>

            @if ($errors->any())

                <ul>
                    @foreach ($errors->all() as $error)
                        {{ $error }}
                    @endforeach
                </ul>
                
            @endif
            <form action="{{ route('admin.projects.update', $project) }}" method="POST" class="needs-validation">
                @csrf

                @method('PUT')
            
                <label for="title">Titolo</label>
                <input class="form-control mb-3" type="text" name="title" id="title" value="{{ $project['title'] }}">
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror

                <label for="description">Descrizione</label>
                <textarea class="form-control mb-3" name="description" id="description" cols="30" rows="10">{{ $project['description'] }}</textarea>
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror

                <label for="image">URL Immagine</label>
                <input class="form-control mb-3" type="text" name="image" id="image" value="{{ $project['image'] }}">
                @error('image')
                    <div class="text-danger">{{ $message }}</div>
                @enderror

                <input type="submit" class="form-control btn btn-primary"> 

            </form>
        </div>
    </div>

@endsection