
<nav class="bg-[#00aeef] px-2  py-2.5  w-full z-20 top-0 left-0 fixed">

    <div class="container flex flex-wrap items-center justify-between ">

    <!-- Left Menu Start -->
    <div class="items-center hidden w-full gap-6 md:flex md:w-auto md:order-1" id="navbar-sticky">

        <div class="shrink-0 flex items-center">
            <a href="{{ url('/') }}">
                <img src="{{ asset('/frontend/images/BTEA Olym.png') }}" alt="" class="w-14 h-14">
            </a>
        </div>

      <ul class="flex  border border-gray-100 rounded-lg  md:flex-row md:space-x-1 md:mt-0 md:text-sm md:font-medium md:border-0">
        <li>
            <a href="{{ route('index') }}" class="{{ request()->routeIs('index') ? 'bg-green-500 text-white' : 'text-gray-500 hover:bg-gray-100' }} block mt-4 py-3 px-2 lg:inline-block lg:mt-0 text-gray-100 hover:text-white hover:bg-green-500 rounded transition-all duration-300 ease-in-out">
                <svg class="h-5 w-5 fill-current inline mr-1" viewBox="0 0 24 24">
                  <path d="M12 12h-3v9H9v-3h3v-1.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5v1.5h3v3h-3v-9zm0-10a8 8 0 018 8c0 2.82-1.46 5.28-3.66 6.7l-1.4-1.4A5.93 5.93 0 0012 5.5c-1.63 0-3.12.66-4.2 1.73l-1.4 1.4A7.96 7.96 0 014 12a8 8 0 018-8z" />
                </svg>
                Home
              </a>
        </li>

        {{-- <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'bg-blue-500 text-white' : 'text-gray-500 hover:bg-gray-100' }} px-4 py-2">Home</a></li> --}}

        {{-- <li>
            <a href="{{ route('index') }}" class="{{ request()->routeIs('index') ? 'bg-green-500 text-white' : 'text-gray-500 hover:bg-gray-100' }} block mt-4 py-3 px-2 lg:inline-block lg:mt-0 text-gray-100 hover:text-white hover:bg-green-500 rounded transition-all duration-300 ease-in-out">
                <svg class="h-5 w-5 fill-current inline mr-1" viewBox="0 0 24 24">
                    <path d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zM6 12a6 6 0 1112 0 6 6 0 01-12 0zm2 0a4 4 0 118 0 4 4 0 01-8 0zm10 0a2 2 0 11-4 0 2 2 0 014 0z" />
                  </svg>
                  Home
                </a>
        </li> --}}

        <li>
            <a href="{{ route('about-us') }}" class="{{ request()->routeIs('about-us') ? 'bg-green-500 text-white' : 'text-gray-500 hover:bg-gray-100' }} block mt-4 py-3 px-2 lg:inline-block lg:mt-0 text-gray-100 hover:text-white hover:bg-green-500 rounded transition-all duration-300 ease-in-out">
                <svg class="h-5 w-5 fill-current inline mr-1" viewBox="0 0 24 24">
                    <path d="M3.01 9c0-.55.45-1 1-1h16c.55 0 1 .45 1 1s-.45 1-1 1H4.01c-.55 0-1-.45-1-1zm0-4c0-.55.45-1 1-1h
                    <path d="M3.01 15c0-.55.45-1 1-1h16c.55 0 1 .45 1 1s-.45 1-1 1H4.01c-.55 0-1-.45-1-1zm0 8c0-.55.45-1 1-1h16c.55 0 1 .45 1 1s-.45 1-1 1H4.01c-.55 0-1-.45-1-1z" />
                </svg>
                About US
              </a>
        </li>
        <li>
            <a href="{{ url('target') }}" class="{{ request()->routeIs('target') ? 'bg-green-500 text-white' : 'text-gray-500 hover:bg-gray-100' }} block mt-4 py-3 px-2 lg:inline-block lg:mt-0 text-gray-100 hover:text-white hover:bg-green-500 rounded transition-all duration-300 ease-in-out">
                <svg class="h-5 w-5 fill-current inline mr-1" viewBox="0 0 24 24">
                    <path d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zM6 12a6 6 0 1112 0 6 6 0 01-12 0zm2 0a4 4 0 118 0 4 4 0 01-8 0zm10 0a2 2 0 11-4 0 2 2 0 014 0z" />
                  </svg>
                Target
              </a>
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
