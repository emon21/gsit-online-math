<x-guest-layout>


   
<nav class="bg-blue-400 px-2  py-2.5  fixed w-full z-20 top-0 left-0 border-b border-gray-200 overflow-hidden">
    
    <div class="container flex flex-wrap items-center justify-between ">
   
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
          <a href="#" class="flex gap-1 items-center justify-between  py-2 px-2 text-white hover:bg-blue-700 rounded transition-all duration-300 ease-in-out" aria-current="page">
            <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
              </svg>
              </span>
            Home</a>
        </li>

        <li>
          <a href="#" class="flex gap-1 items-center justify-between  py-2 px-2 text-white hover:bg-blue-700 rounded transition-all duration-300 ease-in-out">
            <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
              </svg>
              </span>
            FAQ</a>
        </li>
        <li>
            <a href="#" class="flex gap-1 items-center justify-between  py-2 px-2 text-white hover:bg-blue-700 rounded transition-all duration-300 ease-in-out">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                      </svg>
                      
                  </span>
                Search</a>
        </li>

        <li>
            <a href="#" class="flex gap-1 items-center justify-between  py-2 px-2 text-white hover:bg-blue-700 rounded transition-all duration-300 ease-in-out">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                      </svg>
                  </span>
                Result</a>
        </li>

        <li>
            <a href="#" class="flex gap-1 items-center justify-between  py-2 px-2 text-white hover:bg-blue-700 rounded transition-all duration-300 ease-in-out">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                      </svg>
                      
                  </span>
                Question</a>
        </li>

        <li>
            <a href="#" class="flex gap-1 items-center justify-between  py-2 px-2 text-white hover:bg-blue-700 rounded transition-all duration-300 ease-in-out">
                 <span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                      </svg>
                 </span>
                User</a>
        </li>
      </ul>
    </div>

    <div class="flex gap-2 md:order-2">
        <a href="#" class="text-white hover:bg-blue-700 border hover:border-none transition duration-300 ease-in-out   focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 flex justify-between items-center gap-1">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z" />
                  </svg> 
            </span>
            Login</a>

        <a href="#" class="text-white hover:bg-blue-700 border hover:border-none transition duration-300 ease-in-out   focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 flex justify-between items-center gap-1">
            <span class="-rotate-45 -mt-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                  </svg>
                  
            </span>
            নিবন্ধন</a>

        <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd">
          </path>
        </svg>
      </button>
    </div>
    </div>
  </nav>

 <section class="text-gray-600 body-font bg-green-400  overflow-hidden">
    <div class="container py-24 flex flex-wrap">
      <div class="flex flex-wrap items-center -m-4 ">

        <div class="p-4 lg:w-1/2 md:w-full">
            <div class="rounded-lg border-gray-200 border-opacity-50 p-8 ">
                <img src="{{asset('frontend/images/BTEA Olym.png')}} 
                " alt="">
              
            </div>
          </div>


        <div class="p-4 lg:w-1/2 md:w-full">
          <div class="rounded-lg border-gray-200 border-opacity-50 p-8 text-white">
           
            <h2 class="text-2xl pb-6 text-center">বঙ্গবন্ধু ট্যুরিজম অলিম্পিয়াড ২০২২ <br/>
                সফল করার তাৎপর্যঃ </h2>
           <p class="text-center mb-5">
            নবম, দ্বশম, একাদশ ও দ্বাদশ এই ৪ শ্রেনীতে জেনারেল, মাদ্রাসা ও ভোকেশনাল ৩ ধারার শিক্ষার্থী
            প্রায় ২৬ লক্ষ প্লাস। প্রতিটি শিক্ষার্থীর পরিবারে ৫ জন করে সদস্য সংখ্যা থাকলে মোট দেড়
            কোটির মত মানুষ সরাসরি বঙ্গবন্ধু ও পর্যটন শিল্প সম্পর্কে সঠিক ধারণা পাবেন। এছাড়া পেইড,
            ননপেইড ভলেন্টিয়ার, জনপ্রতিনিধি, সরকারি, বেসরকারি বিভিন্ন সংস্থার প্রতিনিধি, শিক্ষক,
            সাংস্কৃতিক কর্মী, সাংবাদিক, রাজনৈতিক ব্যাক্তিবর্গ, সমাজসেবক মিলে প্রাই আরো দেড় কোটি
            মানুষ মিলে মোট ৩ কোটি প্লাস বিভিন্ন বয়সের মানুষ বঙ্গবন্ধু ও পর্যটন শিল্প সম্পর্কে নতুন করে
            ধারনা পাবে। এতে করে সবাই পর্যটন শিল্পের প্রতি আকৃষ্ট হবে এবং ২৩ সালের বছরব্যাপী
            কর্মকাণ্ডের কারনে ২৪ সালে নতুন করে ডোমেস্টিক পর্যটনে ১ কোটির বেশি পর্যটক বাড়বে যা
            অর্থনীতিতে বিপুল পরিমাণ পরিবর্তন আসবে। শুধু তাই নয় রাজনীতিতেও একটা পজেটিভ দিক সুচিত
            হবে বলে আমরা বিশ্বাস করি। যার সুফল ২০২৪ সালে জাতীয় রাজনীতিতে পড়বে।
           </p>
           

           <a href="#" class="mx-auto text-center w-1/2 hover:bg-red-600 p-2 rounded border border-red-600  focus:outline-none text-white flex justify-center" >
            <span class="-rotate-45 -mt-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                  </svg>
                  
            </span> নিবন্ধন করুন</a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="">
    <div class="container px-5 py-24 mx-auto">
      <h1 class="sm:text-3xl text-2xl font-medium title-font text-center text-gray-900 mb-4 text-semibold">
        বঙ্গবন্ধু ট্যুরিজম অলিম্পিয়াড এর তাৎপর্যঃ
      </h1>
      <div class="p-4 w-3/4   text-white mx-auto flex justify-between gap-4">
        <div class="w-1/2  px-2 py-2 rounded border border-spacing-1 text-justify">
            <p class="text-black">
                জাতির পিতা বঙ্গবন্ধু ও বাংলাদেশ নামক মানচিত্র সারা পৃথিবীতে একে অপরের পরিপুরক। তাই
                বঙ্গবন্ধুর প্রতিচ্ছবিকে বলা হয় পর্যটনের লিজেন্ডারি ইমেজ। পর্যটন পৃথিবীর দ্বিতীয় বৃহত্তর শিল্প
                খাত, পেট্রোলিয়াম ও কেমিকেলের পরেই এর স্থান পৃথিবীর মোট অভ্যন্তরীণ সম্পদের প্রায় ১০%
                যোগান দেয় এই খাত। বিশ্বে কর্মসংস্থানের ক্ষেত্রে প্রতি ১০ জনে ১জন নিয়োজিত আছেন পর্যটনে
                এবং মোট সেবা রপ্তানি ৩০% হয় এই খাত থেকে। অথচ বিপুল সম্ভাবনাময় খাত বাংলাদেশের দেশের
                তরুণদের কাছে অপরিচিত।বলাবাহুল্য আমাদের দেশে &quot;জলাভূমি পর্যটন&quot; &quot;সাংস্কৃতিক পর্যটন&quot;
                &quot;জীবনধারা পর্যটন&quot; &quot; উৎসব পর্যটন&quot; &quot;ধর্মীয় পর্যটন&quot; &quot;সমুদ্র পর্যটন&quot; &quot;রোমাঞ্চ পর্যটন&quot; ইত্যাদি 
            </p>
            <a href="https://online.matholympiad.org.bd/registration" class=" text-center hover:bg-red-600 p-2 rounded border border-red-600  focus:outline-none text-black hover:text-white flex justify-center transition-all duration-300 ease-in-out mt-2" >
                <span class="-rotate-45 -mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                      </svg>
                      
                </span> নিবন্ধন করুন</a>
    
        </div>
        <div class="w-1/2 border border-spacing-1 px-2 py-2 rounded ">
            <p class="text-black text-justify">
                পর্যটন অনেক দেশি-
                বিদেশি পর্যটক আকর্ষণ করতে পারে যা আমাদের অর্থনীতিতে ভিন্নমাত্রার সমৃদ্ধি এনে দিবে।
                এই উদ্দেশ্য সফল করতে হলে পর্যটনের উন্নয়ন বেসরকারি উদ্যোগের সাথে সরকারের সহযোগিতার হাত
                প্রশস্ত করতে হবে। একইরকম ভাবে ভবিষ্যতের পর্যটনকে অনুভব ও ধারণ করার জন্য তরুণদেরকে এর
                সাথে যুক্ত করতে হবে।
                আমরা বিশ্বাস করি বঙ্গবন্ধু ট্যুরিজম অলিম্পিয়াড স্কুল কলেজ মাদ্রাসা ও কারিগরি শিক্ষার সাথে
                সম্পৃক্ত শিক্ষার্থীদেরকে পর্যটন সম্বন্ধে অবহিত করতে সাহায্য করবে এবং এর সাথে যুক্ত করার
                মাধ্যমে দেশপ্রেমের নতুন দৃষ্টিভঙ্গি সূচনা হবে ।
            </p>
        </div>
        <div class="w-1/2 border border-spacing-1 px-2 py-2 rounded">
            <h4 class="text-red-600 text-center text-2xl pb-2"> যোগাযোগ</h4>
            <p class="text-center  text-base text-black">
               
                বঙ্গবন্ধু ট্যুরিজম অলিম্পিয়াড ২০২২ এর জাতীয় কমিটি নিম্নরূপঃ
                প্রধান পৃষ্ঠপোষক
                জনাব র. আ. ম. উবায়দুল মোকতাদির চৌধুরী এমপি
            </p>
        
        
        </div>
       
       
      </div>
    </div>
    
  </section>

  <footer class="bg-green-400 text-center">
   
    <div class="text-center text-white p-4" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2022 Copyright : 
      <a class="text-white" href="#">বঙ্গবন্ধু ট্যুরিজম অলিম্পিয়াড</a>
    </div>
  </footer>

</x-guest-layout>

