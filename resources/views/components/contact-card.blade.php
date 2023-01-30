@props(['contact'])

    <x-card class="p-10">
      <table class="w-full table-auto rounded-sm" style="width: 100%">
        <tbody>
          <tr class="border-gray-300">
            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                <h3 class="text-2xl">
                    <a href="/contacts/{{$contact->id}}"> {{$contact->firstname}} {{$contact->lastname}}  </a>
                </h3>
                <div class="text-xl font-bold mb-4 mt-4"><i class="fa fa-phone" style="margin-right: 8px" aria-hidden="true"></i>{{$contact->phone}}</div>
            </td>
            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
              <a href="/contacts/{{$contact->id}}/edit" class="text-blue-400 px-6 py-2 rounded-xl"><i
                  class="fa-solid fa-pen-to-square"></i>
                Edit</a>
            </td>
            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
              <form method="POST" action="/contacts/{{$contact->id}}">
                @csrf
                @method('DELETE')
                <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
              </form>
            </td>
          </tr>
        </tbody>
      </table>
    </x-card>
  
  