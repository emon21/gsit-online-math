<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('About') }}
        </h2>
    </x-slot> --}}

 
    @section('content')
    <div class="bg-green-500 w-full rounded">
        @foreach ($about_us as $about)

        <div>
            <h4 class="py-5 pl-2 text-4xl text-red-600 font-bold">{{ $about->about_olympiad }}</h4>
            <p class="pl-2">{{ $about->about_olympiad_desc }}</p>
        </div>
            
        <div>
            <h4 class="py-5 pl-2 text-4xl text-red-600 font-bold">{{ $about->about_btea }}</h4>
            <p class="pl-2">{{ $about->about_btea_desc }}</p>
        </div>
            
        @endforeach
    </div>
    @endsection
 
</x-app-layout>
