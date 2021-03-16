<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modifier une catégorie') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form class="mt-3 mb-3 w-50 m-auto" action="{{ route('menu.category.saveEdit') }}" method="POST">
                    @csrf
                    <input class="form-control" required type="text" value="{{ $category->name }}" name="name">
                    <textarea name="description" required class="mt-2 form-control">{{ $category->description }}</textarea>

                    <button name="id" value="{{$category->id}}" class="btn btn-primary mt-2 float-right mb-3">Ajouter</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout> 