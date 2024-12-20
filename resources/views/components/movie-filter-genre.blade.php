<form
  class="w-full"
  method="GET"
  action="{{ route('home') }}"
>
  <select
    name="genre"
    class="w-full rounded-md border border-gray-300 bg-white p-2"
    onchange="this.form.submit()"
  >
    <option value="">-- Filmes por Gênero --</option>
    @foreach ($genres as $genre)
      <option value="{{ Str::slug($genre['name']) }}" {{ $genreName === Str::slug($genre['name']) ? 'selected' : '' }}>
        {{ $genre['name'] }}
      </option>
    @endforeach
  </select>
</form>
