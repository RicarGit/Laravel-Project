<?php

namespace App\Http\Controllers;

use App\Services\TMDBService;
use Illuminate\Http\Request;

class MovieDetailsController extends Controller {
  private TMDBService $tmdbService;

  public function __construct(TMDBService $tmdbService) {
    $this->tmdbService = $tmdbService;
  }

  public function movieDetails(int $id) {
    $movie = $this->tmdbService->getMovieDetails($id);

    return view('movie-details', ['movie' => $movie ?? []]);
  }
}
