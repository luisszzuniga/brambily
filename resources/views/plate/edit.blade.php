<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modifier un plat') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form class="mt-3 mb-3 w-50 m-auto" action="{{ route('menu.plate.saveEdit') }}" method="POST">
                    @csrf
                    <input class="form-control" type="text" name="name" placeholder="Nom" value="{{$plate->name}}" required>
                    <textarea name="description" class="mt-2 form-control" required>{{$plate->description}}</textarea>

                    <input type="int" class="form-control mt-2" required placeholder="Prix" name="price" value="{{ $plate->price }}">

                    <input class="form-control" type="text" name="picture" placeholder="ULR d'image" value="{{$plate->picture}}" required>

                    <label class="mt-2" for="category_id">Catégorie: </label>
                    <select name="category_id" class="form-control" required>
                        @foreach($categories as $category)
                            @if($category->id === $plate->category_id)
                                <option value="{{$category->id}}" selected>{{$category->name}}</option>
                            @else
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endif
                        @endforeach
                    </select>

                    <button name="id" value="{{ $plate->id }}" class="btn btn-primary mt-2 float-right mb-3">Ajouter</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout> 