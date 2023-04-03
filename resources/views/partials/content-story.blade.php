<div class="w-full flex:2 md:w-1/2">
    
    <div class="box-content m-2 shadow-md p-4 rounded-md bg-sky-50">
        <article
            @php(post_class())>
            <img class="p1 rounded-tr rounded-tl " src="<?php the_post_thumbnail_url(); ?>" />
            <div>
                <div class="pl-2 pb-1 pt-1 text-white font-semibold bg-blue-900 box-content w-40 shadow-md rounded-br-lg">
                    <?php $terms = get_the_terms($post->ID, 'content-type'); ?>
                    @if ($terms)
                        @foreach ($terms as $term)
                             {{ $term->name }}
                        @endforeach
                    @endif
            </div>
    </div>
    <header>
        <h2 class="entry-title font-bold text-xl font-serif text-sky-950 justify-center py-2 px-3 text-blue-900">
            <a href="{{ get_permalink() }}">
                {!! $title !!}
            </a>
        </h2>
    </header>
    <div class="entry-summary justify-center p-2">
        @php(the_excerpt())
    </div>
    </article>
</div>
</div>
