@include('partials.header')

<x-nav />
    <main class="mt-5 pt-16 max-h-screen mx-auto">
      <div class="px-6 py-8">
        <div class="max-w-4xl mx-auto">
          <div class="bg-white rounded-3xl p-8 mb-5 text-center">
           <h1 class="text-4xl font-bold text-black text-center"> Add New Student</h1>
           <section class="mt-10">
              <form action="/add/student" method="POST" class="flex flex-col">
                 @csrf
                
                 <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label for="first_name" class="block text-gray-700 text-sm font-bold mb-2 ml-3 ">First name</label>
                    <input type="text" name="first_name" class="bg-gray-200 rounded w-full text-center text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3" autocomplete="off" value={{old('first_name')}}>
                    @error('first_name')
                    <p class="text-red-500 text-xs mt-2">
                        {{$message}}
                    </p>
                    @enderror
                 </div>
                 <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label for="last_name" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Last name</label>
                    <input type="text" name="last_name" class="bg-gray-200 rounded w-full text-center text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3" autocomplete="off" value={{old('last_name')}}>
                    @error('last_name')
                    <p class="text-red-500 text-xs mt-2">
                        {{$message}}
                    </p>
                    @enderror
                 </div>
                 <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label for="gender" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Gender</label>
                    <select name="gender" class="bg-gray-200 rounded w-full text-center text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3">
                       <option value="" {{old('gender') == "" ? 'selected' : ''}}></option>
                       <option value="Male"  {{old('gender') == "Male" ? 'selected' : ''}}>Male</option>
                       <option value="Female"  {{old('gender') == "Female" ? 'selected' : ''}}>Female</option>
                    </select>
                    @error('gender')
                    <p class="text-red-500 text-xs mt-2">
                        {{$message}}
                 </p>
                    @enderror
                 </div>
                 <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label for="age" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Age</label>
                    <input type="number" name="age" class="bg-gray-200 rounded w-full text-center text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3" autocomplete="off" value={{old('age')}}>
                    @error('age')
                    <p class="text-red-500 text-xs mt-2">
                        {{$message}}
                    </p>
                    @enderror
                 </div>
                 <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Email</label>
                    <input type="email" name="email" class="bg-gray-200 rounded w-full text-center text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3" autocomplete="off" value={{old('email')}}>
                    @error('first_name')
                    <p class="text-red-500 text-xs mt-2">
                        {{$message}}
                    </p>
                    @enderror
                 </div>
        
                 <button type="submit" class="bg-cyan-500 hover:bg-gradient-to-r from-cyan-600 to-blue-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transitionduration-200" type="submit">Add New</button>
              </form>
           </section>  
          
              </div>
            </div>
          </div>
        </div>
    </main>

   
