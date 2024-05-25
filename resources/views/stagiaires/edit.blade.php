@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-5 mb-4">Modification stagiaire</h1>
        <form action="{{ route('stagiaires.update', $stagiaire->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nom" class="form-label">Nom:</label>
                <input type="text" class="form-control" id="nom" name="nom" value="{{ $stagiaire->nom }}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $stagiaire->email }}">
            </div>
            <div class="mb-3">
                <label for="formateur_id" class="form-label">Prof:</label>
                <select class="form-control" id="formateur_id" name="formateur_id">
                    @foreach ($formateurs as $formateur)
                        <option value="{{ $formateur->id }}" {{ $stagiaire->formateur_id == $formateur->id ? 'selected' : '' }}>
                            {{ $formateur->nom }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Mettre à jour</button>
        </form>
    </div>
@endsection
