<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Commandes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="m-3">
                    <h2>{{$order->name}} <span class="ml-3 badge bg-primary">{{$order->created_at}}</span></h2>
                    <h4 class="mt-3">{{$order->phone}}</h4 class="mt-3">
                    <p class="mt-3">{{$order->order}}</p>

                    <a href="{{ route('orders.archive', $order->id) }}" class="mt-3 btn btn-danger">Archiver</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>