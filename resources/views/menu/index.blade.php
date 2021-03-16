<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Le Menu') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @foreach($categories as $category)
                    <h2 class="mt-3 d-inline-block ml-2">{{$category->name}}</h2>
                    <a class="float-right mt-3 pr-3" href="{{ route('menu.category.see', $category->id) }}">Voir la catégorie</a>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
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
                @endforeach

                <a href="{{ route('menu.plate.new') }}" class="btn btn-primary mb-3 ml-2">Ajouter un plat</a>
                <a href="{{ route('menu.createCategory') }}" class="btn btn-secondary mb-3">Ajouter une catégorie</a>
            </div>
        </div>
    </div>
</x-app-layout>