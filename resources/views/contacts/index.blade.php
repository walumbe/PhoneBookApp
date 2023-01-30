<x-layout>
  
    @include('partials._search')
  
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
  
      @unless(count($contacts) == 0)
  
      @foreach($contacts as $contact)
      <x-contact-card :contact="$contact" />
      @endforeach
  
      @else
      <p>No contacts found</p>
      @endunless
  
    </div>
  
    <div class="mt-6 p-4">
      {{$contacts->links()}}
    </div>
  </x-layout>