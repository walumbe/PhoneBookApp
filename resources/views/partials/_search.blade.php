<header>
  <h1 class="text-3xl text-center font-bold my-6 uppercase">
    <i class="fa fa-address-book" style = "margin-right: 8px" aria-hidden="true"></i>
    Phone Book App
  </h1>
</header>

<section class="relative h-32 bg-gray flex flex-col justify-center align-center text-center space-y-4 mb-4">

    <h1 style="display: flex; font-weight:bold; font-size: 22px" class="py-2 px-5">Contacts</h1>
    <a href="/contacts/create" class="absolute top-1/3 right-10 bg-black text-white py-2 px-5">&plus;Add Contact</a>

</section>


<form action="/">
    <div class="relative border-2 border-gray-100 m-4 rounded-lg">
      <div class="absolute top-4 left-3">
        <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i>
      </div>
      <input type="text" name="search" class="h-14 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none"
        placeholder="Search for contact by lastname..." />
      <div class="absolute top-2 right-2">
        <button type="submit" class="h-10 w-20 text-white rounded-lg bg-blue-500 hover:bg-blue-600">
          Search
        </button>
      </div>
    </div>
  </form>