<form role="search" method="get" class="search-form" action="{{ home_url('/') }}">
  <label>
    <span class="sr-only">
      {{ _x('Search for:', 'label', 'sage') }}
    </span>

    <input
      type="search"
      placeholder="Search client stories"
      value="{{ get_search_query() }}"
      name="s"
      class="block text-black text-m mb-2 py-2 px-3 border-blue border-2 rounded-lg"
    >
    <button>{{ _x('Search', 'submit button', 'sage') }}</button>
  </label>

  

  
</form>
