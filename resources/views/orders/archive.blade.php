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
                    <h2>Êtes-vous sûr de vouloir archiver la commande: {{$order->id}} ?</h2>

                    <a href="{{ route('orders.archive.confirm', $order->id) }}" class="btn btn-danger mt-4">Oui</a>
                    <a href="/orders" class="btn btn-primary mt-4">Non</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>