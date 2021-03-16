<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Catégorie') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h2 class="m-3">{{ $category->name }}</h2>
                <p class="m-3">{{ $category->description }}</p>

                <h4 class="m-3 pt-4">Plats associés:</h4>
                <table class="m-3 table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Description</th>
                            <th scope="col">Prix</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($plates as $plate)
                            @if($plate->category_id === $category->id)
                                <tr>
                                    <td scope="row">{{$plate->id}}</td>
                                    <td>{{$plate->name}}</td>
                                    <td>{{$plate->description}}</td>
                                    <td>{{$plate->price}} €</td>
                                    <td>
                                        <a href="{{ route('menu.plate.see', $plate->id) }}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                                        <a href="{{ route('menu.plate.edit', $plate->id) }}" class="btn btn-secondary"><i class="fas fa-edit"></i></a>
                                        <a href="{{ route('menu.plate.delete', $plate->id) }}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>

                <a href="{{ route('menu.category.delete', $category->id) }}" class="btn btn-danger ml-3 mb-3">Supprimer</a>
                <a href="{{ route('menu.category.edit', $category->id) }}" class="btn btn-secondary mb-3">Modifier</a>
            </div>
        </div>
    </div>
</x-app-layout>