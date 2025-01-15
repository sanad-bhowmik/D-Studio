<div class="bg-white py-8" id="remoteService" style="padding-bottom: 0px; border-bottom: 3px solid #2f3543;font-family:sans-serif;">
    <div class="">
        <div class="flex flex-wrap" id="remote-services-section" style="font-family: 'Nunito', serif;">
            <!-- Left Text Section -->
            <div class="w-full lg:w-1/2 px-4" id="remote-services-left">
                @if($remoteServiceData)
                    {!! $remoteServiceData->details !!}
                @else
                    <p>No remote services data available at the moment.</p>
                @endif
                <div style="margin-top: 92px;background-color: #ffbe00;padding: 10px;margin-left: -97px;width: 130%;"></div>
            </div>

            <!-- Right Image Grid Section -->
            <div class="w-full lg:w-1/2 px-4 mt-8 lg:mt-0" id="remote-services-right" style="margin-top: 28px;">
                @if($remoteServiceData)
                    <div class="grid grid-cols-2 gap-2 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2" style="margin-top: 65px;">
                        @if($remoteServiceData->imgOne)
                        <div>
                            <img src="{{ asset($remoteServiceData->imgOne) }}" alt="Building Design 1" class="remote-image">
                        </div>
                        @endif
                        @if($remoteServiceData->imgTwo)
                        <div>
                            <img src="{{ asset($remoteServiceData->imgTwo) }}" alt="Building Design 2" class="remote-image">
                        </div>
                        @endif
                        @if($remoteServiceData->imgThree)
                        <div>
                            <img src="{{ asset($remoteServiceData->imgThree) }}" alt="Interior Design 1" class="remote-image">
                        </div>
                        @endif
                        @if($remoteServiceData->imgFour)
                        <div>
                            <img src="{{ asset($remoteServiceData->imgFour) }}" alt="Office Design" class="remote-image">
                        </div>
                        @endif
                    </div>
                @else
                    <p>No images available for remote services.</p>
                @endif
            </div>
        </div>
    </div>
</div>


<style>
    /* Mobile responsive styles */
    @media screen and (max-width: 768px) {
        #remote-services-section {
            flex-direction: column;
            /* Stack the two sections vertically */
        }

        /* Left Text Section */
        #remote-services-left {
            padding-left: 0;
            /* Remove left padding on mobile */
            text-align: center;
            /* Center-align text */
            padding-right: 15px;
            /* Ensure some padding on the right */
        }

        #remote-services-left h2 {
            font-size: 24px;
            /* Adjust font size for headings */
        }

        #remote-services-left p,
        #remote-services-left h3 {
            font-size: 16px;
            /* Adjust paragraph and subheading font sizes */
        }

        #remote-services-left ul {
            padding-left: 20px;
            /* Ensure proper padding for list items */
            text-align: left;
            /* Align list text to the left */
        }

        /* Right Image Grid Section */
        #remote-services-right {
            margin-top: 16px;
            /* Space between sections */
        }

        .remote-image {
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
        #remote-services-left {
            padding-left: 97px;
            /* Keep the original padding for larger screens */
            padding-right: 30px;
        }

        #remote-services-left h2 {
            font-size: 32px;
            /* Larger font size for headings on large screens */
        }

        #remote-services-left p,
        #remote-services-left h3 {
            font-size: 18px;
            /* Larger font size for paragraphs and subheadings */
        }

        .remote-image {
            width: 100%;
            height: auto;
            max-width: 100%;
        }

        .grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }
</style>
