{{-- <nav x-data="{open:false}" class="bg-gray-800 fixed w-full z-20 top-0 left-0 border-gray-200 px-2 sm:px-4 py-2.5 text-white">
   <div class="container flex flex-wrap justify-between items-center">
      <a href="/">
         <span class="self-center text-xl font-semibold whitespace-nowrap">
            {{ $data['title'] }}
         </span>
      </a>
      <button @click="open = !open" data-collapse-toggle="navbar-main" class="md:hidden">
         <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48"><path d="M6 36v-3h36v3Zm0-10.5v-3h36v3ZM6 15v-3h36v3Z"/></svg>
      </button>
      <div x-show="open" class="w-full md:block md:w-auto" id="navbar-main">
         <x-items />
      </div>
      <div class="hidden w-full md:block md:w-auto" id="navbar-main">
         <x-items />
      </div>
   </div>
</nav> --}}
<nav class="bg-blue-600 z-10">
   <span
   class="absolute text-white text-4xl top-5 left-4 cursor-pointer"
   onclick="Openbar()"
 >
 <i class="fa-solid fa-bars px-2  rounded-md"></i>
 </span>
    <div
      class="sidebar fixed top-0 bottom-0 lg:left-0 left-[-300px] duration-500 p-2 w-[300px] overflow-y-auto text-center bg-gray-900 shadow h-screen"
    >
    
      <div class="text-gray-100 text-xl">
        <div class="p-2.5 mt-1 flex items-center rounded-md">
          <h1 class="text-[20 px] ml-3 text-xl text-gray-200 font-bold">
            Student System
          </h1>
          <i class="fa-solid fa-xmark ml-20 cursor-pointer lg:hidden"
          onclick="Openbar()"></i>
        </div>
        <hr class="my-2 text-gray-600" />
        
        <div>
         <div class="mt-1 mb-4">
            <div class="relative max-w-xs">
                <form action="{{ '/search'}}" method="GET">
                    <label for="search" class="sr-only">
                        Search
                    </label>
                    <input type="text" name="query"
                        class="block w-full p-3 pl-10 text-sm border-gray-200 rounded-md focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 text-black"
                        placeholder="Search..." />
                    <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                </form>
            </div>
          <a href="/">
          <div
            class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600"
          >
          <i class="fa-solid fa-list"></i>
           <span class="text-[15px] ml-4 text-gray-200">Student List</span>
          </div></a>
          <a href="/add/student">
          <div
            class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600"
          >
          <i class="fa-solid fa-user-plus"></i>
           <span class="text-[15px] ml-4 text-gray-200">Add New Student</span>
          </div>
         </a>
          <hr class="my-4 text-gray-600" />
          <div
            class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600"
          >
          <i class="fa-solid fa-right-from-bracket"></i>
            <form action="/logout" method="POST">
               @csrf
               <button class="flex flex-col py-2 pr-4 pl-3">
                  <span class="text-[15px] font-bold text-sm ml-4">Logout</span>
               </form>
           </button> 
          </div>
        </div>
      </div>
    </div>

    <script>
      function Openbar() {
        document.querySelector(".sidebar").classList.toggle("left-[0]");
      }
    </script>
  </nav>