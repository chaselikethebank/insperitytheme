<div class="Subscription flex mb-4 w-full">
    <div class="p-2 w-full bg-blue-950 h-75 text-white font-bold">
        <h2 class="h-20 align-center text-center text-2xl mt-5">
            Subscribe to the Insperity blog
        </h2>
        <div class="flex pb-4">
            <div class="w-1/2 mt-5 pl-20 font-light">
                <ul>
                    <li class="mb-4 ml-20">
                        ✅ 600+ articles with the latest HR insights
                    </li>
                    <li class="mb-4 ml-20">
                        ✅ Articles sent to your inbox twice a week
                    </li>
                    <li class="mb-4 ml-20">✅ Proven advice from 100+ HR experts</li>
                </ul>
            </div>
            <div class="w-1/2 h-30 mb-4">
                <p class="text-xl">Join 20,000+ business leaders by signing up.</p>
                {{-- Gravity Forms Plugin Goes here --}}
                <div class="flex mb-4">
                    <div class="w-1/3 h-12">
                        {{-- FACEBOOK btn, interactiving, hand pointing on hover --}}
                        <button type="button" class="border-white cursor-pointer rounded-sm bg-blue-900">
                            FACEBOOK +
                        </button>
                    </div>
                    <div class="w-1/3 h-12">
                        {{-- Google btn interactiving, hand pointing hover --}}
                        <button type="button" class="border-white cursor-pointer rounded-sm bg-blue-900">
                            GOOGLE +
                        </button>
                    </div>
                    <div class="w-1/3 h-12">{{-- blank space --}}</div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- @includeFirst(['partials.content-single-' . get_post_type(), 'partials.content-single']) --}}
