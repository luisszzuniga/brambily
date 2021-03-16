<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Créer une nouvelle catégorie') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form class="mt-3 mb-3 w-50 m-auto" action="{{ route('menu.category.save') }}" method="POST">
                    @csrf
                    <input class="form-control" type="text" placeholder="Nom" name="name">
                    <textarea name="description" class="mt-2 form-control">Description</textarea>

                    <button class="btn btn-primary mt-2 float-right mb-3">Ajouter</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout> 