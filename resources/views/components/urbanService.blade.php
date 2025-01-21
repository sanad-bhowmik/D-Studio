<div class="bg-white py-8" id="service"
    style="padding-bottom: 0px; border-bottom: 3px solid #2f3543;font-family: 'Nunito', serif;">
    <div class="relative">
        <div class="flex flex-wrap" id="urban-services-section">
            <!-- Left Text Section -->
            <div class="w-full lg:w-1/2 px-4" id="urban-services-left" style="padding-left: 118px;
        padding-right: 0px;">
                @if($urbanServiceData)
                    {!! $urbanServiceData->details !!}
                @else
                    <p>No urban services data available at the moment.</p>
                @endif
                <!-- Yellow fixed bar -->
                <div class="fixed-bar"></div>
            </div>

            <!-- Right Image Grid Section -->
            <div class="w-full lg:w-1/2 px-4 mt-8 lg:mt-0" id="urban-services-right">
                @if($urbanServiceData)
                    <div class="grid grid-cols-2 gap-2 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2"
                        style="margin-top: -5px;">
                        @if($urbanServiceData->imgOne)
                            <div>
                                <img src="{{ asset($urbanServiceData->imgOne) }}" alt="Building Design 1" class="urban-image">
                            </div>
                        @endif
                        @if($urbanServiceData->imgTwo)
                            <div>
                                <img src="{{ asset($urbanServiceData->imgTwo) }}" alt="Building Design 2" class="urban-image">
                            </div>
                        @endif
                        @if($urbanServiceData->imgThree)
                            <div>
                                <img src="{{ asset($urbanServiceData->imgThree) }}" alt="Interior Design 1" class="urban-image">
                            </div>
                        @endif
                        @if($urbanServiceData->imgFour)
                            <div>
                                <img src="{{ asset($urbanServiceData->imgFour) }}" alt="Office Design" class="urban-image">
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
    .fixed-bar {
        position: absolute;
        bottom: 0;
        left: 0;
        background-color: #ffbe00;
        padding: 10px;
        margin-left: -0;
        width: 640px;
        height: auto;
        z-index: 10;
    }

    /* Mobile responsive styles */
    @media screen and (max-width: 768px) {
        #urban-services-section {
            flex-direction: column;
        }

        #urban-services-left {
            padding-left: 17px !important;
            text-align: left !important;
            padding-right: 15px;
        }

        #urban-services-left h2 {
            font-size: 24px;
        }

        #urban-services-left p,
        #urban-services-left h3 {
            font-size: 16px;
        }

        #urban-services-left ul {
            padding-left: 20px;
            text-align: left;
        }

        #urban-services-right {
            margin-top: 16px;
        }

        .urban-image {
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

        .fixed-bar {
            margin-left: 0;
            width: 100%;
        }
    }

    @media screen and (min-width: 769px) {
        #urban-services-left {
            padding-left: 97px;
            padding-right: 30px;
        }

        #urban-services-left h2 {
            font-size: 32px;
        }

        #urban-services-left p,
        #urban-services-left h3 {
            font-size: 18px;
        }

        .urban-image {
            width: 100%;
            height: auto;
            max-width: 100%;
        }

        .grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }
</style>
