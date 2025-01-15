<div class="bg-white py-8" id="about-us-section">
    <div>
        <h1 class="about-us-title" style="font-family: math; text-transform: uppercase; font-size: 27px; margin-right: 10%; text-align:end;">
            About Us
        </h1>
        <div class="flex flex-wrap items-center about-us-content" style="border-top: 2px solid #2f3543; border-bottom: 2px solid #2f3543;">
            <!-- Left Image -->
            <div class="w-full md:w-1/3 about-us-image">
                <img src="{{ asset($aboutData->leftImg) }}" alt="Globe" class="w-full h-auto" id="about-us-globe">
            </div>

            <!-- Right Text -->
            <div class="w-full md:w-2/3 px-4 md:px-16 about-us-text">
                <div class="flex flex-col md:flex-row justify-between">
                    <!-- Vision Section -->
                    <div class="mb-8 md:mb-0 md:mr-8 about-us-vision" style="margin-top: 26%;">
                        <h3 class="text-lg text-gray-800 mb-2" style="font-weight: 600;">Vision:</h3>
                        <p class="text-gray-700">
                            {{ $aboutData->vision ?? 'No vision available' }}
                        </p>
                    </div>

                    <!-- Mission Section -->
                    <div class="text-end w-full md:w-2/3 about-us-mission">
                        <!-- Mission Image -->
                        <div class="mb-4">
                            <img src="{{ asset($aboutData->rightImg) }}" alt="Mission Image" class="w-full h-auto" style="margin-top: -9%;" id="about-us-map">
                        </div>

                        <!-- Mission Text -->
                        <h3 class="text-lg text-gray-800 mb-2" style="font-weight: 600;">Mission:</h3>
                        <p class="text-gray-700">
                            {{ $aboutData->mission ?? 'No mission available' }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Mobile responsive styles */
    @media screen and (max-width: 768px) {
        #about-us-section .about-us-title {
            font-size: 24px;
            margin-right: 5%;
        }

        .about-us-content {
            flex-direction: column;
            align-items: center;
        }

        .about-us-image,
        .about-us-text {
            width: 100% !important;
        }

        .about-us-vision,
        .about-us-mission {
            text-align: center;
        }

        /* Ensuring the images are responsive */
        .about-us-image img,
        .about-us-mission img {
            max-width: 100%;
            height: auto;
        }

        /* Adjust margin for mobile */
        .about-us-vision,
        .about-us-mission {
            margin-bottom: 3rem;
        }
    }
</style>
