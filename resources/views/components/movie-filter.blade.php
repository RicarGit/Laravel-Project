<form
  class="w-full"
  method="GET"
  action="{{ route('home') }}"
>
  <select
    name="filter"
    class="w-full rounded-md border border-gray-300 bg-white p-2"
    onchange="this.form.submit()"
  >
    @foreach ($filters as $key => $filter)
      <option value="{{ $key }}" {{ $movieFilter === $key ? 'selected' : '' }}>
        {{ $filter }}
      </option>
    @endforeach
  </select>
</form>
