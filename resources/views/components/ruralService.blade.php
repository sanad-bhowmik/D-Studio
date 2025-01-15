<div class="bg-white py-8" id="ruralService"
    style="padding-bottom: 0px; border-bottom: 3px solid #2f3543;font-family:sans-serif;">
    <div class="">
        <div class="flex flex-wrap" id="rural-services-section" style="font-family: 'Nunito', serif;">
            <!-- Left Text Section -->
            <div class="w-full lg:w-1/2 px-4" id="rural-services-left">
                @if($ruralServiceData)
                    {!! $ruralServiceData->details !!}
                @else
                    <p>No rural services data available at the moment.</p>
                @endif
                <div style="margin-top: 137px;background-color: #ffbe00;padding: 10px;margin-left: -97px;width: 129%;">
                </div>
            </div>

            <!-- Right Image Grid Section -->
            <div class="w-full lg:w-1/2 px-4 mt-8 lg:mt-0" id="rural-services-right">
                @if($ruralServiceData)
                    <div class="grid grid-cols-2 gap-2 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2"
                        style="margin-top: 39px;">
                        @if($ruralServiceData->imgOne)
                            <div>
                                <img src="{{ asset($ruralServiceData->imgOne) }}" alt="Building Design 1" class="rural-image">
                            </div>
                        @endif
                        @if($ruralServiceData->imgTwo)
                            <div>
                                <img src="{{ asset($ruralServiceData->imgTwo) }}" alt="Building Design 2" class="rural-image">
                            </div>
                        @endif
                        @if($ruralServiceData->imgThree)
                            <div>
                                <img src="{{ asset($ruralServiceData->imgThree) }}" alt="Interior Design 1" class="rural-image">
                            </div>
                        @endif
                        @if($ruralServiceData->imgFour)
                            <div>
                                <img src="{{ asset($ruralServiceData->imgFour) }}" alt="Office Design" class="rural-image">
                            </div>
                        @endif
                    </div>
                @else
                    <p>No images available for rural services.</p>
                @endif
            </div>
        </div>
    </div>
</div>

<style>
    /* Mobile responsive styles */
    @media screen and (max-width: 768px) {
        #rural-services-section {
            flex-direction: column;
            /* Stack the two sections vertically */
        }

        /* Left Text Section */
        #rural-services-left {
            padding-left: 0;
            /* Remove left padding on mobile */
            text-align: center;
            /* Center-align text */
            padding-right: 15px;
            /* Ensure some padding on the right */
        }

        #rural-services-left h2 {
            font-size: 24px;
            /* Adjust font size for headings */
        }

        #rural-services-left p,
        #rural-services-left h3 {
            font-size: 16px;
            /* Adjust paragraph and subheading font sizes */
        }

        #rural-services-left ul {
            padding-left: 20px;
            /* Ensure proper padding for list items */
            text-align: left;
            /* Align list text to the left */
        }

        /* Right Image Grid Section */
        #rural-services-right {
            margin-top: 16px;
            /* Space between sections */
        }

        .rural-image {
            width: 100%;
            /* Ensure images scale with the container */
            height: auto;
            /* Maintain aspect ratio */
            max-width: 100%;
            /* Prevent stretching */
        }

        .grid {
            grid-template-columns: 1fr;
            /* Stack the images vertically */
            gap: 10px;
            /* Add spacing between images */
        }

        .grid div {
            margin-bottom: 10px;
            /* Add some space between the images */
        }
    }

    /* For larger screens (e.g., desktops) */
    @media screen and (min-width: 769px) {
        #rural-services-left {
            padding-left: 97px;
            /* Keep the original padding for larger screens */
            padding-right: 30px;
        }

        #rural-services-left h2 {
            font-size: 32px;
            /* Larger font size for headings on large screens */
        }

        #rural-services-left p,
        #rural-services-left h3 {
            font-size: 18px;
            /* Larger font size for paragraphs and subheadings */
        }

        .rural-image {
            width: 100%;
            /* Ensure images scale with the container */
            height: auto;
            /* Maintain aspect ratio */
            max-width: 100%;
            /* Prevent stretching */
        }

        .grid {
            grid-template-columns: repeat(2, 1fr);
            /* Two columns for larger screens */
        }
    }
</style>
