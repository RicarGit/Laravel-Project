<ul class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5">

  @foreach ($movies as $movie)
    <a href="{{ route('details', ['id' => $movie['id']]) }}">
      <li class="overflow-hidden rounded-lg bg-white shadow-md transition-all hover:scale-105 hover:cursor-pointer">
        <img
          src="https://image.tmdb.org/t/p/w500{{ $movie['poster_path'] }}"
          alt="{{ $movie['title'] }}"
          class="h-[400px] w-full"
          title="{{ $movie['title'] }}"
        >
        <div class="p-4">
          <h2 class="text-lg font-bold">
            {{ Str::substr($movie['title'], 0, 23) }}</h2>
          <p class="mt-2 text-gray-700">Nota: {{ number_format($movie['vote_average'], 1) }}</p>
        </div>
      </li>
    </a>
  @endforeach

</ul>
