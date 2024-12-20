<div class="pagination my-4 flex items-center justify-center gap-4">
  <!-- First page -->
  @if ($currentPage > 1)
    <a href="{{ route('home', ['filter' => $movieFilter, 'page' => 1]) }}"
      class="rounded-md bg-gray-600 px-3 py-1 text-white"
    >
      << </a>
  @endif

  <!-- Previous page -->
  @if ($currentPage > 1)
    <a href="{{ route('home', ['filter' => $movieFilter, 'page' => $currentPage - 1]) }}"
      class="rounded-md bg-gray-600 px-3 py-1 text-white"
    >
      < </a>
  @endif

  <!-- Next page -->
  @if ($currentPage < $totalPages)
    <a href="{{ route('home', ['filter' => $movieFilter, 'page' => $currentPage + 1]) }}"
      class="rounded-md bg-gray-600 px-3 py-1 text-white"
    >
      >
    </a>
  @endif

  <!-- Last page -->
  @if ($currentPage < $totalPages)
    <a href="{{ route('home', ['filter' => $movieFilter, 'page' => $totalPages]) }}"
      class="rounded-md bg-gray-600 px-3 py-1 text-white"
    >
      >>
    </a>
  @endif
</div>
