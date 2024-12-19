@extends('layouts.app')

@section('content')
  <div class="header-height-remove">
    <h1 class="py-8 text-4xl font-bold">{{ $movie['title'] }}</h1>

    <div class="flex flex-col gap-5 md:flex-row">
      <img
        class="w-full rounded md:w-[350px]"
        src="https://image.tmdb.org/t/p/w500{{ $movie['poster_path'] }}"
        alt="{{ $movie['title'] }}"
      >

      <div class="flex flex-col gap-2 text-lg text-gray-800 md:w-1/2">
        <p class="mb-5">
          <strong>Descrição:</strong> {{ $movie['overview'] }}
        </p>

        <p>
          <strong>Lançamento:</strong> {{ \Carbon\Carbon::parse($movie['release_date'])->format('d/m/Y') }}
        </p>

        <p>
          <strong>Gêneros:</strong>
          {{ array_reduce(
              $movie['genres'],
              function ($carry, $genre) {
                  return $carry . ($carry ? ', ' : '') . $genre['name'];
              },
              '',
          ) }}
        </p>

        <p>
          <strong>Duração:</strong> {{ $movie['runtime'] }} minutos
        </p>

        <p>
          <strong>Orçamento:</strong> ${{ number_format($movie['budget'], 2, ',', '.') }}
        </p>

        <p>
          <strong>Nota média:</strong> {{ $movie['vote_average'] }} ({{ $movie['vote_count'] }} votos)
        </p>

        <p>
          <strong>Produção:</strong>
          {{ array_reduce(
              $movie['production_companies'],
              function ($carry, $genre) {
                  return $carry . ($carry ? ', ' : '') . $genre['name'];
              },
              '',
          ) }}
        </p>
      </div>
    </div>
  @endsection
</div>
