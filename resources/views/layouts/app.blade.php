<a class="sr-only focus:not-sr-only" href="#main">
    {{ __('Skip to content') }}
</a>


@include('sections.header')

<main id="main" class="main flex mt-4 p-4">
    
    <p class="text-gray-500 dark:text-gray-400"></p>
<hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
<p class="text-gray-500 dark:text-gray-400"></p>
    @yield('content') 

</main>

@hasSection('sidebar')
    <aside class="sidebar">
        @yield('sidebar')

    </aside>
@endif

@include('sections.footer')
