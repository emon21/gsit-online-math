
<nav class="bg-[#00aeef] px-2  py-2.5  w-full z-20 top-0 left-0 fixed">

    <div class="container flex flex-wrap items-center justify-between ">

    <!-- Left Menu Start -->
    <div class="items-center hidden w-full gap-6 md:flex md:w-auto md:order-1" id="navbar-sticky">

        {{-- <a href="https://flowbite.com/" class="flex items-center">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 mr-3 sm:h-9" alt="Flowbite Logo">
            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Online Demo</span>
        </a> --}}


        <div class="shrink-0 flex items-center">
            <a href="{{ route('dashboard') }}">
                {{-- <x-application-logo class="block h-9 w-auto fill-current text-gray-800" /> --}}
                <img src="{{ asset('/frontend/images/BTEA Olym.png') }}" alt="" class="w-14 h-14">
            </a>
        </div>

      <ul class="flex  border border-gray-100 rounded-lg  md:flex-row md:space-x-1 md:mt-0 md:text-sm md:font-medium md:border-0">
        <li>
          <a href="{{ url('/') }}" class=" flex gap-1 items-center justify-between py-2  px-2 text-white hover:bg-blue-700 rounded transition-all duration-300 ease-in-out" aria-current="page">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
              </svg>
              </span>
            <label class="pt-1">Home</label></a>
        </li>

        <li>

            <a href="#responsive-header" class="block mt-4 py-3 px-2 lg:inline-block lg:mt-0 text-gray-800 hover:text-white hover:bg-green-500 rounded transition-all duration-300 ease-in-out">
                <svg class="h-5 w-5 fill-current inline mr-1" viewBox="0 0 24 24">
                  <path d="M12 12h-3v9H9v-3h3v-1.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5v1.5h3v3h-3v-9zm0-10a8 8 0 018 8c0 2.82-1.46 5.28-3.66 6.7l-1.4-1.4A5.93 5.93 0 0012 5.5c-1.63 0-3.12.66-4.2 1.73l-1.4 1.4A7.96 7.96 0 014 12a8 8 0 018-8z" />
                </svg>
                Menu Item 3
              </a>
        </li>

        <li>
          <a href="{{ url('faq') }}" class="flex gap-1 items-center justify-between py-2 px-2 text-white hover:bg-blue-700 rounded transition-all duration-300 ease-in-out">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
              </svg>
              </span>
              <label class="pt-1">FAQ</label></a>
        </li>
        <li>
            <a href="{{ url('search') }}" class="flex gap-1 items-center justify-between py-2 px-2 text-white hover:bg-blue-700 rounded transition-all duration-300 ease-in-out">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                      </svg>

                  </span>
                  <label class="pt-1">Search</label></a>
        </li>

        <li>
            <a href="#" class="flex gap-1 items-center justify-between  py-2 px-2 text-white hover:bg-blue-700 rounded transition-all duration-300 ease-in-out">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                      </svg>
                  </span>
                  <label class="pt-1">Result</label></a>
        </li>

        <li>
            <a href="#" class="flex gap-1 items-center justify-between  py-2 px-2 text-white hover:bg-blue-700 rounded transition-all duration-300 ease-in-out">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                      </svg>

                  </span>
                  <label class="pt-1">Question</label></a>
        </li>

        <li>
            <a href="#" class="flex gap-1 items-center justify-between  py-2 px-2 text-white hover:bg-blue-700 rounded transition-all duration-300 ease-in-out">
                 <span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                      </svg>
                 </span>
                 <label class="pt-1">User</label></a>
        </li>

         <li>
            <a href="{{ route('about-us') }}" class="flex gap-1 items-center justify-between  py-2 px-2 text-white hover:bg-blue-700 rounded transition-all duration-300 ease-in-out">
                 <span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                      </svg>
                 </span>
                 <label class="pt-1">About Us
                </label></a>
        </li>
         <li>
            <a href="{{ route('target') }}" class="flex gap-1 items-center justify-between  py-2 px-2 text-white hover:bg-blue-700 rounded transition-all duration-300 ease-in-out">
                 <span>

                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9h16.5m-16.5 6.75h16.5" />
                      </svg>

                 </span>
                 <label class="pt-1">Target

                </label></a>
        </li>
      </ul>



    </div>
    <!-- Left Menu End -->

    <!-- Right Menu Start -->


    <div class="flex gap-2 md:order-2">
        @auth
        <a href="{{ route('dashboard') }} " class="text-white bg-red-600 p-2  border border-red-600 hover:border-red-600 hover:bg-transparent transition duration-300 ease-in-out
        focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 flex justify-between items-center gap-1 ">
            <span class="-rotate-45 -mt-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                  </svg>

            </span>
            Dashboard</a>
        @else
            {{-- <a href=" {{ route('login') }} ">Login</a> --}}
            <a href="{{route('login') }}" class="text-white hover:bg-blue-700 border hover:border-transparent transition duration-300 ease-in-out
            focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 flex justify-between items-center gap-1">
              <span class="pr-1">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z" />
                    </svg>
              </span>
              Login</a>
              {{-- mx-auto text-center w-1/2 hover:bg-red-600 p-2 rounded border border-red-600  focus:outline-none text-white flex justify-center --}}
          <a href="{{route('register') }}" class="text-white bg-red-600 p-2  border border-red-600 hover:border-red-600 hover:bg-transparent transition duration-300 ease-in-out
          focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 flex justify-between items-center gap-1 ">
              <span class="-rotate-45 -mt-1">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                    </svg>

              </span>
              নিবন্ধন</a>
        @endauth



        <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd">
          </path>
        </svg>
      </button>
    </div>
    <!-- Right Menu End -->
    </div>
  </nav>
