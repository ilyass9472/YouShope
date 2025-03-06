@extends('layouts.app')
@section('content')




<div class="py-12 absolute">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <h2 class="font-semibold text-xl mb-6">Ajouter une nouvelle montre</h2>

                <form action="{{ route('watches.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        
                        <div class="space-y-4">
                            <div>
                                <label for="model" class="block text-sm font-medium text-gray-700">Modèle</label>
                                <input type="text" name="model" id="model" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
                            </div>
                            
                            <div>
                                <label for="reference" class="block text-sm font-medium text-gray-700">Référence</label>
                                <input type="text" name="reference" id="reference" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
                            </div>
                            
                            <div>
                                <label for="collection" class="block text-sm font-medium text-gray-700">Collection</label>
                                <select name="collection" id="collection" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                    <option value="FLYING REGULATOR">FLYING REGULATOR</option>
                                    <option value="SPACE TIMER">SPACE TIMER</option>
                                    <option value="FLYING GRAND REGULATOR">FLYING GRAND REGULATOR</option>
                                    <option value="OPUS CHRONOGRAPH">OPUS CHRONOGRAPH</option>
                                </select>
                            </div>
                            
                            <div>
                                <label for="price" class="block text-sm font-medium text-gray-700">Prix (EUR)</label>
                                <input type="number" name="price" id="price" step="0.01" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
                            </div>
                            
                            <div>
                                <label for="limited" class="block text-sm font-medium text-gray-700">Édition limitée</label>
                                <div class="mt-1 flex items-center">
                                    <input type="checkbox" name="is_limited" id="is_limited" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                                    <input type="number" name="limited_pieces" id="limited_pieces" placeholder="Nombre de pièces" class="ml-3 block w-32 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="space-y-4">
                            <div>
                                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                                <textarea name="description" id="description" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required></textarea>
                            </div>
                            
                            <div>
                                <label for="features" class="block text-sm font-medium text-gray-700">Caractéristiques techniques</label>
                                <textarea name="features" id="features" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"></textarea>
                                <p class="mt-1 text-xs text-gray-500">Séparez les caractéristiques par des sauts de ligne</p>
                            </div>
                            
                            <div>
                                <label for="photo" class="block text-sm font-medium text-gray-700">Image principale</label>
                                <input type="file" name="photo" id="photo" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100" required>
                            </div>
                            
                            <div>
                                <label for="additional_photos" class="block text-sm font-medium text-gray-700">Images supplémentaires</label>
                                <input type="file" name="additional_photos[]" id="additional_photos" multiple class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex justify-end">
                        <a href="{{ route('watches.index') }}" class="px-4 py-2 bg-gray-300 rounded-md text-gray-800 hover:bg-gray-400">Annuler</a>
                        <button type="submit" class="ml-3 px-4 py-2 bg-yellow-500 rounded-md text-black font-bold hover:bg-yellow-600">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



@endsection