<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class TMDBService {
  private string $baseUrl;
  private string $apiToken;

  public function __construct() {
    $this->baseUrl = env('TMDB_BASE_URL');
    $this->apiToken = env('TMDB_API_TOKEN');
  }

  public function getBaseUrl() {
    return $this->baseUrl;
  }

  public function getApiToken() {
    return $this->apiToken;
  }

  public function getApiKey() {
    return $this->apiToken;
  }

  public function getMovies(string $movieFilter, string $page) {
    $urlWithFilters = "/movie/$movieFilter?language=pt-BR&page=$page";

    $response = Http::withHeaders([
      'Authorization' => 'Bearer ' . $this->getApiToken(),
      'accept' => 'application/json',
    ])
      ->get($this->getBaseUrl() . $urlWithFilters);

    if ($response->failed()) {
      throw new \Exception('Ocorreu um erro, tente novamente mais tarde.');
    }

    return $response->json();
  }

  public function getMovieDetails(int $movieId) {
    $response = Http::withHeaders([
      'Authorization' => 'Bearer ' . $this->getApiToken(),
      'Accept' => 'application/json',
    ])->get($this->getBaseUrl() . "/movie/{$movieId}?language=pt-BR");

    if ($response->failed()) {
      throw new \Exception('Erro ao buscar detalhes do filme.');
    }

    return $response->json();
  }

  public function getMovieGenres() {
    $response = Http::withHeaders([
      'Authorization' => 'Bearer ' . $this->getApiToken(),
      'Accept' => 'application/json',
    ])->get($this->getBaseUrl() . '/genre/movie/list?language=pt-BR');

    if ($response->failed()) {
      throw new \Exception('Erro ao buscar gêneros.');
    }

    return $response->json()['genres'] ?? [];
  }

  public function getMoviesByGenre(string $genreName, string $page) {
    $response = Http::withHeaders([
      'Authorization' => 'Bearer ' . $this->getApiToken(),
      'accept' => 'application/json',
    ])->get($this->getBaseUrl() . "/discover/movie?language=pt-BR&page=$page&with_genres=$genreName");

    if ($response->failed()) {
      throw new \Exception('Erro ao buscar filmes por gênero.');
    }

    return $response->json();
  }

  public function searchMoviesByName(string $movieName, string $page) {
    $response = Http::withHeaders([
      'Authorization' => 'Bearer ' . $this->getApiToken(),
      'accept' => 'application/json',
    ])->get($this->getBaseUrl() . "/search/movie?language=pt-BR&query=" . urlencode($movieName) . "&page=$page");

    if ($response->failed()) {
      throw new \Exception('Erro ao buscar filmes pelo nome.');
    }

    return $response->json();
  }
}
