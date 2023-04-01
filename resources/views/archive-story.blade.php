{{-- //story view --}}

@extends('layouts.app')
@section('content')
    <div class="container m-auto">
        @include('partials.page-header')

        <div class="flex ">
            @include('partials.subscribe')
        </div>

        @if (!have_posts())
            <x-alert type="warning">
                {!! __('Sorry, no results were found.', 'sage') !!}
            </x-alert>
            {!! get_search_form(false) !!}
        @endif

        <div class="flex flex-wrap">
        
            @while (have_posts())
                @php(the_post())
                @includeFirst(['partials.content-story', 'partials.content'])
            @endwhile

            {!! get_the_posts_navigation() !!}
           

        </div>
    </div>
@endsection
