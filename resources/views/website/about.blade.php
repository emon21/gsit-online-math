<x-guest-layout>
    <x-navbar></x-navbar>


    <section class="bg-gray-100  overflow-hidden">
        <div class="container my-20">

          <div class="">

            <div class="flex justify-between gap-4">
                <div class="px-2 py-2">

                    <h4 class="text-4xl py-4 font-bold text-green-500">About Olympiad : </h4>
                    <p class="text-justify text-black text-base">
                        {{ $about_us->about_olympiad_desc }}
                    </p>
                </div>
            </div>

            <div class="px-2 py-2">
                <h4 class="text-4xl py-4 font-bold text-green-500">About BTEA : </h4>
                <p class="text-black text-base text-justify">
                    {{ $about_us->about_btea_desc }}
                </p>

            </div>



        <div class=" mt-4 overflow-hidden text-black">

            <h4 class="text-4xl py-4 font-bold text-green-500 text-center">Organizing Committee : </h4>
            <p class="py-3 text-center">The National Committee of Bangabandhu Tourism Olympiad 2022 is as follows:</p>

            <div class="flex flex-wrap item-center justify-around">

                <div class="board-list">

                    <div class="flex flex-wrap items-center justify-around">

                        @forelse ($OrganizMember as $organize)

                        <div class="w-[24%] h-[360px] bg-green-700 my-2 rounded overflow-hidden">
                            <img class="w-full h-[250px]" src="{{ asset($organize->organiz_picture) }}" alt="">
                            <div class=" text-white py-2 px-1">
                                <h4>{{ $organize->desination_title }}</h4>
                                <h2>{{ $organize->organiz_name }}</h2>
                                <p><strong class="text-black text-xl">{{ $organize->organiz_desination }}</strong> , {{ $organize->work }}</p>
                            </div>
                        </div>

                        @empty
                        <div class="bg-red-600 text-white text-base px-4 py-2 w-full text-center h-20">
                            <p class="pt-4 text-xl">Sorry No Data</p>
                        </div>

                        @endforelse

                    </div>

                </div>
            </div>

                <div class="">
                    <h2 class="pl-2 py-4 bg-gray-200 text-xl text-black">The National Sub-Committee of Bangabandhu Tourism Olympiad 2022 is as follows:</h2>
                    <ol class="list-decimal px-5 py-4">
                        <li>Finance sub-committee with 7 members.</li>
                        <li>Governance and Management Subcommittee with 7 members.</li>
                        <li>7 member question paper and question bank distribution subcommittee.</li>
                        <li>7 member examination acceptance and result consolidation sub-committee.</li>
                        <!-- ... -->
                    </ol>

                </div>

            </div>

        </div>

        <div class=" mt-4 overflow-hidden text-black">

            <div class="container py-5">
                <h2 class="text-xl text-green-500 font-bold text-center ">BTEA Board of Director</h2>
                <div class="board-list">
                    <h2 class="py-2 text-center">BOARD OF DIRECTOR : </h2>
                    <div class="flex flex-wrap items-center justify-around">

                        @foreach($board_of_director as $director)

                            <div class="w-[24%] h-[360px] bg-green-700 my-2 rounded overflow-hidden">
                                <img class="w-full h-[250px]" src="{{ asset($director->img_upload) }}" alt="">
                                <div class=" text-white py-2 px-1">
                                    <h2>{{ $director->name }}</h2>
                                    <h4>{{ $director->desination }}</h4>
                                    <p>Work Station : {{ $director->work }}</p>
                                </div>
                            </div>

                         @endforeach

                    </div>
                </div>

                <h2 class="text-xl text-green-500 font-bold text-center py-4 ">BOARD OF ADVISER : </h2>
                <div class="board-list">

                    <div class="flex flex-wrap items-center justify-around">



                        @forelse ($board_of_adviser as $adviser)


                        <div class="w-[24%] h-[360px] bg-green-700 my-2 rounded overflow-hidden">
                            <img class="w-full h-[250px]" src=" {{$adviser->img_upload}}" alt="">
                            <div class=" text-white py-2 px-1">
                                <p> {{ $adviser->desination }}</p>
                                <h2> {{ $adviser->name }}</h2>
                                <p> {{ $adviser->our_dauty }}</p>
                                <h4> {{ $adviser->work }}</h4>
                            </div>
                        </div>

                        @empty

                        <div class="bg-red-600 text-white text-base px-4 py-2 w-full text-center h-20">
                            <p class="pt-4 text-xl">Sorry No Data</p>
                        </div>

                        @endforelse




                    </div>

                </div>

            </div>
        </div>
          </div>
        </div>
      </section>
    <x-footer></x-footer>
</x-guest-layout>
