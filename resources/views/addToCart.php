@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white shadow-lg rounded-lg p-6">
            @if(session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6" role="alert">
                    <p>{{ session('success') }}</p>
                </div>
            @endif

            <!-- Cart Summary -->
            <div class="mb-6 bg-gray-100 p-4 rounded-lg">
                <h2 class="text-xl font-semibold mb-4">Panier 
                    <span class="text-sm text-gray-600">({{ count(session('cart', [])) }} articles)</span>
                </h2>
                @php
                    $cartTotal = 0;
                    $cart = session('cart', []);
                @endphp
                @if(!empty($cart))
                    <div class="space-y-2">
                        @foreach($cart as $item)
                            @php
                                $cartTotal += $item['price'] * $item['quantity'];
                            @endphp
                            <div class="flex justify-between items-center border-b pb-2">
                                <div>
                                    <span class="font-medium">{{ $item['model'] }}</span>
                                    <span class="text-sm text-gray-600 ml-2">x {{ $item['quantity'] }}</span>
                                </div>
                                <span class="font-bold">{{ number_format($item['price'] * $item['quantity'], 2, ',', ' ') }} €</span>
                            </div>
                        @endforeach
                        <div class="flex justify-between font-bold mt-2">
                            <span>Total</span>
                            <span>{{ number_format($cartTotal, 2, ',', ' ') }} €</span>
                        </div>
                    </div>
                @else
                    <p class="text-gray-500">Votre panier est vide</p>
                @endif
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @forelse ($watches as $watch)
                    <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                        <div class="w-full h-48 bg-gray-200 flex items-center justify-center rounded-md overflow-hidden">
                            @if($watch->photo)
                                <img src="{{ asset('storage/' . $watch->photo) }}" alt="{{ $watch->model }}" class="w-full h-full object-cover">
                            @else
                                <span class="text-gray-500 text-sm">Aucune image</span>
                            @endif
                        </div>
                        <h3 class="mt-4 text-lg font-semibold">{{ $watch->model }}</h3>
                        <p class="text-gray-600">Réf: {{ $watch->reference }}</p>
                        <p class="text-gray-800 font-bold">{{ number_format($watch->price, 2, ',', ' ') }} €</p>
                        <p class="text-sm {{ $watch->is_limited ? 'text-yellow-600' : 'text-gray-500' }}">
                            {{ $watch->is_limited ? 'Édition Limitée' : 'Standard' }}
                        </p>
                        <div class="mt-4 flex flex-col gap-2">
                            <form action="{{ route('cart.add') }}" method="POST">
                                @csrf
                                <input type="hidden" name="watch_id" value="{{ $watch->id }}">
                                <input type="hidden" name="model" value="{{ $watch->model }}">
                                <input type="hidden" name="price" value="{{ $watch->price }}">
                                <div class="flex items-center gap-2 mb-2">
                                    <label for="quantity-{{ $watch->id }}" class="text-sm">Qté:</label>
                                    <input 
                                        type="number" 
                                        name="quantity" 
                                        id="quantity-{{ $watch->id }}" 
                                        min="1" 
                                        value="1" 
                                        class="w-16 text-center border rounded p-1 text-sm"
                                    >
                                </div>
                                <button 
                                    type="submit" 
                                    class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition duration-300"
                                >
                                    Ajouter au Panier
                                </button>
                            </form>
                            <div class="flex justify-between mt-2">
                                <a href="{{ route('watches.show', $watch) }}" class="text-blue-600 hover:text-blue-900 text-sm">Voir</a>
                                <a href="{{ route('watches.edit', $watch) }}" class="text-yellow-600 hover:text-yellow-900 text-sm">Modifier</a>
                                <form action="{{ route('watches.destroy', $watch) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette montre?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900 text-sm">Supprimer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-gray-500 col-span-full text-center">Aucune montre trouvée.</p>
                @endforelse
            </div>

            <div class="mt-6">
                {{ $watches->links() }}
            </div>
        </div>
    </div>
</div>
@endsection