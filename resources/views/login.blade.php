@extends('layouts.app')

@section('content')
  <div class="header-height-remove mx-auto flex max-w-96 flex-col justify-center">
    <h1 class="tex-2xl mb-10 text-center text-3xl font-bold">Login</h1>
    <form method="POST" action="{{ route('login') }}">
      @csrf
      <div class="mb-4">
        <label for="email" class="block text-sm font-semibold">Email:</label>
        <input
          type="email"
          id="email"
          name="email"
          class="w-full rounded-md border-gray-300 p-2"
          required
        />
      </div>
      <div class="mb-8">
        <label for="password" class="block text-sm font-semibold">Senha:</label>
        <input
          type="password"
          id="password"
          name="password"
          class="w-full rounded-md border-gray-300 p-2"
          required
        />
      </div>
      <button type="submit"
        class="w-full rounded-md bg-blue-500 py-2 font-bold uppercase tracking-widest text-white">Login</button>
      <p class="mt-4 text-center text-sm font-semibold">
        Não tem conta? <a href="{{ route('signUpForm') }}" class="text-blue-500 underline">Crie uma aqui!</a>
      </p>
    </form>
  </div>
@endsection
