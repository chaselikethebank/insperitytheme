

        <div class="flex mb-4 w-full">
            <div class="w-full bg-blue-900 h-80">
                <h2 class="text-white h-20">Subscribe to the Insperity blog</h2>
                <div class="flex mb-4">
                    <div class="w-1/2  h-30">
                        <ul>
                            <li>
                                ✅ 600+ articles with the latest HR insights
                            </li>
                            <li>
                                ✅ Articles sent to your inbox twice a week
                            </li>
                            <li>
                                ✅ Proven advice from 100+ HR experts
                            </li>
                        </ul>
                    </div>
                    <div class="w-1/2 h-30">
                        <p class="h5">Join 20,000+ business leaders by signing up.</p>
                        {{-- Gravity Forms Plugin Goes here --}}
                        <div class="flex mb-4">
                            <div class="w-1/3 h-12">
                                {{-- FACEBOOK button goes here
                          with interactiving, hand pointing on hover --}}
                                <button type="button" class="border-white cursor-pointer rounded-sm bg-blue-900">
                                    FACEBOOK +
                                </button>
                            </div>
                            <div class="w-1/3 h-12">
                                {{-- Google button goes here
                          with interactiving, hand pointing on hover --}}
                                <button type="button" class="border-white cursor-pointer rounded-sm bg-blue-900">
                                    GOOGLE +
                                </button>
                            </div>
                            <div class="w-1/3 h-12">
                                {{-- blank space --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        
        {{-- @includeFirst(['partials.content-single-' . get_post_type(), 'partials.content-single']) --}}
