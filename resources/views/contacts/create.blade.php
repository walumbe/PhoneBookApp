<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
      <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">Add Contact</h2>
      </header>
  
      <form method="POST" action="/contacts" enctype="multipart/form-data">
        @csrf
       <div class="mb-6">
          <label for="firstname" class="inline-block text-lg mb-2">First Name</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="firstname" 
          placeholder="Example: John" value="{{old('firstname')}}" />
  
          @error('firstname')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="lastname" class="inline-block text-lg mb-2">Last Name</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="lastname"
            placeholder="Example: Doe" value="{{old('lastname')}}" />
  
          @error('lastname')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="phone" class="inline-block text-lg mb-2">Phone</label>
          <input type="tel" class="border border-gray-200 rounded p-2 w-full" name="phone"
            placeholder="Example: 222-222-2222" value="{{old('phone')}}" />
  
          @error('phone')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="email" class="inline-block text-lg mb-2">
            Email
          </label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email"
          placeholder="Example: johndoe@gmail.com" value="{{old('email')}}" />
  
          @error('email')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>

        <div class="mb-6">
            <button class="bg-blue-500 text-white rounded py-2 px-4 hover:bg-black">
              Add Contact
            </button>
    
            <a href="/" class="text-black ml-4"> Back </a>
          </div>

    
      </form>
    </x-card>
  </x-layout>
  