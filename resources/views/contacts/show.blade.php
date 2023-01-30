<x-layout>
    <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="mx-4">
      <x-card class="p-10">
        <div class="flex flex-col items-center justify-center text-center">
  
          <h3 class="text-2xl mb-2">
            {{$contact->firstname}} {{$contact->lastname}}
          </h3>
          <div class="text-xl font-bold mb-4">{{$contact->phone}}</div>
  
    
  
         
          <div class="border border-gray-200 w-full mb-6"></div>
          
        </div>
      </x-card>
  
       <x-card class="mt-4 p-2 flex space-x-6">
        <a href="/contacts/{{$contact->id}}/edit">
          <i class="fa-solid fa-pencil"></i> Edit
        </a>
  
        <form method="POST" action="/contacts/{{$contact->id}}">
          @csrf
          @method('DELETE')
          <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
        </form>
      </x-card>
    </div>
  </x-layout>