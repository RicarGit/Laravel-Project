@extends('layouts.app')

@section('content')
  <div class="flex w-full justify-between">
    <h1 class="my-8 text-4xl font-bold">{{ $filters[$movieFilter] }}</h1>

    <x-filters-nav>
      <x-movie-filter :movieFilter="$movieFilter" :filters="$filters" />
      <x-movie-filter-genre :genres="$genres" :genreName="$genreName" />
    </x-filters-nav>

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
