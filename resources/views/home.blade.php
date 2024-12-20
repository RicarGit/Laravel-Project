@extends('layouts.app')

@section('content')
  <div class="w-full flex justify-between">
    <h1 class="text-4xl font-bold my-8">Filmes Populares</h1>
    <x-search-input />
      <x-movie-filter-genre :genres="$genres" :genreName="$genreName" />
  </div>

  <x-movie-card :movies="$movies" />
@endsection
