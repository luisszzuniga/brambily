<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Catégorie') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h2 class="m-3">Êtes-vous sûr de vouloir supprimer la catégorie {{$category->name}} ?</h2>
                <a href="{{ route('menu.category.deleteConfirm', $category->id) }}" class="btn btn-danger ml-3 mb-3">Oui</a>
                <a href="/menu" class="btn btn-primary mb-3">Non</a>
            </div>
        </div>
    </div>
</x-app-layout>