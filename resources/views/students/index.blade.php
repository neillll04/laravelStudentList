
@include('partials.header')

 
<x-nav />

  <main class="max-h-screen overflow-hidden">
    <div class="px-6 py-8">
      <div class="max-w-4xl mx-auto">
        <div class="bg-white rounded-3xl p-8 mb-5 text-center">
         <h1 class="text-4xl font-bold pb-10 animate__animated animate__flipInY animate__delay-1s">Students List</h1>
         <div class="overflow-auto rounded-lg shadow">
         <table class="w-96 mx-auto sm:m-auto text-sm text-left text-gray-800">
            <thead class="text-xs  text-gray-700 uppercase ">
               <tr>
                  <th scope="col" class="py-3 px-6">
                     First Name
                  </th>
                  <th scope="col" class="py-3 px-6">
                     Last Name
                  </th>
                  <th scope="col" class="py-3 px-6">
                     Email
                  </th>
                  <th scope="col" class="py-3 px-6">
                     Age
                  </th>
                  <th scope="col" class="py-3 px-6">
                     Action
                  </th>
               </tr>
            </thead>
   
            <tbody class="divide-y divide-gray-100">
               @foreach ($students as $student)
               <tr class="border-b text-black">
                  <td class="py-4 px-6 whitespace-nowrap">
                     {{ $student-> first_name }}
                  </td>
                  <td class="py-4 px-6 whitespace-nowrap">
                     {{ $student-> last_name }}
                  </td>
                  <td class="py-4 px-6 whitespace-nowrap">
                     {{ $student-> email }}
                  </td>
                  <td class="py-4 px-6 whitespace-nowrap">
                     {{ $student-> age }}
                  </td>   
                  <td class="py-4 px-6 whitespace-nowrap">
                     <a href="/student/{{$student->id}}" class="bg-sky-600 text-white px-4 py-1 rounded">view</a>
                  </td>            
               </tr>
               @endforeach
            </tbody>
         </table>
      </div>
         <div class="mx-auto max-w-lg pt-6 p-4">
            <div class="text-lg font-bold">{{$students->links()}}</div> 
         </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   </div>
  </main>
  @include('partials.footer')