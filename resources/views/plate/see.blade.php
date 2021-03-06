<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Article') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">                      
                <div class="m-3">
                    <h2>{{ $plate->name }}<span class="badge bg-primary ml-4">{{ $plate->price }} €</span></h2>
                    <p>{{ $plate->description }}</p>
                    <p>Catégorie: {{$plate->category_id}}</p>
                    <img class="pb-4" src="{{ $plate->picture }}" alt="Pas d'image">
                    <a href="{{ route('menu.plate.edit', $plate->id) }}" class="btn btn-secondary">Modifier</a>
                    <a href="{{ route('menu.plate.delete', $plate->id) }}" class="btn btn-danger">Supprimer</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>