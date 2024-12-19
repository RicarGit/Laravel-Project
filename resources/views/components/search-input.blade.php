<form
  class="flex items-center gap-2"
  action="{{ route('home') }}"
  method="GET"
>
  <input
    class="w-72 rounded-md border border-gray-300 p-2"
    type="text"
    name="search"
    placeholder="Buscar filmes..."
    value=""
  />
  <button type="submit" class="rounded bg-blue-500 p-2 font-semibold uppercase text-white">Buscar</button>
</form>
