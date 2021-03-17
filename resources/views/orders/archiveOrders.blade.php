<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Commandes Archivées') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="m-3">
                    <h2>Mes commandes Archivées</h2>
                    
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Téléphone</th>
                                <th scope="col">Commande</th>
                                <th scope="col">Date et heure</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                                @if($order->archive === 1)
                                    <tr>
                                        <td scope="row">{{$order->id}}</td>
                                        <td>{{$order->name}}</td>
                                        <td>{{$order->phone}}</td>
                                        <td>{{$order->order}}</td>
                                        <td>{{$order->created_at}}</td>
                                        <td>
                                            <a href="{{ route('orders.unarchive', $order->id) }}" class="btn btn-success"><i class="fas fa-archive pr-2"></i>Désarchiver</a>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>