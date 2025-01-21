<div id="blog-section" class="bg-white container mx-auto px-4 sm:px-6 lg:px-8"
    style="border-bottom: 20px solid #ffbe00;text-align: justify;">
    <div id="blog-content"
        class="max-w-screen-xl mx-auto pt-12 pb-16 sm:pt-16 sm:pb-20 px-4 sm:px-6 lg:pt-20 lg:pb-28 lg:px-8" style="width: 1041px;
        padding-right: 10px;">
        <h2 id="blog-title" class="text-2xl sm:text-3xl font-bold text-gray-900">
            BLOG
        </h2>
        <div id="blog-grid" class="mt-4" style="font-size: 18px;font-family: 'Nunito', serif;">
            <div id="blog-columns" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-x-16 gap-y-12">
                @foreach ($recentBlogs as $blog)
                    <!-- Dynamic Blog Card -->
                    <dl class="space-y-4">
                        <dd>
                            <p class="leading-6 text-xl text-gray-800" style="font-size: 10px;">
                                {!! $blog->details !!}
                            </p>
                        </dd>
                    </dl>
                @endforeach
            </div>
        </div>
    </div>
</div>


<style>
    #blog-section {
        border-bottom: 4px solid #ffbe00;
    }

    @media screen and (max-width: 768px) {
        #blog-columns {
            grid-template-columns: 1fr;
        }

        #blog-right-content,
        #blog-right-content2 {
            text-align: left;
        }

        #blog-content {
            width: 364px !important;
        }

        #blog-title {
            font-size: 24px;
        }

        .font-medium {
            font-size: 16px;
        }

        .leading-6 {
            line-height: 1.5;
        }

        .mt-4 {
            margin-top: 1rem;
        }
    }

    @media screen and (min-width: 769px) {
        #blog-columns {
            grid-template-columns: repeat(2, 1fr);
        }

        #blog-title {
            font-size: 28px;
        }

        .font-medium {
            font-size: 18px;
        }

        .leading-6 {
            line-height: 1.75;
        }
    }
</style>
