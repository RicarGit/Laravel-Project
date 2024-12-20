<?php

namespace App\Http\Controllers;

use App\Services\TMDBService;
use Illuminate\Http\Request;

class HomeController extends Controller {
  private TMDBService $tmdbService;

  public function __construct(TMDBService $tmdbService) {
    $this->tmdbService = $tmdbService;
  }

  public function index() {
    $movies = $this->tmdbService->getMovies();

    return view('home', ['movies' => $movies['results'] ?? []]);
    $genreName = $request->query('genre', '');
    $movieName = $request->query('movieName', '');
    $genres = $this->tmdbService->getMovieGenres();

    return view(
      'home',
      [
        'movies' => $movies['results'] ?? [],
        'genres' => $genres,
        'genreName' => $genreName,
      ]
    );
  }
}
