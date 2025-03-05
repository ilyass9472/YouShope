@extends('layouts.app')

@section('content')
    <h2>ajout une produit/h2>

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="title" placeholder="nom du produit" required>
        <input type="number" name="prix" placeholder="prix" required>
        <textarea name="description" placeholder="description"></textarea>
        <input type="file" name="photo">
        <button type="submit">save</button>
    </form>
@endsection
