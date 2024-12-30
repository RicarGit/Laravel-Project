<header class="fixed top-0 z-10 flex h-20 w-full items-center bg-white font-semibold text-gray-500 shadow-md">
  <div class="container mx-auto flex items-center justify-between px-5">
    <a href="{{ route('home') }}" class="text-2xl font-bold">Filmes App</a>
    <div class="flex items-center gap-4">
      <a href="{{ route('login') }}"
        class="rounded-md border-2 border-blue-500 px-4 py-2 font-bold uppercase text-blue-500"
      >Entrar</a>
      <a href="{{ route('sign-up') }}" class="rounded-md bg-blue-500 px-4 py-2 uppercase text-white">Criar Conta</a>
      {{-- <p>Usuário</p>
      <div class="size-10 rounded-[50%] bg-gray-700"></div> --}}
    </div>
  </div>
  </div>
</header>
