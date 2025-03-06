{{-- @extends('layouts.app')

@section('content')
<div class="absolute container mx-auto px-4 py-8">
    <h2 class="relative text-3xl font-bold text-center mb-6 text-white">Nos Montres</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @foreach ($watches as $watch)
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="{{ asset('storage/' . $watch->photo) }}" class="w-full h-64 object-cover" alt="{{ $watch->model }}">

                <div class="p-4">
                    <h5 class="text-xl font-semibold text-gray-900">{{ $watch->model }}</h5>
                    <p class="text-gray-600"><strong>Référence:</strong> {{ $watch->reference }}</p>
                    <p class="text-gray-600"><strong>Collection:</strong> {{ $watch->collection }}</p>
                    <p class="text-gray-800 font-bold"><strong>Prix:</strong> {{ $watch->price }} €</p>
                    <p class="text-gray-700 text-sm mt-2">{{ $watch->description }}</p>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="mt-6 flex justify-center">
        {{ $watches->links() }}
    </div>
</div>
@endsection --}}
@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-12">
    <h2 class="text-4xl font-bold text-white mb-8">TOURBILLON</h2>

    <!-- Alpine.js Component -->
    <div x-data="{ open: false, selectedWatch: null }">
        
        <!-- Grid des montres -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            @foreach ($watches as $watch)
                <div class="relative bg-gray-900 rounded-xl overflow-hidden shadow-lg cursor-pointer transition-transform transform hover:scale-105 hover:shadow-2xl"
                     @click="open = true; selectedWatch = {{ $watch }}">
                    
                    <!-- Image de la montre -->
                    <img src="{{ asset('storage/' . $watch->photo) }}" class="w-full h-64 object-cover opacity-80" alt="{{ $watch->model }}">

                    <!-- Badge "Limited" -->
                    <div class="absolute top-3 left-3 bg-red-600 text-white text-xs font-bold px-3 py-1 rounded-lg uppercase">
                        Limited to 15 Pieces
                    </div>

                    <!-- Infos -->
                    <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/80 to-transparent">
                        <h5 class="text-white text-xl font-semibold">{{ $watch->model }}</h5>
                        <p class="text-gray-300 text-sm">{{ $watch->reference }}</p>
                    </div>

                </div>
            @endforeach
        </div>

        <!-- MODAL -->
        <!-- MODAL -->
<div x-show="open" x-transition.opacity class="fixed inset-0 bg-black/70 flex items-center justify-center p-4 z-50">
    <div x-show="open" x-transition.duration.300ms class="bg-gray-900 rounded-lg p-6 max-w-lg w-full relative">
        <button @click="open = false" class="absolute top-2 right-2 text-gray-300 hover:text-white text-lg">&times;</button>

        <template x-if="selectedWatch">
            <div class="max-h-[80vh] overflow-y-auto">
                <!-- Image -->
                <img :src="'/storage/' + selectedWatch.photo" class="w-full h-72 object-cover rounded-md mb-4" alt="Watch Image">

                <!-- Infos -->
                <h2 class="text-white text-2xl font-bold" x-text="selectedWatch.model"></h2>
                <p class="text-gray-400"><strong>Référence:</strong> <span x-text="selectedWatch.reference"></span></p>
                <p class="text-gray-400"><strong>Collection:</strong> <span x-text="selectedWatch.collection"></span></p>
                <p class="text-gray-200 font-bold text-lg mt-2"><strong>Prix:</strong> <span x-text="selectedWatch.price"></span> €</p>
                <p class="text-gray-400 text-sm mt-2" x-text="selectedWatch.description"></p>

                <!-- Formulaire -->
                <form method="POST" action="{{ route('cart.add') }}" class="mt-4 space-y-4">
                    @csrf
                    <input type="hidden" name="watch_id" x-bind:value="selectedWatch.id">

                    <!-- Quantité -->
                    <label class="block text-gray-400">Quantité:</label>
                    <input type="number" name="quantity" min="1" value="1" class="w-full p-2 rounded bg-gray-800 text-white border border-gray-700">

                    <!-- Couleur -->
                    <label class="block text-gray-400">Couleur:</label>
                    <select name="color" class="w-full p-2 rounded bg-gray-800 text-white border border-gray-700">
                        <option value="black">Noir</option>
                        <option value="silver">Argent</option>
                        <option value="gold">Or</option>
                    </select>

                    <!-- Version -->
                    <label class="block text-gray-400">Version:</label>
                    <select name="version" class="w-full p-2 rounded bg-gray-800 text-white border border-gray-700">
                        <option value="standard">Standard</option>
                        <option value="luxury">Luxe</option>
                    </select>

                    <!-- Ajouter au Panier -->
                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 rounded-lg">
                        Ajouter au Panier
                    </button>
                </form>
            </div>
        </template>
    </div>
</div>


    <!-- Pagination -->
    <div class="mt-10 flex justify-center">
        {{ $watches->links() }}
    </div>
</div>
@endsection
