<div class="bg-white py-8" id="service"
    style="padding-bottom: 0px; border-bottom: 3px solid #2f3543;font-family: 'Nunito', serif;">
    <div class="">
        <div class="flex flex-wrap" id="urban-services-section">
            <!-- Left Text Section -->
            <div class="w-full lg:w-1/2 px-4" id="urban-services-left">
                @if($upIdea)
                    {!! $upIdea->details !!}
                @else
                    <p>No urban services data available at the moment.</p>
                @endif
                <div style="margin-top: 74px;background-color: #ffbe00;padding: 10px;margin-left: -97px;width: 129%;">
                </div>
            </div>

            <!-- Right Image Grid Section -->
            <div class="w-full lg:w-1/2 px-4 mt-8 lg:mt-0" id="urban-services-right">
                @if($upIdea)
                    <div class="grid grid-cols-2 gap-2 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2"
                        style="margin-top: 39px;">
                        @if($upIdea->imgOne)
                            <div>
                                <img src="{{ asset($upIdea->imgOne) }}" alt="Building Design 1" class="urban-image">
                            </div>
                        @endif
                        @if($upIdea->imgTwo)
                            <div>
                                <img src="{{ asset($upIdea->imgTwo) }}" alt="Building Design 2" class="urban-image">
                            </div>
                        @endif
                        @if($upIdea->imgThree)
                            <div>
                                <img src="{{ asset($upIdea->imgThree) }}" alt="Interior Design 1" class="urban-image">
                            </div>
                        @endif
                        @if($upIdea->imgFour)
                            <div>
                                <img src="{{ asset($upIdea->imgFour) }}" alt="Office Design" class="urban-image">
                            </div>
                        @endif
                    </div>
                @else
                    <p>No images available for urban services.</p>
                @endif
            </div>
        </div>
    </div>
</div>

<style>
    @media screen and (max-width: 768px) {
        #upload-idea-section {
            flex-direction: column;
        }

        #upload-idea-left {
            padding-left: 0;
            text-align: center;
            padding-right: 15px;
        }

        #upload-idea-left h2 {
            font-size: 24px;
        }

        #upload-idea-left p,
        #upload-idea-left h3 {
            font-size: 16px;
        }

        #upload-idea-left ul {
            padding-left: 20px;
            text-align: left;
        }

        #upload-idea-right {
            margin-top: 16px;
        }

        .upload-image {
            width: 100%;
            height: auto;
            max-width: 100%;
        }

        .grid {
            grid-template-columns: 1fr;
            gap: 10px;
        }

        .grid div {
            margin-bottom: 10px;
        }
    }

    @media screen and (min-width: 769px) {
        #upload-idea-left {
            padding-left: 97px;
            padding-right: 30px;
        }

        #upload-idea-left h2 {
            font-size: 32px;
        }

        #upload-idea-left p,
        #upload-idea-left h3 {
            font-size: 18px;
        }

        .upload-image {
            width: 100%;
            height: auto;
            max-width: 100%;
        }

        .grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }
</style>
