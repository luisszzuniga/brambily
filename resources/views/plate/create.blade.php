<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Créer un nouveau plat') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form class="mt-3 mb-3 w-50 m-auto" action="{{ route('menu.plate.save') }}" method="POST">
                    @csrf
                    <input class="form-control" type="text" placeholder="Nom" name="name" required>
                    <textarea name="description" class="mt-2 form-control" required>Description</textarea>

                    <input type="int" class="form-control mt-2" required placeholder="Prix" name="price">

                    <label class="mt-2" for="category_id">Catégorie: </label>
                    <select name="category_id" class="form-control" required>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>

                    <button class="btn btn-primary mt-2 float-right mb-3">Ajouter</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout> 