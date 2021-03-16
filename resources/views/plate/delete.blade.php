<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Le Menu') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="m-3">
                    <h2>Êtes-vous sûr de vouloir supprimer ce plat: {{$plate->name}} ?</h2>
                    <a href="{{ route('menu.plate.delete.confirm', $plate->id) }}" class="btn btn-danger">Oui</a>
                    <a href="/menu" class="btn btn-primary">Non</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>