@extends('layouts.app')

@section('content')
      <x-movie-filter :movieFilter="$movieFilter" :filters="$filters" />
      <x-movie-filter-genre :genres="$genres" :genreName="$genreName" />
  </div>

  <x-movie-card :movies="$movies" />
@endsection
