@include('partials.header')
   <header class="max-w-lg mx-auto">
      <a href="#">
         <h1 class="text-4xl font-bold text-white text-center mt-20 animate__animated animate__flipInY animate__delay-1s"> Student Registration</h1>
      </a>
   </header>


   <section class="h-auto bg-white p-10 mr-40 ml-40 mb-40 mt-10 rounded-lg shadow-2xl">
      <div class="px-6 h-full text-gray-800">
        <div
          class="flex xl:justify-center lg:justify-between justify-center items-center flex-wrap h-full g-6"
        >
        <div class="grow-0 shrink-1 md:shrink-0 basis-auto xl:w-6/12 lg:w-6/12 md:w-9/12 mb-12 md:mb-0">
         <img
           src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
           class="w-full animate__animated animate__rotateInDownLeft animate__delay-.7s"
           alt="Phone image"
         />
       </div>
          <div class="xl:ml-20 xl:w-5/12 lg:w-5/12 md:w-8/12 mb-12 md:mb-0">

            <section>
               <h3 class="font-bold text-2xl text-center mb-5 animate__animated animate__fadeInDown">Welcome to Student System</h3>         
            </section>
            <form action="/store" method="POST" class="flex flex-col">
               @csrf
               <div class="mb-6 pt-3 rounded bg-gray-200">
                  <label for="name" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Name</label>
                  <input type="text" name="name" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-cyan-700 px-3" value={{old('name')}}>               
                  @error('name')
                     <p class="text-red-500 text-xs mt-2">
                         {{$message}}
                     </p>
                  @enderror
               </div>
               
               <div class="mb-6 pt-3 rounded bg-gray-200">
                  <label for="email" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Email</label>
                  <input type="email" name="email" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-cyan-700 px-3" value={{old('email')}}>
                  @error('email')
                  <p class="text-red-500 text-xs mt-2">
                      {{$message}}
                  </p>
               @enderror
               </div>
               <div class="mb-6 pt-3 rounded bg-gray-200">
                  <label for="password" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Password</label>
                  <input type="password" name="password" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-cyan-700 px-3">
                  @error('password')
                  <p class="text-red-500 text-xs mt-2">
                      {{$message}}
                  </p>
               @enderror
               </div>
               <div class="mb-6 pt-3 rounded bg-gray-200">
                  <label for="password_confirmation" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Confirm Password</label>
                  <input type="password" name="password_confirmation" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-cyan-700 px-3">
                  @error('password_confirmation')
                  <p class="text-red-500 text-xs mt-2">
                      {{$message}}
                  </p>
               @enderror
               </div>
               <button class="bg-cyan-500 hover:bg-gradient-to-r from-cyan-600 to-blue-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transitionduration-200 hover:scale-105 transition duration-300 ease-in-out animate__animated animate__rubberBand animate__delay-2s animate__repeat-2" type="submit">Sign up</button>
               <p class="text-gray-600 pt-2">Sign in to your account <a href="/login" class="text-cyan-500 font-bold">here</a> </p> 
            </form>
          </div>
        </div>
      </div>
    </section>

   </main>
@include('partials.footer')