@include('partials.header')
   <header class="max-w-lg mx-auto">
      <a href="#">
         <h1 class="text-4xl font-bold text-white text-center mt-20 animate__animated animate__flipInY animate__delay-1s"> Student Login</h1>
      </a>
   </header>


   <section class="h-auto bg-white p-10 mx-40 mt-20 rounded-lg shadow-2xl">
      <div class=" h-full text-gray-800">
        <div
          class="flex xl:justify-center lg:justify-between justify-center items-center flex-wrap h-full g-6"
        >
          <div
            class="grow-0 shrink-1 md:shrink-0 basis-auto xl:w-6/12 lg:w-6/12 md:w-9/12 mb-12 md:mb-0"
          >
            <img
              src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
              class="w-full animate__animated animate__zoomInDown animate__delay-.7s"
              alt="Sample image"
            />
          </div>
          <div class="xl:ml-20 xl:w-5/12 lg:w-5/12 md:w-8/12 mb-12 md:mb-0">

            <section>
               <h3 class="font-bold text-2xl text-center mb-3 animate__animated animate__fadeInDown">Welcome to Student System</h3>
                   <p class="text-white-600 pt-2 mb-2">Sign up a new account <a href="/register" class="text-cyan-500 font-bold">here</a></p>           
            </section>
            <form action="/login/process" method="POST" class="flex flex-col">
               @csrf
               @error('email')
                     <p class="text-red-500 text-xs mt-2">
                         {{$message}}
                     </p>
               @enderror
               <div class="mb-6 pt-3 rounded bg-gray-200">
                  <label for="email" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Email</label>
                  <input type="email" name="email" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-cyan-600 px-3">
               </div>
               
               <div class="mb-6 pt-3 rounded bg-gray-200">
                  <label for="password" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Password</label>
                  <input type="password" name="password" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-cyan-600 px-3">
               </div>

               <button type="submit" class="bg-cyan-500 hover:bg-gradient-to-r from-cyan-600 to-blue-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transitionduration-200 hover:scale-105 transition duration-300 ease-in-out animate__animated animate__tada animate__delay-2s" type="submit">Login</button>
            </form>
          </div>
        </div>
      </div>
    </section>
   
@include('partials.footer')