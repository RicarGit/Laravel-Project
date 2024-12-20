@extends('layouts.app')

@section('content')

    <x-filters>
      <x-movie-filter :movieFilter="$movieFilter" :filters="$filters" />
      <x-movie-filter-genre :genres="$genres" :genreName="$genreName" />
    </x-filters>
  </div>

  <x-movie-card :movies="$movies" />
@endsection
