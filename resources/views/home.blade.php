<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>


    @section('content')
    <div class="bg-green-500 w-full rounded">
        <h2 class="text-center text-white text-4xl text-bold py-40">
            Wellcome To User Dashboard</h2>
    </div>
    @endsection
    <x-slot>
        <div class="container bg-indigo-900 mx-auto">
            <h2 class="text-center text-gray-700">All Information</h2>
        </div>
    </x-slot>
</x-app-layout>
