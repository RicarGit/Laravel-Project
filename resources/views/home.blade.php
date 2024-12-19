@extends('layouts.app')

@section('content')
  <div class="w-full flex justify-between">
    <h1 class="text-4xl font-bold my-8">Filmes Populares</h1>
  </div>

  <x-movie-card :movies="$movies" />
@endsection
