@extends('layouts.app')

@section('content')
    
    <a href="{{ route('products.create') }}">ajout une produit/a>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <table border="1">
        <thead>
            <tr>
                <th>photo</th>
                <th>title</th>
                
                <th>prix</th>
                <th>desription</th>
                <th>update</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>
                        @if($product->photo)
                            <img src="{{ asset('storage/' . $product->photo) }}" width="50">
                        @else
                            there is no photo
                        @endif
                    </td>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->prix }} $</td>
                    <td>{{ $product->description }}</td>
                    <td>
                        <a href="{{ route('products.edit', $product->id) }}">update</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">حذف</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
