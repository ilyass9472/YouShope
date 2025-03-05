@extends('layouts.app')

@section('content')
<div class="py-12 absolute">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="font-semibold text-xl">Gestion des montres</h2>
                    <a href="{{ route('watches.create') }}" class="px-4 py-2 bg-yellow-500 rounded-md text-black font-bold hover:bg-yellow-600">
                        Ajouter une montre
                    </a>
                </div>

                @if(session('success'))
                    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6" role="alert">
                        <p>{{ session('success') }}</p>
                    </div>
                @endif

                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="py-3 px-4 text-left">Image</th>
                                <th class="py-3 px-4 text-left">Modèle</th>
                                <th class="py-3 px-4 text-left">Référence</th>
                                <th class="py-3 px-4 text-left">Collection</th>
                                <th class="py-3 px-4 text-left">Prix</th>
                                <th class="py-3 px-4 text-left">Édition limitée</th>
                                <th class="py-3 px-4 text-left">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @forelse ($watches as $watch)
                                <tr>
                                    <td class="py-3 px-4">
                                        @if($watch->photo)
                                            <img src="{{ asset('storage/' . $watch->photo) }}" alt="{{ $watch->model }}" class="w-20 h-20 object-cover">
                                        @else
                                            <div class="w-20 h-20 bg-gray-200 flex items-center justify-center">
                                                <span class="text-gray-500 text-xs">Aucune image</span>
                                            </div>
                                        @endif
                                    </td>
                                    <td class="py-3 px-4">{{ $watch->model }}</td>
                                    <td class="py-3 px-4">{{ $watch->reference }}</td>
                                    <td class="py-3 px-4">{{ $watch->collection }}</td>
                                    <td class="py-3 px-4">{{ number_format($watch->price, 2, ',', ' ') }} €</td>
                                    <td class="py-3 px-4">
                                        @if($watch->is_limited)
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                                Limitée à {{ $watch->limited_pieces }} pièces
                                            </span>
                                        @else
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                                Non
                                            </span>
                                        @endif
                                    </td>
                                    <td class="py-3 px-4">
                                        <div class="flex space-x-2">
                                            <a href="{{ route('watches.show', $watch) }}" class="text-blue-600 hover:text-blue-900">
                                                Voir
                                            </a>
                                            <a href="{{ route('watches.edit', $watch) }}" class="text-yellow-600 hover:text-yellow-900">
                                                Modifier
                                            </a>
                                            <form action="{{ route('watches.destroy', $watch) }}" method="POST" class="inline" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette montre?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-900">
                                                    Supprimer
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="py-6 px-4 text-center text-gray-500">
                                        Aucune montre trouvée. <a href="{{ route('watches.create') }}" class="text-blue-600 hover:underline">Ajouter une montre</a>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="mt-6">
                    {{ $watches->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
