@props(['contact'])

<x-card>
  <div class="flex">

    <div>
      <h3 class="text-2xl">
        <a href="/contacts/{{$contact->id}}">{{$contact->firstname}} {{$contact->lastname}}</a>
      </h3>
      <div class="text-xl font-bold mb-4 mt-4"><i class="fa fa-phone" style="margin-right: 8px" aria-hidden="true"></i>{{$contact->phone}}</div>

      <form method="POST" action="/contacts/{{$contact->id}}">
        @csrf
        @method('DELETE')
        <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
      </form>

    </div>
    <div>
        
    </div>
  </div>
</x-card>

{{-- <x-layout>
    <x-card class="p-10">
      <header>
        <h1 class="text-3xl text-center font-bold my-6 uppercase">
          Manage Contacts
        </h1>
      </header>
  
      <table class="w-full table-auto rounded-sm">
        <tbody>
          @unless($contacts->isEmpty()) --}}
          {{-- @foreach($contacts as $contact)
          <tr class="border-gray-300">
            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
              <a href="/{{$contact->id}}"> {{$contact->firstname}} {{$contact->lastname}}  </a>
            </td>
            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
              <a href="/{{$contact->id}}/edit" class="text-blue-400 px-6 py-2 rounded-xl"><i
                  class="fa-solid fa-pen-to-square"></i>
                Edit</a>
            </td>
            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
              <form method="POST" action="/{{$contact->id}}">
                @csrf
                @method('DELETE')
                <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
              </form>
            </td>
          </tr>
          @endforeach --}}
          {{-- @else
          <tr class="border-gray-300">
            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
              <p class="text-center">No Contacts Found</p>
            </td>
          </tr>
          @endunless
  
        </tbody>
      </table>
    </x-card>
  </x-layout> --}}
  