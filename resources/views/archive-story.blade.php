{{-- //story view --}}

@extends('layouts.app')



@section('content')
    <div class="container m-auto">
        @include('partials.page-header')

        <div class="flex ">
        </div>
        <div class="flex ">

            <div class="flex:1 p-10 m-10">
              @include('forms.search')
              @include('forms.filter')
            </div>
            <div class=" ">
                @if (!have_posts())
                    <x-alert type="warning">
                        {!! __('Sorry, no results were found.', 'sage') !!}
                    </x-alert>
                    {!! get_search_form(false) !!}
                @endif
                
                <div class="p-3 m-2 text-2xl text-blue-900 font-serif tracking-wider">Client stories</div>
                <div class="flex flex-wrap flex:3 ">
                  
                    @while (have_posts())
                        @php(the_post())
                        @includeFirst(['partials.content-story', 'partials.content'])
                    @endwhile

                    {!! get_the_posts_navigation() !!}

                </div>
            </div>
        </div>
    </div>
@endsection
