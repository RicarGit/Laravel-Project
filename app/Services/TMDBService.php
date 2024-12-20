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
}
