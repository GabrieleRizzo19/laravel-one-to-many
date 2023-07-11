@extends('layouts.admin')

@section('content')
    
    <div class="container">
        <div class="row">

            <h1 class="text-center">CREA UN NUOVO PROGETTO</h1>

            @if ($errors->any)

                <ul>
                    @foreach ($errors->any as $error)
                        {{ $error }}
                    @endforeach
                </ul>
                
            @endif
            <form action="{{ route('admin.projects.store') }}" method="POST">
                @csrf
            
                <label for="title">Titolo</label>
                <input class="form-control mb-3" type="text" name="title" id="title" value="{{ old('title') }}">
                @error('title')
                    <div class="text-danger mb-3">{{ $message }}</div>
                @enderror

                <label for="description">Descrizione</label>
                <textarea class="form-control mb-3" name="description" id="description" cols="30" rows="10">{{ old('description') }}</textarea>
                @error('description')
                    <div class="text-danger mb-3">{{ $message }}</div>
                @enderror

                <label for="type_id">Tipo</label>
                <select class="form-control mb-3" name="type_id" id="type_id">
                    <option selected disabled>Seleziona il tipo</option>
                    @foreach ($typeArray as $type)
                        <option value="{{ $type['id'] }}" @selected(old("type_id")== $type['id'])>{{ $type['name'] }}</option>
                    @endforeach
                </select>
                @error('type_id')
                    <div class="text-danger mb-3">{{ $message }}</div>
                @enderror

                <label for="image">URL Immagine</label>
                <input class="form-control mb-3" type="text" name="image" id="image" value="{{ old('image') }}">
                @error('image')
                    <div class="text-danger mb-3">{{ $message }}</div>
                @enderror

                <input type="submit" class="form-control btn btn-primary"> 

            </form>
        </div>
    </div>

@endsection