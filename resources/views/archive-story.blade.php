{{-- //story view --}}

@extends('layouts.app')

@section('content')

  @include('partials.page-header')
  @include('partials.subscribe')
asdf
  @if (! have_posts())
    <x-alert type="warning">
      {!! __('Sorry, no results were found.', 'sage') !!}
    </x-alert>

    {!! get_search_form(false) !!}
  @endif

  <div class="flex">
  @while(have_posts()) @php(the_post())
  <div class="w-120 flex-2">
    @includeFirst(['partials.content-story', 'partials.content'])
  </div>
  @endwhile
  </div>

  {!! get_the_posts_navigation() !!}
@endsection
{{-- 
@section('sidebar')
  @include('sections.sidebar')
@endsection --}}
