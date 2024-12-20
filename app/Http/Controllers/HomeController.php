<?php

namespace App\Http\Controllers;

use App\Services\TMDBService;
use Illuminate\Http\Request;

class HomeController extends Controller {
  private TMDBService $tmdbService;

  public function __construct(TMDBService $tmdbService) {
    $this->tmdbService = $tmdbService;
  }

  public function index(Request $request) {
  public function index() {
    $movies = $this->tmdbService->getMovies();

    return view('home', ['movies' => $movies['results'] ?? []]);
    $filters = [
      'popular' => 'Populares',
      'top_rated' => 'Mais Votados',
      'upcoming' => 'Próximos Lançamentos',
      'now_playing' => 'Lançamentos Recentes',
    ];

    $movieFilter = $request->query('filter', 'popular');
    $genreName = $request->query('genre', '');
    $movieName = $request->query('movieName', '');
    $currentPage = $request->query('page', 1);

    if ($movieName) {
      $movies = $this->tmdbService->searchMoviesByName($movieName, $currentPage);
    } elseif ($genreName) {
      $movies = $this->tmdbService->getMoviesByGenre($genreName, $currentPage);
    } else {
      $movies = $this->tmdbService->getMovies($movieFilter, $currentPage);
    }

    $genres = $this->tmdbService->getMovieGenres();

    return view(
      'home',
      [
        'movies' => $movies['results'] ?? [],
        'movieFilter' => $movieFilter,
        'filters' => $filters,
        'genres' => $genres,
        'genreName' => $genreName,
        'movieName' => $movieName,
      ]
    );
  }
}
