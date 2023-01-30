<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
      <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">Edit Contact</h2>
      </header>
  
      <form method="POST" action="/contacts/{{$contact->id}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-6">
          <label for="firstname" class="inline-block text-lg mb-2">First Name</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="firstname"
            value="{{$contact->firstname}}" />
  
          @error('firstname')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>

        @csrf
        @method('PUT')
        <div class="mb-6">
          <label for="lastname" class="inline-block text-lg mb-2">Last Name</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="lastname"
            value="{{$contact->lastname}}" />
  
          @error('lastname')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="phone" class="inline-block text-lg mb-2">Phone</label>
          <input type="tel" class="border border-gray-200 rounded p-2 w-full" name="phone"
            placeholder="Example:  222-222-2222" value="{{$contact->phone}}" />
  
          @error('phone')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="email" class="inline-block text-lg mb-2">
            Email
          </label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{$contact->email}}" />
  
          @error('email')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>

  
  
        <div class="mb-6">
          <button class="bg-blue-500 text-white rounded py-2 px-4 hover:bg-black">
            Update Contact
          </button>
  
          <a href="/" class="text-black ml-4"> Back </a>
        </div>
      </form>
    </x-card>
  </x-layout>