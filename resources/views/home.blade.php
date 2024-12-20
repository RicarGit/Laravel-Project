@extends('layouts.app')

@section('content')

    <x-filters>
      <x-movie-filter :movieFilter="$movieFilter" :filters="$filters" />
      <x-movie-filter-genre :genres="$genres" :genreName="$genreName" />
    </x-filters>

    <x-search-input :movieName="$movieName" />
  </div>

  <x-movie-pagination
    :movieFilter="$movieFilter"
    :currentPage="$currentPage"
    :totalPages="$totalPages"
  />
  <x-movie-card :movies=$movies />

  <x-movie-pagination
    :movieFilter="$movieFilter"
    :currentPage="$currentPage"
    :totalPages="$totalPages"
  />
@endsection
