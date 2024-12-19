<ul class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">

  @foreach ($movies as $movie)
    <a href="{{ route('details', ['id' => $movie['id']]) }}">
      <li class="bg-white shadow-md rounded-lg overflow-hidden hover:scale-105 transition-all hover:cursor-pointer">
        <img
          src="https://image.tmdb.org/t/p/w500{{ $movie['poster_path'] }}"
          alt="{{ $movie['title'] }}"
          class="w-full h-[400px]"
        >
        <div class="p-4">
          <h2 class="text-lg font-bold">{{ $movie['title'] }}</h2>
          <p class="text-gray-700 mt-2">Nota: {{ number_format($movie['vote_average'], 1) }}</p>
        </div>
      </li>
    </a>
  @endforeach

</ul>
